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
class __TwigTemplate_b655a1ccae88304dd003017b2a9be60f4637bb7d0e240bd0149024da713920d7 extends \Twig\Template
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
                     <table class=\"table table-bordered\">
                        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
            // line 122
            echo "                        <thead>
                          <tr>
                            <td colspan=\"2\">
                              <strong>";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 125);
            echo "</strong>
                            </td>
                          </tr>
                        </thead>
                        <tbody>
                          ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 130));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 131
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 131) == "Stone Weight")) {
                    // line 132
                    echo "                            <tr>
                              <td>";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 133);
                    echo "</td>
                              <td>";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 134);
                    echo "</td>
                            </tr>
                            ";
                }
                // line 137
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                        </tbody>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                      </table>
                      
                  </i>
               </p>
               <div id=\"product\">
                  ";
        // line 145
        if (($context["options"] ?? null)) {
            // line 146
            echo "                  <hr>
                  ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 148
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 148) == "select")) {
                    // line 149
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 149));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 150
                        echo "                  <div class=\"text-center\" style=\"display: inline-block;\">
                     <span style=\"background:url(";
                        // line 151
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 151);
                        echo ")\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 151);
                        echo "\" data-money=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 151);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_image", [], "any", false, false, false, 151);
                        echo "\" data-val=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 151);
                        echo "\" class=\"tab_options\"></span>
                     <p style=\"margin-top: 0px; font-size:12px\">
                        ";
                        // line 153
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 153);
                        echo "
                     </p>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo "                  <div style=\"display: none;\" class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 157)) {
                        echo " required ";
                    }
                    echo "\">
                     <select name=\"option[";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 158);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 158);
                    echo "\" class=\"form-control\">
                        <option value=\"\">";
                    // line 159
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 160
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 160));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 161
                        echo "                        <option data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 161);
                        echo "\" data-link=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "link", [], "any", false, false, false, 161);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 161);
                        echo "\">
                           ";
                        // line 162
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 162);
                        echo "
                           ";
                        // line 163
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 163)) {
                            // line 164
                            echo "                           (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 164);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 164);
                            echo ")
                           ";
                        }
                        // line 166
                        echo "                        </option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    echo "                     </select>
                  </div>
                  <br/><br/>
                  ";
                }
                // line 172
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 172) == "radio")) {
                    // line 173
                    echo "                  <div class=\" form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 173)) {
                        echo " required ";
                    }
                    echo "\">
                     <label style=\"float:left\" class=\"control-label float-r\">";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 174);
                    echo "</label>
                     ";
                    // line 175
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 175));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 176
                        echo "                     <div class=\"radio-custom\">
                        <label>
                        <input type=\"radio\" class='sizes' name=\"option[";
                        // line 178
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 178);
                        echo "\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 178);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 178);
                        echo "\"/>
                        ";
                        // line 179
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 179)) {
                            // line 180
                            echo "                        <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 180);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 180);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 180)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 180);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 180);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
                        ";
                        }
                        // line 182
                        echo "                        <span>
                        ";
                        // line 183
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 183);
                        echo "</span>
                        </label>
                     </div>
                     ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 187
                    echo "                  </div>
                  <br/><br/>
                  ";
                }
                // line 190
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 190) == "checkbox")) {
                    // line 191
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 191)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\">";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 192);
                    echo "</label>
                     <div id=\"input-option";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                    echo "\">
                        ";
                    // line 194
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 194));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 195
                        echo "                        <div class=\"checkbox\">
                           <label>
                           <input type=\"checkbox\" name=\"option[";
                        // line 197
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 197);
                        echo "\"/>
                           ";
                        // line 198
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 198)) {
                            // line 199
                            echo "                           <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 199);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 199);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 199)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 199);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 199);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
                           ";
                        }
                        // line 201
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 201);
                        echo "
                           ";
                        // line 202
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 202)) {
                            // line 203
                            echo "                           (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 203);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 203);
                            echo ")
                           ";
                        }
                        // line 205
                        echo "                           </label>
                        </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 208
                    echo "                     </div>
                  </div>
                  ";
                }
                // line 211
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 211) == "text")) {
                    // line 212
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 212)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 213);
                    echo "</label>
                     <input type=\"text\" name=\"option[";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 214);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 214);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 214);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 214);
                    echo "\" class=\"form-control\"/>
                  </div>
                  ";
                }
                // line 217
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 217) == "textarea")) {
                    // line 218
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 218)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 219);
                    echo "</label>
                     <textarea name=\"option[";
                    // line 220
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 220);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 220);
                    echo "</textarea>
                  </div>
                  ";
                }
                // line 223
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 223) == "file")) {
                    // line 224
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 224)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\">";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 225);
                    echo "</label>
                     <button type=\"button\" id=\"button-upload";
                    // line 226
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
                     <i class=\"fa fa-upload\"></i>
                     ";
                    // line 228
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                     <input type=\"hidden\" name=\"option[";
                    // line 229
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                    echo "\"/>
                  </div>
                  ";
                }
                // line 232
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 232) == "date")) {
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
                     <div class=\"input-group date\">
                        <input type=\"text\" name=\"option[";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 236);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
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
                // line 245
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 245) == "datetime")) {
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
                     <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"option[";
                    // line 249
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 249);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 249);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
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
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 258) == "time")) {
                    // line 259
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 259)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 260
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 260);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 260);
                    echo "</label>
                     <div class=\"input-group time\">
                        <input type=\"text\" name=\"option[";
                    // line 262
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 262);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 262);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 262);
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
                // line 271
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "                  ";
        }
        // line 273
        echo "                  ";
        if (($context["recurrings"] ?? null)) {
            // line 274
            echo "                  <hr>
                  <h3>";
            // line 275
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                  <div class=\"form-group required\">
                     <select name=\"recurring_id\" class=\"form-control\">
                        <option value=\"\">";
            // line 278
            echo ($context["text_select"] ?? null);
            echo "</option>
                        ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 280
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 280);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 280);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "                     </select>
                     <div class=\"help-block\" id=\"recurring-description\"></div>
                  </div>
                  ";
        }
        // line 286
        echo "                  <div class=\"form-group\">
                     <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 287
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
        // line 299
        echo ($context["product_id"] ?? null);
        echo "\"/>
                     <br/>
                     ";
        // line 301
        if (($context["price"] ?? null)) {
            // line 302
            echo "                     <ul class=\"list-unstyled\">
                        ";
            // line 303
            if ( !($context["special"] ?? null)) {
                // line 304
                echo "                        <li>
                           <h3 id=\"p_pr\">";
                // line 305
                echo ($context["price"] ?? null);
                echo "</h3>
                        </li>
                        ";
            } else {
                // line 308
                echo "                        <li>
                           <span id=\"og\" class=\"price-old\">";
                // line 309
                echo ($context["price"] ?? null);
                echo "</span>
                        </li>
                        <li>
                           <h3 id=\"sp\">";
                // line 312
                echo ($context["special"] ?? null);
                echo "</h3>
                        </li>
                        <li><h4>(You Save <span id=\"you_save\"></span>)</h4></li>
                        ";
            }
            // line 316
            echo "                        ";
            if (($context["tax"] ?? null)) {
                // line 317
                echo "                        <li>";
                echo ($context["text_tax"] ?? null);
                echo "
                           ";
                // line 318
                echo ($context["tax"] ?? null);
                echo "
                        </li>
                        ";
            }
            // line 321
            echo "                        ";
            if (($context["points"] ?? null)) {
                // line 322
                echo "                        <li>";
                echo ($context["text_points"] ?? null);
                echo "
                           ";
                // line 323
                echo ($context["points"] ?? null);
                echo "
                        </li>
                        ";
            }
            // line 326
            echo "                        ";
            if (($context["discounts"] ?? null)) {
                // line 327
                echo "                        <li>
                           <hr>
                        </li>
                        ";
                // line 330
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 331
                    echo "                        <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 331);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 331);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 333
                echo "                        ";
            }
            // line 334
            echo "                     </ul>
                     <br>
                     ";
        }
        // line 337
        echo "                     <button type=\"button\" style='float:left' id=\"button-cart\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                     <button style='float:left; font-size:22px; margin-top:5px; margin-left:20px;' data-toggle=\"tooltip\" title=\"";
        // line 338
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
                     <i class=\"fa fa-heart-o\"></i>
                     </button>
                  </div>
                  ";
        // line 342
        if ((($context["minimum"] ?? null) > 1)) {
            // line 343
            echo "                  <div class=\"alert alert-info\">
                     <i class=\"fa fa-info-circle\"></i>
                     ";
            // line 345
            echo ($context["text_minimum"] ?? null);
            echo "
                  </div>
                  ";
        }
        // line 348
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
        // line 357
        echo ($context["tab_description"] ?? null);
        echo "</a>
            </li>
            ";
        // line 359
        if (($context["attribute_groups"] ?? null)) {
            // line 360
            echo "            <li style=\"display: none;\">
               <a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 361
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
            </li>
            ";
        }
        // line 364
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 365
            echo "            <li>
               <a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 366
            echo ($context["tab_review"] ?? null);
            echo "</a>
            </li>
            ";
        }
        // line 369
        echo "         </ul>
         <div class=\"tab-content\">
            <div class=\"tab-pane active\" style=\"padding:0px 20px; font-size:14px;\" id=\"tab-description\">";
        // line 371
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 372
        if (($context["attribute_groups"] ?? null)) {
            // line 373
            echo "            <div style=\"display: none;\" class=\"tab-pane\" id=\"tab-specification\">
               <table class=\"table table-bordered\">
                  ";
            // line 375
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 376
                echo "                  <thead>
                     <tr>
                        <td colspan=\"2\">
                           <strong>";
                // line 379
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 379);
                echo "</strong>
                        </td>
                     </tr>
                  </thead>
                  <tbody>
                     ";
                // line 384
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 384));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 385
                    echo "                     <tr>
                        <td>";
                    // line 386
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 386);
                    echo "</td>
                        <td>";
                    // line 387
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 387);
                    echo "</td>
                     </tr>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 390
                echo "                  </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            echo "               </table>
            </div>
            ";
        }
        // line 395
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 396
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
               <form class=\"form-horizontal\" id=\"form-review\">
                  <div id=\"review\"></div>
                  <h2>";
            // line 399
            echo ($context["text_write"] ?? null);
            echo "</h2>
                  ";
            // line 400
            if (($context["review_guest"] ?? null)) {
                // line 401
                echo "                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-name\">";
                // line 403
                echo ($context["entry_name"] ?? null);
                echo "</label>
                        <input type=\"text\" name=\"name\" value=\"";
                // line 404
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                     </div>
                  </div>
                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-review\">";
                // line 409
                echo ($context["entry_review"] ?? null);
                echo "</label>
                        <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                        <div class=\"help-block\">";
                // line 411
                echo ($context["text_note"] ?? null);
                echo "</div>
                     </div>
                  </div>
                  <div class=\"form-group required\">
                     <div class=\"col-sm-12\">
                        <label class=\"control-label\">";
                // line 416
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
                // line 431
                echo ($context["captcha"] ?? null);
                echo "
                  <div class=\"buttons clearfix\">
                     <div class=\"pull-right\">
                        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 434
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">Submit</button>
                     </div>
                  </div>
                  ";
            } else {
                // line 438
                echo "                  ";
                echo ($context["text_login"] ?? null);
                echo "
                  ";
            }
            // line 440
            echo "               </form>
            </div>
            ";
        }
        // line 443
        echo "         </div>
      </div>
   </div>
