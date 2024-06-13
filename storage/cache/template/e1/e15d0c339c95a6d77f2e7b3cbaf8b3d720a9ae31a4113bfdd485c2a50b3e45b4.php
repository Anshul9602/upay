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
class __TwigTemplate_faeba45de547d8e47ca132dbb27c3d16d4e1e9cfbc618e77ad5a8cc0014a3a40 extends \Twig\Template
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
<div class=\"container\">
    <div class=\"row d-flex align-items-center\">
        <div class=\"col-sm-8\">
        <br /><br />
            <h2>About Solitaire Jewelry</h2>
            <br /><br />
            <p style=\"text-align:justify\"> 
           Solitaire Jewelry was founded with a passion for design, starting out as a provider of bespoke jewelry for small to medium-sized retailers in the United States. Over the past two decades, the company has honed its expertise by creating over 3500 designs and working with clients from diverse countries and backgrounds. This has sharpened its understanding of market trends and fostered a spirit of innovation.
<br /><br />
Every piece of jewelry produced by Solitaire Jewelry is handled with the utmost care and attention to detail, from design to manufacturing. The company adheres to all OECD guidelines and follows the Kimberly process rigorously. Its major suppliers are compliant with the Responsible Jewellery Council, and it uses a combination of recycled and standard 18K and 14K gold.
<br /><br />
The team at Solitaire Jewelry is comprised of individuals from a broad age range, ranging from 25 to 65, resulting in a unique blend of youthful ambition, passion, and tradition, as well as seasoned jewelry veterans with over 35 years of experience in the industry.        
</p>
        </div>
        <div class=\"col-sm-4\">
            <video style=\"width:100%\" autoplay loop muted playsinline src=\"assets/vids/about.mp4\"></video>
        </div>
    </div>
</div>
<br /><br />
";
        // line 27
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
        return array (  66 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/about.twig", "");
    }
}
