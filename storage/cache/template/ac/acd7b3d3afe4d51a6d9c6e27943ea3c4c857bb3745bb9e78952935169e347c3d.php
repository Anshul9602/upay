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
class __TwigTemplate_05ccadb709a9af1d3448857ec4e38f3b2cd098e9ceaa0347baf9441d388652e3 extends \Twig\Template
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
<!-- Swiper JS -->

<!-- hero slider area start -->
<section class=\"slider-area \">
   <p style=\"display:none\" id=\"ed\">";
        // line 104
        echo ($context["date_end"] ?? null);
        echo "</p>
   <div class=\"row\">
      <div class=\"slider_banner col-12 desktop-banner\">
         <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 109
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 109);
            echo "\">
               <img src=\"";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 110);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 118
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 118);
            echo "\">
               <img src=\"";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 119);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
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
   <div class=\"swiper topSwiper5\">
                  <div class=\"swiper-wrapper\">
                    
                     <div class=\"swiper-slide\">
                        <img src=\"image/slid.png\" class=\"w-100\" alt=\"\" class=\" img-responsive\" />
                     </div>
                  
                  </div>
               </div>
</section>
<section class=\" \">
   <div class=\"container\">
      <div class=\"row v-center\">
         <div class=\"col-md-3 hide-phone text-center\">
            <video style=\"width:100%\" autoplay loop muted playsinline src=\"assets/vids/home.mp4\"></video>

         </div>
         <div class=\"col-md-9 col-12 \">
            <img class=\"hide-phone\" style=\"float:left; padding:0px 10px\" src=\"assets/img/title.png\" />

            <p class=\"top-picks-line hide-desk text-center mt-3\"
               style=\"font-size:26px; font-family: 'Hina Mincho' !important;\">
               <img src=\"assets/img/Star.png\" style=\"margin-right:11px;width: 25px;\">About Us
            </p>
            <p class=\"about-description\">
               Solitaire Jewelry is a Hongkong based provider of bespoke jewelry with a passion for design . Over the
               past 20 years, the company has created over 3500 designs, working with clients from diverse countries.
               Every piece of jewelry is handled with care and attention to detail.
               <br />
               The company follows OECD guidelines and adheres to the Kimberly process and Responsible Jewellery
               Council. The team is made up of individuals ranging from 25 to 65, providing a unique blend of youthful
               ambition and tradition, as well as seasoned jewelry veterans.
            </p>
            <div class=\"row\">
               <div class=\"col-md-12 col-7 d-flex justify-contant-start\" style=\"align-items: center;\">
                  <a href=\"index.php?route=common/about\">
                     <button class=\"btn btn-primary btn-gold\">Know More...</button>
                  </a>
               </div>
               <div class=\"col-4 hide-desk\"><video style=\"width:100%\" autoplay loop muted playsinline
                     src=\"assets/vids/home.mp4\"></video></div>
            </div>

         </div>

      </div>
      <br />
   </div>
</section>
<section class=\"\" style=\"background:#003B31;padding: 20px 0px;\">
   <div class=\"row op_row m-0\">
      <div class=\"col-md-4 col-4 row d-flex justify-content-center op1\" style=\"align-items: center;margin-top: 15px;\">
         <div class=\"col-md-4 d-flex justify-content-end\"><img style=\"max-height:34px; \" src=\"assets/img/dymond.png\" />
         </div>
         <div class=\"col-md-8 text-center\">
            <p class=\"phb\">Original Product</p>
            <p class=\"ppb\">Ethical Sourcing,
               Genuine Diamonds,
               18 K / 14 K Pure Gold
            </p>
         </div>
      </div>
      <div class=\"col-md-4 col-4 row d-flex justify-content-center op1\" style=\"align-items: center;\">
         <div class=\"col-md-4 d-flex justify-content-end\"><img style=\"max-height:40px; margin-top:1px\"
               src=\"assets/img/del.png\" /></div>
         <div class=\"col-md-8 text-center\">
            <p class=\"phb\">International Shipment</p>
            <p class=\"ppb\">Your orders are shipped
               seamlessly between
               countries
            </p>
         </div>
      </div>
      <div class=\"col-md-4 col-4 row d-flex justify-content-center op1\">
         <div class=\"col-md-4 d-flex justify-content-end\">
            <img style=\"max-height:40px; margin-top:1px\" src=\"assets/img/lock.png?v1.1\" />
         </div>
         <div class=\"col-md-8 text-center\">
            <p class=\"phb\">Secure Payment</p>
            <p class=\"ppb\">Your payments are secure
               with our private security
               network.
            </p>
         </div>
      </div>
   </div>
   </div>
