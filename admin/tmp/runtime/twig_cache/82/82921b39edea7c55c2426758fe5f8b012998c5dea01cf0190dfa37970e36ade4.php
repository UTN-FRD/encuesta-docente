<?php

/* /survey/questions/answer/arrays/5point/rows/answer_row.twig */
class __TwigTemplate_3ec775e906e7c69fa4a272e60d25082ed9e0386947eb2dfef89eb6859c55fffe extends Twig_Template
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
        $tags = array("if" => 16);
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

        // line 14
        echo "
<!-- answer_row -->
<tr id=\"javatbd";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"answers-list radio-list form-group ";
        if (($context["odd"] ?? null)) {
            echo "ls-odd";
        } else {
            echo "ls-even";
        }
        if (($context["error"] ?? null)) {
            echo " ls-error-mandatory has-error";
        }
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sDisplayStyle"] ?? null));
        echo "  role=\"radiogroup\"  aria-labelledby=\"answertext";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\">
    <th id=\"answertext";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"answertext control-label";
        if ((($context["answerwidth"] ?? null) == 0)) {
            echo " sr-only  ";
        }
        echo "}\">
        ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answertext"] ?? null));
        echo "

        ";
        // line 21
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "hiddenField", array(0 => ("java" . ($context["myfname"] ?? null)), 1 => ($context["value"] ?? null), 2 => array("id" => ("java" .         // line 22
($context["myfname"] ?? null)), "disabled" => true)), "method"));
        // line 25
        echo "
    </th>
            ";
        // line 28
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answer_tds"] ?? null));
        echo "

</tr>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/5point/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  81 => 25,  79 => 22,  77 => 21,  72 => 18,  64 => 17,  47 => 16,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/arrays/5point/rows/answer_row.twig", "/var/www/LimeSurvey/application/views/survey/questions/answer/arrays/5point/rows/answer_row.twig");
    }
}
