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
class __TwigTemplate_aa74507b9f0c0f1193a6fb79300f4d049ecabdcbb776113f913c4ddbf078d3b6 extends \Twig\Template
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
<div class=\"slider-area pb-3\">

   <div class=\"row\">
      <div class=\"slider_banner col-12 desktop-banner\">
         <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 8
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8);
            echo "\">
               <img src=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
            echo "\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "         </div>
      </div>
      <div class=\"slider_banner col-12 mobile-banner\">
         <div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 17
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 17);
            echo "\">
               <img src=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 18);
            echo "\" alt class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "         </div>
      </div>
   </div>
</div>
<section class=\"container\">
    
        <h1 class=\"cus_ff bold text-center\" style=\"font-size: 44px;color:#000;font-weight: 700;\">Services for Individuals</h1>
   <h5 class=\"cus_p text-center pt-3\" style=\"color:#4D5053;max-width:50%;margin:auto;\">We offer a range of personal financial services designed to secure your and your family’s financial future:</h5>
</section>
<section class=\"container\">
    <div class=\"row d-flex align-items-center \">
        <div class=\"col-md-12\">
            <img src=\"image/ab2.png\" alt=\"\" width=\"100%\">
        </div>
       
    </div>
</section>
<section class=\"container\">
    <div class=\"row d-flex align-items-center \">
        <div class=\"col-md-12\">
            <img src=\"image/ab3.png\" alt=\"\" width=\"100%\">
        </div>
       
    </div>
</section>
<section class=\"container\">
    <img src=\"image/ab4.png\" alt=\"\" width=\"100%\">
</section>
<section class=\"container d-none\" style=\"background-image: url('image/ab4.png');    background-size: cover;\">
   <div class=\"row p-3 \">
   
      <div class=\"col-md-12 p-md-3 p-1 abl m-0\">
         <div class=\"col-md-12\">
            <h1 class=\"mt-md-5 mt-3 pb-3\" style=\"font-weight: 700;color:#fff;\">Ready to take control of your financial future? 
</h1>
            <h4 class=\"mt-md-5 mt-3 pb-3\" style=\"font-weight: 700;color:#fff;\">
Connect with us today for a free consultation, and let's start making your financial goals a reality.</h4>

            <p style=\"color:#fff;font-size:18px;\">We aren’t here just to offer
               advice; we’re here to make a real difference. Our commitment is
               to understand your unique financial landscape and tailor
               strategies that fit not just your life today, but also your
               vision for tomorrow. From simplifying complex financial terms to
               devising effective, cost-efficient strategies, we make sure that
               your money works for you—transparently and relentlessly.</p>
            <br>
            <p style=\"color:#fff;font-size:18px;\">

               Why settle for standard financial advice when you can have a
               partner who champions your personal and financial growth? At
               Upaaye, we thrive on transforming financial challenges into
               victories. We’re excited about every new story we get to be a
               part of-<br>
               <span style=\"font-weight: 700;font-size:30px;\">let yours be the
                  next success story.</span>
            </p>



         </div>
         <div class=\"col-md-9 mt-md-0 mt-3\" style=\"    align-items: end; display: flex;\">
            <ul class=\"d-flex \" style=\"justify-content: space-between;    width: 100%;\">
               <li><img src=\"image/fa.png\" alt=\"\" width=\"50\"></li>
               <li><img src=\"image/in.png\" alt=\"\" width=\"50\"></li>
               <li><img src=\"image/ph.png\" alt=\"\" width=\"50\"></li>
               <li><img src=\"image/twi.png\" alt=\"\" width=\"50\"></li>
            </ul>
         </div>
      </div>

   </div>
</section>
<br /><br />
";
        // line 94
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
        return array (  163 => 94,  88 => 21,  79 => 18,  74 => 17,  70 => 16,  64 => 12,  55 => 9,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/solution.twig", "");
    }
}
