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
class __TwigTemplate_886e1bc155f7fff48effc5043665ab6295ff38f2b8198d72753cc5cc97becd9c extends \Twig\Template
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

   .splide1 .splide__arrows {
      position: absolute;
      bottom: 13%;
      left: 10%;
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

   .splide__progress {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      width: 100%;
      height: 8px;
      background-color: #ccc;
   }

   .splide__progress__bar {
      width: 0;
      height: 8px !important;
      background-color: #906CD4 !important;
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

.upppp .ccc{
   max-width: 332px !important;
    
    right: 10% !important;
}
.ccc p{
   font-size: 16px !important;
}

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
<link rel=\"stylesheet\"
   href=\"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css\" />
<link rel=\"stylesheet\"
   href=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css\" />
<script src=\"
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
\"></script>
<link href=\"
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
\" rel=\"stylesheet\">
<!-- Swiper JS -->

<!-- hero slider area start -->
<div class=\"slider-area pb-3\">
  
   <div class=\"row\">
      <div class=\"slider_banner col-12 desktop-banner\">
         <div
            class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 180
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 180);
            echo "\">
               <img src=\"";
            // line 181
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 181);
            echo "\" alt
                  class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div
            class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 191
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 191);
            echo "\">
               <img src=\"";
            // line 192
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 192);
            echo "\" alt
                  class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "         </div>
      </div>
   </div>
</div>

<section class=\" upppp\" style=\"position: relative;\">
   <img src=\"image/top.png\" class=\"w-80\" alt class=\" img-responsive\"
      style=\"max-width: 90%;\" />
   <div class=\"ccc\"
      style=\"max-width: 600px;padding: 30px;background: #F2F1F0;border-radius: 20px;position: absolute;bottom: 0;z-index: 9999;right: 0;\">
      <p style=\"font-size: 28px;color:#656565;\"><span style=\"
    font-weight: 900;color:#692BD8;\">Feeling overwhelmed by financial decisions?
         </span>You're not alone.</p><br />
      <p style=\"font-size: 26px;color:#656565;\">

         At Upaaye Consulting, we understand that managing your finances can
         seem daunting and we're here to help clear
         the fog.</p>
   </div>
</section>
<section class=\"container\"><img src=\"image/about.png\" class=\"w-100\" alt
      class=\" img-responsive\" /></section>

<section class=\"container\">

   <section class=\"splide splide1\" aria-label=\"Splide Basic HTML Example\">
      <div class=\"splide__track\">
         <ul class=\"splide__list\">
            <li class=\"splide__slide\"><img src=\"image/slid.png\"
                  class=\"w-100 img-responsive\" alt=\"Slide 1\" /></li>
            <li class=\"splide__slide\"><img src=\"image/slid.png\"
                  class=\"w-100 img-responsive\" alt=\"Slide 2\" /></li>
            <li class=\"splide__slide\"><img src=\"image/slid.png\"
                  class=\"w-100 img-responsive\" alt=\"Slide 3\" /></li>
         </ul>
      </div>
      <div class=\"row\" style=\"margin: auto;max-width:40%;\">

         <div class=\"col-md-1\"><span class=\"splide__counter\"
               style=\"font-size: 16px;\"></span></div>
         <div class=\"col-md-4\">
            <div class=\"splide__progress\">
               <div class=\"splide__progress__bar\"></div>

            </div>
         </div>
         <div class=\"col-md-1\"><span class=\"splide__counter2\"
               style=\"font-size: 16px;\"></span></div>
      </div>

   </section>
</section>

