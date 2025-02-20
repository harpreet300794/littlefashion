<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/little_fashion/templates/block/block--system-menu-block--sitemap.html.twig */
class __TwigTemplate_cedbb06716894d695b6ba894734ceccb extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "
";
        // line 39
        $context["heading_id"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 39) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 40
        yield "
";
        // line 42
        yield "<nav role=\"navigation\" aria-labelledby=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
        yield "\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["attributes"] ?? null), "role", "aria-labelledby"), "html", null, true);
        yield ">
  
  ";
        // line 45
        yield "  ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 45)) {
            // line 46
            yield "    ";
            $context["title_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["visually-hidden"], "method", false, false, true, 46);
            // line 47
            yield "  ";
        }
        // line 48
        yield "  
  ";
        // line 50
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  
  ";
        // line 53
        yield "  <h5";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [["text-white", "mb-3"]], "method", false, false, true, 53), "setAttribute", ["id",         // line 55
($context["heading_id"] ?? null)], "method", false, false, true, 53), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 55), "html", null, true);
        yield "</h5>
  
  ";
        // line 58
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "

  ";
        // line 61
        yield "  ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 64
        yield "
</nav>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "configuration", "title_prefix", "title_suffix", "content"]);        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/little_fashion/templates/block/block--system-menu-block--sitemap.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  112 => 62,  105 => 61,  97 => 64,  94 => 61,  88 => 58,  81 => 55,  79 => 53,  73 => 50,  70 => 48,  67 => 47,  64 => 46,  61 => 45,  53 => 42,  50 => 40,  48 => 39,  45 => 37,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a menu block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - in_preview: Whether the plugin is being rendered in preview mode.
 * - content: The content of this block.
 * - attributes: HTML attributes for the containing element.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: HTML attributes for the title element.
 * - content_attributes: HTML attributes for the content element.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * Headings should be used on navigation menus that consistently appear on
 * multiple pages. When this menu block's label is configured to not be
 * displayed, it is automatically made invisible using the 'visually-hidden' CSS
 * class, which still keeps it visible for screen-readers and assistive
 * technology. Headings allow screen-reader and keyboard only users to navigate
 * to or skip the links.
 * See http://juicystudio.com/article/screen-readers-display-none.php and
 * https://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
 *
 * @ingroup themeable
 */
#}

{# Set a unique ID for the menu, based on the block's ID attribute. This will be used for accessibility. #}
{% set heading_id = attributes.id ~ '-menu'|clean_id %}

{# Render the navigation block with a 'nav' element, adding the unique ID and any additional attributes. #}
<nav role=\"navigation\" aria-labelledby=\"{{ heading_id }}\"{{ attributes|without('role', 'aria-labelledby') }}>
  
  {# If the label display is not enabled, add a class to hide it visually, but still accessible to screen readers. #}
  {% if not configuration.label_display %}
    {% set title_attributes = title_attributes.addClass('visually-hidden') %}
  {% endif %}
  
  {# Output any title prefix content if provided. This could be text or HTML inserted before the main title. #}
  {{ title_prefix }}
  
  {# Render the title of the block. It is wrapped in an <h5> tag with additional classes for styling. #}
  <h5{{ title_attributes.addClass([
    'text-white', 'mb-3'
  ]).setAttribute('id', heading_id) }}>{{ configuration.label }}</h5>
  
  {# Output any title suffix content if provided. This could be text or HTML inserted after the main title. #}
  {{ title_suffix }}

  {# Render the menu content inside the block. This is where the actual menu or links would appear. #}
  {% block content %}
    {{ content }}
  {% endblock %}

</nav>
", "themes/custom/little_fashion/templates/block/block--system-menu-block--sitemap.html.twig", "/var/www/html/web/themes/custom/little_fashion/templates/block/block--system-menu-block--sitemap.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 39, "if" => 45, "block" => 61);
        static $filters = array("clean_id" => 39, "escape" => 42, "without" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_id', 'escape', 'without'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
