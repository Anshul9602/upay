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
class __TwigTemplate_29197c2b7be8db969139fc83cbafc71c3bf1453aa8c7fa77f6d11d3219175533 extends \Twig\Template
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
            <img src=\"\" alt=\"\" width=\"100%\">
        </div>
        <div class=\"col-md-7 abb\">
            <h1 style=\"color: #05182A; font-weight:700;font-size:40px;\">Our Story</h1>
            <br>
            <p style=\"font-size: 32px;\">Born in Delhi, with branches reaching across the globe, Upaaye Consulting began
                with a simple idea: <span style=\"color: #906CD4; font-weight:700;\">everyone deserves to feel confident about their
                    financial decisions. </span></p>
            <br><br>

            <p style=\"font-size: 32px;\">

                We’ve grown our family from local roots to a broad canopy that shelters a diverse clientele, from
                bustling startups to serene retirements.</p>

        </div>
    </div>
</section>
<br /><br />
";
        // line 29
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
        return array (  68 => 29,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/about.twig", "");
    }
}
