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

/* extension/module/discount_category.twig */
class __TwigTemplate_d19a0c795e721802be547c824c18de61abc73b241a12660cdbd41a14aeee188e extends \Twig\Template
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
        <a type=\"submit\" form=\"\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\" id=\"save-button\"><i class=\"fa fa-save\"></i></a>
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
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
\t\t  \t<form method=\"post\" enctype=\"multipart/form-data\" id=\"form-settings\" class=\"form-horizontal\"> 
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 34
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t  <select name=\"total_category_discount_status\" id=\"input-status\" class=\"setting form-control selectpicker\">
\t\t\t\t\t";
        // line 37
        if (($context["category_discount_status"] ?? null)) {
            // line 38
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 39
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 42
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t  </select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 48
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t  <input type=\"text\" name=\"total_category_discount_sort_order\" value=\"";
        // line 50
        echo ($context["category_discount_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"setting form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</form>
\t\t\t
\t\t\t<form method=\"post\" enctype=\"multipart/form-data\" id=\"form-category-discount\" class=\"form-horizontal\">  \t
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td></td>
                      <td class=\"text-left col-md-2\">";
        // line 61
        echo ($context["entry_category"] ?? null);
        echo "</td>\t
                      <td class=\"text-left col-md-2\">";
        // line 62
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right col-md-1\">";
        // line 63
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right col-md-1\">";
        // line 64
        echo ($context["entry_percentage"] ?? null);
        echo "</td>
                      <td class=\"text-center col-md-1\">";
        // line 65
        echo ($context["entry_affect"] ?? null);
        echo "</td>
                      <td class=\"text-left col-md-1\">";
        // line 66
        echo ($context["entry_qty"] ?? null);
        echo "</td>
                      <td class=\"text-left col-md-1\">";
        // line 67
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left col-md-2\">";
        // line 68
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 73
        $context["discount_row"] = 0;
        // line 74
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_discount"]) {
            // line 75
            echo "                    <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                      <td>";
            // line 76
            if (twig_get_attribute($this->env, $this->source, $context["category_discount"], "status", [], "any", false, false, false, 76)) {
                // line 77
                echo "                      \t\t<a  id=\"active-";
                echo twig_get_attribute($this->env, $this->source, $context["category_discount"], "category_discount_id", [], "any", false, false, false, 77);
                echo "\" onclick=\"";
                if (($context["permission"] ?? null)) {
                    echo "deactivate(";
                    echo twig_get_attribute($this->env, $this->source, $context["category_discount"], "category_discount_id", [], "any", false, false, false, 77);
                    echo ");";
                }
                echo "\" class=\"btn btn-sm btn-success\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_enabled"] ?? null);
                echo "\">
                      \t\t<i class=\"fa fa-minus-circle fa-rotate-90 fa-2x\"></i>
                      \t\t</a>
                      \t\t<input name=\"category_discount[";
                // line 80
                echo ($context["discount_row"] ?? null);
                echo "][status]\" id=\"status";
                echo twig_get_attribute($this->env, $this->source, $context["category_discount"], "category_discount_id", [], "any", false, false, false, 80);
                echo "\" type=\"hidden\" value=\"1\">
                      \t\t";
            } else {
                // line 82
                echo "                      \t\t<a id=\"inactive-";
                echo twig_get_attribute($this->env, $this->source, $context["category_discount"], "category_discount_id", [], "any", false, false, false, 82);
                echo "\" onclick=\"";
                if (($context["permission"] ?? null)) {
                    echo "activate(";
                    echo twig_get_attribute($this->env, $this->source, $context["category_discount"], "category_discount_id", [], "any", false, false, false, 82);
                    echo ");";
                }
                echo "\" class=\"btn btn-sm btn-danger\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_disabled"] ?? null);
                echo "\"><i class=\"fa fa-minus-circle fa-rotate-90 fa-2x\"></i></a>
                      \t\t<input name=\"category_discount[";
                // line 83
                echo ($context["discount_row"] ?? null);
                echo "][status]\" id=\"status";
                echo twig_get_attribute($this->env, $this->source, $context["category_discount"], "category_discount_id", [], "any", false, false, false, 83);
                echo "\" type=\"hidden\" value=\"0\">
                      \t\t";
            }
            // line 85
            echo "                      </td>
                      <td class=\"text-left\"><select name=\"category_discount[";
            // line 86
            echo ($context["discount_row"] ?? null);
            echo "][category_id]\" class=\"form-control row";
            echo ($context["discount_row"] ?? null);
            echo " selectpicker\" data-live-search=\"true\" data-width=\"270\">
                          ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 88
                echo "\t\t\t\t\t\t\t  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 88);
                echo "\"  ";
                echo (((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 88) == twig_get_attribute($this->env, $this->source, $context["category_discount"], "category_id", [], "any", false, false, false, 88))) ? ("selected") : (""));
                echo " >";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 88);
                echo "</option>
