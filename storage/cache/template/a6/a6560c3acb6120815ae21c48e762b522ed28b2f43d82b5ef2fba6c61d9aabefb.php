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

/* default/template/common/solution.twig */
class __TwigTemplate_8cb28bdc6bff8702b8a02ff765d24daee4778d99e95f3092e2285e051a95f0a6 extends \Twig\Template
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
   .tabs {
      width: 80%;
      margin: 20px auto;
   }

   .tab-buttons {
      display: flex;
      border-bottom: 2px solid #ccc;
   }

   .tab-button {

      padding: 10px;
      cursor: pointer;
      background: #f1f1f1;
      border: none;
      outline: none;
      transition: background 0.3s;
   }

   .tab-button:hover {
      background: #ddd;
   }

   .tab-button.active {
      background: #fff;
      border-bottom: 2px solid #007BFF;
      color: #007BFF;
   }

   .tab-content {
      border: 1px solid #ccc;
      border-top: none;
      padding: 20px;
      background: #fff;
   }

   .tab-pane {
      display: none;
   }

   .tab-pane.active {
      display: block;
   }
</style>

<div class=\"slider-area pb-3\">

   <div class=\"row\">
      <div class=\"slider_banner col-12 desktop-banner\">
         <div
            class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 57
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 57);
            echo "\">
               <img src=\"";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 58);
            echo "\" alt
                  class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div
            class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 68
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 68);
            echo "\">
               <img src=\"";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 69);
            echo "\" alt
                  class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "         </div>
      </div>
   </div>
</div>
<section class=\"container\">

   <h1 class=\"cus_ff bold text-center\"
      style=\"font-size: 44px;color:#000;font-weight: 700;\">Services for
      Individuals
   </h1>
   <h5 class=\"cus_p text-center pt-3\"
      style=\"color:#4D5053;max-width:50%;margin:auto;font-weight: 500;\">we offer
      a range
      of personal financial services designed to secure your and your family’s
      financial future:</h5>
   <div class=\"tabs row\">
      <div class=\"tab-buttons col-md-3 row\">
         <button class=\"col-12 tab-button active\" data-tab=\"tab1\">
            <img src=\"image/wm.png\" alt=\"img\" width=\"51\">
            <h6 class=\"mt-3\">Wealth Management</h6>
         </button>
         <button class=\"col-12 tab-button\" data-tab=\"tab2\">Tab 2</button>
         <button class=\"col-12 tab-button\" data-tab=\"tab3\">
            <img src=\"image/tp.png\" alt=\"img\" width=\"51\">
            <h6>Tax Planning and Preparation</h6>
         </button>
         <button class=\"col-12 tab-button\" data-tab=\"tab4\">
            <img src=\"image/es.png\" alt=\"img\" width=\"51\">
            <h6>Tax Planning and Preparation</h6>
         </button>
         <button class=\"col-12 tab-button\" data-tab=\"tab5\">
            <img src=\"image/ip.png\" alt=\"img\" width=\"51\">
            <h6>Tax Planning and Preparation</h6>
         </button>
      </div>
      <div class=\"tab-content col-md-9\">
         <div class=\"tab-pane active\" id=\"tab1\">

         </div>
         <div class=\"tab-pane\" id=\"tab2\">Content for Tab 2</div>
         <div class=\"tab-pane\" id=\"tab3\">
           
         </div>
      </div>
   </div>
</section>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>
   \$(document).ready(function () {
      \$('.tab-button').click(function () {
         // Remove active class from all buttons and panes
         \$('.tab-button').removeClass('active');
         \$('.tab-pane').removeClass('active');

         // Add active class to the clicked button and corresponding pane
         \$(this).addClass('active');
         \$('#' + \$(this).data('tab')).addClass('active');
      });
   });
</script>
";
        // line 135
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/solution.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 135,  140 => 73,  130 => 69,  125 => 68,  121 => 67,  114 => 62,  104 => 58,  99 => 57,  95 => 56,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/solution.twig", "");
    }
}
