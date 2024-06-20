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

/* default/template/common/upaay_s.twig */
class __TwigTemplate_0aed1cf8569ed3f3b508900e3399d280fb28777ca6bac08de4e154ba43f23697 extends \Twig\Template
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
   @media (max-width: 768px) {
      .gradient-border::after {
         display: none;
     }
      .cus_ff {
         font-size: 22px !important;
      }
      .cus_f1 {
         font-size: 18px !important;
      }

      .cus_p1 {
       
         margin-top: 10px;
      }
   }
   .gradient-border {
      position: relative;
      padding-right: 20px; /* To avoid overlapping of the content with the pseudo-element */
  }

  .gradient-border::after {
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      width: 2px; /* Width of the border */
      background: linear-gradient(to bottom, #CBB9ED 0%, #9143CE 50%, #57007B 100%);
  }
</style>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
<div class=\"slider-area pb-3\">

   <div class=\"row\">
      <div class=\"slider_banner col-12 desktop-banner\">
         <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 42
            echo "            <a href=\"#\">
               <img src=\"image/sc1.png\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 51
            echo "            <a href=\"#\">
               <img src=\"image/sc1.png\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "         </div>
      </div>
   </div>
</div>
<section class=\"container mt-4\">

   <div class=\"container\" style=\"background-color: #F4EEFF;\">
      <div class=\"row p-md-5\">
         <div class=\"col-md-6\">
            <img src=\"image/scc1.png\" alt=\"\" width=\"100%\">
         </div>
         <div class=\"col-md-6\">
            <img src=\"image/01.png\" alt=\"\">
            <h2 class=\"mt-3 \" style=\"font-weight: 700;\">Getting To Know You</h2>
            <p class=\"mt2\" style=\"max-width: 70%;\">The journey to financial clarity starts with a conversation. In our initial consultation, we don't just talk; we listen—to understand your financial narrative, your worries, your aspirations. This is not just a chat; it’s the groundwork for a strategy that fits you like a glove.</p>
         </div>
      </div>
   </div>
</section>

<section class=\"container\">
   <div class=\"row justify-content-between\">
      <div class=\"col-md-4 gradient-border\" >
         
         <img src=\"image/up3.png\" alt >
         <h6 class=\"cus_f2 bold text-start\" style=\"font-size: 44px;color:#000;\">Empathy Meets
            <br><span style=\"font-weight: 700;\"> Accuracy</span></h6>
      
      </div>
      <div class=\"col-md-7 align-content-center\">
        
         <p class=\"cus_p1 text-startpt-3\"
            style=\"font-size:24px;color:#000;margin:auto;font-weight: 400;  line-height: 1.5;\">Here’s the truth—we care. Not just about numbers, but about how those numbers affect your life. Our advice is always tailored, never generic. We’re here to make a difference, and we take that seriously.</p>

      </div>
      <div class=\"col-md-12 mt-3\">
         <img src=\"image/up4.png\" alt=\"img\" width=\"100%\">
      </div>
   </div>
</section>

<br>
<img src=\"image/ab4.png\" alt=\"\" width=\"100%\">
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>

   \$(document).ready(function () {
      \$('.accordion-header').click(function () {
         const target = \$(this).data('target');

         // Toggle the clicked accordion section
         \$('#' + target).slideToggle();

         // Toggle the active class on the clicked header and rotate the icon
         \$(this).toggleClass('active').find('i').toggleClass('fa-chevron-down fa-chevron-up');

         // Hide other accordion sections and reset their icons
         \$('.accordion-content').not('#' + target).slideUp();
         \$('.accordion-header').not(this).removeClass('active').find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
      });
   });

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
        // line 130
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/upaay_s.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 130,  112 => 55,  103 => 51,  99 => 50,  93 => 46,  84 => 42,  80 => 41,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/upaay_s.twig", "");
    }
}
