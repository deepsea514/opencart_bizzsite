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

/* default/template/common/footer.twig */
class __TwigTemplate_7f13e2d0998a830f98e78a5c05657ffaa71dae41a104fad3488283d9b9fb56ab extends \Twig\Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3\">
        <h5>Onze producten</h5>
\t\t<ul class=\"list-unstyled\">
          <li><i class=\"fa fa-angle-right\"></i>        <a href=\"/\">Computers & Werkstations\t</a></li>
          <li><i class=\"fa fa-angle-right\"></i>        <a href=\"/\">Laptops & Notebooks</a></li>
          <li><i class=\"fa fa-angle-right\"></i>        <a href=\"/\">Tablets</a></li>
          <li><i class=\"fa fa-angle-right\"></i>        <a href=\"/\">Telefoons & Simkaarten</a></li>
          <li><i class=\"fa fa-angle-right\"></i>        <a href=\"/\">Telefoon & Tablet reparatie</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>Zakelijk diensten</h5>
        <ul class=\"list-unstyled\">
          <li><i class=\"fa fa-angle-right\"></i>        <a href=\"/\">Producten</a></li>
          <li><i class=\"fa fa-angle-right\"></i>        <a href=\"/\">Online Werkplek</a></li>
          <li><i class=\"fa fa-angle-right\"></i>        <a href=\"/\">Telecom & Internet</a></li>
          <li><i class=\"fa fa-angle-right\"></i>        <a href=\"/\">ICT & beveiliging</a></li>
          <li><i class=\"fa fa-angle-right\"></i>        <a href=\"/\">Websites</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>Bereikbaarheid</h5>
        <ul class=\"list-unstyled\">
          <li><a>De Mors 33, 7631 AH Ootmarsum</a></li>
          <li><a>Maandag     08.30 - 17:30 uur</a></li>
          <li><a>Dinsdag     08.30 - 17:30 uur</a></li>          
          <li><a>Woensdag    08.30 - 17:30 uur</a></li>
          <li><a>Donderdag   08.30 - 17:30 uur</a></li>
          <li><a>Vrijdag     08.30 - 17:30 uur</a></li>
\t\t  <li><a>Zaterdag    09.00 - 15:00 uur</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>";
        // line 38
        echo ($context["powered"] ?? null);
        echo "</p>
  </div>
</footer>
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 42
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 42);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 42);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 42);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 45
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 47,  103 => 45,  99 => 44,  86 => 42,  82 => 41,  76 => 38,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
