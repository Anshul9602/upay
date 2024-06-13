<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/account/order_list.twig */
class __TwigTemplate_97b799b101c870f2087946bc303f214d36fa31cf4ec32d2c817df0ebca941928 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<style>
   ul.list{
   max-height:300px;
   overflow-y:auto !important;
   }
</style>
<!-- breadcrumb area start -->
<div style=\"background:#f1f1f1; border-bottom:thin solid #fff\" class=\"breadcrumb-area\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"breadcrumb-wrap\">
          <nav aria-label=\"breadcrumb\">
            <ul class=\"breadcrumb\">
           
               ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a></li>/
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb area end -->
<div id=\"account-order\" style='min-height:600px;' class=\"container\">
  
  <div class=\"row\">";
        // line 30
        echo ($context["column_left"] ?? null);
        echo "
    
    <div id=\"content\" class=\"col-sm-12 text-center\">
    <br />
      <h1>";
        // line 34
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 35
        if (($context["orders"] ?? null)) {
            // line 36
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-right\">";
            // line 40
            echo ($context["column_order_id"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 41
            echo ($context["column_customer"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 42
            echo ($context["column_product"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 43
            echo ($context["column_status"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 44
            echo ($context["column_total"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 45
            echo ($context["column_date_added"] ?? null);
            echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
           ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 51
                echo "            <tr>
              <td class=\"text-right\">#";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 52);
                echo "</td>
              <td class=\"text-left\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 53);
                echo "</td>
              <td class=\"text-right\">";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 54);
                echo "</td>
              <td class=\"text-left\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 55);
                echo "</td>
              <td class=\"text-right\">";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 56);
                echo "</td>
              <td class=\"text-left\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 57);
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 58);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "          </tbody>
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 65
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 66
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 69
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 71
        echo "      <div class=\"buttons clearfix\">
      <br />
        <div class=\"texxt-center\"><a href=\"";
        // line 73
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 75
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    </div>
</div>
";
        // line 78
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 78,  205 => 75,  198 => 73,  194 => 71,  188 => 69,  182 => 66,  178 => 65,  172 => 61,  161 => 58,  157 => 57,  153 => 56,  149 => 55,  145 => 54,  141 => 53,  137 => 52,  134 => 51,  130 => 50,  122 => 45,  118 => 44,  114 => 43,  110 => 42,  106 => 41,  102 => 40,  96 => 36,  94 => 35,  90 => 34,  83 => 30,  71 => 20,  60 => 18,  56 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/order_list.twig", "");
    }
}