</div>
<br/><br/>
";
        // line 448
        if (($context["products"] ?? null)) {
            // line 449
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
            // line 461
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 462
                echo "               <li class=\"splide__slide\">
                  <div class=\"product-thumb transition text-center\">
                     <div class=\"image\">
                        <a href=\"";
                // line 465
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 465);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 465);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 465);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 465);
                echo "\" style=\"width:100%;\" class=\"img-responsive\"/></a>
                     </div>
                     <div class=\"caption text-capitalize\">
                        <p class=\"mt-10 font-16 text-white\" style=\"max-height:47px;    overflow: hidden;\">";
                // line 468
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 468);
                echo "</p>
                        ";
                // line 469
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 469)) {
                    // line 470
                    echo "                        <div class=\"rating d-none\">
                           ";
                    // line 471
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 472
                        echo "                           ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 472) < $context["j"])) {
                            // line 473
                            echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star-o fa-stack-1x\"></i>
                           </span>
                           ";
                        } else {
                            // line 477
                            echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star fa-stack-1x\"></i>
                           <i class=\"fa fa-star-o fa-stack-1x\"></i>
                           </span>
                           ";
                        }
                        // line 482
                        echo "                           ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 483
                    echo "                        </div>
                        ";
                }
                // line 485
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 485)) {
                    // line 486
                    echo "                        <p class=\"price text-white mt-1\">
                           ";
                    // line 487
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 487)) {
                        // line 488
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 488);
                        echo "
                           ";
                    } else {
                        // line 490
                        echo "                           <span class=\"price-new text-white\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 490);
                        echo "</span>
                           <span class=\"price-old text-white\">";
                        // line 491
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 491);
                        echo "</span>
