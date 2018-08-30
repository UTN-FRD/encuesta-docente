<?php

/* ./subviews/navigation/question_index_menu.twig */
class __TwigTemplate_1fa3e51278ce33fa99519238549996403707e350f63ba5a2b6d3b9d947360aad extends Twig_Template
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
        $tags = array("if" => 28, "for" => 39, "set" => 40);
        $filters = array();
        $functions = array("gT" => 33, "flatEllipsizeText" => 79);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array(),
                array('gT', 'flatEllipsizeText')
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

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "bShow", array()) == true)) {
            // line 29
            echo "    ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", array()) == "G")) {
                // line 30
                echo "        <!-- Question index, group, ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "type", array()));
                echo " -->
        <li class=\"";
                // line 31
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenugli", array()));
                echo " dropdown index-menu-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "type", array()));
                echo "\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenugli", array()));
                echo " >
            <a class=\"";
                // line 32
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenuglia", array()));
                echo " dropdown-toggle\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenuglia", array()));
                echo " href=\"#\" >
                ";
                // line 33
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question index"));
                echo "
                <span class=\"";
                // line 34
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenugspan", array()));
                echo " caret\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenugspan", array()));
                echo "></span>
            </a>

            <ul class=\"";
                // line 37
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusgul", array()));
                echo " dropdown-menu\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenusgul", array()));
                echo ">
                ";
                // line 39
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "items", array()));
                foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
                    // line 40
                    echo "                    ";
                    $context["statusClass"] = "";
                    // line 41
                    echo "
                    ";
                    // line 42
                    if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-unanswered", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-unanswered") == true))) {
                        // line 43
                        echo "                        ";
                        $context["statusClass"] = (($context["statusClass"] ?? null) . " bg-warning");
                        // line 44
                        echo "                    ";
                    }
                    // line 45
                    echo "
                    ";
                    // line 46
                    if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-error", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-error") == true))) {
                        // line 47
                        echo "                        ";
                        $context["statusClass"] = (($context["statusClass"] ?? null) . " bg-danger");
                        // line 48
                        echo "                    ";
                    }
                    // line 49
                    echo "
                    ";
                    // line 50
                    if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-current", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-current") == true))) {
                        // line 51
                        echo "                        ";
                        $context["statusClass"] = (($context["statusClass"] ?? null) . " disabled");
                        // line 52
                        echo "                    ";
                    }
                    // line 53
                    echo "

                    <li class=\"";
                    // line 55
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "coreClass", array()));
                    echo " ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["statusClass"] ?? null));
                    echo "\"  ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenusgli", array()));
                    echo ">
                        <a href='";
                    // line 56
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "url", array()));
                    echo "' data-limesurvey-submit='";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "submit", array()));
                    echo "' class='aminate'>
                            ";
                    // line 57
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "text", array()));
                    echo "
                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "            </ul>
        </li>
    ";
            }
            // line 64
            echo "
    ";
            // line 66
            echo "    ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", array()) == "S")) {
                // line 67
                echo "        <!-- Question index, question by question, ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "type", array()));
                echo " -->
        <li class=\"";
                // line 68
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusli", array()));
                echo " dropdown index-menu-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "type", array()));
                echo "\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenusli", array()));
                echo ">
            <a class=\"";
                // line 69
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenuslia", array()));
                echo " dropdown-toggle animate\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenuslia", array()));
                echo ">
                ";
                // line 70
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question index"));
                echo "
                <span class=\"";
                // line 71
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusspan", array()));
                echo " caret\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenusspan", array()));
                echo "></span>
            </a>
            <!-- TODO: Remove this when support is added -->
            <ul class=\"";
                // line 74
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusddul", array()));
                echo " dropdown-menu\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenusddul", array()));
                echo ">
            ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 76
                    echo "                ";
                    // line 77
                    echo "                <li>
                    <div class=\"";
                    // line 78
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusddh", array()));
                    echo " dropdown-header\" ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenusddh", array()));
                    echo ">
                        ";
                    // line 79
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::flatEllipsizeText($this->getAttribute($context["group"], "text", array()), true, 30, " &hellip; ", 0.6));
                    echo "
                        <span class=\"";
                    // line 80
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusddspan", array()));
                    echo " caret\" ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusddspan", array()));
                    echo "></span>
                    </div>
                    <ul class=\"";
                    // line 82
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "indexmenusddul", array()));
                    echo " dropdown-menu\" ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenusddul", array()));
                    echo ">
                        ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "questions", array()));
                    foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
                        // line 84
                        echo "                            ";
                        $context["statusClass"] = "";
                        // line 85
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-unanswered", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-unanswered") == true))) {
                            // line 86
                            echo "                                ";
                            $context["statusClass"] = (($context["statusClass"] ?? null) . " bg-warning");
                            // line 87
                            echo "                            ";
                        }
                        // line 88
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-error", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-error") == true))) {
                            // line 89
                            echo "                                ";
                            $context["statusClass"] = (($context["statusClass"] ?? null) . " bg-danger");
                            // line 90
                            echo "                            ";
                        }
                        // line 91
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-current", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-current") == true))) {
                            // line 92
                            echo "                                ";
                            $context["statusClass"] = (($context["statusClass"] ?? null) . " disabled");
                            // line 93
                            echo "                            ";
                        }
                        // line 94
                        echo "                            <li class=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "coreClass", array()));
                        echo " ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["statusClass"] ?? null));
                        echo "\"  ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "indexmenussli", array()));
                        echo ">
                                <a href='";
                        // line 95
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "url", array()));
                        echo "' data-limesurvey-submit='";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "submit", array()));
                        echo "' class='animate'>
                                    ";
                        // line 96
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::flatEllipsizeText($this->getAttribute($context["indexItem"], "text", array()), true, 30, " &hellip; ", 0.6));
                        echo "
                                </a>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                    </ul>
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "            ";
                if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "type", array()) == "full")) {
                    // line 104
                    echo "                <li> 
                    ";
                    // line 105
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question by question mode not yet supported."));
                    echo "
                </li>
            ";
                }
                // line 108
                echo "            </ul>
        </li>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/question_index_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 108,  313 => 105,  310 => 104,  307 => 103,  299 => 100,  289 => 96,  283 => 95,  274 => 94,  271 => 93,  268 => 92,  265 => 91,  262 => 90,  259 => 89,  256 => 88,  253 => 87,  250 => 86,  247 => 85,  244 => 84,  240 => 83,  234 => 82,  227 => 80,  223 => 79,  217 => 78,  214 => 77,  212 => 76,  208 => 75,  202 => 74,  194 => 71,  190 => 70,  184 => 69,  176 => 68,  171 => 67,  168 => 66,  165 => 64,  160 => 61,  150 => 57,  144 => 56,  136 => 55,  132 => 53,  129 => 52,  126 => 51,  124 => 50,  121 => 49,  118 => 48,  115 => 47,  113 => 46,  110 => 45,  107 => 44,  104 => 43,  102 => 42,  99 => 41,  96 => 40,  91 => 39,  85 => 37,  77 => 34,  73 => 33,  67 => 32,  59 => 31,  54 => 30,  51 => 29,  49 => 28,  46 => 27,  43 => 25,);
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

    (¯`·._.·(¯`·._.·  Question index  ·._.·´¯)·._.·´¯)

    Show the question index in top menu.

    There is two type of index:
    - Full        :  show all the questions/groups
    - Incremental :  only show the previous questions/groups

    There is two possible displays for index, depending on Survey Mode:
    - Group by Group       : Survey mode is in Group By Group mode, so the entry of the index should be groups
    - Question by Question : Survey mode is in Question By Question mode, so the entry of the index should be questions
    - All in One           : No index needed
