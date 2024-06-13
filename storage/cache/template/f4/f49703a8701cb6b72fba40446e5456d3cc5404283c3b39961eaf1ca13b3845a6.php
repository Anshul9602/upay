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

/* default/template/product/product.twig */
class __TwigTemplate_6baefd4fb047c15f4187b59598e64a5d1b100d7e2656cd663f336baf08eb22be extends \Twig\Template
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
   @media only screen and (max-width: 679.98px) {
   .splide__arrow  {
   display: none !important;
   } 
   }
   .splide__arrow  {
   background: none !important;
   } 
   .splide__arrow--prev {
   left: -2em !important;
   }
   .splide__arrow--next {
   right: -2em !important;
   }
   .splide__arrow svg {
   fill:#fccf32 !important;
   height: 2.2em !important;
   width: 2.2em !important;
   }
</style>
<link
   rel=\"stylesheet\" href=\"assets/css/product.css\"/>
<!-- Swiper Slider CSS-->
<script src=\"
   https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
   \"></script>
<link href=\"
   https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
   \" rel=\"stylesheet\">
<div class=\"breadcrumb-area hidden-phone\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-12\">
            <div class=\"breadcrumb-wrap\">
               <nav aria-label=\"breadcrumb\">
                  <ul class=\"breadcrumb\">
                     ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 40
            echo "                     <li class=\"ml-2\">
                        <a href=\"";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 41);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 41);
            echo "</a>
                     </li>
                     &nbsp;/
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
<br/>
<div id=\"product-product mt-10\" class=\"container\">
   <div class=\"row\">
      <div class=\"col-sm-12\">
         ";
        // line 56
        echo ($context["content_top"] ?? null);
        echo "
         <div class=\"row\">
            <div class=\"col-sm-7\">
               ";
        // line 59
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 60
            echo "               <ul style='border:1px solid #ccc; border-radius:16px' class=\"slider slider-for\">
                  ";
            // line 61
            if (($context["thumb"] ?? null)) {
                // line 62
                echo "                  <li class=\"zoom\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/></li>
                  ";
            }
            // line 64
            echo "                  ";
            if (($context["images"] ?? null)) {
                // line 65
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 66
                    echo "                  <li class=\"image-additional zoom\">
                     <img src=\"";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 67);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"/>
                  </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                  ";
            }
            // line 71
            echo "               </ul>
               ";
        }
        // line 73
        echo "               ";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 74
            echo "               <ul class=\"slider slider-nav addi\">
                  ";
            // line 75
            if (($context["thumb"] ?? null)) {
                // line 76
                echo "                  <li><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/></li>
                  ";
            }
            // line 78
            echo "                  ";
            if (($context["images"] ?? null)) {
                // line 79
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 80
                    echo "                  <li class=\"image-additional\">
                     <img src=\"";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 81);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"/>
                  </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                  ";
            }
            // line 85
            echo "               </ul>
               ";
        }
        // line 87
        echo "            </div>
            <div class=\"col-sm-5\">
               ";
        // line 89
        if (($context["review_status"] ?? null)) {
            // line 90
            echo "               <div class=\"rating\">
                  <p>
                     ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 93
                echo "                     ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 94
                    echo "                     <span class=\"fa fa-stack\">
                     <i class=\"fa fa-star-o fa-stack-1x\"></i>
                     </span>
                     ";
                } else {
                    // line 98
                    echo "                     <span class=\"fa fa-stack\">
                     <i class=\"fa fa-star fa-stack-1x\"></i>
                     <i class=\"fa fa-star-o fa-stack-1x\"></i>
                     </span>
                     ";
                }
                // line 103
                echo "                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                  </p>
               </div>
               ";
        }
        // line 107
        echo "               <h2 class=\"text-capitalize\">";
        echo ($context["heading_title"] ?? null);
        echo "</h2>
               <p style=\"line-height:36px; margin-top:10px\">
                  Style No :
                  <i>";
        // line 110
        echo ($context["style_no"] ?? null);
        echo "</i>
                  <br/>
                  Design No :
                  <i>";
        // line 113
        echo ($context["design_no"] ?? null);
        echo "</i>
                  <br/>
                  Metal Purity:
                  <i>";
        // line 116
        echo ($context["metal_purity"] ?? null);
        echo "</i>
               </p>
               <div id=\"product\">
                  ";
        // line 119
        if (($context["options"] ?? null)) {
            // line 120
            echo "                  <hr>
                  ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 122
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 122) == "select")) {
                    // line 123
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 123));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 124
                        echo "                  <div class=\"text-center\" style=\"display: inline-block;\">
                     <span style=\"background:url(";
                        // line 125
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 125);
                        echo ")\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 125);
                        echo "\" data-money=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 125);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_image", [], "any", false, false, false, 125);
                        echo "\" data-val=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 125);
                        echo "\" class=\"tab_options\"></span>
                     <p style=\"margin-top: 0px; font-size:12px\">
                        ";
                        // line 127
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 127);
                        echo "
                     </p>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 131
                    echo "                  <div style=\"display: none;\" class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 131)) {
                        echo " required ";
                    }
                    echo "\">
                     <select name=\"option[";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 132);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 132);
                    echo "\" class=\"form-control\">
                        <option value=\"\">";
                    // line 133
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 134
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 134));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 135
                        echo "                        <option data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 135);
                        echo "\" data-link=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "link", [], "any", false, false, false, 135);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 135);
                        echo "\">
                           ";
                        // line 136
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 136);
                        echo "
                           ";
                        // line 137
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 137)) {
                            // line 138
                            echo "                           (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 138);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 138);
                            echo ")
                           ";
                        }
                        // line 140
                        echo "                        </option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 142
                    echo "                     </select>
                  </div>
                  <br/><br/>
                  ";
                }
                // line 146
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 146) == "radio")) {
                    // line 147
                    echo "                  <div class=\" form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 147)) {
                        echo " required ";
                    }
                    echo "\">
                     <label style=\"float:left\" class=\"control-label float-r\">";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 148);
                    echo "</label>
                     ";
                    // line 149
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 149));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 150
                        echo "                     <div class=\"radio-custom\">
                        <label>
                        <input type=\"radio\" class='sizes' name=\"option[";
                        // line 152
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 152);
                        echo "\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 152);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 152);
                        echo "\"/>
                        ";
                        // line 153
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 153)) {
                            // line 154
                            echo "                        <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 154);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 154);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 154)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 154);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 154);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
                        ";
                        }
                        // line 156
                        echo "                        <span>
                        ";
                        // line 157
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 157);
                        echo "</span>
                        </label>
                     </div>
                     ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 161
                    echo "                  </div>
                  <br/><br/>
                  ";
                }
                // line 164
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 164) == "checkbox")) {
                    // line 165
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 165)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\">";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 166);
                    echo "</label>
                     <div id=\"input-option";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 167);
                    echo "\">
                        ";
                    // line 168
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 168));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 169
                        echo "                        <div class=\"checkbox\">
                           <label>
                           <input type=\"checkbox\" name=\"option[";
                        // line 171
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 171);
                        echo "\"/>
                           ";
                        // line 172
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 172)) {
                            // line 173
                            echo "                           <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 173);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 173);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 173)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 173);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 173);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
                           ";
                        }
                        // line 175
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 175);
                        echo "
                           ";
                        // line 176
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 176)) {
                            // line 177
                            echo "                           (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 177);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 177);
                            echo ")
                           ";
                        }
                        // line 179
                        echo "                           </label>
                        </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo "                     </div>
                  </div>
                  ";
                }
                // line 185
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 185) == "text")) {
                    // line 186
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 186)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 187);
                    echo "</label>
                     <input type=\"text\" name=\"option[";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 188);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 188);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    echo "\" class=\"form-control\"/>
                  </div>
                  ";
                }
                // line 191
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 191) == "textarea")) {
                    // line 192
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 192)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 193);
                    echo "</label>
                     <textarea name=\"option[";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 194);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 194);
                    echo "</textarea>
                  </div>
                  ";
                }
                // line 197
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 197) == "file")) {
                    // line 198
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 198)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\">";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 199);
                    echo "</label>
                     <button type=\"button\" id=\"button-upload";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 200);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
                     <i class=\"fa fa-upload\"></i>
                     ";
                    // line 202
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                     <input type=\"hidden\" name=\"option[";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "\"/>
                  </div>
                  ";
                }
                // line 206
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 206) == "date")) {
                    // line 207
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 207)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 208);
                    echo "</label>
                     <div class=\"input-group date\">
                        <input type=\"text\" name=\"option[";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 210);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                    echo "\" class=\"form-control\"/>
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\">
                        <i class=\"fa fa-calendar\"></i>
                        </button>
                        </span>
                     </div>
                  </div>
                  ";
                }
                // line 219
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 219) == "datetime")) {
                    // line 220
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 220)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 221
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 221);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 221);
                    echo "</label>
                     <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"option[";
                    // line 223
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 223);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 223);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 223);
                    echo "\" class=\"form-control\"/>
                        <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default\">
                        <i class=\"fa fa-calendar\"></i>
                        </button>
                        </span>
                     </div>
                  </div>
                  ";
                }
                // line 232
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 232) == "time")) {
                    // line 233
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 233)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 234
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 234);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 234);
                    echo "</label>
                     <div class=\"input-group time\">
                        <input type=\"text\" name=\"option[";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 236);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "\" class=\"form-control\"/>
                        <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default\">
                        <i class=\"fa fa-calendar\"></i>
                        </button>
                        </span>
                     </div>
                  </div>
                  ";
                }
                // line 245
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "                  ";
        }
        // line 247
        echo "                  ";
        if (($context["recurrings"] ?? null)) {
            // line 248
            echo "                  <hr>
                  <h3>";
            // line 249
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                  <div class=\"form-group required\">
                     <select name=\"recurring_id\" class=\"form-control\">
                        <option value=\"\">";
            // line 252
            echo ($context["text_select"] ?? null);
            echo "</option>
                        ";
            // line 253
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 254
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 254);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 254);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "                     </select>
                     <div class=\"help-block\" id=\"recurring-description\"></div>
                  </div>
                  ";
        }
        // line 260
        echo "                  <div class=\"form-group\">
                     <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 261
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control iq\"/>
                     <div id=\"counter-btn\" style=\"padding: 0px; padding-left:10px; margin-top:-12px; max-width:300px\" class=\"row\">
                        <div style=\"cursor: pointer; height: 40px; text-align:center;   border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
                           <li style=\" font-size:12px; margin:auto; line-height:40px; text-align:center\" id=\"less_quantity\" class=\"fa fa-minus\"></li>
                        </div>
                        <div style=\" padding-left:0px; height: 40px; padding-right:0px;\" class=\"col-sm-3 col-4\">
                           <input name=\"quantity\" type=\"text\" style=\"box-shadow:none; text-align:center; border-radius:0px; width:100%; height: 40px; background-color: transparent; cursor:default\" id=\"input-quantity\" value=\"1\" class=\"form-control iq\"/>
                        </div>
                        <div style=\" cursor: pointer;  height: 40px; text-align:center; border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
                           <li style=\"font-size:12px; height: 50px; line-height:40px; text-align:center\" id=\"add_quantity\" class=\"fa fa-plus\"></li>
                        </div>
                     </div>
                     <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 273
        echo ($context["product_id"] ?? null);
        echo "\"/>
                     <br/>
                     ";
        // line 275
        if (($context["price"] ?? null)) {
            // line 276
            echo "                     <ul class=\"list-unstyled\">
                        ";
            // line 277
            if ( !($context["special"] ?? null)) {
                // line 278
                echo "                        <li>
                           <h3 id=\"p_pr\">";
                // line 279
                echo ($context["price"] ?? null);
                echo "</h3>
                        </li>
                        ";
            } else {
                // line 282
                echo "                        <li>
                           <span id=\"og\" class=\"price-old\">";
                // line 283
                echo ($context["price"] ?? null);
                echo "</span>
                        </li>
                        <li>
                           <h3 id=\"sp\">";
                // line 286
                echo ($context["special"] ?? null);
                echo "</h3>
                        </li>
                        <li><h4>(You Save <span id=\"you_save\"></span>)</h4></li>
                        ";
            }
            // line 290
            echo "                        ";
            if (($context["tax"] ?? null)) {
                // line 291
                echo "                        <li>";
                echo ($context["text_tax"] ?? null);
                echo "
                           ";
                // line 292
                echo ($context["tax"] ?? null);
                echo "
                        </li>
                        ";
            }
            // line 295
            echo "                        ";
            if (($context["points"] ?? null)) {
                // line 296
                echo "                        <li>";
                echo ($context["text_points"] ?? null);
                echo "
                           ";
                // line 297
                echo ($context["points"] ?? null);
                echo "
                        </li>
                        ";
            }
            // line 300
            echo "                        ";
            if (($context["discounts"] ?? null)) {
                // line 301
                echo "                        <li>
                           <hr>
                        </li>
                        ";
                // line 304
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 305
                    echo "                        <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 305);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 305);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 307
                echo "                        ";
            }
            // line 308
            echo "                     </ul>
                     <br>
                     ";
        }
        // line 311
        echo "                     <button type=\"button\" style='float:left' id=\"button-cart\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                     <button style='float:left; font-size:22px; margin-top:5px; margin-left:20px;' data-toggle=\"tooltip\" title=\"";
        // line 312
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
                     <i class=\"fa fa-heart-o\"></i>
                     </button>
                  </div>
                  ";
        // line 316
        if ((($context["minimum"] ?? null) > 1)) {
            // line 317
            echo "                  <div class=\"alert alert-info\">
                     <i class=\"fa fa-info-circle\"></i>
                     ";
            // line 319
            echo ($context["text_minimum"] ?? null);
            echo "
                  </div>
                  ";
        }
        // line 322
        echo "               </div>
            </div>
         </div>
      </div>
   </div>
   <div class=\"row w-100 mt-10\">
      <div class=\"col-sm-10 offset-sm-1\">
         <ul class=\"nav nav-tabs tabs-ul\">
            <li>
               <a href=\"#tab-description\" class=\"active\" data-toggle=\"tab\">";
        // line 331
        echo ($context["tab_description"] ?? null);
        echo "</a>
            </li>
            ";
        // line 333
        if (($context["attribute_groups"] ?? null)) {
            // line 334
            echo "            <li>
               <a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 335
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
            </li>
            ";
        }
        // line 338
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 339
            echo "            <li>
               <a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 340
            echo ($context["tab_review"] ?? null);
            echo "</a>
            </li>
            ";
        }
        // line 343
        echo "         </ul>
         <div class=\"tab-content\">
            <div class=\"tab-pane active\" style=\"padding:0px 20px; font-size:14px;\" id=\"tab-description\">";
        // line 345
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 346
        if (($context["attribute_groups"] ?? null)) {
            // line 347
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
               <table class=\"table table-bordered\">
                  ";
            // line 349
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 350
                echo "                  <thead>
                     <tr>
                        <td colspan=\"2\">
                           <strong>";
                // line 353
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 353);
                echo "</strong>
                        </td>
                     </tr>
                  </thead>
                  <tbody>
                     ";
                // line 358
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 358));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 359
                    echo "                     <tr>
                        <td>";
                    // line 360
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 360);
                    echo "</td>
                        <td>";
                    // line 361
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 361);
                    echo "</td>
                     </tr>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 364
                echo "                  </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 366
            echo "               </table>
            </div>
            ";
        }
        // line 369
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 370
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
               <form class=\"form-horizontal\" id=\"form-review\">
                  <div id=\"review\"></div>
                  <h2>";
            // line 373
            echo ($context["text_write"] ?? null);
            echo "</h2>
                  ";
            // line 374
            if (($context["review_guest"] ?? null)) {
                // line 375
                echo "                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-name\">";
                // line 377
                echo ($context["entry_name"] ?? null);
                echo "</label>
                        <input type=\"text\" name=\"name\" value=\"";
                // line 378
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                     </div>
                  </div>
                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-review\">";
                // line 383
                echo ($context["entry_review"] ?? null);
                echo "</label>
                        <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                        <div class=\"help-block\">";
                // line 385
                echo ($context["text_note"] ?? null);
                echo "</div>
                     </div>
                  </div>
                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\">";
                // line 390
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                        <span class=\"star-rating star-5\">
                        <input type=\"radio\" id=\"rating-1\" name=\"rating\" value=\"1\"/><i></i>
                        &nbsp;
                        <input type=\"radio\" id=\"rating-2\" name=\"rating\" value=\"2\"/><i></i>
                        &nbsp;
                        <input type=\"radio\" id=\"rating-3\" name=\"rating\" value=\"3\"/><i></i>
                        &nbsp;
                        <input type=\"radio\" id=\"rating-4\" name=\"rating\" value=\"4\"/><i></i>
                        &nbsp;
                        <input type=\"radio\" id=\"rating-5\" name=\"rating\" value=\"5\"/><i></i>
                        &nbsp;
                        </span>
                     </div>
                  </div>
                  ";
                // line 405
                echo ($context["captcha"] ?? null);
                echo "
                  <div class=\"buttons clearfix\">
                     <div class=\"pull-right\">
                        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 408
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">Submit</button>
                     </div>
                  </div>
                  ";
            } else {
                // line 412
                echo "                  ";
                echo ($context["text_login"] ?? null);
                echo "
                  ";
            }
            // line 414
            echo "               </form>
            </div>
            ";
        }
        // line 417
        echo "         </div>
      </div>
   </div>
