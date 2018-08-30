<?php

/* ./subviews/logincomponents/captcha.twig */
class __TwigTemplate_7be9a4033e7e62d77de761bff1061fd18a00e5e4b6f3561287e04d0961d5002a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'formheading' => array($this, 'block_formheading'),
            'description' => array($this, 'block_description'),
            'formcontent' => array($this, 'block_formcontent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 2, "if" => 12, "for" => 14, "set" => 27);
        $filters = array();
        $functions = array("empty" => 12, "gT" => 3, "renderCaptcha" => 59);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'for', 'set'),
                array(),
                array('empty', 'gT', 'renderCaptcha')
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
        echo "<div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincoldivdiva", array()));
        echo " h3\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincoldivdiva", array()));
        echo ">
    ";
        // line 2
        $this->displayBlock('formheading', $context, $blocks);
        // line 5
        echo "</div>
<div class=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincoldivdivb", array()));
        echo " well container-fluid\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincoldivdivb", array()));
        echo ">

    ";
        // line 8
        $this->displayBlock('description', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        if ( !empty($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", array()), "aEnterErrors", array()))) {
            // line 13
            echo "        <ul class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincoldivdivbul", array()));
            echo " alert alert-danger list-unstyled' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincoldivdivbul", array()));
            echo ">
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", array()), "aEnterErrors", array()));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 15
                echo "                <li>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["error"]);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </ul>
    ";
        }
        // line 19
        echo "
    <div class=\"form-";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", array()), "sType", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincoldivdivbdiv", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincoldivdivbdiv", array()));
        echo " >
        ";
        // line 26
        echo "        ";
        // line 27
        $context["htmlOptions"] = array("id" => ("form-" . $this->getAttribute($this->getAttribute(        // line 28
($context["aSurveyInfo"] ?? null), "aForm", array()), "sType", array())), "name" => "limesurvey", "class" => "ls-form form form-horizontal");
        // line 33
        echo "
        ";
        // line 35
        echo "        <!-- Start of the main Form-->
        ";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(        // line 37
($context["C"] ?? null), "Html", array()), "form", array(0 => $this->getAttribute(        // line 38
($context["aSurveyInfo"] ?? null), "surveyUrl", array()), 1 => "post", 2 =>         // line 40
($context["htmlOptions"] ?? null)), "method"));
        // line 42
        echo "

        ";
        // line 44
        $this->displayBlock('formcontent', $context, $blocks);
        // line 76
        echo "        </form>
    </div>