<section class=\"container\">
   <div class=\"row\">
      <div class=\"col-md-12 text-center solu\">
         <h3
            style=\"color: #906CD4;font-size:42px;    font-weight: 700;\">Solutions</h3>
         <h1 style=\"color: #000;font-size:50px;    font-weight: 700;\">For Your
            Business</h1>
         <p class style=\"color: #656565;font-size:24px;\">We did research what
            your company needs and<br>
            here we are providing all of them just for you</p>
      </div>
   </div>
   <div class=\"row mt-5\">

      <div class=\"row col-md-4\">
         <div class=\"col-md-12\">
            <img src=\"image/1.png\" alt width=\"100%\">
         </div>
         <div class=\"col-md-12\">
            <img src=\"image/2.png\" alt width=\"100%\">
         </div>
      </div>
      <div class=\"row col-md-4\">
         <div class=\"col-md-12\" style=\"    position: relative;\">
            <img src=\"image/3.png\" alt width=\"100%\">
            <button class=\"btn btn-primary\"
               style=\"font-size: 24px;    border-radius: 5px;    position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);\">Explore</button>
         </div>

      </div>
      <div class=\"row col-md-4\">
         <div class=\"col-md-12\">
            <img src=\"image/5.png\" alt width=\"100%\">
         </div>
         <div class=\"col-md-12\">
            <img src=\"image/6.png\" alt width=\"100%\">
         </div>
      </div>
   </div>

</section>

<section class=\"container\"
   style=\"background-image: url('image/bg.png');    background-size: cover;\">
   <div class=\"row p-3 our\">
      <div class=\"col-md-6\">
         <img src=\"image/our.png\" alt width=\"100%\">
      </div>
      <div class=\"col-md-6 row p-5\">
         <div class=\"col-md-12\">
            <h1 class=\"mt-md-5 mt-3 pb-3\"
               style=\"font-weight: 700;color:#fff;font-size:64px;\">Our
               Promise</h1>

            <p style=\"color:#fff;font-size:18px;\">We aren’t here just to offer
               advice; we’re here to make a real difference. Our commitment is
               to understand your unique financial landscape and tailor
               strategies that fit not just your life today, but also your
               vision for tomorrow. From simplifying complex financial terms to
               devising effective, cost-efficient strategies, we make sure that
               your money works for you—transparently and relentlessly.</p>
            <br><p style=\"color:#fff;font-size:18px;\">

               Why settle for standard financial advice when you can have a
               partner who champions your personal and financial growth? At
               Upaaye, we thrive on transforming financial challenges into
               victories. We’re excited about every new story we get to be a
               part of-<br>
               <span style=\"font-weight: 700;font-size:30px;\">let yours be the
                  next success story.</span></p>
                  
                  
                  
                  </div>
                  <div class=\"col-md-9\" style=\"    align-items: end; display: flex;\">
                  <ul class=\"d-flex \" style=\"justify-content: space-between;    width: 100%;\">
                  <li><img src=\"image/fa.png\" alt=\"\" width=\"50\"></li>
                  <li><img src=\"image/in.png\" alt=\"\" width=\"50\"></li>
                  <li><img src=\"image/ph.png\" alt=\"\" width=\"50\"></li>
                  <li><img src=\"image/twi.png\" alt=\"\" width=\"50\"></li>
                  </ul>
                  </div>
      </div>

   </div>
</section>

<script
   src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js\"></script>
<script>
   // Initialize Splide
   var splide = new Splide('.splide1', {
      type: 'loop',
      perPage: 1,
      pagination: false, // Disable default pagination
   });

   // Function to update the progress bar and counter
   function updateProgress(splideInstance) {
      var end = splideInstance.Components.Controller.getEnd() + 1;
      var bar = splideInstance.root.querySelector('.splide__progress__bar');
      var counter1 = splideInstance.root.querySelector('.splide__counter');
      var counter2 = splideInstance.root.querySelector('.splide__counter2');
      bar.style.width = String((100 * (splideInstance.index + 1)) / end) + '%';
      counter1.textContent = `0\${splideInstance.index + 1} `;
      counter2.textContent = `0\${end}`;
   }

   // Listen for 'mounted' and 'move' events
   splide.on('mounted move', function () {
      updateProgress(splide);
   });

   // Mount Splide
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
        // line 385
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
        return array (  454 => 385,  263 => 196,  253 => 192,  248 => 191,  244 => 190,  237 => 185,  227 => 181,  222 => 180,  218 => 179,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
