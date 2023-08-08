<?php

/* /survey/questions/answer/arrays/10point/answer.twig */
class __TwigTemplate_c5fbb8a792862e2eccf4743d9114b9e4176858fbd9e7d8baccf77e3f50509dbf extends Twig_Template
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
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 12
        echo "<!-- Array 10 point choice -->

<!-- answer -->
<table class=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " table table-bordered table-hover table-10-point-array\" role=\"group\" aria-labelledby=\"ls-question-text-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\">
    <!-- Columns -->
    <colgroup class=\"col-responses\">
        <col class=\"col-answers\" style='width: ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answerwidth"] ?? null));
        echo "%;' />
            ";
        // line 20
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sColumns"] ?? null));
        echo "
    </colgroup>
    <thead aria-hidden=\"true\">
        <tr class=\"ls-heading\">
                ";
        // line 25
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sHeaders"] ?? null));
        echo "
        </tr>
    </thead>
    <tbody>
            ";
        // line 30
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sRows"] ?? null));
        echo "
    </tbody>
</table>

<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/10point/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  68 => 25,  60 => 20,  56 => 18,  48 => 15,  43 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/arrays/10point/answer.twig", "/var/www/LimeSurvey/application/views/survey/questions/answer/arrays/10point/answer.twig");
    }
}
