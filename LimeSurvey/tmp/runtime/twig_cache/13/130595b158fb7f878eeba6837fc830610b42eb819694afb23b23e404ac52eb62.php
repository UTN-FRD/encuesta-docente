<?php

/* ./subviews/content/outerframe.twig */
class __TwigTemplate_ebd12fee28b91db16bb3d080f771bddc4798c54305727536c25699e2074cc167 extends Twig_Template
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
        $tags = array("if" => 21, "include" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'include'),
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

        // line 20
        echo "<!-- outer frame container -->
<div class=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "outerframe", array()));
        echo "  ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "container", array()) == "on")) {
            echo " container ";
        } else {
            echo " container-fluid ";
        }
        echo " \" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "outerframe", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "outerframe", array()));
        echo " >
    ";
        // line 23
        echo "    ";
        $this->loadTemplate("./subviews/content/mainrow.twig", "./subviews/content/outerframe.twig", 23)->display(array_merge($context, array("include_content" => ($context["include_content"] ?? null))));
        // line 24
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/outerframe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  60 => 23,  46 => 21,  43 => 20,);
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



    (¯`·._.·(¯`·._.· Outer Frame  ·._.·´¯)·._.·´¯)

    This div will often change from a template to another.
    So, to keep changes between ls-inherited templates as slighty as possible, we put it in a separated file

#}
<!-- outer frame container -->
<div class=\"{{ aSurveyInfo.class.outerframe }}  {% if (aSurveyInfo.options.container == \"on\") %} container {% else %} container-fluid {% endif %} \" id=\"{{ aSurveyInfo.id.outerframe }}\" {{ aSurveyInfo.attr.outerframe }} >
    {# Wich file to include for content is decided inside the layout #}
    {% include './subviews/content/mainrow.twig' with {'include_content': include_content } %}
</div>
", "./subviews/content/outerframe.twig", "C:\\xampp\\htdocs\\LimeSurvey\\themes\\survey\\vanilla\\views\\subviews\\content\\outerframe.twig");
    }
}
