<?php

/* /survey/questions/answer/arrays/10point/rows/answer_row.twig */
class __TwigTemplate_21e571dfef6439ae35b987e8ae600fae6775089e42be7e9612d0f20717210499 extends Twig_Template
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
        $tags = array("if" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        echo "
<!-- answer_row -->
<tr id=\"javatbd";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"answers-list radio-list form-group ";
        if (($context["odd"] ?? null)) {
            echo "ls-odd";
        } else {
            echo "ls-even";
        }
        echo " ";
        if (($context["error"] ?? null)) {
            echo " ls-error-mandatory has-error";
        }
        echo "\"  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sDisplayStyle"] ?? null));
        echo "  role=\"radiogroup\"  aria-labelledby=\"answertext";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\">
    <th id=\"answertext";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"answertext control-label";
        if ((($context["answerwidth"] ?? null) == 0)) {
            echo " sr-only";
        }
        echo "\">
        ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answertext"] ?? null));
        echo "

        ";
        // line 19
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "hiddenField", array(0 => ("java" . ($context["myfname"] ?? null)), 1 => ($context["value"] ?? null), 2 => array("id" => ("java" .         // line 20
($context["myfname"] ?? null)), "disabled" => true)), "method"));
        // line 23
        echo "
    </th>

        ";
        // line 27
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answer_tds"] ?? null));
        echo "

</tr>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/10point/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  82 => 23,  80 => 20,  78 => 19,  73 => 16,  65 => 15,  47 => 14,  43 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/arrays/10point/rows/answer_row.twig", "/var/www/LimeSurvey/application/views/survey/questions/answer/arrays/10point/rows/answer_row.twig");
    }
}
