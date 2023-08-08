<?php

/* ./subviews/survey/question_subviews/survey_question_help.twig */
class __TwigTemplate_b8975abd864e12d807613b2342ee1349c2f8ff2f60c6ec925b6a34763a03d4d8 extends Twig_Template
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
        $tags = array("if" => 22);
        $filters = array("raw" => 24);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw'),
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

        // line 19
        echo "
<!-- Survey question help -->
<div class=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "helpcontainer", array()));
        echo "  text-info col-xs-12 \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "helpcontainer", array()));
        echo ">
    ";
        // line 22
        if ($this->getAttribute($this->getAttribute(($context["aQuestion"] ?? null), "help", array()), "show", array())) {
            // line 23
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "lsquestionhelp", array()));
            echo "\">
            ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aQuestion"] ?? null), "help", array()), "text", array()));
            echo "
        </div>
    ";
        } else {
            // line 27
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aQuestion"] ?? null), "help", array()), "text", array()));
            echo "
    ";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question_subviews/survey_question_help.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 29,  66 => 27,  60 => 24,  55 => 23,  53 => 22,  47 => 21,  43 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/survey/question_subviews/survey_question_help.twig", "/var/www/LimeSurvey/themes/survey/vanilla/views/subviews/survey/question_subviews/survey_question_help.twig");
    }
}
