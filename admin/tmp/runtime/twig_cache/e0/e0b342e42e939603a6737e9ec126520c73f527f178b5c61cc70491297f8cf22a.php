<?php

/* ./subviews/survey/question_subviews/question_text_content.twig */
class __TwigTemplate_ff8d38cece193e0577fc7afc72c807d7ab159f066a6e653f8e91a64e8bcfa198 extends Twig_Template
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
        $filters = array("raw" => 49);
        $functions = array("gT" => 27);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw'),
                array('gT')
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

";
        // line 22
        if (($this->getAttribute(($context["aQuestion"] ?? null), "mandatory", array()) != "")) {
            // line 23
            echo "    <!-- Add a visual information + just Mandatory string for aria : can be improved -->
    <div class=\"";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "questionasterix", array()));
            echo " pull-left\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "questionasterix", array()));
            echo " >
        <small class=\"";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "questionasterixsmall", array()));
            echo " text-danger fa fa-asterisk small\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "questionasterixsmall", array()));
            echo "></small>
        <span class=\"";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "questionasterixspan", array()));
            echo " sr-only text-danger\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "questionasterixspan", array()));
            echo " >
            ";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("(This question is mandatory)"));
            echo "
        </span>
    </div>
";
        }
        // line 31
        echo "
";
        // line 33
        if ($this->getAttribute(($context["aShow"] ?? null), "question_number", array())) {
            // line 34
            echo "    <span class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "questionnumber", array()));
            echo "' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "questionnumber", array()));
            echo " >
        ";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "number", array()));
            echo "
    </span>
";
        }
        // line 38
        echo "
";
        // line 40
        if ($this->getAttribute(($context["aShow"] ?? null), "question_code", array())) {
            // line 41
            echo "    <span class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "questioncode", array()));
            echo "' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "questioncode", array()));
            echo ">
        ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "code", array()));
            echo "
    </span>
";
        }
        // line 45
        echo "
";
        // line 47
        echo "<div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "questiontext", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "questiontext", array()));
        echo ">
    <div id=\"ls-question-text-";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "SGQ", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "lsquestiontext", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "lsquestiontext", array()));
        echo ">
        ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "text", array()));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question_subviews/question_text_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  123 => 48,  116 => 47,  113 => 45,  107 => 42,  100 => 41,  98 => 40,  95 => 38,  89 => 35,  82 => 34,  80 => 33,  77 => 31,  70 => 27,  64 => 26,  58 => 25,  52 => 24,  49 => 23,  47 => 22,  43 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/survey/question_subviews/question_text_content.twig", "/var/www/LimeSurvey/themes/survey/vanilla/views/subviews/survey/question_subviews/question_text_content.twig");
    }
}
