<?php

/* ./subviews/navigation/save_links.twig */
class __TwigTemplate_9127b6645bde8b491248fa71789dc468c9279b060289c778fb9238b48fe18631 extends Twig_Template
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
        $tags = array("if" => 20);
        $filters = array();
        $functions = array("gT" => 24);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array()), "load", array()), "show", array()) == "Y")) {
            // line 21
            echo "    <!-- Load unfinished survey button -->
    <li class=\"";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "loadlinksli", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "loadlinksli", array()));
            echo ">
        <a href=\"#\" data-limesurvey-submit='{ \"loadall\":\"loadall\" }' class='";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "loadlinkslia", array()));
            echo " animate' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "loadlinkslia", array()));
            echo ">
            ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Load unfinished survey"));
            echo "
        </a>
    </li>
";
        }
        // line 28
        echo "
";
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array()), "save", array()), "show", array()) == "Y")) {
            // line 30
            echo "    <!-- Resume later button -->
    <li class=\"";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "savelinksli", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savelinksli", array()));
            echo ">
        <a href=\"#\" data-limesurvey-submit='{ \"saveall\":\"saveall\" }' class='";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "savelinkslia", array()));
            echo " animate'>
            ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Resume later"));
            echo "
        </a>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/save_links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  81 => 32,  75 => 31,  72 => 30,  70 => 29,  67 => 28,  60 => 24,  54 => 23,  48 => 22,  45 => 21,  43 => 20,);
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



    (¯`·._.·(¯`·._.·  Save/Load buttons  ·._.·´¯)·._.·´¯)

    Display the buttons to load/save a survey.
    There are many cases when those button are not shown:
    via survey configuration, at start page, when survey is completed, etc
#}
{% if aSurveyInfo.aNavigator.load.show == \"Y\" %}
    <!-- Load unfinished survey button -->
    <li class=\"{{ aSurveyInfo.class.loadlinksli }}\" {{ aSurveyInfo.attr.loadlinksli }}>
        <a href=\"#\" data-limesurvey-submit='{ \"loadall\":\"loadall\" }' class='{{ aSurveyInfo.class.loadlinkslia }} animate' {{ aSurveyInfo.attr.loadlinkslia }}>
            {{ gT('Load unfinished survey') }}
        </a>
    </li>
{% endif %}

{% if aSurveyInfo.aNavigator.save.show == \"Y\" %}
    <!-- Resume later button -->
    <li class=\"{{ aSurveyInfo.class.savelinksli }}\" {{ aSurveyInfo.attr.savelinksli }}>
        <a href=\"#\" data-limesurvey-submit='{ \"saveall\":\"saveall\" }' class='{{ aSurveyInfo.class.savelinkslia }} animate'>
            {{ gT('Resume later') }}
        </a>
    </li>
{% endif %}
", "./subviews/navigation/save_links.twig", "C:\\xampp\\htdocs\\LimeSurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\save_links.twig");
    }
}
