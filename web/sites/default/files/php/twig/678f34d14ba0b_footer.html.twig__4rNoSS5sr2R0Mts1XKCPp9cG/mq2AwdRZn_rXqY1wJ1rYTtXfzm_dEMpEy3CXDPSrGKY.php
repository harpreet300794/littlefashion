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

/* @little_fashion/layout/footer.html.twig */
class __TwigTemplate_aa74d85cd45c47c61fe602f07dfbc182 extends Template
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
        // line 11
        yield "
<footer class=\"site-footer\">
\t<div class=\"container\">
\t  <div class=\"row\">
\t\t<div class=\"col-lg-3 col-10 me-auto mb-4\">
\t\t  <p class=\"copyright-text text-muted mt-lg-5 mb-4 mb-lg-0\">
\t\t\tCopyright © ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "
\t\t  </p>
\t\t</div>
\t\t";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 20), "html", null, true);
        yield "
\t  </div>
\t</div>
  </footer>
  ";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@little_fashion/layout/footer.html.twig";
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
        return array (  58 => 20,  52 => 17,  44 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Footer Template for the site.

  This footer contains:
  - A copyright section with the dynamically generated current year.
  - A responsive layout using Bootstrap's grid system.
  - A placeholder for additional dynamic footer content (`{{ page.footer }}`), which can be customized through Drupal configuration.

  The layout ensures the footer is properly aligned and responsive across various screen sizes.
#}

<footer class=\"site-footer\">
\t<div class=\"container\">
\t  <div class=\"row\">
\t\t<div class=\"col-lg-3 col-10 me-auto mb-4\">
\t\t  <p class=\"copyright-text text-muted mt-lg-5 mb-4 mb-lg-0\">
\t\t\tCopyright © {{ 'now' | date('Y') }}
\t\t  </p>
\t\t</div>
\t\t{{ page.footer }}
\t  </div>
\t</div>
  </footer>
  ", "@little_fashion/layout/footer.html.twig", "/var/www/html/web/themes/custom/little_fashion/templates/layout/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 17, "date" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