#}

{# Question index in group by group mode #}

{% if (aSurveyInfo.aQuestionIndex.bShow == true) %}
    {% if aSurveyInfo.format == 'G' %}
        <!-- Question index, group, {{ aSurveyInfo.aQuestionIndex.type }} -->
        <li class=\"{{ aSurveyInfo.class.indexmenugli }} dropdown index-menu-{{ aSurveyInfo.aQuestionIndex.type }}\" {{ aSurveyInfo.attr.indexmenugli }} >
            <a class=\"{{ aSurveyInfo.class.indexmenuglia }} dropdown-toggle\" {{ aSurveyInfo.attr.indexmenuglia }} href=\"#\" >
                {{ gT(\"Question index\") }}
                <span class=\"{{ aSurveyInfo.class.indexmenugspan }} caret\" {{ aSurveyInfo.attr.indexmenugspan }}></span>
            </a>

            <ul class=\"{{ aSurveyInfo.class.indexmenusgul }} dropdown-menu\" {{ aSurveyInfo.attr.indexmenusgul }}>
                {# TODO: move back this logic to SurveyRuntime, and provide a ready to use indexItem.statusClass #}
                {% for step, indexItem in aSurveyInfo.aQuestionIndex.items %}
                    {% set statusClass = ''  %}

                    {% if attribute(indexItem.stepStatus, 'index-item-unanswered') is defined and attribute(indexItem.stepStatus, 'index-item-unanswered') == true  %}
                        {% set statusClass = statusClass ~ ' bg-warning'  %}
                    {% endif %}

                    {% if attribute(indexItem.stepStatus, 'index-item-error') is defined and attribute(indexItem.stepStatus, 'index-item-error') == true   %}
                        {% set statusClass = statusClass ~ ' bg-danger'  %}
                    {% endif %}

                    {% if attribute(indexItem.stepStatus, 'index-item-current') is defined and attribute(indexItem.stepStatus, 'index-item-current') == true %}
                        {% set statusClass = statusClass ~  ' disabled'  %}
                    {% endif %}


                    <li class=\"{{ indexItem.coreClass }} {{ statusClass }}\"  {{ aSurveyInfo.attr.indexmenusgli }}>
                        <a href='{{ indexItem.url }}' data-limesurvey-submit='{{ indexItem.submit }}' class='aminate'>
                            {{ indexItem.text }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </li>
    {% endif %}

    {# Question index in question by question mode #}
    {% if aSurveyInfo.format == 'S' %}
        <!-- Question index, question by question, {{ aSurveyInfo.aQuestionIndex.type }} -->
        <li class=\"{{ aSurveyInfo.class.indexmenusli }} dropdown index-menu-{{ aSurveyInfo.aQuestionIndex.type }}\" {{ aSurveyInfo.attr.indexmenusli }}>
            <a class=\"{{ aSurveyInfo.class.indexmenuslia }} dropdown-toggle animate\" {{ aSurveyInfo.attr.indexmenuslia }}>
                {{ gT(\"Question index\") }}
                <span class=\"{{ aSurveyInfo.class.indexmenusspan }} caret\" {{ aSurveyInfo.attr.indexmenusspan }}></span>
            </a>
            <!-- TODO: Remove this when support is added -->
            <ul class=\"{{ aSurveyInfo.class.indexmenusddul }} dropdown-menu\" {{ aSurveyInfo.attr.indexmenusddul }}>
            {% for group in aSurveyInfo.aQuestionIndex.items %}
                {# TODO: move back this logic to SurveyRuntime, and provide a ready to use indexItem.statusClass #}
                <li>
                    <div class=\"{{ aSurveyInfo.class.indexmenusddh }} dropdown-header\" {{ aSurveyInfo.attr.indexmenusddh }}>
                        {{ flatEllipsizeText(group.text, true, 30, \" &hellip; \", 0.6 ) }}
                        <span class=\"{{ aSurveyInfo.class.indexmenusddspan }} caret\" {{ aSurveyInfo.class.indexmenusddspan }}></span>
                    </div>
                    <ul class=\"{{ aSurveyInfo.class.indexmenusddul }} dropdown-menu\" {{ aSurveyInfo.attr.indexmenusddul }}>
                        {% for  step, indexItem in group.questions %}
                            {% set statusClass = ''  %}
                            {% if attribute(indexItem.stepStatus, 'index-item-unanswered') is defined and attribute(indexItem.stepStatus, 'index-item-unanswered') == true  %}
                                {% set statusClass = statusClass ~ ' bg-warning'  %}
                            {% endif %}
                            {% if attribute(indexItem.stepStatus, 'index-item-error') is defined and attribute(indexItem.stepStatus, 'index-item-error') == true   %}
                                {% set statusClass = statusClass ~ ' bg-danger'  %}
                            {% endif %}
                            {% if attribute(indexItem.stepStatus, 'index-item-current') is defined and attribute(indexItem.stepStatus, 'index-item-current') == true %}
                                {% set statusClass = statusClass ~  ' disabled'  %}
                            {% endif %}
                            <li class=\"{{ indexItem.coreClass }} {{statusClass}}\"  {{ aSurveyInfo.attr.indexmenussli }}>
                                <a href='{{ indexItem.url }}' data-limesurvey-submit='{{ indexItem.submit }}' class='animate'>
                                    {{ flatEllipsizeText(indexItem.text, true, 30, \" &hellip; \", 0.6 ) }}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </li>
            {% endfor %}
            {% if aSurveyInfo.aQuestionIndex.type == 'full' %}
                <li> 
                    {{ gT(\"Question by question mode not yet supported.\") }}
                </li>
            {% endif %}
            </ul>
        </li>
    {% endif %}
{% endif %}
", "./subviews/navigation/question_index_menu.twig", "C:\\xampp\\htdocs\\LimeSurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\question_index_menu.twig");
    }
}
