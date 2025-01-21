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

/* themes/custom/little_fashion/templates/menu/menu--main.html.twig */
class __TwigTemplate_8fb24733399d279d1e8ce4627a75709b extends Template
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
        // line 10
        yield "
";
        // line 11
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 12
        yield "
";
        // line 17
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 17, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 19
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 20
            yield "  ";
            $macros["menus"] = $this;
            // line 21
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 22
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 23
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["navbar-nav mx-auto"], "method", false, false, true, 23), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 25
                    yield "      <ul>
    ";
                }
                // line 27
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 28), "addClass", ["nav-item"], "method", false, false, true, 28), "html", null, true);
                    yield ">
        ";
                    // line 29
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 29), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 29), ["class" => "nav-link"]), "html", null, true);
                    yield "
        ";
                    // line 30
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 30)) {
                        // line 31
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 31, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 31), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                        yield "
        ";
                    }
                    // line 33
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/little_fashion/templates/menu/menu--main.html.twig";
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
        return array (  124 => 35,  117 => 33,  111 => 31,  109 => 30,  105 => 29,  100 => 28,  95 => 27,  91 => 25,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  62 => 19,  52 => 17,  49 => 12,  47 => 11,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Template for displaying a menu.

  Renders a nested menu structure using a Twig macro to handle menu items and sub-items. Each item is linked with its title and URL, with special handling for items that have children or are part of the active trail.

  Available variables:
  - menu_name: The machine name of the menu.
  - items: List of menu items, each containing title, URL, attributes, and potential child items.
#}

{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  https://twig.symfony.com/doc/3.x/tags/macro.html
#}
    {{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul{{ attributes.addClass('navbar-nav mx-auto') }}>
    {% else %}
      <ul>
    {% endif %}
    {% for item in items %}
      <li{{ item.attributes.addClass('nav-item') }}>
        {{ link(item.title, item.url, { 'class': 'nav-link' }) }}
        {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "themes/custom/little_fashion/templates/menu/menu--main.html.twig", "/var/www/html/web/themes/custom/little_fashion/templates/menu/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 11, "macro" => 19, "if" => 21, "for" => 27);
        static $filters = array("escape" => 23);
        static $functions = array("link" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['link'],
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
