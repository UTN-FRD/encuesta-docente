<?php

/* layout_global.twig */
class __TwigTemplate_9edde83101166d33f628220733da02ca10800cb844e9d6a3d4d8ac4c7a9767d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'ajaxindicator' => array($this, 'block_ajaxindicator'),
            'pjaxbegin' => array($this, 'block_pjaxbegin'),
            'body' => array($this, 'block_body'),
            'nav_bar' => array($this, 'block_nav_bar'),
            'progress' => array($this, 'block_progress'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'pjaxend' => array($this, 'block_pjaxend'),
            'themescripts' => array($this, 'block_themescripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 72, "if" => 76, "set" => 114, "include" => 115);
        $filters = array();
        $functions = array("include" => 74, "registerScript" => 122);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'set', 'include'),
                array(),
                array('include', 'registerScript')
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

        // line 69
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo "\" dir=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo " dir-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "html", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "html", array()));
        echo ">
    ";
        // line 72
        $this->displayBlock('head', $context, $blocks);
        // line 76
        echo "    <body style=\"padding-top: 90px;\" class=\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "body", array()));
        echo " font-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "font", array()));
        echo " lang-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyformat", array()));
        echo " ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "brandlogo", array()) == "on")) {
            echo "brand-logo";
        }
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "body", array()));
        echo " >
        ";
        // line 77
        if ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "ajaxmode", array()) == "on") && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array()) != 1))) {
            // line 78
            echo "            ";
            $this->displayBlock('ajaxindicator', $context, $blocks);
            // line 82
            echo "            
        ";
        }
        // line 84
        echo "
        ";
        // line 86
        echo "        ";
        $this->displayBlock('pjaxbegin', $context, $blocks);
        // line 90
        echo "       

        ";
        // line 93
        echo "        <article>

            <div id=\"";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "dynamicreload", array()));
        echo "\">
            ";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 130
        echo "            </div>

        </article>
        ";
        // line 133
        $this->displayBlock('footer', $context, $blocks);
        // line 136
        echo "        ";
        $this->displayBlock('pjaxend', $context, $blocks);
        // line 140
        echo "   

        ";
        // line 142
        $this->displayBlock('themescripts', $context, $blocks);
        // line 147
        echo "        
    </body>
