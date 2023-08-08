<?php

/* /survey/questions/answer/listradio/answer.twig */
class __TwigTemplate_62e2479e8af14a42df585008b7420191166a30c9b97e8e12aea20020becc3e47 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array("gT" => 30);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 9
        echo "
<!-- List Radio -->

<!-- answer -->
";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sTimer"] ?? null));
        echo "

<div class=\"ls-answers answers-list row\" role=\"radiogroup\" aria-labelledby=\"ls-question-text-";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\">
    ";
        // line 17
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sRows"] ?? null));
        echo "

";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "hiddenField", array(0 => ("java" . ($context["name"] ?? null)), 1 => ($context["value"] ?? null), 2 => array("id" => ("java" .         // line 21
($context["name"] ?? null)), "disabled" => true)), "method"));
        // line 24
        echo "
</div>
<div class=\"row ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["extraclass"] ?? null));
        echo " col-sm-4 hide\" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "-div\">
    <label for=\"SOTH";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\" class=\"control-label\" id=\"label-id-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["othertext"] ?? null));
        echo "</label>
    <!-- comment -->

    ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Other:"));
        echo "
    <input
    type=\"text\"
    class=\"form-control ";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["kpclass"] ?? null));
        echo " input-sm col-sm-4\"
    id=\"answer";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "othertext\"
    name=\"";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "other\"
    title=\"";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Other"));
        echo "\"
    onkeyup=\"checkconditions(this.value, this.name, this.type);\"
    aria-labelledby=\"label-id-";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
    >
    </label>
</div>
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  87 => 30,  77 => 27,  71 => 26,  67 => 24,  65 => 21,  64 => 20,  58 => 17,  54 => 15,  49 => 13,  43 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/listradio/answer.twig", "/var/www/LimeSurvey/themes/question/bootstrap_buttons/survey/questions/answer/listradio/answer.twig");
    }
}