</div>
<br/><br/>
";
        // line 422
        if (($context["products"] ?? null)) {
            // line 423
            echo "<section style='background:#003B31;' class=' ptb-30'>
   <div class=\"container\">
      <div class=\"row v-center\">
         <p style=\"font-size:24px; color:#fff; font-family: 'Hina Mincho' !important;\">
            <img src=\"assets/img/Star.png\" style=\"margin-right:11px; max-width:25px\">Related Products
         </p>
         <div style='border-color: rgb(255,255,255,0.5); ' class=\"new-arrival-underline\"></div>
      </div>
      <br/>
      <div class=\"splide related_splide\" aria-label=\"Splide Basic HTML Example\">
         <div class=\"splide__track\">
            <ul class=\"splide__list text-center\" style=\"    justify-content: center;\">
               ";
            // line 435
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 436
                echo "               <li class=\"splide__slide\">
                  <div class=\"product-thumb transition text-center\">
                     <div class=\"image\">
                        <a href=\"";
                // line 439
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 439);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 439);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 439);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 439);
                echo "\" style=\"width:100%;\" class=\"img-responsive\"/></a>
                     </div>
                     <div class=\"caption text-capitalize\">
                        <p class=\"mt-10 font-16 text-white\" style=\"max-height:47px;    overflow: hidden;\">";
                // line 442
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 442);
                echo "</p>
                        ";
                // line 443
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 443)) {
                    // line 444
                    echo "                        <div class=\"rating d-none\">
                           ";
                    // line 445
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 446
                        echo "                           ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 446) < $context["j"])) {
                            // line 447
                            echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star-o fa-stack-1x\"></i>
                           </span>
                           ";
                        } else {
                            // line 451
                            echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star fa-stack-1x\"></i>
                           <i class=\"fa fa-star-o fa-stack-1x\"></i>
                           </span>
                           ";
                        }
                        // line 456
                        echo "                           ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 457
                    echo "                        </div>
                        ";
                }
                // line 459
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 459)) {
                    // line 460
                    echo "                        <p class=\"price text-white mt-1\">
                           ";
                    // line 461
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 461)) {
                        // line 462
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 462);
                        echo "
                           ";
                    } else {
                        // line 464
                        echo "                           <span class=\"price-new text-white\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 464);
                        echo "</span>
                           <span class=\"price-old text-white\">";
                        // line 465
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 465);
                        echo "</span>
