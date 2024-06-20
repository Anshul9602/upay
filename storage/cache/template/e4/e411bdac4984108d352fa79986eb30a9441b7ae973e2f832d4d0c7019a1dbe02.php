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

/* default/template/common/upaay_d.twig */
class __TwigTemplate_672edc52ec19e4857721ea63da3db134387c8d1096acb3b3555e696befbfe521 extends \Twig\Template
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

      .cus_ff {
         font-size: 22px !important;
      }

      .cus_p {
         max-width: 90% !important;
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 36
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 36);
            echo "\">
               <img src=\"";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 37);
            echo "\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 45
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 45);
            echo "\">
               <img src=\"";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 46);
            echo "\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "         </div>
      </div>
   </div>
</div>
<section class=\"container\">

   <h6 class=\"cus_f1 bold text-center\" style=\"font-size: 24px;color:#4D5053;font-weight: 700;\">Expertise That Works for
      You </h6>
   <h1 class=\"cus_ff bold text-center mt-3\" style=\"font-size: 32px;color:#000;font-weight: 700;\">A Great Place to Invest
   </h1>
   <p class=\"cus_p text-center pt-3\" style=\"color:#4D5053;max-width:50%;margin:auto;font-weight: 500;\">Our team is more
      than just technically adept; we're street-smart professionals who thrive on challenges. With us, you receive the
      best strategies and plans—cost-effective and completely transparent. Focus on what you do best, while we make your
      money work as hard as you do. Let us handle the intricacies of finance, so you can enjoy the peace of mind that
      comes with knowing your finances are in expert hands.</p>
   <div class=\"mt-4\">
      <img src=\"image/up1.png\" alt=\"\" width=\"100%\">
   </div>

</section>
<section class=\"container\">
   <div class=\"row\">
      <div class=\"col-md-5\"><img src=\"image/up2.png\" alt width=\"100%\"></div>
      <div class=\"col-md-7 align-content-center\">

         <h6 class=\"cus_f1 bold text-start\" style=\"font-size: 24px;color:#4D5053;font-weight: 700;\">Your Financial
            Clarity Partner</h6>
         <h1 class=\"cus_ff bold text-start mt-3\" style=\"font-size: 48px;color:#000;font-weight: 700;\">Straight Talk,<br>
            Solid Results</h1>
         <p class=\"cus_p1 text-startpt-3\"
            style=\"font-size:24px;color:#4D5053;margin:auto;font-weight: 500;\">We promise to keep it real.
            No financial mumbo-jumbo. Just honest advice, designed to make your life easier. Whether you’re planning for
            the future, managing a crisis, or looking to expand, we're here as your confidants, ensuring that every
            financial decision moves you closer to your goals.</p>

      </div>
   </div>
</section>
<section class=\"container\">
   <div class=\"row\">
      <div class=\"col-md-5 gradient-border\" >
         
         <img src=\"image/up3.png\" alt >
         <h6 class=\"cus_f2 bold text-start\" style=\"font-size: 44px;color:#000;\">Empathy Meets
            <br><span style=\"font-weight: 700;\"> Accuracy</span></h6>
      
      </div>
      <div class=\"col-md-7 align-content-center\">
        
         <p class=\"cus_p1 text-startpt-3\"
            style=\"font-size:24px;color:#000;margin:auto;font-weight: 400;\">Here’s the truth—we care. Not just about numbers, but about how those numbers affect your life. Our advice is always tailored, never generic. We’re here to make a difference, and we take that seriously.</p>

      </div>
      <div class=\"col-md-12 mt-2\">
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
        // line 142
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/upaay_d.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 142,  116 => 49,  107 => 46,  102 => 45,  98 => 44,  92 => 40,  83 => 37,  78 => 36,  74 => 35,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/upaay_d.twig", "");
    }
}
