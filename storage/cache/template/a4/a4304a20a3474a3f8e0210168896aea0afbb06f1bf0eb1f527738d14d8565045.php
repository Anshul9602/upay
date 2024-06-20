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

/* default/template/common/about.twig */
class __TwigTemplate_fa06823d8d9416bf4d34f1800aa2169231663a21e4f44c0b595845605f0254c5 extends \Twig\Template
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
<div class=\"row\">
    <div class=\"col-sm-12\">
        <img src=\"assets/img/banner/about1.png\" alt=\"\" class=\"img-responsive w-100\">
    </div>
</div>
<section class=\"container\">
    <div class=\"row d-flex align-items-center \">
        <div class=\"col-md-4\">
            <img src=\"image/ab1.png\" alt=\"\" width=\"100%\">
        </div>
        <div class=\"col-md-8 abb\">
            <h1 style=\"color: #05182A; font-weight:700;font-size:40px;\">Our Story</h1>
            <br>
            <p style=\"font-size: 26px;\">Born in Delhi, with branches reaching across the globe, Upaaye Consulting began
                with a simple idea: <span style=\"color: #906CD4; font-weight:700;\">everyone deserves to feel confident about their
                    financial decisions. </span></p>
            <br><br>

            <p style=\"font-size: 26px;\">

                We’ve grown our family from local roots to a broad canopy that shelters a diverse clientele, from
                bustling startups to serene retirements.</p>

        </div>
    </div>
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
<section class=\"container \" style=\"background-image: url('image/ab4.png');    background-size: cover;\">
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

";
        // line 92
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 92,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/about.twig", "");
    }
}
