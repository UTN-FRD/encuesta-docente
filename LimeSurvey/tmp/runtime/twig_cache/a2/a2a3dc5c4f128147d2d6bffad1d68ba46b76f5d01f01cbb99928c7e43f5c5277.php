<?php

/* ./subviews/messages/warnings.twig */
class __TwigTemplate_097e646bd52111294dd1affe9392f2fbe7e00b5a841dc2fe4f1a8772521cac2a extends Twig_Template
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
        $tags = array("if" => 29, "for" => 50);
        $filters = array();
        $functions = array("gT" => 33);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 27
        echo "
";
        // line 29
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "active", array()) != "Y")) {
            // line 30
            echo "    <!-- Preview mode warning -->
    <div class=\"";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "activealert", array()));
            echo " alert alert-warning alert-dismissible fade in alert-dismissible\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "activealert", array()));
            echo " >
        <button  ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "activealertbutton", array()));
            echo " class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "activealertbutton", array()));
            echo " close\" ><span aria-hidden=\"true\">×</span></button>
        ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("This survey is currently not active. You will not be able to save your responses."));
            echo "
    </div>
";
        }
        // line 36
        echo "
";
        // line 38
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecuritynotaccepted", array()) == true)) {
            // line 39
            echo "    <!-- Preview mode warning -->
    <div class=\"";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "activealert", array()));
            echo " alert alert-danger alert-dismissible fade in alert-dismissible\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "activealert", array()));
            echo " >
        <button  ";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "activealertbutton", array()));
            echo " class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "activealertbutton", array()));
            echo " close\" ><span aria-hidden=\"true\">×</span></button>
        ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecurity_error", array()));
            echo "
    </div>
";
        }
        // line 45
        echo "
";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "errorHtml", array()), "show", array())) {
            // line 48
            echo "    <p class=' ";
            echo " fade in alert-dismissible alert alert-danger ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "errorHtml", array()));
            echo " ' role='alert'>
        <button  ";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "errorHtmlbutton", array()));
            echo " class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "errorHtmlbutton", array()));
            echo " close\" ><span aria-hidden=\"true\">×</span></button>
    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "errorHtml", array()), "messages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["aMessage"]) {
                // line 51
                echo "        <!-- Error Html warnings -->
            ";
                // line 52
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["aMessage"]);
                echo "
            <br/>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/messages/warnings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 55,  119 => 52,  116 => 51,  112 => 50,  106 => 49,  100 => 48,  98 => 47,  95 => 45,  89 => 42,  83 => 41,  77 => 40,  74 => 39,  72 => 38,  69 => 36,  63 => 33,  57 => 32,  51 => 31,  48 => 30,  46 => 29,  43 => 27,);
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



    (¯`·._.·(¯`·._.· Warnings  ·._.·´¯)·._.·´¯)

    Show various warnings on top of the form

    Error Html warnings can be:
        - One or more mandatory questions have not been answered. You cannot proceed until these have been completed.
        - One or more questions have not been answered in a valid manner. You cannot proceed until these answers are valid.
        - One or more uploaded files are not in proper format/size. You cannot proceed until these files are valid.

    The easiest way to change the text in the warnings is to create a new translation.

    These warnings are complementary to the popup ones. If you're using popups (set in config file), and then don't want to show these alerts, you can uncomment the hiddenClass checker
#}

{# Preview mode warning #}
{% if aSurveyInfo.active != 'Y' %}
    <!-- Preview mode warning -->
    <div class=\"{{ aSurveyInfo.class.activealert }} alert alert-warning alert-dismissible fade in alert-dismissible\" {{ aSurveyInfo.attr.activealert }} >
        <button  {{ aSurveyInfo.attr.activealertbutton }} class=\"{{ aSurveyInfo.class.activealertbutton }} close\" ><span aria-hidden=\"true\">×</span></button>
        {{ gT(\"This survey is currently not active. You will not be able to save your responses.\") }}
    </div>
{% endif %}

{# Survey data policy not accepted warning #}
{% if aSurveyInfo.datasecuritynotaccepted == true %}
    <!-- Preview mode warning -->
    <div class=\"{{ aSurveyInfo.class.activealert }} alert alert-danger alert-dismissible fade in alert-dismissible\" {{ aSurveyInfo.attr.activealert }} >
        <button  {{ aSurveyInfo.attr.activealertbutton }} class=\"{{ aSurveyInfo.class.activealertbutton }} close\" ><span aria-hidden=\"true\">×</span></button>
        {{ aSurveyInfo.datasecurity_error }}
    </div>
{% endif %}

{# Error Html warnings #}
{% if aSurveyInfo.errorHtml.show %}
    <p class=' {# Uncomment to hide when popup is on { aSurveyInfo.errorHtml.hiddenClass } #} fade in alert-dismissible alert alert-danger {{ aSurveyInfo.class.errorHtml }} ' role='alert'>
        <button  {{ aSurveyInfo.attr.errorHtmlbutton }} class=\"{{ aSurveyInfo.class.errorHtmlbutton }} close\" ><span aria-hidden=\"true\">×</span></button>
    {% for aMessage in aSurveyInfo.errorHtml.messages  %}
        <!-- Error Html warnings -->
            {{ aMessage }}
            <br/>
    {% endfor %}
    </p>
{% endif %}
", "./subviews/messages/warnings.twig", "C:\\xampp\\htdocs\\LimeSurvey\\themes\\survey\\vanilla\\views\\subviews\\messages\\warnings.twig");
    }
}
