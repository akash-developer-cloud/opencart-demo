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

/* extension/report/sale_shipping_info.twig */
class __TwigTemplate_8fa62890c9f1cbc356786f1aa50a7346c8e33e52bf98331362cab8028e45f1a7 extends \Twig\Template
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
        echo "<div class=\"row\">
  <div id=\"filter-report\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 5
        echo ($context["text_filter"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-date-start\">";
        // line 9
        echo ($context["entry_date_start"] ?? null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_start\" value=\"";
        // line 11
        echo ($context["filter_date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-start\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-date-end\">";
        // line 17
        echo ($context["entry_date_end"] ?? null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_end\" value=\"";
        // line 19
        echo ($context["filter_date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-end\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-group\">";
        // line 25
        echo ($context["entry_group"] ?? null);
        echo "</label>
          <select name=\"filter_group\" id=\"input-group\" class=\"form-control\">
                  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 28
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "value", [], "any", false, false, false, 28) == ($context["filter_group"] ?? null))) {
                // line 29
                echo "            \t  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "value", [], "any", false, false, false, 29);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "text", [], "any", false, false, false, 29);
                echo "</option>
                  ";
            } else {
                // line 31
                echo "            \t  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "value", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "text", [], "any", false, false, false, 31);
                echo "</option>
                  ";
            }
            // line 33
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "          </select>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-status\">";
        // line 37
        echo ($context["entry_status"] ?? null);
        echo "</label>
          <select name=\"filter_order_status_id\" id=\"input-status\" class=\"form-control\">
            <option value=\"0\">";
        // line 39
        echo ($context["text_all_status"] ?? null);
        echo "</option>
                  ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 41
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 41) == ($context["filter_order_status_id"] ?? null))) {
                // line 42
                echo "            \t  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 42);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 42);
                echo "</option>
                  ";
            } else {
                // line 44
                echo "            \t  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 44);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 44);
                echo "</option>
                  ";
            }
            // line 46
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </select>
        </div>
        <div class=\"form-group text-right\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 50
        echo ($context["button_filter"] ?? null);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart\"></i> ";
        // line 58
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 65
        echo ($context["column_date_start"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 66
        echo ($context["column_date_end"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 67
        echo ($context["column_title"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 68
        echo ($context["column_orders"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 69
        echo ($context["column_total"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 74
        if (($context["orders"] ?? null)) {
            // line 75
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 76
                echo "            <tr>
              <td class=\"text-left\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_start", [], "any", false, false, false, 77);
                echo "</td>
              <td class=\"text-left\">";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_end", [], "any", false, false, false, 78);
                echo "</td>
              <td class=\"text-left\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 79);
                echo "</td>
              <td class=\"text-right\">";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["order"], "orders", [], "any", false, false, false, 80);
                echo "</td>
              <td class=\"text-right\">";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 81);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "            ";
        } else {
            // line 85
            echo "            <tr>
              <td class=\"text-center\" colspan=\"5\">";
            // line 86
            echo ($context["text_no_results"] ?? null);
            echo "</td>
            </tr>
            ";
        }
        // line 89
        echo "            </tbody>
            
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 94
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 95
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';
\t
\tvar filter_date_start = \$('input[name=\\'filter_date_start\\']').val();
\t
\tif (filter_date_start) {
\t\turl += '&filter_date_start=' + encodeURIComponent(filter_date_start);
\t}

\tvar filter_date_end = \$('input[name=\\'filter_date_end\\']').val();
\t
\tif (filter_date_end) {
\t\turl += '&filter_date_end=' + encodeURIComponent(filter_date_end);
\t}
\t\t
\tvar filter_group = \$('select[name=\\'filter_group\\']').val();
\t
\tif (filter_group) {
\t\turl += '&filter_group=' + encodeURIComponent(filter_group);
\t}
\t
\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();
\t
\tif (filter_order_status_id != 0) {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t}\t

\tlocation = 'index.php?route=report/report&code=sale_shipping&user_token=";
        // line 129
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 134
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/report/sale_shipping_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 134,  304 => 129,  267 => 95,  263 => 94,  256 => 89,  250 => 86,  247 => 85,  244 => 84,  235 => 81,  231 => 80,  227 => 79,  223 => 78,  219 => 77,  216 => 76,  211 => 75,  209 => 74,  201 => 69,  197 => 68,  193 => 67,  189 => 66,  185 => 65,  175 => 58,  164 => 50,  159 => 47,  153 => 46,  145 => 44,  137 => 42,  134 => 41,  130 => 40,  126 => 39,  121 => 37,  116 => 34,  110 => 33,  102 => 31,  94 => 29,  91 => 28,  87 => 27,  82 => 25,  71 => 19,  66 => 17,  55 => 11,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/report/sale_shipping_info.twig", "");
    }
}
