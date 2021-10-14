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

/* design/theme.twig */
class __TwigTemplate_7dfa4e604e4fdaf0daf528e277a5f0c542baf2c1b8c0ed3ad7a756da054dd459 extends \Twig\Template
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
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 16
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12\">
            <div class=\"list-group\">
              <div class=\"list-group-item\">
                <h4 class=\"list-group-item-heading\">";
        // line 23
        echo ($context["text_store"] ?? null);
        echo "</h4>
              </div>
              <div class=\"list-group-item\">
                <select name=\"store_id\" class=\"form-control\">
                  <option value=\"0\">";
        // line 27
        echo ($context["text_default"] ?? null);
        echo "</option>
                  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 29
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 29);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 29);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </select>
              </div>
            </div>
            <div class=\"list-group\">
              <div class=\"list-group-item\">
                <h4 class=\"list-group-item-heading\">";
        // line 36
        echo ($context["text_template"] ?? null);
        echo "</h4>
              </div>
              <div id=\"path\"></div>
            </div>
          </div>
          <div class=\"col-lg-9 col-md-9 col-sm-12\">
            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 42
        echo ($context["text_twig"] ?? null);
        echo "</div>
            <div id=\"recent\">
              <fieldset>
                <legend>";
        // line 45
        echo ($context["text_history"] ?? null);
        echo "</legend>
                <div id=\"history\"></div>
              </fieldset>
            </div>            
            <div id=\"code\" style=\"display: none;\">
              <ul class=\"nav nav-tabs\">
              </ul>
              <div class=\"tab-content\"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\"store_id\"]').on('change', function(e) {