\t\t\t\t\t\t 
                           ";
                    }
                    // line 468
                    echo "                           ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 468)) {
                        // line 469
                        echo "                           <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
                           ";
                        // line 470
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 470);
                        echo "</span>
                           ";
                    }
                    // line 472
                    echo "                        </p>
                        ";
                }
                // line 474
                echo "                     </div>
                  </div>
               </li>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 478
            echo "            </ul>
         </div>
      </div>
   </div>
</section>
";
        }
        // line 484
        echo "<script type=\"text/javascript\">
   var splide = new Splide('.splide', {
   
   perPage: 4,
   spaceBetween: 10,
   gap: 20,
   autoplay: true,
   perMove: 1,
   breakpoints: {
   640: {
   perPage: 3,
   gap: 20
   
   },
   480: {
   perPage: 2,
   gap: 20
   
   }
   }
   });
   
   splide.mount();
   
   
   \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
   \$.ajax({
   url: 'index.php?route=product/product/getRecurringDescription',
   type: 'post',
   data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
   dataType: 'json',
   beforeSend: function () {
   \$('#recurring-description').html('');
   },
   success: function (json) {
   \$('.alert-dismissible, .text-danger').remove();
   
   if (json['success']) {
   \$('#recurring-description').html(json['success']);
   }
   }
   });
   });
   
