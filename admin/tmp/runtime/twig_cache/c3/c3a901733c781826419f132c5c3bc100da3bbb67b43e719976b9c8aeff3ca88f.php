<?php

/* /survey/questions/answer/list_dropdown/answer.twig */
class __TwigTemplate_5cb4c6858f5864413ae18836cf339d71d9ca62e817b0a002c34444f40bed4cfc extends Twig_Template
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
        $tags = array("if" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 15
        echo "
<!-- List Dropdown -->

<!-- answer-->

<div class=\"";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo "  form-group form-inline\">
    <select
            class=\"form-control list-question-select\"
            name=\"";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
            id=\"answer";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
            ";
        // line 25
        if (($context["dropdownSize"] ?? null)) {
            echo " size=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["dropdownSize"] ?? null));
            echo " ";
        }
        // line 26
        echo "            aria-labelledby=\"ls-question-text-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\"
    >
            ";
        // line 29
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sOptions"] ?? null));
        echo "
    </select>
        ";
        // line 32
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sOther"] ?? null));
        echo "

    ";
        // line 35
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "hiddenField", array(0 => ("java" . ($context["name"] ?? null)), 1 => ($context["value"] ?? null), 2 => array("id" => ("java" .         // line 36
($context["name"] ?? null)), "disabled" => "disabled")), "method"));
        // line 39
        echo "
</div>
<!-- end of answer  -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/list_dropdown/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  90 => 36,  88 => 35,  82 => 32,  76 => 29,  70 => 26,  64 => 25,  60 => 24,  56 => 23,  50 => 20,  43 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/list_dropdown/answer.twig", "/var/www/LimeSurvey/application/views/survey/questions/answer/list_dropdown/answer.twig");
    }
}
