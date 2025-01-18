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

/* themes/custom/little_fashion/templates/paragraph/paragraph--webform.html.twig */
class __TwigTemplate_ed919003064cfe94e2acfdd9f1b3242e extends Template
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
        // line 5
        yield "
";
        // line 7
        $context["classes"] = ["paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 9))), ((        // line 10
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 11)) ? ("paragraph--unpublished") : ("")), "contact", "section-padding"];
        // line 15
        yield "
";
        // line 16
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
        // line 17
        yield "\t<section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 17), "html", null, true);
        yield ">
\t\t";
        // line 18
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 77
        yield "\t\t\t</section>
\t\t";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 col-12\">
\t\t\t\t\t\t<h2 class=\"mb-4\">Let's
\t\t\t\t\t\t\t<span>begin</span>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t";
        // line 26
        yield "\t\t\t\t\t\t";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_webform", [], "any", false, false, true, 26), "html", null, true);
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 col-12 mt-5 ms-auto\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t";
        // line 33
        yield "\t\t\t\t\t\t\t<div class=\"col-6 border-end contact-info\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-3\">New Business</h6>
\t\t\t\t\t\t\t\t<a href=\"mailto:hello@company.com\" class=\"custom-link\">
\t\t\t\t\t\t\t\t\thello@company.com
\t\t\t\t\t\t\t\t\t<i class=\"bi-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 42
        yield "\t\t\t\t\t\t\t<div class=\"col-6 contact-info\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-3\">Main Studio</h6>
\t\t\t\t\t\t\t\t<a href=\"mailto:studio@company.com\" class=\"custom-link\">
\t\t\t\t\t\t\t\t\tstudio@company.com
\t\t\t\t\t\t\t\t\t<i class=\"bi-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 51
        yield "\t\t\t\t\t\t\t<div class=\"col-6 border-top border-end contact-info\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-3\">Our Office</h6>
\t\t\t\t\t\t\t\t<p class=\"text-muted\">Akershusstranda 20, 0150 Oslo, Norway</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 57
        yield "\t\t\t\t\t\t\t<div class=\"col-6 border-top contact-info\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-3\">Our Socials</h6>
\t\t\t\t\t\t\t\t<ul class=\"social-icon\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon-link bi-messenger\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon-link bi-youtube\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon-link bi-instagram\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon-link bi-whatsapp\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/little_fashion/templates/paragraph/paragraph--webform.html.twig";
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
        return array (  134 => 57,  127 => 51,  117 => 42,  107 => 33,  97 => 26,  89 => 19,  82 => 18,  76 => 77,  74 => 18,  69 => 17,  57 => 16,  54 => 15,  52 => 11,  51 => 10,  50 => 9,  49 => 7,  46 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Template for displaying a contact section with a webform and contact information.
  Variables include paragraph content (fields) and attributes.
#}

{%
\tset classes = [
\t  'paragraph',
\t  'paragraph--type--' ~ paragraph.bundle|clean_class,
\t  view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
\t  not paragraph.isPublished() ? 'paragraph--unpublished',
\t  'contact', 'section-padding'
\t]
  %}

{% block paragraph %}
\t<section{{attributes.addClass(classes)}}>
\t\t{% block content %}
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 col-12\">
\t\t\t\t\t\t<h2 class=\"mb-4\">Let's
\t\t\t\t\t\t\t<span>begin</span>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t{# Render the webform field #}
\t\t\t\t\t\t{{content.field_webform}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 col-12 mt-5 ms-auto\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t{# Contact information for 'New Business' #}
\t\t\t\t\t\t\t<div class=\"col-6 border-end contact-info\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-3\">New Business</h6>
\t\t\t\t\t\t\t\t<a href=\"mailto:hello@company.com\" class=\"custom-link\">
\t\t\t\t\t\t\t\t\thello@company.com
\t\t\t\t\t\t\t\t\t<i class=\"bi-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{# Contact information for 'Main Studio' #}
\t\t\t\t\t\t\t<div class=\"col-6 contact-info\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-3\">Main Studio</h6>
\t\t\t\t\t\t\t\t<a href=\"mailto:studio@company.com\" class=\"custom-link\">
\t\t\t\t\t\t\t\t\tstudio@company.com
\t\t\t\t\t\t\t\t\t<i class=\"bi-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{# Office address section #}
\t\t\t\t\t\t\t<div class=\"col-6 border-top border-end contact-info\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-3\">Our Office</h6>
\t\t\t\t\t\t\t\t<p class=\"text-muted\">Akershusstranda 20, 0150 Oslo, Norway</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{# Social media links section #}
\t\t\t\t\t\t\t<div class=\"col-6 border-top contact-info\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-3\">Our Socials</h6>
\t\t\t\t\t\t\t\t<ul class=\"social-icon\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon-link bi-messenger\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon-link bi-youtube\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon-link bi-instagram\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"social-icon-link bi-whatsapp\"></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t</section>
\t\t{% endblock paragraph %}
", "themes/custom/little_fashion/templates/paragraph/paragraph--webform.html.twig", "/var/www/html/web/themes/custom/little_fashion/templates/paragraph/paragraph--webform.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "block" => 16);
        static $filters = array("clean_class" => 9, "escape" => 17);
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
