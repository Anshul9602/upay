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

/* default/template/common/csr.twig */
class __TwigTemplate_b53cf9d97526bc28ee9190710b21fd3692505b4f72abdecdad0995185a6dae86 extends \Twig\Template
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

<div class=\"container\">
   <div id=\"content\" style=\"min-height:600px; \" class=\"col-sm-12 text-center\">
   <br> <br>
      <h1>Coming Soon!</h1>
      <p>Exciting things are on the way! Stay tuned for this upcoming section.</p>
      <div class=\"buttons clearfix\">
        <div class=\"text-center\">
        <br> <br>
        <a href=\"https://solitairejewel.com/demo/index.php?route=common/home\" class=\"btn btn-primary\">Continue Shopping</a>
        </div>
      </div>
      </div>
</div>
<br /><br />
";
        // line 17
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/csr.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/csr.twig", "");
    }
}
