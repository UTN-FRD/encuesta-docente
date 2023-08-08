<?php

/* __string_template__0eaab1f85cec170acc7d0fd6fa1c6ab414bbf386c87c4743b888ec43b10ba23d */
class __TwigTemplate_301b49ddc9330ebf8abcb9b9e2e1401e195724df52572eec7935cd0da721312f extends Twig_Template
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
        $tags = array("set" => 17, "if" => 32, "for" => 679);
        $filters = array("capitalize" => 992);
        $functions = array("json_decode" => 17, "registerPackage" => 19, "registerScriptFile" => 26, "registerCssFile" => 27, "gT" => 262, "imageSrc" => 680, "sprintf" => 992, "createUrl" => 1043);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('capitalize'),
                array('json_decode', 'registerPackage', 'registerScriptFile', 'registerCssFile', 'gT', 'imageSrc', 'sprintf', 'createUrl')
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

        // line 17
        $context["aOptions"] = LS_Twig_Extension::json_decode($this->getAttribute(($context["templateConfiguration"] ?? null), "options", array()));
        // line 18
        echo "
";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-roboto"));
        echo "
";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-noto"));
        echo "
";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-news_cycle"));
        echo "
";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-ubuntu"));
        echo "
";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-lato"));
        echo "
";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-websafe"));
        echo "

";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScriptFile((($context["optionsPath"] ?? null) . "/spectrum.js")));
        echo "
";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerCssFile((($context["optionsPath"] ?? null) . "/spectrum.css")));
        echo "

