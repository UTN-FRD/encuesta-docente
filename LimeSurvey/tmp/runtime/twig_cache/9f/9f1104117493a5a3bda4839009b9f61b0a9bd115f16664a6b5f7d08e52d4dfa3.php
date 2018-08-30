<?php

/* ./subviews/content/save.twig */
class __TwigTemplate_d771d1a2e5bd911fb031239122d905bdccacecf698dc5e8627f9d5999a39dca7 extends Twig_Template
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
        $tags = array("if" => 57, "for" => 59, "set" => 70);
        $filters = array();
        $functions = array("include" => 37, "gT" => 43, "count" => 57, "getPost" => 116);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array(),
                array('include', 'gT', 'count', 'getPost')
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

        // line 32
        echo "



";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/start_form.twig"));
        echo " <!-- main form -->

    ";
        // line 40
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "EM", array()), "ScriptsAndHiddenInputs", array()));
        echo "

    <div class=\"";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "savecontainer", array()));
        echo " well clearfix \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savecontainer", array()));
        echo ">
        <div class=\"";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "savecontainertitle", array()));
        echo " h2\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savecontainertitle", array()));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Save your unfinished survey"));
        echo "</div>
        <div class=\"";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "savecontainertext", array()));
        echo " text-info\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savecontainertext", array()));
        echo ">
            <p ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savecontainertextpa", array()));
        echo "> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Enter a name and password for this survey and click save below."));
        echo " </p>
            <p ";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savecontainertextpb", array()));
        echo "> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Your survey will be saved using that name and password, and can be completed later by logging in with the same name and password."));
        echo " </p>
            <p class='";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "savecontainertextpc", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savecontainertextpc", array()));
        echo "> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("If you give an email address, an email containing the details will be sent to you."));
        echo " </p>
            <p ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savecontainertextpd", array()));
        echo "> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("After having clicked the save button you can either close this browser window or continue filling out the survey."));
        echo " </p>
        </div>
        <div class=\"";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "savecontainerwarning", array()));
        echo " text-warning\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "savecontainerwarning", array()));
        echo ">
            <p> ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("To remain anonymous please use a pseudonym as your username, also an email address is not required."));
        echo " </p>
        </div>
    </div>

    <div class=\"";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformcontainer", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformcontainer", array()));
        echo ">

        ";
        // line 57
        if ((count($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aSaveForm", array()), "aErrors", array())) > 0)) {
            // line 58
            echo "            <ul class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aSaveForm", array()), "sClass", array()));
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformcontainerul", array()));
            echo " alert alert-danger list-unstyled '  >
                ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aSaveForm", array()), "aErrors", array()));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 60
                echo "                    <li ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformcontainerli", array()));
                echo " >";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["error"]);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            </ul>
        ";
        }
        // line 64
        echo "
        ";
        // line 70
        echo "        ";
        $context["htmlOptions"] = array("id" => "form-save", "name" => "form-save", "class" => "ls-form");
        // line 76
        echo "
        ";
        // line 82
        echo "        <!-- Save Form -->
        ";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(        // line 84
($context["C"] ?? null), "Html", array()), "form", array(0 => $this->getAttribute(        // line 85
($context["aSurveyInfo"] ?? null), "surveyUrl", array()), 1 => "post", 2 =>         // line 87
($context["htmlOptions"] ?? null)), "method"));
        // line 89
        echo "
            <!-- Hidden fields  -->
            ";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aSaveForm", array()), "sHiddenField", array()));
        echo "

            <!-- Name and Password -->
            <div class='";
        // line 94
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurvey", array()));
        echo " form-horizontal' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurvey", array()));
        echo ">
                <div class='";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydiva", array()));
        echo " form-group ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydiva", array()));
        echo ">

                    <!-- Saved name  -->
                    <label class='";
        // line 98
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivalabel", array()));
        echo " control-label col-sm-3' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivalabel", array()));
        echo ">
                        ";
        // line 99
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Name:"));
        echo "
                        <small class=\"";
        // line 100
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivalabelsmall", array()));
        echo " text-danger asterisk fa fa-asterisk pull-left small \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivalabelsmall", array()));
        echo " ></small>
                        <span class=\"";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivalabelspan", array()));
        echo " sr-only text-danger asterisk\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivalabelspan", array()));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Mandatory"));
        echo "<span>
                    </label>
                    <div class='";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivb", array()));
        echo " col-sm-7 ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivb", array()));
        echo ">

                        ";
        // line 105
        $context["htmlOptions"] = array("id" => "savename", "name" => "savename", "class" => "form-control", "required" => true);
        // line 112
        echo "
                        ";
        // line 114
        echo "                        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "textField", array(0 => "savename", 1 => LS_Twig_Extension::getPost("savename"), 2 =>         // line 117
