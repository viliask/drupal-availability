<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/slick/templates/slick-grid.html.twig */
class __TwigTemplate_442977508e5b985cd03c7093bc698654a5c6ddcc4ca27fbb56ae7efc2558da26 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "for" => 33];
        $filters = ["clean_class" => 26, "escape" => 32];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 13
        $context["classes"] = [0 => (($this->getAttribute(        // line 14
($context["settings"] ?? null), "unslick", [])) ? ("slick__grid") : ("slide__content")), 1 => "block-columngrid", 2 => ("block-" . $this->sandbox->ensureToStringAllowed(        // line 16
($context["grid_id"] ?? null))), 3 => (($this->getAttribute(        // line 17
($context["settings"] ?? null), "grid_small", [])) ? (((("small-block-" . $this->sandbox->ensureToStringAllowed(($context["grid_id"] ?? null))) . "-") . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "grid_small", [])))) : ("")), 4 => (($this->getAttribute(        // line 18
($context["settings"] ?? null), "grid_medium", [])) ? (((("medium-block-" . $this->sandbox->ensureToStringAllowed(($context["grid_id"] ?? null))) . "-") . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "grid_medium", [])))) : ("")), 5 => (($this->getAttribute(        // line 19
($context["settings"] ?? null), "grid", [])) ? (((("large-block-" . $this->sandbox->ensureToStringAllowed(($context["grid_id"] ?? null))) . "-") . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "grid", [])))) : (""))];
        // line 23
        $context["item_classes"] = [0 => (( !$this->getAttribute(        // line 24
($context["settings"] ?? null), "unslick", [])) ? ("slide__grid") : ("")), 1 => "grid", 2 => (($this->getAttribute(        // line 26
($context["settings"] ?? null), "type", [])) ? (("grid--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "type", []))))) : ("")), 3 => (($this->getAttribute(        // line 27
($context["settings"] ?? null), "media_switch", [])) ? (("grid--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "media_switch", [])))) : ("")), 4 => ((($this->getAttribute(        // line 28
($context["settings"] ?? null), "media_switch", []) && twig_in_filter("box", $this->getAttribute(($context["settings"] ?? null), "media_switch", [])))) ? ("grid--litebox") : (""))];
        // line 31
        echo "
<ul";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["delta"] => $context["item"]) {
            // line 34
            echo "    <li";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null), 1 => ("grid--" . $this->sandbox->ensureToStringAllowed($context["delta"]))], "method")), "html", null, true);
            echo ">
      <div class=\"grid__content\">
        ";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
            echo "
      </div>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['delta'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "modules/contrib/slick/templates/slick-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 40,  85 => 36,  79 => 34,  75 => 33,  71 => 32,  68 => 31,  66 => 28,  65 => 27,  64 => 26,  63 => 24,  62 => 23,  60 => 19,  59 => 18,  58 => 17,  57 => 16,  56 => 14,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/slick/templates/slick-grid.html.twig", "C:\\Users\\Ziemniaki\\Sites\\devdesktop\\lightning\\modules\\contrib\\slick\\templates\\slick-grid.html.twig");
    }
}