";
        // line 30
        $context["animationOptions"] = "";
        // line 32
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 33
            echo "    ";
            $context["animationOptions"] = (($context["animationOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 36
        ob_start();
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
<optgroup label=\"Attention Seekers\">
    <option value=\"bounce\">bounce</option>
    <option value=\"flash\">
        flash</option>
    <option value=\"pulse\">
        pulse</option>
    <option value=\"rubberBand\">
        rubberBand</option>
    <option value=\"shake\">
        shake</option>
    <option value=\"swing\">
        swing</option>
    <option value=\"tada\">
        tada</option>
    <option value=\"wobble\">
        wobble</option>
    <option value=\"jello\">
        jello</option>
</optgroup>

<optgroup label=\"Bouncing Entrances\">
    <option value=\"bounceIn\">bounceIn</option >
    <option value=\"bounceInDown\">bounceInDown</option>
    <option value=\"bounceInLeft\">
        bounceInLeft</option>
    <option value=\"bounceInRight\">
        bounceInRight</option>
    <option value=\"bounceInUp\">
        bounceInUp</option>
</optgroup>

<optgroup label=\"Bouncing Exits\">
    <option value=\"bounceOut\">bounceOut</option >
    <option value=\"bounceOutDown\">bounceOutDown</option>
    <option value=\"bounceOutLeft\">
        bounceOutLeft</option>
    <option value=\"bounceOutRight\">
        bounceOutRight</option>
    <option value=\"bounceOutUp\">
        bounceOutUp</option>
</optgroup>

<optgroup label=\"Fading Entrances\">
    <option value=\"fadeIn\">fadeIn</option >
    <option value=\"fadeInDown\">fadeInDown</option>
    <option value=\"fadeInDownBig\">
        fadeInDownBig</option>
    <option value=\"fadeInLeft\">
        fadeInLeft</option>
    <option value=\"fadeInLeftBig\">
        fadeInLeftBig</option>
    <option value=\"fadeInRight\">
        fadeInRight</option>
    <option value=\"fadeInRightBig\">
        fadeInRightBig</option>
    <option value=\"fadeInUp\">
        fadeInUp</option>
    <option value=\"fadeInUpBig\">
        fadeInUpBig</option>
</optgroup>

<optgroup label=\"Fading Exits\">
    <option value=\"fadeOut\">fadeOut</option >
    <option value=\"fadeOutDown\">fadeOutDown</option>
    <option value=\"fadeOutDownBig\">
        fadeOutDownBig</option>
    <option value=\"fadeOutLeft\">
        fadeOutLeft</option>
    <option value=\"fadeOutLeftBig\">
        fadeOutLeftBig</option>
    <option value=\"fadeOutRight\">
        fadeOutRight</option>
    <option value=\"fadeOutRightBig\">
        fadeOutRightBig</option>
    <option value=\"fadeOutUp\">
        fadeOutUp</option>
    <option value=\"fadeOutUpBig\">
        fadeOutUpBig</option>
</optgroup>

<optgroup label=\"Flippers\">
    <option value=\"flip\">flip</option >
    <option value=\"flipInX\">flipInX</option>
    <option value=\"flipInY\">
        flipInY</option>
    <option value=\"flipOutX\">
        flipOutX</option>
    <option value=\"flipOutY\">
        flipOutY</option>
</optgroup>

<optgroup label=\"Lightspeed\">
    <option value=\"lightSpeedIn\">lightSpeedIn</option >
    <option value=\"lightSpeedOut\">lightSpeedOut</option>
</optgroup>

<optgroup label=\"Rotating Entrances\">
    <option value=\"rotateIn\">rotateIn</option >
    <option value=\"rotateInDownLeft\">rotateInDownLeft</option>
    <option value=\"rotateInDownRight\">
        rotateInDownRight</option>
    <option value=\"rotateInUpLeft\">
        rotateInUpLeft</option>
    <option value=\"rotateInUpRight\">
        rotateInUpRight</option>
</optgroup>

<optgroup label=\"Rotating Exits\">
    <option value=\"rotateOut\">rotateOut</option >
    <option value=\"rotateOutDownLeft\">rotateOutDownLeft</option>
    <option value=\"rotateOutDownRight\">
        rotateOutDownRight</option>
    <option value=\"rotateOutUpLeft\">
        rotateOutUpLeft</option>
    <option value=\"rotateOutUpRight\">
        rotateOutUpRight</option>
</optgroup>

<optgroup label=\"Sliding Entrances\">
    <option value=\"slideInUp\">slideInUp</option >
    <option value=\"slideInDown\">slideInDown</option>
    <option value=\"slideInLeft\">
        slideInLeft</option>
    <option value=\"slideInRight\">
        slideInRight</option>
</optgroup>

<optgroup label=\"Sliding Exits\">
    <option value=\"slideOutUp\">slideOutUp</option >
    <option value=\"slideOutDown\">slideOutDown</option>
    <option value=\"slideOutLeft\">
        slideOutLeft</option>
    <option value=\"slideOutRight\">
        slideOutRight</option>
</optgroup>

<optgroup label=\"Zoom Entrances\">
    <option value=\"zoomIn\">zoomIn</option >
    <option value=\"zoomInDown\">zoomInDown</option>
    <option value=\"zoomInLeft\">
        zoomInLeft</option>
    <option value=\"zoomInRight\">
        zoomInRight</option>
    <option value=\"zoomInUp\">
        zoomInUp</option>
</optgroup>

<optgroup label=\"Zoom Exits\">
    <option value=\"zoomOut\">zoomOut</option >
    <option value=\"zoomOutDown\">zoomOutDown</option>
    <option value=\"zoomOutLeft\">
        zoomOutLeft</option>
    <option value=\"zoomOutRight\">
        zoomOutRight</option>
    <option value=\"zoomOutUp\">
        zoomOutUp</option>
</optgroup>

<optgroup label=\"Specials\">
    <option value=\"hinge\">hinge</option >
    <option value=\"jackInTheBox\">jackInTheBox</option>
    <option value=\"rollIn\">
        rollIn</option>
    <option value=\"rollOut\">
        rollOut</option>
</optgroup>
";
        $context["animationOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 205
        echo "
";
        // line 207
        $context["fruityOptions"] = "";
        // line 208
        echo "
";
        // line 210
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 211
            echo "    ";
            $context["fruityOptions"] = (($context["fruityOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 213
        echo "
";
        // line 215
        ob_start();
        // line 216
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fruityOptions"] ?? null));
        echo "
<option value=\"css/variations/sea_green.css\">Sea Green</option>
<option value=\"css/variations/apple_blossom.css\">Apple Blossom</option>
<option value=\"css/variations/bay_of_many.css\">Bay of Many</option>
<option value=\"css/variations/black_pearl.css\">Black Pearl</option>
<option value=\"css/variations/free_magenta.css\">Free Magenta</option>
<option value=\"css/variations/purple_tentacle.css\">Purple Tentacle</option>
<option value=\"css/variations/sunset_orange.css\">Sunset Orange</option>
<option value=\"css/variations/skyline_blue.css\">Skyline Blue</option>
";
        $context["fruityOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 226
        echo "
";
        // line 227
        $context["checkIconOptions"] = "";
        // line 228
        echo "
";
        // line 230
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 231
            echo "    ";
            $context["checkIconOptions"] = (($context["checkIconOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 233
        echo "
";
        // line 234
        ob_start();
        // line 235
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["checkIconOptions"] ?? null));
        echo "
<option value=\"f00c\"> <i class=\"fa fa-check\"></i> Check </option>
<option value=\"f058\"> <i class=\"fa fa-check-circle\"></i> Check circle </option>
<option value=\"f14a\"> <i class=\"fa fa-check-square\"></i> Check square </option>
<option value=\"f111\"> <i class=\"fa fa-circle\"></i> Circle </option>
<option value=\"f067\"> <i class=\"fa fa-plus\"></i> Plus </option>
<option value=\"f0c8\"> <i class=\"fa fa-square\"></i> Square </option>
<option value=\"f005\"> <i class=\"fa fa-star\"></i> Star </option>
<option value=\"f00d\"> <i class=\"fa fa-times\"></i> Times </option>
<option value=\"f069\"> <i class=\"fa fa-asterisk\"></i> Asterisk </option>
<option value=\"f061\"> <i class=\"fa fa-arrow-right\"></i> Arrow right </option>
<option value=\"f138\"> <i class=\"fa fa-chevron-circle-right\"></i> Chevron circle right </option>
<option value=\"f1d0\"> <i class=\"fa fa-resistance\"></i> Resistance </option>
";
        $context["checkIconOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 249
        echo "
";
        // line 251
        $context["fontOptions"] = "";
        // line 252
        echo "

";
        // line 255
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 256
            echo "    ";
            $context["fontOptions"] = (($context["fontOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 258
        echo "

";
        // line 260
        ob_start();
        // line 261
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fontOptions"] ?? null));
        echo "
    <optgroup  label=\"";
        // line 262
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Local Server"));
        echo "\">
            <option class=\"font-roboto\"     value=\"roboto\"     data-font-package=\"roboto\"      >Roboto</option>
            <option class=\"font-news_cycle\" value=\"news_cycle\" data-font-package=\"news_cycle\"  >News Cycle</option>
            <option class=\"font-lato\"       value=\"lato\"       data-font-package=\"lato\"        >Lato</option>
            <option class=\"font-noto\"       value=\"noto\"       data-font-package=\"noto\"        >Noto Sans</option>
            <option class=\"font-ubuntu\"     value=\"ubuntu\"     data-font-package=\"ubuntu\"       >Ubuntu</option>
    </optgroup>

    <optgroup  label=\"";
        // line 270
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("User browser"));
        echo "\">

      <option class=\"font-georgia         \" value=\"georgia\"         data-font-package=\"websafe\" >Georgia</option>
      <option class=\"font-palatino        \" value=\"palatino\"        data-font-package=\"websafe\" >Palatino Linotype</option>
      <option class=\"font-times_new_roman \" value=\"times_new_roman\" data-font-package=\"websafe\" >Times New Roman</option>
      <option class=\"font-arial           \" value=\"arial\"           data-font-package=\"websafe\" >Arial</option>
      <option class=\"font-arial_black     \" value=\"arial_black\"     data-font-package=\"websafe\" >Arial Black</option>
      <option class=\"font-comic_sans      \" value=\"comic_sans\"      data-font-package=\"websafe\" >Comic Sans</option>
      <option class=\"font-impact          \" value=\"impact\"          data-font-package=\"websafe\" >Impact</option>
      <option class=\"font-lucida_sans     \" value=\"lucida_sans\"     data-font-package=\"websafe\" >Lucida Sans</option>
      <option class=\"font-trebuchet       \" value=\"trebuchet\"       data-font-package=\"websafe\" >Trebuchet</option>
      <option class=\"font-courier         \" value=\"courier\"         data-font-package=\"websafe\" >Courier New</option>
      <option class=\"font-lucida_console  \" value=\"lucida_console\"  data-font-package=\"websafe\" >Lucida Console</option>
    </optgroup>
";
        $context["fontOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 285
        echo "
<div class=\"container-fluid\" style=\"position:relative\">
    ";
        // line 288
        echo "    <div class=\"\" style=\"display:none;height:100%;width:100%;position:absolute;left:0;top:0;background:rgb(255,255,255);background:rgba(235,235,235,0.8);z-index:2000;\">
        <div style=\"position:absolute; left:49%;top:35%;\" class=\"text-center\">
            <i class=\"fa fa-spinner fa-pulse fa-3x fa-fw\"></i>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 295
        echo "        <form class='form action_update_options_string_form' action=''>

            ";
        // line 298
        echo "            ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 299
            echo "                <div class='row' id=\"general_inherit_active\">
                    <div class='form-group row'>
                        <label for='simple_edit_options_general_inherit' class='control-label'>";
            // line 301
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit everything"));
            echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_on\" name='general_inherit' type='radio' value='on' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 306
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
            echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_off\" name='general_inherit' type='radio' value='off' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 310
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
            echo "
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row action_hide_on_inherit\">
                    <hr/>
                </div>
            ";
        }
        // line 320
        echo "
            ";
        // line 322
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-3'>

                    ";
        // line 326
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_ajaxmode' class='control-label'> ";
        // line 327
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Ajax mode"));
        echo " </label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input name='ajaxmode' type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                    ";
        // line 332
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input name='ajaxmode' type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                    ";
        // line 336
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 339
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 340
            echo "                                    <label class=\"btn btn-default\">
                                        <input name='ajaxmode' type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_ajaxmode'/>
                                        ";
            // line 342
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 345
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 351
        echo "                <div class='col-sm-12 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_container' class='control-label'> ";
        // line 353
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Survey container"));
        echo " </label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='on' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    ";
        // line 358
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='off' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    ";
        // line 362
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 365
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 366
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='container' value='inherit' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                        ";
            // line 368
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 371
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 377
        echo "                <div class='col-sm-12 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questionborder' class='control-label'>";
        // line 379
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question borders"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questionborder' value='on' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                    ";
        // line 384
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questionborder' value='off' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                    ";
        // line 388
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>

                                ";
        // line 392
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 393
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='questionborder' value='inherit' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                        ";
            // line 395
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 398
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 404
        echo "                <div class='col-sm-12 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questioncontainershadow' class='control-label'>";
        // line 406
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question shadow"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questioncontainershadow' value='on' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                    ";
        // line 411
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questioncontainershadow' value='off' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                    ";
        // line 415
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 418
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 419
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='questioncontainershadow' value='inherit' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                        ";
            // line 421
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 424
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            ";
        // line 431
        echo "            <div class='row action_hide_on_inherit'>
                ";
        // line 433
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_zebrastriping' class='control-label'>";
        // line 435
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Zebra-striped questions"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='zebrastriping' value='on' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                    ";
        // line 440
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='zebrastriping' value='off' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                    ";
        // line 444
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 447
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 448
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='zebrastriping' value='inherit' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                        ";
            // line 450
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 453
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 458
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_stickymatrixheaders' class='control-label'>";
        // line 460
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Sticky array headers"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='stickymatrixheaders' value='on' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                    ";
        // line 465
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='stickymatrixheaders' value='off' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                    ";
        // line 469
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 472
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 473
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='stickymatrixheaders' value='inherit' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                        ";
            // line 475
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 478
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 483
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_greyoutselected' class='control-label'>";
        // line 485
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Dim answered array rows"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='greyoutselected' value='on' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                    ";
        // line 490
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='greyoutselected' value='off' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                    ";
        // line 494
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 497
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 498
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='greyoutselected' value='inherit' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                        ";
            // line 500
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 503
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 508
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_hideprivacyinfo' class='control-label'>";
        // line 510
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Hide privacy info"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='on' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    ";
        // line 515
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='off' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    ";
        // line 519
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 522
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 523
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='hideprivacyinfo' value='inherit' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                        ";
            // line 525
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 528
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 533
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_crosshover' class='control-label'>";
        // line 535
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Cross-hover in matrix questions"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='crosshover' value='on' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                    ";
        // line 540
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='crosshover' value='off' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                    ";
        // line 544
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 547
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 548
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='crosshover' value='inherit' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                        ";
            // line 550
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 553
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>

            <div class='row action_hide_on_inherit'>

                ";
        // line 566
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_bodybackgroundcolor' class='control-label'>";
        // line 568
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Background color"));
        echo "</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"bodybackgroundcolor_picker\" data-value=\"";
        // line 571
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "bodybackgroundcolor", array()));
        echo "\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"bodybackgroundcolor\" data-inheritvalue=\"";
        // line 573
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "bodybackgroundcolor", array()));
        echo "\" value=\"inherit\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_bodybackgroundcolor\" data-id=\"bodybackgroundcolor\" />
                            ";
        // line 574
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 575
            echo "                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            ";
        }
        // line 579
        echo "
                        </div>
                    </div>
                </div>

                ";
        // line 585
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_fontcolor' class='control-label'>";
        // line 587
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Font color"));
        echo "</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"fontcolor_picker\" data-value=\"";
        // line 590
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "fontcolor", array()));
        echo "\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"fontcolor\" value=\"inherit\" data-inheritvalue=\"";
        // line 592
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "fontcolor", array()));
        echo "\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_fontcolor\" data-id=\"fontcolor\" />
                            ";
        // line 593
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 594
            echo "                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            ";
        }
        // line 598
        echo "                        </div>
                    </div>
                </div>

                ";
        // line 603
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questionbackgroundcolor' class='control-label'>";
        // line 605
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question background color"));
        echo "</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"questionbackgroundcolor_picker\" data-value=\"";
        // line 608
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "questionbackgroundcolor", array()));
        echo "\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"questionbackgroundcolor\" value=\"inherit\" data-inheritvalue=\"";
        // line 610
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "questionbackgroundcolor", array()));
        echo "\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_questionbackgroundcolor\" data-id=\"questionbackgroundcolor\" />
                            ";
        // line 611
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 612
            echo "                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            ";
        }
        // line 616
        echo "                        </div>
                    </div>
                </div>

                ";
        // line 621
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_checkicon' class='control-label'>";
        // line 623
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Check icon"));
        echo "</label>
                        <div class=\"input-group\">
                            <select name=\"checkicon\" value=\"\" class=\"selector_option_value_field form-control simple_edit_options_checkicon\" data-id=\"checkicon\" >
                                ";
        // line 626
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["checkIconOptions"] ?? null));
        echo "
                            </select>
                            <div class=\"input-group-addon selector__checkicon-preview\">
                                ( <i class=\"fa\" data-inheritvalue=\"";
        // line 629
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "checkicon", array()));
        echo "\" style=\" background-color: #328637; color: white; width: 16px; height: 16px;  padding: 3px; font-size: 11px; \">
                                    &#x";
        // line 630
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "checkicon", array()));
        echo ";
                                </i> )
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>

             <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 645
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_backgroundimage' class='control-label'>";
        // line 646
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Background image"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='backgroundimage' value='on' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                    ";
        // line 651
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='backgroundimage' value='off' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                    ";
        // line 655
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 658
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 659
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='backgroundimage' value='inherit' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                        ";
            // line 661
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 664
        echo "                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-sm-8 col-md-6'>
                    ";
        // line 671
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_backgroundimagefile' class='control-label'>";
        // line 672
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Background image file"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield selector_image_selector' data-parent=\"backgroundimage\" id='simple_edit_options_backgroundimagefile' name='backgroundimagefile'>
                                ";
        // line 675
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 676
            echo "                                    <option value=\"inherit\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "</option>
                                ";
        }
        // line 678
        echo "
                                ";
        // line 679
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["templateConfiguration"] ?? null), "imageFileList", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 680
            echo "                                    <option data-lightbox-src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::imageSrc($this->getAttribute($context["image"], "filepath", array())));
            echo "\" value=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filepath", array()));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filename", array()));
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 682
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4 col-md-2'>
                    <br/>
                    <button class=\"btn btn-default selector__open_lightbox\" data-target=\"#simple_edit_options_backgroundimagefile\"> ";
        // line 688
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Preview image"));
        echo "</button>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 694
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogo' class='control-label'> ";
        // line 695
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Logo"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 700
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 704
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 707
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 708
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='brandlogo' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                        ";
            // line 710
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 713
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-8 col-md-6'>
                    ";
        // line 719
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogofile' class='control-label'>";
        // line 720
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Logo file"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield selector_image_selector' data-parent=\"brandlogo\" id='simple_edit_options_brandlogofile' name='brandlogofile'>
                                ";
        // line 723
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 724
            echo "                                    <option value=\"inherit\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "</option>
                                ";
        }
        // line 726
        echo "
                                ";
        // line 727
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["templateConfiguration"] ?? null), "imageFileList", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 728
            echo "                                    <option data-lightbox-src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::imageSrc($this->getAttribute($context["image"], "filepathOptions", array())));
            echo "\" value=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filepath", array()));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filename", array()));
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 730
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4 col-md-2'>
                    <br/>
                    <button class=\"btn btn-default selector__open_lightbox\" data-target=\"#simple_edit_options_brandlogofile\"> ";
        // line 736
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Preview image"));
        echo "</button>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    <div class='form-group row'>
                        ";
        // line 746
        echo "                        <label for='simple_edit_options_animatebody' class='control-label'>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate body"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                    ";
        // line 751
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                    ";
        // line 755
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 758
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 759
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                        ";
            // line 761
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 764
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 770
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_bodyanimation' class='control-label'>";
        // line 771
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Body animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatebody\" id='simple_edit_options_bodyanimation' name='bodyanimation'>
                                ";
        // line 774
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 781
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_bodyanimationduration' class='control-label'>";
        // line 782
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatebody\" id='simple_edit_options_bodyanimationduration' name='bodyanimationduration' />
                        </div>
                    </div>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 792
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animatequestion' class='control-label'>";
        // line 793
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate question"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                    ";
        // line 798
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                    ";
        // line 802
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 805
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 806
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                        ";
            // line 808
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 811
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 817
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_questionanimation' class='control-label'>";
        // line 818
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatequestion\" id='simple_edit_options_questionanimation' name='questionanimation'>
                                ";
        // line 821
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 828
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_questionanimationduration' class='control-label'>";
        // line 829
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatequestion\" id='simple_edit_options_questionanimationduration' name='questionanimationduration' />
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 838
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 841
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animatealert' class='control-label'>";
        // line 842
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate alert"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                    ";
        // line 847
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                    ";
        // line 851
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 854
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 855
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                        ";
            // line 857
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 860
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 866
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_alertanimation' class='control-label'>";
        // line 867
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Alert animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatealert\" id='simple_edit_options_alertanimation' name='alertanimation'>
                                ";
        // line 870
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 877
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_alertanimationduration' class='control-label'>";
        // line 878
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatealert\" id='simple_edit_options_alertanimationduration' name='alertanimationduration'/>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 887
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 890
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animatecheckbox' class='control-label'>";
        // line 891
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate checkbox"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                    ";
        // line 896
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                    ";
        // line 900
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 903
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 904
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                        ";
            // line 906
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 909
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 915
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_checkboxanimation' class='control-label'>";
        // line 916
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Alert animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatecheckbox\" id='simple_edit_options_checkboxanimation' name='checkboxanimation'>
                                ";
        // line 919
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 926
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_checkboxanimationduration' class='control-label'>";
        // line 927
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatecheckbox\" id='simple_edit_options_checkboxanimationduration' name='checkboxanimationduration' />
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 936
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 939
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animateradio' class='control-label'>";
        // line 940
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate radio buttons"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                    ";
        // line 945
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                    ";
        // line 949
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 952
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 953
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                        ";
            // line 955
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 958
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 964
        echo "                <div class='col-sm-10 col-md-6'>

                    <div class='form-group row'>
                        <label for='simple_edit_options_radioanimation' class='control-label'>";
        // line 967
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Radio button animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animateradio\" id='simple_edit_options_radioanimation' name='radioanimation'>
                                ";
        // line 970
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                ";
        // line 976
        echo "                <div class='col-sm-2'>

                    <div class='form-group row'>
                        <label for='simple_edit_options_radioanimationduration' class='control-label'>";
        // line 979
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animateradio\" id='simple_edit_options_radioanimationduration' name='radioanimationduration' />
                        </div>
                    </div>
                </div>
            </div>            
            <div class='row ls-space margin top-15 bottom-15 action_hide_on_inherit'>
                <hr/>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>";
        // line 992
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_capitalize_string_filter($this->env, sprintf(gT("%s fonts"), $this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()))));
        echo "</div>
                        <div class='panel-body'>
                            <div class='form-group row'>
                                <label for='simple_edit_font' class='control-label'>";
        // line 995
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Select font:"));
        echo "</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_option_value_field' id='simple_edit_font' name='font' data-inheritvalue='";
        // line 997
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "packages_to_load", array()));
        echo "'>
                                        ";
        // line 998
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fontOptions"] ?? null));
        echo "
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='row ls-space margin top-15 bottom-15 '>
                <hr/>
            </div>
            ";
        // line 1011
        echo "            <div class='row'>
                <div class='col-sm-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>";
        // line 1014
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_capitalize_string_filter($this->env, sprintf(gT("%s variations"), $this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()))));
        echo " </div>
                        <div class='panel-body'>
                            <div class='form-group row'>
                                <label for='simple_edit_add_css' class='control-label'>";
        // line 1017
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Select variation:"));
        echo "</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_cssframework_value_field' id='simple_edit_add_css' name='cssframework' data-inheritvalue='";
        // line 1019
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "files_css", array()));
        echo "'>
                                        ";
        // line 1020
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fruityOptions"] ?? null));
        echo "
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row hidden'>
                <div class='col-sm-12'>
                    <button class='btn btn-success col-md-2 col-sm-4 col-xs-6 action_update_options_string_button'>";
        // line 1030
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Save"));
        echo " </button>
                </div>
            </div>
        </form>
    </div>
    <div class='row action_hide_on_inherit'>
        ";
        // line 1037
        echo "        <div class=\"container-fluid ls-space margin bottom-15\">
            <div class=\"row ls-space margin bottom-15\">
                <div class=\"col-sm-6\">
                    ";
        // line 1040
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("Upload an image (maximum size: %d MB):"), (($this->getAttribute(($context["templateConfiguration"] ?? null), "maxFileSize", array()) / 1024) / 1024)));
        echo "
                </div>
                <div class=\"col-sm-6\">
                ";
        // line 1043
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "form", array(0 => LS_Twig_Extension::createUrl("/admin/themes/sa/upload"), 1 => "post", 2 => array("id" => "upload_frontend", "name" => "upload_frontend", "enctype" => "multipart/form-data")), "method"));
        echo "
                    <span id=\"fileselector_frontend\">
                        <label class=\"btn btn-default col-xs-8\" for=\"upload_image_frontend\">
                            <input class=\"hidden\" id=\"upload_image_frontend\" name=\"upload_image_frontend\" type=\"file\">
                            <i class=\"fa fa-upload ls-space margin right-10\"></i>
                            ";
        // line 1048
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Upload"));
        echo "
                        </label>
                    </span>

                        <input type='hidden' name='templatename' value='";
        // line 1052
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()));
        echo "' />
                        <input type='hidden' name='templateconfig' value='";
        // line 1053
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "id", array()));
        echo "' />
                        <input type='hidden' name='action' value='templateuploadimagefile' />
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"progress\">
                    <div id=\"upload_progress_frontend\" class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                        <span class=\"sr-only\">0%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"lightbox-modal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title selector__title\"> </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <img class=\"selector__image img-responsive\" src=\"\" alt=\"title\"  />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__0eaab1f85cec170acc7d0fd6fa1c6ab414bbf386c87c4743b888ec43b10ba23d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1678 => 1053,  1674 => 1052,  1667 => 1048,  1659 => 1043,  1653 => 1040,  1648 => 1037,  1639 => 1030,  1626 => 1020,  1622 => 1019,  1617 => 1017,  1611 => 1014,  1606 => 1011,  1591 => 998,  1587 => 997,  1582 => 995,  1576 => 992,  1560 => 979,  1555 => 976,  1547 => 970,  1541 => 967,  1536 => 964,  1529 => 958,  1523 => 955,  1519 => 953,  1516 => 952,  1511 => 949,  1504 => 945,  1496 => 940,  1493 => 939,  1489 => 936,  1478 => 927,  1475 => 926,  1466 => 919,  1460 => 916,  1457 => 915,  1450 => 909,  1444 => 906,  1440 => 904,  1437 => 903,  1432 => 900,  1425 => 896,  1417 => 891,  1414 => 890,  1410 => 887,  1399 => 878,  1396 => 877,  1387 => 870,  1381 => 867,  1378 => 866,  1371 => 860,  1365 => 857,  1361 => 855,  1358 => 854,  1353 => 851,  1346 => 847,  1338 => 842,  1335 => 841,  1331 => 838,  1320 => 829,  1317 => 828,  1308 => 821,  1302 => 818,  1299 => 817,  1292 => 811,  1286 => 808,  1282 => 806,  1279 => 805,  1274 => 802,  1267 => 798,  1259 => 793,  1256 => 792,  1244 => 782,  1241 => 781,  1232 => 774,  1226 => 771,  1223 => 770,  1216 => 764,  1210 => 761,  1206 => 759,  1203 => 758,  1198 => 755,  1191 => 751,  1182 => 746,  1170 => 736,  1162 => 730,  1149 => 728,  1145 => 727,  1142 => 726,  1136 => 724,  1134 => 723,  1128 => 720,  1125 => 719,  1118 => 713,  1112 => 710,  1108 => 708,  1105 => 707,  1100 => 704,  1093 => 700,  1085 => 695,  1082 => 694,  1074 => 688,  1066 => 682,  1053 => 680,  1049 => 679,  1046 => 678,  1040 => 676,  1038 => 675,  1032 => 672,  1029 => 671,  1021 => 664,  1015 => 661,  1011 => 659,  1008 => 658,  1003 => 655,  996 => 651,  988 => 646,  985 => 645,  968 => 630,  964 => 629,  958 => 626,  952 => 623,  948 => 621,  942 => 616,  936 => 612,  934 => 611,  930 => 610,  925 => 608,  919 => 605,  915 => 603,  909 => 598,  903 => 594,  901 => 593,  897 => 592,  892 => 590,  886 => 587,  882 => 585,  875 => 579,  869 => 575,  867 => 574,  863 => 573,  858 => 571,  852 => 568,  848 => 566,  834 => 553,  828 => 550,  824 => 548,  821 => 547,  816 => 544,  809 => 540,  801 => 535,  797 => 533,  791 => 528,  785 => 525,  781 => 523,  778 => 522,  773 => 519,  766 => 515,  758 => 510,  754 => 508,  748 => 503,  742 => 500,  738 => 498,  735 => 497,  730 => 494,  723 => 490,  715 => 485,  711 => 483,  705 => 478,  699 => 475,  695 => 473,  692 => 472,  687 => 469,  680 => 465,  672 => 460,  668 => 458,  662 => 453,  656 => 450,  652 => 448,  649 => 447,  644 => 444,  637 => 440,  629 => 435,  625 => 433,  622 => 431,  614 => 424,  608 => 421,  604 => 419,  601 => 418,  596 => 415,  589 => 411,  581 => 406,  577 => 404,  570 => 398,  564 => 395,  560 => 393,  557 => 392,  551 => 388,  544 => 384,  536 => 379,  532 => 377,  525 => 371,  519 => 368,  515 => 366,  512 => 365,  507 => 362,  500 => 358,  492 => 353,  488 => 351,  481 => 345,  475 => 342,  471 => 340,  468 => 339,  463 => 336,  456 => 332,  448 => 327,  445 => 326,  440 => 322,  437 => 320,  424 => 310,  417 => 306,  409 => 301,  405 => 299,  402 => 298,  398 => 295,  390 => 288,  386 => 285,  368 => 270,  357 => 262,  352 => 261,  350 => 260,  346 => 258,  342 => 256,  340 => 255,  336 => 252,  334 => 251,  331 => 249,  314 => 235,  312 => 234,  309 => 233,  305 => 231,  303 => 230,  300 => 228,  298 => 227,  295 => 226,  282 => 216,  280 => 215,  277 => 213,  273 => 211,  271 => 210,  268 => 208,  266 => 207,  263 => 205,  92 => 37,  90 => 36,  86 => 33,  84 => 32,  82 => 30,  77 => 27,  73 => 26,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  45 => 18,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__0eaab1f85cec170acc7d0fd6fa1c6ab414bbf386c87c4743b888ec43b10ba23d", "");
    }
}
