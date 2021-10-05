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

/* modules/contrib/commerce/modules/order/templates/commerce-order-total-summary.html.twig */
class __TwigTemplate_25aafda2d57e7191ac59b9c36c21ccd446c67532fe30e97e8f04359f82c62dd5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 23, "for" => 28];
        $filters = ["escape" => 21, "t" => 25, "commerce_price_format" => 25, "clean_class" => 29];
        $functions = ["attach_library" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't', 'commerce_price_format', 'clean_class'],
                ['attach_library']
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
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("commerce_order/total_summary"), "html", null, true);
        echo "
<div";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 23
        if ($this->getAttribute(($context["totals"] ?? null), "subtotal", [])) {
            // line 24
            echo "    <div class=\"order-total-line order-total-line__subtotal\">
      <span class=\"order-total-line-label\">";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Subtotal"));
            echo " </span><span class=\"order-total-line-value\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["totals"] ?? null), "subtotal", []))), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        // line 28
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["totals"] ?? null), "adjustments", []));
        foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
            // line 29
            echo "    <div class=\"order-total-line order-total-line__adjustment order-total-line__adjustment--";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($context["adjustment"], "type", []))), "html", null, true);
            echo "\">
      <span class=\"order-total-line-label\">";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["adjustment"], "label", [])), "html", null, true);
            echo " </span><span class=\"order-total-line-value\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute($context["adjustment"], "amount", []))), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  ";
        if ($this->getAttribute(($context["totals"] ?? null), "total", [])) {
            // line 34
            echo "    <div class=\"order-total-line order-total-line__total\">
      <span class=\"order-total-line-label\">";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total"));
            echo " </span><span class=\"order-total-line-value\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["totals"] ?? null), "total", []))), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        // line 38
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/order/templates/commerce-order-total-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 38,  103 => 35,  100 => 34,  97 => 33,  86 => 30,  81 => 29,  76 => 28,  68 => 25,  65 => 24,  63 => 23,  59 => 22,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce/modules/order/templates/commerce-order-total-summary.html.twig", "/app/modules/contrib/commerce/modules/order/templates/commerce-order-total-summary.html.twig");
    }
}