</section>

<script>



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

   var swiper = new Swiper(\".topSwiper5\", {
      pagination: {
         el: \".top-swiper-pagination\",
         clickable: true
      },
      navigation: {
         nextEl: \".swiper-button-next\",
         prevEl: \".swiper-button-prev\"
      },
      loop: true,
      autoplay: 2000,
      speed: 800,
      // Default parameters
      slidesPerView: 1,
      spaceBetween: 1,
      // Responsive breakpoints
      breakpoints: {
         120: {
            slidesPerView: 1,
            spaceBetween: 20
         },
         640: {
            slidesPerView: 2,
            spaceBetween: 20
         },
         768: {
            slidesPerView: 3,
            spaceBetween: 40
         },
         820: {
            slidesPerView: 3,
            spaceBetween: 20
         },
         1124: {
            slidesPerView: 5,
            spaceBetween: 50
         }
      }

   });


   var swiper = new Swiper(\".topSwiper4\", {
      pagination: {
         el: \".top-swiper-pagination\",
         clickable: true
      },
      navigation: {
         nextEl: \".swiper-button-next\",
         prevEl: \".swiper-button-prev\"
      },
      loop: true,
      autoplay: 2000,
      speed: 800,
      slidesPerView: 5,
      spaceBetween: 1,
      breakpoints: {
         120: {
            slidesPerView: 1,
            spaceBetween: 20
         },
         640: {
            slidesPerView: 2,
            spaceBetween: 20
         },
         768: {
            slidesPerView: 3,
            spaceBetween: 40
         },
         820: {
            slidesPerView: 4,
            spaceBetween: 20
         },
         1124: {
            slidesPerView: 5,
            spaceBetween: 50
         }
      }

   });



   \$(document).ready(function () {




      const today = new Date();

      var c_date = \$(\"#ed\").text() + \" 23:59:59\";
      //var c_date = \"2023-05-04 23:59:59\";
      console.log(c_date);
      const expiry = new Date(c_date);


      var dif = expiry.getTime() - today.getTime();
      if (dif > 0) {
         var Seconds_from_T1_to_T2 = dif / 1000;
         var Seconds_Between_Dates = Math.abs(Seconds_from_T1_to_T2);
         console.log(Seconds_Between_Dates);

         var second = Seconds_Between_Dates;
         setInterval(function () {
            second = second - 1;



            var decimalTimeString = second / 86400; // for days
            //var decimalTimeString = second / 3600;
            var decimalTime = parseFloat(decimalTimeString);
            decimalTime = decimalTime * 60 * 60;
            var hours = Math.floor((decimalTime / (60 * 60)));
            decimalTime = decimalTime - (hours * 60 * 60);
            var minutes = Math.floor((decimalTime / 60));
            decimalTime = decimalTime - (minutes * 60);
            var seconds = Math.round(decimalTime);
            console.log(decimalTimeString);
            if (hours < 10) {
               hours = \"0\" + hours;
            }
            if (minutes < 10) {
               minutes = \"0\" + minutes;
            }
            if (seconds < 10) {
               seconds = \"0\" + seconds;
            }

            \$(\".hr\").text(hours);
            \$(\".mm\").text(minutes);
            \$(\".ss\").text(seconds);


            // console.log(\"\" + hours + \":\" + minutes + \":\" + seconds);
         }, 1000)



      } else {

         console.error(\"not implemented\");

         \$(\"#hr\").text(\"-\");
         \$(\"#mm\").text(\"-\");
         \$(\"#ss\").text(\"-\");
         \$(\"#hr1\").text(\"-\");
         \$(\"#mm1\").text(\"-\");
         \$(\"#ss1\").text(\"-\");

      }

   })

</script>

";
        // line 404
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
        return array (  476 => 404,  192 => 122,  183 => 119,  178 => 118,  174 => 117,  168 => 113,  159 => 110,  154 => 109,  150 => 108,  143 => 104,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
