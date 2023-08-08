<?php

/* ./subviews/navigation/navigator_complement.twig */
class __TwigTemplate_bdfdd0161b555c000ea83cb30aa17585fbf933fac9d29e7fa096f947497b7241 extends Twig_Template
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
        $tags = array("if" => 6);
        $filters = array();
        $functions = array("include" => 12);

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

        // line 6
        if ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array()), "load", array()), "show", array()) == "Y") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array()), "save", array()), "show", array()) == "Y")) || ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "bShow", array()) == true)) || ($this->getAttribute(($context["aSurveyInfo"] ?? null), "bShowClearAll", array()) == true))) {
            // line 7
            echo "    <!-- extra tools, can be shown with javascript too (just remove ls-js-hidden class -->
    <div class=\"row ls-js-hidden\">
        <!-- Extra button container -->
        <div class=\"col-xs-6 clearall-saveall-wrapper\">
            ";
            // line 11
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array()), "load", array()), "show", array()) == "Y") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array()), "save", array()), "show", array()) == "Y"))) {
                // line 12
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/save_buttons.twig"));
                echo "
            ";
            }
            // line 14
            echo "            ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "bShowClearAll", array()) == true)) {
                // line 15
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/clearall_buttons.twig"));
                echo "
            ";
            }
            // line 17
            echo "        </div>
         <!-- Index container -->
        ";
            // line 19
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "bShow", array()) == true)) {
                // line 20
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/question_index_buttons.twig"));
                echo "
        ";
            }
            // line 22
            echo "    </div>
";
        }
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/navigator_complement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  80 => 22,  74 => 20,  72 => 19,  68 => 17,  62 => 15,  59 => 14,  53 => 12,  51 => 11,  45 => 7,  43 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/navigation/navigator_complement.twig", "/var/www/LimeSurvey/themes/survey/vanilla/views/subviews/navigation/navigator_complement.twig");
    }
}
