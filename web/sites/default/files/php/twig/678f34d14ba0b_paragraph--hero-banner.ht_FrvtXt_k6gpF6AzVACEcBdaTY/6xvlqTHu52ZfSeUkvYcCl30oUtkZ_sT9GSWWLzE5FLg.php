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

/* themes/custom/little_fashion/templates/paragraph/paragraph--hero-banner.html.twig */
class __TwigTemplate_5e16fdccbeb04e33f2248dc5473d58c3 extends Template
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
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 15)) ? ("paragraph--unpublished") : ("")), "site-header", "section-padding-img", "site-header-image"];
        // line 21
        yield "  
  ";
        // line 22
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        // line 36
        yield "  ";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "attributes", "content"]);        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "\t  ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 35
        yield "  ";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "\t\t  <header";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 24), "html", null, true);
        yield ">
\t\t\t  <div class=\"container\">
\t\t\t\t  <div class=\"row\">
\t\t\t\t\t  <div class=\"col-lg-10 col-12 header-info\">
\t\t\t\t\t\t  ";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title_formatted", [], "any", false, false, true, 28), "html", null, true);
        yield "
\t\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t  </div>
\t\t\t\t  ";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 32), "html", null, true);
        yield "
\t\t  </header>
\t  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/little_fashion/templates/paragraph/paragraph--hero-banner.html.twig";
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
        return array (  102 => 32,  95 => 28,  87 => 24,  80 => 23,  75 => 35,  72 => 23,  65 => 22,  59 => 36,  57 => 22,  54 => 21,  52 => 15,  51 => 14,  50 => 13,  49 => 11,  46 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Template for rendering a paragraph entity with a header.

  Available variables:
  - paragraph: Full paragraph entity (e.g., ID, bundle).
  - content: Paragraph fields such as title and image.
  - attributes: HTML attributes, including classes for paragraph type and view mode.
#}

{%
\tset classes = [
\t  'paragraph',
\t  'paragraph--type--' ~ paragraph.bundle|clean_class,
\t  view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
\t  not paragraph.isPublished() ? 'paragraph--unpublished',
\t  'site-header',
\t  'section-padding-img',
\t  'site-header-image',
\t]
  %}
  
  {% block paragraph %}
\t  {% block content %}
\t\t  <header{{attributes.addClass(classes)}}>
\t\t\t  <div class=\"container\">
\t\t\t\t  <div class=\"row\">
\t\t\t\t\t  <div class=\"col-lg-10 col-12 header-info\">
\t\t\t\t\t\t  {{content.field_title_formatted}}
\t\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t  </div>
\t\t\t\t  {{content.field_image}}
\t\t  </header>
\t  {% endblock %}
  {% endblock paragraph %}
  ", "themes/custom/little_fashion/templates/paragraph/paragraph--hero-banner.html.twig", "/var/www/html/web/themes/custom/little_fashion/templates/paragraph/paragraph--hero-banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "block" => 22);
        static $filters = array("clean_class" => 13, "escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
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
