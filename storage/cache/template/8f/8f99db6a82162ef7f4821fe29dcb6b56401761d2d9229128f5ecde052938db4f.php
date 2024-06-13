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

/* default/template/checkout/cart.twig */
class __TwigTemplate_28f6aacb31a6e7f0880be0e5056bbc5a1192b35ddc9a1163a376523f36df8da5 extends \Twig\Template
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
      #mobile_table{
         display: block !important;
      }
     
      #desktop_table{
         display:none !important;
      }
      .cart-heading{
         font-size:28px;
      }
   }

   @media screen and (min-width:651px) {
      #mobile_table{
         display: none !important;
      }
     
      #desktop_table{
         display:block !important;
      }
   }
   .remove_coupon{
      float:right;
      margin-right:-20px;
      margin-top:-27.5px;
      cursor:pointer;
   }
</style>
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
            echo "                     <li class=\"ml-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 40);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 40);
            echo "</a></li>
                     &nbsp;/
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
<br />
<div id=\"checkout-cart\" class=\"container\">
   <div class=\"row\">
      <div id=\"content\" class=\"col-sm-12\">
         ";
        // line 54
        echo ($context["content_top"] ?? null);
        echo "
         <h1 class=\"text-center cart-heading\">";
        // line 55
        echo ($context["heading_title"] ?? null);
        echo " </h1>
         <br />
         <form id=\"cf\" action=\"";
        // line 57
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"table-responsive\" id=\"desktop_table\">
               <table class=\"table cart-table\">
                  <thead>
                     <tr>
                        <td class=\"text-center\">
                           <p>Image</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Name</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Quantity</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Price</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Total</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Remove</p>
                        </td>
                     </tr>
                  </thead>
                  <tbody>
                     ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 84
            echo "                     <tr>
                        <td class=\"text-center\">";
            // line 85
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 85)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 85);
                echo "\">
                           <img src=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 86);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 86);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 86);
                echo "\" style=\"max-width:80px\" /></a> ";
            }
            // line 87
            echo "                        </td>
                        <td class=\"text-center\">
                           <a class=\"pt-10\" href=\"";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 89);
            echo "\">
                              <h5> ";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 90);
            echo "</h5>
                           </a>
                           ";
            // line 92
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 92)) {
                echo " 
                           <span class=\"text-danger\">*(Out Of stock)</span> 
                           ";
            }
            // line 95
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 95)) {
                // line 96
                echo "                           ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 96));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
                           <small>";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 97);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 97);
                    echo "</small> <br/>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                           ";
            }
            // line 99
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 99)) {
                echo " <br/>
                           <small>";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 100);
                echo "</small> ";
            }
            // line 101
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 101)) {
                echo " <br/>
                           <span class=\"label label-info\">";
                // line 102
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 102);
                echo "</small> 
                           ";
            }
            // line 104
            echo "                        </td>
                        <td class=\"text-left\">
                           <div style=\"width:120px; margin:auto; margin-top:20px; \" class=\"row\">
                              <div style=\"cursor: pointer; text-align:center; padding-left:0px; padding-right:0px; height:34px; border:thin solid #ccc\" class=\"col-sm-4\">
                                 <li style=\" font-size:12px; margin:auto; text-align:center; margin-top:10px; width: 100%; height: 100%\" class=\"fa fa-minus less_quantity\"></li>
                              </div>
                              <div style=\" padding-left:0px; padding-right:0px;\" class=\"col-sm-4\">
                                 <input style=\"box-shadow:none; height:34px; text-align:center; border-radius:0px; width:100%; cursor:default\" class=\"input-quantity\" readonly name=\"quantity[";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 111);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 111);
            echo "\" class=\"form-control\" />
                              </div>
                              <div style=\" cursor: pointer; padding-left:0px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\" class=\"col-sm-4 addqty\">
                                 <li style=\"font-size:12px; text-align:center; margin-top:10px; width: 100%; height: 100%;\" class=\"fa fa-plus add_quantity\"></li>
                              </div>
                           </div>
                        </td>
                        <td class=\"text-center\">";
            // line 118
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 118);
            echo "</td>
                        <td class=\"text-center\">";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 119);
            echo "</td>
                        <td class=\"text-center\"><button style=\"margin:auto\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 120
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 120);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                        </td>
                     </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                  </tbody>
               </table>
            </div>
         </form>
         <form action=\"";
        // line 128
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"table-responsive\" id=\"mobile_table\">
            <div class=\"col-xs-12\">
                       
            ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 133
            echo "                      
                        <div class=\"row m-0\">
                           <div class=\"col-3\">
                           ";
            // line 136
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 136)) {
                // line 137
                echo "                              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 137);
                echo "\">
                              <img src=\"";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 138);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 138);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 138);
                echo "\" />
                              </a>
                              ";
            }
            // line 141
            echo "                           </div>
                           <div class=\"col-9\">
                           <a href=\"";
            // line 143
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 143);
            echo "\">
                                 <h4 style=\"text-transform:uppercase \">";
            // line 144
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 144);
            echo "</h4>
                                 ";
            // line 145
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 145)) {
                echo " 
                                
                                 <span class=\"text-danger\">*<i>(Out of stock) <br /></i>
                                 </span>
                                 ";
            }
            // line 150
            echo "                                 ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 150)) {
                // line 151
                echo "                                 ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 151));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
                                 <p style=\" color:#ccc; text-transform: capitalize\">
                                 ";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 153);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 153);
                    echo "
                                 </p>
                                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "                                 ";
            }
            // line 157
            echo "                              </a>
                              <p >
                                 Price : ";
            // line 159
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 159);
            echo "
                              </p>
                              <p style=\"margin-top: -7px;\">
                                 <button style=\"background-color: transparent; outline:none; margin:auto; padding:0px;  text-align:center; 
                                    border:none; box-shadow:none \" type=\"button\" onclick=\"cart.remove('";
            // line 163
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 163);
            echo "');\" class=\"btn remove-btn\">
                                 Remove
                                 </button>
                              </p>

                                <div style=\" margin:auto; margin-top:20px; margin-left:0px \" class=\"row\">
                                    <div class=\"col-8\">
                                      <div class=\"row\">
                                      <div style=\"cursor: pointer; text-align:center; width:30px; padding-left:0px; padding-right:0px; height:34px; border:thin solid #ccc\" class=\"col-xs-4\">
                                       <li style=\" font-size:12px; margin:auto; text-align:center; margin-top:10px;\" class=\"fa fa-minus less_quantity1\"></li>
                                    </div>
                                    <div style=\" padding-left:0px; padding-right:0px;\" class=\"col-xs-4\">
                                    <input style=\"box-shadow:none; height:34px; text-align:center; border-radius:0px; width:30px; cursor:default\" class=\"input-quantity\" readonly name=\"quantity[";
            // line 175
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 175);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 175);
            echo "\" class=\"form-control\" />
                                </div>
                                    <div style=\" cursor: pointer; padding-left:0px; width:30px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\" class=\"col-xs-4\">
                                       <li style=\"font-size:12px; text-align:center; margin-top:10px;\" class=\"fa fa-plus add_quantity1\"></li>
                                    </div>

                                      </div>
                                    </div>
                                    <div class=\"col-4\">
                                      <h4 style=\"font-size:12px\">Total : ";
            // line 184
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 184);
            echo "
                                      </h4>
                                    </div>
                                   
                                 </div>
                                
                           </div>
                          
                        </div>
                        <hr class=\"product_underline\" />
                      
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                     </div>
            </div>
         </form>
         ";
        // line 199
        if (($context["modules1"] ?? null)) {
            // line 200
            echo "         <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
         <p>";
            // line 201
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
         <div class=\"panel-group\" id=\"accordion\"> ";
            // line 202
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 203
                echo "            ";
                echo $context["module"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo " 
         </div>
         ";
        }
        // line 206
        echo " <br/>
         <div class=\"row\">
            <div class=\"col-sm-4 offset-sm-8\">
               ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 210
            echo "              
               <div class=\"row mt-10\">
                  <div class=\"col-sm-6 text-uppercase\">
                     <h6><strong class='total_text_holder'>";
            // line 213
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 213);
            echo ":</strong></h6>
                  </div>
                  <div class=\"col-sm-6 text-right\">
                     <p class=\"total_value_holder\" style=\"font-size:14px\">";
            // line 216
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 216);
            echo " </p>
                  </div>
               </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "               </table>
            </div>
         </div>
         <br />

       
        ";
        // line 226
        echo ($context["coupon"] ?? null);
        echo "
        
       
        
         ";
        // line 230
        if (($context["logged"] ?? null)) {
            // line 231
            echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
                <a href=\"index.php?route=checkout/registered_payment\" class=\"btn btn-primary\">";
            // line 233
            echo ($context["button_checkout"] ?? null);
            echo "</a>
            </div>
         </div>
         ";
        } else {
            // line 237
            echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
               &nbsp;&nbsp;&nbsp;
               <a href=\"index.php?route=checkout/guest_new\" class=\"btn btn-primary\">";
            // line 241
            echo ($context["button_checkout"] ?? null);
            echo "</a>
            </div>
         </div>
        ";
        }
        // line 245
        echo "
         ";
        // line 246
        echo ($context["content_bottom"] ?? null);
        echo "
      </div>
      ";
        // line 248
        echo ($context["column_right"] ?? null);
        echo "
   </div>
