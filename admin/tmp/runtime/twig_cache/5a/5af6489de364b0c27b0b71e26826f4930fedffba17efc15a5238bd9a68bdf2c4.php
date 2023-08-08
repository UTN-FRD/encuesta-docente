<?php

/* ./subviews/logincomponents/token.twig */
class __TwigTemplate_5e1e49cbc8ee19b17534188a13722fa9df0f9a708a74d831365b4ae9f45f1325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./subviews/logincomponents/captcha.twig", "./subviews/logincomponents/token.twig", 1);
        $this->blocks = array(
            'formheading' => array($this, 'block_formheading'),
            'description' => array($this, 'block_description'),
            'formcontent' => array($this, 'block_formcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "./subviews/logincomponents/captcha.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 9, "set" => 35);
        $filters = array();
        $functions = array("gT" => 4, "renderCaptcha" => 69);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array('gT', 'renderCaptcha')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_formheading($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("To participate in this restricted survey, you need a valid token."));
        echo "
    ";
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        // line 8
        echo "        <p class='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincoldivdivbp", array()));
        echo " text-info' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincoldivdivbp", array()));
        echo ">
            ";
        // line 9
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", array()), "token", array()) == null)) {
            // line 10
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("If you have been issued a token, please enter it in the box below and click continue."));
            echo "
            ";
        } else {
            // line 12
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Please confirm the token by answering the security question below and click continue."));
            echo "
            ";
        }
        // line 14
        echo "        </p>
    ";
    }

    // line 18
    public function block_formcontent($context, array $blocks = array())
    {
        // line 19
        echo "
        <div class='";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolform", array()));
        echo " form-group' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolform", array()));
        echo ">
            <label class='";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformlabel", array()));
        echo " control-label col-sm-3' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformlabel", array()));
        echo ">
                <small class=\"";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformlabelsmall", array()));
        echo " text-danger asterisk fa fa-asterisk small \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformlabelsmall", array()));
        echo " ></small>
                ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Token:"));
        echo "
                <span class=\"";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformlabelspan", array()));
        echo " sr-only text-danger asterisk \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformlabelspan", array()));
        echo ">
                    ( ";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Mandatory"));
        echo " )
                <span>

            </label>

            <div class='";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdiva", array()));
        echo " col-sm-7' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdiva", array()));
        echo ">
                ";
        // line 31
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", array()), "token", array()) == null)) {
            // line 32
            echo "                    <input class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivainput", array()));
            echo " form-control' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivainput", array()));
            echo " >
                ";
        } else {
            // line 34
            echo "
                    ";
            // line 35
            $context["passwordFieldHtmlOptions"] = array("id" => "token", "required" => true, "readonly" => true, "class" => "form-control");
            // line 42
            echo "
                    ";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(            // line 44
($context["C"] ?? null), "Html", array()), "passwordField", array(0 => "token", 1 => $this->getAttribute($this->getAttribute(            // line 46
($context["aSurveyInfo"] ?? null), "aForm", array()), "token", array()), 2 =>             // line 47
($context["passwordFieldHtmlOptions"] ?? null)), "method"));
            // line 49
            echo "
                ";
        }
        // line 51
        echo "            </div>
        </div>

        ";
        // line 55
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", array()), "bCaptchaEnabled", array()) == true)) {
            // line 56
            echo "            <div class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivb", array()));
            echo "  form-group ' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivb", array()));
            echo ">

                <!-- Doesn't seems aria capable -->
                <label class='";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivblabel", array()));
            echo " control-label col-sm-3' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivblabel", array()));
            echo " >
                    ";
            // line 60
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Please solve the following equation:"));
            echo "
                    <small class=\"";
            // line 61
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivblabelsmall", array()));
            echo " text-danger asterisk fa fa-asterisk pull-left small\"  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivblabelsmall", array()));
            echo " ></small>
                    <span  class=\"";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivblabelspan", array()));
            echo " sr-only text-danger asterisk\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivblabelspan", array()));
            echo ">
                        ( ";
            // line 63
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Mandatory"));
            echo " )
                    <span>
                </label>
                <div class=\"col-sm-2\">
                    <div class='";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivbdivdivdiv", array()));
            echo "' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivbdivdivdiv", array()));
            echo " >
                        ";
            // line 69
            echo "                        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(LS_Twig_Extension::renderCaptcha(), "renderOut", array(), "method"));
            echo "
                        <a href=\"#\" class=\"btn btn-sm btn-default\" id=\"reloadCaptcha\" title=\"";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Reload captcha"));
            echo "\" data-toggle=\"captcha\"><i class=\"fa fa-refresh\"></i></a>
                    </div>
                </div>
                <div class='";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivbdiv", array()));
            echo " col-sm-5' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivbdiv", array()));
            echo ">
                    <input class='form-control ";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivbdivdivinput", array()));
            echo "' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivbdivdivinput", array()));
            echo " >
                </div>
            </div>
        ";
        }
        // line 78
        echo "
        ";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", array()), "hiddenFields", array()));
        echo "

        <div class='";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivc", array()));
        echo " form-group ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivc", array()));
        echo ">
            <div class='";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivcdiv", array()));
        echo " col-sm-7 col-md-offset-3 ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivcdiv", array()));
        echo ">
                <button type=\"submit\" class='";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivcdivbutton", array()));
        echo " btn btn-default' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivcdivbutton", array()));
        echo ">
                    ";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Continue"));
        echo "
                </button>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "./subviews/logincomponents/token.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 84,  266 => 83,  260 => 82,  254 => 81,  249 => 79,  246 => 78,  237 => 74,  231 => 73,  225 => 70,  220 => 69,  214 => 67,  207 => 63,  201 => 62,  195 => 61,  191 => 60,  185 => 59,  176 => 56,  173 => 55,  168 => 51,  164 => 49,  162 => 47,  161 => 46,  160 => 44,  159 => 43,  156 => 42,  154 => 35,  151 => 34,  143 => 32,  141 => 31,  135 => 30,  127 => 25,  121 => 24,  117 => 23,  111 => 22,  105 => 21,  99 => 20,  96 => 19,  93 => 18,  88 => 14,  82 => 12,  76 => 10,  74 => 9,  67 => 8,  64 => 7,  57 => 4,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/logincomponents/token.twig", "/var/www/LimeSurvey/themes/survey/vanilla/views/subviews/logincomponents/token.twig");
    }
}
