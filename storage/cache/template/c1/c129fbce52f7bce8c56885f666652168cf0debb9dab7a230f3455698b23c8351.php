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
class __TwigTemplate_de71bcef83bdea87797fa66dfd3986c87dd710cfaf5df678892e141fec05c078 extends \Twig\Template
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
        <div class=\"col-md-4 mt-md-0 mt-3\">
            <img src=\"image/ab1.png\" alt=\"\" width=\"100%\">
        </div>
        <div class=\"col-md-8 abb mt-md-0 mt-3\">
            <h1 style=\"color: #05182A; font-weight:700;font-size:40px;\">Our Story</h1>
            <br>
            <p style=\"font-size: 26px;\">Born in Delhi, with branches reaching across the globe, Upaaye Consulting began
                with a simple idea: <span style=\"color: #906CD4; font-weight:700;\">everyone deserves to feel confident
                    about their
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

    <img src=\"image/ab4.png\" alt=\"\" width=\"100%\">



";
        // line 50
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
        return array (  89 => 50,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/about.twig", "");
    }
}
