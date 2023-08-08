<?php

/* /admin/survey/Question/subquestionsAndAnswers/_answer_option.twig */
class __TwigTemplate_d3d31ee1e6745f6d1c01a00f1234a4e49a1144de5fc4311562e08a1536a401da extends Twig_Template
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
        $tags = array("if" => 24, "set" => 26);
        $filters = array();
        $functions = array("gT" => 116, "getEditor" => 121);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array('gT', 'getEditor')
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

        // line 21
        echo "
<tr class='row-container row_";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["position"] ?? null));
        echo "' id='row_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["language"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["position"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "' data-common-id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["position"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "\">

    ";
        // line 24
        if (($context["first"] ?? null)) {
            echo " ";
            // line 25
            echo "
        ";
            // line 26
            $context["sPattern"] = ((($context["title"] ?? null)) ? ((("^([a-zA-Z0-9]*|" . ($context["title"] ?? null)) . ")\$")) : ("^[a-zA-Z0-9]*\$"));
            // line 27
            echo "
        <!-- Move icon -->
        <td class=\"move-icon\" >
            <span class=\"fa fa-bars bigIcons\"></span>
        </td>

        <!-- Code (title) -->
        <td  class=\"code-title\" style=\"vertical-align: middle;\">

            ";
            // line 36
            if (($context["oldCode"] ?? null)) {
                // line 37
                echo "            <input
                type='hidden'
                class='oldcode code-title'
                id='oldcode_";
                // line 40
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["position"] ?? null));
                echo "_";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
                echo "'
                name='oldcode_";
                // line 41
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["position"] ?? null));
                echo "_";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
                echo "'
                value=\"";
                // line 42
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["title"] ?? null));
                echo "\"
            />
            ";
            }
            // line 45
            echo "
            <input
                type='text'
                class=\"code form-control input\"
                id='code_";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["position"] ?? null));
            echo "_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "'
                class='code code-title'
                name='code_";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["position"] ?? null));
            echo "_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "'
                value=\"";
            // line 52
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["title"] ?? null));
            echo "\"
                maxlength='5'
                pattern='";
            // line 54
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sPattern"] ?? null));
            echo "'
                required='required'
            />
        </td>
        ";
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "
        <!-- Move icon -->
        <td class=\"move-icon-disable\">
            &nbsp;
        </td>

        <!-- Code (title) -->
        <td  class=\"code-title\" style=\"vertical-align: middle;\">
            ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["title"] ?? null));
            echo "
        </td>
    ";
        }
        // line 71
        echo "

    <!-- Assessment Value -->
    ";
        // line 74
        if ((($context["assessmentvisible"] ?? null) && ($context["first"] ?? null))) {
            // line 75
            echo "        <td class=\"assessment-value\">
            <input
                type='text'
                class='assessment form-control input'
                id='assessment_";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["position"] ?? null));
            echo "_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "'
                name='assessment_";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["position"] ?? null));
            echo "_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "'
                value=\"";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["assessment_value"] ?? null));
            echo "\"
                maxlength='5'
                size='5'
                onkeypress=\"return goodchars(event,'-1234567890')\"
            />
        </td>
    ";
        } elseif (        // line 87
($context["first"] ?? null)) {
            // line 88
            echo "        <td style='display:none;' class=\"assessment-value\">
            <input
                type='text'
                class='assessment'
                id='assessment_";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["position"] ?? null));
            echo "_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "'
                name='assessment_";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["position"] ?? null));
            echo "_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "'
                value=\"";
            // line 94
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["assessment_value"] ?? null));
            echo "\" maxlength='5' size='5'
                onkeypress=\"return goodchars(event,'-1234567890')\"
            />
        </td>
    ";
        } elseif (        // line 98
($context["assessmentvisible"] ?? null)) {
            // line 99
            echo "        <td class=\"assessment-value\">
            ";
            // line 100
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["assessment_value"] ?? null));
            echo "
        </td>
    ";
        } else {
            // line 103
            echo "        <td style='display:none;' class=\"assessment-value\">
        </td>
    ";
        }
        // line 106
        echo "
    <!-- Answer (Subquestion Text) -->
    <td  class=\"subquestion-text\" style=\"vertical-align: middle;\">
        <div class=\"input-group\">
            <input
                type='text'
                size='20'
                class='answer form-control input'
                id='answer_";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["language"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sortorder"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "'
                name='answer_";
        // line 115
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["language"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sortorder"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "'
                placeholder='";
        // line 116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Some example answer option", "js"));
        echo "'
                value=\"";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answer"] ?? null));
        echo "\"
                onkeypress=\" if(event.keyCode==13) { if (event && event.preventDefault) event.preventDefault(); document.getElementById('save-button').click(); return false;}\"
            />
            <span class=\"input-group-addon\">
                ";
        // line 121
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(getEditor("editanswer", ((((("answer_" . ($context["language"] ?? null)) . "_") . ($context["qid"] ?? null)) . "_") . ($context["scale_id"] ?? null)), (((("[" . gT("Subquestion:", "js")) . "](") . ($context["language"] ?? null)) . ")"), ($context["surveyid"] ?? null), ($context["gid"] ?? null), ($context["qid"] ?? null), "editanswer"));
        echo "
            </span>
        </div>
    </td>

    <!-- No relevance equation for answer options -->


    <!-- Icons edit/delete -->
    <td style=\"vertical-align: middle;\" class=\"subquestion-actions\">
        ";
        // line 131
        if (($context["first"] ?? null)) {
            // line 132
            echo "            <button class=\"btn btn-default btn-sm btnaddanswer\"><i class=\"icon-add text-success \" data-assessmentvisible='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["assessmentvisible"] ?? null));
            echo "' data-position=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["position"] ?? null));
            echo "\" data-code=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["title"] ?? null));
            echo "\" data-scale-id=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Insert a new answer option after this one"));
            echo "\"></i></button>
            <button class=\"btn btn-default btn-sm btndelanswer\"><i class=\"fa fa-trash text-danger \" data-toggle=\"tooltip\" data-placement=\"bottom\"  title=\"";
            // line 133
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Delete this answer option"));
            echo "\"></i></button>
        ";
        }
        // line 135
        echo "    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/admin/survey/Question/subquestionsAndAnswers/_answer_option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 135,  301 => 133,  288 => 132,  286 => 131,  273 => 121,  266 => 117,  262 => 116,  254 => 115,  246 => 114,  236 => 106,  231 => 103,  225 => 100,  222 => 99,  220 => 98,  213 => 94,  207 => 93,  201 => 92,  195 => 88,  193 => 87,  184 => 81,  178 => 80,  172 => 79,  166 => 75,  164 => 74,  159 => 71,  153 => 68,  143 => 60,  140 => 59,  133 => 54,  128 => 52,  122 => 51,  115 => 49,  109 => 45,  103 => 42,  97 => 41,  91 => 40,  86 => 37,  84 => 36,  73 => 27,  71 => 26,  68 => 25,  65 => 24,  46 => 22,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/admin/survey/Question/subquestionsAndAnswers/_answer_option.twig", "/var/www/LimeSurvey/application/views/admin/survey/Question/subquestionsAndAnswers/_answer_option.twig");
    }
}
