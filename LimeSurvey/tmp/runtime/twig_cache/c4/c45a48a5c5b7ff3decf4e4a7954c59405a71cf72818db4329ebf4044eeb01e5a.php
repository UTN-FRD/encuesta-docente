<?php

/* ./subviews/navigation/language_changer.twig */
class __TwigTemplate_6bc4ed8e7fc0b1efc1f4d285c22197b563cfedf094a525cfc744540f1525528f extends Twig_Template
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
        $tags = array("if" => 12, "set" => 15);
        $filters = array();
        $functions = array("gT" => 30, "registerScript" => 57);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array('gT', 'registerScript')
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
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "alanguageChanger", array()), "show", array()) == true)) {
            // line 13
            echo "
    ";
            // line 15
            echo "    ";
            $context["aLCD"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "alanguageChanger", array()), "datas", array());
            // line 16
            echo "
    ";
            // line 22
            echo "    ";
            $context["htmlOptions"] = array("class" => "form-control", "data-targeturl" => $this->getAttribute(            // line 24
($context["aLCD"] ?? null), "targetUrl", array()));
            // line 27
            echo "    <!-- Language Changer -->
    <div class=\" ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "formgroup", array()));
            echo " form-change-lang form-inline\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "formgroup", array()));
            echo " >
        <label class=\"";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "controllabel", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "controllabel", array()));
            echo " for=\"lang\">
            <span class=\"control-label\" ";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "languagechanger", array()));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Language:"));
            echo "</span>
            ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(            // line 32
($context["C"] ?? null), "Html", array()), "dropDownList", array(0 => "lang", 1 => $this->getAttribute(            // line 34
($context["aLCD"] ?? null), "sSelected", array()), 2 => $this->getAttribute(            // line 35
($context["aLCD"] ?? null), "aListLang", array()), 3 =>             // line 36
($context["htmlOptions"] ?? null)), "method"));
            // line 38
            echo "
        </label>
        <!-- for no js functionality (need form) -->
        ";
            // line 41
            $context["buttonhtmlOptions"] = array("type" => "submit", "value" => "changelang", "name" => "move", "class" => "btn btn-info ls-js-hidden ls-language-changer-item ");
            // line 48
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(            // line 49
($context["C"] ?? null), "Html", array()), "htmlButton", array(0 => gT("Change the language"), 1 =>             // line 51
($context["buttonhtmlOptions"] ?? null)), "method"));
            // line 53
            echo "
    </div>

    ";
            // line 57
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("activateLanguageChanger", "activateLanguageChanger(); ", "POS_END"));
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/language_changer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 57,  100 => 53,  98 => 51,  97 => 49,  95 => 48,  93 => 41,  88 => 38,  86 => 36,  85 => 35,  84 => 34,  83 => 32,  82 => 31,  76 => 30,  70 => 29,  64 => 28,  61 => 27,  59 => 24,  57 => 22,  54 => 16,  51 => 15,  48 => 13,  46 => 12,  43 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/navigation/language_changer.twig", "C:\\xampp\\htdocs\\LimeSurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\language_changer.twig");
    }
}
