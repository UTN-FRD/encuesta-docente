<?php

/* ./subviews/navigation/navigator.twig */
class __TwigTemplate_a43368c1cbd299f2061f8ffa6ccf7529eaceedde4a4434d7d8c6e6d03a4176ae extends Twig_Template
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
        $tags = array("set" => 23, "if" => 32);
        $filters = array();
        $functions = array("gT" => 35, "include" => 60);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
                array('gT', 'include')
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

        // line 21
        echo "
";
        // line 23
        $context["aNavigator"] = $this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", array());
        // line 24
        echo "
<!-- PRESENT THE NAVIGATOR -->
<div class=\"";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navigatorcontainer", array()));
        echo " row navigator space-col\" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "navigatorcontainer", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navigatorcontainer", array()));
        echo ">

    <!-- Previous button container -->
    <div class=\"";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navigatorbuttonl", array()));
        echo " col-xs-6 text-left\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navigatorbuttonl", array()));
        echo ">

        ";
        // line 32
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["aNavigator"] ?? null), "aMovePrev", array()), "show", array())) {
            // line 33
            echo "            <!-- Button previous -->
            <button ";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navigatorbuttonprev", array()));
            echo " accesskey=\"p\" class=\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aNavigator"] ?? null), "disabled", array()));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navigatorbuttonprev", array()));
            echo " btn btn-lg btn-default \" >
                ";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Previous"));
            echo "
            </button>
        ";
        }
        // line 38
        echo "    </div>
    <div class=\"";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navigatorbuttonr", array()));
        echo " col-xs-6 text-right\">

        ";
        // line 42
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["aNavigator"] ?? null), "aMoveNext", array()), "show", array())) {
            // line 43
            echo "
            ";
            // line 45
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["aNavigator"] ?? null), "aMoveNext", array()), "value", array()) == "movesubmit")) {
                // line 46
                echo "                <!-- Button submit -->
                <button ";
                // line 47
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navigatorbuttonsubmit", array()));
                echo " accesskey=\"n\" class=\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aNavigator"] ?? null), "disabled", array()));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navigatorbuttonsubmit", array()));
                echo " btn btn-lg btn-primary\">
                    ";
                // line 48
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Submit"));
                echo "
                </button>
            ";
            } else {
                // line 51
                echo "                <!-- Button Next -->
                <button ";
                // line 52
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "navigatorbuttonnext", array()));
                echo " accesskey=\"n\" class=\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aNavigator"] ?? null), "disabled", array()));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "navigatorbuttonnext", array()));
                echo " btn btn-lg btn-primary \" >
                    ";
                // line 53
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Next"));
                echo "
                </button>
            ";
            }
            // line 56
            echo "        ";
        }
        // line 57
        echo "    </div>
</div>
<!-- Extra navigator part -->
";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/navigator_complement.twig"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/navigator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 60,  143 => 57,  140 => 56,  134 => 53,  126 => 52,  123 => 51,  117 => 48,  109 => 47,  106 => 46,  103 => 45,  100 => 43,  97 => 42,  92 => 39,  89 => 38,  83 => 35,  75 => 34,  72 => 33,  69 => 32,  62 => 29,  52 => 26,  48 => 24,  46 => 23,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/navigation/navigator.twig", "C:\\xampp7\\htdocs\\encuesta-docente\\admin\\themes\\survey\\vanilla\\views\\subviews\\navigation\\navigator.twig");
    }
}
