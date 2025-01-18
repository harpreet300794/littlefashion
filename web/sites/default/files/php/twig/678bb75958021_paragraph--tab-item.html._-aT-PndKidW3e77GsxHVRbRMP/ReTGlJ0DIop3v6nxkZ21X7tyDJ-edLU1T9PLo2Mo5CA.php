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

/* themes/custom/little_fashion/templates/paragraph/paragraph--tab-item.html.twig */
class __TwigTemplate_f3f5cca516d203de960869e1d6b4ecae extends Template
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
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "
";
        // line 11
        $context["classes"] = ["paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 13
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 13))), ((        // line 14
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 15
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 15)) ? ("paragraph--unpublished") : ("")), "tab-pane", "fade"];
        // line 19
        yield "
";
        // line 21
        $context["active_tab"] = ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_active", [], "any", false, false, true, 21), 0, [], "any", false, false, true, 21)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_active", [], "any", false, false, true, 21), 0, [], "any", false, false, true, 21), "#markup", [], "array", false, false, true, 21)) == "On");
        // line 22
        if (($context["active_tab"] ?? null)) {
            // line 23
            yield "    ";
            // line 24
            yield "    ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["show", "active"]);
        }
        // line 26
        yield "
";
        // line 27
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "content", "attributes"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "    <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 28), "html", null, true);
        yield " id=\"pills-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "method", false, false, true, 28), "html", null, true);
        yield "\" aria-labelledby=\"pills-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "method", false, false, true, 28), "html", null, true);
        yield "-tab\">
        ";
        // line 29
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 45
        yield "    </div>
";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "            <div class=\"row\">
                <div class=\"col-lg-7 col-12\">
                    ";
        // line 33
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_media", [], "any", false, false, true, 33), 0, [], "any", false, false, true, 33)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#media"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_media", [], "any", false, false, true, 33), 0, [], "any", false, false, true, 33), "#media", [], "array", false, false, true, 33)), "bundle", [], "any", false, false, true, 33), "target_id", [], "any", false, false, true, 33) == "remote_video")) {
            // line 34
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_media", [], "any", false, false, true, 34), "html", null, true);
            yield "
                    ";
        } else {
            // line 36
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_media", [], "any", false, false, true, 36), "html", null, true);
            yield "
                    ";
        }
        // line 38
        yield "                </div>
                <div class=\"col-lg-5 col-12\">
                    ";
        // line 41
        yield "                    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 41));
        yield "
                </div>
            </div>
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/little_fashion/templates/paragraph/paragraph--tab-item.html.twig";
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
        return array (  129 => 41,  125 => 38,  119 => 36,  113 => 34,  110 => 33,  106 => 30,  99 => 29,  93 => 45,  91 => 29,  82 => 28,  70 => 27,  67 => 26,  63 => 24,  61 => 23,  59 => 22,  57 => 21,  54 => 19,  52 => 15,  51 => 14,  50 => 13,  49 => 11,  46 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Template for displaying a paragraph with media and description, including tab functionality.

  Available variables:
  - paragraph: Full paragraph entity (e.g., ID, bundle).
  - content: Paragraph fields such as media, description, and active state.
  - attributes: HTML attributes including classes for paragraph type and view mode.
#}

{%
    set classes = [
      'paragraph',
      'paragraph--type--' ~ paragraph.bundle|clean_class,
      view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
      not paragraph.isPublished() ? 'paragraph--unpublished',
      'tab-pane', 'fade'
    ]
%}

{# Check if the tab is active based on the 'field_active' value #}
{% set active_tab = content.field_active.0['#markup'] == 'On' %}
{% if active_tab %}
    {# If active, add 'show' and 'active' classes to the tab pane #}
    {% set classes = classes|merge(['show', 'active']) %}
{% endif %}

{% block paragraph %}
    <div{{attributes.addClass(classes)}} id=\"pills-{{paragraph.id()}}\" aria-labelledby=\"pills-{{paragraph.id()}}-tab\">
        {% block content %}
            <div class=\"row\">
                <div class=\"col-lg-7 col-12\">
                    {# Render media field, check if it's a remote video or other type #}
                    {% if content.field_media.0['#media'].bundle.target_id == 'remote_video' %}
                    {{content.field_media}}
                    {% else %}
                    {{content.field_media}}
                    {% endif %}
                </div>
                <div class=\"col-lg-5 col-12\">
                    {# Render description field #}
                    {{content.field_description|raw}}
                </div>
            </div>
        {% endblock %}
    </div>
{% endblock paragraph %}
", "themes/custom/little_fashion/templates/paragraph/paragraph--tab-item.html.twig", "/var/www/html/web/themes/custom/little_fashion/templates/paragraph/paragraph--tab-item.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "if" => 22, "block" => 27);
        static $filters = array("clean_class" => 13, "merge" => 24, "escape" => 28, "raw" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'merge', 'escape', 'raw'],
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
