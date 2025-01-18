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

/* themes/custom/little_fashion/templates/paragraph/paragraph--tabs-component.html.twig */
class __TwigTemplate_76c1c9972cf321a8c89f364c01391c9b extends Template
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
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 15)) ? ("paragraph--unpublished") : ("")), "about", "section-padding"];
        // line 20
        yield "
  ";
        // line 22
        yield "  ";
        $context["child_tab_items"] = [];
        // line 23
        yield "  
  ";
        // line 25
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tab_items", [], "any", false, false, true, 25));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 26
            yield "      ";
            if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                // line 27
                yield "          ";
                $context["child_tab_items"] = Twig\Extension\CoreExtension::merge(($context["child_tab_items"] ?? null), [$context["item"]]);
                // line 28
                yield "      ";
            }
            // line 29
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "  
  ";
        // line 31
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
        // line 32
        yield "      <section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 32), "html", null, true);
        yield ">
          ";
        // line 33
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 67
        yield "      </section>
  ";
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "              <div class=\"container\">
                  <div class=\"row\">
                      <div class=\"col-12 text-center\">
                          <h2 class=\"mb-5\">";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title_formatted", [], "any", false, false, true, 37));
        yield "</h2>
                      </div>
                      ";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tab_items", [], "any", false, false, true, 39)) {
            // line 40
            yield "                          <div class=\"col-lg-2 col-12 mt-auto mb-auto\">
                              <ul class=\"nav nav-pills mb-5 mx-auto justify-content-center align-items-center\" id=\"pills-tab\" role=\"tablist\">
                              
                                  ";
            // line 44
            yield "                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["child_tab_items"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 45
                yield "                                      ";
                $context["title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = $context["item"]) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "#paragraph", [], "array", false, false, true, 45)), "field_title", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45);
                // line 46
                yield "                                      ";
                $context["tab_id"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = $context["item"]) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "#paragraph", [], "array", false, false, true, 46)), "id", [], "any", false, false, true, 46), "value", [], "any", false, false, true, 46);
                // line 47
                yield "                                      
                                      ";
                // line 49
                yield "                                      ";
                $context["active"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = $context["item"]) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "#paragraph", [], "array", false, false, true, 49)), "field_active", [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49) == 1);
                // line 50
                yield "                                      
                                      <li class=\"nav-item\" role=\"presentation\">
                                          <button class=\"nav-link ";
                // line 52
                if (($context["active"] ?? null)) {
                    yield "active";
                }
                yield "\" id=\"tab-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tab_id"] ?? null), "html", null, true);
                yield "-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tab_id"] ?? null), "html", null, true);
                yield "\" type=\"button\" role=\"tab\" aria-controls=\"pills-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tab_id"] ?? null), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "</button>
                                      </li>
                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "                              </ul>
                          </div>
                          
                          <div class=\"col-lg-10 col-12\">
                              <div class=\"tab-content mt-2\" id=\"pills-tabContent\">
                                  ";
            // line 60
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tab_items", [], "any", false, false, true, 60), "html", null, true);
            yield "  
                              </div>
                          </div>
                      ";
        }
        // line 64
        yield "                  </div>
              </div>
          ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/little_fashion/templates/paragraph/paragraph--tabs-component.html.twig";
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
        return array (  189 => 64,  182 => 60,  175 => 55,  156 => 52,  152 => 50,  149 => 49,  146 => 47,  143 => 46,  140 => 45,  135 => 44,  130 => 40,  128 => 39,  123 => 37,  118 => 34,  111 => 33,  105 => 67,  103 => 33,  98 => 32,  86 => 31,  83 => 30,  77 => 29,  74 => 28,  71 => 27,  68 => 26,  63 => 25,  60 => 23,  57 => 22,  54 => 20,  52 => 15,  51 => 14,  50 => 13,  49 => 11,  46 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Template for displaying a paragraph with tabs and dynamic tab content.

  Available variables:
  - paragraph: Full paragraph entity (e.g., ID, bundle).
  - content: Paragraph fields such as title, tab items.
  - attributes: HTML attributes including classes for paragraph type and view mode.
#}

{%
    set classes = [
      'paragraph',
      'paragraph--type--' ~ paragraph.bundle|clean_class,
      view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
      not paragraph.isPublished() ? 'paragraph--unpublished',
      'about',
      'section-padding'
    ]
  %}

  {# Initialize an empty array to store child tab items #}
  {% set child_tab_items = [] %}
  
  {# Loop through field_tab_items, excluding those starting with '#' #}
  {% for key, item in content.field_tab_items %}
      {% if key|first != '#' %}
          {% set child_tab_items = child_tab_items|merge([item]) %}
      {% endif %}
  {% endfor %}
  
  {% block paragraph %}
      <section{{attributes.addClass(classes)}}>
          {% block content %}
              <div class=\"container\">
                  <div class=\"row\">
                      <div class=\"col-12 text-center\">
                          <h2 class=\"mb-5\">{{content.field_title_formatted|raw}}</h2>
                      </div>
                      {% if content.field_tab_items %}
                          <div class=\"col-lg-2 col-12 mt-auto mb-auto\">
                              <ul class=\"nav nav-pills mb-5 mx-auto justify-content-center align-items-center\" id=\"pills-tab\" role=\"tablist\">
                              
                                  {# For each valid tab item, render a list item with a button for the tab #}
                                  {% for key, item in child_tab_items %}
                                      {% set title = item['#paragraph'].field_title.value %}
                                      {% set tab_id = item['#paragraph'].id.value %}
                                      
                                      {# Check if the tab is active, add 'active' class if it is #}
                                      {% set active = item['#paragraph'].field_active.value == 1 %}
                                      
                                      <li class=\"nav-item\" role=\"presentation\">
                                          <button class=\"nav-link {% if active %}active{% endif %}\" id=\"tab-{{ tab_id }}-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-{{ tab_id }}\" type=\"button\" role=\"tab\" aria-controls=\"pills-{{ tab_id }}\">{{ title }}</button>
                                      </li>
                                  {% endfor %}
                              </ul>
                          </div>
                          
                          <div class=\"col-lg-10 col-12\">
                              <div class=\"tab-content mt-2\" id=\"pills-tabContent\">
                                  {{content.field_tab_items}}  
                              </div>
                          </div>
                      {% endif %}
                  </div>
              </div>
          {% endblock %}
      </section>
  {% endblock paragraph %}
", "themes/custom/little_fashion/templates/paragraph/paragraph--tabs-component.html.twig", "/var/www/html/web/themes/custom/little_fashion/templates/paragraph/paragraph--tabs-component.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "for" => 25, "if" => 26, "block" => 31);
        static $filters = array("clean_class" => 13, "first" => 26, "merge" => 27, "escape" => 32, "raw" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'block'],
                ['clean_class', 'first', 'merge', 'escape', 'raw'],
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
