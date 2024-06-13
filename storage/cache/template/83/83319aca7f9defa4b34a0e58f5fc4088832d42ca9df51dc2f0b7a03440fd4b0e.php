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
class __TwigTemplate_c64a8fef2e51f89b728231d3e95cd91260e740bf7b22e61a4642732982fa6372 extends \Twig\Template
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

.price-old {
    color: #999;
    padding-left: 5px;
    font-weight: 300;
    text-decoration: line-through;
    font-size: 11px;
    color: darkred;
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
        // line 87
        if (($context["products"] ?? null)) {
            // line 88
            echo "      <div class=\"row\">
        <div style=\"display:none\" class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 91
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 92
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
      
       
        <div style=\"display:none\" class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 99
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 102
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 102) == ($context["limit"] ?? null))) {
                    // line 103
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 103);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 103);
                    echo "</option>
              ";
                } else {
                    // line 105
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 105);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 105);
                    echo "</option>
              ";
                }
                // line 107
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "            </select>
          </div>
        </div>
      </div>
      <div style=\"margin-top:30px\" class=\"row\"> 
        
          ";
            // line 114
            echo ($context["column_right"] ?? null);
            echo "
       
        <div class=\"col-sm-9\">
          <div class=\"row\">
            <div style='padding-top:12px' class=\"col-sm-6 hide-phone\"> ";
            // line 118
            echo ($context["results"] ?? null);
            echo " </div>
           
            <div class=\"col-sm-6  text-right\">
           
         
           <a id=\"mobile_filter\" href=\"#\">
            <li class=\"fa fa-filter\"></li>
          </a>
          <select id=\"input-sort\" style='float:right' class=\"form-control\" onchange=\"location = this.value;\">
            ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 128
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 128) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 129
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 129);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 129);
                    echo "</option>
              ";
                } else {
                    // line 131
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 131);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 131);
                    echo "</option>
              ";
                }
                // line 133
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "            </select>
            
          </div>
          </div>
          <hr class=\"mt-10\" />
          <div class=\"row\">
          ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 141
                echo "            <div class=\"col-sm-4 col-6\">
              <div class=\"product-thumb product-card text-center\">
                <div class=\"image\"><a href=\"";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 143);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 143);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 143);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 143);
                echo "\" class=\"img-responsive\" /></a></div>
                <div>
                  <div class=\"caption\">
                  <a href=\"";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 146);
                echo "\">
                    <h4 class=\"product_name\">";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 147);
                echo "</h4>
                  </a>  
                  <span style=\"display: inline-block; font-size:11px; color:#333; width:100%\">
                                             Available In :
                                             ";
                // line 151
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 151));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo "  
                                             
                                                ";
                    // line 153
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 153) == "16")) {
                        // line 154
                        echo "                                                 
                                                  ";
                        // line 155
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 155));
                        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                            echo " 
 <img style=\"width: 20px; height:20px\" class=\"color-option\" src=\"";
                            // line 156
                            echo twig_get_attribute($this->env, $this->source, $context["val"], "image", [], "any", false, false, false, 156);
                            echo "\" alt=\"\" />
";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 157
                        echo " 

                  ";
                    }
                    // line 160
                    echo "                               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "                          

                                          </span>
                    ";
                // line 163
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 163)) {
                    // line 164
                    echo "                    <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 164)) {
                        // line 165
                        echo "                      ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 165);
                        echo "
                      ";
                    } else {
                        // line 166
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 166);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 166);
                        echo "</span> ";
                    }
                    // line 167
                    echo "                      ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 167)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 167);
                        echo "</span> ";
                    }
                    echo " </p>
                    ";
                }
                // line 169
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 169)) {
                    // line 170
                    echo "                    <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 171
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 171) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 172
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
                    ";
                }
                // line 173
                echo " </div>
                  </div>
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo " 
          </div>
          <br />
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
            // line 181
            echo ($context["pagination"] ?? null);
            echo "</div>
          </div>
        </div>
      
      </div>
      
      <br /><br />
      ";
        }
        // line 189
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 190
            echo "      <p class=\"text-center\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 192
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 195
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
   </div>
</div>
</section>
";
        // line 199
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
        return array (  423 => 199,  415 => 195,  407 => 192,  401 => 190,  398 => 189,  387 => 181,  381 => 177,  371 => 173,  362 => 172,  355 => 171,  350 => 170,  347 => 169,  335 => 167,  328 => 166,  322 => 165,  319 => 164,  317 => 163,  307 => 160,  302 => 157,  294 => 156,  288 => 155,  285 => 154,  283 => 153,  276 => 151,  269 => 147,  265 => 146,  253 => 143,  249 => 141,  245 => 140,  237 => 134,  231 => 133,  223 => 131,  215 => 129,  212 => 128,  208 => 127,  196 => 118,  189 => 114,  181 => 108,  175 => 107,  167 => 105,  159 => 103,  156 => 102,  152 => 101,  147 => 99,  137 => 92,  133 => 91,  128 => 88,  126 => 87,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
