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

/* default/template/account/address_list.twig */
class __TwigTemplate_389382a9681c53da6c9eeb31dee090fc20e43523dcf71c394ea89a5259ae76fc extends \Twig\Template
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
  .address-card{
    border:2px solid #f1f1f1;
    padding:5px;
    max-width:300px;
    margin:auto;
    text-transform:capitalize;
  }
  .address-card a{
    float:left;
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
              <li class=\"breadcrumb-item\"><a href=\"index.php?route=common/home\"><i class=\"fa fa-home\"></i></a>
              </li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">
              <a href=\"index.php?route=account/account\">
                account
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb area end -->
<div id=\"account-address\" class=\"container\">
 

  <div class=\"row\">
   
    <div style=\"min-height:600px\" id=\"content\" class=\"col-sm-12 text-center\">";
        // line 42
        echo ($context["content_top"] ?? null);
        echo "
    <br /><br /> 
    <h2>";
        // line 44
        echo ($context["text_address_book"] ?? null);
        echo "</h2>
    <br /> 
    
      ";
        // line 47
        if (($context["addresses"] ?? null)) {
            // line 48
            echo "      <div class=\"row\">
     ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 50
                echo "      <div class=\"col-sm-4\">
        <div class=\"address-card\">
        ";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["result"], "address", [], "any", false, false, false, 52);
                echo "
       
      </div>
      <a href=\"";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["result"], "update", [], "any", false, false, false, 55);
                echo "\" class=\"btn btn-hero\">";
                echo ($context["button_edit"] ?? null);
                echo "</a>
       <a style=\"margin-top:35px\" href = \"";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["result"], "delete", [], "any", false, false, false, 56);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\" onclick=\"return confirm('";
                echo ($context["text_confirm"] ?? null);
                echo "')\">";
                echo ($context["button_delete"] ?? null);
                echo "</a></td>
     
      </div>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "    </div>

      ";
        } else {
            // line 63
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 65
        echo "      <br /><br />
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
        <div class=\"buttons\">
<a href=\"";
        // line 69
        echo ($context["add"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_new_address"] ?? null);
        echo "</a>
      </div><br><br>
        </div>
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
    }

    public function getTemplateName()
    {
        return "default/template/account/address_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 78,  161 => 75,  150 => 69,  144 => 65,  138 => 63,  133 => 60,  117 => 56,  111 => 55,  105 => 52,  101 => 50,  97 => 49,  94 => 48,  92 => 47,  86 => 44,  81 => 42,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/address_list.twig", "");
    }
}
