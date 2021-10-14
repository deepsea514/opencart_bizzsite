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

/* marketplace/modification.twig */
class __TwigTemplate_4fff46cc9305930d1c35de689fea6ab512b95f6bfb1fb165353f62e20f771f9d extends \Twig\Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["refresh"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></a> <a href=\"";
        echo ($context["clear"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-eraser\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-modification').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
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
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo ($context["text_refresh"] ?? null);
        echo "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-log\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_log"] ?? null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <form action=\"";
        // line 39
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 45
        if ((($context["sort"] ?? null) == "name")) {
            // line 46
            echo "                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 48
            echo "                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        }
        // line 49
        echo "</td>
                      <td class=\"text-left\">";
        // line 50
        if ((($context["sort"] ?? null) == "author")) {
            // line 51
            echo "                        <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 53
            echo "                        <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                        ";
        }
        // line 54
        echo "</td>
                      <td class=\"text-left\">";
        // line 55
        if ((($context["sort"] ?? null) == "version")) {
            // line 56
            echo "                        <a href=\"";
            echo ($context["sort_version"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_version"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 58
            echo "                        <a href=\"";
            echo ($context["sort_version"] ?? null);
            echo "\">";
            echo ($context["column_version"] ?? null);
            echo "</a>
                        ";
        }
        // line 59
        echo "</td>
                      <td class=\"text-left\">";
        // line 60
        if ((($context["sort"] ?? null) == "status")) {
            // line 61
            echo "                        <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 63
            echo "                        <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        }
        // line 64
        echo "</td>
                      <td class=\"text-left\">";
        // line 65
        if ((($context["sort"] ?? null) == "date_added")) {
            // line 66
            echo "                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 68
            echo "                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        }
        // line 69
        echo "</td>
                      <td class=\"text-right\">";
        // line 70
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 74
        if (($context["modifications"] ?? null)) {
            // line 75
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modification"]) {
                // line 76
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 77
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 77), ($context["selected"] ?? null))) {
                    // line 78
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 78);
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 80
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 80);
                    echo "\" />
                        ";
                }
                // line 81
                echo "</td>
                      <td class=\"text-left\">";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "name", [], "any", false, false, false, 82);
                echo "</td>
                      <td class=\"text-left\">";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "author", [], "any", false, false, false, 83);
                echo "</td>
                      <td class=\"text-left\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "version", [], "any", false, false, false, 84);
                echo "</td>
                      <td class=\"text-left\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "status", [], "any", false, false, false, 85);
                echo "</td>
                      <td class=\"text-left\">";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "date_added", [], "any", false, false, false, 86);
                echo "</td>
                      <td class=\"text-right\">";
                // line 87
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 88);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_link"] ?? null);
                    echo "\" class=\"btn btn-info\" target=\"_blank\"><i class=\"fa fa-link\"></i></a>
                        ";
                } else {
                    // line 90
                    echo "                        <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fa fa-link\"></i></button>
                        ";
                }
                // line 92
                echo "                        ";
                if ( !twig_get_attribute($this->env, $this->source, $context["modification"], "enabled", [], "any", false, false, false, 92)) {
                    // line 93
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "enable", [], "any", false, false, false, 93);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_enable"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                        ";
                } else {
                    // line 95
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "disable", [], "any", false, false, false, 95);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_disable"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                        ";
                }
                // line 96
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                    ";
        } else {
            // line 100
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"7\">";
            // line 101
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 104
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 109
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 110
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-log\">
            <p>
              <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
        // line 115
        echo ($context["log"] ?? null);
        echo "</textarea>
            </p>
            <div class=\"text-center\"><a href=\"";
        // line 117
        echo ($context["clear_log"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 124
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "marketplace/modification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 124,  389 => 117,  384 => 115,  376 => 110,  372 => 109,  365 => 104,  359 => 101,  356 => 100,  353 => 99,  345 => 96,  337 => 95,  329 => 93,  326 => 92,  322 => 90,  314 => 88,  312 => 87,  308 => 86,  304 => 85,  300 => 84,  296 => 83,  292 => 82,  289 => 81,  283 => 80,  277 => 78,  275 => 77,  272 => 76,  267 => 75,  265 => 74,  258 => 70,  255 => 69,  247 => 68,  237 => 66,  235 => 65,  232 => 64,  224 => 63,  214 => 61,  212 => 60,  209 => 59,  201 => 58,  191 => 56,  189 => 55,  186 => 54,  178 => 53,  168 => 51,  166 => 50,  163 => 49,  155 => 48,  145 => 46,  143 => 45,  134 => 39,  127 => 35,  123 => 34,  116 => 30,  109 => 27,  101 => 23,  98 => 22,  90 => 18,  88 => 17,  82 => 13,  71 => 11,  67 => 10,  62 => 8,  55 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/modification.twig", "");
    }
}
