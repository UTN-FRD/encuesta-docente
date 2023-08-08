<?php

/* ./subviews/privacy/allinone_mode_welcome_privacy.twig */
class __TwigTemplate_c32a1e8c691d946bc9e5b3d4c6c4362abb0112d393d58b7ef513abe1b8be578d extends Twig_Template
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
        $tags = array("if" => 21);
        $filters = array();
        $functions = array("include" => 23);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('include')
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

        // line 20
        echo "
";
        // line 21
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", array()) == "A")) {
            // line 22
            echo "    ";
            if (( !$this->getAttribute(($context["aSurveyInfo"] ?? null), "showwelcome", array(), "any", true, true) || ( !$this->getAttribute(($context["aSurveyInfo"] ?? null), "showwelcome", array()) != "N"))) {
                // line 23
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/welcome.twig"));
                echo "
    ";
            }
            // line 25
            echo "
    ";
            // line 26
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "anonymized", array()) == "Y")) {
                // line 27
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/privacy/privacy.twig"));
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "./subviews/privacy/allinone_mode_welcome_privacy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 27,  60 => 26,  57 => 25,  51 => 23,  48 => 22,  46 => 21,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/privacy/allinone_mode_welcome_privacy.twig", "/var/www/LimeSurvey/themes/survey/vanilla/views/subviews/privacy/allinone_mode_welcome_privacy.twig");
    }
}
