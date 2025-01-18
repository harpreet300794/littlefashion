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

/* themes/custom/little_fashion/templates/menu/menu--sitemap.html.twig */
class __TwigTemplate_60a683bf26791649be8856a3c4b1e63e extends Template
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
            $context["classes"] = ["footer-menu", "d-flex", "flex-wrap"];
            // line 21
            yield "  ";
            $macros["menus"] = $this;
            // line 22
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 23
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 24
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 24), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 26
                    yield "      <ul>
    ";
                }
                // line 28
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 29
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 29), "addClass", ["footer-menu-item"], "method", false, false, true, 29), "html", null, true);
                    yield ">
        ";
                    // line 30
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 30), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 30), ["class" => "footer-menu-link"]), "html", null, true);
                    yield "
        ";
                    // line 31
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 31)) {
                        // line 32
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 32, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 32), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                        yield "
        ";
                    }
                    // line 34
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
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
        return "themes/custom/little_fashion/templates/menu/menu--sitemap.html.twig";
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
        return array (  126 => 36,  119 => 34,  113 => 32,  111 => 31,  107 => 30,  102 => 29,  97 => 28,  93 => 26,  87 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  61 => 19,  52 => 17,  49 => 12,  47 => 11,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Template for rendering a menu with nested items.

  The macro recursively generates the full menu structure, applying appropriate classes and handling child menu items.

  Available variables:
  - menu_name: The machine name of the menu.
  - items: A list of menu items, each containing title, URL, attributes, and child items.
#}

{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  https://twig.symfony.com/doc/3.x/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% set classes = ['footer-menu', 'd-flex', 'flex-wrap'] %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul{{ attributes.addClass(classes) }}>
    {% else %}
      <ul>
    {% endif %}
    {% for item in items %}
      <li{{ item.attributes.addClass('footer-menu-item') }}>
        {{ link(item.title, item.url, { 'class': 'footer-menu-link' }) }}
        {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "themes/custom/little_fashion/templates/menu/menu--sitemap.html.twig", "/var/www/html/web/themes/custom/little_fashion/templates/menu/menu--sitemap.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 11, "macro" => 19, "set" => 20, "if" => 22, "for" => 28);
        static $filters = array("escape" => 24);
        static $functions = array("link" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
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
