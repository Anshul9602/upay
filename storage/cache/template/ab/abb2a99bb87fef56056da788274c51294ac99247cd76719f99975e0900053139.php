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
class __TwigTemplate_0a599c3e2a57c4fb0ce7d0a24d784a40a68f5e8ef47e8c774f3870903a346ea3 extends \Twig\Template
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
            echo "                  <nav style=\"margin-top:-20px\" class=\"desktop-menu\">
                      <ul class=\"nav justify-content-space-around w-100\">
                        <li><a href=\"index.php?route=common/home\">home</a></li>
                        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "                          ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "                          <li class=\"dropdown\">
                          <a href=\"index.php?route=common/jewelry\" >";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8);
                    echo "</a>
                            <ul class=\"dropdown\">
                               ";
                    // line 10
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 10), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 11
                        echo "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 12
                            echo "                                  <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 12);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 12);
                            echo "</a></li>
                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 14
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "                              </ul>
                          </li>
                          ";
                } else {
                    // line 18
                    echo "                          ";
                    if (((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18) == "Diamonds") || (twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18) == "diamonds"))) {
                        // line 19
                        echo "                          <li><a href=\"index.php?route=common/diamonds\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 19);
                        echo "</a></li>
                           ";
                    } else {
                        // line 21
                        echo "
                            <li><a href=\"";
                        // line 22
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 22);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
                        echo "</a></li>
                          ";
                    }
                    // line 24
                    echo "
                          ";
                }
                // line 26
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                        <li><a href=\"index.php?route=common/about\">About Us</a></li>
                      </ul>
                    </nav>
                
";
        }
        // line 31
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
        return array (  126 => 31,  119 => 27,  113 => 26,  109 => 24,  102 => 22,  99 => 21,  93 => 19,  90 => 18,  85 => 15,  79 => 14,  68 => 12,  63 => 11,  59 => 10,  54 => 8,  51 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
