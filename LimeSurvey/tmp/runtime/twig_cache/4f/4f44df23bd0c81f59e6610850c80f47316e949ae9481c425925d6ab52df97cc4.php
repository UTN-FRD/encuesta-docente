<?php

/* __string_template__5e697c17d830b4adc613afe2f58ba951aa147c16819e3bbec628e993282c6942 */
class __TwigTemplate_6ed3e6d2f5dc77340f371f145e66d4cd67e414318f750eba6c4d56b9ef3af0e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'ajaxindicator' => array($this, 'block_ajaxindicator'),
            'pjaxbegin' => array($this, 'block_pjaxbegin'),
            'body' => array($this, 'block_body'),
            'nav_bar' => array($this, 'block_nav_bar'),
            'progress' => array($this, 'block_progress'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'pjaxend' => array($this, 'block_pjaxend'),
            'themescripts' => array($this, 'block_themescripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 72, "if" => 76, "set" => 115, "include" => 116);
        $filters = array();
        $functions = array("include" => 74, "registerScript" => 123);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'set', 'include'),
                array(),
                array('include', 'registerScript')
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

        // line 69
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo "\" dir=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo " dir-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "html", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "html", array()));
        echo ">
    ";
        // line 72
        $this->displayBlock('head', $context, $blocks);
        // line 76
        echo "    <body style=\"padding-top: 90px;\" class=\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "body", array()));
        echo " font-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "font", array()));
        echo " lang-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyformat", array()));
        echo " ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "brandlogo", array()) == "on")) {
            echo "brand-logo";
        }
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "body", array()));
        echo " >
        ";
        // line 77
        if ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "ajaxmode", array()) == "on") && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array()) != 1))) {
            // line 78
            echo "            ";
            $this->displayBlock('ajaxindicator', $context, $blocks);
            // line 82
            echo "            
        ";
        }
        // line 84
        echo "
        ";
        // line 86
        echo "        ";
        $this->displayBlock('pjaxbegin', $context, $blocks);
        // line 90
        echo "       

        ";
        // line 93
        echo "        <article>
        lalalalal

            <div id=\"";
        // line 96
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "dynamicreload", array()));
        echo "\">
            ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "            </div>

        </article>
        ";
        // line 134
        $this->displayBlock('footer', $context, $blocks);
        // line 137
        echo "        ";
        $this->displayBlock('pjaxend', $context, $blocks);
        // line 141
        echo "   

        ";
        // line 143
        $this->displayBlock('themescripts', $context, $blocks);
        // line 148
        echo "        
    </body>
</html>
";
    }

    // line 72
    public function block_head($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        // line 74
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/head.twig"));
        echo "
    ";
    }

    // line 78
    public function block_ajaxindicator($context, array $blocks = array())
    {
        // line 79
        echo "            ";
        // line 80
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/ajax_indicator.twig"));
        echo "
            ";
    }

    // line 86
    public function block_pjaxbegin($context, array $blocks = array())
    {
        // line 87
        echo "            <div id=\"beginScripts\" class=\"script-container\">
                <###begin###>
            </div>
        ";
    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
        // line 98
        echo "
                ";
        // line 100
        echo "                ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 103
        echo "
                ";
        // line 105
        echo "                ";
        $this->displayBlock('progress', $context, $blocks);
        // line 108
        echo "
                <!-- Outer Frame Container -->
                ";
        // line 110
        $this->displayBlock('content', $context, $blocks);
        // line 118
        echo "
                ";
        // line 120
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/bootstrap_alert_modal.twig"));
        echo "

                ";
        // line 123
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("BasicThemeScripts", "
                if(window.basicThemeScripts === undefined){ 
                    window.basicThemeScripts = new ThemeScripts(); 
                } 
                basicThemeScripts.initGlobal(); 
                ", "POS_END"));
        // line 128
        echo "

            ";
    }

    // line 100
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 101
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/nav_bar.twig"));
        echo "
                ";
    }

    // line 105
    public function block_progress($context, array $blocks = array())
    {
        // line 106
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/progress_bar.twig"));
        echo "
                ";
    }

    // line 110
    public function block_content($context, array $blocks = array())
    {
        // line 111
        echo "                    ";
        // line 115
        echo "                    ";
        $context["sViewContent"] = (("./subviews/content/" . $this->getAttribute(($context["aSurveyInfo"] ?? null), "include_content", array())) . ".twig");
        // line 116
        echo "                    ";
        $this->loadTemplate("./subviews/content/outerframe.twig", "__string_template__5e697c17d830b4adc613afe2f58ba951aa147c16819e3bbec628e993282c6942", 116)->display(array_merge($context, array("include_content" => ($context["sViewContent"] ?? null))));
        // line 117
        echo "                ";
    }

    // line 134
    public function block_footer($context, array $blocks = array())
    {
        // line 135
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/footer/footer.twig"));
        echo "
        ";
    }

    // line 137
    public function block_pjaxend($context, array $blocks = array())
    {
        // line 138
        echo "            <div id=\"bottomScripts\" class=\"script-container\">
                <###end###>
            </div>
        ";
    }

    // line 143
    public function block_themescripts($context, array $blocks = array())
    {
        // line 144
        echo "            <script>
                window.basicThemeScripts.init();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__5e697c17d830b4adc613afe2f58ba951aa147c16819e3bbec628e993282c6942";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 144,  276 => 143,  269 => 138,  266 => 137,  259 => 135,  256 => 134,  252 => 117,  249 => 116,  246 => 115,  244 => 111,  241 => 110,  234 => 106,  231 => 105,  224 => 101,  221 => 100,  215 => 128,  207 => 123,  201 => 120,  198 => 118,  196 => 110,  192 => 108,  189 => 105,  186 => 103,  183 => 100,  180 => 98,  177 => 97,  170 => 87,  167 => 86,  160 => 80,  158 => 79,  155 => 78,  148 => 74,  146 => 73,  143 => 72,  136 => 148,  134 => 143,  130 => 141,  127 => 137,  125 => 134,  120 => 131,  118 => 97,  114 => 96,  109 => 93,  105 => 90,  102 => 86,  99 => 84,  95 => 82,  92 => 78,  90 => 77,  73 => 76,  71 => 72,  57 => 71,  53 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__5e697c17d830b4adc613afe2f58ba951aa147c16819e3bbec628e993282c6942", "");
    }
}
