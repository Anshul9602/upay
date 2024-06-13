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

/* extension/module/discounts_pack.twig */
class __TwigTemplate_0751654e75207342e71dab3f9a4104c6b4f6fc15e5ce7c7c8b33c886247c4c6e extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button id=\"save-button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save_stay"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\" id=\"main-panel\" >
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-discounts\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-about\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_about"] ?? null);
        echo "</a></li>
          </ul>
        \t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 35
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t  <select name=\"module_discounts_pack_status\" id=\"input-status\" class=\"setting form-control\">
\t\t\t\t\t\t";
        // line 38
        if (($context["discounts_status"] ?? null)) {
            // line 39
            echo "\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t<option value=\"0\">";
            // line 40
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 43
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        }
        // line 44
        echo " 
\t\t\t\t\t  </select>
\t\t\t\t\t</div>
\t\t\t  \t</div>
\t\t\t  \t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-include-specials\">";
        // line 49
        echo ($context["entry_include_specials"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t  <select name=\"module_discounts_pack_include_specials\" id=\"input-include-specials\" class=\"setting form-control\">
\t\t\t\t\t\t";
        // line 52
        if (($context["discounts_include_specials"] ?? null)) {
            // line 53
            echo "\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t<option value=\"0\">";
            // line 54
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 57
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        }
        // line 58
        echo " 
\t\t\t\t\t  </select>
\t\t\t\t\t</div>
\t\t\t  \t</div>
\t\t\t \t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-override-discount-price\"><span data-toggle=\"tooltip\" title=\"";
        // line 63
        echo ($context["help_override_discount_price"] ?? null);
        echo "\">";
        echo ($context["entry_override_discount_price"] ?? null);
        echo "</span></label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t  \t<select name=\"module_discounts_pack_override_discount_price\" id=\"input-override-discount-price\" class=\"setting form-control\">
\t\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options_discount"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 67
            echo "\t\t\t\t\t\t\t\t";
            if ((($context["discounts_override_discount_price"] ?? null) == $context["value"])) {
                echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 68
                echo $context["value"];
                echo "\" selected=\"selected\">";
                echo $context["value"];
                echo "</option>
\t\t\t\t\t\t\t\t ";
            } else {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["value"];
                echo "\">";
                echo $context["value"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t  \t</div>
\t\t\t  \t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-override-special-price\"><span data-toggle=\"tooltip\" title=\"";
        // line 77
        echo ($context["help_override_special_price"] ?? null);
        echo "\">";
        echo ($context["entry_override_special_price"] ?? null);
        echo "</span></label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t  \t<select name=\"module_discounts_pack_override_special_price\" id=\"input-override-special-price\" class=\"setting form-control\">
\t\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options_special"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 81
            echo "\t\t\t\t\t\t\t\t";
            if ((($context["discounts_override_special_price"] ?? null) == $context["option"])) {
                echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 82
                echo $context["option"];
                echo "\" selected=\"selected\">";
                echo $context["option"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 84
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option"];
                echo "\">";
                echo $context["option"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 85
            echo " 
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t  \t</div>
\t\t\t  \t
\t\t\t  \t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-rounding\"><span data-toggle=\"tooltip\" title=\"";
        // line 92
        echo ($context["help_rounding"] ?? null);
        echo "\">";
        echo ($context["entry_rounding"] ?? null);
        echo "</span></label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t  \t<select name=\"module_discounts_pack_rounding\" id=\"input-rounding\" class=\"setting form-control\">
\t\t\t\t\t\t\t";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options_rounding"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 96
            echo "\t\t\t\t\t\t\t\t";
            if ((($context["discounts_rounding"] ?? null) == $context["option"])) {
                echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 97
                echo $context["option"];
                echo "\" selected=\"selected\">";
                echo $context["option"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 99
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option"];
                echo "\">";
                echo $context["option"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 100
            echo " 
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t  \t</div>
\t\t\t  \t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-rounding-precision\"><span data-toggle=\"tooltip\" title=\"";
        // line 106
        echo ($context["help_rounding_precision"] ?? null);
        echo "\">";
        echo ($context["entry_rounding_precision"] ?? null);
        echo "</span></label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t  \t<select name=\"module_discounts_pack_rounding_precision\" id=\"input-rounding-precision\" class=\"setting form-control\">
\t\t\t\t\t\t\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options_rounding_precision"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 110
            echo "\t\t\t\t\t\t\t\t";
            if ((($context["discounts_rounding_precision"] ?? null) == $context["option"])) {
                echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 111
                echo $context["option"];
                echo "\" selected=\"selected\">";
                echo $context["option"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 113
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option"];
                echo "\">";
                echo $context["option"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 114
            echo " 
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t  \t</div>
\t\t\t  \t
\t\t\t\t<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t
\t\t\t\t ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discount_modules_data"] ?? null));
        foreach ($context['_seq'] as $context["module"] => $context["data"]) {
            // line 123
            echo "\t\t\t\t\t\t
\t\t\t\t  <div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\" role=\"tab\" id=\"heading\">
\t\t\t\t\t  <h4 class=\"panel-title\">
\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 127
            echo $context["module"];
            echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
            echo $context["module"];
            echo "\">
\t\t\t\t\t\t  ";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["data"], "title", [], "any", false, false, false, 128);
            echo " ";
            echo ($context["heading_title"] ?? null);
            echo " 
\t\t\t\t\t\t  \t";
            // line 129
            if (twig_get_attribute($this->env, $this->source, $context["data"], "status", [], "any", false, false, false, 129)) {
                // line 130
                echo "\t\t\t\t\t\t  \t\t<span id=\"label-";
                echo $context["module"];
                echo "\" class=\"label label-success pull-right\">";
                echo ($context["text_enabled"] ?? null);
                echo "</span>
\t\t\t\t\t\t  \t";
            } else {
                // line 132
                echo "\t\t\t\t\t\t  \t\t<span id=\"label-";
                echo $context["module"];
                echo "\" class=\"label label-danger pull-right\">";
                echo ($context["text_disabled"] ?? null);
                echo "</span>
\t\t\t\t\t\t  \t";
            }
            // line 134
            echo "\t\t\t\t\t\t</a>
\t\t\t\t\t  </h4>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapse";
            // line 137
            echo $context["module"];
            echo "\" class=\"panel-collapse collapse ";
            echo ((($context["module"] == "category")) ? ("in") : (""));
            echo " ''\" role=\"tabpanel\" aria-labelledby=\"heading";
            echo $context["module"];
            echo "\">
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status-";
            // line 140
            echo $context["module"];
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["data"], "title", [], "any", false, false, false, 140);
            echo " ";
            echo ($context["heading_title"] ?? null);
            echo " ";
            echo ($context["entry_status"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t  <select name=\"total_";
            // line 142
            echo $context["module"];
            echo "_discount_status\" id=\"input-status-";
            echo $context["module"];
            echo "\" class=\"";
            echo $context["module"];
            echo " form-control\" onchange=\"changeLabel(\$(this).val(), '";
            echo $context["module"];
            echo "')\" >
\t\t\t\t\t\t\t\t\t";
            // line 143
            if (twig_get_attribute($this->env, $this->source, $context["data"], "status", [], "any", false, false, false, 143)) {
                // line 144
                echo "\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 145
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 147
                echo "\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 148
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            // line 149
            echo " 
\t\t\t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 154
            if (($context["module"] != "customer")) {
                // line 155
                echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order-";
                // line 156
                echo $context["module"];
                echo "\">";
                echo ($context["entry_sort_order"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t  <input type=\"text\" name=\"total_";
                // line 158
                echo $context["module"];
                echo "_discount_sort_order\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["data"], "sort_order", [], "any", false, false, false, 158);
                echo "\" placeholder=\"";
                echo ($context["entry_sort_order"] ?? null);
                echo "\" id=\"input-sort-order-";
                echo $context["module"];
                echo "\" class=\"";
                echo $context["module"];
                echo " form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 162
            echo "\t\t\t\t\t\t\t <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"edit-link-";
            // line 163
            echo $context["module"];
            echo "\">";
            echo ($context["text_edit_discounts"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t  <a href=\"";
            // line 165
            echo twig_replace_filter(($context["link"] ?? null), ["%s" => $context["module"]]);
            echo "\" id=\"edit-link-";
            echo $context["module"];
            echo "\" class=\"btn btn-primary\" title=\"";
            echo ($context["text_edit_discounts"] ?? null);
            echo "\"><i class=\"fa fa-edit fa-2x\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t  </div>\t\t\t\t\t\t 
\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t  
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['module'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "\t\t\t\t</div>        \t
\t\t\t\t";
        // line 173
        if (($context["upgrade"] ?? null)) {
            // line 174
            echo "\t\t\t\t\t<a id=\"upgrade\" class=\"btn btn-warning pull-right\"><i class=\"fa fa-database\"></i> ";
            echo ($context["text_upgrade"] ?? null);
            echo "</a>
\t\t\t\t";
        }
        // line 176
        echo "\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"tab-pane\" id=\"tab-about\">
\t\t\t\t\t<div class=\"panel panel-body\" class=\"\"><h1>Discounts Pack</h1>
\t\t\t\t\t<p>This extension bundles several discount modules: Category Discount, Customer Group Discount, Manufacturer Discount, Ordertotal Discount, Loyalty Discount (based on Order History) and global Volume/Tier Discount. </p>
\t\t\t\t\t</div>
\t\t\t\t\t<hr />
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"copyright\">Copyright</label>
\t\t\t\t\t\t<div class=\"col-sm-10\" id=\"copyright\">
\t\t\t\t\t\t  <p style=\"padding-top:9px;\">Jorim van Hove &copy; 2015 - ";
        // line 186
        echo ($context["year"] ?? null);
        echo " </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"version\">Version</label>
\t\t\t\t\t\t<div class=\"col-sm-10\" id=\"version\">
\t\t\t\t\t\t <p style=\"padding-top:9px;\"> ";
        // line 192
        echo ($context["version"] ?? null);
        echo " <a class=\"\" href=\"http://www.opencart.com/index.php?route=extension/extension/info&extension_id=32510\" target=\"_blank\">Check for newer version</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"version\">Documentation</label>
\t\t\t\t\t\t<div class=\"col-sm-10\" id=\"version\">
\t\t\t\t\t\t <p><a class=\"btn btn-success\" href=\"http://jorimvanhove.com/plugins/discounts-pack\" target=\"_blank\">Link</a> (opens in new window)</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"support\">Support</label>
\t\t\t\t\t\t<div class=\"col-sm-10\" id=\"support\">
\t\t\t\t\t\t <p style=\"padding-top:9px;\">Email the extension order ID, admin access details and FTP login details, together with a detailed description of the issue and you will receive an answer within 24h: <a href=\"mailto:support@jorimvanhove.com\" class=\"\">support@jorimvanhove.com</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"other\">Other extensions</label>
\t\t\t\t\t\t<div class=\"col-sm-10\" id=\"other\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\" >
\t\t\t\t\t\t \t\t\t<a href=\"http://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=31443\" target=\"_blank\" class=\"thumbnail\"><img src=\"http://jorimvanhove.com/plugins/img/facebook-pixel-pro.png\" title=\"Facebook Pixel PRO\" alt=\"Facebook Pixel PRO\"></a>
\t\t\t\t\t\t \t\t</div>
\t\t\t\t\t\t \t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<a href=\"http://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=32433\" target=\"_blank\" class=\"thumbnail\"><img src=\"http://jorimvanhove.com/plugins/img/euvat_oc3.png\" title=\"EU VAT Number Validation\" alt=\"EU VAT Number Validation\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t \t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<a href=\"http://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=19545\" target=\"_blank\" class=\"thumbnail\" ><img src=\"http://jorimvanhove.com/plugins/opencart/img/OC_FSP_Tile.png\" title=\"Free Shipping Pro\" alt=\"Free Shipping Pro\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<a href=\"http://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=20301\" target=\"_blank\" class=\"thumbnail\"><img src=\"http://jorimvanhove.com/plugins/opencart/img/OC_IOL_Tile_OC2.png\" title=\"Improved Order List\" alt=\"Improved Order List\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\" >
\t\t\t\t\t\t\t\t\t<a href=\"http://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=20705\" target=\"_blank\" class=\"thumbnail\"><img src=\"http://jorimvanhove.com/plugins/opencart/img/OC_TCT_Tile.png\" title=\"Twitter Conversion Tracking\" alt=\"Twitter Conversion Tracking\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"hidden col-md-3 col-sm-6\" >
\t\t\t\t\t\t\t\t\t<a href=\"http://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=20726\" target=\"_blank\" class=\"thumbnail\"><img src=\"http://jorimvanhove.com/plugins/opencart/img/OC_OIE_Tile.png\" title=\"Admin Order Info Edit\" alt=\"Admin Order Info Edit\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"all\">All extensions by Jorim van Hove</label>
\t\t\t\t\t\t<div class=\"col-sm-10\" id=\"all\">
\t\t\t\t\t\t  <a href=\"http://www.opencart.com/index.php?route=marketplace/extension&filter_member=Jorim%20van%20Hove\" target=\"_blank\" class=\"btn btn-default\">Opencart.com</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t  <tr>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t  </tr>
\t\t\t\t</div>
        \t</div>
        
        <p>Discounts Pack ";
        // line 248
        echo ($context["version"] ?? null);
        echo " &copy; 2015 - ";
        echo ($context["year"] ?? null);
        echo "  <a href=\"http://jorimvanhove.com/\" target=\"_blank\">Jorim van Hove</a> - <a href=\"http://jorimvanhove.com/plugins/discounts-pack\" target=\"_blank\">Online Documentation</a></p>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\t";
        // line 254
        if (($context["permission"] ?? null)) {
            // line 255
            echo "\t\$('#save-button').click(function(){
\t\t
\t\t\$.ajax({
\t\t\turl:'index.php?route=extension/module/discounts_pack/saveSettings&user_token=";
            // line 258
            echo ($context["user_token"] ?? null);
            echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('.alert').remove();
\t\t\t},
\t\t\tdata: {
\t\t\t\tsettings : \$('.setting').serialize(),
\t\t\t\t
\t\t\t\t";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["discount_modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 268
                echo "\t\t\t\t\t";
                echo $context["module"];
                echo " : \$(\".";
                echo $context["module"];
                echo "\").serialize(),
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\talertJson('alert alert-success', json);
\t\t\t},
\t\t\terror: function(json) {
\t\t\t\talertJson('alert alert-warning', json);
\t\t\t}
\t\t});
\t\t
\t\treturn false;
\t});
\t
\t\$('#upgrade').click(function(){
\t\t\$.ajax({
\t\t\turl:'index.php?route=extension/module/discounts_pack/upgrade&user_token=";
            // line 284
            echo ($context["user_token"] ?? null);
            echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('.alert').remove();
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\talertJson('alert alert-success', json);
\t\t\t \t\$('#upgrade').remove();
\t\t\t}
\t\t});
\t\treturn false;
\t});
\t
\t";
        } else {
            // line 299
            echo "\t\t\$('#save-button').click(function(){
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$(\"#main-panel\").before('<div class=\"alert alert-warning\">";
            // line 302
            echo ($context["error_permission"] ?? null);
            echo "</div>');
\t\t});
\t";
        }
        // line 304
        echo " 
\t
\tfunction changeLabel(value,id) {
\t\tif (value == 1) {
\t\t\t\$('#label-' + id).toggleClass('label-danger').toggleClass('label-success').text('";
        // line 308
        echo ($context["text_enabled"] ?? null);
        echo "');
\t\t} else {
\t\t\t\$('#label-' + id).toggleClass('label-success').toggleClass('label-danger').text('";
        // line 310
        echo ($context["text_disabled"] ?? null);
        echo "');
\t\t}
\t}
\t
\tfunction alertJson(action, json) {
\t\t
\t\t\$('.alert').remove();
\t\t
\t\tif (json['success']) {
\t\t\t\$(\"#main-panel\").before('<div class=\"' + action + '\">' + json['success'] + '</div>');
\t\t} else if (json['error']) {
\t\t\t\$(\"#main-panel\").before('<div class=\"' + action + '\">' + json['error'] + '</div>');
\t\t}
\t\t
\t}
\t
\t\$('select').addClass('selectpicker');
\t
\t\$('.selectpicker').selectpicker({
\t  size: 'auto',
\t  container : 'body',
\t  dropdownAlignRight: 'auto',
\t  iconBase: 'fa',
\t  tickIcon: 'fa-check',
\t  selectedTextFormat: 'count > 3',
\t  showTick: true
\t});
//--></script>
";
        // line 338
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/discounts_pack.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  753 => 338,  722 => 310,  717 => 308,  711 => 304,  705 => 302,  700 => 299,  682 => 284,  666 => 270,  655 => 268,  651 => 267,  639 => 258,  634 => 255,  632 => 254,  621 => 248,  562 => 192,  553 => 186,  541 => 176,  535 => 174,  533 => 173,  530 => 172,  513 => 165,  506 => 163,  503 => 162,  488 => 158,  481 => 156,  478 => 155,  476 => 154,  469 => 149,  464 => 148,  459 => 147,  454 => 145,  449 => 144,  447 => 143,  437 => 142,  426 => 140,  416 => 137,  411 => 134,  403 => 132,  395 => 130,  393 => 129,  387 => 128,  381 => 127,  375 => 123,  371 => 122,  363 => 116,  356 => 114,  348 => 113,  341 => 111,  336 => 110,  332 => 109,  324 => 106,  318 => 102,  311 => 100,  303 => 99,  296 => 97,  291 => 96,  287 => 95,  279 => 92,  272 => 87,  265 => 85,  257 => 84,  250 => 82,  245 => 81,  241 => 80,  233 => 77,  227 => 73,  221 => 72,  213 => 70,  206 => 68,  201 => 67,  197 => 66,  189 => 63,  182 => 58,  177 => 57,  172 => 56,  167 => 54,  162 => 53,  160 => 52,  154 => 49,  147 => 44,  142 => 43,  137 => 42,  132 => 40,  127 => 39,  125 => 38,  119 => 35,  111 => 30,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/discounts_pack.twig", "");
    }
}