($context["htmlOptions"] ?? null)), "method"));
        // line 118
        echo "
                    </div>

                </div>

                <!-- Password -->
                <div class='";
        // line 124
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivc", array()));
        echo " form-group' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivc", array()));
        echo ">
                    <label class='";
        // line 125
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivclabel", array()));
        echo " control-label col-sm-3 ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivclabel", array()));
        echo ">
                        ";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Password:"));
        echo "
                        <small class=\"";
        // line 127
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivcsmall", array()));
        echo " text-danger asterisk fa fa-asterisk pull-left small\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivcsmall", array()));
        echo " ></small>
                        <span class=\"";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivcspan", array()));
        echo " sr-only text-danger asterisk\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivcspan", array()));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Mandatory"));
        echo "<span>
                    </label>

                    <div class='";
        // line 131
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivcdiv", array()));
        echo " col-sm-7 ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivcdiv", array()));
        echo ">

                        ";
        // line 133
        $context["htmlOptions"] = array("id" => "savepass", "name" => "savepass", "class" => "form-control", "required" => true);
        // line 140
        echo "
                        ";
        // line 141
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "passwordField", array(0 => "savepass", 1 => "", 2 =>         // line 144
($context["htmlOptions"] ?? null)), "method"));
        // line 145
        echo "
                    </div>
                </div>

                <!-- Confirm password -->
                <div class='";
        // line 150
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivd", array()));
        echo " form-group ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivd", array()));
        echo ">
                    <label class='";
        // line 151
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivdlabel", array()));
        echo " control-label col-sm-3 ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivdlabel", array()));
        echo " >
                        ";
        // line 152
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Repeat password:"));
        echo "
                        <small class=\"";
        // line 153
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivdlabelsmall", array()));
        echo "  text-danger asterisk fa fa-asterisk pull-left small\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivdlabelsmall", array()));
        echo "></small>
                        <span class=\"";
        // line 154
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivdlabelspan", array()));
        echo " sr-only text-danger asterisk\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivdlabelspan", array()));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Mandatory"));
        echo "<span>
                    </label>

                    <div class='";
        // line 157
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivddiv", array()));
        echo " col-sm-7 ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivddiv", array()));
        echo ">
                        ";
        // line 158
        $context["htmlOptions"] = array("id" => "savepass2", "name" => "savepass2", "class" => "form-control", "required" => true);
        // line 165
        echo "
                        ";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "passwordField", array(0 => "savepass2", 1 => "", 2 =>         // line 169