</script>
<script type=\"text/javascript\">
   \$('#button-cart').on('click', function () {
   \$.ajax({
   url: 'index.php?route=checkout/cart/add',
   type: 'post',
   data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
   dataType: 'json',
   beforeSend: function () {
   \$('#button-cart').button('loading');
   },
   complete: function () {
   \$('#button-cart').button('reset');
   },
   success: function (json) {
   if (json['error']) {
   
   if (json['error']['option']) {
   for (i in json['error']['option']) {
   var element = \$('#input-option' + i.replace('_', '-'));
   alert(json['error']['option'][i]);
   if (element.parent().hasClass('input-group')) {
   element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
   } else {
   element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
   }
   }
   }
   
   if (json['error']['recurring']) {
   \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
   }
   
   // Highlight any found errors
   \$('.text-danger').parent().addClass('has-error');
   }
   
   if (json['success']) {
   
   \$('.cart-counter-header').html(json['total'][0]);
   
   setTimeout(function () {
   \$(\"#cart-total\").html(json['total']);
   let t = json['total'].split('-');
   \$('.slide-cart-total').html(t[1]);
   }, 100);
   
   \$('.cart-body').load('index.php?route=common/slide_cart/info div.cart-body');
   
   
   \$('.cart_backdrop').fadeIn();
   \$(\".cart\").animate({right: '0px'})
   
   }
   },
   error: function (xhr, ajaxOptions, thrownError) {
   alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
   }
   });
   });
   
</script>
<script type=\"text/javascript\">
   \$('.date').datetimepicker({language: '";
        // line 591
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});
   
   \$('.datetime').datetimepicker({language: '";
        // line 593
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});
   
   \$('.time').datetimepicker({language: '";
        // line 595
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false});
   
   \$('button[id^=\\'button-upload\\']').on('click', function () {
   var node = this;
   
   \$('#form-upload').remove();
   
   \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');
   
   \$('#form-upload input[name=\\'file\\']').trigger('click');
   
   if (typeof timer != 'undefined') {
   clearInterval(timer);
   }
   
   timer = setInterval(function () {
   if (\$('#form-upload input[name=\\'file\\']').val() != '') {
   clearInterval(timer);
   
   \$.ajax({
   url: 'index.php?route=tool/upload',
   type: 'post',
   dataType: 'json',
   data: new FormData(\$('#form-upload')[0]),
   cache: false,
   contentType: false,
   processData: false,
   beforeSend: function () {
   \$(node).button('loading');
   },
   complete: function () {
   \$(node).button('reset');
   },
   success: function (json) {
   \$('.text-danger').remove();
   
   if (json['error']) {
   \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
   }
   
   if (json['success']) {
   alert(json['success']);
   
   \$(node).parent().find('input').val(json['code']);
   }
   },
   error: function (xhr, ajaxOptions, thrownError) {
   alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
   }
   });
   }
   }, 500);
   });
</script>
<script type=\"text/javascript\">
   \$('#review').delegate('.pagination a', 'click', function (e) {
   e.preventDefault();
   
   \$('#review').fadeOut('slow');
   
   \$('#review').load(this.href);
   
   \$('#review').fadeIn('slow');
   });
   
   \$('#review').load('index.php?route=product/product/review&product_id=                          ";
        // line 660
        echo ($context["product_id"] ?? null);
        echo "');
   
   \$('#button-review').on('click', function () {
   \$.ajax({
   url: 'index.php?route=product/product/write&product_id=                          ";
        // line 664
        echo ($context["product_id"] ?? null);
        echo "',
   type: 'post',
   dataType: 'json',
   data: \$(\"#form-review\").serialize(),
   beforeSend: function () {
   \$('#button-review').button('loading');
   },
   complete: function () {
   \$('#button-review').button('reset');
   },
   success: function (json) {
   \$('.alert-dismissible').remove();
   
   if (json['error']) {
   \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
   }
   
   if (json['success']) {
   \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
   
   \$('input[name=\\'name\\']').val('');
   \$('textarea[name=\\'text\\']').val('');
   \$('input[name=\\'rating\\']:checked').prop('checked', false);
   }
   }
   });
   });
   
   \$(document).ready(function () {
   var old_price = Number(\$(\"#p_pr\").text().replace(/[`~!@#\$%^&*()_|+\\-=?;:'\",<>\\{\\}\\[\\]\\\\\\/]/gi, ''));
   
   
   \$('.sizes').change(function () {
   var p = \$(this).attr('data-price');
   var sig = \$(this).attr('data-sign');
   var q = p.replace(/[`~!@#\$%^&*()_|+\\-=?;:'\",<>\\{\\}\\[\\]\\\\\\/]/gi, '');
   var x = Number(q);
   
   if (sig == \"+\") {
   var new_p = old_price + x;
   } else {
   var new_p = old_price - x;
   }
   
   
   // \$(\"#p_pr\").text('\$' + new_p);
   
   });
   
   \$(\"#add_quantity\").click(function () {
   
   var b = Number(\$(\"#input-quantity\").val()) + 1;
   
   \$(\".iq\").val(b);
   })
   \$(\"#less_quantity\").click(function () {
   var b = Number(\$(\"#input-quantity\").val()) - 1;
   if (b < 0) {
   b = 0;
   }
   \$(\".iq\").val(b);
   })
   
   var slides_to_show = 3;
   \$('.slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: true,
   fade: false,
   infinite: true,
   asNavFor: '.slider-nav',
   nextArrow: '<button style=\"width: 25px;top: 220px;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
   prevArrow: '<button style=\"width: 25px;top: 220px;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'
   
   });
   \$('.slider-nav').slick({
   slidesToShow: slides_to_show,
   
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   dots: false,
   arrows: false,
   
   focusOnSelect: true
   
   });
   
   \$('.thumbnails').magnificPopup({
   type: 'image',
   delegate: 'a',
   gallery: {
   enabled: true
   }
   });
   });
   
   
   \$(document).ready(function (e) {
   var link = getUrlParameter('a');
   
   \$('.zoom').zoom({magnify: '2'});
   if (link) {
   \$(\".tab_options\").each(function () {
   if (\$.trim(\$(this).siblings().html()).toLocaleLowerCase() == link.toLocaleLowerCase()) {
   \$(this).css('border', '2px solid #413B98');
   \$(this).addClass('current');
   var val = \$(this).attr(\"data-val\");
   
   \$(\"select option\").each(function (index, element) {
   if (\$(this).val() == val) {
   \$(this).prop(\"selected\", true);
   }
   
   })
   
   }
   })
   } else {
   if (\$(\".tab_options\").length > 0) {
   
   var val;
   
   \$(\"select option\").each(function (index, element) {
   if (\$(this).attr(\"data-link\") == \"\") {
   \$(this).prop(\"selected\", true);
   val = \$(this).val();
   }
   })
   
   \$(\".tab_options\").each(function () {
   if (\$(this).attr(\"data-val\") == val) {
   \$(this).css('border', '2px solid #003B30');
   }
   })
   }
   }
   \$(\".tab_options\").click(function () {
   if (!\$(this).hasClass('current')) {
   var val = \$(this).attr(\"data-val\");
   
   \$(\"select option\").each(function (index, element) {
   if (\$(this).val() == val) {
   if (\$(this).attr(\"data-link\")) {
   \$(this).prop(\"selected\", true);
   window.location = \$(this).attr(\"data-link\") + '?a=' + \$.trim(\$(this).html());
   
   }
   }
   });
   }
   
   })
   
   });
   
   var getUrlParameter = function getUrlParameter(sParam) {
   var sPageURL = window.location.search.substring(1),
   sURLVariables = sPageURL.split('&'),
   sParameterName,
   i;
   
   for (i = 0; i < sURLVariables.length; i++) {
   sParameterName = sURLVariables[i].split('=');
   
   if (sParameterName[0] === sParam) {
   return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
   }
   }
   };
   
   \$(document).ready(function(){
      if(\$(\"#you_save\").length !=0){
         og = Number(\$(\"#og\").text().match(/[\\d,]+\\.?\\d*/)[0].replace(/,/g, ''));
         sp = Number(\$(\"#sp\").text().match(/[\\d,]+\\.?\\d*/)[0].replace(/,/g, ''));
         var xx = og-sp;
         \$(\"#you_save\").text(\"US\$\"+xx);
      }
   })
   
</script>
";
        // line 844
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1605 => 844,  1422 => 664,  1415 => 660,  1347 => 595,  1342 => 593,  1337 => 591,  1228 => 484,  1220 => 478,  1211 => 474,  1207 => 472,  1202 => 470,  1197 => 469,  1194 => 468,  1188 => 465,  1183 => 464,  1177 => 462,  1175 => 461,  1172 => 460,  1169 => 459,  1165 => 457,  1159 => 456,  1152 => 451,  1146 => 447,  1143 => 446,  1139 => 445,  1136 => 444,  1134 => 443,  1130 => 442,  1118 => 439,  1113 => 436,  1109 => 435,  1095 => 423,  1093 => 422,  1086 => 417,  1081 => 414,  1075 => 412,  1068 => 408,  1062 => 405,  1044 => 390,  1036 => 385,  1031 => 383,  1023 => 378,  1019 => 377,  1015 => 375,  1013 => 374,  1009 => 373,  1004 => 370,  1001 => 369,  996 => 366,  989 => 364,  980 => 361,  976 => 360,  973 => 359,  969 => 358,  961 => 353,  956 => 350,  952 => 349,  948 => 347,  946 => 346,  942 => 345,  938 => 343,  932 => 340,  929 => 339,  926 => 338,  920 => 335,  917 => 334,  915 => 333,  910 => 331,  899 => 322,  893 => 319,  889 => 317,  887 => 316,  878 => 312,  871 => 311,  866 => 308,  863 => 307,  852 => 305,  848 => 304,  843 => 301,  840 => 300,  834 => 297,  829 => 296,  826 => 295,  820 => 292,  815 => 291,  812 => 290,  805 => 286,  799 => 283,  796 => 282,  790 => 279,  787 => 278,  785 => 277,  782 => 276,  780 => 275,  775 => 273,  760 => 261,  757 => 260,  751 => 256,  740 => 254,  736 => 253,  732 => 252,  726 => 249,  723 => 248,  720 => 247,  717 => 246,  711 => 245,  695 => 236,  688 => 234,  681 => 233,  678 => 232,  662 => 223,  655 => 221,  648 => 220,  645 => 219,  629 => 210,  622 => 208,  615 => 207,  612 => 206,  604 => 203,  600 => 202,  593 => 200,  589 => 199,  582 => 198,  579 => 197,  567 => 194,  561 => 193,  554 => 192,  551 => 191,  539 => 188,  533 => 187,  526 => 186,  523 => 185,  518 => 182,  510 => 179,  503 => 177,  501 => 176,  496 => 175,  480 => 173,  478 => 172,  472 => 171,  468 => 169,  464 => 168,  460 => 167,  456 => 166,  449 => 165,  446 => 164,  441 => 161,  431 => 157,  428 => 156,  412 => 154,  410 => 153,  400 => 152,  396 => 150,  392 => 149,  388 => 148,  381 => 147,  378 => 146,  372 => 142,  365 => 140,  358 => 138,  356 => 137,  352 => 136,  343 => 135,  339 => 134,  335 => 133,  329 => 132,  322 => 131,  312 => 127,  299 => 125,  296 => 124,  291 => 123,  288 => 122,  284 => 121,  281 => 120,  279 => 119,  273 => 116,  267 => 113,  261 => 110,  254 => 107,  249 => 104,  243 => 103,  236 => 98,  230 => 94,  227 => 93,  223 => 92,  219 => 90,  217 => 89,  213 => 87,  209 => 85,  206 => 84,  193 => 81,  190 => 80,  185 => 79,  182 => 78,  172 => 76,  170 => 75,  167 => 74,  164 => 73,  160 => 71,  157 => 70,  144 => 67,  141 => 66,  136 => 65,  133 => 64,  123 => 62,  121 => 61,  118 => 60,  116 => 59,  110 => 56,  97 => 45,  85 => 41,  82 => 40,  78 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
