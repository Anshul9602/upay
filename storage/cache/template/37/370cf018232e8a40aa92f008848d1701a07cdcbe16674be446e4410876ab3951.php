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

/* default/template/common/header.twig */
class __TwigTemplate_a6d5a5e10c1ec34c72a63eebc1cc262225595cc7eda0c4fae80bee2b4ff9589c extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!-- [if IE]><![endif] -->
<!-- [if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif] -->
<!-- [if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif] -->
<!-- [if (gt IE 9)|!(IE)]><! -->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
   <!-- <![endif] -->
   <head>
      <meta charset=\"UTF-8\" />
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
      <title>
         ";
        // line 13
        echo ($context["title"] ?? null);
        echo "
      </title>
      <base href=\"";
        // line 15
        echo ($context["base"] ?? null);
        echo "\" />
      ";
        // line 16
        if (($context["description"] ?? null)) {
            // line 17
            echo "      <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
      ";
        }
        // line 19
        echo "      ";
        if (($context["keywords"] ?? null)) {
            // line 20
            echo "      <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
      ";
        }
        // line 22
        echo "
      <link href=\"https://fonts.cdnfonts.com/css/avenir-lt-std\" rel=\"stylesheet\">
      <link href=\"https://fonts.cdnfonts.com/css/hina-mincho\" rel=\"stylesheet\">
      <!-- Bootstrap CSS -->
      <link rel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\" />
      <!-- Pe-icon-7-stroke CSS -->
      <link rel=\"stylesheet\" href=\"assets/css/vendor/pe-icon-7-stroke.css\" />
      <!-- Font-awesome CSS -->
      <link rel=\"stylesheet\" href=\"assets/css/vendor/font-awesome.min.css\" />
      <!-- Slick slider css -->
      <link rel=\"stylesheet\" href=\"assets/css/plugins/slick.min.css\" />
      <link rel=\"stylesheet\" href=\"assets/css/plugins/slick-theme.css\" />
      <!-- animate css -->
      <link rel=\"stylesheet\" href=\"assets/css/plugins/animate.css\" />
      <!-- Nice Select css -->
      <link rel=\"stylesheet\" href=\"assets/css/plugins/nice-select.css\" />
      <!-- jquery UI css -->
      <link rel=\"stylesheet\" href=\"assets/css/plugins/jqueryui.min.css\" />
      <!-- main style css -->
      <link rel=\"stylesheet\" href=\"assets/css/style.css?v1.125\" />
      
      <!-- jQuery JS -->
      <script src=\"assets/js/vendor/jquery-3.3.1.min.js\"></script>
       <!-- slick Slider JS -->
      <script src=\"assets/js/plugins/slick.min.js\"></script>
     
      <style>
         .btn{
         padding: 14px 30px;
         }
         body,html{
            overflow-x:hidden;
         }
         @media screen and (max-width:650px){
            .desktop-menu ul li a{
               color:#333;
               font-size:14px;
            }
         }
       .dropdown-list li a{
         font-size:12px;
         text-transform:uppercase;
         color:#333;
         letter-spacing:1px;
       }
       .mobile-top-dropdown A{
         font-size:12px;
         text-transform:uppercase;
       }
       #myaccount{
         font-size:12px;
         margin-top:30px;
         color:#333;
       }
       .top-text li{
         display:inline-block;
         float:right;
       }
       .top-text li #currency_btn{
         color:#fff;
         font-size:10px;
         opacity:0.8;
       }
       .top-text p{
         float:right;
       }
       .top-text .curr_drop{
              padding:5px 15px;
              text-align:left;
         }
          .top-text .curr_drop li{
             text-align:left;
             float:left;
          }
          
          .price-old {
    color: #999;
    padding-left: 5px;
    font-weight: 300;
    text-decoration: line-through;
    font-size: 11px;
    color: darkred !important;
}
      </style>
      ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 107
            echo "      <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 107);
            echo "\"
         type=\"text/css\"
         rel=\"";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 109);
            echo "\"
         media=\"";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 110);
            echo "\" />
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 113
            echo "      <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "      <script src=\"catalog/view/javascript/common.js?v1.1\"
         type=\"text/javascript\"></script>
      ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 118
            echo "      <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 118);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 118);
            echo "\" />
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 121
            echo "      ";
            echo $context["analytic"];
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "      <link rel=\"stylesheet\" href=\"assets/css/edit.css?v1.19558\" />
   </head>
   <body>
      <!-- Start Header Area -->
      <header class=\"header-area\">
         <!-- main header start -->
         <div class=\"main-header d-none d-lg-block\">
            <!-- header middle area start -->
            <div class=\"header-main-area\">
               <div class=\"top-strip\">
                  <div class=\"container\">
                     <div class=\"row\">
                        <div class=\"col-6\">
                           <p>Discount up to 35% for first purchase only this month.   </p>
                        </div>
                        <div class=\"col-sm-6 text-right top-text\">
                           ";
        // line 139
        echo ($context["currency"] ?? null);
        echo " 
                           <p>