</div>
<br /><br />

<script>
\$(\".total_text_holder\").each(function(){
   
if(\$(this).text().indexOf('Coupon')!==-1){
   \$(this).parent().parent().siblings().find('.total_value_holder').after('<i class=\"fa remove_coupon fa-times-circle\"></i>');
}
})

 \$(\".add_quantity\").click(function() {
     var b = Number(\$(this).parent().siblings().find(\".input-quantity\").val()) + 1;
     \$(this).parent().siblings().find(\".input-quantity\").val(b);
     \$(\"#cf\").submit();
   })
   
   \$(\".less_quantity\").click(function() {
   
     var b = Number(\$(this).parent().siblings().find(\".input-quantity\").val()) - 1;
     if (b <= 0) {
       b = 1;
     }
     \$(this).parent().siblings().find(\".input-quantity\").val(b);
     \$(\"#cf\").submit();
   })
   
   
   \$(\".add_quantity1\").click(function() {
     var b = Number(\$(this).parent().siblings().find(\".input-quantity1\").val()) + 1;
     \$(this).parent().siblings().find(\".input-quantity1\").val(b);
     \$(\"#cf1\").submit();
   })
   
   \$(\".less_quantity1\").click(function() {
   
     var b = Number(\$(this).parent().siblings().find(\".input-quantity1\").val()) - 1;
     if (b <= 0) {
       b = 1;
     }
     \$(this).parent().siblings().find(\".input-quantity1\").val(b);
     \$(\"#cf1\").submit();

     
   })


   \$('.remove_coupon').on('click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=extension/total/coupon/remove',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t if (json['redirect']) {
\t\t\t\t  location = json['redirect'];
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
   })
</script>
";
        // line 316
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 316,  524 => 248,  519 => 246,  516 => 245,  509 => 241,  503 => 237,  496 => 233,  492 => 231,  490 => 230,  483 => 226,  475 => 220,  465 => 216,  459 => 213,  454 => 210,  450 => 209,  445 => 206,  440 => 204,  431 => 203,  427 => 202,  423 => 201,  418 => 200,  416 => 199,  411 => 196,  393 => 184,  379 => 175,  364 => 163,  357 => 159,  353 => 157,  350 => 156,  339 => 153,  331 => 151,  328 => 150,  320 => 145,  316 => 144,  312 => 143,  308 => 141,  298 => 138,  293 => 137,  291 => 136,  286 => 133,  282 => 132,  275 => 128,  269 => 124,  257 => 120,  253 => 119,  249 => 118,  237 => 111,  228 => 104,  221 => 102,  216 => 101,  212 => 100,  207 => 99,  204 => 98,  195 => 97,  188 => 96,  185 => 95,  179 => 92,  174 => 90,  170 => 89,  166 => 87,  158 => 86,  152 => 85,  149 => 84,  145 => 83,  116 => 57,  111 => 55,  107 => 54,  94 => 43,  82 => 40,  78 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart.twig", "");
    }
}
