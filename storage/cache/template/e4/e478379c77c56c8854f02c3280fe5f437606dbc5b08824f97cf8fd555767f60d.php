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
class __TwigTemplate_e76670965ccc2e4639be6b204c70b5de92d29722e83ea8e242ee7834644aadbe extends \Twig\Template
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
        // line 14
        echo ($context["title"] ?? null);
        echo "
        </title>
        <base href=\"";
        // line 16
        echo ($context["base"] ?? null);
        echo "\" />
        ";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            echo "        <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
        ";
        }
        // line 20
        echo "        ";
        if (($context["keywords"] ?? null)) {
            // line 21
            echo "        <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
        ";
        }
        // line 23
        echo "
        <link href=\"https://fonts.cdnfonts.com/css/avenir-lt-std\"
            rel=\"stylesheet\">
        <link href=\"https://fonts.cdnfonts.com/css/hina-mincho\"
            rel=\"stylesheet\">
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
        .btn {
            padding: 14px 30px;
        }

        body,
        html {
            overflow-x: hidden;
        }
 section {
      padding: 50px 0;
   }
        @media screen and (max-width:650px) {
            .desktop-menu ul li a {
                color: #333;
                font-size: 14px;
            }
             section {
      padding: 20px 0;
   }
        }

        .dropdown-list li a {
            font-size: 12px;
            text-transform: uppercase;
            color: #333;
            letter-spacing: 1px;
        }

        .mobile-top-dropdown A {
            font-size: 12px;
            text-transform: uppercase;
        }

        #myaccount {
            font-size: 12px;
            margin-top: 30px;
            color: #333;
        }

        .top-text li {
            display: inline-block;
            float: right;
        }

        .top-text li #currency_btn {
            color: #fff;
            font-size: 10px;
            opacity: 0.8;
        }

        .top-text p {
            float: right;
        }

        .top-text .curr_drop {
            padding: 5px 15px;
            text-align: left;
        }

        .top-text .curr_drop li {
            text-align: left;
            float: left;
        }
        .subbox,
        .thanksbox {
            width: 360px;
            z-index: 99999;
            background-color: #EAE2D7;
            padding: 60px 40px;
            border: 12.5px solid #003B30;
            position: fixed;
            top: 20%;
            left: 50%;
            display: none;
            margin-left: -180px;
        }

        .subover {
            width: 100%;
            height: 100vh;
            display: none;
            position: fixed;
            top: 0px;
            left: 0px;
            z-index: 9999;
            background: rgb(0, 0, 0, 0.4);
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
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 149
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 149);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 149);
            echo "\"
            media=\"";
            // line 150
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 150);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 153
            echo "        <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "        <script src=\"catalog/view/javascript/common.js?v1.1\"
            type=\"text/javascript\"></script>
        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 158
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 158);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 158);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 161
            echo "        ";
            echo $context["analytic"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "
        <!-- Include Cookies library from CDN -->
        <script
            src=\"https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js\"></script>

        <link rel=\"stylesheet\" href=\"assets/css/edit.css?v1.19558\" />
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
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
                                <div
                                    class=\"col-sm-6 d-flex justify-content-start\">

                                    <p>
                                        <i class=\"fa fa-phone\"
                                            style=\"    color: #692BD8;\"></i>&nbsp;
                                        &nbsp;+1234567890
                                        &nbsp; &nbsp; &nbsp; <i
                                            class=\"fa fa-envelope-o\"
                                            style=\"    color: #692BD8;\"></i>&nbsp;
                                        &nbsp;info@upaaye.com
                                        &nbsp;&nbsp;&nbsp;
                                    </p>
                                </div>
                                <div class=\"col-6 text-right\">
                                    <ul class=\"d-flex justify-content-end\">
                                        <li class=\"mr-3\"><a href><img
                                                    src=\"image/ins.png\" alt
                                                    width=\"20\"></a></li>
                                        <li class=\"mr-3\"><a href><img
                                                    src=\"image/link.png\" alt
                                                    width=\"20\"></a></li>
                                        <li class=\"mr-3\"><a href><img
                                                    src=\"image/fb.png\" alt
                                                    width=\"20\"></a></li></ul>
                                </div>

                            </div>
                        </div>
                    </div> <hr class='menu_divider1' />
                    <div class=\"container\">
                        <div class=\"row align-items-center \">

                            <!-- start logo area -->
                            <div class=\"col-md-2 text-center\">
                                <div id=\"logo\">
                                    <a href=\"";
        // line 220
        echo ($context["home"] ?? null);
        echo "\">
                                        <img src=\"";
        // line 221
        echo ($context["logo"] ?? null);
        echo "\"
                                            class=\"img-responsive logo-home\" style=\"max-width: 150px;\" />
                                    </a>
                                </div>
                            </div>

                            <div class=\"col-md-7 \">
                                <div class=\"main-menu-area\">
                                    <div class=\"main-menu\">
                                        ";
        // line 230
        echo ($context["menu"] ?? null);
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 d-flex justify-content-end\">
                              <a href=\"index.php?route=information/contact\"> <button class=\"btn btn-primary\">Connect With Us</button>
                              </a></div>

                        </div>
                    </div>
                    <!-- header middle area end -->
                </div>
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
        // line 253
        echo ($context["home"] ?? null);
        echo "\">
                                        <img src=\"";
        // line 254
        echo ($context["logo"] ?? null);
        echo "\"
                                            alt=\"Brand Logo\" />
                                    </a>
                                </div>
                                <div class=\"mobile-menu-toggler\">
                                    
                                   
                                    </a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button style='margin-top:-5px'
                                        class=\"mobile-menu-btn\">
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
            <aside class=\"off-canvas-wrapper\">
                <div class=\"off-canvas-overlay\"></div>
                <div class=\"off-canvas-inner-content\">
                    <div class=\"btn-close-off-canvas\">
                        <i class=\"pe-7s-close\"></i>
                    </div>
                    <div class=\"off-canvas-inner\">
                        <!-- search box start -->
                        <div class=\"search-box-offcanvas\">
                            <form>
                                <input type=\"text\"
                                    placeholder=\"Search Here...\" />
                                <button style='border:none'
                                    class=\"search-btn search-btn-mobile\"><i
                                        class=\"pe-7s-search\"></i></button>
                            </form>
                        </div>
                        <!-- search box end -->
                        <!-- mobile menu start -->
                        <div class=\"mobile-navigation\">
                            <!-- mobile menu navigation start -->
                            <nav>

                                ";
        // line 302
        echo ($context["mobile_menu"] ?? null);
        echo "
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->
                        <div class=\"mobile-settings\">
                            <ul class=\"nav\">
                               

                                <li>
                                    <div
                                        class=\"dropdown mobile-top-dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\"
                                            id=\"myaccount\"
                                            data-toggle=\"dropdown\"
                                            aria-haspopup=\"true\"
                                            aria-expanded=\"false\">
                                            MY ACCOUNT
                                            <i class=\"fa fa-angle-down\"></i>
                                        </a>
                                        <div
                                            style=\"width:200px; padding:15px 0px\"
                                            class=\"dropdown-menu\"
                                            aria-labelledby=\"myaccount\">

                                            ";
        // line 327
        if (($context["logged"] ?? null)) {
            // line 328
            echo "                                            <a class=\"dropdown-item\"
                                                href=\"";
            // line 329
            echo ($context["account"] ?? null);
            echo "\">";
            echo             // line 330
($context["text_account"] ?? null);
            echo "</a>
                                            <a class=\"dropdown-item\"
                                                href=\"";
            // line 332
            echo ($context["order"] ?? null);
            echo "\">";
            echo             // line 333
($context["text_order"] ?? null);
            echo "</a>
                                            <a class=\"dropdown-item\"
                                                href=\"";
            // line 335
            echo ($context["logout"] ?? null);
            echo "\">";
            echo             // line 336
($context["text_logout"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 338
            echo "                                            <a class=\"dropdown-item\"
                                                href=\"";
            // line 339
            echo ($context["register"] ?? null);
            echo "\">";
            echo             // line 340
($context["text_register"] ?? null);
            echo "</a>
                                            <a class=\"dropdown-item\"
                                                href=\"";
            // line 342
            echo ($context["login"] ?? null);
            echo "\">";
            echo             // line 343
($context["text_login"] ?? null);
            echo "</a>
                                            ";
        }
        // line 345
        echo "                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- offcanvas widget area start -->
                        <div class=\"offcanvas-widget-area\">
                            <div class=\"off-canvas-contact-widget\">
                                <ul>
                                    <li>
                                        <i class=\"fa fa-mobile\"
                                            style=\"font-size:25px; text-align: center; color: #692BD8;\"></i>
                                        <a href=\"#\">+1234567890 </a>

                                    </li>
                                    <li>
                                        <i class=\"fa fa-envelope-o\"style=\"    color: #692BD8;\"></i>
                                        <a href=\"#\">info@upaaye.com  
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- offcanvas widget area end -->
                        </div>
                    </div>
                </aside>
                ";
        // line 372
        echo ($context["slide_cart"] ?? null);
        echo "

            </header>
            <script>
        \$(document).ready(function () {
            \$(\".close-offer-strip\").click(function () {
                \$(\".top-strip\").slideUp();
            })

        })
    </script>
            <script>

        


        \$('.search-btn-mobile').click(function (e) {
            e.preventDefault();
            if (\$(this).prev().val() != \"\") {
                location = 'index.php?route=product/search' + '&search=' + encodeURIComponent(\$(this).prev().val()) + '&description=true';
            }
        })

        \$('.header-search-btn').click(function (e) {
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
        return array (  547 => 372,  518 => 345,  513 => 343,  510 => 342,  505 => 340,  502 => 339,  499 => 338,  494 => 336,  491 => 335,  486 => 333,  483 => 332,  478 => 330,  475 => 329,  472 => 328,  470 => 327,  442 => 302,  391 => 254,  387 => 253,  361 => 230,  349 => 221,  345 => 220,  286 => 163,  277 => 161,  272 => 160,  261 => 158,  257 => 157,  253 => 155,  244 => 153,  239 => 152,  231 => 150,  224 => 149,  220 => 148,  93 => 23,  87 => 21,  84 => 20,  78 => 18,  76 => 17,  72 => 16,  67 => 14,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
