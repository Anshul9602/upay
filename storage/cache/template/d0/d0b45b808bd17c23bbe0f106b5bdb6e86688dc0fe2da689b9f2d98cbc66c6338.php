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
class __TwigTemplate_ce010d202b7c7515e2f045dccbb5267558869c712502b2cfb53e8c3ffec52b91 extends \Twig\Template
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
   .splide1 .splide__arrows{
      position: absolute;
      bottom: 20%;
   }
   .splide__arrow {
    -ms-flex-align: center;
    align-items: center;
    background: transparent;
    border: 0;
     border-radius: 0% !important; 
    cursor: pointer;
    display: -ms-flexbox;
    display: flex;
    height: 5em !important;
    -ms-flex-pack: center;
    justify-content: center;
    opacity: .7;
    padding: 0;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 5em !important;
    z-index: 1;
}
   .splide1 .splide__arrows .splide__arrow--next {
    left: 5em; 
    background-color: #906CD4;
}
   .splide1 .splide__arrows .splide__arrow--prev {
    left: 0em; 
    background-color: #EFEDEA;
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
        // line 141
        echo ($context["date_end"] ?? null);
        echo "</p>
   <div class=\"row\">
      <div class=\"slider_banner col-12 desktop-banner\">
         <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 146
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 146);
            echo "\">
               <img src=\"";
            // line 147
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 147);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 155
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 155);
            echo "\">
               <img src=\"";
            // line 156
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 156);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
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
   
   <section class=\"splide splide1\" aria-label=\"Splide Basic HTML Example\">
  <div class=\"splide__track\">
\t\t<ul class=\"splide__list\">
\t\t\t<li class=\"splide__slide\"><img src=\"image/slid.png\" class=\"w-100\" alt=\"\" class=\" img-responsive\" /></li>
\t\t\t<li class=\"splide__slide\"><img src=\"image/slid.png\" class=\"w-100\" alt=\"\" class=\" img-responsive\" /></li>
\t\t\t<li class=\"splide__slide\"><img src=\"image/slid.png\" class=\"w-100\" alt=\"\" class=\" img-responsive\" /></li>
\t\t</ul>
  </div>
</section>
</section>


<script>
   var splide = new Splide( '.splide1', {
  type   : 'loop',
  perPage: 1,
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
        // line 217
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
        return array (  289 => 217,  229 => 159,  220 => 156,  215 => 155,  211 => 154,  205 => 150,  196 => 147,  191 => 146,  187 => 145,  180 => 141,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
