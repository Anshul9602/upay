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

/* default/template/common/jewelry.twig */
class __TwigTemplate_4cafd0d1e81bd23df7abccfaa259b59a6953328aa738ce5c2e21460ed63e90b9 extends \Twig\Template
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
<!-- Swiper Slider CSS-->
<link
  rel=\"stylesheet\"
  href=\"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css\"
/>

<script src=\"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css\" />
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css\" />
<!-- Swiper JS -->
<style>
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
<style>
   .serv-name2 {
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);}

</style>
<!-- hero slider area start -->
<section class=\"slider-area\">
   <div class=\"row\">
      <div class=\"slider_banner col-12\">
         <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 114
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 114);
            echo "\">
               <img src=\"";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 115);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "         </div>
      </div>
   </div>
</section>
<!-- hero slider area end -->

<!--discover grid---->
<section class=\"shopy_by_room separation mt-20 \" style=\"margin-left: 5%;margin-right:5%;\">
   <div class=\"container\">
      <div class=\" align-items-center heading d-flex justify-content-center row \">
         <div class=\"col-md-2\" style=\"text-align: end;\"></div>
         <div class=\"col-md-6\">
            <p class=\"text-center hm\">
               <span style=\"color:rgba(0, 0, 0, 1);\">Discover</span>
               Jewelry
               <span style=\"color:rgba(0, 0, 0, 1);\">Collections</span>
            </p>
            <p class=\"text-center hm1\" style=\"margin-top:-10px\">Explore Our Jewelry Collections by Category</p>
         </div>
         <div class=\"col-md-2 \" style=\"text-align: start;\"></div>
      </div>
      <br />
       <div class=\"desktop-banner\">
         <div class=\"row\">
            <div class=\"col-md-5  text-center serv-name1 mb-3\">

               <a href=\"";
        // line 144
        echo ($context["gb1_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2\">";
        // line 145
        echo ($context["gb1_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 147
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>

            </div>
            <div class=\"row col-md-7 text-center serv-name1 mb-2\" style=\"margin-left: 0px;\">
               <div class=\"col-md-12 col-sm-12 mb-3 mobile-padding-0\">
                  <a href=\"";
        // line 153
        echo ($context["gb2_link"] ?? null);
        echo "\">
                     <p class=\"serv-name2\">";
        // line 154
        echo ($context["gb2_title"] ?? null);
        echo "
                     </p>
                     <img src=\"image/";
        // line 156
        echo ($context["gb2_image"] ?? null);
        echo "\" alt=\"\" class=\"zoom serv-img\" title=\"\" />
                  </a>
               </div>
               <div class=\"col-md-12 col-sm-12 mb-3 mobile-padding-0\">
                  <a href=\"";
        // line 160
        echo ($context["gb3_link"] ?? null);
        echo "\">
                     <p class=\"serv-name2\">";
        // line 161
        echo ($context["gb3_title"] ?? null);
        echo "
                     </p>
                     <img src=\"image/";
        // line 163
        echo ($context["gb3_image"] ?? null);
        echo "\" alt=\"\" class=\"zoom serv-img\" title=\"\" />
                  </a>
               </div>
            </div>
            <div class=\"col-md-6  text-center serv-name1 mb-3\">
               <a href=\"";
        // line 168
        echo ($context["gb4_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2  \">";
        // line 169
        echo ($context["gb4_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 171
        echo ($context["gb4_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>
            </div>
            <div class=\"col-md-6  text-center serv-name1 mb-3\">
               <a href=\"";
        // line 175
        echo ($context["gb5_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2  \">";
        // line 176
        echo ($context["gb5_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 178
        echo ($context["gb5_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>
            </div>
         </div>
      </div>
      <div class=\"mobile-banner\" style=\"display:none;\">
         <div class=\"row \">
            <div class=\"col-md-5  text-center serv-name1 mb-3\">

               <a href=\"";
        // line 187
        echo ($context["gbmob1_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2\">";
        // line 188
        echo ($context["gbmob1_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 190
        echo ($context["gbmob1_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>

            </div>
            <div class=\"row col-md-7 text-center serv-name1 mb-2\" style=\"margin-left: 0px;\">
               <div class=\"col-md-12 col-sm-12 mb-3 mobile-padding-0\">
                  <a href=\"";
        // line 196
        echo ($context["gbmob2_link"] ?? null);
        echo "\">
                     <p class=\"serv-name2\">";
        // line 197
        echo ($context["gbmob2_title"] ?? null);
        echo "
                     </p>
                     <img src=\"image/";
        // line 199
        echo ($context["gbmob2_image"] ?? null);
        echo "\" alt=\"\" class=\"zoom serv-img\" title=\"\" />
                  </a>
               </div>
               <div class=\"col-md-12 col-sm-12 mb-3 mobile-padding-0\">
                  <a href=\"";
        // line 203
        echo ($context["gbmob3_link"] ?? null);
        echo "\">
                     <p class=\"serv-name2\">";
        // line 204
        echo ($context["gbmob3_title"] ?? null);
        echo "
                     </p>
                     <img src=\"image/";
        // line 206
        echo ($context["gbmob3_image"] ?? null);
        echo "\" alt=\"\" class=\"zoom serv-img\" title=\"\" />
                  </a>
               </div>
            </div>
            <div class=\"col-md-6  text-center serv-name1 mb-3\">
               <a href=\"";
        // line 211
        echo ($context["gbmob4_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2  \">";
        // line 212
        echo ($context["gbmob4_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 214
        echo ($context["gbmob4_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>
            </div>
            <div class=\"col-md-6  text-center serv-name1 mb-3\">
               <a href=\"";
        // line 218
        echo ($context["gbmob5_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2  \">";
        // line 219
        echo ($context["gbmob5_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 221
        echo ($context["gbmob5_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>
            </div>
         </div>
      </div>
</section>
<!--discover grid end---->
<section class=\"new-arrivals\">
   <div class=\"container ptb-50\">
      <div class=\" align-items-center heading d-flex justify-content-center row \">

         <div class=\"col-md-10\">
            <p class=\"text-center hm\">
               <span style=\"color:rgba(0, 0, 0, 1);\">Solitaire Jewelry’s</span>
               Exclusive
               <span style=\"color:rgba(0, 0, 0, 1);\">Picks</span>
            </p>
            <p class=\"text-center hm1\" style=\"margin-top:-10px;\">Bestseller products across the portal, especailly handpicked for you.</p>
         </div>

      </div>
      <div class=\"card-sale mt-50\">
         <div class=\"row\">
            <div class=\"col-md-10 d-flex justify-content-center\" style=\"    align-items: center;\">
               <div class=\"swiper topSwiper5\">
                  <div class=\"swiper-wrapper\">
                     ";
        // line 247
        if (($context["products"] ?? null)) {
            // line 248
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 249
                echo "                     <div class=\"swiper-slide\">
                        <div class=\"product-card text-center\">
                           <div class=\"image\">
                              <a onclick=\"\" href=\"";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 252);
                echo "\">
                                 <img onclick=\"\" style=\"z-index: 99999999;width:176px;\" src=\"";
                // line 253
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 253);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 253);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 253);
                echo "\" class=\"img-responsive pthumb\" />
                              </a>
                           </div>
                           <a onclick=\"\" href=\"";
                // line 256
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 256);
                echo "\">
                              <p class=\"product_name\" style=\"color:  rgba(0, 59, 49, 1);\">
                                 ";
                // line 258
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 258);
                echo "
                              </p>
                           </a>
                           ";
                // line 261
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 261)) {
                    // line 262
                    echo "                           <p class=\"price  mt-10 mb-10\" style=\"color:  rgba(0, 59, 49, 1);\">
                              ";
                    // line 263
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 263)) {
                        // line 264
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 264);
                        echo "
                              ";
                    } else {
                        // line 266
                        echo "                              <span style=\"white-space: nowrap\" class=\"price-new\">
                                 ";
                        // line 267
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 267);
                        echo "
                              </span>
                              <span style=\"text-decoration:none; color: #1677BC;display:none;\">";
                        // line 269
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 269);
                        echo "% OFF</span>
                              </span>
                              <span style=\"white-space: nowrap;color: rgba(0, 59, 49, 1);\" class=\"price-old\">
                                 ";
                        // line 272
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 272);
                        echo "
                              </span>
                              ";
                    }
                    // line 275
                    echo "                           </p>
                           ";
                }
                // line 277
                echo "                           <button class=\"btn btn-primary\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 277);
                echo "');\">View Product</button>
                        </div>
                     </div>
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            echo "                     ";
        }
        // line 282
        echo "                  </div>
               </div>
            </div>
            <div class=\"col-md-2 hide-phone\">
            <a href=\"index.php?route=product/category&path=94\">
               <img src=\"assets/img/G1.png\" alt=\"main-image\" />
            </a>
         </div>

         </div>
      </div>
   </div>
</section>

<script>
  
 
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
      autoplay: 4000,
      speed: 800,
      // Default parameters
      slidesPerView: 4,
      spaceBetween: 1,
      // Responsive breakpoints
      breakpoints: {
          120: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 50,
          },
        },
   });
  


  
</script>
";
        // line 341
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/jewelry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 341,  479 => 282,  476 => 281,  465 => 277,  461 => 275,  455 => 272,  449 => 269,  444 => 267,  441 => 266,  435 => 264,  433 => 263,  430 => 262,  428 => 261,  422 => 258,  417 => 256,  407 => 253,  403 => 252,  398 => 249,  393 => 248,  391 => 247,  362 => 221,  357 => 219,  353 => 218,  346 => 214,  341 => 212,  337 => 211,  329 => 206,  324 => 204,  320 => 203,  313 => 199,  308 => 197,  304 => 196,  295 => 190,  290 => 188,  286 => 187,  274 => 178,  269 => 176,  265 => 175,  258 => 171,  253 => 169,  249 => 168,  241 => 163,  236 => 161,  232 => 160,  225 => 156,  220 => 154,  216 => 153,  207 => 147,  202 => 145,  198 => 144,  170 => 118,  161 => 115,  156 => 114,  152 => 113,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/jewelry.twig", "");
    }
}
