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
class __TwigTemplate_e05893791c6a2243dd081e1cce9da79ebe5f5af008550ff674a4b7af5649796e extends \Twig\Template
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
            echo "                     ";
            if ((twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 121) == "Stone Details")) {
                // line 122
                echo "                       ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 122));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 123
                    echo "                         ";
                    if ((twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 123) == "Stone Weight")) {
                        // line 124
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 124);
                        echo "
                         ";
                    }
                    // line 126
                    echo "                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "                     ";
            }
            // line 128
            echo "                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                   
                  </i>
               </p>
               <div id=\"product\">
                  ";
        // line 133
        if (($context["options"] ?? null)) {
            // line 134
            echo "                  <hr>
                  ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 136
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 136) == "select")) {
                    // line 137
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 137));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 138
                        echo "                  <div class=\"text-center\" style=\"display: inline-block;\">
                     <span style=\"background:url(";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 139);
                        echo ")\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 139);
                        echo "\" data-money=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 139);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_image", [], "any", false, false, false, 139);
                        echo "\" data-val=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 139);
                        echo "\" class=\"tab_options\"></span>
                     <p style=\"margin-top: 0px; font-size:12px\">
                        ";
                        // line 141
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 141);
                        echo "
                     </p>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "                  <div style=\"display: none;\" class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 145)) {
                        echo " required ";
                    }
                    echo "\">
                     <select name=\"option[";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    echo "\" class=\"form-control\">
                        <option value=\"\">";
                    // line 147
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 148
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 148));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 149
                        echo "                        <option data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 149);
                        echo "\" data-link=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "link", [], "any", false, false, false, 149);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 149);
                        echo "\">
                           ";
                        // line 150
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 150);
                        echo "
                           ";
                        // line 151
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 151)) {
                            // line 152
                            echo "                           (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 152);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 152);
                            echo ")
                           ";
                        }
                        // line 154
                        echo "                        </option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 156
                    echo "                     </select>
                  </div>
                  <br/><br/>
                  ";
                }
                // line 160
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 160) == "radio")) {
                    // line 161
                    echo "                  <div class=\" form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 161)) {
                        echo " required ";
                    }
                    echo "\">
                     <label style=\"float:left\" class=\"control-label float-r\">";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 162);
                    echo "</label>
                     ";
                    // line 163
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 163));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 164
                        echo "                     <div class=\"radio-custom\">
                        <label>
                        <input type=\"radio\" class='sizes' name=\"option[";
                        // line 166
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 166);
                        echo "\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 166);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 166);
                        echo "\"/>
                        ";
                        // line 167
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 167)) {
                            // line 168
                            echo "                        <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 168);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 168);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 168)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 168);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 168);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
                        ";
                        }
                        // line 170
                        echo "                        <span>
                        ";
                        // line 171
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 171);
                        echo "</span>
                        </label>
                     </div>
                     ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "                  </div>
                  <br/><br/>
                  ";
                }
                // line 178
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 178) == "checkbox")) {
                    // line 179
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 179)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\">";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 180);
                    echo "</label>
                     <div id=\"input-option";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    echo "\">
                        ";
                    // line 182
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 182));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 183
                        echo "                        <div class=\"checkbox\">
                           <label>
                           <input type=\"checkbox\" name=\"option[";
                        // line 185
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 185);
                        echo "\"/>
                           ";
                        // line 186
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 186)) {
                            // line 187
                            echo "                           <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 187);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 187);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 187);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
                           ";
                        }
                        // line 189
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 189);
                        echo "
                           ";
                        // line 190
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190)) {
                            // line 191
                            echo "                           (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 191);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 191);
                            echo ")
                           ";
                        }
                        // line 193
                        echo "                           </label>
                        </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 196
                    echo "                     </div>
                  </div>
                  ";
                }
                // line 199
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 199) == "text")) {
                    // line 200
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 200)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 201);
                    echo "</label>
                     <input type=\"text\" name=\"option[";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 202);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 202);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "\" class=\"form-control\"/>
                  </div>
                  ";
                }
                // line 205
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 205) == "textarea")) {
                    // line 206
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 206)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 207);
                    echo "</label>
                     <textarea name=\"option[";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 208);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 208);
                    echo "</textarea>
                  </div>
                  ";
                }
                // line 211
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 211) == "file")) {
                    // line 212
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 212)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\">";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 213);
                    echo "</label>
                     <button type=\"button\" id=\"button-upload";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 214);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
                     <i class=\"fa fa-upload\"></i>
                     ";
                    // line 216
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                     <input type=\"hidden\" name=\"option[";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 217);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 217);
                    echo "\"/>
                  </div>
                  ";
                }
                // line 220
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 220) == "date")) {
                    // line 221
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 221)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 222
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 222);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 222);
                    echo "</label>
                     <div class=\"input-group date\">
                        <input type=\"text\" name=\"option[";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 224);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 224);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 224);
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
                // line 233
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 233) == "datetime")) {
                    // line 234
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 234)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 235
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 235);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 235);
                    echo "</label>
                     <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"option[";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 237);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
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
                // line 246
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 246) == "time")) {
                    // line 247
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 247)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 248
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 248);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 248);
                    echo "</label>
                     <div class=\"input-group time\">
                        <input type=\"text\" name=\"option[";
                    // line 250
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 250);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 250);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 250);
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
                // line 259
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            echo "                  ";
        }
        // line 261
        echo "                  ";
        if (($context["recurrings"] ?? null)) {
            // line 262
            echo "                  <hr>
                  <h3>";
            // line 263
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                  <div class=\"form-group required\">
                     <select name=\"recurring_id\" class=\"form-control\">
                        <option value=\"\">";
            // line 266
            echo ($context["text_select"] ?? null);
            echo "</option>
                        ";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 268
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 268);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 268);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "                     </select>
                     <div class=\"help-block\" id=\"recurring-description\"></div>
                  </div>
                  ";
        }
        // line 274
        echo "                  <div class=\"form-group\">
                     <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 275
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
        // line 287
        echo ($context["product_id"] ?? null);
        echo "\"/>
                     <br/>
                     ";
        // line 289
        if (($context["price"] ?? null)) {
            // line 290
            echo "                     <ul class=\"list-unstyled\">
                        ";
            // line 291
            if ( !($context["special"] ?? null)) {
                // line 292
                echo "                        <li>
                           <h3 id=\"p_pr\">";
                // line 293
                echo ($context["price"] ?? null);
                echo "</h3>
                        </li>
                        ";
            } else {
                // line 296
                echo "                        <li>
                           <span id=\"og\" class=\"price-old\">";
                // line 297
                echo ($context["price"] ?? null);
                echo "</span>
                        </li>
                        <li>
                           <h3 id=\"sp\">";
                // line 300
                echo ($context["special"] ?? null);
                echo "</h3>
                        </li>
                        <li><h4>(You Save <span id=\"you_save\"></span>)</h4></li>
                        ";
            }
            // line 304
            echo "                        ";
            if (($context["tax"] ?? null)) {
                // line 305
                echo "                        <li>";
                echo ($context["text_tax"] ?? null);
                echo "
                           ";
                // line 306
                echo ($context["tax"] ?? null);
                echo "
                        </li>
                        ";
            }
            // line 309
            echo "                        ";
            if (($context["points"] ?? null)) {
                // line 310
                echo "                        <li>";
                echo ($context["text_points"] ?? null);
                echo "
                           ";
                // line 311
                echo ($context["points"] ?? null);
                echo "
                        </li>
                        ";
            }
            // line 314
            echo "                        ";
            if (($context["discounts"] ?? null)) {
                // line 315
                echo "                        <li>
                           <hr>
                        </li>
                        ";
                // line 318
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 319
                    echo "                        <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 319);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 319);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 321
                echo "                        ";
            }
            // line 322
            echo "                     </ul>
                     <br>
                     ";
        }
        // line 325
        echo "                     <button type=\"button\" style='float:left' id=\"button-cart\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                     <button style='float:left; font-size:22px; margin-top:5px; margin-left:20px;' data-toggle=\"tooltip\" title=\"";
        // line 326
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
                     <i class=\"fa fa-heart-o\"></i>
                     </button>
                  </div>
                  ";
        // line 330
        if ((($context["minimum"] ?? null) > 1)) {
            // line 331
            echo "                  <div class=\"alert alert-info\">
                     <i class=\"fa fa-info-circle\"></i>
                     ";
            // line 333
            echo ($context["text_minimum"] ?? null);
            echo "
                  </div>
                  ";
        }
        // line 336
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
        // line 345
        echo ($context["tab_description"] ?? null);
        echo "</a>
            </li>
            ";
        // line 347
        if (($context["attribute_groups"] ?? null)) {
            // line 348
            echo "            <li style=\"display: none;\">
               <a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 349
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
            </li>
            ";
        }
        // line 352
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 353
            echo "            <li>
               <a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 354
            echo ($context["tab_review"] ?? null);
            echo "</a>
            </li>
            ";
        }
        // line 357
        echo "         </ul>
         <div class=\"tab-content\">
            <div class=\"tab-pane active\" style=\"padding:0px 20px; font-size:14px;\" id=\"tab-description\">";
        // line 359
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 360
        if (($context["attribute_groups"] ?? null)) {
            // line 361
            echo "            <div style=\"display: none;\" class=\"tab-pane\" id=\"tab-specification\">
               <table class=\"table table-bordered\">
                  ";
            // line 363
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 364
                echo "                  <thead>
                     <tr>
                        <td colspan=\"2\">
                           <strong>";
                // line 367
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 367);
                echo "</strong>
                        </td>
                     </tr>
                  </thead>
                  <tbody>
                     ";
                // line 372
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 372));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 373
                    echo "                     <tr>
                        <td>";
                    // line 374
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 374);
                    echo "</td>
                        <td>";
                    // line 375
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 375);
                    echo "</td>
                     </tr>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 378
                echo "                  </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 380
            echo "               </table>
            </div>
            ";
        }
        // line 383
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 384
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
               <form class=\"form-horizontal\" id=\"form-review\">
                  <div id=\"review\"></div>
                  <h2>";
            // line 387
            echo ($context["text_write"] ?? null);
            echo "</h2>
                  ";
            // line 388
            if (($context["review_guest"] ?? null)) {
                // line 389
                echo "                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-name\">";
                // line 391
                echo ($context["entry_name"] ?? null);
                echo "</label>
                        <input type=\"text\" name=\"name\" value=\"";
                // line 392
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                     </div>
                  </div>
                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-review\">";
                // line 397
                echo ($context["entry_review"] ?? null);
                echo "</label>
                        <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                        <div class=\"help-block\">";
                // line 399
                echo ($context["text_note"] ?? null);
                echo "</div>
                     </div>
                  </div>
                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\">";
                // line 404
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
                // line 419
                echo ($context["captcha"] ?? null);
                echo "
                  <div class=\"buttons clearfix\">
                     <div class=\"pull-right\">
                        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 422
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">Submit</button>
                     </div>
                  </div>
                  ";
            } else {
                // line 426
                echo "                  ";
                echo ($context["text_login"] ?? null);
                echo "
                  ";
            }
            // line 428
            echo "               </form>
            </div>
            ";
        }
        // line 431
        echo "         </div>
      </div>
   </div>
