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

/* marketplace/marketplace_comment.twig */
class __TwigTemplate_4ad01846d813cd86ac8ef1d653fa748d94af98d0916f43bbf05b79e0cb92beb4 extends \Twig\Template
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
        if (($context["comments"] ?? null)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 3
                echo "<div id=\"comment";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "extension_comment_id", [], "any", false, false, false, 3);
                echo "\" class=\"media\">
  <div class=\"media-left\"><img src=\"";
                // line 4
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "image", [], "any", false, false, false, 4);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 4);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 4);
                echo "\" class=\"media-object\" /></div>
  <div class=\"media-body\">
    <p class=\"media-heading\">";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 6);
                echo " <span>";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "date_added", [], "any", false, false, false, 6);
                echo "</span></p>
    <p>";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 7);
                echo "</p>
    <div class=\"reply\">
      <div> ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["comment"], "reply", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "        
        ";
                    // line 11
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comment"], "reply", [], "any", false, false, false, 11));
                    foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                        // line 12
                        echo "        <div class=\"media\">
          <div class=\"media-left\"><img src=\"";
                        // line 13
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "image", [], "any", false, false, false, 13);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "member", [], "any", false, false, false, 13);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "member", [], "any", false, false, false, 13);
                        echo "\" class=\"media-object\" /></div>
          <div class=\"media-body\">
            <p class=\"media-heading\">";
                        // line 15
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "member", [], "any", false, false, false, 15);
                        echo " <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "date_added", [], "any", false, false, false, 15);
                        echo "</span></p>
            <p>";
                        // line 16
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "comment", [], "any", false, false, false, 16);
                        echo "</p>
          </div>
        </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "        
        ";
                    // line 21
                    if (twig_get_attribute($this->env, $this->source, $context["comment"], "next", [], "any", false, false, false, 21)) {
                        // line 22
                        echo "        <div class=\"text-center\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["comment"], "next", [], "any", false, false, false, 22);
                        echo "\" class=\"btn btn-block\">";
                        echo ($context["text_see_more"] ?? null);
                        echo "</a></div>
        ";
                    }
                    // line 24
                    echo "        
        ";
                }
                // line 25
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "refresh", [], "any", false, false, false, 25);
                echo "\" class=\"reply-refresh hide\">";
                echo ($context["button_refresh"] ?? null);
                echo "</a> </div>
    </div>
    <p class=\"text-right\">
      <button type=\"button\" class=\"btn btn-link btn-xs\">";
                // line 28
                echo ($context["button_reply"] ?? null);
                echo "</button>
    </p>
    <div class=\"reply-input-box\" style=\"display: none;\">
      <div class=\"media\">
        <div class=\"media-body\">
          <div class=\"form-group\">
            <label for=\"input-comment";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "extension_comment_id", [], "any", false, false, false, 34);
                echo "\">";
                echo ($context["text_comment_add"] ?? null);
                echo "</label>
            <textarea name=\"comment\" placeholder=\"Write your comment here...\" id=\"input-comment";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "extension_comment_id", [], "any", false, false, false, 35);
                echo "\" class=\"form-control\"></textarea>
          </div>
          <div class=\"text-right\"><a href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "add", [], "any", false, false, false, 37);
                echo "\" class=\"btn btn-primary btn-sm\">";
                echo ($context["button_comment"] ?? null);
                echo "</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo " <br/>
<div class=\"text-center\">";
            // line 45
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        }
        // line 46
        echo " 
";
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 46,  170 => 45,  167 => 44,  151 => 37,  146 => 35,  140 => 34,  131 => 28,  122 => 25,  118 => 24,  110 => 22,  108 => 21,  105 => 20,  95 => 16,  89 => 15,  80 => 13,  77 => 12,  73 => 11,  70 => 10,  68 => 9,  63 => 7,  57 => 6,  48 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/marketplace_comment.twig", "");
    }
}
