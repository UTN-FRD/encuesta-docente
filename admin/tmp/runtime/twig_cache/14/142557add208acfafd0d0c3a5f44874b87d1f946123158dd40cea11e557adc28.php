<?php

/* /survey/questions/answer/longfreetext/answer.twig */
class __TwigTemplate_8a4ce2fe6c9fb053c6a43a2aa7b354a1f97cf0a88fc5fdbc8ec04a21bb8d4c20 extends Twig_Template
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
        $tags = array("if" => 17);
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
        echo "<!-- Long Free Text -->

<!-- answer -->
";
        // line 17
        if (($context["withColumn"] ?? null)) {
            // line 18
            echo "<div class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
            echo " row'>
    <div class=\"";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["extraclass"] ?? null));
            echo "\">
";
        } else {
            // line 21
            echo "<div class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["extraclass"] ?? null));
            echo "'>
";
        }
        // line 23
        echo "    <textarea
        class=\"form-control ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["kpclass"] ?? null));
        echo "\"
        name=\"";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
        id=\"answer";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
        rows=\"";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["drows"] ?? null));
        echo "\"
        ";
        // line 28
        if (($context["inputsize"] ?? null)) {
            echo " cols=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["inputsize"] ?? null));
            echo "\" ";
        }
        // line 29
        echo "        ";
        if (($context["maxlength"] ?? null)) {
            echo " maxlength=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["maxlength"] ?? null));
            echo "\" ";
        }
        // line 30
        echo "        aria-labelledby=\"ls-question-text-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\"
    >";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["dispVal"] ?? null));
        echo "</textarea>
";
        // line 32
        if (($context["withColumn"] ?? null)) {
            // line 33
            echo "    </div>
</div>
";
        } else {
            // line 36
            echo "</div>
";
        }
        // line 38
        echo "
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/longfreetext/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 38,  116 => 36,  111 => 33,  109 => 32,  105 => 31,  100 => 30,  93 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 24,  68 => 23,  60 => 21,  55 => 19,  50 => 18,  48 => 17,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/longfreetext/answer.twig", "C:\\xampp7\\htdocs\\encuesta-docente\\admin\\application\\views\\survey\\questions\\answer\\longfreetext\\answer.twig");
    }
}