\t\t\t\t\t\t\t  ";
                // line 89
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 89))) {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 90);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 91
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 91));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 92);
                        echo "\" ";
                        echo (((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 92) == twig_get_attribute($this->env, $this->source, $context["category_discount"], "category_id", [], "any", false, false, false, 92))) ? ("selected") : (""));
                        echo " >";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 92);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 94
                    echo "\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t  ";
                }
                // line 96
                echo "\t\t\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                        </select>
                      </td>\t
                      <td class=\"text-left\"><select name=\"category_discount[";
            // line 99
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control row";
            echo ($context["discount_row"] ?? null);
            echo " selectpicker\" data-live-search=\"true\">
                        ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 101
                echo "                          \t";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 101) == twig_get_attribute($this->env, $this->source, $context["category_discount"], "customer_group_id", [], "any", false, false, false, 101))) {
                    // line 102
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 102);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 102);
                    echo "</option>
                          ";
                } else {
                    // line 104
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 104);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 104);
                    echo "</option>
\t\t\t\t\t\t  ";
                }
                // line 105
                echo " 
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                        </select></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"category_discount[";
            // line 108
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_discount"], "priority", [], "any", false, false, false, 108);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control row";
            echo ($context["discount_row"] ?? null);
            echo "\" /></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"category_discount[";
            // line 109
            echo ($context["discount_row"] ?? null);
            echo "][percentage]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_discount"], "percentage", [], "any", false, false, false, 109);
            echo "\" placeholder=\"";
            echo ($context["entry_percentage"] ?? null);
            echo "\" class=\"form-control row";
            echo ($context["discount_row"] ?? null);
            echo "\" /></td>
                      <td class=\"text-right\">
                      \t<select name=\"category_discount[";
            // line 111
            echo ($context["discount_row"] ?? null);
            echo "][affect]\" class=\"form-control selectpicker\">
