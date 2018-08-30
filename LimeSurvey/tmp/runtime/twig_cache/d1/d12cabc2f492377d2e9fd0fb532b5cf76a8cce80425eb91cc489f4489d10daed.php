<?php

/* /survey/questions/answer/shortfreetext/text/item.twig */
class __TwigTemplate_2289cc337791f401b90e9a4bc8481355f5a8fb05920e5ed6fcfa5e305b2ddef1 extends Twig_Template
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
        $tags = array("if" => 18);
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

        // line 16
        echo "
<!-- answer -->
";
        // line 18
        if (($context["withColumn"] ?? null)) {
            // line 19
            echo "<div class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
            echo " row'>
    <div class=\"";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["extraclass"] ?? null));
            echo "\">
";
        } else {
            // line 22
            echo "<div class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["extraclass"] ?? null));
            echo "'>
";
        }
        // line 24
        echo "    ";
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 25
            echo "        <div class=\"ls-input-group\">
    ";
        }
        // line 27
        echo "        <!-- Prefix -->
        ";
        // line 28
        if ((($context["prefix"] ?? null) != "")) {
            // line 29
            echo "            <div class='ls-input-group-extra prefix-text prefix'>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["prefix"] ?? null));
            echo "</div>
        ";
        }
        // line 31
        echo "
        <!-- Input -->
        <input
            class=\"form-control ";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["kpclass"] ?? null));
        echo "\"
            type=\"text\"
            name=\"";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
            id=\"answer";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
            value=\"";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["dispVal"] ?? null));
        echo "\"
            ";
        // line 39
        if (($context["inputsize"] ?? null)) {
            echo "size=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["inputsize"] ?? null));
            echo "\" ";
        }
        // line 40
        echo "            ";
        if (($context["maxlength"] ?? null)) {
            echo "maxlength=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["maxlength"] ?? null));
            echo "\" ";
        }
        // line 41
        echo "            aria-labelledby=\"ls-question-text-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\"
        />

        <!-- Suffix -->
        ";
        // line 45
        if ((($context["suffix"] ?? null) != "")) {
            // line 46
            echo "            <div class='ls-input-group-extra suffix-text suffix'>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["suffix"] ?? null));
            echo "</div>
        ";
        }
        // line 48
        echo "    ";
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 49
            echo "        </div>
    ";
        }
        // line 51
        if (($context["withColumn"] ?? null)) {
            // line 52
            echo "    </div>
</div>

";
        } else {
            // line 56
            echo "</div>
";
        }
        // line 58
        echo "
<!-- end of answer -->";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/shortfreetext/text/item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 58,  151 => 56,  145 => 52,  143 => 51,  139 => 49,  136 => 48,  130 => 46,  128 => 45,  120 => 41,  113 => 40,  107 => 39,  103 => 38,  99 => 37,  95 => 36,  90 => 34,  85 => 31,  79 => 29,  77 => 28,  74 => 27,  70 => 25,  67 => 24,  59 => 22,  54 => 20,  49 => 19,  47 => 18,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/shortfreetext/text/item.twig", "C:\\xampp\\htdocs\\LimeSurvey\\application\\views\\survey\\questions\\answer\\shortfreetext\\text\\item.twig");
    }
}
