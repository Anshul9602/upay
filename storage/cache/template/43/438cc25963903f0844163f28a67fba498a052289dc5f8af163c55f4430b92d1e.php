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
class __TwigTemplate_fc6436f8a24af1df031c4e5d5b7c7e04458bc4dbb53521302ec113e0065c54e6 extends \Twig\Template
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
<section class=\"container \" style=\"background-image: url('image/abb.png');    background-size: cover;\">
   <div class=\"row p-3 \">
   
      <div class=\"col-md-12 p-md-3 p-1 abl m-0\">
         <div class=\"col-md-12 row\">
            <h1 class=\"mt-md-5  pb-3 col-md-9\" style=\"font-weight: 700;color:#fff;\">Ready to take control of your financial future? 
</h1>
            <h2 class=\"mt-md-5 mt-3 pb-3 col-md-8\" style=\"font-weight: 700;color:#fff;\">
Connect with us today for a free consultation, and let's start making your financial goals a reality.</h2>

           



         </div>
         <div class=\"col-md-9 mt-md-5 mt-3 pb-3\" style=\"    align-items: end; display: flex;\">
            <button class=\"btn btn-primary\" style=\"border-radius: 0; background:#fff;color:black;    text-transform: capitalize;\">Conatct Us</button>
         </div>
      </div>

   </div>
</section>

";
        // line 70
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
        return array (  109 => 70,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/about.twig", "");
    }
}
