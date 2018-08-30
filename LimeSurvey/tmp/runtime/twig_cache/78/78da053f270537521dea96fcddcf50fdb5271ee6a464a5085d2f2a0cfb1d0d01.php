<?php

/* ./subviews/header/custom_header.twig */
class __TwigTemplate_a17e2521d9f1948dbb7763ce21916cb5cf3d2b99bd4162d8a07c70824368cdc6 extends Twig_Template
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
        $tags = array("if" => 20, "set" => 63);
        $filters = array();
        $functions = array("imageSrc" => 22, "darkencss" => 171, "lightencss" => 174, "registerScript" => 243);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array('imageSrc', 'darkencss', 'lightencss', 'registerScript')
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
        echo "
";
        // line 19
        echo "<style>
    ";
        // line 20
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "backgroundimage", array()) == "on")) {
            // line 21
            echo "        body {
            background-image: url(";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::imageSrc($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "backgroundimagefile", array())));
            echo ");
            background-attachment: fixed;
            background-size: cover;

        }

        body .top-container {
            background-color: rgba(236, 240, 241, 0.2);
        }
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "brandlogo", array()) == "on")) {
            // line 34
            echo "        body .top-container {
            margin-top: 70px;
        }
    ";
        }
        // line 38
        echo "
    body {
         padding-bottom: 10px;
         padding-top: 60px;/* now is redefine in JS to fit any title length */
         background-color:";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "bodybackgroundcolor", array()));
        echo " ;
         color: ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "fontcolor", array()));
        echo ";
    }

    .navbar-default .navbar-nav > li > a:hover {
        color: ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "fontcolor", array()));
        echo ";
    }


    .question-container {
      background-color: ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "questionbackgroundcolor", array()));
        echo ";

      ";
        // line 54
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "questionborder", array()) == "on")) {
            // line 55
            echo "        border:  1px solid #e6e6e6;
      ";
        }
        // line 57
        echo "
      ";
        // line 58
        if ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "questioncontainershadow", array()) == "on") && ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "questionborder", array()) == "on"))) {
            // line 59
            echo "        box-shadow: 0 1px 2px rgba(0,0,0,.2);
      ";
        }
        // line 61
        echo "    }

    ";
        // line 63
        $context["checkicon"] = (("\"\\" . $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "checkicon", array())) . "\"");
        // line 64
        echo "    .checkbox-item input[type=\"checkbox\"]:checked + label::after, .checkbox-item input[type=\"radio\"]:checked + label::after {
        content: ";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["checkicon"] ?? null));
        echo ";
    }

    ";
        // line 68
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "animatecheckbox", array()) == "on")) {
            // line 69
            echo "
        ";
            // line 70
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "checkboxanimationduration", array()) < 1)) {
                // line 71
                echo "            ";
                $context["checkboxanimationduration"] = 500;
                // line 72
                echo "        ";
            } else {
                // line 73
                echo "            ";
                $context["checkboxanimationduration"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "checkboxanimationduration", array());
                // line 74
                echo "        ";
            }
            // line 75
            echo "
        .checkbox-item input[type=\"checkbox\"]:checked + label::after{
            animation-name: ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "checkboxanimation", array()));
            echo ";
            animation-duration: ";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["checkboxanimationduration"] ?? null));
            echo "ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            display: inline-block;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
        .checkbox-item input[type=\"checkbox\"] + label::after{
            display: none;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
    ";
        }
        // line 95
        echo "
    ";
        // line 96
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "animateradio", array()) == "on")) {
            // line 97
            echo "
        ";
            // line 98
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "radioanimationduration", array()) < 1)) {
                // line 99
                echo "            ";
                $context["radioanimationduration"] = 500;
                // line 100
                echo "        ";
            } else {
                // line 101
                echo "            ";
                $context["radioanimationduration"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "radioanimationduration", array());
                // line 102
                echo "        ";
            }
            // line 103
            echo "
        .radio-item input[type=\"radio\"]:checked + label::after{
            animation-name: ";
            // line 105
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "radioanimation", array()));
            echo ";
            animation-duration: ";
            // line 106
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["radioanimationduration"] ?? null));
            echo "ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            display: inline-block;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
        .radio-item input[type=\"radio\"] + label::after{
            display:none;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
    ";
        }
        // line 123
        echo "
    ";
        // line 124
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "animatequestion", array()) == "on")) {
            // line 125
            echo "
        ";
            // line 126
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "questionanimationduration", array()) < 1)) {
                // line 127
                echo "            ";
                $context["questionanimationduration"] = 500;
                // line 128
                echo "        ";
            } else {
                // line 129
                echo "            ";
                $context["questionanimationduration"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "questionanimationduration", array());
                // line 130
                echo "        ";
            }
            // line 131
            echo "
        .question-container {
            animation-name: ";
            // line 133
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "questionanimation", array()));
            echo ";
            animation-duration: ";
            // line 134
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["questionanimationduration"] ?? null));
            echo "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 138
        echo "
    ";
        // line 139
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "animatealert", array()) == "on")) {
            // line 140
            echo "
        ";
            // line 141
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "alertanimationduration", array()) < 1)) {
                // line 142
                echo "            ";
                $context["alertanimationduration"] = 500;
                // line 143
                echo "        ";
            } else {
                // line 144
                echo "            ";
                $context["alertanimationduration"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "alertanimationduration", array());
                // line 145
                echo "        ";
            }
            // line 146
            echo "
        .alert {
            animation-name: ";
            // line 148
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "alertanimation", array()));
            echo ";
            animation-duration: ";
            // line 149
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["alertanimationduration"] ?? null));
            echo "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 153
        echo "
    ";
        // line 154
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "animatebody", array()) == "on")) {
            // line 155
            echo "
        ";
            // line 156
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "bodyanimationduration", array()) < 1)) {
                // line 157
                echo "            ";
                $context["bodyanimationduration"] = 500;
                // line 158
                echo "        ";
            } else {
                // line 159
                echo "            ";
                $context["bodyanimationduration"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "bodyanimationduration", array());
                // line 160
                echo "        ";
            }
            // line 161
            echo "
        #outerframeContainer {
            animation-name: ";
            // line 163
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "bodyanimation", array()));
            echo ";
            animation-duration: ";
            // line 164
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["bodyanimationduration"] ?? null));
            echo "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 168
        echo "
    ";
        // line 169
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "zebrastriping", array()) == "on")) {
            // line 170
            echo "    .question-container:nth-of-type(odd){
        background-color: ";
            // line 171
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::darkencss($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "questionbackgroundcolor", array())));
            echo "
    }
    .question-container:nth-of-type(even){
        background-color: ";
            // line 174
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::lightencss($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "questionbackgroundcolor", array())));
            echo "
    }
    ";
        }
        // line 177
        echo "
    ";
        // line 178
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "stickymatrixheaders", array()) == "on")) {
            // line 179
            echo "        .sticky .ls-heading.stickyBar {
            background: white;
            opacity: 1;
        }
        .sticky .ls-heading.stickyBar>td, 
        .sticky .ls-heading.stickyBar>th {
            word-break: break-all;
        }
        
        .sticky .ls-heading.stickyBar>td:first-child {
            visibility: hidden;
        }
        
        .sticky .ls-heading:nth-child(n+2) {
            display: none;
            background: white;
        }

        tbody>.ls-heading-repeat:not(.stickyBar) {
            display: none;
        }
    ";
        }
        // line 201
        echo "
    ";
        // line 202
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "greyoutselected", array()) == "on")) {
            // line 203
            echo "
        tr.radio-list.selected{
            opacity: 0.5;
        }
        tr.radio-list.selected:hover,
        tr.radio-list.selected:active{
            opacity: 1;
        }
    ";
        }
        // line 212
        echo "
    ";
        // line 213
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "crosshover", array()) == "on")) {
            // line 214
            echo "        table.ls-answers.table-hover
         {
            overflow: hidden;
            }

        table.ls-answers.table-hover>tbody>tr:hover td,
        table.ls-answers.table-hover>tbody>tr:hover th {
            background-color: ";
            // line 221
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::darkencss($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "questionbackgroundcolor", array()), 50, 0.2));
            echo ";
        }

        table.ls-answers.table-hover>tbody>tr>td, th {
            position: relative;
        }
        table.ls-answers.table-hover>tbody>tr>td:hover::after {
            content: \"\";
            position: absolute;
            background-color: ";
            // line 230
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::darkencss($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "questionbackgroundcolor", array()), 50, 0.2));
            echo ";
            left: 0;
            top: -5000px;
            height: 10000px;
            width: 100%;
            z-index: 2;
        }
    ";
        }
        // line 238
        echo "
