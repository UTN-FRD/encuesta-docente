<?php

/* ./subviews/header/google_analytics.twig */
class __TwigTemplate_ea2fc257b7b6b73452437014b59484c179d7b67ff48400ad4ecae27c3d4c3a0c extends Twig_Template
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
        $tags = array("if" => 17);
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

        // line 17
        if ((($this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", array(), "any", true, true) && $this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", array())) && $this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsstyle", array()))) {
            // line 18
            echo "    ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsstyle", array(), "any", true, true) && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsstyle", array()) == 1))) {
                // line 19
                echo "        <script>
        (function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments) },i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '";
                // line 25
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", array()));
                echo "', 'auto');  // Replace with your property ID.
        ga('send', 'pageview');
        </script>
    ";
            } else {
                // line 29
                echo "        <script>
        (function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments) }
        ,i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '";
                // line 34
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", array()));
                echo "', 'auto');
        ga('send', 'pageview');
        ga('send', 'pageview', '";
                // line 36
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "trackURL", array()));
                echo "');
        </script>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/google_analytics.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 36,  70 => 34,  63 => 29,  56 => 25,  48 => 19,  45 => 18,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/header/google_analytics.twig", "/var/www/LimeSurvey/themes/survey/vanilla/views/subviews/header/google_analytics.twig");
    }
}
