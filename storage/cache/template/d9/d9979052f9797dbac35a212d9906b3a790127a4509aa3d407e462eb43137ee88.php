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
class __TwigTemplate_db005aa5e6051084a1de68f16d0ff23b7918319a1116ac88a61833e1ee134dac extends \Twig\Template
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
        // line 100
        echo ($context["date_end"] ?? null);
        echo "</p>
   <div class=\"row\">
      <div class=\"slider_banner col-12 desktop-banner\">
         <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 105
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 105);
            echo "\">
               <img src=\"";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 106);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
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
<!--sale start -->
<section class=\"new-arrivals mt-20 \">
   <div class=\"container \">
      <div class=\"card-sale\">
         <div class=\"row hide-pc\">
            <div class=\"col-6 text-center\">
               <img src=\"";
        // line 129
        echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "image", [], "any", false, false, false, 129);
        echo "\" alt=\"\" class=\"sale-img\" />
               <p style=\"padding:0px 10px;  color:#999;\">The sale you can't resist</p>
            </div>
            <div class=\"col-6 \">
               <div class=\"sale-on\">
                  <div class=\"row mt-10 d-flex justify-content-around\">
                     <div class=\"col-3 text-center\"
                        style=\"width:auto;background: rgba(194, 153, 88, 1);color:white;border-radius:5px; padding-top:7.5px\">
                        <p class=\"d-flex justify-content-center hr\" id=\"hr\" style=\"margin-bottom: 1px;\">21
                        </p>
                        <p style=\"font-size:10px; margin-left:-7px; text-align:center\">days</p>
                     </div>
                     <div class=\"col-3 text-center\"
                        style=\" width:auto; background: rgba(194, 153, 88, 1);color:white;border-radius:5px; padding-top:7.5px\">
                        <p class=\"d-flex justify-content-center mm\" id=\"mm\" style=\"margin-bottom: 1px;\">27
                        </p>
                        <p style=\"font-size:10px; margin-left:-7px;\">hours</p>
                     </div>
                     <div class=\"col-3 text-center\"
                        style=\" width:auto;background: rgba(194, 153, 88, 1);color:white;border-radius:5px; padding-top:7.5px\">
                        <p class=\"d-flex justify-content-center ss\" id=\"ss\" style=\"margin-bottom: 1px;\">00
                        </p>
                        <p style=\"font-size:10px; margin-left:-6px;\">mins</p>
                     </div>
                  </div>
                  <div class=\"row mt-20 text-center mb-4 justify-content-center\">
                     <a href=\"index.php?route=product/category&path=95\">
                        <button class=\"btn btn-primary btn-gold m-auto\">Buy Now</button>
                     </a>
                  </div>
               </div>
            </div>

         </div>
         <div class=\"row hide-phone\">
            <div class=\"col-md-3 text-center sale-on\">
               <div class=\" sale-on\">
                  <img src=\"";
        // line 166
        echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "image", [], "any", false, false, false, 166);
        echo "\" alt=\"\" class=\"sale-img\" />
                  <p style=\"padding:0px 10px;  color:#999;\">The sale you can't resist</p>
                  <div style=\"max-width:200px; margin:auto\" class=\"row mt-10 d-flex justify-content-around \">
                     <div class=\"col-md-3 col-sm-3 text-center\"
                        style=\"width:auto;background: rgba(194, 153, 88, 1);color:white;border-radius:5px; padding-top:7.5px\">
                        <p class=\"d-flex justify-content-center hr\" id=\"hr1\" style=\"margin-bottom: 1px;\">
                        </p>
                        <p style=\"font-size:10px;\">days</p>
                     </div>
                     <div class=\"col-md-3 col-sm-3 text-center\"
                        style=\" width:auto; background: rgba(194, 153, 88, 1);color:white;border-radius:5px; padding-top:7.5px\">
                        <p class=\"d-flex justify-content-center mm\" id=\"mm1\" style=\"margin-bottom: 1px;\">
                        </p>
                        <p style=\"font-size:10px;\">hours</p>
                     </div>
                     <div class=\"col-md-3  col-sm-3 text-center\"
                        style=\" width:auto;background: rgba(194, 153, 88, 1);color:white;border-radius:5px; padding-top:7.5px\">
                        <p class=\"d-flex justify-content-center ss\" id=\"ss1\" style=\"margin-bottom: 1px;\">
                        </p>
                        <p style=\"font-size:10px;\">mins</p>
                     </div>
                  </div>

                  <div class=\"row mt-20 text-center mb-4\">
                     <a style=\"margin:auto\" href=\"index.php?route=product/category&path=95\">
                        <button class=\"btn btn-primary btn-gold m-auto\">Buy Now</button>
                     </a>
                  </div>
               </div>
            </div>

            <div class=\"col-md-9\">
               <div class=\"swiper topSwiper5\">
                  <div class=\"swiper-wrapper\">
                     ";
        // line 200
        if (($context["products"] ?? null)) {
            // line 201
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 202
                echo "                     <div class=\"swiper-slide\">
                        <div class=\"product-card text-center\">
                           <div class=\"image\">
                              <a onclick=\"\" href=\"";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 205);
                echo "\">
                                 <img onclick=\"\" style=\"z-index: 99999999;width:176px;\" src=\"";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 206);
                echo "\"
                                    alt=\"";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 207);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 207);
                echo "\" class=\"img-responsive pthumb\" />
                              </a>
                           </div>
                           <a onclick=\"\" href=\"";
                // line 210
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 210);
                echo "\">
                              <p class=\"product_name\" style=\"color:  rgba(0, 59, 49, 1);height:47px;overflow:hidden;\">
                                 ";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 212);
                echo "
                              </p>
                           </a>
                           ";
                // line 215
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 215)) {
                    // line 216
                    echo "                           <p class=\"price mb-10\" style=\"color:  rgba(0, 59, 49, 1);\">
                              ";
                    // line 217
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 217)) {
                        // line 218
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 218);
                        echo "
                              ";
                    } else {
                        // line 220
                        echo "                              <span style=\"white-space: nowrap\" class=\"price-new\">
                                 ";
                        // line 221
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 221);
                        echo "
                              </span>
                              <span style=\"text-decoration:none; color: #1677BC;display:none;\">";
                        // line 223
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 223);
                        echo "%
                                 OFF</span>
                              </span>
                              <span style=\"white-space: nowrap;color: rgba(0, 59, 49, 1);\" class=\"price-old\">
                                 ";
                        // line 227
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 227);
                        echo "
                              </span>
                              ";
                    }
                    // line 230
                    echo "                           </p>
                           ";
                }
                // line 232
                echo "                           <button class=\"btn btn-primary\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 232);
                echo "');\">
                              view product</button>
                        </div>
                     </div>
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                     ";
        }
        // line 238
        echo "                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- sale end -->";
        // line 246
        echo "<section class=\"top-picks \">
   <div class=\"container ptb-30\">
      <div class=\"row v-center\">
         <p class=\"top-picks-line\" style=\"font-size:26px; font-family: 'Hina Mincho' !important;\">
            <img src=\"assets/img/Star.png\" style=\"margin-right:11px;\">Top Picks
         </p>
         <div class=\"new-arrival-underline\"></div>
      </div>
      <div class=\"row mt-20 ml-0 mr-0\">
         <div class=\"col-md-12\">
            <div class=\"swiper topSwiper4\">
               <div class=\"swiper-wrapper\">
                  ";
        // line 258
        if (($context["top_products"] ?? null)) {
            // line 259
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["top_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 260
                echo "                  <div class=\"swiper-slide\">
                     <div class=\"product-card text-center\">
                        <div class=\"image\">
                           <a onclick=\"\" href=\"";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 263);
                echo "\">
                              <img onclick=\"\" style=\"z-index: 99999999;width:176px;\" src=\"";
                // line 264
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 264);
                echo "\"
                                 alt=\"";
                // line 265
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 265);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 265);
                echo "\" class=\"img-responsive pthumb\" />
                           </a>
                        </div>
                        <a onclick=\"\" href=\"";
                // line 268
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 268);
                echo "\">
                           <p class=\"product_name\" style=\"color:  rgba(0, 59, 49, 1);height:47px;overflow:hidden;\">
                              ";
                // line 270
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 270);
                echo "
                           </p>
                        </a>
                        ";
                // line 273
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 273)) {
                    // line 274
                    echo "                        <p class=\"price mb-10\" style=\"color:  rgba(0, 59, 49, 1);\">
                           ";
                    // line 275
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 275)) {
                        // line 276
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 276);
                        echo "
                           ";
                    } else {
                        // line 278
                        echo "                           <span style=\"white-space: nowrap\" class=\"price-new\">
                              ";
                        // line 279
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 279);
                        echo "
                           </span>
                           <span style=\"text-decoration:none; color: #1677BC;display:none;\">";
                        // line 281
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 281);
                        echo "%
                              OFF</span>
                           </span>
                           <span style=\"white-space: nowrap;color: rgba(0, 59, 49, 1);\" class=\"price-old\">
                              ";
                        // line 285
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 285);
                        echo "
                           </span>
                           ";
                    }
                    // line 288
                    echo "                        </p>
                        ";
                }
                // line 290
                echo "                        <button class=\"btn btn-primary\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 290);
                echo "');\"> view product</button>
                     </div>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 294
            echo "                  ";
        }
        // line 295
        echo "               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--top picks end--->
