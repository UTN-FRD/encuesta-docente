<?php

/* /survey/questions/answer/arrays/5point/answer.twig */
class __TwigTemplate_d27864265b7ab87a425a4551fea17af1df7e3959fef5eb01889644e47bf58100 extends Twig_Template
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

        // line 11
        echo "<!-- Array 5 point choice -->

<!-- answer -->
<table class=\"";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " table table-bordered table-hover table-5-point-array\" role=\"group\" aria-labelledby=\"ls-question-text-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\">
    <!-- Columns -->
    <colgroup class=\"col-responses\">
        <col class=\"col-answers\" style='width: ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answerwidth"] ?? null));
        echo "%;' />
        
            ";
        // line 20
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sColumns"] ?? null));
        echo "
        
    </colgroup>
    <!-- Table headers -->
    <thead aria-hidden=\"true\">
        <tr class=\"ls-heading\"><!-- same class for repeat heading too -->
            
                ";
        // line 28
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sHeaders"] ?? null));
        echo "
            
        </tr>
    </thead>
    <!-- Table Body -->
    <tbody>
        
            ";
        // line 36
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
        return "/survey/questions/answer/arrays/5point/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 36,  72 => 28,  61 => 20,  56 => 17,  48 => 14,  43 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/arrays/5point/answer.twig", "/var/www/LimeSurvey/application/views/survey/questions/answer/arrays/5point/answer.twig");
    }
}