\t\t\t\t\t\t 
                           ";
                    }
                    // line 494
                    echo "                           ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 494)) {
                        // line 495
                        echo "                           <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
                           ";
                        // line 496
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 496);
                        echo "</span>
                           ";
                    }
                    // line 498
                    echo "                        </p>
                        ";
                }
                // line 500
                echo "                     </div>
                  </div>
               </li>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 504
            echo "            </ul>
         </div>
      </div>
   </div>
</section>
";
        }
        // line 510
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
        // line 617
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});
   
   \$('.datetime').datetimepicker({language: '";
        // line 619
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});
   
   \$('.time').datetimepicker({language: '";
        // line 621
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
        // line 686
        echo ($context["product_id"] ?? null);
        echo "');
   
   \$('#button-review').on('click', function () {
   \$.ajax({
   url: 'index.php?route=product/product/write&product_id=                          ";
        // line 690
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
        // line 870
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
        return array (  1664 => 870,  1481 => 690,  1474 => 686,  1406 => 621,  1401 => 619,  1396 => 617,  1287 => 510,  1279 => 504,  1270 => 500,  1266 => 498,  1261 => 496,  1256 => 495,  1253 => 494,  1247 => 491,  1242 => 490,  1236 => 488,  1234 => 487,  1231 => 486,  1228 => 485,  1224 => 483,  1218 => 482,  1211 => 477,  1205 => 473,  1202 => 472,  1198 => 471,  1195 => 470,  1193 => 469,  1189 => 468,  1177 => 465,  1172 => 462,  1168 => 461,  1154 => 449,  1152 => 448,  1145 => 443,  1140 => 440,  1134 => 438,  1127 => 434,  1121 => 431,  1103 => 416,  1095 => 411,  1090 => 409,  1082 => 404,  1078 => 403,  1074 => 401,  1072 => 400,  1068 => 399,  1063 => 396,  1060 => 395,  1055 => 392,  1048 => 390,  1039 => 387,  1035 => 386,  1032 => 385,  1028 => 384,  1020 => 379,  1015 => 376,  1011 => 375,  1007 => 373,  1005 => 372,  1001 => 371,  997 => 369,  991 => 366,  988 => 365,  985 => 364,  979 => 361,  976 => 360,  974 => 359,  969 => 357,  958 => 348,  952 => 345,  948 => 343,  946 => 342,  937 => 338,  930 => 337,  925 => 334,  922 => 333,  911 => 331,  907 => 330,  902 => 327,  899 => 326,  893 => 323,  888 => 322,  885 => 321,  879 => 318,  874 => 317,  871 => 316,  864 => 312,  858 => 309,  855 => 308,  849 => 305,  846 => 304,  844 => 303,  841 => 302,  839 => 301,  834 => 299,  819 => 287,  816 => 286,  810 => 282,  799 => 280,  795 => 279,  791 => 278,  785 => 275,  782 => 274,  779 => 273,  776 => 272,  770 => 271,  754 => 262,  747 => 260,  740 => 259,  737 => 258,  721 => 249,  714 => 247,  707 => 246,  704 => 245,  688 => 236,  681 => 234,  674 => 233,  671 => 232,  663 => 229,  659 => 228,  652 => 226,  648 => 225,  641 => 224,  638 => 223,  626 => 220,  620 => 219,  613 => 218,  610 => 217,  598 => 214,  592 => 213,  585 => 212,  582 => 211,  577 => 208,  569 => 205,  562 => 203,  560 => 202,  555 => 201,  539 => 199,  537 => 198,  531 => 197,  527 => 195,  523 => 194,  519 => 193,  515 => 192,  508 => 191,  505 => 190,  500 => 187,  490 => 183,  487 => 182,  471 => 180,  469 => 179,  459 => 178,  455 => 176,  451 => 175,  447 => 174,  440 => 173,  437 => 172,  431 => 168,  424 => 166,  417 => 164,  415 => 163,  411 => 162,  402 => 161,  398 => 160,  394 => 159,  388 => 158,  381 => 157,  371 => 153,  358 => 151,  355 => 150,  350 => 149,  347 => 148,  343 => 147,  340 => 146,  338 => 145,  331 => 140,  324 => 138,  318 => 137,  312 => 134,  308 => 133,  305 => 132,  302 => 131,  298 => 130,  290 => 125,  285 => 122,  281 => 121,  273 => 116,  267 => 113,  261 => 110,  254 => 107,  249 => 104,  243 => 103,  236 => 98,  230 => 94,  227 => 93,  223 => 92,  219 => 90,  217 => 89,  213 => 87,  209 => 85,  206 => 84,  193 => 81,  190 => 80,  185 => 79,  182 => 78,  172 => 76,  170 => 75,  167 => 74,  164 => 73,  160 => 71,  157 => 70,  144 => 67,  141 => 66,  136 => 65,  133 => 64,  123 => 62,  121 => 61,  118 => 60,  116 => 59,  110 => 56,  97 => 45,  85 => 41,  82 => 40,  78 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
