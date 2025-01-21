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

/* modules/contrib/webform/templates/webform-confirmation.html.twig */
class __TwigTemplate_3ba08ba129f99a13a566ba5369f70c29 extends Template
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
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.confirmation"), "html", null, true);
        yield "

";
        // line 18
        if (($context["progress"] ?? null)) {
            // line 19
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["progress"] ?? null), "html", null, true);
            yield "
";
        }
        // line 21
        yield "
<div";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["webform-confirmation"], "method", false, false, true, 22), "html", null, true);
        yield ">

  ";
        // line 24
        if (($context["message"] ?? null)) {
            // line 25
            yield "    <div class=\"webform-confirmation__message\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["message"] ?? null), "html", null, true);
            yield "</div>
  ";
        }
        // line 27
        yield "
  ";
        // line 28
        if (($context["back"] ?? null)) {
            // line 29
            yield "  <div class=\"webform-confirmation__back\">
    <a href=\"";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["back_url"] ?? null), "html", null, true);
            yield "\" rel=\"prev\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["back_attributes"] ?? null), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["back_label"] ?? null), "html", null, true);
            yield "</a>
  </div>
  ";
        }
        // line 33
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["progress", "attributes", "message", "back", "back_url", "back_attributes", "back_label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/webform/templates/webform-confirmation.html.twig";
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
        return array (  91 => 33,  81 => 30,  78 => 29,  76 => 28,  73 => 27,  67 => 25,  65 => 24,  60 => 22,  57 => 21,  51 => 19,  49 => 18,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to webform confirmation.
 *
 * Available variables:
 * - progress: Progress bar.
 * - message: Confirmation message.
 * - back_url: URL to the previous webform submission.
 *
 * @see template_preprocess_webform_confirmation()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('webform/webform.confirmation') }}

{% if progress %}
  {{ progress }}
{% endif %}

<div{{ attributes.addClass('webform-confirmation') }}>

  {% if message %}
    <div class=\"webform-confirmation__message\">{{ message }}</div>
  {% endif %}

  {% if back %}
  <div class=\"webform-confirmation__back\">
    <a href=\"{{ back_url }}\" rel=\"prev\"{{ back_attributes }}>{{ back_label }}</a>
  </div>
  {% endif %}

</div>
", "modules/contrib/webform/templates/webform-confirmation.html.twig", "/var/www/html/web/modules/contrib/webform/templates/webform-confirmation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18);
        static $filters = array("escape" => 16);
        static $functions = array("attach_library" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library'],
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
