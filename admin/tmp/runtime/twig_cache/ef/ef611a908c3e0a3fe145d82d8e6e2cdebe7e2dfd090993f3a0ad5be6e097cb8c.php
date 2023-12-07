<?php

/* ./subviews/header/start_form.twig */
class __TwigTemplate_0b1c979b0d7662c0de55bc7a87e48ee38c038a568118b2d61fcb2cc5a80385ab extends Twig_Template
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
        $tags = array("set" => 30, "if" => 39);
        $filters = array("merge" => 40);
        $functions = array("registerScript" => 58, "gT" => 71);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('merge'),
                array('registerScript', 'gT')
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

        // line 24
        echo "
";
        // line 30
        $context["htmlOptions"] = array("id" => "limesurvey", "name" => "limesurvey", "autocomplete" => "off", "class" => "survey-form-container form");
        // line 37
        echo "
";
        // line 39
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "upload_file", array()) == true)) {
            // line 40
            echo "    ";
            $context["htmlOptions"] = twig_array_merge(($context["htmlOptions"] ?? null), array("enctype" => "multipart/form-data"));
        }
        // line 45
        echo "
<!-- Start of the main Form-->
";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(        // line 48
($context["C"] ?? null), "Html", array()), "form", array(0 => $this->getAttribute(        // line 49
($context["aSurveyInfo"] ?? null), "surveyUrl", array()), 1 => "post", 2 =>         // line 51
($context["htmlOptions"] ?? null)), "method"));
        // line 53
        echo "

<!-- Ajax value -->
<!-- Needs to be set by javascript! Because if JavaScript is disabled, ajaxmode will completely fail! -->
";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("AJAXACTIVATE", (("
    \$('#limesurvey').append('<input type=\"hidden\" name=\"ajax\" value=\"" . $this->getAttribute($this->getAttribute(        // line 59
($context["aSurveyInfo"] ?? null), "options", array()), "ajaxmode", array())) . "\" id=\"ajax\" />');
    "), "POS_POSTSCRIPT"));
        // line 61
        echo "


<!-- Field Names -->
<input type='hidden' name='fieldnames' value='";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "hiddenfieldnames", array()));
        echo "' id='fieldnames' />

";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "hiddenInputs", array()));
        echo "

<!-- Submit button -->
<button type=\"submit\" id=\"defaultbtn\" value=\"default\" name=\"move\" class=\"submit hidden\" style=\"display:none\">";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("default"));
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "./subviews/header/start_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 71,  88 => 68,  83 => 65,  77 => 61,  74 => 59,  72 => 57,  66 => 53,  64 => 51,  63 => 49,  62 => 48,  61 => 47,  57 => 45,  53 => 40,  51 => 39,  48 => 37,  46 => 30,  43 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/header/start_form.twig", "C:\\xampp7\\htdocs\\encuesta-docente\\admin\\themes\\survey\\vanilla\\views\\subviews\\header\\start_form.twig");
    }
}
