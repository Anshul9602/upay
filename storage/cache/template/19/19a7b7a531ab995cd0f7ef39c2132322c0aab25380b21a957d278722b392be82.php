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
class __TwigTemplate_c0a4f1703ed22c54c0750b4e52be4b340c309c024b2f4c74898dfdb1393ae6c5 extends \Twig\Template
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
                  Gold Purity:
                  <i>";
        // line 116
        echo ($context["metal_purity"] ?? null);
        echo "</i>
                  <br />
                  Stone Weight:
                  <i>
                    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
            // line 121
            echo "                      ";
            if ((twig_lower_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 121))) == "stone details")) {
                // line 122
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 122));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 123
                    echo "                          ";
                    if ((twig_lower_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 123))) == "stone weight")) {
                        // line 124
                        echo "                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 124);
                        echo "
                          ";
                    }
                    // line 126
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "                      ";
            }
            // line 128
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                  </i>
                </p>
                
                
               <div id=\"product\">
                  ";
        // line 134
        if (($context["options"] ?? null)) {
            // line 135
            echo "                  <hr>
                  ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 137
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 137) == "select")) {
                    // line 138
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 138));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 139
                        echo "                  <div class=\"text-center\" style=\"display: inline-block;\">
                     <span style=\"background:url(";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 140);
                        echo ")\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 140);
                        echo "\" data-money=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 140);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_image", [], "any", false, false, false, 140);
                        echo "\" data-val=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 140);
                        echo "\" class=\"tab_options\"></span>
                     <p style=\"margin-top: 0px; font-size:12px\">
                        ";
                        // line 142
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 142);
                        echo "
                     </p>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "                  <div style=\"display: none;\" class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 146)) {
                        echo " required ";
                    }
                    echo "\">
                     <select name=\"option[";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                    echo "\" class=\"form-control\">
                        <option value=\"\">";
                    // line 148
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 149
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 149));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 150
                        echo "                        <option data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 150);
                        echo "\" data-link=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "link", [], "any", false, false, false, 150);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 150);
                        echo "\">
                           ";
                        // line 151
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 151);
                        echo "
                           ";
                        // line 152
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 152)) {
                            // line 153
                            echo "                           (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 153);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 153);
                            echo ")
                           ";
                        }
                        // line 155
                        echo "                        </option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo "                     </select>
                  </div>
                  <br/><br/>
                  ";
                }
                // line 161
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 161) == "radio")) {
                    // line 162
                    echo "                  <div class=\" form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 162)) {
                        echo " required ";
                    }
                    echo "\">
                     <label style=\"float:left\" class=\"control-label float-r\">";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 163);
                    echo "</label>
                     ";
                    // line 164
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 164));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 165
                        echo "                     <div class=\"radio-custom\">
                        <label>
                        <input type=\"radio\" class='sizes' name=\"option[";
                        // line 167
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 167);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 167);
                        echo "\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 167);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 167);
                        echo "\"/>
                        ";
                        // line 168
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 168)) {
                            // line 169
                            echo "                        <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 169);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 169);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 169)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 169);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 169);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
                        ";
                        }
                        // line 171
                        echo "                        <span>
                        ";
                        // line 172
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 172);
                        echo "</span>
                        </label>
                     </div>
                     ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "                  </div>
                  <br/><br/>
                  ";
                }
                // line 179
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 179) == "checkbox")) {
                    // line 180
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 180)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\">";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 181);
                    echo "</label>
                     <div id=\"input-option";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    echo "\">
                        ";
                    // line 183
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 183));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 184
                        echo "                        <div class=\"checkbox\">
                           <label>
                           <input type=\"checkbox\" name=\"option[";
                        // line 186
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 186);
                        echo "\"/>
                           ";
                        // line 187
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 187)) {
                            // line 188
                            echo "                           <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 188);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 188);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 188)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 188);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 188);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
                           ";
                        }
                        // line 190
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 190);
                        echo "
                           ";
                        // line 191
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 191)) {
                            // line 192
                            echo "                           (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 192);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 192);
                            echo ")
                           ";
                        }
                        // line 194
                        echo "                           </label>
                        </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 197
                    echo "                     </div>
                  </div>
                  ";
                }
                // line 200
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 200) == "text")) {
                    // line 201
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 201)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 202);
                    echo "</label>
                     <input type=\"text\" name=\"option[";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 203);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 203);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "\" class=\"form-control\"/>
                  </div>
                  ";
                }
                // line 206
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 206) == "textarea")) {
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
                     <textarea name=\"option[";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 209);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 209);
                    echo "</textarea>
                  </div>
                  ";
                }
                // line 212
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 212) == "file")) {
                    // line 213
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 213)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\">";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 214);
                    echo "</label>
                     <button type=\"button\" id=\"button-upload";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
                     <i class=\"fa fa-upload\"></i>
                     ";
                    // line 217
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                     <input type=\"hidden\" name=\"option[";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "\"/>
                  </div>
                  ";
                }
                // line 221
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 221) == "date")) {
                    // line 222
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 222)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 223
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 223);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 223);
                    echo "</label>
                     <div class=\"input-group date\">
                        <input type=\"text\" name=\"option[";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 225);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
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
                // line 234
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 234) == "datetime")) {
                    // line 235
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 235)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 236);
                    echo "</label>
                     <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"option[";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 238);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
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
                // line 247
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 247) == "time")) {
                    // line 248
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 248)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 249
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 249);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 249);
                    echo "</label>
                     <div class=\"input-group time\">
                        <input type=\"text\" name=\"option[";
                    // line 251
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 251);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 251);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 251);
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
                // line 260
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "                  ";
        }
        // line 262
        echo "                  ";
        if (($context["recurrings"] ?? null)) {
            // line 263
            echo "                  <hr>
                  <h3>";
            // line 264
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                  <div class=\"form-group required\">
                     <select name=\"recurring_id\" class=\"form-control\">
                        <option value=\"\">";
            // line 267
            echo ($context["text_select"] ?? null);
            echo "</option>
                        ";
            // line 268
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 269
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 269);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 269);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "                     </select>
                     <div class=\"help-block\" id=\"recurring-description\"></div>
                  </div>
                  ";
        }
        // line 275
        echo "                  <div class=\"form-group\">
                     <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 276
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
        // line 288
        echo ($context["product_id"] ?? null);
        echo "\"/>
                     <br/>
                     ";
        // line 290
        if (($context["price"] ?? null)) {
            // line 291
            echo "                     <ul class=\"list-unstyled\">
                        ";
            // line 292
            if ( !($context["special"] ?? null)) {
                // line 293
                echo "                        <li>
                           <h3 id=\"p_pr\">";
                // line 294
                echo ($context["price"] ?? null);
                echo "</h3>
                        </li>
                        ";
            } else {
                // line 297
                echo "                        <li>
                           <span id=\"og\" class=\"price-old\">";
                // line 298
                echo ($context["price"] ?? null);
                echo "</span>
                        </li>
                        <li>
                           <h3 id=\"sp\">";
                // line 301
                echo ($context["special"] ?? null);
                echo "</h3>
                        </li>
                        <li><h4>(You Save <span id=\"you_save\"></span>)</h4></li>
                        ";
            }
            // line 305
            echo "                        ";
            if (($context["tax"] ?? null)) {
                // line 306
                echo "                        <li>";
                echo ($context["text_tax"] ?? null);
                echo "
                           ";
                // line 307
                echo ($context["tax"] ?? null);
                echo "
                        </li>
                        ";
            }
            // line 310
            echo "                        ";
            if (($context["points"] ?? null)) {
                // line 311
                echo "                        <li>";
                echo ($context["text_points"] ?? null);
                echo "
                           ";
                // line 312
                echo ($context["points"] ?? null);
                echo "
                        </li>
                        ";
            }
            // line 315
            echo "                        ";
            if (($context["discounts"] ?? null)) {
                // line 316
                echo "                        <li>
                           <hr>
                        </li>
                        ";
                // line 319
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 320
                    echo "                        <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 320);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 320);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 322
                echo "                        ";
            }
            // line 323
            echo "                     </ul>
                     <br>
                     ";
        }
        // line 326
        echo "                     <button type=\"button\" style='float:left' id=\"button-cart\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                     <button style='float:left; font-size:22px; margin-top:5px; margin-left:20px;' data-toggle=\"tooltip\" title=\"";
        // line 327
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
                     <i class=\"fa fa-heart-o\"></i>
                     </button>
                  </div>
                  ";
        // line 331
        if ((($context["minimum"] ?? null) > 1)) {
            // line 332
            echo "                  <div class=\"alert alert-info\">
                     <i class=\"fa fa-info-circle\"></i>
                     ";
            // line 334
            echo ($context["text_minimum"] ?? null);
            echo "
                  </div>
                  ";
        }
        // line 337
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
        // line 346
        echo ($context["tab_description"] ?? null);
        echo "</a>
            </li>
            ";
        // line 348
        if (($context["attribute_groups"] ?? null)) {
            // line 349
            echo "            <li style=\"display: none;\">
               <a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 350
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
            </li>
            ";
        }
        // line 353
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 354
            echo "            <li>
               <a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 355
            echo ($context["tab_review"] ?? null);
            echo "</a>
            </li>
            ";
        }
        // line 358
        echo "         </ul>
         <div class=\"tab-content\">
            <div class=\"tab-pane active\" style=\"padding:0px 20px; font-size:14px;\" id=\"tab-description\">";
        // line 360
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 361
        if (($context["attribute_groups"] ?? null)) {
            // line 362
            echo "            <div style=\"display: none;\" class=\"tab-pane\" id=\"tab-specification\">
               <table class=\"table table-bordered\">
                  ";
            // line 364
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 365
                echo "                  <thead>
                     <tr>
                        <td colspan=\"2\">
                           <strong>";
                // line 368
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 368);
                echo "</strong>
                        </td>
                     </tr>
                  </thead>
                  <tbody>
                     ";
                // line 373
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 373));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 374
                    echo "                     <tr>
                        <td>";
                    // line 375
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 375);
                    echo "</td>
                        <td>";
                    // line 376
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 376);
                    echo "</td>
                     </tr>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 379
                echo "                  </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 381
            echo "               </table>
            </div>
            ";
        }
        // line 384
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 385
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
               <form class=\"form-horizontal\" id=\"form-review\">
                  <div id=\"review\"></div>
                  <h2>";
            // line 388
            echo ($context["text_write"] ?? null);
            echo "</h2>
                  ";
            // line 389
            if (($context["review_guest"] ?? null)) {
                // line 390
                echo "                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-name\">";
                // line 392
                echo ($context["entry_name"] ?? null);
                echo "</label>
                        <input type=\"text\" name=\"name\" value=\"";
                // line 393
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                     </div>
                  </div>
                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-review\">";
                // line 398
                echo ($context["entry_review"] ?? null);
                echo "</label>
                        <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                        <div class=\"help-block\">";
                // line 400
                echo ($context["text_note"] ?? null);
                echo "</div>
                     </div>
                  </div>
                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\">";
                // line 405
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
                // line 420
                echo ($context["captcha"] ?? null);
                echo "
                  <div class=\"buttons clearfix\">
                     <div class=\"pull-right\">
                        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 423
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">Submit</button>
                     </div>
                  </div>
                  ";
            } else {
                // line 427
                echo "                  ";
                echo ($context["text_login"] ?? null);
                echo "
                  ";
            }
            // line 429
            echo "               </form>
            </div>
            ";
        }
        // line 432
        echo "         </div>
      </div>
   </div>
