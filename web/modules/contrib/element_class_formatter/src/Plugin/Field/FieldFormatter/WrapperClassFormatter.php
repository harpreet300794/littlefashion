<?php

namespace Drupal\element_class_formatter\Plugin\Field\FieldFormatter;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Link;
use Drupal\Core\Render\RendererInterface;
use Drupal\Core\Template\Attribute;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * A field formatter for wrapping text with a class.
 *
 * @FieldFormatter(
 *   id = "wrapper_class",
 *   label = @Translation("Wrapper (with class)"),
 *   field_types = {
 *     "email",
 *     "string",
 *     "string_long",
 *     "text",
 *     "text_long",
 *     "text_with_summary"
 *   }
 * )
 */
class WrapperClassFormatter extends FormatterBase {

  use ElementClassTrait;

  public function __construct(
    $plugin_id,
    $plugin_definition,
    FieldDefinitionInterface $field_definition,
    array $settings,
    $label,
    $view_mode,
    array $third_party_settings,
    protected RendererInterface $renderer,
  ) {
    parent::__construct(
      $plugin_id,
      $plugin_definition,
      $field_definition,
      $settings,
      $label,
      $view_mode,
      $third_party_settings
    );
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $plugin_id,
      $plugin_definition,
      $configuration['field_definition'],
      $configuration['settings'],
      $configuration['label'],
      $configuration['view_mode'],
      $configuration['third_party_settings'],
      $container->get('renderer'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    $default_settings = parent::defaultSettings() + [
      'link' => '0',
      'link_class' => '',
      'tag' => 'div',
      'summary' => FALSE,
      'trim' => 200,
    ];

    return self::elementClassDefaultSettings($default_settings);
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $elements = parent::settingsForm($form, $form_state);
    $class = $this->getSetting('class');

    $elements['link'] = [
      '#title' => $this->t('Link to the Content'),
      '#type' => 'checkbox',
      '#description' => $this->t('Wrap the text with a link to the content.'),
      '#default_value' => $this->getSetting('link'),
    ];

    $elements['link_class'] = [
      '#title' => $this->t('Link class'),
      '#type' => 'textfield',
      '#default_value' => $this->getSetting('link_class'),
      '#states' => [
        'visible' => [
          ':input[name$="[link]"]' => ['checked' => TRUE],
        ],
      ],
    ];

    $wrapper_options = [
      'span' => 'span',
      'div' => 'div',
      'p' => 'p',
      'strong' => 'strong',
    ];
    foreach (range(1, 5) as $level) {
      $wrapper_options['h' . $level] = 'H' . $level;
    }

    $elements['tag'] = [
      '#title' => $this->t('Tag'),
      '#type' => 'select',
      '#description' => $this->t('Select the tag which will be wrapped around the text.'),
      '#options' => $wrapper_options,
      '#default_value' => $this->getSetting('tag'),
    ];

    $elements['summary'] = [
      '#title' => $this->t('Use summary'),
      '#type' => 'checkbox',
      '#description' => $this->t('Output the summary instead of the field value.'),
      '#default_value' => $this->getSetting('summary'),
      '#access' => $this->fieldDefinition->getType() === 'text_with_summary',
    ];

    $elements['trim'] = [
      '#title' => $this->t('Trim'),
      '#type' => 'number',
      '#min' => 1,
      '#description' => $this->t('Trim length of value when summary is not set.'),
      '#default_value' => $this->getSetting('trim'),
      '#access' => $this->fieldDefinition->getType() === 'text_with_summary',
    ];

    return $this->elementClassSettingsForm($elements, $class);
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = parent::settingsSummary();
    $class = $this->getSetting('class');
    if ($linked = $this->getSetting('link')) {
      $summary[] = $this->t('Link: @link', ['@link' => $linked ? 'yes' : 'no']);
      if ($linked_class = $this->getSetting('link_class')) {
        $summary[] = $this->t('Link class: @link_class', ['@link_class' => $linked_class]);
      }
    }
    if ($this->getSetting('summary')) {
      $summary[] = $this->t('Output: Summary if present, otherwise the value trimmed to %char characters', [
        '%char' => $this->getSetting('trim'),
      ]);
    }
    if ($tag = $this->getSetting('tag')) {
      $summary[] = $this->t('Tag: @tag', ['@tag' => $tag]);
    }

    return $this->elementClassSettingsSummary($summary, $class);
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode = NULL) {
    $elements = [];
    $attributes = new Attribute();
    $class = $this->getSetting('class');
    if (!empty($class)) {
      $attributes->addClass($class);
    }

    $parent = $items->getParent()->getValue();
    foreach ($items as $delta => $item) {
      if (!empty($item->format)) {
        $text = [
          '#type' => 'processed_text',
          '#text' => $item->value,
          '#format' => $item->format,
          '#langcode' => $item->getLangcode(),
        ];
      }
      else {
        $text = [
          '#type' => 'inline_template',
          '#template' => '{{ value|nl2br }}',
          '#context' => ['value' => $item->value],
        ];
      }
      if ($this->getSetting('summary')) {
        $text = [
          '#plain_text' => !empty($item->summary) ? strip_tags($item->summary) : text_summary(strip_tags($item->value), 'plain_text', $this->getSetting('trim')),
        ];
      }
      $text = $this->renderer->render($text);

      if ($this->getSetting('link') && $parent instanceof EntityInterface) {
        $link_attributes = new Attribute();
        $link_class = $this->getSetting('link_class');
        if (!empty($link_class)) {
          $link_attributes->addClass($link_class);
        }
        $link = Link::fromTextAndUrl($text, $parent->toUrl())->toRenderable();
        $link['#attributes'] = $link_attributes->toArray();
        $text = $this->renderer->render($link);
      }
      $elements[$delta] = [
        '#type' => 'html_tag',
        '#tag' => $this->getSetting('tag'),
        '#attributes' => $attributes->toArray(),
        '#value' => $text,
      ];
    }
    return $elements;
  }

}