</html>
";
    }

    // line 72
    public function block_head($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        // line 74
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/head.twig"));
        echo "
    ";
    }

    // line 78
    public function block_ajaxindicator($context, array $blocks = array())
    {
        // line 79
        echo "            ";
        // line 80
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/ajax_indicator.twig"));
        echo "
            ";
    }

    // line 86
    public function block_pjaxbegin($context, array $blocks = array())
    {
        // line 87
        echo "            <div id=\"beginScripts\" class=\"script-container\">
                <###begin###>
            </div>
        ";
    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        // line 97
        echo "
                ";
        // line 99
        echo "                ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 102
        echo "
                ";
        // line 104
        echo "                ";
        $this->displayBlock('progress', $context, $blocks);
        // line 107
        echo "
                <!-- Outer Frame Container -->
                ";
        // line 109
        $this->displayBlock('content', $context, $blocks);
        // line 117
        echo "
                ";
        // line 119
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/bootstrap_alert_modal.twig"));
        echo "

                ";
        // line 122
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("BasicThemeScripts", "
                if(window.basicThemeScripts === undefined){ 
                    window.basicThemeScripts = new ThemeScripts(); 
                } 
                basicThemeScripts.initGlobal(); 
                ",         // line 127
($context["POS_END"] ?? null)));
        echo "

            ";
    }

    // line 99
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 100
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/nav_bar.twig"));
        echo "
                ";
    }

    // line 104
    public function block_progress($context, array $blocks = array())
    {
        // line 105
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/progress_bar.twig"));
        echo "
                ";
    }

    // line 109
    public function block_content($context, array $blocks = array())
    {
        // line 110
        echo "                    ";
        // line 114
        echo "                    ";
        $context["sViewContent"] = (("./subviews/content/" . $this->getAttribute(($context["aSurveyInfo"] ?? null), "include_content", array())) . ".twig");
        // line 115
        echo "                    ";
        $this->loadTemplate("./subviews/content/outerframe.twig", "layout_global.twig", 115)->display(array_merge($context, array("include_content" => ($context["sViewContent"] ?? null))));
        // line 116
        echo "                ";
    }

    // line 133
    public function block_footer($context, array $blocks = array())
    {
        // line 134
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/footer/footer.twig"));
        echo "
        ";
    }

    // line 136
    public function block_pjaxend($context, array $blocks = array())
    {
        // line 137
        echo "            <div id=\"bottomScripts\" class=\"script-container\">
                <###end###>
            </div>
        ";
    }

    // line 142
    public function block_themescripts($context, array $blocks = array())
    {
        // line 143
        echo "            <script>
                window.basicThemeScripts.init();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "layout_global.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 143,  275 => 142,  268 => 137,  265 => 136,  258 => 134,  255 => 133,  251 => 116,  248 => 115,  245 => 114,  243 => 110,  240 => 109,  233 => 105,  230 => 104,  223 => 100,  220 => 99,  213 => 127,  206 => 122,  200 => 119,  197 => 117,  195 => 109,  191 => 107,  188 => 104,  185 => 102,  182 => 99,  179 => 97,  176 => 96,  169 => 87,  166 => 86,  159 => 80,  157 => 79,  154 => 78,  147 => 74,  145 => 73,  142 => 72,  135 => 147,  133 => 142,  129 => 140,  126 => 136,  124 => 133,  119 => 130,  117 => 96,  113 => 95,  109 => 93,  105 => 90,  102 => 86,  99 => 84,  95 => 82,  92 => 78,  90 => 77,  73 => 76,  71 => 72,  57 => 71,  53 => 69,);
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

    (¯`·._.·(¯`·._.· Global Layout  ·._.·´¯)·._.·´¯)

    This is the global layout that will be used to displayed most pages (less the error page)
    If you're creating your own template, remember there is no obligation to respect the current file flow of this template.
    This is different from the old LimeSurvey template engine, where you had to provide every one of the pstpl files.
    Here, you must have a file called main_layout.twig (called from SurveyRuntimeHelper::run() ).
    Other than that, you're free to organize your files and inclusions as you want.



    (¯`·._.·(¯`·._.· Bootstrap ·._.·´¯)·._.·´¯)

    LimeSurvey uses Bootstrap.
    See: https://getbootstrap.com

    This template is an instance of Bootswatch Theme Flatly.
    See: https://bootswatch.com/



    (¯`·._.·(¯`·._.· Twig Engine  ·._.·´¯)·._.·´¯)

    The template engine uses Twig.
    See: http://twig.sensiolabs.org/

    The main variable is aSurveyInfo. It's an array containing the main information about the survey.
    aSurveyInfo also contains other needed arrays, such as aNavigator, or aQuestionGroups (which contain aQuestions), etc.

    If you want to see what is availabe in aSurveyInfo, turn debug mode on in application/config.php, and copy the following line to the end of the <body> element below:
    {{ dump(aSurveyInfo) }}

    To echo a variable, just insert                      : {{ variable }}
    To translate a string, just insert                   : {{gT( string )}}

    NOTE: aSurveyInfo should be cleaned to remove the unnecessary data.


    (¯`·._.·(¯`·._.· Twig Engine: advanced  ·._.·´¯)·._.·´¯)

    For security reason, Twig is in a sandBox.
    About sandBox, see: http://twig.sensiolabs.org/doc/2.x/api.html#sandbox-extension

    Available functions/Object Methods are defined in internal.php: components => twigRenderer
    Eg:
         Functions : 'include', 'dump', 'flatEllipsizeText', 'getLanguageData', 'array_flip', 'array_intersect_key', 'registerPublicCssFile', 'getAllQuestionClasses', 'getShowqnumcode', 'intval'

         Methods   :
                    - CHtml::textfield() (and: form, link, emailField, beginForm, endForm, dropDownList,htmlButton)
                    - Survey::getAllLanguages()
                    - LSHttpRequest::getParam()

    If you need to add simple functions or static methods, just add them to internal.php.
    If you need to add complex process, use application/core/LS_Twig_Extension.php (more help/comments there)


    NOTE: Feel free to ask for functions, variables, etc, that you feel are missing - https://bugs.limesurvey.org/my_view_page.php
