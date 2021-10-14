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

/* design/translation_form.twig */
class __TwigTemplate_52f45d6e6fca01dcd41950e304712d3205cb435255643c13383408ffb62cadbd extends \Twig\Template
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
        <button type=\"submit\" form=\"form-translation\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
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
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-translation\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-store\">";
        // line 29
        echo ($context["entry_store"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-control\">
                <option value=\"0\">";
        // line 32
        echo ($context["text_default"] ?? null);
        echo "</option>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 34
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 34) == ($context["store_id"] ?? null))) {
                // line 35
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 35);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 35);
                echo "</option>
                ";
            } else {
                // line 37
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 37);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 37);
                echo "</option>
                ";
            }
            // line 39
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 44
        echo ($context["entry_language"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"language_id\" id=\"input-language\" class=\"form-control\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 48
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48) == ($context["language_id"] ?? null))) {
                // line 49
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 49);
                echo "</option>
                ";
            } else {
                // line 51
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 51);
                echo "</option>
                ";
            }
            // line 53
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-route\">";
        // line 58
        echo ($context["entry_route"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"route\" id=\"input-route\" class=\"form-control\">
                ";
        // line 61
        if (($context["route"] ?? null)) {
            // line 62
            echo "                <option value=\"";
            echo ($context["route"] ?? null);
            echo "\" selected=\"selected\">";
            echo ($context["route"] ?? null);
            echo "</option>
                ";
        }
        // line 64
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 68
        echo ($context["entry_key"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"key\" id=\"input-key\" class=\"form-control\">
                ";
        // line 71
        if (($context["key"] ?? null)) {
            // line 72
            echo "                <option value=\"";
            echo ($context["key"] ?? null);
            echo "\" selected=\"selected\">";
            echo ($context["key"] ?? null);
            echo "</option>
                ";
        }
        // line 74
        echo "              </select>
              <input type=\"text\" name=\"key\" value=\"";
        // line 75
        echo ($context["key"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_key"] ?? null);
        echo "\" class=\"form-control\" />
              ";
        // line 76
        if (($context["error_key"] ?? null)) {
            // line 77
            echo "              <div class=\"text-danger\">";
            echo ($context["error_key"] ?? null);
            echo "</div>
              ";
        }
        // line 79
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-default\">";
        // line 82
        echo ($context["entry_default"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"default\" placeholder=\"";
        // line 84
        echo ($context["entry_default"] ?? null);
        echo "\" rows=\"5\" id=\"input-default\" class=\"form-control\" disabled=\"disabled\">";
        if (($context["default"] ?? null)) {
            echo ($context["default"] ?? null);
        }
        echo "</textarea>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-value\">";
        // line 88
        echo ($context["entry_value"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"value\" rows=\"5\" placeholder=\"";
        // line 90
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\">";
        echo ($context["value"] ?? null);
        echo "</textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
    ";
        // line 98
        if (($context["key"] ?? null)) {
            // line 99
            echo "    \$('select[name=\"store_id\"]').prop('disabled', true);
    \$('select[name=\"language_id\"]').prop('disabled', true);
    \$('select[name=\"route\"]').prop('disabled', true);
    \$('select[name=\"key\"]').prop('disabled', true);
    \$('input[name=\"key\"]').prop('disabled', true);
    ";
        } else {
            // line 105
            echo "    \$('select[name=\"language_id\"]').on('change', function() {
      \$.ajax({
        url: 'index.php?route=design/translation/path&user_token=";
            // line 107
            echo ($context["user_token"] ?? null);
            echo "&language_id=' + \$('select[name=\"language_id\"]').val(),
        dataType: 'json',
        beforeSend: function() {
          \$('select[name=\"route\"]').html('');
          \$('select[name=\"key\"]').html('');
          \$('input[name=\"key\"]').val('');
          \$('textarea[name=\"default\"]').val('');
          \$('select[name=\"store_id\"]').prop('disabled', true);
          \$('select[name=\"language_id\"]').prop('disabled', true);
          \$('select[name=\"route\"]').prop('disabled', true);
          \$('select[name=\"key\"]').prop('disabled', true);
          \$('input[name=\"key\"]').prop('disabled', true);
          \$('textarea[name=\"value\"]').prop('disabled', true);
        },
        complete: function() {
          \$('select[name=\"store_id\"]').prop('disabled', false);
          \$('select[name=\"language_id\"]').prop('disabled', false);
          \$('select[name=\"route\"]').prop('disabled', false);
        },
        success: function(json) {
          html = '<option value=\"\"></option>';

          if (json) {
            for (i = 0; i < json.length; i++) {
              if (i == 0) {
                html += '<option value=\"' + json[i] + '\" selected=\"selected\">' + json[i] + '</option>';
              } else {
                html += '<option value=\"' + json[i] + '\">' + json[i] + '</option>';
              }
            }
          }

          \$('select[name=\"route\"]').html(html);

          \$('select[name=\"route\"]').trigger('change');
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });

    var translation = [];

    \$('select[name=\"route\"]').on('change', function() {
      \$.ajax({
        url: 'index.php?route=design/translation/translation&user_token=";
            // line 153
            echo ($context["user_token"] ?? null);
            echo "&language_id=' + \$('select[name=\"language_id\"]').val() + '&path=' + \$('select[name=\"route\"]').val(),
        dataType: 'json',
        ";
            // line 155
            if ( !($context["key"] ?? null)) {
                // line 156
                echo "        beforeSend: function() {
          \$('select[name=\"key\"]').html('');
          \$('input[name=\"key\"]').val('');
          \$('textarea[name=\"default\"]').val('');
          \$('textarea[name=\"value\"]').val('');
          \$('select[name=\"store_id\"]').prop('disabled', true);
          \$('select[name=\"language_id\"]').prop('disabled', true);
          \$('select[name=\"route\"]').prop('disabled', true);
          \$('select[name=\"key\"]').prop('disabled', true);
          \$('textarea[name=\"value\"]').prop('disabled', true);
        },
        complete: function() {
          \$('select[name=\"store_id\"]').prop('disabled', false);
          \$('select[name=\"language_id\"]').prop('disabled', false);
          \$('select[name=\"route\"]').prop('disabled', false);
          \$('select[name=\"key\"]').prop('disabled', false);
          \$('textarea[name=\"value\"]').prop('disabled', false);
        },
        ";
            }
            // line 175
            echo "        success: function(json) {
          translation = [];

          html = '<option value=\"\"></option>';

          if (json) {
            for (i = 0; i < json.length; i++) {
              translation[json[i]['key']] = json[i]['value'];

              if (i == 0) {
                html += '<option value=\"' + json[i]['key'] + '\" selected=\"selected\">' + json[i]['key'] + '</option>';
              } else {
                html += '<option value=\"' + json[i]['key'] + '\">' + json[i]['key'] + '</option>';
              }
            }
          }

          \$('select[name=\"key\"]').html(html);

          \$('select[name=\"key\"]').trigger('change');
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });

    \$('select[name=\"language_id\"]').trigger('change');

    \$('select[name=\"key\"]').on('change', function() {
      if (\$(this).val()) {
        \$('textarea[name=\"default\"]').val(translation[\$('select[name=\"key\"]').val()]);
        \$('input[name=\"key\"]').val(\$('select[name=\"key\"]').val());

        \$('input[name=\"key\"]').prop('disabled', true);
      } else {
        \$('textarea[name=\"default\"]').val('');

        \$('input[name=\"key\"]').prop('disabled', false);
      }
    });
    ";
        }
        // line 217
        echo "  //--></script> 
</div>
";
        // line 219
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "design/translation_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 219,  422 => 217,  378 => 175,  357 => 156,  355 => 155,  350 => 153,  301 => 107,  297 => 105,  289 => 99,  287 => 98,  274 => 90,  269 => 88,  258 => 84,  253 => 82,  248 => 79,  242 => 77,  240 => 76,  234 => 75,  231 => 74,  223 => 72,  221 => 71,  215 => 68,  209 => 64,  201 => 62,  199 => 61,  193 => 58,  187 => 54,  181 => 53,  173 => 51,  165 => 49,  162 => 48,  158 => 47,  152 => 44,  146 => 40,  140 => 39,  132 => 37,  124 => 35,  121 => 34,  117 => 33,  113 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/translation_form.twig", "");
    }
}
