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

/* themes/custom/little_fashion/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_315388c3f3b1d440fc373426bc65e18c extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/little_fashion/templates/block/block--system-branding-block.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "site_name", "site_slogan"]);    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "  ";
        // line 21
        yield "  ";
        if (($context["site_logo"] ?? null)) {
            // line 22
            yield "    <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" rel=\"home\">
      <img src=\"";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" fetchpriority=\"high\" />
    </a>
  ";
        }
        // line 26
        yield "
  ";
        // line 28
        yield "  ";
        if (($context["site_name"] ?? null)) {
            // line 29
            yield "    ";
            // line 30
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["site_name"] ?? null), " ")) > 1)) {
                // line 31
                yield "      <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                yield "\" rel=\"home\" class=\"navbar-brand\">
        <strong>
          <span>";
                // line 33
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["site_name"] ?? null), " ")) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["site_name"] ?? null), " "), 0, [], "array", false, false, true, 33)), "html", null, true);
                yield "</span> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["site_name"] ?? null), " ")) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["site_name"] ?? null), " "), 1, [], "array", false, false, true, 33)), "html", null, true);
                yield "
        </strong>
      </a>
    ";
            } else {
                // line 37
                yield "      <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                yield "\" rel=\"home\" class=\"navbar-brand\">
        <strong>";
                // line 38
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
                yield "</strong>
      </a>
    ";
            }
            // line 41
            yield "  ";
        }
        // line 42
        yield "
  ";
        // line 44
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/little_fashion/templates/block/block--system-branding-block.html.twig";
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
        return array (  122 => 44,  119 => 42,  116 => 41,  110 => 38,  105 => 37,  96 => 33,  90 => 31,  87 => 30,  85 => 29,  82 => 28,  79 => 26,  71 => 23,  66 => 22,  63 => 21,  61 => 20,  54 => 19,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 *
 * @ingroup themeable
 */
#}

{% block content %}
  {# Check if the site_logo variable is defined and not empty #}
  {% if site_logo %}
    <a href=\"{{ path('<front>') }}\" rel=\"home\">
      <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" fetchpriority=\"high\" />
    </a>
  {% endif %}

  {# Check if the site_name variable is defined and not empty #}
  {% if site_name %}
    {# Check if the site name contains multiple words #}
    {% if site_name|split(' ')|length > 1 %}
      <a href=\"{{ path('<front>') }}\" rel=\"home\" class=\"navbar-brand\">
        <strong>
          <span>{{ site_name|split(' ')[0] }}</span> {{ site_name|split(' ')[1] }}
        </strong>
      </a>
    {% else %}
      <a href=\"{{ path('<front>') }}\" rel=\"home\" class=\"navbar-brand\">
        <strong>{{ site_name }}</strong>
      </a>
    {% endif %}
  {% endif %}

  {# Output the site slogan, if defined #}
  {{ site_slogan }}
{% endblock %}
", "themes/custom/little_fashion/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/themes/custom/little_fashion/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("extends" => 1, "if" => 21);
        static $filters = array("escape" => 23, "t" => 23, "length" => 30, "split" => 30);
        static $functions = array("path" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if'],
                ['escape', 't', 'length', 'split'],
                ['path'],
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
