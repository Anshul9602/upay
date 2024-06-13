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
class __TwigTemplate_0f8049448d80168718117c4d8ab3f66c1d3b7121c80ca22f6b21f847954e401b extends \Twig\Template
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
            echo "                         ";
            if ((twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 121) == "Stone Details")) {
                // line 122
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 122));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 123
                    echo "                           ";
                    if ((twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 123) == "Stone Weight")) {
                        // line 124
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 124);
                        echo "
                           ";
                    }
                    // line 126
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "                         ";
            }
            // line 128
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                  </i>
               </p>
               <div id=\"product\">
                  ";
        // line 132
        if (($context["options"] ?? null)) {
            // line 133
            echo "                  <hr>
                  ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 135
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 135) == "select")) {
                    // line 136
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 136));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 137
                        echo "                  <div class=\"text-center\" style=\"display: inline-block;\">
                     <span style=\"background:url(";
                        // line 138
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 138);
                        echo ")\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 138);
                        echo "\" data-money=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 138);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_image", [], "any", false, false, false, 138);
                        echo "\" data-val=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 138);
                        echo "\" class=\"tab_options\"></span>
                     <p style=\"margin-top: 0px; font-size:12px\">
                        ";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 140);
                        echo "
                     </p>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 144
                    echo "                  <div style=\"display: none;\" class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 144)) {
                        echo " required ";
                    }
                    echo "\">
                     <select name=\"option[";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                    echo "\" class=\"form-control\">
                        <option value=\"\">";
                    // line 146
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 147
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 147));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 148
                        echo "                        <option data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 148);
                        echo "\" data-link=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "link", [], "any", false, false, false, 148);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 148);
                        echo "\">
                           ";
                        // line 149
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 149);
                        echo "
                           ";
                        // line 150
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 150)) {
                            // line 151
                            echo "                           (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 151);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 151);
                            echo ")
                           ";
                        }
                        // line 153
                        echo "                        </option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    echo "                     </select>
                  </div>
                  <br/><br/>
                  ";
                }
                // line 159
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 159) == "radio")) {
                    // line 160
                    echo "                  <div class=\" form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 160)) {
                        echo " required ";
                    }
                    echo "\">
                     <label style=\"float:left\" class=\"control-label float-r\">";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 161);
                    echo "</label>
                     ";
                    // line 162
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 162));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 163
                        echo "                     <div class=\"radio-custom\">
                        <label>
                        <input type=\"radio\" class='sizes' name=\"option[";
                        // line 165
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 165);
                        echo "\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 165);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 165);
                        echo "\"/>
                        ";
                        // line 166
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 166)) {
                            // line 167
                            echo "                        <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 167);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 167);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 167)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 167);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 167);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
                        ";
                        }
                        // line 169
                        echo "                        <span>
                        ";
                        // line 170
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 170);
                        echo "</span>
                        </label>
                     </div>
                     ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 174
                    echo "                  </div>
                  <br/><br/>
                  ";
                }
                // line 177
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 177) == "checkbox")) {
                    // line 178
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 178)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\">";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 179);
                    echo "</label>
                     <div id=\"input-option";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 180);
                    echo "\">
                        ";
                    // line 181
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 181));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 182
                        echo "                        <div class=\"checkbox\">
                           <label>
                           <input type=\"checkbox\" name=\"option[";
                        // line 184
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 184);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 184);
                        echo "\"/>
                           ";
                        // line 185
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 185)) {
                            // line 186
                            echo "                           <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 186);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 186);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 186)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 186);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 186);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
                           ";
                        }
                        // line 188
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 188);
                        echo "
                           ";
                        // line 189
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 189)) {
                            // line 190
                            echo "                           (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 190);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190);
                            echo ")
                           ";
                        }
                        // line 192
                        echo "                           </label>
                        </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 195
                    echo "                     </div>
                  </div>
                  ";
                }
                // line 198
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 198) == "text")) {
                    // line 199
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 199)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 200);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 200);
                    echo "</label>
                     <input type=\"text\" name=\"option[";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 201);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 201);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "\" class=\"form-control\"/>
                  </div>
                  ";
                }
                // line 204
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 204) == "textarea")) {
                    // line 205
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 205)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 206);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 206);
                    echo "</label>
                     <textarea name=\"option[";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 207);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 207);
                    echo "</textarea>
                  </div>
                  ";
                }
                // line 210
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 210) == "file")) {
                    // line 211
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 211)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\">";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 212);
                    echo "</label>
                     <button type=\"button\" id=\"button-upload";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
                     <i class=\"fa fa-upload\"></i>
                     ";
                    // line 215
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                     <input type=\"hidden\" name=\"option[";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                    echo "\"/>
                  </div>
                  ";
                }
                // line 219
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 219) == "date")) {
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
                     <div class=\"input-group date\">
                        <input type=\"text\" name=\"option[";
                    // line 223
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 223);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 223);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 223);
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
                // line 232
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 232) == "datetime")) {
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
                     <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"option[";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 236);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
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
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 245) == "time")) {
                    // line 246
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 246)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 247
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 247);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 247);
                    echo "</label>
                     <div class=\"input-group time\">
                        <input type=\"text\" name=\"option[";
                    // line 249
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 249);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 249);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 249);
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
                // line 258
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "                  ";
        }
        // line 260
        echo "                  ";
        if (($context["recurrings"] ?? null)) {
            // line 261
            echo "                  <hr>
                  <h3>";
            // line 262
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                  <div class=\"form-group required\">
                     <select name=\"recurring_id\" class=\"form-control\">
                        <option value=\"\">";
            // line 265
            echo ($context["text_select"] ?? null);
            echo "</option>
                        ";
            // line 266
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 267
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 267);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 267);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "                     </select>
                     <div class=\"help-block\" id=\"recurring-description\"></div>
                  </div>
                  ";
        }
        // line 273
        echo "                  <div class=\"form-group\">
                     <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 274
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
        // line 286
        echo ($context["product_id"] ?? null);
        echo "\"/>
                     <br/>
                     ";
        // line 288
        if (($context["price"] ?? null)) {
            // line 289
            echo "                     <ul class=\"list-unstyled\">
                        ";
            // line 290
            if ( !($context["special"] ?? null)) {
                // line 291
                echo "                        <li>
                           <h3 id=\"p_pr\">";
                // line 292
                echo ($context["price"] ?? null);
                echo "</h3>
                        </li>
                        ";
            } else {
                // line 295
                echo "                        <li>
                           <span id=\"og\" class=\"price-old\">";
                // line 296
                echo ($context["price"] ?? null);
                echo "</span>
                        </li>
                        <li>
                           <h3 id=\"sp\">";
                // line 299
                echo ($context["special"] ?? null);
                echo "</h3>
                        </li>
                        <li><h4>(You Save <span id=\"you_save\"></span>)</h4></li>
                        ";
            }
            // line 303
            echo "                        ";
            if (($context["tax"] ?? null)) {
                // line 304
                echo "                        <li>";
                echo ($context["text_tax"] ?? null);
                echo "
                           ";
                // line 305
                echo ($context["tax"] ?? null);
                echo "
                        </li>
                        ";
            }
            // line 308
            echo "                        ";
            if (($context["points"] ?? null)) {
                // line 309
                echo "                        <li>";
                echo ($context["text_points"] ?? null);
                echo "
                           ";
                // line 310
                echo ($context["points"] ?? null);
                echo "
                        </li>
                        ";
            }
            // line 313
            echo "                        ";
            if (($context["discounts"] ?? null)) {
                // line 314
                echo "                        <li>
                           <hr>
                        </li>
                        ";
                // line 317
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 318
                    echo "                        <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 318);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 318);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 320
                echo "                        ";
            }
            // line 321
            echo "                     </ul>
                     <br>
                     ";
        }
        // line 324
        echo "                     <button type=\"button\" style='float:left' id=\"button-cart\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                     <button style='float:left; font-size:22px; margin-top:5px; margin-left:20px;' data-toggle=\"tooltip\" title=\"";
        // line 325
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
                     <i class=\"fa fa-heart-o\"></i>
                     </button>
                  </div>
                  ";
        // line 329
        if ((($context["minimum"] ?? null) > 1)) {
            // line 330
            echo "                  <div class=\"alert alert-info\">
                     <i class=\"fa fa-info-circle\"></i>
                     ";
            // line 332
            echo ($context["text_minimum"] ?? null);
            echo "
                  </div>
                  ";
        }
        // line 335
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
        // line 344
        echo ($context["tab_description"] ?? null);
        echo "</a>
            </li>
            ";
        // line 346
        if (($context["attribute_groups"] ?? null)) {
            // line 347
            echo "            <li style=\"display: none;\">
               <a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 348
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
            </li>
            ";
        }
        // line 351
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 352
            echo "            <li>
               <a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 353
            echo ($context["tab_review"] ?? null);
            echo "</a>
            </li>
            ";
        }
        // line 356
        echo "         </ul>
         <div class=\"tab-content\">
            <div class=\"tab-pane active\" style=\"padding:0px 20px; font-size:14px;\" id=\"tab-description\">";
        // line 358
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 359
        if (($context["attribute_groups"] ?? null)) {
            // line 360
            echo "            <div style=\"display: none;\" class=\"tab-pane\" id=\"tab-specification\">
               <table class=\"table table-bordered\">
                  ";
            // line 362
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 363
                echo "                  <thead>
                     <tr>
                        <td colspan=\"2\">
                           <strong>";
                // line 366
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 366);
                echo "</strong>
                        </td>
                     </tr>
                  </thead>
                  <tbody>
                     ";
                // line 371
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 371));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 372
                    echo "                     <tr>
                        <td>";
                    // line 373
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 373);
                    echo "</td>
                        <td>";
                    // line 374
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 374);
                    echo "</td>
                     </tr>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 377
                echo "                  </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 379
            echo "               </table>
            </div>
            ";
        }
        // line 382
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 383
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
               <form class=\"form-horizontal\" id=\"form-review\">
                  <div id=\"review\"></div>
                  <h2>";
            // line 386
            echo ($context["text_write"] ?? null);
            echo "</h2>
                  ";
            // line 387
            if (($context["review_guest"] ?? null)) {
                // line 388
                echo "                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-name\">";
                // line 390
                echo ($context["entry_name"] ?? null);
                echo "</label>
                        <input type=\"text\" name=\"name\" value=\"";
                // line 391
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                     </div>
                  </div>
                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-review\">";
                // line 396
                echo ($context["entry_review"] ?? null);
                echo "</label>
                        <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                        <div class=\"help-block\">";
                // line 398
                echo ($context["text_note"] ?? null);
                echo "</div>
                     </div>
                  </div>
                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\">";
                // line 403
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
                // line 418
                echo ($context["captcha"] ?? null);
                echo "
                  <div class=\"buttons clearfix\">
                     <div class=\"pull-right\">
                        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 421
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">Submit</button>
                     </div>
                  </div>
                  ";
            } else {
                // line 425
                echo "                  ";
                echo ($context["text_login"] ?? null);
                echo "
                  ";
            }
            // line 427
            echo "               </form>
            </div>
            ";
        }
        // line 430
        echo "         </div>
      </div>
   </div>
