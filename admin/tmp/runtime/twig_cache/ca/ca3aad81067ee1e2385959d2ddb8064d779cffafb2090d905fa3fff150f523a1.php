<?php

/* ./survey/questions/answer/5pointchoice/rows/item_row.twig */
class __TwigTemplate_b40e1b2bb7c74a70c7118b7c82261be34a173a939bdfea7fd852788b1aacd3f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 14
        echo "
<!-- item_row -->
<li id=\"javatbd";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["value"] ?? null));
        echo "\" class=\"form-group answer-item radio-item ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["itemExtraClass"] ?? null));
        echo "\">
    <input
        type=\"radio\"
        name=\"";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
        id=\"answer";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["id"] ?? null));
        echo "\"
        value=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["value"] ?? null));
        echo "\"
        ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["checkedState"] ?? null));
        echo "
    />
    <label for=\"answer";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["id"] ?? null));
        echo "\" class=\"control-label radio-label\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["labelText"] ?? null));
        echo "</label>
</li>
<!-- end of item_row -->
";
    }

    public function getTemplateName()
    {
        return "./survey/questions/answer/5pointchoice/rows/item_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  68 => 22,  64 => 21,  60 => 20,  56 => 19,  47 => 16,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./survey/questions/answer/5pointchoice/rows/item_row.twig", "/var/www/LimeSurvey/application/views/survey/questions/answer/5pointchoice/rows/item_row.twig");
    }
}