</div>
<br/><br/>
";
        // line 436
        if (($context["products"] ?? null)) {
            // line 437
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
            // line 449
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 450
                echo "               <li class=\"splide__slide\">
                  <div class=\"product-thumb transition text-center\">
                     <div class=\"image\">
                        <a href=\"";
                // line 453
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 453);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 453);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 453);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 453);
                echo "\" style=\"width:100%;\" class=\"img-responsive\"/></a>
                     </div>
                     <div class=\"caption text-capitalize\">
                        <p class=\"mt-10 font-16 text-white\" style=\"max-height:47px;    overflow: hidden;\">";
                // line 456
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 456);
                echo "</p>
                        ";
                // line 457
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 457)) {
                    // line 458
                    echo "                        <div class=\"rating d-none\">
                           ";
                    // line 459
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 460
                        echo "                           ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 460) < $context["j"])) {
                            // line 461
                            echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star-o fa-stack-1x\"></i>
                           </span>
                           ";
                        } else {
                            // line 465
                            echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star fa-stack-1x\"></i>
                           <i class=\"fa fa-star-o fa-stack-1x\"></i>
                           </span>
                           ";
                        }
                        // line 470
                        echo "                           ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 471
                    echo "                        </div>
                        ";
                }
                // line 473
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 473)) {
                    // line 474
                    echo "                        <p class=\"price text-white mt-1\">
                           ";
                    // line 475
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 475)) {
                        // line 476
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 476);
                        echo "
                           ";
                    } else {
                        // line 478
                        echo "                           <span class=\"price-new text-white\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 478);
                        echo "</span>
                           <span class=\"price-old text-white\">";
                        // line 479
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 479);
                        echo "</span>
