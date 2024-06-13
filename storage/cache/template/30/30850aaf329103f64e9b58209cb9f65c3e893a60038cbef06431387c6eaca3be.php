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

/* default/template/common/home.twig */
class __TwigTemplate_4f01f76f1dec85f765a1f0cf38a95e9a0e2f4e7d4366e91fded7abc0ca7a1879 extends \Twig\Template
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
   section {
      padding: 40px 0;
   }

   @media screen and (max-width:650px) {
      .mobile-banner {
         display: block !important;
      }

      .desktop-banner {
         display: none !important;
      }

      .product_name {
         font-size: 12px;
         margin-top: 5px;
      }
   }

   @media screen and (min-width:651px) {
      .mobile-banner {
         display: none !important;
      }

      .desktop-banner {
         display: block !important;
      }

      .op_row {
         max-width: 80% !important;
         margin: auto !important;
      }

      .image a img {
         width: 90% !important;
         margin: auto;
      }
   }

   @media screen and (max-width:767px) {
      .top-picks-line {
         margin: auto;
      }

      .star-left,
      .star-right {
         position: absolute;
         width: 25px;
      }

      .star-left {
         margin-top: 10px;
         margin-right: 2px;
      }

      .star-right {
         margin-top: -40px;
         margin-left: -25px;
      }

      .mobile-padding-0 {
         padding: 0px;
      }

      .about-heading {
         font-size: 16px;
      }

      .about-description {
         font-size: 12px;
      }

      .op1 .col-md-4 img {
         margin: auto;
      }

      .op1.col-md-4 {
         padding: 0px 2px !important;
      }
   }

   .slick-prev::before,
   .slick-next::before {
      display: none;
   }

   .serv-img {
      position: relative;
      width: 100%;
      height: auto;
   }
</style>
<!-- Swiper Slider CSS-->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css\" />
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css\" />
<script src=\"
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
\"></script>
<link href=\"
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
\" rel=\"stylesheet\">
<!-- Swiper JS -->

<!-- hero slider area start -->
<section class=\"slider-area \">
   <p style=\"display:none\" id=\"ed\">";
        // line 110
        echo ($context["date_end"] ?? null);
        echo "</p>
   <div class=\"row\">
      <div class=\"slider_banner col-12 desktop-banner\">
         <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 115
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 115);
            echo "\">
               <img src=\"";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 116);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 124
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 124);
            echo "\">
               <img src=\"";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 125);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "         </div>
      </div>
   </div>
</section>


<section class=\"relative\" style=\"position: relative;\">
   <img src=\"image/top.png\" class=\"w-80\" alt=\"\" class=\" img-responsive\" style=\"max-width: 90%;\" />
   <div class=\"ccc\"
      style=\"max-width: 600px;padding: 30px;background: #F2F1F0;border-radius: 20px;position: absolute;bottom: 0;z-index: 9999;right: 0;\">
      <p style=\"font-size: 28px;color:#656565;\"><span style=\"
    font-weight: 900;color:#692BD8;\">Feeling overwhelmed by financial decisions? </span>You're not alone.</p><br />
      <p style=\"font-size: 26px;color:#656565;\">

         At Upaaye Consulting, we understand that managing your finances can seem daunting and we're here to help clear
         the fog.</p>
   </div>
</section>
<section class=\"container\"><img src=\"image/about.png\" class=\"w-100\" alt=\"\" class=\" img-responsive\" /></section>
<section class=\"container\"><img src=\"image/slid.png\" class=\"w-100\" alt=\"\" class=\" img-responsive\" /></section>
<section class=\"container\">
   
   <section class=\"splide\" aria-label=\"Splide Basic HTML Example\">
  <div class=\"splide__track\">
\t\t<ul class=\"splide__list\">
\t\t\t<li class=\"splide__slide\">Slide 01</li>
\t\t\t<li class=\"splide__slide\">Slide 02</li>
\t\t\t<li class=\"splide__slide\">Slide 03</li>
\t\t</ul>
  </div>
</section>
</section>


<script>
   var splide = new Splide( '.splide', {
  type   : 'loop',
  padding: '5rem',
} );

splide.mount();
   var swiper = new Swiper(\".topSwiper\", {
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 3,
      spaceBetween: 20,
      loop: true,

      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev'
      }
   });

  
</script>

";
        // line 185
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 185,  198 => 128,  189 => 125,  184 => 124,  180 => 123,  174 => 119,  165 => 116,  160 => 115,  156 => 114,  149 => 110,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
