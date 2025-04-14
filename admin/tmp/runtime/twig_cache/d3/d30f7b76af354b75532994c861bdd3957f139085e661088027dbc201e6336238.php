<?php

/* /admin/survey/Question/subquestionsAndAnswers/_subquestion.twig */
class __TwigTemplate_98e6fd73932194dca6df9a98faa2ffb530c217685ea34b796613d1acbff20888 extends Twig_Template
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
        $tags = array("if" => 26, "set" => 48);
        $filters = array();
        $functions = array("gT" => 106, "getEditor" => 111);

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

        // line 22
        echo "
<!-- subquestion row -->
<tr id='row_";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["language"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "' class=\"row-container\" data-common-id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "\">
    ";
        // line 26
        echo "    ";
        if ((($context["activated"] ?? null) == "Y")) {
            // line 27
            echo "        <!-- Move icon -->
        <td class=\"move-icon-disable\">
            &nbsp;
        </td>

        <!-- Code (title) -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">
            <input
                class=\"code-title\"
                type='hidden'
                name='code_";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["position"] ?? null));
            echo "_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "'   ";
            // line 38
            echo "                value=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["title"] ?? null));
            echo "\"
                maxlength='20'
                size='5'
            />
            ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["title"] ?? null));
            echo "
        </td>

    ";
            // line 46
            echo "    ";
        } elseif (($context["first"] ?? null)) {
            // line 47
            echo "
        ";
            // line 48
            $context["sPattern"] = ((($context["title"] ?? null)) ? ((("^([a-zA-Z0-9]*|" . ($context["title"] ?? null)) . ")\$")) : ("^[a-zA-Z0-9]*\$"));
            // line 49
            echo "
        <!-- Move icon -->
        <td class=\"move-icon\" >
            <span class=\"fa fa-bars bigIcons\"></span>
        </td>

        <!-- Code (title) -->
        <td  class=\"code-title\" style=\"vertical-align: middle;\">
            ";
            // line 57
            if (($context["oldCode"] ?? null)) {
                // line 58
                echo "                <input
                    type='hidden'
                    class='oldcode code-title'
                    id='oldcode_";
                // line 61
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
                echo "_";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
                echo "'
                    name='oldcode_";
                // line 62
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
                echo "_";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
                echo "'
                    value=\"";
                // line 63
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["title"] ?? null));
                echo "\"
                />
            ";
            }
            // line 66
            echo "
            <input
                type='text'
                class=\"code form-control input\"
                id='code_";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
            echo "_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "'
                class='code code-title'
                name='code_";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
            echo "_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "'
                value=\"";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["title"] ?? null));
            echo "\"
                maxlength='20' size='20'
                pattern='";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sPattern"] ?? null));
            echo "'
                required='required'
            />
        </td>

    ";
            // line 81
            echo "    ";
        } else {
            // line 82
            echo "
        <!-- Move icon -->
        <td class=\"move-icon-disable\">
            &nbsp;
        </td>

        <!-- Code (title) -->
        <td  class=\"code-title\" style=\"vertical-align: middle;\">
            ";
            // line 90
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["title"] ?? null));
            echo "
        </td>
    ";
        }
        // line 93
        echo "

    <!-- No assessment values for subQuestions -->

    <!-- Answer (Subquestion Text) -->
    <td  class=\"subquestion-text\" style=\"vertical-align: middle;\">
        <div class=\"input-group\">        
            <input
            type='text'
            size='20'
            class='answer form-control input'
            id='answer_";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["language"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "'
            name='answer_";
        // line 105
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["language"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
        echo "_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "'
            placeholder='";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Some example subquestion", "js"));
        echo "'
            value=\"";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["question"] ?? null));
        echo "\"
            onkeypress=\" if(event.keyCode==13) { if (event && event.preventDefault) event.preventDefault(); document.getElementById('save-button').click(); return false;}\"
            />
            <span class=\"input-group-addon\">
                ";
        // line 111
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(getEditor("editanswer", ((((("answer_" . ($context["language"] ?? null)) . "_") . ($context["qid"] ?? null)) . "_") . ($context["scale_id"] ?? null)), (((("[" . gT("Subquestion:", "js")) . "](") . ($context["language"] ?? null)) . ")"), ($context["surveyid"] ?? null), ($context["gid"] ?? null), ($context["qid"] ?? null), "editanswer"));
        echo "
            </span>
        </div>
    </td>

    <!-- Relevance equation -->
    ";
        // line 117
        if ((($context["first"] ?? null) && (($context["scale_id"] ?? null) == 0))) {
            // line 118
            echo "        <td class=\"relevance-equation\">
            <input data-toggle=\"tooltip\" data-title=\"";
            // line 119
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Click to expand"));
            echo "\" type='text' class='relevance form-control input' id='relevance_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
            echo "_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "' name='relevance_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
            echo "_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "' value=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["relevance"] ?? null));
            echo "\" onkeypress=\" if(event.keyCode==13) { if (event && event.preventDefault) event.preventDefault(); document.getElementById('save-button').click(); return false;}\" />
        </td>
    ";
        } else {
            // line 122
            echo "        <span style=\"display: none\" class=\"relevance relevance-equation\">
            ";
            // line 123
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["relevance"] ?? null));
            echo "
        </span>
    ";
        }
        // line 126
        echo "

    <!-- Icons add/edit/delete -->
    <td style=\"vertical-align: middle;\" class=\"subquestion-actions\">


        ";
        // line 132
        if (((($context["activated"] ?? null) != "Y") && ($context["first"] ?? null))) {
            // line 133
            echo "            ";
            // line 134
            echo "
            <button class=\"btn btn-default btn-sm btnaddanswer\"><i class=\"icon-add text-success\" data-code=\"";
            // line 135
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["title"] ?? null));
            echo "\" data-toggle=\"tooltip\" data-scale-id=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
            echo "\" data-placement=\"bottom\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Insert a new subquestion after this one"));
            echo "\"></i></button>
            <button class=\"btn btn-default btn-sm btndelanswer\"><i class=\"fa fa-trash text-danger\"  data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 136
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Delete this subquestion"));
            echo "\"></i></button>
        ";
        }
        // line 138
        echo "
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/admin/survey/Question/subquestionsAndAnswers/_subquestion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 138,  289 => 136,  281 => 135,  278 => 134,  276 => 133,  274 => 132,  266 => 126,  260 => 123,  257 => 122,  241 => 119,  238 => 118,  236 => 117,  227 => 111,  220 => 107,  216 => 106,  208 => 105,  200 => 104,  187 => 93,  181 => 90,  171 => 82,  168 => 81,  160 => 75,  155 => 73,  149 => 72,  142 => 70,  136 => 66,  130 => 63,  124 => 62,  118 => 61,  113 => 58,  111 => 57,  101 => 49,  99 => 48,  96 => 47,  93 => 46,  87 => 42,  79 => 38,  74 => 37,  62 => 27,  59 => 26,  47 => 24,  43 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/admin/survey/Question/subquestionsAndAnswers/_subquestion.twig", "C:\\xampp7.2.24\\htdocs\\encuesta-docente\\admin\\application\\views\\admin\\survey\\Question\\subquestionsAndAnswers\\_subquestion.twig");
    }
}
