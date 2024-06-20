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

/* default/template/common/mobile_menu.twig */
class __TwigTemplate_4849ef0537838ec2c2496258ed92cbab6a3e73d81e605df37a5875957dc591d5 extends \Twig\Template
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
        echo "
\t<style>
\t\t.mobile_menu .col-12 hr {
\t\t\tmargin: 7px 0;
\t\t}
\t\t.mobile-navigation {
\t\t\tmax-height: 500px;
\t\t}
\t\t.mobile_menu .col-12 a {
\t\t\ttext-transform: uppercase;
\t\t\tcolor: #333;
\t\t\tfont-size: 12px;
\t\t}
\t\t.collapse-span {
\t\t\tdisplay: none;
\t\t}
\t</style>
\t<div class=\"row mobile_menu\">
\t\t<br/>
\t\t<br/>
\t\t<div class=\"col-12\" style='margin-top:10px'>
\t\t\t<a href=\"index.php?route=common/about\">About</a>
\t\t\t<hr/>
\t\t</div>
\t\t<div class=\"col-12\" style='margin-top:10px'>
\t\t\t<a href=\"index.php?route=common/solution\">Solution</a>
\t\t\t
\t\t\t<hr/>
\t\t</div>
\t\t<div class=\"col-12\" style='margin-top:10px'>
\t\t\t
\t\t\t<a href=\"index.php?route=common/upaay\">Upaaye Science</a>
\t\t\t<hr/>
\t\t</div>
\t\t<div class=\"col-12\" style='margin-top:10px'>
\t\t\t
\t\t\t<a href=\"index.php?route=common/about\">Plan</a>
\t\t\t<hr/>
\t\t</div>
\t\t<div class=\"col-12\" style='margin-top:10px'>
\t\t\t
\t\t\t<a href=\"index.php?route=common/about\">More</a>
\t\t\t<hr/>
\t\t</div>
\t
\t\t\t<script>
\t\t\t\t\$(document).ready(function () {
\$(\".collapse-toggle\").click(function (e) {
e.preventDefault();
\$(\".collapse-span\").slideToggle();
})
})
\t\t\t</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/mobile_menu.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/mobile_menu.twig", "");
    }
}