($context["htmlOptions"] ?? null)), "method"));
        // line 170
        echo "
                    </div>
                </div>

                <!-- Email -->
                <div class='";
        // line 175
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydive", array()));
        echo "  form-group ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydive", array()));
        echo ">
                    <label class='";
        // line 176
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivelabel", array()));
        echo " control-label col-sm-3 ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivelabel", array()));
        echo " >
                        ";
        // line 177
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Your email address:"));
        echo "
                    </label>
                    <div class='";
        // line 179
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivediv", array()));
        echo " col-sm-7 ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivediv", array()));
        echo ">

                        ";
        // line 181
        $context["htmlOptions"] = array("id" => "saveemail", "name" => "saveemail", "class" => "form-control");
        // line 187
        echo "
                        ";
        // line 188
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "emailField", array(0 => "saveemail", 1 => "", 2 =>         // line 191
($context["htmlOptions"] ?? null)), "method"));
        // line 192
        echo "
                    </div>
                </div>


                ";
        // line 197
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aSaveForm", array()), "aCaptcha", array()), "show", array())) {
            // line 198
            echo "                    <!-- Captcha -->
                    <div class='";
            // line 199
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivf", array()));
            echo " form-group ' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivd", array()));
            echo " >
                        <label class='";
            // line 200
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivflabel", array()));
            echo " control-label col-sm-3 ' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivdlabel", array()));
            echo "  >
                            ";
            // line 201
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Security question:"));
            echo "
                        </label>
                        <div class='";
            // line 203
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivfdiv", array()));
            echo " col-sm-7 ' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivddiv", array()));
            echo " >
                            <div class='";
            // line 204
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivfdivdiv", array()));
            echo " input-group' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivddivdiv", array()));
            echo ">
                                <div class='";
            // line 205
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivfdivdivdiv", array()));
            echo " ' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivddivdivdiv", array()));
            echo " >
                                    <img src='";
            // line 206
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aSaveForm", array()), "aCaptcha", array()), "sImageUrl", array()));
            echo "' ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivddivdivdivimg", array()));
            echo "   />
                                </div>
                                <input class='";
            // line 208
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivfdivdivinput", array()));
            echo "  form-control'  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivddivdivinput", array()));
            echo " />
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 213
        echo "
                <!-- save button -->
                <div class='";
        // line 215
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivg", array()));
        echo " form-group' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivg", array()));
        echo ">
                    <div class='";
        // line 216
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivgdiv", array()));
        echo "  col-sm-7 col-md-offset-3' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivgdiv", array()));
        echo ">
                        <button ";
        // line 217
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivgdivbutton", array()));
        echo "  class='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivgdivbutton", array()));
        echo " btn btn-default' >
                            ";
        // line 218
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Save Now"));
        echo "
                        </button>
                    </div>
                </div>
            </div>


        <div class='";
        // line 225
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivh", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivh", array()));
        echo ">
            <div class=\"";
        // line 226
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivhdiv", array()));
        echo " \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "saveformsurveydivhdiv", array()));
        echo ">
                <a href=\"";
        // line 227
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyUrl", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "saveformsurveydivhdiva", array()));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Return to survey"));
        echo "</a>
            </div>
        </div>
    </div>

</form> <!-- main form -->
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/save.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 227,  486 => 226,  480 => 225,  470 => 218,  464 => 217,  458 => 216,  452 => 215,  448 => 213,  438 => 208,  431 => 206,  425 => 205,  419 => 204,  413 => 203,  408 => 201,  402 => 200,  396 => 199,  393 => 198,  391 => 197,  384 => 192,  382 => 191,  381 => 188,  378 => 187,  376 => 181,  369 => 179,  364 => 177,  358 => 176,  352 => 175,  345 => 170,  343 => 169,  342 => 166,  339 => 165,  337 => 158,  331 => 157,  321 => 154,  315 => 153,  311 => 152,  305 => 151,  299 => 150,  292 => 145,  290 => 144,  289 => 141,  286 => 140,  284 => 133,  277 => 131,  267 => 128,  261 => 127,  257 => 126,  251 => 125,  245 => 124,  237 => 118,  235 => 117,  233 => 114,  230 => 112,  228 => 105,  221 => 103,  212 => 101,  206 => 100,  202 => 99,  196 => 98,  188 => 95,  182 => 94,  176 => 91,  172 => 89,  170 => 87,  169 => 85,  168 => 84,  167 => 83,  164 => 82,  161 => 76,  158 => 70,  155 => 64,  151 => 62,  140 => 60,  136 => 59,  129 => 58,  127 => 57,  120 => 55,  113 => 51,  107 => 50,  100 => 48,  92 => 47,  86 => 46,  80 => 45,  74 => 44,  66 => 43,  60 => 42,  54 => 40,  49 => 37,  43 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/content/save.twig", "C:\\xampp\\htdocs\\LimeSurvey\\themes\\survey\\vanilla\\views\\subviews\\content\\save.twig");
    }
}