</div>
<br/><br/>
";
        // line 437
        if (($context["products"] ?? null)) {
            // line 438
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
            // line 450
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 451
                echo "               <li class=\"splide__slide\">
                  <div class=\"product-thumb transition text-center\">
                     <div class=\"image\">
                        <a href=\"";
                // line 454
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 454);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 454);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 454);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 454);
                echo "\" style=\"width:100%;\" class=\"img-responsive\"/></a>
                     </div>
                     <div class=\"caption text-capitalize\">
                        <p class=\"mt-10 font-16 text-white\" style=\"max-height:47px;    overflow: hidden;\">";
                // line 457
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 457);
                echo "</p>
                        ";
                // line 458
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 458)) {
                    // line 459
                    echo "                        <div class=\"rating d-none\">
                           ";
                    // line 460
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 461
                        echo "                           ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 461) < $context["j"])) {
                            // line 462
                            echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star-o fa-stack-1x\"></i>
                           </span>
                           ";
                        } else {
                            // line 466
                            echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star fa-stack-1x\"></i>
                           <i class=\"fa fa-star-o fa-stack-1x\"></i>
                           </span>
                           ";
                        }
                        // line 471
                        echo "                           ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 472
                    echo "                        </div>
                        ";
                }
                // line 474
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 474)) {
                    // line 475
                    echo "                        <p class=\"price text-white mt-1\">
                           ";
                    // line 476
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 476)) {
                        // line 477
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 477);
                        echo "
                           ";
                    } else {
                        // line 479
                        echo "                           <span class=\"price-new text-white\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 479);
                        echo "</span>
                           <span class=\"price-old text-white\">";
                        // line 480
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 480);
                        echo "</span>