</style>


";
        // line 242
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "stickymatrixheaders", array()) == "on")) {
            // line 243
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("StickyMatrixHeaderScript", "
        var stickyRows = new StickyTableRows();
        \$('thead>tr.ls-heading').each(function(itrt, item){
            if(\$(item).closest('div.question-container').hasClass('array-flexible-duel-scale')) {
                return;
            }
            stickyRows.add(item);
        });
        stickyRows.init();
    ", "POS_POSTSCRIPT"));
            // line 252
            echo "
";
        }
        // line 254
        echo "
";
        // line 255
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "greyoutselected", array()) == "on")) {
            // line 256
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("GreyOutSelectedScript", "
    \$('td.radio-item > input[type=radio]').on('click', function(){
        if(\$(this).val() != '' ) {
            \$(this).closest('tr.radio-list').addClass('selected');
        } else {
            \$(this).closest('tr.radio-list').removeClass('selected');
        }
    })
    ", "POS_POSTSCRIPT"));
            // line 264
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/custom_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 264,  477 => 256,  475 => 255,  472 => 254,  468 => 252,  456 => 243,  454 => 242,  448 => 238,  437 => 230,  425 => 221,  416 => 214,  414 => 213,  411 => 212,  400 => 203,  398 => 202,  395 => 201,  371 => 179,  369 => 178,  366 => 177,  360 => 174,  354 => 171,  351 => 170,  349 => 169,  346 => 168,  339 => 164,  335 => 163,  331 => 161,  328 => 160,  325 => 159,  322 => 158,  319 => 157,  317 => 156,  314 => 155,  312 => 154,  309 => 153,  302 => 149,  298 => 148,  294 => 146,  291 => 145,  288 => 144,  285 => 143,  282 => 142,  280 => 141,  277 => 140,  275 => 139,  272 => 138,  265 => 134,  261 => 133,  257 => 131,  254 => 130,  251 => 129,  248 => 128,  245 => 127,  243 => 126,  240 => 125,  238 => 124,  235 => 123,  215 => 106,  211 => 105,  207 => 103,  204 => 102,  201 => 101,  198 => 100,  195 => 99,  193 => 98,  190 => 97,  188 => 96,  185 => 95,  165 => 78,  161 => 77,  157 => 75,  154 => 74,  151 => 73,  148 => 72,  145 => 71,  143 => 70,  140 => 69,  138 => 68,  132 => 65,  129 => 64,  127 => 63,  123 => 61,  119 => 59,  117 => 58,  114 => 57,  110 => 55,  108 => 54,  103 => 52,  95 => 47,  88 => 43,  84 => 42,  78 => 38,  72 => 34,  70 => 33,  67 => 32,  54 => 22,  51 => 21,  49 => 20,  46 => 19,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/header/custom_header.twig", "C:\\xampp\\htdocs\\LimeSurvey\\themes\\survey\\fruity\\views\\subviews\\header\\custom_header.twig");
    }
}
