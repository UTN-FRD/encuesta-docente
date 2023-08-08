<?php

/* ./subviews/messages/warnings.twig */
class __TwigTemplate_a7b4f9409de6fd4c5f762ea4f0e3163fa76bdb7de7348878c8a6b4be76f7ab65 extends Twig_Template
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
        $tags = array("if" => 29, "for" => 50);
        $filters = array();
        $functions = array("gT" => 33);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 27
        echo "
";
        // line 29
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "active", array()) != "Y")) {
            // line 30
            echo "    <!-- Preview mode warning -->
    <div class=\"";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "activealert", array()));
            echo " alert alert-warning alert-dismissible fade in alert-dismissible\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "activealert", array()));
            echo " >
        <button  ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "activealertbutton", array()));
            echo " class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "activealertbutton", array()));
            echo " close\" ><span aria-hidden=\"true\">×</span></button>
        ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("This survey is currently not active. You will not be able to save your responses."));
            echo "
    </div>
";
        }
        // line 36
        echo "
";
        // line 38
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecuritynotaccepted", array()) == true)) {
            // line 39
            echo "    <!-- Preview mode warning -->
    <div class=\"";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "activealert", array()));
            echo " alert alert-danger alert-dismissible fade in alert-dismissible\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "activealert", array()));
            echo " >
        <button  ";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "activealertbutton", array()));
            echo " class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "activealertbutton", array()));
            echo " close\" ><span aria-hidden=\"true\">×</span></button>
        ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecurity_error", array()));
            echo "
    </div>
";
        }
        // line 45
        echo "
";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "errorHtml", array()), "show", array())) {
            // line 48
            echo "    <p class=' ";
            echo " fade in alert-dismissible alert alert-danger ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "errorHtml", array()));
            echo " ' role='alert'>
        <button  ";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "errorHtmlbutton", array()));
            echo " class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "errorHtmlbutton", array()));
            echo " close\" ><span aria-hidden=\"true\">×</span></button>
    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "errorHtml", array()), "messages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["aMessage"]) {
                // line 51
                echo "        <!-- Error Html warnings -->
            ";
                // line 52
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["aMessage"]);
                echo "
            <br/>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/messages/warnings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 55,  119 => 52,  116 => 51,  112 => 50,  106 => 49,  100 => 48,  98 => 47,  95 => 45,  89 => 42,  83 => 41,  77 => 40,  74 => 39,  72 => 38,  69 => 36,  63 => 33,  57 => 32,  51 => 31,  48 => 30,  46 => 29,  43 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/messages/warnings.twig", "/var/www/LimeSurvey/themes/survey/vanilla/views/subviews/messages/warnings.twig");
    }
}
