<?php

/* __string_template__1633aca4f81825610fc981bd1ac1150f7ae53263f0ee4ec994011e262f854cd3 */
class __TwigTemplate_fd255dbc555b6973475d9dd327f7fb852569dffd6585301d92b8ed68b41c2c7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'nav_bar' => array($this, 'block_nav_bar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'themescripts' => array($this, 'block_themescripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 93, "block" => 108, "for" => 150);
        $filters = array();
        $functions = array("include" => 91, "registerScript" => 180, "registerTemplateCssFile" => 118, "image" => 127, "gT" => 136, "sprintf" => 166);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block', 'for'),
                array(),
                array('include', 'registerScript', 'registerTemplateCssFile', 'image', 'gT', 'sprintf')
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

        // line 15
        echo "


";
        // line 86
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 88
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
        // line 91
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/head.twig"));
        echo "

    <body class=\" ";
        // line 93
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
        // line 94
        if ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "ajaxmode", array()) == "on") && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array()) != 1))) {
            // line 95
            echo "            ";
            // line 96
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/ajax_indicator.twig"));
            echo "
        ";
        }
        // line 98
        echo "
        ";
        // line 100
        echo "        <div id=\"beginScripts\">
            <###begin###>
        </div>

        ";
        // line 105
        echo "        <article>

            <div id=\"";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "dynamicreload", array()));
        echo "\">
            ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 183
        echo "            </div>
        </article>
        ";
        // line 185
        $this->displayBlock('footer', $context, $blocks);
        // line 188
        echo "        <div id=\"bottomScripts\">
            <###end###>
        </div>
        ";
        // line 191
        $this->displayBlock('themescripts', $context, $blocks);
        // line 196
        echo "    </body>
</html>
";
    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        // line 109
        echo "                ";
        // line 110
        echo "                ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 113
        echo "

                ";
        // line 116
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 177
        echo "

            ";
        // line 180
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("BasicThemeScripts", " if(window.basicThemeScripts === undefined){ window.basicThemeScripts = new ThemeScripts(); } basicThemeScripts.initGlobal(); ", "POS_END"));
        echo "

            ";
    }

    // line 110
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 111
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/nav_bar.twig"));
        echo "
                ";
    }

    // line 116
    public function block_content($context, array $blocks = array())
    {
        // line 117
        echo "                    <div class=\"container-fluid\">
                    ";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerTemplateCssFile("./css/survey-list.css"));
        echo "
                
                    <div class=\"";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrow", array()));
        echo " row\" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "surveylistrow", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrow", array()));
        echo ">

                     <div class=\"col-xs-6 col-sm-12 text-center\">
                        ";
        // line 124
        echo "                        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/no_js_alert.twig"));
        echo "

                        <div id=\"";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "surveylistrowjumbotron", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowjumbotron", array()));
        echo ">
                            ";
        // line 127
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::image("./files/survey_list_header.jpg", $this->getAttribute(($context["aSurveyInfo"] ?? null), "name", array()), array("class" => "img-responsive center-block")));
        echo "
                            ";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sSiteName", array()));
        echo "
                            <div class=\"ls-js-hidden\">
                                ";
        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/language_changer_form.twig"));
        echo "
                            </div>
                        </div>

                        <div class=\"";
        // line 134
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdiva", array()));
        echo " col-xs-12\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdiva", array()));
        echo ">
                            <div class='";
        // line 135
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivadiv", array()));
        echo " h3' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivadiv", array()));
        echo ">
                                ";
        // line 136
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Acceso Restringido!"));
        echo "
                            </div>
                            <p>
                            <h4>Tal vez quieras:</h4>
                            <a href=\"../\"><button class=\"btn btn-success\">Ir a contestar la encuesta</button></a><br/><br/>
                            <a href=\"../limesurvey/index.php/admin\"><button class=\"btn btn-success\">Ir a la administraci&oacute;n de la encuesta</button></a><br/><br/>
                            <a href=\"../\"><button class=\"btn btn-success\">Ir a la administraci&oacute;n de alumnos, materias y profesores</button></a><br/>
                            </p>
                        </div>

                        <div class=\"";
        // line 146
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivb", array()));
        echo " col-xs-12\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivb", array()));
        echo ">
                            <div class='";
        // line 147
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivbdiv", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivbdiv", array()));
        echo ">
                                <ul class='";
        // line 148
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivbdivul", array()));
        echo " list-unstyled ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivbdivul", array()));
        echo ">

                                    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aSurveyInfo"] ?? null), "publicSurveys", array()));
        foreach ($context['_seq'] as $context["key"] => $context["oSurvey"]) {
            // line 151
            echo "                                    <li class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivbdivulli", array()));
            echo " btn-group col-sm-6 col-xs-12\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivbdivulli", array()));
            echo ">
                                        <a
                                        href=\"";
            // line 153
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["oSurvey"], "sSurveyUrl", array()));
            echo "\"
                                        title=\"";
            // line 154
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Start survey"));
            echo "\"
                                        lang=\"";
            // line 155
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["oSurvey"], "language", array()));
            echo "\"
                                        class=\"";
            // line 156
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivbdivullia", array()));
            echo " btn btn-primary col-xs-12\"  >
                                        ";
            // line 157
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["oSurvey"], "localizedTitle", array()));
            echo "
                                    </a>
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oSurvey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                            </ul>
                            </div>
                        </div>

                        <div class=\"";
        // line 165
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivc", array()));
        echo " col-xs-12 \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivc", array()));
        echo ">
                            ";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("Si necesita asistencia contacte a: %s ( %s )."), $this->getAttribute(($context["aSurveyInfo"] ?? null), "sSiteAdminName", array()), $this->getAttribute(($context["aSurveyInfo"] ?? null), "sSiteAdminEmail", array())));
        echo "
                        </div>
                      </div>
                    </div>

                    <div id=\"";
        // line 171
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "surveylistfooter", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistfooter", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfooter", array()));
        echo ">
                        <div class=\"";
        // line 172
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistfootercont", array()));
        echo " container\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfootercont", array()));
        echo ">
                        </div>
                    </div>
                </div>
                ";
    }

    // line 185
    public function block_footer($context, array $blocks = array())
    {
        // line 186
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/footer/footer.twig"));
        echo "
        ";
    }

    // line 191
    public function block_themescripts($context, array $blocks = array())
    {
        // line 192
        echo "        <script>
            window.basicThemeScripts.init();
        </script>
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__1633aca4f81825610fc981bd1ac1150f7ae53263f0ee4ec994011e262f854cd3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 192,  359 => 191,  352 => 186,  349 => 185,  338 => 172,  330 => 171,  322 => 166,  316 => 165,  310 => 161,  300 => 157,  296 => 156,  292 => 155,  288 => 154,  284 => 153,  276 => 151,  272 => 150,  265 => 148,  259 => 147,  253 => 146,  240 => 136,  234 => 135,  228 => 134,  221 => 130,  216 => 128,  212 => 127,  206 => 126,  200 => 124,  190 => 120,  185 => 118,  182 => 117,  179 => 116,  172 => 111,  169 => 110,  161 => 180,  157 => 177,  154 => 116,  150 => 113,  147 => 110,  145 => 109,  142 => 108,  136 => 196,  134 => 191,  129 => 188,  127 => 185,  123 => 183,  121 => 108,  117 => 107,  113 => 105,  107 => 100,  104 => 98,  98 => 96,  96 => 95,  94 => 94,  78 => 93,  72 => 91,  57 => 88,  53 => 86,  48 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__1633aca4f81825610fc981bd1ac1150f7ae53263f0ee4ec994011e262f854cd3", "");
    }
}