\t\t\t\t\t\t 
                           ";
                    }
                    // line 483
                    echo "                           ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 483)) {
                        // line 484
                        echo "                           <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
                           ";
                        // line 485
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 485);
                        echo "</span>
                           ";
                    }
                    // line 487
                    echo "                        </p>
                        ";
                }
                // line 489
                echo "                     </div>
                  </div>
               </li>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 493
            echo "            </ul>
         </div>
      </div>
   </div>
</section>
";
        }
        // line 499
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
        // line 606
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});
   
   \$('.datetime').datetimepicker({language: '";
        // line 608
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});
   
   \$('.time').datetimepicker({language: '";
        // line 610
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
        // line 675
        echo ($context["product_id"] ?? null);
        echo "');
   
   \$('#button-review').on('click', function () {
   \$.ajax({
   url: 'index.php?route=product/product/write&product_id=                          ";
        // line 679
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
         var currency_sp = \$(\"#sp\").text().replace(/[0-9]/g, '');
         \$(\"#you_save\").text(currency_sp+xx);
      }
   })
   
</script>
";
        // line 860
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
        return array (  1650 => 860,  1466 => 679,  1459 => 675,  1391 => 610,  1386 => 608,  1381 => 606,  1272 => 499,  1264 => 493,  1255 => 489,  1251 => 487,  1246 => 485,  1241 => 484,  1238 => 483,  1232 => 480,  1227 => 479,  1221 => 477,  1219 => 476,  1216 => 475,  1213 => 474,  1209 => 472,  1203 => 471,  1196 => 466,  1190 => 462,  1187 => 461,  1183 => 460,  1180 => 459,  1178 => 458,  1174 => 457,  1162 => 454,  1157 => 451,  1153 => 450,  1139 => 438,  1137 => 437,  1130 => 432,  1125 => 429,  1119 => 427,  1112 => 423,  1106 => 420,  1088 => 405,  1080 => 400,  1075 => 398,  1067 => 393,  1063 => 392,  1059 => 390,  1057 => 389,  1053 => 388,  1048 => 385,  1045 => 384,  1040 => 381,  1033 => 379,  1024 => 376,  1020 => 375,  1017 => 374,  1013 => 373,  1005 => 368,  1000 => 365,  996 => 364,  992 => 362,  990 => 361,  986 => 360,  982 => 358,  976 => 355,  973 => 354,  970 => 353,  964 => 350,  961 => 349,  959 => 348,  954 => 346,  943 => 337,  937 => 334,  933 => 332,  931 => 331,  922 => 327,  915 => 326,  910 => 323,  907 => 322,  896 => 320,  892 => 319,  887 => 316,  884 => 315,  878 => 312,  873 => 311,  870 => 310,  864 => 307,  859 => 306,  856 => 305,  849 => 301,  843 => 298,  840 => 297,  834 => 294,  831 => 293,  829 => 292,  826 => 291,  824 => 290,  819 => 288,  804 => 276,  801 => 275,  795 => 271,  784 => 269,  780 => 268,  776 => 267,  770 => 264,  767 => 263,  764 => 262,  761 => 261,  755 => 260,  739 => 251,  732 => 249,  725 => 248,  722 => 247,  706 => 238,  699 => 236,  692 => 235,  689 => 234,  673 => 225,  666 => 223,  659 => 222,  656 => 221,  648 => 218,  644 => 217,  637 => 215,  633 => 214,  626 => 213,  623 => 212,  611 => 209,  605 => 208,  598 => 207,  595 => 206,  583 => 203,  577 => 202,  570 => 201,  567 => 200,  562 => 197,  554 => 194,  547 => 192,  545 => 191,  540 => 190,  524 => 188,  522 => 187,  516 => 186,  512 => 184,  508 => 183,  504 => 182,  500 => 181,  493 => 180,  490 => 179,  485 => 176,  475 => 172,  472 => 171,  456 => 169,  454 => 168,  444 => 167,  440 => 165,  436 => 164,  432 => 163,  425 => 162,  422 => 161,  416 => 157,  409 => 155,  402 => 153,  400 => 152,  396 => 151,  387 => 150,  383 => 149,  379 => 148,  373 => 147,  366 => 146,  356 => 142,  343 => 140,  340 => 139,  335 => 138,  332 => 137,  328 => 136,  325 => 135,  323 => 134,  316 => 129,  310 => 128,  307 => 127,  301 => 126,  295 => 124,  292 => 123,  287 => 122,  284 => 121,  280 => 120,  273 => 116,  267 => 113,  261 => 110,  254 => 107,  249 => 104,  243 => 103,  236 => 98,  230 => 94,  227 => 93,  223 => 92,  219 => 90,  217 => 89,  213 => 87,  209 => 85,  206 => 84,  193 => 81,  190 => 80,  185 => 79,  182 => 78,  172 => 76,  170 => 75,  167 => 74,  164 => 73,  160 => 71,  157 => 70,  144 => 67,  141 => 66,  136 => 65,  133 => 64,  123 => 62,  121 => 61,  118 => 60,  116 => 59,  110 => 56,  97 => 45,  85 => 41,  82 => 40,  78 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