</div>
<br/><br/>
";
        // line 435
        if (($context["products"] ?? null)) {
            // line 436
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
            // line 448
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 449
                echo "               <li class=\"splide__slide\">
                  <div class=\"product-thumb transition text-center\">
                     <div class=\"image\">
                        <a href=\"";
                // line 452
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 452);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 452);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 452);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 452);
                echo "\" style=\"width:100%;\" class=\"img-responsive\"/></a>
                     </div>
                     <div class=\"caption text-capitalize\">
                        <p class=\"mt-10 font-16 text-white\" style=\"max-height:47px;    overflow: hidden;\">";
                // line 455
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 455);
                echo "</p>
                        ";
                // line 456
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 456)) {
                    // line 457
                    echo "                        <div class=\"rating d-none\">
                           ";
                    // line 458
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 459
                        echo "                           ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 459) < $context["j"])) {
                            // line 460
                            echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star-o fa-stack-1x\"></i>
                           </span>
                           ";
                        } else {
                            // line 464
                            echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star fa-stack-1x\"></i>
                           <i class=\"fa fa-star-o fa-stack-1x\"></i>
                           </span>
                           ";
                        }
                        // line 469
                        echo "                           ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 470
                    echo "                        </div>
                        ";
                }
                // line 472
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 472)) {
                    // line 473
                    echo "                        <p class=\"price text-white mt-1\">
                           ";
                    // line 474
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 474)) {
                        // line 475
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 475);
                        echo "
                           ";
                    } else {
                        // line 477
                        echo "                           <span class=\"price-new text-white\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 477);
                        echo "</span>
                           <span class=\"price-old text-white\">";
                        // line 478
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 478);
                        echo "</span>
