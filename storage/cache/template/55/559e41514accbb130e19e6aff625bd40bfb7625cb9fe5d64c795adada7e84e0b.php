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

/* default/template/common/success_logout.twig */
class __TwigTemplate_a54e6f840718ab849862e96a0c21945f3a4dfc36f2d2b490be8a7d052cd84fc9 extends \Twig\Template
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
<div class=\"breadcrumb-area hidden-phone\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-12\">
            <div class=\"breadcrumb-wrap\">
               <nav aria-label=\"breadcrumb\">
                  <ul class=\"breadcrumb\">
                     ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "                     <li class=\"ml-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
                     &nbsp;/
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
<div id=\"common-success\" class=\"container text-center\">
 
  <div class=\"row\">
    <div id=\"content\" class=\"col-sm-12\">";
        // line 23
        echo ($context["content_top"] ?? null);
        echo "
      <br /><br /><br />
      <h1>You have been logged out!</h1>
      <br />
     <p>Thank you for visiting our website. You can log in again anytime to access your account.
     <br /> reach us at - sales@solitairejew.com
     </p>
     <br />
      <div class=\"buttons\">
        <div class=\"text-center\">
        <a href=\"";
        // line 33
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">Continue Shopping</a>
        <br /><br /><br /><br /><br />
        </div>
      </div>
     </div>
   </div>
</div>
";
        // line 40
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/success_logout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 40,  89 => 33,  76 => 23,  64 => 13,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/success_logout.twig", "");
    }
}
