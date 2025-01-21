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

/* core/themes/claro/templates/media-library/media--media-library.html.twig */
class __TwigTemplate_9286720131a7c1c120c44d59d31d4352 extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["media-library-item__preview-wrapper"], "method", false, false, true, 41), "html", null, true);
        yield ">
  ";
        // line 42
        if (($context["content"] ?? null)) {
            // line 43
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["preview_attributes"] ?? null), "addClass", ["media-library-item__preview js-media-library-item-preview"], "method", false, false, true, 43), "html", null, true);
            yield ">
      ";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "name"), "html", null, true);
            yield "
    </div>
    ";
            // line 46
            if ( !($context["status"] ?? null)) {
                // line 47
                yield "      <div class=\"media-library-item__status\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("unpublished"));
                yield "</div>
    ";
            }
            // line 49
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["metadata_attributes"] ?? null), "addClass", ["media-library-item__attributes"], "method", false, false, true, 49), "html", null, true);
            yield ">
      <div class=\"media-library-item__name\">
        ";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 55
        yield "</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "content", "preview_attributes", "status", "metadata_attributes", "name"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/media-library/media--media-library.html.twig";
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
        return array (  82 => 55,  75 => 51,  69 => 49,  63 => 47,  61 => 46,  56 => 44,  51 => 43,  49 => 42,  44 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override of a media item in the media library.
 *
 * This is used for media that the user can select from the grid of media
 * items. It is not used for items that have already been selected in the
 * corresponding field widget, or for items that have been previously selected
 * before adding new media to the library.
 *
 * Available variables:
 * - media: The entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - entity.getEntityTypeId() will return the entity type ID.
 *   - entity.hasField('field_example') returns TRUE if the entity includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   Calling other methods, such as entity.delete(), will result in an exception.
 *   See \\Drupal\\Core\\Entity\\EntityInterface for a full list of methods.
 * - name: Name of the media.
 * - content: Media content.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - attributes: HTML attributes for the containing element.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - url: Direct URL of the media.
 * - preview_attributes: HTML attributes for the preview wrapper.
 * - metadata_attributes: HTML attributes for the expandable metadata area.
 * - status: Whether or not the Media is published.
 *
 * @see template_preprocess_media()
 *
 * @ingroup themeable
 */
#}
<article{{ attributes.addClass('media-library-item__preview-wrapper') }}>
  {% if content %}
    <div{{ preview_attributes.addClass('media-library-item__preview js-media-library-item-preview') }}>
      {{ content|without('name') }}
    </div>
    {% if not status %}
      <div class=\"media-library-item__status\">{{ \"unpublished\"|t }}</div>
    {% endif %}
    <div{{ metadata_attributes.addClass('media-library-item__attributes') }}>
      <div class=\"media-library-item__name\">
        {{ name }}
      </div>
    </div>
  {% endif %}
</article>
", "core/themes/claro/templates/media-library/media--media-library.html.twig", "/var/www/html/web/core/themes/claro/templates/media-library/media--media-library.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 42);
        static $filters = array("escape" => 41, "without" => 44, "t" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without', 't'],
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
