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
class __TwigTemplate_861ebd7ba226fde454f7f3a351d7a6d808156f21f426967e61c45cb8e05bf5f5 extends \Twig\Template
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
\t<div class=\"slider_banner col-12 desktop-banner\">
\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 6
            echo "\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6);
            echo "\" style=\"position: relative;\">
\t\t\t\t\t<img src=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
            echo "\" alt class=\"img-response slider-img\">
\t\t\t\t\t
\t\t\t\t</a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
\t\t</div>
\t</div>
\t<div class=\"slider_banner col-12 mobile-banner\">
\t\t<div class=\" hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mob_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 17
            echo "\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 17);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 18);
            echo "\" alt class=\"img-response slider-img\">
\t\t\t\t</a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t</div>
\t</div>
</div>
<section class=\"container\">
\t<div class=\"row d-flex align-items-center \">
\t\t<div class=\"col-md-4 mt-md-0 mt-3\">
\t\t\t<img src=\"image/ab1.png\" alt=\"\" width=\"100%\">
\t\t</div>
\t\t<div class=\"col-md-8 abb mt-md-0 mt-4 p-4\">
\t\t\t<h1 style=\"color: #05182A; font-weight:700;font-size:35px;\">Our Story</h1>
\t\t\t<br>
\t\t\t<p style=\"font-size: 22px;line-height:1.4;\">Born in Delhi, with branches reaching across the globe, Upaaye Consulting began
\t\t\t\t                with a simple idea:
\t\t\t\t<span style=\"color: #906CD4; font-weight:700;\">everyone deserves to feel confident
\t\t\t\t\t                    about their
\t\t\t\t\t                    financial decisions.
\t\t\t\t</span>
\t\t\t</p>


\t\t\t<p class=\"pt-md-4 pt-4 \" style=\"font-size: 22px;\">

\t\t\t\tWe’ve grown our family from local roots to a broad canopy that shelters a diverse clientele, from
\t\t\t\t                bustling startups to serene retirements.</p>

\t\t</div>
\t</div>
</section>
<section class=\"container\">
\t<div class=\"row d-flex align-items-center \">
\t\t<div class=\"col-md-12\">
\t\t\t<img src=\"image/ab2.png\" alt=\"\" width=\"100%\">
\t\t</div>
\t</div>
</section>
<section class=\"container\">
\t<div class=\"row d-flex align-items-center \">
\t\t<div class=\"col-md-12\">
\t\t\t<img src=\"image/ab3.png\" alt=\"\" width=\"100%\">
\t\t</div>

\t</div>
</section>

<img src=\"image/ab4.png\" alt=\"\" width=\"100%\">


";
        // line 68
        echo ($context["footer"] ?? null);
        echo "
";
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
        return array (  137 => 68,  88 => 21,  79 => 18,  74 => 17,  70 => 16,  63 => 11,  53 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/about.twig", "");
    }
}
