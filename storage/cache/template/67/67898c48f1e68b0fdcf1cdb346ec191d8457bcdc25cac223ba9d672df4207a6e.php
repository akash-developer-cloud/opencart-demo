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

/* extension/report/customer_reward_info.twig */
class __TwigTemplate_5ab46b4b961aff58361285a4d9dbd205ce45fecdd9439f736344af7f7d1f0881 extends \Twig\Template
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
  <div id=\"filter-report\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm\">
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
          <label class=\"control-label\" for=\"input-customer\">";
        // line 17
        echo ($context["entry_customer"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 18
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
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
        <div class=\"form-group text-right\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 29
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
        // line 37
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 44
        echo ($context["column_customer"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 45
        echo ($context["column_email"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 46
        echo ($context["column_customer_group"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 47
        echo ($context["column_status"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 48
        echo ($context["column_points"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 49
        echo ($context["column_orders"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 50
        echo ($context["column_total"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 51
        echo ($context["column_action"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 56
        if (($context["customers"] ?? null)) {
            // line 57
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 58
                echo "            <tr>
              <td class=\"text-left\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer", [], "any", false, false, false, 59);
                echo "</td>
              <td class=\"text-left\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 60);
                echo "</td>
              <td class=\"text-left\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_group", [], "any", false, false, false, 61);
                echo "</td>
              <td class=\"text-left\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "status", [], "any", false, false, false, 62);
                echo "</td>
              <td class=\"text-right\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "points", [], "any", false, false, false, 63);
                echo "</td>
              <td class=\"text-right\">";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "orders", [], "any", false, false, false, 64);
                echo "</td>
              <td class=\"text-right\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "total", [], "any", false, false, false, 65);
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 66);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            ";
        } else {
            // line 70
            echo "            <tr>
              <td class=\"text-center\" colspan=\"8\">";
            // line 71
            echo ($context["text_no_results"] ?? null);
            echo "</td>
            </tr>
            ";
        }
        // line 74
        echo "            </tbody>
            
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 79
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 80
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
\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();
\t
\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}
\t
\tvar filter_date_start = \$('input[name=\\'filter_date_start\\']').val();
\t
\tif (filter_date_start) {
\t\turl += '&filter_date_start=' + encodeURIComponent(filter_date_start);
\t}
\t
\tvar filter_date_end = \$('input[name=\\'filter_date_end\\']').val();
\t
\tif (filter_date_end) {
\t\turl += '&filter_date_end=' + encodeURIComponent(filter_date_end);
\t}
\t
\tlocation = 'index.php?route=report/report&code=customer_reward&user_token=";
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
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/report/customer_reward_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 121,  262 => 113,  254 => 108,  223 => 80,  219 => 79,  212 => 74,  206 => 71,  203 => 70,  200 => 69,  189 => 66,  185 => 65,  181 => 64,  177 => 63,  173 => 62,  169 => 61,  165 => 60,  161 => 59,  158 => 58,  153 => 57,  151 => 56,  143 => 51,  139 => 50,  135 => 49,  131 => 48,  127 => 47,  123 => 46,  119 => 45,  115 => 44,  105 => 37,  94 => 29,  83 => 23,  78 => 21,  70 => 18,  66 => 17,  55 => 11,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/report/customer_reward_info.twig", "");
    }
}