</div>
";
    }

    // line 2
    public function block_formheading($context, array $blocks = array())
    {
        // line 3
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Before you start, please prove you are human."));
        echo "
    ";
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        // line 9
        echo "        
    ";
    }

    // line 44
    public function block_formcontent($context, array $blocks = array())
    {
        // line 45
        echo "
            <div class='";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivb", array()));
        echo "  form-group ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivb", array()));
        echo ">

                <!-- Doesn't seems aria capable -->
                <label class='";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivblabel", array()));
        echo " control-label col-sm-4' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivblabel", array()));
        echo " >
                    ";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Please solve the following equation:"));
        echo "
                    <small class=\"";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivblabelsmall", array()));
        echo " text-danger asterisk fa fa-asterisk pull-left small\"  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivblabelsmall", array()));
        echo " ></small>
                    <span  class=\"";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivblabelspan", array()));
        echo " sr-only text-danger asterisk\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivblabelspan", array()));
        echo ">
                        ( ";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Mandatory"));
        echo " )
                    <span>
                </label>
                <div class=\"col-sm-2\">
                    <div class='";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivbdivdivdiv", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivbdivdivdiv", array()));
        echo " >
                        ";
        // line 59
        echo "                        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(LS_Twig_Extension::renderCaptcha(), "renderOut", array(), "method"));
        echo "
                        <a href=\"#\" class=\"btn btn-sm btn-default\" id=\"reloadCaptcha\" title=\"";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Reload captcha"));
        echo "\" data-toggle=\"captcha\"><i class=\"fa fa-refresh\"></i></a>
                    </div>
                </div>
                <div class='";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivbdiv", array()));
        echo " col-sm-6' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivbdiv", array()));
        echo ">
                    <input class='form-control ";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivbdivdivinput", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivbdivdivinput", array()));
        echo " >
                </div>
            </div>

            <div class='";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivc", array()));
        echo " form-group ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivc", array()));
        echo ">
                <div class='";
        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivcdiv", array()));
        echo " col-sm-7 col-md-offset-3 ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivcdiv", array()));
        echo ">
                    <button class='";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "maincolformdivcdivbutton", array()));
        echo " btn btn-default' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "maincolformdivcdivbutton", array()));
        echo ">
                        ";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Continue"));
        echo "
                    </button>
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "./subviews/logincomponents/captcha.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 71,  241 => 70,  235 => 69,  229 => 68,  220 => 64,  214 => 63,  208 => 60,  203 => 59,  197 => 57,  190 => 53,  184 => 52,  178 => 51,  174 => 50,  168 => 49,  160 => 46,  157 => 45,  154 => 44,  149 => 9,  146 => 8,  139 => 3,  136 => 2,  129 => 76,  127 => 44,  123 => 42,  121 => 40,  120 => 38,  119 => 37,  118 => 36,  115 => 35,  112 => 33,  110 => 28,  109 => 27,  107 => 26,  99 => 20,  96 => 19,  92 => 17,  83 => 15,  79 => 14,  72 => 13,  70 => 12,  67 => 11,  65 => 8,  58 => 6,  55 => 5,  53 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{{ aSurveyInfo.class.maincoldivdiva }} h3\" {{ aSurveyInfo.attr.maincoldivdiva }}>
    {% block formheading %}
        {{ gT(\"Before you start, please prove you are human.\") }}
    {% endblock %}
</div>
<div class=\"{{ aSurveyInfo.class.maincoldivdivb }} well container-fluid\" {{ aSurveyInfo.attr.maincoldivdivb }}>

    {% block description %}
        
    {% endblock %}

    {% if  not empty(aSurveyInfo.aForm.aEnterErrors) %}
        <ul class='{{ aSurveyInfo.class.maincoldivdivbul }} alert alert-danger list-unstyled' {{ aSurveyInfo.attr.maincoldivdivbul }}>
            {% for  key, error in aSurveyInfo.aForm.aEnterErrors %}
                <li>{{ error }}</li>
            {% endfor %}
        </ul>
    {% endif %}

    <div class=\"form-{{ aSurveyInfo.aForm.sType }} {{ aSurveyInfo.class.maincoldivdivbdiv }}\" {{ aSurveyInfo.attr.maincoldivdivbdiv }} >
        {#
            array of attributes of the form tag.
            To add a new attribute, just add an entry:
            'attribute' : 'value',
        #}
        {%
            set htmlOptions = {
                'id'          : 'form-' ~ aSurveyInfo.aForm.sType ,
                'name'        : 'limesurvey',
                'class'       : 'ls-form form form-horizontal',
            }
        %}

        {#  TOKEN FORM #}
        <!-- Start of the main Form-->
        {{
            C.Html.form(
                ( aSurveyInfo.surveyUrl ),
                    'post',
                    (htmlOptions)
                )
        }}

        {% block formcontent  %}

            <div class='{{ aSurveyInfo.class.maincolformdivb }}  form-group ' {{ aSurveyInfo.attr.maincolformdivb }}>

                <!-- Doesn't seems aria capable -->
                <label class='{{ aSurveyInfo.class.maincolformdivblabel }} control-label col-sm-4' {{ aSurveyInfo.attr.maincolformdivblabel }} >
                    {{ gT(\"Please solve the following equation:\") }}
                    <small class=\"{{ aSurveyInfo.class.maincolformdivblabelsmall }} text-danger asterisk fa fa-asterisk pull-left small\"  {{ aSurveyInfo.attr.maincolformdivblabelsmall }} ></small>
                    <span  class=\"{{ aSurveyInfo.class.maincolformdivblabelspan }} sr-only text-danger asterisk\" {{ aSurveyInfo.attr.maincolformdivblabelspan }}>
                        ( {{ gT(\"Mandatory\") }} )
                    <span>
                </label>
                <div class=\"col-sm-2\">
                    <div class='{{ aSurveyInfo.class.maincolformdivbdivdivdiv }}' {{ aSurveyInfo.attr.maincolformdivbdivdivdiv }} >
                        {# see: LS_Twig_Extension::renderCaptcha() in application/core/LS_Twig_Extension.php #}
                        {{ renderCaptcha().renderOut() }}
                        <a href=\"#\" class=\"btn btn-sm btn-default\" id=\"reloadCaptcha\" title=\"{{ gT(\"Reload captcha\") }}\" data-toggle=\"captcha\"><i class=\"fa fa-refresh\"></i></a>
                    </div>
                </div>
                <div class='{{ aSurveyInfo.class.maincolformdivbdiv }} col-sm-6' {{ aSurveyInfo.attr.maincolformdivbdiv }}>
                    <input class='form-control {{ aSurveyInfo.class.maincolformdivbdivdivinput }}' {{ aSurveyInfo.attr.maincolformdivbdivdivinput }} >
                </div>
            </div>

            <div class='{{ aSurveyInfo.class.maincolformdivc }} form-group ' {{ aSurveyInfo.attr.maincolformdivc }}>
                <div class='{{ aSurveyInfo.class.maincolformdivcdiv }} col-sm-7 col-md-offset-3 ' {{ aSurveyInfo.attr.maincolformdivcdiv }}>
                    <button class='{{ aSurveyInfo.class.maincolformdivcdivbutton }} btn btn-default' {{ aSurveyInfo.attr.maincolformdivcdivbutton }}>
                        {{ gT(\"Continue\") }}
                    </button>
                </div>
            </div>
        {% endblock %}
        </form>
    </div>
</div>
", "./subviews/logincomponents/captcha.twig", "C:\\xampp\\htdocs\\LimeSurvey\\themes\\survey\\vanilla\\views\\subviews\\logincomponents\\captcha.twig");
    }
}
