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

/* default/template/product/category.twig */
class __TwigTemplate_d8032343f3263dc4031142dca525b89edb0a06a04d40907a92c35b5b4fdba477 extends \Twig\Template
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
.nice-select {
    float: right;
    background: transparent;
    border: none;
    max-width:140px;
    background:#fff;
}
.pagination li{
  padding:5px 10px 2px 10px;
  font-size:12px;
}
.pagination li a{
color:#666;
}
.pagination li.active{
 background:#003B30;
 color:#fff;
}
 .product_name{
  max-width:300px;
  margin-top:10px;
  font-size:14px;
 }
 .price{
  font-size:12px;
  margin-top:5px;
 }
 #mobile_filter{
  display:none;

 }
@media screen and (max-width:789px){
  .product_name{
    font-size:12px;
    margin-top:5px;
  }
  #mobile_filter{
  display:inline;
  float:right;
  cursor:pointer;
  color:#333;
  
 }
 .nice-select{
  margin-right: 30px;
    margin-top: -28px;
 }
}
</style>
<script>
  \$(document).ready(function(){
   \$(\"#mobile_filter\").click(function(e){
    e.preventDefault();
    \$(\".backdrop-filter\").fadeIn();
    \$(\".filter-panel\").animate({
        left:'0px'
      })
   }) 
   \$(\".backdrop-filter\").click(function(){
    \$(\".backdrop-filter\").fadeOut();
    \$(\".filter-panel\").animate({
        left:'-260px'
      })
   })
     
  })
</script>
<section style='background-color:#f2f2f2'>


<div id=\"product-category\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" style=\"min-height:600px\" class=\"col-12\">
     
      ";
        // line 77
        if (($context["products"] ?? null)) {
            // line 78
            echo "      <div class=\"row\">
        <div style=\"display:none\" class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 81
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 82
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
      
       
        <div style=\"display:none\" class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 89
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 92
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 92) == ($context["limit"] ?? null))) {
                    // line 93
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 93);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 93);
                    echo "</option>
              ";
                } else {
                    // line 95
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 95);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 95);
                    echo "</option>
              ";
                }
                // line 97
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "            </select>
          </div>
        </div>
      </div>
      <div style=\"margin-top:30px\" class=\"row\"> 
        
          ";
            // line 104
            echo ($context["column_right"] ?? null);
            echo "
       
        <div class=\"col-sm-9\">
          <div class=\"row\">
            <div style='padding-top:12px' class=\"col-sm-6 hide-phone\"> ";
            // line 108
            echo ($context["results"] ?? null);
            echo " </div>
           
            <div class=\"col-sm-6  text-right\">
           
         
           <a id=\"mobile_filter\" href=\"#\">
            <li class=\"fa fa-filter\"></li>
          </a>
          <select id=\"input-sort\" style='float:right' class=\"form-control\" onchange=\"location = this.value;\">
            ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 118
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 118) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 119
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 119);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 119);
                    echo "</option>
              ";
                } else {
                    // line 121
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 121);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 121);
                    echo "</option>
              ";
                }
                // line 123
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "            </select>
            
          </div>
          </div>
          <hr class=\"mt-10\" />
          <div class=\"row\">
          ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 131
                echo "            <div class=\"col-sm-4 col-6\">
              <div class=\"product-thumb product-card text-center\">
                <div class=\"image\"><a href=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 133);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 133);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 133);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 133);
                echo "\" class=\"img-responsive\" /></a></div>
                <div>
                  <div class=\"caption\">
                  <a href=\"";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 136);
                echo "\">
                    <h4 class=\"product_name\">";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 137);
                echo "</h4>
                  </a>  
                  <span style=\"display: inline-block; font-size:11px; color:#333; width:100%\">
                                             Available In :
                                             ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 141));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo "  
                                             
                                                ";
                    // line 143
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 143) == "16")) {
                        // line 144
                        echo "                                                 
                                                  ";
                        // line 145
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 145));
                        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                            echo " 
 <img style=\"width: 20px; height:20px\" class=\"color-option\" src=\"";
                            // line 146
                            echo twig_get_attribute($this->env, $this->source, $context["val"], "image", [], "any", false, false, false, 146);
                            echo "\" alt=\"\" />
";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 147
                        echo " 

                  ";
                    }
                    // line 150
                    echo "                               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "                          

                                          </span>
                    ";
                // line 153
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 153)) {
                    // line 154
                    echo "                    <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 154)) {
                        // line 155
                        echo "                      ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 155);
                        echo "
                      ";
                    } else {
                        // line 156
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 156);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 156);
                        echo "</span> ";
                    }
                    // line 157
                    echo "                      ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 157)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 157);
                        echo "</span> ";
                    }
                    echo " </p>
                    ";
                }
                // line 159
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 159)) {
                    // line 160
                    echo "                    <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 161
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 161) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 162
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
                    ";
                }
                // line 163
                echo " </div>
                  </div>
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo " 
          </div>
          <br />
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
            // line 171
            echo ($context["pagination"] ?? null);
            echo "</div>
          </div>
        </div>
      
      </div>
      
      <br /><br />
      ";
        }
        // line 179
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 180
            echo "      <p class=\"text-center\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 182
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 185
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
   </div>
</div>
</section>
";
        // line 189
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 189,  405 => 185,  397 => 182,  391 => 180,  388 => 179,  377 => 171,  371 => 167,  361 => 163,  352 => 162,  345 => 161,  340 => 160,  337 => 159,  325 => 157,  318 => 156,  312 => 155,  309 => 154,  307 => 153,  297 => 150,  292 => 147,  284 => 146,  278 => 145,  275 => 144,  273 => 143,  266 => 141,  259 => 137,  255 => 136,  243 => 133,  239 => 131,  235 => 130,  227 => 124,  221 => 123,  213 => 121,  205 => 119,  202 => 118,  198 => 117,  186 => 108,  179 => 104,  171 => 98,  165 => 97,  157 => 95,  149 => 93,  146 => 92,  142 => 91,  137 => 89,  127 => 82,  123 => 81,  118 => 78,  116 => 77,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
