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

/* themes/custom/little_fashion/templates/paragraph/paragraph--slider-item.html.twig */
class __TwigTemplate_0e26efe427d55337390182b27f28e406 extends Template
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
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 15)) ? ("paragraph--unpublished") : ("")), "slick-custom"];
        // line 19
        yield "  ";
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "attributes", "content"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "      <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 20), "html", null, true);
        yield ">
          ";
        // line 21
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 37
        yield "      </div>
  ";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "              ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_banner", [], "any", false, false, true, 22), "html", null, true);
        yield "
              <div class=\"slick-bottom\">
                  <div class=\"container\">
                      <div class=\"row\">
                          <div class=\"col-lg-6 col-10\">
                              ";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 27), "html", null, true);
        yield "
                              ";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 28), "html", null, true);
        yield "
                ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_cta", [], "any", false, false, true, 29)) {
            // line 30
            yield "                                ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_cta", [], "any", false, false, true, 30), "html", null, true);
            yield "
                ";
        }
        // line 32
        yield "                          </div>
                      </div>
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
        return "themes/custom/little_fashion/templates/paragraph/paragraph--slider-item.html.twig";
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
        return array (  112 => 32,  106 => 30,  104 => 29,  100 => 28,  96 => 27,  87 => 22,  80 => 21,  74 => 37,  72 => 21,  67 => 20,  54 => 19,  52 => 15,  51 => 14,  50 => 13,  49 => 11,  46 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Template for displaying a paragraph with a custom slick slider section.

  Available variables:
  - paragraph: Full paragraph entity (e.g., ID, bundle).
  - content: Paragraph fields such as banner, title, description, and CTA.
  - attributes: HTML attributes including classes for paragraph type and view mode.
#}

{%
    set classes = [
      'paragraph',
      'paragraph--type--' ~ paragraph.bundle|clean_class,
      view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
      not paragraph.isPublished() ? 'paragraph--unpublished',
      'slick-custom'
    ]
  %}
  {% block paragraph %}
      <div{{attributes.addClass(classes)}}>
          {% block content %}
              {{content.field_banner}}
              <div class=\"slick-bottom\">
                  <div class=\"container\">
                      <div class=\"row\">
                          <div class=\"col-lg-6 col-10\">
                              {{content.field_title}}
                              {{content.field_description}}
                {% if content.field_cta %}
                                {{content.field_cta}}
                {% endif %}
                          </div>
                      </div>
                  </div>
              </div>
          {% endblock %}
      </div>
  {% endblock paragraph %}
", "themes/custom/little_fashion/templates/paragraph/paragraph--slider-item.html.twig", "/var/www/html/web/themes/custom/little_fashion/templates/paragraph/paragraph--slider-item.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "block" => 19, "if" => 29);
        static $filters = array("clean_class" => 13, "escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
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