#}

<!DOCTYPE html>
<html lang=\"{{ aSurveyInfo.languagecode }}\" dir=\"{{ aSurveyInfo.dir }}\" class=\"{{ aSurveyInfo.languagecode }} dir-{{ aSurveyInfo.dir }} {{ aSurveyInfo.class.html }}\" {{ aSurveyInfo.attr.html }}>
    {% block head %}
    {# Headers, metadata, etc #}
    {{ include('./subviews/header/head.twig') }}
    {% endblock %}
    <body style=\"padding-top: 90px;\" class=\" {{ aSurveyInfo.class.body }} font-{{  aSurveyInfo.options.font }} lang-{{aSurveyInfo.languagecode}} {{aSurveyInfo.surveyformat}} {% if( aSurveyInfo.options.brandlogo == \"on\") %}brand-logo{%endif%}\" {{ aSurveyInfo.attr.body }} >
        {% if (aSurveyInfo.options.ajaxmode == \"on\" and aSurveyInfo.printPdf != 1) %}
            {% block ajaxindicator %}
            {# In vanilla, this file is empty, we keep it to have a common layout between all core themes #}
            {{ include('./subviews/navigation/ajax_indicator.twig') }}
            {% endblock %}
            
        {% endif %}

        {# This used for the pjax system #}
        {% block pjaxbegin %}
            <div id=\"beginScripts\" class=\"script-container\">
                <###begin###>
            </div>
        {% endblock %}       

        {# Ajaxify cannot handle an element that is a direct child of body, so => create simple wrapper section #}
        <article>

            <div id=\"{{ aSurveyInfo.id.dynamicreload }}\">
            {% block body %}

                {# Bootstrap Navigation Bar: the top menu #}
                {% block nav_bar %}
                    {{ include('./subviews/header/nav_bar.twig') }}
                {% endblock %}

                {# Top Container: in this template, it contains only  #}
                {% block progress %}
                    {{ include('./subviews/header/progress_bar.twig') }}
                {% endblock %}

                <!-- Outer Frame Container -->
                {% block content %}
                    {#
                        Content depends on the action (survey, questions, register, assesments, submit, etc)
                        Action are in ./subviews/content/
                    #}
                    {% set sViewContent =  './subviews/content/' ~ aSurveyInfo.include_content ~ '.twig' %}
                    {% include './subviews/content/outerframe.twig' with {'include_content': sViewContent } %}
                {% endblock %}

                {# Bootstrap alert modal #}
                {{ include('./subviews/messages/bootstrap_alert_modal.twig') }}

                {# Basic ThemeScript options  #}
                {{ registerScript(\"BasicThemeScripts\", \"
                if(window.basicThemeScripts === undefined){ 
                    window.basicThemeScripts = new ThemeScripts(); 
                } 
                basicThemeScripts.initGlobal(); 
                \", POS_END) }}

            {% endblock %}
            </div>

        </article>
        {% block footer %}
            {{ include('./subviews/footer/footer.twig') }}
        {% endblock %}
        {% block pjaxend %}
            <div id=\"bottomScripts\" class=\"script-container\">
                <###end###>
            </div>
        {% endblock %}   

        {% block themescripts %}
            <script>
                window.basicThemeScripts.init();
            </script>
        {% endblock %}
        
    </body>
</html>
", "layout_global.twig", "C:\\xampp\\htdocs\\LimeSurvey\\themes\\survey\\vanilla\\views\\layout_global.twig");
    }
}
