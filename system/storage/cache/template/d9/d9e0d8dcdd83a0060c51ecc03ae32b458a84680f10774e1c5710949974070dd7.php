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

/* marketplace/marketplace_info.twig */
class __TwigTemplate_42cb4a55fb4647cabb1208a7cdd11f73bdd4d988b111971fc783c11e5e465c3d extends \Twig\Template
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
      <div class=\"pull-right\">";
        // line 5
        if ( !($context["error_signature"] ?? null)) {
            // line 6
            echo "        <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_opencart"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-cog\"></i></button>
        ";
        } else {
            // line 8
            echo "        <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo ($context["error_signature"] ?? null);
            echo "\"  data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fa fa-exclamation-triangle\"></i></button>
        ";
        }
        // line 9
        echo " <a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div id=\"marketplace-extension-info\" class=\"container-fluid\">";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 25
        echo ($context["name"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"row extension-info\">
          <div class=\"col-sm-8\">";
        // line 29
        if (($context["banner"] ?? null)) {
            // line 30
            echo "            <div id=\"banner\" class=\"text-center thumbnail\"><img src=\"";
            echo ($context["banner"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></div>
            ";
        }
        // line 32
        echo "            <div class=\"row thumbnails\">";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 33
            echo "              <div class=\"col-xs-4 col-sm-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 33);
            echo "\" class=\"thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 33);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 33);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 33);
            echo "\" class=\"img-responsive\" /></a></div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo " </div>
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-documentation\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_documentation"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-download\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_download"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-comment\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_comment"] ?? null);
        echo " (";
        echo ($context["comment_total"] ?? null);
        echo ")</a></li>
            </ul>
            <div class=\"tab-content\">
              <div id=\"tab-description\" class=\"tab-pane active\">";
        // line 42
        echo ($context["description"] ?? null);
        echo "</div>
              <div id=\"tab-documentation\" class=\"tab-pane\">";
        // line 43
        echo ($context["documentation"] ?? null);
        echo "</div>
              <div id=\"tab-download\" class=\"tab-pane\">
                <fieldset>
                  <legend>";
        // line 46
        echo ($context["text_progress"] ?? null);
        echo "</legend>
                  <div id=\"progress\">
                    <div class=\"progress\">
                      <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
                    </div>
                    <div id=\"progress-text\"></div>
                  </div>
                  <hr />
                </fieldset>
                <fieldset>
                  <legend>";
        // line 56
        echo ($context["text_available"] ?? null);
        echo "</legend>
                  <table class=\"table table-bordered\">
                    <thead>
                    <th>";
        // line 59
        echo ($context["text_name"] ?? null);
        echo "</th>
                      <th>";
        // line 60
        echo ($context["text_date_added"] ?? null);
        echo "</th>
                      <th class=\"text-right\">";
        // line 61
        echo ($context["text_action"] ?? null);
        echo "</th>
                        </thead>
                    <tbody>
                    
                    ";
        // line 65
        if (($context["downloads"] ?? null)) {
            // line 66
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["downloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 67
                echo "                    <tr>
                      <td>";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["download"], "name", [], "any", false, false, false, 68);
                echo "</td>
                      <td>";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["download"], "date_added", [], "any", false, false, false, 69);
                echo "</td>
                      <td class=\"text-right\">";
                // line 70
                if (twig_get_attribute($this->env, $this->source, $context["download"], "extension_install_id", [], "any", false, false, false, 70)) {
                    // line 71
                    echo "                        <button type=\"button\" data-install=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "extension_download_id", [], "any", false, false, false, 71);
                    echo "\" data-uninstall=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "extension_install_id", [], "any", false, false, false, 71);
                    echo "\" data-loading=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i> ";
                    echo ($context["button_uninstall"] ?? null);
                    echo "</button>
                        ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source,                 // line 72
$context["download"], "filename", [], "any", false, false, false, 72),  -10) == ".ocmod.zip")) {
                    // line 73
                    echo "                        <button type=\"button\" data-install=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "extension_download_id", [], "any", false, false, false, 73);
                    echo "\" data-uninstall=\"\" data-loading=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-primary\"";
                    if ( !twig_get_attribute($this->env, $this->source, $context["download"], "status", [], "any", false, false, false, 73)) {
                        echo " disabled";
                    }
                    echo "><i class=\"fa fa-download\"></i> ";
                    echo ($context["button_install"] ?? null);
                    echo "</button>
                        ";
                } else {
                    // line 75
                    echo "                        <button type=\"button\" data-install=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "extension_download_id", [], "any", false, false, false, 75);
                    echo "\" data-uninstall=\"\" data-loading=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-primary\"";
                    if ( !twig_get_attribute($this->env, $this->source, $context["download"], "status", [], "any", false, false, false, 75)) {
                        echo " disabled";
                    }
                    echo "><i class=\"fa fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                        ";
                }
                // line 76
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                    ";
        } else {
            // line 80
            echo "                    <tr>
                      <td colspan=\"3\" class=\"text-center\">";
            // line 81
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 84
        echo "                    </tbody>
                    
                  </table>
                </fieldset>
              </div>
              <div id=\"tab-comment\" class=\"tab-pane\">
                <fieldset>
                  <legend>";
        // line 91
        echo ($context["text_comment_add"] ?? null);
        echo "</legend>
                  <div class=\"form-group\">
                    <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 93
        echo ($context["text_write"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                  <div class=\"text-right\">
                    <button type=\"button\" id=\"button-comment\" class=\"btn btn-primary\">";
        // line 96
        echo ($context["button_comment"] ?? null);
        echo "</button>
                  </div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
        // line 101
        echo ($context["text_comment"] ?? null);
        echo "</legend>
                  <div id=\"comment\"></div>
                </fieldset>
              </div>
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div id=\"buy\" class=\"well\">";
        // line 108
        if (((($context["license"] ?? null) == "1") &&  !($context["purchased"] ?? null))) {
            // line 109
            echo "              <button id=\"button-buy\" class=\"btn btn-success btn-lg btn-block\">";
            echo ($context["button_purchase"] ?? null);
            echo "</button>
              ";
        }
        // line 111
        echo "              <div id=\"price\" class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 112
        echo ($context["text_price"] ?? null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 113
        if (($context["license"] ?? null)) {
            // line 114
            echo "                  ";
            echo ($context["price"] ?? null);
            echo "
                  ";
        } else {
            // line 116
            echo "                  ";
            echo ($context["text_free"] ?? null);
            echo "
                  ";
        }
        // line 117
        echo "</div>
              </div>
              <hr>
              <ul class=\"list-check\">
                <li>";
        // line 121
        echo ($context["text_partner"] ?? null);
        echo "</li>
                <li>";
        // line 122
        echo ($context["text_support"] ?? null);
        echo "</li>
                <li>";
        // line 123
        echo ($context["text_documentation"] ?? null);
        echo "</li>
              </ul>
              <hr>
              <div class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 127
        echo ($context["text_rating"] ?? null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 129
            echo "                  ";
            if ((($context["rating"] ?? null) >= $context["i"])) {
                echo "<i class=\"fa fa-star\"></i>";
            } else {
                echo "<i class=\"fa fa-star-o\"></i>";
            }
            // line 130
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " (";
        echo ($context["rating_total"] ?? null);
        echo ")</div>
              </div>
              <hr>
              <div class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 134
        echo ($context["text_date_modified"] ?? null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 135
        echo ($context["date_modified"] ?? null);
        echo "</div>
              </div>
              <hr>
              <div class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 139
        echo ($context["text_date_added"] ?? null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 140
        echo ($context["date_added"] ?? null);
        echo "</div>
              </div>
            </div>
            <div id=\"sales\" class=\"well\"><i class=\"opencart-icon-cart-mini\"></i> <strong>";
        // line 143
        echo ($context["sales"] ?? null);
        echo "</strong> ";
        echo ($context["text_sales"] ?? null);
        echo "</div>
            <div id=\"sales\" class=\"well\"><i class=\"opencart-icon-cart-mini\"></i> <strong>";
        // line 144
        echo ($context["downloaded"] ?? null);
        echo "</strong> ";
        echo ($context["text_downloaded"] ?? null);
        echo "</div>
            <div class=\"well\">
              <div class=\"media\">
                <div class=\"media-left media-middle\"><img src=\"";
        // line 147
        echo ($context["member_image"] ?? null);
        echo "\" alt=\"";
        echo ($context["member_username"] ?? null);
        echo "\" title=\"";
        echo ($context["member_username"] ?? null);
        echo "\" class=\"media-object img-circle\"></div>
                <div class=\"media-body\"> <span><a href=\"";
        // line 148
        echo ($context["filter_member"] ?? null);
        echo "\">";
        echo ($context["member_username"] ?? null);
        echo "</a></span><br/>
                  <small>";
        // line 149
        echo ($context["text_member_since"] ?? null);
        echo " ";
        echo ($context["member_date_added"] ?? null);
        echo "</small></div>
              </div>
              <br/>
              <a href=\"";
        // line 152
        echo ($context["filter_member"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_view_all"] ?? null);
        echo "</a> <a href=\"https://www.opencart.com/index.php?route=support/seller&amp;extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "\" target=\"_blank\" class=\"btn btn-ghost-dark btn-lg btn-block\">";
        echo ($context["button_get_support"] ?? null);
        echo "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-opencart').on('click', function(e) {
\t\$('#modal-opencart').remove();
\t
\t\$.ajax({
\t\turl: 'index.php?route=marketplace/api&user_token=";
        // line 163
        echo ($context["user_token"] ?? null);
        echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-opencart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-opencart').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('body').append('<div id=\"modal-opencart\" class=\"modal\">' + html + '</div>');
\t\t\t
\t\t\t\$('#modal-opencart').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#button-buy').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-purchase').remove();

\thtml  = '<div id=\"modal-purchase\" class=\"modal\">';
\thtml += '  <div class=\"modal-dialog\">';
\thtml += '    <div class=\"modal-content\">';
\thtml += '      <div class=\"modal-header\">';
\thtml += '        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>';
\thtml += '        <h4 class=\"modal-title\">";
        // line 193
        echo ($context["text_purchase"] ?? null);
        echo "</h4>';
\thtml += '      </div>';
\thtml += '      <div class=\"modal-body\">';
\thtml += '        <p>";
        // line 196
        echo ($context["text_pin"] ?? null);
        echo "</p>';
\thtml += '        <p>";
        // line 197
        echo ($context["text_secure"] ?? null);
        echo "</p>';
\thtml += '        <div class=\"form-group\">';
\thtml += '          <label for=\"input-pin\">";
        // line 199
        echo ($context["entry_pin"] ?? null);
        echo "</label>';
\thtml += '          <input type=\"password\" name=\"pin\" value=\"\" placeholder=\"";
        // line 200
        echo ($context["entry_pin"] ?? null);
        echo "\" id=\"input-pin\" class=\"form-control\" />';
\thtml += '        </div>';
\thtml += '        <div class=\"form-group text-right\">';
\thtml += '          <button type=\"button\" id=\"button-purchase\" data-loading-text=\"";
        // line 203
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg\">";
        echo ($context["button_purchase"] ?? null);
        echo "</button>';
\thtml += '        </div>';
\thtml += '      </div>';
\thtml += '    </div>';
\thtml += '  </div>';
\thtml += '</div>';

\t\$('body').append(html);

\t\$('#modal-purchase').modal('show');
});

\$('body').on('click', '#modal-purchase #button-purchase', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/marketplace/purchase&user_token=";
        // line 221
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'pin\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#modal-purchase .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#modal-purchase').modal('hide');
\t\t\t\t
\t\t\t\t\$('#tab-download .btn-primary').prop('disabled', false);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Install
\$('#tab-download').on('click', '.btn-primary', function(e) {
\te.preventDefault();

\tvar element = this;

\t// Reset everything
\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-success');
\t\$('#progress-text').html('');

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/marketplace/download&user_token=";
        // line 264
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "&extension_download_id=' + \$(this).attr('data-install'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-download').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button</div>');
\t\t\t}

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t\t\t\t\t
\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-bar').css('width', '20%');
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}
\t\t\t\t\t\t
\t\t\tif (json['extension_install_id']) {
\t\t\t\t\$(element).replaceWith('<button type=\"button\" data-install=\"' + \$(element).attr('data-install') + '\" data-uninstall=\"' + json['extension_install_id'] + '\" data-loading=\"";
        // line 289
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i> ";
        echo ($context["button_uninstall"] ?? null);
        echo "</button>');
\t\t\t}
\t\t\t\t\t\t
\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], element, 1);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

function next(url, element, i) {
\ti = i + 1;

\t\$.ajax({
\t\turl: url,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#progress-bar').css('width', (i * 20) + '%');

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');
\t\t\t}
\t\t\t
\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], element, i);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

// Uninstall
\$('#tab-download').on('click', ' .btn-danger', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
\t\$('#progress-text').html('');

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/install/uninstall&user_token=";
        // line 346
        echo ($context["user_token"] ?? null);
        echo "&extension_install_id=' + \$(this).attr('data-uninstall'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html(json['error']);
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').css('width', '100%');
\t\t\t\t\$('#progress-bar').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html(json['success']);
\t\t\t\t
\t\t\t\t\$(element).replaceWith('<button type=\"button\" data-install=\"' + \$(element).attr('data-install') + '\" data-uninstall=\"\" data-loading=\"";
        // line 365
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-download\"></i> ";
        echo ($context["button_install"] ?? null);
        echo "</button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#comment').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#comment').load(this.href);
});

// Comment
\$('#comment').load('index.php?route=marketplace/marketplace/comment&user_token=";
        // line 381
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');

// Add comment
\$('#button-comment').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=marketplace/marketplace/addcomment&user_token=";
        // line 386
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'comment=' + encodeURIComponent(\$('textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-comment').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-comment').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-comment').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-comment').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#comment').load('index.php?route=marketplace/marketplace/comment&user_token=";
        // line 406
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');
\t\t\t
\t\t\t\t\$('textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Next replies
\$('#comment').on('click', '.btn-block', function(e) {
\te.preventDefault();
\t
\tvar element = this;
\t
\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$(element).parent().parent().parent().append(html);
\t\t\t
\t\t\t\$(element).parent().remove();
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Reply
\$('#comment').on('click', '.btn-link', function(e) {
\te.preventDefault();

\t\$(this).parent().parent().find('.reply-input-box').toggle();
});

// Add reply
\$('#comment').on('click', '.btn-primary', function(e) {
\te.preventDefault();
\t
\tvar element = this;
\t
\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'comment=' + encodeURIComponent(\$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val()),\t\t
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$(element).parents('.reply-input-box').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$(element).parents('.reply-input-box').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(element).parents('.reply-input-box').parents('.media').find('.reply-refresh').last().trigger('click');
\t\t\t
\t\t\t\t\$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Refresh
\$('#comment').on('click', '.reply-refresh', function(e) {
\te.preventDefault();
\t
\tvar element = this;
\t
\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$(element).parent().replaceWith(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled:true
\t\t}
\t});
});
//--></script> 
</div>
";
        // line 524
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  908 => 524,  785 => 406,  760 => 386,  750 => 381,  729 => 365,  707 => 346,  645 => 289,  615 => 264,  567 => 221,  544 => 203,  538 => 200,  534 => 199,  529 => 197,  525 => 196,  519 => 193,  486 => 163,  466 => 152,  458 => 149,  452 => 148,  444 => 147,  436 => 144,  430 => 143,  424 => 140,  420 => 139,  413 => 135,  409 => 134,  396 => 130,  389 => 129,  385 => 128,  381 => 127,  374 => 123,  370 => 122,  366 => 121,  360 => 117,  354 => 116,  348 => 114,  346 => 113,  342 => 112,  339 => 111,  333 => 109,  331 => 108,  321 => 101,  313 => 96,  307 => 93,  302 => 91,  293 => 84,  287 => 81,  284 => 80,  281 => 79,  273 => 76,  259 => 75,  245 => 73,  243 => 72,  232 => 71,  230 => 70,  226 => 69,  222 => 68,  219 => 67,  214 => 66,  212 => 65,  205 => 61,  201 => 60,  197 => 59,  191 => 56,  178 => 46,  172 => 43,  168 => 42,  160 => 39,  156 => 38,  152 => 37,  148 => 36,  144 => 34,  129 => 33,  124 => 32,  114 => 30,  112 => 29,  105 => 25,  101 => 23,  93 => 19,  91 => 18,  86 => 15,  75 => 13,  71 => 12,  66 => 10,  59 => 9,  53 => 8,  47 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/marketplace_info.twig", "");
    }
}
