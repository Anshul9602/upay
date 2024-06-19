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

/* default/template/common/solution.twig */
class __TwigTemplate_465b368004aaf895baa6e8ab55907e51584d212a2ee22ae8574f77a12b72764e extends \Twig\Template
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

<style>.tabs {
   width: 80%;
   margin: 20px auto;
}

.tab-buttons {
   display: flex;
   border-bottom: 2px solid #ccc;
}

.tab-button {
   flex: 1;
   padding: 10px;
   cursor: pointer;
   background: #f1f1f1;
   border: none;
   outline: none;
   transition: background 0.3s;
}

.tab-button:hover {
   background: #ddd;
}

.tab-button.active {
   background: #fff;
   border-bottom: 2px solid #007BFF;
   color: #007BFF;
}

.tab-content {
   border: 1px solid #ccc;
   border-top: none;
   padding: 20px;
   background: #fff;
}

.tab-pane {
   display: none;
}

.tab-pane.active {
   display: block;
}</style>


<div class=\"slider-area pb-3\">

   <div class=\"row\">
      <div class=\"slider_banner col-12 desktop-banner\">
         <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 55
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 55);
            echo "\">
               <img src=\"";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 56);
            echo "\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 64
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 64);
            echo "\">
               <img src=\"";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 65);
            echo "\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "         </div>
      </div>
   </div>
</div>
<section class=\"container\">
    
        <h1 class=\"cus_ff bold text-center\" style=\"font-size: 44px;color:#000;font-weight: 700;\">Services for Individuals</h1>
   <h5 class=\"cus_p text-center pt-3\" style=\"color:#4D5053;max-width:50%;margin:auto;font-weight: 500;\">we offer a range of personal financial services designed to secure your and your family’s financial future:</h5>
   <div class=\"tabs row\">
      <div class=\"tab-buttons col-md-3\">
          <button class=\"tab-button active\" data-tab=\"tab1\">Tab 1</button>
          <button class=\"tab-button\" data-tab=\"tab2\">Tab 2</button>
          <button class=\"tab-button\" data-tab=\"tab3\">Tab 3</button>
      </div>
      <div class=\"tab-content col-md-9\">
          <div class=\"tab-pane active\" id=\"tab1\">
     
         
         </div>
          <div class=\"tab-pane\" id=\"tab2\">Content for Tab 2</div>
          <div class=\"tab-pane\" id=\"tab3\">Content for Tab 3</div>
      </div>
  </div>
</section>



<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>
\$(document).ready(function() {
   \$('.tab-button').click(function() {
       // Remove active class from all buttons and panes
       \$('.tab-button').removeClass('active');
       \$('.tab-pane').removeClass('active');

       // Add active class to the clicked button and corresponding pane
       \$(this).addClass('active');
       \$('#' + \$(this).data('tab')).addClass('active');
   });
});
</script>
";
        // line 110
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/solution.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 110,  135 => 68,  126 => 65,  121 => 64,  117 => 63,  111 => 59,  102 => 56,  97 => 55,  93 => 54,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/solution.twig", "");
    }
}