\t\t\t\t\t\t 
                           ";
                    }
                    // line 482
                    echo "                           ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 482)) {
                        // line 483
                        echo "                           <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
                           ";
                        // line 484
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 484);
                        echo "</span>
                           ";
                    }
                    // line 486
                    echo "                        </p>
                        ";
                }
                // line 488
                echo "                     </div>
                  </div>
               </li>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 492
            echo "            </ul>
         </div>
      </div>
   </div>
</section>
";
        }
        // line 498
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
        // line 605
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});
   
   \$('.datetime').datetimepicker({language: '";
        // line 607
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});
   
   \$('.time').datetimepicker({language: '";
        // line 609
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
        // line 674
        echo ($context["product_id"] ?? null);
        echo "');
   
   \$('#button-review').on('click', function () {
   \$.ajax({
   url: 'index.php?route=product/product/write&product_id=                          ";
        // line 678
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
        // line 858
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
        return array (  1648 => 858,  1465 => 678,  1458 => 674,  1390 => 609,  1385 => 607,  1380 => 605,  1271 => 498,  1263 => 492,  1254 => 488,  1250 => 486,  1245 => 484,  1240 => 483,  1237 => 482,  1231 => 479,  1226 => 478,  1220 => 476,  1218 => 475,  1215 => 474,  1212 => 473,  1208 => 471,  1202 => 470,  1195 => 465,  1189 => 461,  1186 => 460,  1182 => 459,  1179 => 458,  1177 => 457,  1173 => 456,  1161 => 453,  1156 => 450,  1152 => 449,  1138 => 437,  1136 => 436,  1129 => 431,  1124 => 428,  1118 => 426,  1111 => 422,  1105 => 419,  1087 => 404,  1079 => 399,  1074 => 397,  1066 => 392,  1062 => 391,  1058 => 389,  1056 => 388,  1052 => 387,  1047 => 384,  1044 => 383,  1039 => 380,  1032 => 378,  1023 => 375,  1019 => 374,  1016 => 373,  1012 => 372,  1004 => 367,  999 => 364,  995 => 363,  991 => 361,  989 => 360,  985 => 359,  981 => 357,  975 => 354,  972 => 353,  969 => 352,  963 => 349,  960 => 348,  958 => 347,  953 => 345,  942 => 336,  936 => 333,  932 => 331,  930 => 330,  921 => 326,  914 => 325,  909 => 322,  906 => 321,  895 => 319,  891 => 318,  886 => 315,  883 => 314,  877 => 311,  872 => 310,  869 => 309,  863 => 306,  858 => 305,  855 => 304,  848 => 300,  842 => 297,  839 => 296,  833 => 293,  830 => 292,  828 => 291,  825 => 290,  823 => 289,  818 => 287,  803 => 275,  800 => 274,  794 => 270,  783 => 268,  779 => 267,  775 => 266,  769 => 263,  766 => 262,  763 => 261,  760 => 260,  754 => 259,  738 => 250,  731 => 248,  724 => 247,  721 => 246,  705 => 237,  698 => 235,  691 => 234,  688 => 233,  672 => 224,  665 => 222,  658 => 221,  655 => 220,  647 => 217,  643 => 216,  636 => 214,  632 => 213,  625 => 212,  622 => 211,  610 => 208,  604 => 207,  597 => 206,  594 => 205,  582 => 202,  576 => 201,  569 => 200,  566 => 199,  561 => 196,  553 => 193,  546 => 191,  544 => 190,  539 => 189,  523 => 187,  521 => 186,  515 => 185,  511 => 183,  507 => 182,  503 => 181,  499 => 180,  492 => 179,  489 => 178,  484 => 175,  474 => 171,  471 => 170,  455 => 168,  453 => 167,  443 => 166,  439 => 164,  435 => 163,  431 => 162,  424 => 161,  421 => 160,  415 => 156,  408 => 154,  401 => 152,  399 => 151,  395 => 150,  386 => 149,  382 => 148,  378 => 147,  372 => 146,  365 => 145,  355 => 141,  342 => 139,  339 => 138,  334 => 137,  331 => 136,  327 => 135,  324 => 134,  322 => 133,  316 => 129,  310 => 128,  307 => 127,  301 => 126,  295 => 124,  292 => 123,  287 => 122,  284 => 121,  280 => 120,  273 => 116,  267 => 113,  261 => 110,  254 => 107,  249 => 104,  243 => 103,  236 => 98,  230 => 94,  227 => 93,  223 => 92,  219 => 90,  217 => 89,  213 => 87,  209 => 85,  206 => 84,  193 => 81,  190 => 80,  185 => 79,  182 => 78,  172 => 76,  170 => 75,  167 => 74,  164 => 73,  160 => 71,  157 => 70,  144 => 67,  141 => 66,  136 => 65,  133 => 64,  123 => 62,  121 => 61,  118 => 60,  116 => 59,  110 => 56,  97 => 45,  85 => 41,  82 => 40,  78 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
