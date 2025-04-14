<?php

/* ./subviews/print/print_question.twig */
class __TwigTemplate_f3f485f98b988156766d94f4d65fe7269049ff380681933b0286f2253ef93ee9 extends Twig_Template
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

        // line 1
        echo "<div id=\"question";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "qid", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "class", array()));
        echo " question-wrapper\">
    <div class=\"q-text\">
        <h3>";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "number", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute(($context["question"] ?? null), "code", array())) ? ((("[" . $this->getAttribute(($context["question"] ?? null), "code", array())) . "]")) : ("")));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "text", array()));
        echo "
            <span class=\"mandatory\">";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "mandatory", array()));
        echo "</span>
        </h3>
        <p class=\"q-scenaria\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "scenario", array()));
        echo "</p>
        <p class=\"q-type-help\">";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "type_help", array()));
        echo "</p>
        <p class=\"q-man-message\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "man_message", array()));
        echo "</p>
        <p class=\"q-validation\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "valid_message", array()));
        echo "</p>
        <p class=\"q-fvalidation\">";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "file_valid_message", array()));
        echo "</p>
    </div>
    <div class=\"q-answer\">
        ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "answer", array()));
        echo "
    </div>
    <div class=\"q-help\">
        ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["question"] ?? null), "help", array()));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/print/print_question.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 16,  85 => 13,  79 => 10,  75 => 9,  71 => 8,  67 => 7,  63 => 6,  58 => 4,  51 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/print/print_question.twig", "C:\\xampp7.2.24\\htdocs\\encuesta-docente\\admin\\themes\\survey\\vanilla\\views\\subviews\\print\\print_question.twig");
    }
}