\t\t\t\t\t\t 
                           ";
                    }
                    // line 481
                    echo "                           ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 481)) {
                        // line 482
                        echo "                           <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
                           ";
                        // line 483
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 483);
                        echo "</span>
                           ";
                    }
                    // line 485
                    echo "                        </p>
                        ";
                }
                // line 487
                echo "                     </div>
                  </div>
               </li>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 491
            echo "            </ul>
         </div>
      </div>
   </div>
</section>
";
        }
        // line 497
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
        // line 604
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});
   
   \$('.datetime').datetimepicker({language: '";
        // line 606
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});
   
   \$('.time').datetimepicker({language: '";
        // line 608
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
        // line 673
        echo ($context["product_id"] ?? null);
        echo "');
   
   \$('#button-review').on('click', function () {
   \$.ajax({
   url: 'index.php?route=product/product/write&product_id=                          ";
        // line 677
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
        // line 857
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
        return array (  1647 => 857,  1464 => 677,  1457 => 673,  1389 => 608,  1384 => 606,  1379 => 604,  1270 => 497,  1262 => 491,  1253 => 487,  1249 => 485,  1244 => 483,  1239 => 482,  1236 => 481,  1230 => 478,  1225 => 477,  1219 => 475,  1217 => 474,  1214 => 473,  1211 => 472,  1207 => 470,  1201 => 469,  1194 => 464,  1188 => 460,  1185 => 459,  1181 => 458,  1178 => 457,  1176 => 456,  1172 => 455,  1160 => 452,  1155 => 449,  1151 => 448,  1137 => 436,  1135 => 435,  1128 => 430,  1123 => 427,  1117 => 425,  1110 => 421,  1104 => 418,  1086 => 403,  1078 => 398,  1073 => 396,  1065 => 391,  1061 => 390,  1057 => 388,  1055 => 387,  1051 => 386,  1046 => 383,  1043 => 382,  1038 => 379,  1031 => 377,  1022 => 374,  1018 => 373,  1015 => 372,  1011 => 371,  1003 => 366,  998 => 363,  994 => 362,  990 => 360,  988 => 359,  984 => 358,  980 => 356,  974 => 353,  971 => 352,  968 => 351,  962 => 348,  959 => 347,  957 => 346,  952 => 344,  941 => 335,  935 => 332,  931 => 330,  929 => 329,  920 => 325,  913 => 324,  908 => 321,  905 => 320,  894 => 318,  890 => 317,  885 => 314,  882 => 313,  876 => 310,  871 => 309,  868 => 308,  862 => 305,  857 => 304,  854 => 303,  847 => 299,  841 => 296,  838 => 295,  832 => 292,  829 => 291,  827 => 290,  824 => 289,  822 => 288,  817 => 286,  802 => 274,  799 => 273,  793 => 269,  782 => 267,  778 => 266,  774 => 265,  768 => 262,  765 => 261,  762 => 260,  759 => 259,  753 => 258,  737 => 249,  730 => 247,  723 => 246,  720 => 245,  704 => 236,  697 => 234,  690 => 233,  687 => 232,  671 => 223,  664 => 221,  657 => 220,  654 => 219,  646 => 216,  642 => 215,  635 => 213,  631 => 212,  624 => 211,  621 => 210,  609 => 207,  603 => 206,  596 => 205,  593 => 204,  581 => 201,  575 => 200,  568 => 199,  565 => 198,  560 => 195,  552 => 192,  545 => 190,  543 => 189,  538 => 188,  522 => 186,  520 => 185,  514 => 184,  510 => 182,  506 => 181,  502 => 180,  498 => 179,  491 => 178,  488 => 177,  483 => 174,  473 => 170,  470 => 169,  454 => 167,  452 => 166,  442 => 165,  438 => 163,  434 => 162,  430 => 161,  423 => 160,  420 => 159,  414 => 155,  407 => 153,  400 => 151,  398 => 150,  394 => 149,  385 => 148,  381 => 147,  377 => 146,  371 => 145,  364 => 144,  354 => 140,  341 => 138,  338 => 137,  333 => 136,  330 => 135,  326 => 134,  323 => 133,  321 => 132,  316 => 129,  310 => 128,  307 => 127,  301 => 126,  295 => 124,  292 => 123,  287 => 122,  284 => 121,  280 => 120,  273 => 116,  267 => 113,  261 => 110,  254 => 107,  249 => 104,  243 => 103,  236 => 98,  230 => 94,  227 => 93,  223 => 92,  219 => 90,  217 => 89,  213 => 87,  209 => 85,  206 => 84,  193 => 81,  190 => 80,  185 => 79,  182 => 78,  172 => 76,  170 => 75,  167 => 74,  164 => 73,  160 => 71,  157 => 70,  144 => 67,  141 => 66,  136 => 65,  133 => 64,  123 => 62,  121 => 61,  118 => 60,  116 => 59,  110 => 56,  97 => 45,  85 => 41,  82 => 40,  78 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
