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

/* marketplace/installer_history.twig */
class __TwigTemplate_2ebba63ecf5593e06be617ebf8990f7b7c3da03faf48e2dce0d7663d8625706e extends \Twig\Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th>";
        // line 5
        echo ($context["column_filename"] ?? null);
        echo "</th>
        <th>";
        // line 6
        echo ($context["column_date_added"] ?? null);
        echo "</th>
        <th class=\"text-right\">";
        // line 7
        echo ($context["column_action"] ?? null);
        echo "</th>
      </tr>
    </thead>
    <tbody>
    
    ";
        // line 12
        if (($context["histories"] ?? null)) {
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 14
                echo "    <tr>
      <td>";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["history"], "filename", [], "any", false, false, false, 15);
                echo "</td>
      <td>";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 16);
                echo "</td>
      <td class=\"text-right\"><button type=\"button\" value=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["history"], "extension_install_id", [], "any", false, false, false, 17);
                echo "\" data-loading=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_uninstall"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button></td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "    <tr>
      <td colspan=\"3\" class=\"text-center\">";
            // line 22
            echo ($context["text_no_results"] ?? null);
            echo "</td>
    </tr>
    ";
        }
        // line 25
        echo "    </tbody>
    
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 30
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 31
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "marketplace/installer_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 31,  109 => 30,  102 => 25,  96 => 22,  93 => 21,  90 => 20,  77 => 17,  73 => 16,  69 => 15,  66 => 14,  61 => 13,  59 => 12,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/installer_history.twig", "");
    }
}