<!--discover grid---->
<section class=\"shopy_by_room separation mt-20 \" style=\"margin-left: 5%;margin-right:5%;\">
   <div class=\"container\">
      <div class=\" align-items-center heading d-flex justify-content-center row \">
         <div class=\"col-md-2 col-12\" style=\"text-align: end;\">
            <img src=\"assets/img/Star.png\" class='star-left' />
         </div>
         <div class=\"col-md-7 col-12\">
            <p class=\"text-center hm\">Discover Jewelry Collections</p>
            <p class=\"text-center hm1\" style=\"margin-top:-10px\">Explore Our Jewelry Collections by Category</p>
         </div>
         <div class=\"col-md-2 col-12\" style=\"text-align: start;\">
            <img src=\"assets/img/Star.png\" class='star-right' />
         </div>
      </div>
      <br />
      <div class=\"desktop-banner\">
         <div class=\"row\">
            <div class=\"col-md-5  text-center serv-name1 mb-3\">

               <a href=\"";
        // line 322
        echo ($context["gb1_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2\">";
        // line 323
        echo ($context["gb1_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 325
        echo ($context["gb1_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>

            </div>
            <div class=\"row col-md-7 text-center serv-name1 mb-2\" style=\"margin-left: 0px;\">
               <div class=\"col-md-12 col-sm-12 mb-3 mobile-padding-0\">
                  <a href=\"";
        // line 331
        echo ($context["gb2_link"] ?? null);
        echo "\">
                     <p class=\"serv-name2\">";
        // line 332
        echo ($context["gb2_title"] ?? null);
        echo "
                     </p>
                     <img src=\"image/";
        // line 334
        echo ($context["gb2_image"] ?? null);
        echo "\" alt=\"\" class=\"zoom serv-img\" title=\"\" />
                  </a>
               </div>
               <div class=\"col-md-12 col-sm-12 mb-3 mobile-padding-0\">
                  <a href=\"";
        // line 338
        echo ($context["gb3_link"] ?? null);
        echo "\">
                     <p class=\"serv-name2\">";
        // line 339
        echo ($context["gb3_title"] ?? null);
        echo "
                     </p>
                     <img src=\"image/";
        // line 341
        echo ($context["gb3_image"] ?? null);
        echo "\" alt=\"\" class=\"zoom serv-img\" title=\"\" />
                  </a>
               </div>
            </div>
            <div class=\"col-md-6  text-center serv-name1 mb-3\">
               <a href=\"";
        // line 346
        echo ($context["gb4_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2  \">";
        // line 347
        echo ($context["gb4_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 349
        echo ($context["gb4_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>
            </div>
            <div class=\"col-md-6  text-center serv-name1 mb-3\">
               <a href=\"";
        // line 353
        echo ($context["gb5_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2  \">";
        // line 354
        echo ($context["gb5_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 356
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
        // line 365
        echo ($context["gbmob1_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2\">";
        // line 366
        echo ($context["gbmob1_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 368
        echo ($context["gbmob1_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>

            </div>
            <div class=\"row col-md-7 text-center serv-name1 mb-2\" style=\"margin-left: 0px;\">
               <div class=\"col-md-12 col-sm-12 mb-3 mobile-padding-0\">
                  <a href=\"";
        // line 374
        echo ($context["gbmob2_link"] ?? null);
        echo "\">
                     <p class=\"serv-name2\">";
        // line 375
        echo ($context["gbmob2_title"] ?? null);
        echo "
                     </p>
                     <img src=\"image/";
        // line 377
        echo ($context["gbmob2_image"] ?? null);
        echo "\" alt=\"\" class=\"zoom serv-img\" title=\"\" />
                  </a>
               </div>
               <div class=\"col-md-12 col-sm-12 mb-3 mobile-padding-0\">
                  <a href=\"";
        // line 381
        echo ($context["gbmob3_link"] ?? null);
        echo "\">
                     <p class=\"serv-name2\">";
        // line 382
        echo ($context["gbmob3_title"] ?? null);
        echo "
                     </p>
                     <img src=\"image/";
        // line 384
        echo ($context["gbmob3_image"] ?? null);
        echo "\" alt=\"\" class=\"zoom serv-img\" title=\"\" />
                  </a>
               </div>
            </div>
            <div class=\"col-md-6  text-center serv-name1 mb-3\">
               <a href=\"";
        // line 389
        echo ($context["gbmob4_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2  \">";
        // line 390
        echo ($context["gbmob4_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 392
        echo ($context["gbmob4_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>
            </div>
            <div class=\"col-md-6  text-center serv-name1 mb-3\">
               <a href=\"";
        // line 396
        echo ($context["gbmob5_link"] ?? null);
        echo "\">
                  <p class=\"serv-name2  \">";
        // line 397
        echo ($context["gbmob5_title"] ?? null);
        echo "
                  </p>
                  <img src=\"image/";
        // line 399
        echo ($context["gbmob5_image"] ?? null);
        echo "\" alt=\"\" class=\"serv-img\" title=\"\" />
               </a>
            </div>
         </div>
      </div>
</section>
<!--discover grid end---->
<section class=\"new-arrivals \">
   <div class=\"container ptb-50\">
      <div class=\"row v-center\">
         <p class=\"top-picks-line\" style=\"font-size:26px; font-family: 'Hina Mincho' !important;\">
            <img src=\"assets/img/Star.png\" style=\"margin-right:11px;\" class=\"star-mob\">New Arrivals
         </p>
         <div class=\"new-arrival-underline\"></div>
      </div>
      <div class=\"row mt-20\">
         <div class=\"col-md-10\">
            <div class=\"swiper topSwiper5\">
               <div class=\"swiper-wrapper\">
                  ";
        // line 418
        if (($context["new_products"] ?? null)) {
            // line 419
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 420
                echo "                  <div class=\"swiper-slide\">
                     <div class=\"product-card text-center\">
                        <div class=\"image\">
                           <a onclick=\"\" href=\"";
                // line 423
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 423);
                echo "\">
                              <img onclick=\"\" style=\"z-index: 99999999;\" src=\"";
                // line 424
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 424);
                echo "\"
                                 alt=\"";
                // line 425
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 425);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 425);
                echo "\" class=\"img-responsive pthumb\" />
                           </a>
                        </div>
                        <a onclick=\"\" href=\"";
                // line 428
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 428);
                echo "\">
                           <p class=\"product_name\" style=\"color:  rgba(0, 59, 49, 1);\">
                              ";
                // line 430
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 430);
                echo "
                           </p>
                        </a>
                        ";
                // line 433
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 433)) {
                    // line 434
                    echo "                        <p class=\"price mb-10\" style=\"color:  rgba(0, 59, 49, 1);\">
                           ";
                    // line 435
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 435)) {
                        // line 436
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 436);
                        echo "
                           ";
                    } else {
                        // line 438
                        echo "                           <span style=\"white-space: nowrap\" class=\"price-new\">
                              ";
                        // line 439
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 439);
                        echo "
                           </span>
                           <span style=\"text-decoration:none; color: #1677BC;display:none;\">";
                        // line 441
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 441);
                        echo "%
                              OFF</span>
                           </span>
                           <span style=\"white-space: nowrap;color: rgba(0, 59, 49, 1);\" class=\"price-old\">
                              ";
                        // line 445
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 445);
                        echo "
                           </span>
                           ";
                    }
                    // line 448
                    echo "                        </p>
                        ";
                }
                // line 450
                echo "                        <button class=\"btn btn-primary\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 450);
                echo "');\"> view product</button>
                     </div>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 454
            echo "                  ";
        }
        // line 455
        echo "               </div>
            </div>
         </div>
         <div class=\"col-md-2 hide-phone\">
            <a href=\"index.php?route=product/category&path=94\">
               <img src=\"assets/img/G1.png\" alt=\"main-image\" />
            </a>
         </div>
      </div>
   </div>
</section>
<section class=\"\"><img src=\"assets/img/b123.png\" class=\"w-100\" alt=\"\" class=\" img-responsive\" /></section>
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
      slidesPerView: 4,
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
        // line 718
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
        return array (  1055 => 718,  790 => 455,  787 => 454,  776 => 450,  772 => 448,  766 => 445,  759 => 441,  754 => 439,  751 => 438,  745 => 436,  743 => 435,  740 => 434,  738 => 433,  732 => 430,  727 => 428,  719 => 425,  715 => 424,  711 => 423,  706 => 420,  701 => 419,  699 => 418,  677 => 399,  672 => 397,  668 => 396,  661 => 392,  656 => 390,  652 => 389,  644 => 384,  639 => 382,  635 => 381,  628 => 377,  623 => 375,  619 => 374,  610 => 368,  605 => 366,  601 => 365,  589 => 356,  584 => 354,  580 => 353,  573 => 349,  568 => 347,  564 => 346,  556 => 341,  551 => 339,  547 => 338,  540 => 334,  535 => 332,  531 => 331,  522 => 325,  517 => 323,  513 => 322,  484 => 295,  481 => 294,  470 => 290,  466 => 288,  460 => 285,  453 => 281,  448 => 279,  445 => 278,  439 => 276,  437 => 275,  434 => 274,  432 => 273,  426 => 270,  421 => 268,  413 => 265,  409 => 264,  405 => 263,  400 => 260,  395 => 259,  393 => 258,  379 => 246,  370 => 238,  367 => 237,  355 => 232,  351 => 230,  345 => 227,  338 => 223,  333 => 221,  330 => 220,  324 => 218,  322 => 217,  319 => 216,  317 => 215,  311 => 212,  306 => 210,  298 => 207,  294 => 206,  290 => 205,  285 => 202,  280 => 201,  278 => 200,  241 => 166,  201 => 129,  188 => 118,  179 => 115,  174 => 114,  170 => 113,  164 => 109,  155 => 106,  150 => 105,  146 => 104,  139 => 100,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