\t\$.ajax({
\t\turl: 'index.php?route=design/theme/path&user_token=";
        // line 67
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('select[name=\"store_id\"]').val(),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\"store_id\"]').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\"store_id\"]').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '';

\t\t\tif (json['directory']) {
\t\t\t\tfor (i = 0; i < json['directory'].length; i++) {
\t\t\t\t\thtml += '<a href=\"' + json['directory'][i]['path'] + '\" class=\"list-group-item directory\">' + json['directory'][i]['name'] + ' <i class=\"fa fa-arrow-right fa-fw pull-right\"></i></a>';
\t\t\t\t}
\t\t\t}

\t\t\tif (json['file']) {
\t\t\t\tfor (i = 0; i < json['file'].length; i++) {
\t\t\t\t\thtml += '<a href=\"' + json['file'][i]['path'] + '\" class=\"list-group-item file\">' + json['file'][i]['name'] + ' <i class=\"fa fa-arrow-right fa-fw pull-right\"></i></a>';
\t\t\t\t}
\t\t\t}

\t\t\t\$('#path').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\"store_id\"]').trigger('change');

\$('#path').on('click', 'a.directory', function(e) {
\tconsole.log(\$(node).attr('href'));
\t
\te.preventDefault();

\tvar node = this;
\t
\t\$.ajax({
\t\turl: 'index.php?route=design/theme/path&user_token=";
        // line 108
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('select[name=\"store_id\"]').val() + '&path=' + \$(node).attr('href'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(node).find('i').removeClass('fa-arrow-right');
\t\t\t\$(node).find('i').addClass('fa-circle-o-notch fa-spin');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(node).find('i').removeClass('fa-circle-o-notch fa-spin');
\t\t\t\$(node).find('i').addClass('fa-arrow-right');
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '';

\t\t\tif (json['directory']) {
\t\t\t\tfor (i = 0; i < json['directory'].length; i++) {
\t\t\t\t\thtml += '<a href=\"' + json['directory'][i]['path'] + '\" class=\"list-group-item directory\">' + json['directory'][i]['name'] + ' <i class=\"fa fa-arrow-right fa-fw pull-right\"></i></a>';
\t\t\t\t}
\t\t\t}

\t\t\tif (json['file']) {
\t\t\t\tfor (i = 0; i < json['file'].length; i++) {
\t\t\t\t\thtml += '<a href=\"' + json['file'][i]['path'] + '\" class=\"list-group-item file\">' + json['file'][i]['name'] + ' <i class=\"fa fa-arrow-right fa-fw pull-right\"></i></a>';
\t\t\t\t}
\t\t\t}

\t\t\tif (json['back']) {
\t\t\t\thtml += '<a href=\"' + json['back']['path'] + '\" class=\"list-group-item directory\">' + json['back']['name'] + ' <i class=\"fa fa-arrow-left fa-fw pull-right\"></i></a>';
\t\t\t}

\t\t\t\$('#path').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#path').on('click', 'a.file', function(e) {
\te.preventDefault();

\tvar node = this;
\t
\t// Check if the file has an extension
\tvar pos = \$(node).attr('href').lastIndexOf('.');

\tif (pos != -1) {
\t\tvar tab_id = \$('select[name=\"store_id\"]').val() + '-' + \$(node).attr('href').slice(0, pos).replace(/\\//g, '-').replace(/_/g, '-');
\t} else {
\t\tvar tab_id = \$('select[name=\"store_id\"]').val() + '-' + \$(node).attr('href').replace(/\\//g, '-').replace(/_/g, '-');
\t}
\t
\tif (!\$('#tab-' + tab_id).length) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=design/theme/template&user_token=";
        // line 161
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('select[name=\"store_id\"]').val() + '&path=' + \$(node).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(node).find('i').removeClass('fa-arrow-right');
\t\t\t\t\$(node).find('i').addClass('fa-circle-o-notch fa-spin');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(node).find('i').removeClass('fa-circle-o-notch fa-spin');
\t\t\t\t\$(node).find('i').addClass('fa-arrow-right');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['code']) {
\t\t\t\t\t\$('#code').show();
\t\t\t\t\t\$('#recent').hide();

\t\t\t\t\t\$('.nav-tabs').append('<li><a href=\"#tab-' + tab_id + '\" data-toggle=\"tab\">' + \$(node).attr('href').split('/').join(' / ') + '&nbsp;&nbsp;<i class=\"fa fa-minus-circle\"></i></a></li>');

\t\t\t\t\thtml  = '<div class=\"tab-pane\" id=\"tab-' + tab_id + '\">';
\t\t\t\t\thtml += '  <textarea name=\"code\" rows=\"10\"></textarea>';
\t\t\t\t\thtml += '  <input type=\"hidden\" name=\"store_id\" value=\"' + \$('select[name=\"store_id\"]').val() + '\" />';
\t\t\t\t\thtml += '  <input type=\"hidden\" name=\"path\" value=\"' + \$(node).attr('href') + '\" />';
\t\t\t\t\thtml += '  <br/>';
\t\t\t\t\thtml += '  <div class=\"pull-right\">';
\t\t\t\t\thtml += '    <button type=\"button\" data-loading-text=\"";
        // line 184
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-floppy-o\"></i> ";
        echo ($context["button_save"] ?? null);
        echo "</button>';
\t\t\t\t\thtml += '    <button data-loading-text=\"";
        // line 185
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-recycle\"></i> ";
        echo ($context["button_reset"] ?? null);
        echo "</button>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';

\t\t\t\t\t\$('.tab-content').append(html);

\t\t\t\t\t\$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');
\t\t\t\t\t
\t\t\t\t\t// Initialize codemirrror
\t\t\t\t\tvar codemirror = CodeMirror.fromTextArea(document.querySelector('.tab-content .active textarea'), {
\t\t\t\t\t\tmode: 'text/html',
\t\t\t\t\t\theight: '500px',
\t\t\t\t\t\tlineNumbers: true,
\t\t\t\t\t\tautofocus: true,
\t\t\t\t\t\ttheme: 'monokai'
\t\t\t\t\t});

\t\t\t\t\tcodemirror.setValue(json['code']);
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t} else {
\t\t\$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');
\t}
});

\$('.nav-tabs').on('click', 'i.fa-minus-circle', function(e) {
\te.preventDefault();

\tif (\$(this).parent().parent().is('li.active')) {
\t\tindex = \$(this).parent().parent().index();

\t\tif (index == 0) {
\t\t\t\$(this).parent().parent().parent().find('li').eq(index + 1).find('a').tab('show');
\t\t} else {
\t\t\t\$(this).parent().parent().parent().find('li').eq(index - 1).find('a').tab('show');
\t\t}
\t}

\t\$(this).parent().parent().remove();

\t\$(\$(this).parent().attr('href')).remove();

\tif (!\$('#code > ul > li').length) {
\t\t\$('#code').hide();
\t\t\$('#recent').show();
\t}
});

\$('.tab-content').on('click', '.btn-primary', function(e) {
\tvar node = this;

\tvar editor = \$('.tab-content .active .CodeMirror')[0].CodeMirror;
\t\t\t\t
\t\$.ajax({
\t\turl: 'index.php?route=design/theme/save&user_token=";
        // line 243
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('.tab-content .active input[name=\"store_id\"]').val() + '&path=' + \$('.tab-content .active input[name=\"path\"]').val(),
\t\ttype: 'post',
\t\tdata: 'code=' + encodeURIComponent(editor.getValue()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(node).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(node).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t
\t\t\t\t\$('#history').load('index.php?route=design/theme/history&user_token=";
        // line 263
        echo ($context["user_token"] ?? null);
        echo "');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('.tab-content').on('click', '.btn-danger', function(e) {
\tif (confirm('";
        // line 273
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\tvar node = this;

\t\t\$.ajax({
\t\t\turl: 'index.php?route=design/theme/reset&user_token=";
        // line 277
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('.tab-content .active input[name=\"store_id\"]').val() + '&path=' + \$('.tab-content .active input[name=\"path\"]').val(),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(node).button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(node).button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();
\t\t\t\t
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\t
\t\t\t\tvar codemirror = \$('.tab-content .active .CodeMirror')[0].CodeMirror;
\t\t\t\t
\t\t\t\tcodemirror.setValue(json['code']);
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});

\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#history').load(this.href);
});

\$('#history').load('index.php?route=design/theme/history&user_token=";
        // line 313
        echo ($context["user_token"] ?? null);
        echo "');

\$('#history').on('click', '.btn-primary', function(e) {
\te.preventDefault();

\tvar node = this;
\t
\t// Check if the file has an extension
\tvar tab_id = \$(node).parent().parent().find('input[name=\"store_id\"]').val() + '-' + \$(node).parent().parent().find('input[name=\"path\"]').val().replace(/\\//g, '-').replace(/_/g, '-');

\tif (!\$('#tab-' + tab_id).length) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=design/theme/template&user_token=";
        // line 325
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$(node).parent().parent().find('input[name=\"store_id\"]').val() + '&path=' + \$(node).parent().parent().find('input[name=\"path\"]').val(),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(node).button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(node).button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['code']) {
\t\t\t\t\t\$('#code').show();
\t\t\t\t\t\$('#recent').hide();

\t\t\t\t\t\$('.nav-tabs').append('<li><a href=\"#tab-' + tab_id + '\" data-toggle=\"tab\">' + \$(node).parent().parent().find('input[name=\"path\"]').val().split('/').join(' / ') + '&nbsp;&nbsp;<i class=\"fa fa-minus-circle\"></i></a></li>');

\t\t\t\t\thtml  = '<div class=\"tab-pane\" id=\"tab-' + tab_id + '\">';
\t\t\t\t\thtml += '  <textarea name=\"code\" rows=\"10\"></textarea>';
\t\t\t\t\thtml += '  <input type=\"hidden\" name=\"store_id\" value=\"' + \$(node).parent().parent().find('input[name=\"store_id\"]').val() + '\" />';
\t\t\t\t\thtml += '  <input type=\"hidden\" name=\"path\" value=\"' + \$(node).parent().parent().find('input[name=\"path\"]').val() + '.twig\" />';
\t\t\t\t\thtml += '  <br/>';
\t\t\t\t\thtml += '  <div class=\"pull-right\">';
\t\t\t\t\thtml += '    <button type=\"button\" data-loading-text=\"";
        // line 346
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-floppy-o\"></i> ";
        echo ($context["button_save"] ?? null);
        echo "</button>';
\t\t\t\t\thtml += '    <button data-loading-text=\"";
        // line 347
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-recycle\"></i> ";
        echo ($context["button_reset"] ?? null);
        echo "</button>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';

\t\t\t\t\t\$('.tab-content').append(html);

\t\t\t\t\t\$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');
\t\t\t\t\t
\t\t\t\t\t// Initialize codemirrror
\t\t\t\t\tvar codemirror = CodeMirror.fromTextArea(document.querySelector('.tab-content .active textarea'), {
\t\t\t\t\t\tmode: 'text/html',
\t\t\t\t\t\theight: '500px',
\t\t\t\t\t\tlineNumbers: true,
\t\t\t\t\t\tautofocus: true,
\t\t\t\t\t\ttheme: 'monokai'
\t\t\t\t\t});

\t\t\t\t\tcodemirror.setValue(json['code']);
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t} else {
\t\t\$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');
\t}
});

\$('#history').on('click', '.btn-danger', function(e) {
\te.preventDefault();
\t
\tif (confirm('";
        // line 379
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\tvar node = this;

\t\t\$.ajax({
\t\t\turl: \$(node).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(node).button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(node).button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();
\t\t\t\t
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t
\t\t\t\t\t\$('#history').load('index.php?route=design/theme/history&user_token=";
        // line 401
        echo ($context["user_token"] ?? null);
        echo "');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script> 
</div>
";
        // line 412
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "design/theme.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 412,  540 => 401,  515 => 379,  478 => 347,  472 => 346,  448 => 325,  433 => 313,  394 => 277,  387 => 273,  374 => 263,  351 => 243,  288 => 185,  282 => 184,  256 => 161,  200 => 108,  156 => 67,  131 => 45,  125 => 42,  116 => 36,  109 => 31,  98 => 29,  94 => 28,  90 => 27,  83 => 23,  73 => 16,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/theme.twig", "");
    }
}
