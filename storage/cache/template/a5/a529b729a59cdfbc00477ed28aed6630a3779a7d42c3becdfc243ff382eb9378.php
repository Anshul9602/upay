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

/* default/template/common/menu.twig */
class __TwigTemplate_a433dca45956ff1c3f753c43db30e71c6d22fb996407a970e6e0636def9a9f4a extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "                  <nav  class=\"desktop-menu\">
                      <ul class=\"nav justify-content-center w-100\">
                     
                      
                        <li><a href=\"index.php?route=common/about\">About</a></li>
                        <li><a href=\"index.php?route=common/solution\">Solutions</a></li>
                        <li><a href=\"index.php?route=common/upaays\">Upaaye Science</a></li>
                        <li><a href=\"#\">Plans</a></li>
                        <li><a href=\"#\">More</a></li>
                      </ul>
                    </nav>
                
";
        }
        // line 14
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
