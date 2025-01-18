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

/* themes/custom/little_fashion/templates/layout/page.html.twig */
class __TwigTemplate_a154c84c372f824530eb0a88b277eb90 extends Template
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
        // line 14
        yield "
<div class=\"layout-container\">
\t<section class=\"preloader\">
\t\t<div class=\"spinner\">
\t\t\t<span class=\"sk-inner-circle\"></span>
\t\t</div>
\t</section>

\t";
        // line 22
        yield from $this->loadTemplate("@little_fashion/layout/header.html.twig", "themes/custom/little_fashion/templates/layout/page.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "\t
\t";
        // line 24
        if (($context["is_admin"] ?? null)) {
            // line 25
            yield "\t\t<div class='admin-logged-in'>
\t";
        } else {
            // line 27
            yield "\t\t<div>
\t";
        }
        // line 29
        yield "\t\t<div class=\"container\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 29), "html", null, true);
        yield "</div>
\t\t<main role=\"main\">
\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t\t<div class=\"layout-content\">
\t\t\t\t";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 33), "html", null, true);
        yield "
\t\t\t</div>
\t\t</main>
\t</div>

\t";
        // line 38
        yield from $this->loadTemplate("@little_fashion/layout/footer.html.twig", "themes/custom/little_fashion/templates/layout/page.html.twig", 38)->unwrap()->yield($context);
        // line 39
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_admin", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/little_fashion/templates/layout/page.html.twig";
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
        return array (  87 => 39,  85 => 38,  77 => 33,  69 => 29,  65 => 27,  61 => 25,  59 => 24,  56 => 23,  54 => 22,  44 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Template for displaying a single page.

  Includes:
  - Header, main content, and footer sections.
  - Displays the primary menu and content region dynamically.
  - Handles admin-specific content visibility.

  Available variables:
  - is_admin: Checks if the user is an admin to conditionally render admin content.
  - page.primary_menu: Renders the primary menu region.
  - page.content: Renders the main page content.
#}

<div class=\"layout-container\">
\t<section class=\"preloader\">
\t\t<div class=\"spinner\">
\t\t\t<span class=\"sk-inner-circle\"></span>
\t\t</div>
\t</section>

\t{% include('@little_fashion/layout/header.html.twig') %}
\t
\t{% if is_admin %}
\t\t<div class='admin-logged-in'>
\t{% else %}
\t\t<div>
\t{% endif %}
\t\t<div class=\"container\">{{ page.primary_menu }}</div>
\t\t<main role=\"main\">
\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t\t<div class=\"layout-content\">
\t\t\t\t{{ page.content }}
\t\t\t</div>
\t\t</main>
\t</div>

\t{% include('@little_fashion/layout/footer.html.twig') %}

</div>
", "themes/custom/little_fashion/templates/layout/page.html.twig", "/var/www/html/web/themes/custom/little_fashion/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 22, "if" => 24);
        static $filters = array("escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
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
