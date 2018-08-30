<?php

/* ./subviews/header/google_analytics.twig */
class __TwigTemplate_7e77f7a0470fa6ca91bc11506b155e938a4c053460f5e554d15b58b3ad7d8bf1 extends Twig_Template
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
        return new Twig_Source("{#
    LimeSurvey
    Copyright (C) 2007-2017 The LimeSurvey Project Team / Louis Gac
    All rights reserved.
    License: GNU/GPL License v2 or later, see LICENSE.php
    LimeSurvey is free software. This version may have been modified pursuant
    to the GNU General Public License, and as distributed it includes or
    is derivative of works licensed under the GNU General Public License or
    other free or open source software licenses.
    See COPYRIGHT.php for copyright notices and details.

    (¯`·._.·(¯`·._.· Google Analytics  ·._.·´¯)·._.·´¯)

    This file generates the scripts for Google Analytics, as set by user in survey settings.
    See: survey settings
#}
{% if aSurveyInfo.googleanalyticsapikey  is defined and aSurveyInfo.googleanalyticsapikey and aSurveyInfo.googleanalyticsstyle %}
    {% if aSurveyInfo.googleanalyticsstyle  is defined and aSurveyInfo.googleanalyticsstyle == 1 %}
        <script>
        (function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments) },i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '{{aSurveyInfo.googleanalyticsapikey}}', 'auto');  // Replace with your property ID.
        ga('send', 'pageview');
        </script>
    {% else %}
        <script>
        (function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments) }
        ,i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '{{ aSurveyInfo.googleanalyticsapikey }}', 'auto');
        ga('send', 'pageview');
        ga('send', 'pageview', '{{ aSurveyInfo.trackURL }}');
        </script>
    {% endif %}
{% endif %}
", "./subviews/header/google_analytics.twig", "C:\\xampp\\htdocs\\LimeSurvey\\themes\\survey\\vanilla\\views\\subviews\\header\\google_analytics.twig");
    }
}
