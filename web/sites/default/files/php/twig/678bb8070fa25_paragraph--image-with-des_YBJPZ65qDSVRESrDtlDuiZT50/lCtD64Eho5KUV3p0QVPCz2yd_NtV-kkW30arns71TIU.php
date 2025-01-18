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

/* themes/custom/little_fashion/templates/paragraph/paragraph--image-with-description.html.twig */
class __TwigTemplate_1269663a4c1beb6b0186924a6fd67533 extends Template
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
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 15)) ? ("paragraph--unpublished") : ("")), "front-product"];
        // line 19
        yield "  
  ";
        // line 20
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        // line 42
        yield "  ";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "attributes", "content"]);        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "\t  <section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 21), "html", null, true);
        yield ">
\t\t  ";
        // line 22
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 40
        yield "\t  </section>
  ";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "\t\t\t  <div class=\"container-fluid p-0\">
\t\t\t\t  <div class=\"row align-items-center\">
\t\t\t\t\t  <div class=\"col-lg-6 col-12\">
\t\t\t\t\t\t  ";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 26), "html", null, true);
        yield "
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"col-lg-6 col-12\">
\t\t\t\t\t\t  <div class=\"px-5 py-5 py-lg-0\">
\t\t\t\t\t\t\t  <h2 class=\"mb-4\">";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title_formatted", [], "any", false, false, true, 30));
        yield "</h2>
\t\t\t\t\t\t\t  ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 31)) {
            // line 32
            yield "\t\t\t\t\t\t\t\t  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 32), "html", null, true);
            yield "
\t\t\t\t\t\t\t  ";
        }
        // line 34
        yield "\t\t\t\t\t\t  </div>
\t\t\t\t\t  </div>
  
\t\t\t\t  </div>
\t\t\t  </div>
\t\t  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/little_fashion/templates/paragraph/paragraph--image-with-description.html.twig";
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
        return array (  116 => 34,  110 => 32,  108 => 31,  104 => 30,  97 => 26,  92 => 23,  85 => 22,  79 => 40,  77 => 22,  72 => 21,  65 => 20,  59 => 42,  57 => 20,  54 => 19,  52 => 15,  51 => 14,  50 => 13,  49 => 11,  46 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Template to render a paragraph with a product section.

  Available variables:
  - paragraph: Full paragraph entity (e.g., ID, bundle).
  - content: Paragraph fields such as image, title, and description.
  - attributes: HTML attributes including classes for paragraph type and view mode.
#}

{%
\tset classes = [
\t  'paragraph',
\t  'paragraph--type--' ~ paragraph.bundle|clean_class,
\t  view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
\t  not paragraph.isPublished() ? 'paragraph--unpublished',
\t  'front-product'
\t]
  %}
  
  {% block paragraph %}
\t  <section{{attributes.addClass(classes)}}>
\t\t  {% block content %}
\t\t\t  <div class=\"container-fluid p-0\">
\t\t\t\t  <div class=\"row align-items-center\">
\t\t\t\t\t  <div class=\"col-lg-6 col-12\">
\t\t\t\t\t\t  {{content.field_image}}
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"col-lg-6 col-12\">
\t\t\t\t\t\t  <div class=\"px-5 py-5 py-lg-0\">
\t\t\t\t\t\t\t  <h2 class=\"mb-4\">{{content.field_title_formatted|raw}}</h2>
\t\t\t\t\t\t\t  {% if content.field_description %}
\t\t\t\t\t\t\t\t  {{content.field_description}}
\t\t\t\t\t\t\t  {% endif %}
\t\t\t\t\t\t  </div>
\t\t\t\t\t  </div>
  
\t\t\t\t  </div>
\t\t\t  </div>
\t\t  {% endblock %}
\t  </section>
  {% endblock paragraph %}
  ", "themes/custom/little_fashion/templates/paragraph/paragraph--image-with-description.html.twig", "/var/www/html/web/themes/custom/little_fashion/templates/paragraph/paragraph--image-with-description.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "block" => 20, "if" => 31);
        static $filters = array("clean_class" => 13, "escape" => 21, "raw" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'raw'],
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
