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

/* extension/report/customer_activity_info.twig */
class __TwigTemplate_629442edbdf36c31698e012066f9f5e466539eecd616b9ea833bd991d74160be extends \Twig\Template
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
          <label class=\"control-label\" for=\"input-customer\">";
        // line 9
        echo ($context["entry_customer"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 10
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-date-start\">";
        // line 13
        echo ($context["entry_date_start"] ?? null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_start\" value=\"";
        // line 15
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
        // line 21
        echo ($context["entry_date_end"] ?? null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_end\" value=\"";
        // line 23
        echo ($context["filter_date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-end\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-ip\">";
        // line 29
        echo ($context["entry_ip"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"filter_ip\" value=\"";
        // line 30
        echo ($context["filter_ip"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ip"] ?? null);
        echo "\" id=\"input-ip\" class=\"form-control\" />
        </div>
        <div class=\"form-group text-right\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 33
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
        // line 41
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 48
        echo ($context["column_comment"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 49
        echo ($context["column_ip"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 50
        echo ($context["column_date_added"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 55
        if (($context["activities"] ?? null)) {
            // line 56
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["activities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 57
                echo "            <tr>
              <td class=\"text-left\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["activity"], "comment", [], "any", false, false, false, 58);
                echo "</td>
              <td class=\"text-left\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["activity"], "ip", [], "any", false, false, false, 59);
                echo "</td>
              <td class=\"text-left\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["activity"], "date_added", [], "any", false, false, false, 60);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            ";
        } else {
            // line 64
            echo "            <tr>
              <td class=\"text-center\" colspan=\"3\">";
            // line 65
            echo ($context["text_no_results"] ?? null);
            echo "</td>
            </tr>
            ";
        }
        // line 68
        echo "            </tbody>
            
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 73
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 74
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

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_ip = \$('input[name=\\'filter_ip\\']').val();

\tif (filter_ip) {
\t\turl += '&filter_ip=' + encodeURIComponent(filter_ip);
\t}

\tvar filter_date_start = \$('input[name=\\'filter_date_start\\']').val();

\tif (filter_date_start) {
\t\turl += '&filter_date_start=' + encodeURIComponent(filter_date_start);
\t}

\tvar filter_date_end = \$('input[name=\\'filter_date_end\\']').val();

\tif (filter_date_end) {
\t\turl += '&filter_date_end=' + encodeURIComponent(filter_date_end);
\t}

\tlocation = 'index.php?route=report/report&code=customer_activity&user_token=";
        // line 108
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 113
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 121
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/report/customer_activity_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 121,  238 => 113,  230 => 108,  193 => 74,  189 => 73,  182 => 68,  176 => 65,  173 => 64,  170 => 63,  161 => 60,  157 => 59,  153 => 58,  150 => 57,  145 => 56,  143 => 55,  135 => 50,  131 => 49,  127 => 48,  117 => 41,  106 => 33,  98 => 30,  94 => 29,  83 => 23,  78 => 21,  67 => 15,  62 => 13,  54 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/report/customer_activity_info.twig", "");
    }
}
