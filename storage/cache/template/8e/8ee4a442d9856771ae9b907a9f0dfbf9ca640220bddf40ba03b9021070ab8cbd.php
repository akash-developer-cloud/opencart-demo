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

/* extension/report/sale_coupon_info.twig */
class __TwigTemplate_7306cac35526d8c6b6d93a31b6d1eb9730ac35f55e19cc573fcdeb9a1542f9e2 extends \Twig\Template
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
        <div class=\"form-group text-right\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 25
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
        // line 33
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 40
        echo ($context["column_name"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 41
        echo ($context["column_code"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 42
        echo ($context["column_orders"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 43
        echo ($context["column_total"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 44
        echo ($context["column_action"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 49
        if (($context["coupons"] ?? null)) {
            // line 50
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 51
                echo "            <tr>
              <td class=\"text-left\">";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 52);
                echo "</td>
              <td class=\"text-left\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 53);
                echo "</td>
              <td class=\"text-right\">";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "orders", [], "any", false, false, false, 54);
                echo "</td>
              <td class=\"text-right\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "total", [], "any", false, false, false, 55);
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "edit", [], "any", false, false, false, 56);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            ";
        } else {
            // line 60
            echo "            <tr>
              <td class=\"text-center\" colspan=\"6\">";
            // line 61
            echo ($context["text_no_results"] ?? null);
            echo "</td>
            </tr>
            ";
        }
        // line 64
        echo "            </tbody>
            
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 69
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 70
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

\tlocation = 'index.php?route=report/report&code=sale_coupon&user_token=";
        // line 92
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 97
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/report/sale_coupon_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 97,  212 => 92,  187 => 70,  183 => 69,  176 => 64,  170 => 61,  167 => 60,  164 => 59,  153 => 56,  149 => 55,  145 => 54,  141 => 53,  137 => 52,  134 => 51,  129 => 50,  127 => 49,  119 => 44,  115 => 43,  111 => 42,  107 => 41,  103 => 40,  93 => 33,  82 => 25,  71 => 19,  66 => 17,  55 => 11,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/report/sale_coupon_info.twig", "");
    }
}
