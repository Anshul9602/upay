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
class __TwigTemplate_3e865be72388094cce6a54aa22a55e554d3c91b688345537b6309d2b9cf845fc extends \Twig\Template
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

      padding: 30px;
      cursor: pointer;
      background: #fff;
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
   <div class=\"mt-4\">
      <div class=\"tabs row\">
         <div class=\"tab-buttons col-md-2 row\">
            <button class=\"col-12 tab-button active\" data-tab=\"tab1\">
               <img src=\"image/wm.png\" alt=\"img\" width=\"51\">
               <p class=\"mt-3\" style=\"color:#212124;\">Wealth Management</p>
            </button>
            <button class=\"col-12 tab-button\" data-tab=\"tab2\"><img
                  src=\"image/tp.png\" alt=\"img\" width=\"51\">
               <p class=\"mt-3\" style=\"color:#212124;\">Retirement
                  Planning</p></button>
            <button class=\"col-12 tab-button\" data-tab=\"tab3\">
               <img src=\"image/tp.png\" alt=\"img\" width=\"51\">
               <p class=\"mt-3\" style=\"color:#212124;\">Tax Planning and
                  Preparation</p>
            </button>
            <button class=\"col-12 tab-button\" data-tab=\"tab4\">
               <img src=\"image/ep.png\" alt=\"img\" width=\"51\">
               <p class=\"mt-3\" style=\"color:#212124;\">Estate Planning</p>
            </button>
            <button class=\"col-12 tab-button\" data-tab=\"tab5\">
               <img src=\"image/ip.png\" alt=\"img\" width=\"51\">
               <p class=\"mt-3\" style=\"color:#212124;\"> Insurance Planning</p>
            </button>
         </div>
         <div class=\"tab-content col-md-9\">
            <div class=\"tab-pane active\" id=\"tab1\">
               <div class=\"row \">
                  <div class=\"col-md-6\">
                     <h3>A passion for putting you first.</h3>
                     <div class=\"row mt-4\">
                        <div class=\"col-md-1 justify-content-center\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-10\">
                           <h6><span
                                 style=\"font-weight: 700;color:#000;\">Retirement
                                 Savings Plans: </span> Want to retire without
                              financial stress? We help you build a nest egg
                              that will let you enjoy your golden years.</h6>
                        </div>
                     </div>
                     <div class=\"row mt-4\">
                        <div class=\"col-md-1 justify-content-center\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-10\">
                           <p><span
                                 style=\"font-weight: 700;color:#000;\"> Pension Planning: </span> Navigating pension options can be tricky. We guide you through the best choices to ensure a steady income stream in retirement.</p>
                        </div>
                     </div>
                     <div class=\"row mt-4\">
                        <div class=\"col-md-1 justify-content-center\"><img
                              src=\"image/round.png\" alt width=\"25\"></div>
                        <div class=\"col-md-10\">
                           <p><span
                                 style=\"font-weight: 700;color:#000;\">Post-Retirement Income Planning: </span> Stay financially secure even after you stop working. We design plans that keep the money flowing long after retirement.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"tab-pane\" id=\"tab2\">Content for Tab 2</div>
            <div class=\"tab-pane\" id=\"tab3\">

            </div>
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
        // line 173
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
        return array (  242 => 173,  140 => 73,  130 => 69,  125 => 68,  121 => 67,  114 => 62,  104 => 58,  99 => 57,  95 => 56,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/solution.twig", "");
    }
}