info@solitairejew.com &nbsp;&nbsp;&nbsp; +852 2316 7662
                           &nbsp;  &nbsp;  &nbsp;
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"container\">
                  <div class=\"row align-items-center ptb-15\">
                     <div class=\"col-lg-4\"></div>
                     <!-- start logo area -->
                     <div class=\"col-lg-4 text-center\">
                        <div id=\"logo\">
                           <a href=\"";
        // line 154
        echo ($context["home"] ?? null);
        echo "\">
                           <img src=\"";
        // line 155
        echo ($context["logo"] ?? null);
        echo "\"  class=\"img-responsive logo-home\" />
                           </a>
                        </div>
                     </div>
                     <!-- start logo area -->
                     <div class=\"col-lg-1\"></div>
                     <div class=\"col-lg-3\">
                        <div style=\"max-width:200px; float:right\" class=\"header-right d-flex align-items-center justify-content-end w-100\">
                           <div class=\"header-configure-area w-100\">
                              <ul class=\"nav justify-content-space-around w-100\">
                                 <li class=\"header-search-container mr-0\">
                                    <button class=\"search-trigger d-block\">
                                    <i class=\"pe-7s-search\"></i>
                                    </button>
                                    <div class=\"header-search-box d-none animated fadeInLeft\">
                                       <input type=\"text\" id=\"search_top\" name=\"search\" placeholder=\"Search\" class=\"header-search-field\">
                                       <button class=\"search_icon_top header-search-btn\"><i class=\"pe-7s-search\"></i></button>
                                    </div>
                                 </li>
                                 <li class=\"user-hover\">
                                    <a href=\"";
        // line 175
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\"><i class=\"pe-7s-user\"></i></a>
                                    <ul class=\"dropdown-list\">
                                       ";
        // line 177
        if (($context["logged"] ?? null)) {
            // line 178
            echo "                                       <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                                       <li><a href=\"";
            // line 179
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                                       <li><a href=\"";
            // line 180
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
                                       ";
        } else {
            // line 182
            echo "                                       <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                                       <li><a href=\"";
            // line 183
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
                                       ";
        }
        // line 185
        echo "                                    </ul>
                                 </li>
                                 <li>
                                    <a href=\"";
        // line 188
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
                                    <i class=\"pe-7s-like\"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href=\"javascript:;\" onclick=\"somefunction(); return false;\" title=\"";
        // line 193
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
                                       <i class=\"pe-7s-cart\"></i>
                                       <div class=\"notification cart-counter-header\">
                                          ";
        // line 196
        echo ($context["cart_total"] ?? null);
        echo "
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <hr class='menu_divider' />
                  <div class=\"row\">
                    <div class=\"col-sm-8 offset-sm-2\">
                    <div class=\"main-menu-area\">
                      <div class=\"main-menu\">
                      ";
        // line 210
        echo ($context["menu"] ?? null);
        echo "  
                      </div>
                    </div>
                    </div>
                  </div>
               </div>
            </div>
            <!-- header middle area end -->
         </div>
         <!-- main header start -->
         <!-- mobile header start -->
         <!-- mobile header start -->
         <div class=\"mobile-header d-lg-none d-md-block sticky\">
            <!-- mobile header top start -->
            <div class=\"container-fluid\">
               <div class=\"row align-items-center\">
                  <div class=\"col-12\">
                     <div class=\"mobile-main-header\">
                        <div class=\"mobile-logo\">
                           <a href=\"";
        // line 229
        echo ($context["home"] ?? null);
        echo "\">
                           <img src=\"";
        // line 230
        echo ($context["logo"] ?? null);
        echo "\" alt=\"Brand Logo\" />
                           </a>
                        </div>
                        <div class=\"mobile-menu-toggler\">
                           <div class=\"mini-cart-wrap\">
                              <a href=\"javascript:;\" onclick=\"somefunction(); return false;\" title=\"";
        // line 235
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
                                       <i class=\"pe-7s-cart\"></i>
                                       <div class=\"notification cart-counter-header\">
                                          ";
        // line 238
        echo ($context["cart_total"] ?? null);
        echo "
                                       </div>
                                    </a>
                           </div>&nbsp;&nbsp;&nbsp;&nbsp;
                           <a style='font-size:22px; color:#003B30' href=\"index.php?route=account/wishlist\">
                           <i class=\"pe-7s-like\"></i>
                           </a>&nbsp;&nbsp;&nbsp;&nbsp;
                           <button style='margin-top:-5px' class=\"mobile-menu-btn\">
                           <span></span>
                           <span></span>
                           <span></span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- mobile header top start -->
         </div>
         <!-- mobile header end -->
         <!-- mobile header end -->
         <!-- offcanvas mobile menu start -->
         <!-- off-canvas menu start -->
         <aside  class=\"off-canvas-wrapper\">
            <div class=\"off-canvas-overlay\"></div>
            <div class=\"off-canvas-inner-content\">
            <div class=\"btn-close-off-canvas\">
               <i class=\"pe-7s-close\"></i>
            </div>
            <div class=\"off-canvas-inner\">
               <!-- search box start -->
               <div class=\"search-box-offcanvas\">
                  <form>
                     <input type=\"text\" placeholder=\"Search Here...\" />
                     <button style='border:none' class=\"search-btn search-btn-mobile\"><i class=\"pe-7s-search\"></i></button>
                  </form>
               </div>
               <!-- search box end -->
               <!-- mobile menu start -->
               <div class=\"mobile-navigation\">
                  <!-- mobile menu navigation start -->
                  <nav>
                 
                     ";
        // line 281
        echo ($context["mobile_menu"] ?? null);
        echo "
                  </nav>
                  <!-- mobile menu navigation end -->
               </div>
               <!-- mobile menu end -->
               <div class=\"mobile-settings\">
                  <ul class=\"nav\">
                     ";
        // line 288
        echo ($context["currency"] ?? null);
        echo "
                    
                            <li>
                                <div class=\"dropdown mobile-top-dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" id=\"myaccount\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        MY ACCOUNT
                                        <i class=\"fa fa-angle-down\"></i>
                                    </a>
                                    <div style=\"width:200px; padding:15px 0px\" class=\"dropdown-menu\" aria-labelledby=\"myaccount\">
                                     
                                     ";
        // line 298
        if (($context["logged"] ?? null)) {
            // line 299
            echo "                                      <a class=\"dropdown-item\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
                                       <a class=\"dropdown-item\" href=\"";
            // line 300
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
                                       <a class=\"dropdown-item\" href=\"";
            // line 301
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
                                       ";
        } else {
            // line 303
            echo "                                      <a class=\"dropdown-item\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
                                       <a class=\"dropdown-item\" href=\"";
            // line 304
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
                                       ";
        }
        // line 306
        echo "                                    </div>
                                </div>
                            </li>
                    
                  </ul>
               </div>
               <!-- offcanvas widget area start -->
               <div class=\"offcanvas-widget-area\">
                  <div class=\"off-canvas-contact-widget\">
                     <ul>
                        <li>
                           <i class=\"fa fa-mobile\" style=\"font-size:25px; text-align: center;\"></i>
                           <a href=\"#\">+851-(23167611) </a>
                           
                        </li>
                        <li>
                           <i class=\"fa fa-envelope-o\"></i>
                           <a href=\"#\">info@solitairejew.com </a>
                        </li>
                     </ul>
                  </div>
                  <!-- offcanvas widget area end -->
               </div>
            </div>
         </aside>
         ";
        // line 331
        echo ($context["slide_cart"] ?? null);
        echo "    
      </header>
      <script>
         \$(document).ready(function(){
           \$(\".close-offer-strip\").click(function(){
            \$(\".top-strip\").slideUp();
           })
           
         })
      </script>
      <script>
                                \$('.search-btn-mobile').click(function(e) {
                                    e.preventDefault();
                                    if (\$(this).prev().val() != \"\") {
                                        location = 'index.php?route=product/search' + '&search=' + encodeURIComponent(\$(this).prev().val()) + '&description=true';
                                    }
                                })

                                 \$('.header-search-btn').click(function(e) {
                                    e.preventDefault();
                                    if (\$(\"#search_top\").val() != \"\") {
                                        location = 'index.php?route=product/search' + '&search=' + encodeURIComponent(\$(\"#search_top\").val()) + '&description=true';
                                    }
                                })
                            </script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 331,  536 => 306,  529 => 304,  522 => 303,  515 => 301,  509 => 300,  502 => 299,  500 => 298,  487 => 288,  477 => 281,  431 => 238,  425 => 235,  417 => 230,  413 => 229,  391 => 210,  374 => 196,  368 => 193,  358 => 188,  353 => 185,  346 => 183,  339 => 182,  332 => 180,  326 => 179,  319 => 178,  317 => 177,  310 => 175,  287 => 155,  283 => 154,  265 => 139,  247 => 123,  238 => 121,  233 => 120,  222 => 118,  218 => 117,  214 => 115,  205 => 113,  200 => 112,  192 => 110,  188 => 109,  182 => 107,  178 => 106,  92 => 22,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  71 => 15,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