\t\t\t\t\t\t\t";
            // line 112
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["category_discount"], "affect", [], "any", false, false, false, 112))) {
                // line 113
                echo "\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                echo ($context["entry_no"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t";
            } else {
                // line 115
                echo "\t\t\t\t\t\t\t\t<option value=\"0\">";
                echo ($context["entry_no"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 117
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["category_discount"], "affect", [], "any", false, false, false, 117)) {
                echo "\t
\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 118
                echo ($context["entry_yes"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t";
            } else {
                // line 120
                echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo ($context["entry_yes"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 121
            echo "\t
\t\t\t\t\t\t</select> 
                      </td>
                      <td class=\"text-right\"><input type=\"text\" name=\"category_discount[";
            // line 124
            echo ($context["discount_row"] ?? null);
            echo "][qty]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_discount"], "qty", [], "any", false, false, false, 124);
            echo "\" placeholder=\"";
            echo ($context["entry_qty"] ?? null);
            echo "\" class=\"form-control row";
            echo ($context["discount_row"] ?? null);
            echo "\" /></td>
                      <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                          <input type=\"text\" name=\"category_discount[";
            // line 126
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_discount"], "date_start", [], "any", false, false, false, 126);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control row";
            echo ($context["discount_row"] ?? null);
            echo "\" />
                          <span class=\"input-group-btn\">
                          <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                          </span></div></td>
                      <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                          <input type=\"text\" name=\"category_discount[";
            // line 131
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_discount"], "date_end", [], "any", false, false, false, 131);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control row";
            echo ($context["discount_row"] ?? null);
            echo "\" />
                          <span class=\"input-group-btn\">
                          <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                          </span></div></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 135
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 137
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 138
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"9\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 143
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
        </form>
        <a class=\"btn btn-default\" id=\"back-btn\" href=\"";
        // line 149
        echo ($context["back_link"] ?? null);
        echo "\"> < Back</a>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\t
\tvar discount_row = ";
        // line 155
        echo ($context["discount_row"] ?? null);
        echo ";

\tfunction addDiscount() {
\t\thtml  = '<tr id=\"discount-row' + discount_row + '\">';
\t\thtml += '  <td><input name=\"category_discount[' + discount_row + '][status]\" id=\"status' + discount_row + '\" type=\"hidden\" value=\"1\"></td>';
\t\thtml += '  <td class=\"text-left\"><select name=\"category_discount[' + discount_row + '][category_id]\" class=\"form-control selectpicker\" data-live-search=\"true\">';
\t\t";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 162
            echo "\t\t\thtml += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 162);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 162), "js");
            echo "</option>';
\t\t\t";
            // line 163
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 163))) {
                // line 164
                echo "\t\t\t\thtml += '    <optgroup label=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 164), "js");
                echo ">';
\t\t\t\t";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 165));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 166
                    echo "\t\t\t\t\thtml += '    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 166);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 166), "js");
                    echo "</option>';
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                echo "\t\t\t\thtml += '    </optgroup>';
\t\t\t";
            }
            // line 170
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "\t\thtml += '  </select></td>';\t\t
\t\thtml += '  <td class=\"text-left\"><select name=\"category_discount[' + discount_row + '][customer_group_id]\" class=\"form-control selectpicker\" data-live-search=\"true\">';
\t\t";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 174
            echo "\t\t\thtml += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 174);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 174), "js");
            echo "</option>';
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "\t\thtml += '  </select></td>';\t\t
\t\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"category_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 177
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"category_discount[' + discount_row + '][percentage]\" value=\"\" placeholder=\"";
        // line 178
        echo ($context["entry_percentage"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t\thtml += '  <td class=\"text-center\"><select name=\"category_discount[' + discount_row + '][affect]\" class=\"form-control selectpicker\">';
\t\thtml += '  <option value=\"0\">";
        // line 180
        echo ($context["entry_no"] ?? null);
        echo "</option>';
\t\thtml += '  <option value=\"1\">";
        // line 181
        echo ($context["entry_yes"] ?? null);
        echo "</option>';
\t\thtml += '  </select></td>';
\t\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"category_discount[' + discount_row + '][qty]\" value=\"\" placeholder=\"";
        // line 183
        echo ($context["entry_qty"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t\thtml += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"category_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 184
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t\thtml += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"category_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 185
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 186
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\thtml += '</tr>';\t
\t
\t\t\$('#discount tbody').append(html);

\t\t\$('.date').datetimepicker({
\t\t\tpickTime: false
\t\t});
\t\t
\t\t\$('.selectpicker').selectpicker({
\t\t  size: 'auto',
\t\t  container : 'body',
\t\t  dropdownAlignRight: 'auto',
\t\t  dropupAuto: false,
\t\t  iconBase: 'fa',
\t\t  tickIcon: 'fa-check',
\t\t  selectedTextFormat: 'count > 3',
\t\t  showTick: true
\t\t});
\t\t
\t\tdiscount_row++;
\t}
\t
\t
\t";
        // line 210
        if (($context["permission"] ?? null)) {
            // line 211
            echo "\t\$('#save-button').click(function(){
\t\t
\t\t\$.ajax({
\t\t\turl:'index.php?route=extension/module/discounts_pack/discount_category/saveDiscount&user_token=";
            // line 214
            echo ($context["user_token"] ?? null);
            echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('.alert').remove();
\t\t\t},
\t\t\tdata: {
\t\t\t\tsetting: \$(\"#form-settings\").serialize(),
\t\t\t\tcategory_discount: \$('#form-category-discount').serialize(),
\t\t\t},
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
\t
\t";
        } else {
            // line 237
            echo "\t\t\$('#save-button').click(function(){
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$(\".panel\").before('<div class=\"alert alert-warning\">";
            // line 240
            echo ($context["error_permission"] ?? null);
            echo "</div>');
\t\t});
\t
\t";
        }
        // line 244
        echo "\t
\tfunction alertJson(action, json) {
\t\t
\t\t\$('.alert').remove();
\t\t
\t\tif (json['success']) {
\t\t\t\$(\".panel\").before('<div class=\"' + action + '\">' + json['success'] + '</div>');
\t\t} else if (json['error']) {
\t\t\t\$(\".panel\").before('<div class=\"' + action + '\">' + json['error'] + '</div>');
\t\t}
\t}
\t
\tfunction activate(row) {
\t\t
\t\t\$.ajax({
\t\t\turl:'index.php?route=extension/module/discounts_pack/discount_category/activate&user_token=";
        // line 259
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: {
\t\t\t\trow: row,
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\talertJson('alert alert-success', json);
\t\t\t\t\$('#inactive-' + row).replaceWith('<a  id=\"active-' + row + '\" onclick=\"";
        // line 267
        if (($context["permission"] ?? null)) {
            echo "deactivate(' + row + ');";
        }
        echo "\" class=\"btn btn-sm btn-success\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_enabled"] ?? null);
        echo "\"><i class=\"fa fa-minus-circle fa-rotate-90 fa-2x\"></i></a>');
\t\t\t\t\$('#status' + row).val(1);
\t\t\t},
\t\t\terror: function(json) {
\t\t\t\talertJson('alert alert-warning', json);
\t\t\t}
\t\t});
\t
\t}
\t
\tfunction deactivate(row) {
\t\t
\t\t\$.ajax({
\t\t\turl:'index.php?route=extension/module/discounts_pack/discount_category/deactivate&user_token=";
        // line 280
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: {
\t\t\t\trow: row,
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\talertJson('alert alert-success', json);
\t\t\t\t\$('#active-' + row).replaceWith('<a id=\"inactive-' + row + '\" onclick=\"";
        // line 288
        if (($context["permission"] ?? null)) {
            echo "activate(' + row + ');";
        }
        echo "\" class=\"btn btn-sm btn-danger\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\"><i class=\"fa fa-minus-circle fa-rotate-90 fa-2x\"></i></a>');
\t\t\t\t\$('#status' + row).val(0);
\t\t\t},
\t\t\terror: function(json) {
\t\t\t\talertJson('alert alert-warning', json);
\t\t\t}
\t\t});
\t
\t}
\t\$('.date').datetimepicker({
\t\tpickTime: false
\t});

\t\$('.time').datetimepicker({
\t\tpickDate: false
\t});

\t\$('.datetime').datetimepicker({
\t\tpickDate: true,
\t\tpickTime: true
\t});
\t
\t\$('.selectpicker').selectpicker({
\t  size: 'auto',
\t  container : 'body',
\t  dropdownAlignRight: 'auto',
\t  dropupAuto: false,
\t  iconBase: 'fa',
\t  tickIcon: 'fa-check',
\t  selectedTextFormat: 'count > 3',
\t  showTick: true
\t});

\t
//--></script>
</div>
";
        // line 324
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/discount_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  776 => 324,  733 => 288,  722 => 280,  702 => 267,  691 => 259,  674 => 244,  667 => 240,  662 => 237,  636 => 214,  631 => 211,  629 => 210,  602 => 186,  598 => 185,  594 => 184,  590 => 183,  585 => 181,  581 => 180,  576 => 178,  572 => 177,  569 => 176,  558 => 174,  554 => 173,  550 => 171,  544 => 170,  540 => 168,  529 => 166,  525 => 165,  520 => 164,  518 => 163,  511 => 162,  507 => 161,  498 => 155,  489 => 149,  480 => 143,  474 => 139,  468 => 138,  466 => 137,  459 => 135,  446 => 131,  432 => 126,  421 => 124,  416 => 121,  410 => 120,  405 => 118,  400 => 117,  394 => 115,  388 => 113,  386 => 112,  382 => 111,  371 => 109,  361 => 108,  358 => 107,  351 => 105,  343 => 104,  335 => 102,  332 => 101,  328 => 100,  322 => 99,  318 => 97,  312 => 96,  308 => 94,  295 => 92,  291 => 91,  286 => 90,  284 => 89,  275 => 88,  271 => 87,  265 => 86,  262 => 85,  255 => 83,  242 => 82,  235 => 80,  220 => 77,  218 => 76,  213 => 75,  208 => 74,  206 => 73,  198 => 68,  194 => 67,  190 => 66,  186 => 65,  182 => 64,  178 => 63,  174 => 62,  170 => 61,  154 => 50,  149 => 48,  143 => 44,  138 => 42,  133 => 41,  128 => 39,  123 => 38,  121 => 37,  115 => 34,  107 => 29,  103 => 27,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/discount_category.twig", "");
    }
}
