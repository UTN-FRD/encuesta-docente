<?php

/* /admin/survey/Question/answerOptionsEdit_view.twig */
class __TwigTemplate_2e2d6ef5f72e27c5a686ac817d66c0e57d58499368e350475607e682054811f5 extends Twig_Template
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
        $tags = array("if" => 6, "set" => 15, "for" => 19, "include" => 126);
        $filters = array("length" => 37);
        $functions = array("range" => 35, "gT" => 46, "sprintf" => 60, "createUrl" => 212, "json_encode" => 224);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'for', 'include'),
                array('length'),
                array('range', 'gT', 'sprintf', 'createUrl', 'json_encode')
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
        echo "
                <input type='hidden' name='sid' value='";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["surveyid"] ?? null));
        echo "' />
                <input type='hidden' name='gid' value='";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["gid"] ?? null));
        echo "' />
                <input type='hidden' name='qid' value='";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
        echo "' />

                ";
        // line 6
        if ((($context["viewType"] ?? null) == "subQuestions")) {
            // line 7
            echo "                    <input type='hidden' id='action' name='action' value='updatesubquestions' />
                ";
        } elseif ((        // line 8
($context["viewType"] ?? null) == "answerOptions")) {
            // line 9
            echo "                    <input type='hidden' name='action' value='updateansweroptions' />
                ";
        }
        // line 11
        echo "
                <input type='hidden' name='sortorder' value='' />
                <input type='hidden' id='deletedqids' name='deletedqids' value='' />

                ";
        // line 15
        $context["first"] = true;
        // line 16
        echo "
                <!-- Tabs -->
                <ul class=\"nav nav-tabs\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["anslangs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["anslang"]) {
            // line 20
            echo "                        <li role=\"presentation\" ";
            if (($context["i"] == 0)) {
                echo "class=\"active\"";
            }
            echo ">
                            <a data-toggle=\"tab\" href='#tabpage_";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["anslang"]);
            echo "'>
                                ";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["base_language"] ?? null), $context["i"], array(), "array"));
            echo "
                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['anslang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </ul>
                ";
        // line 27
        $context["sortorderids"] = "";
        // line 28
        echo "                ";
        $context["codeids"] = "";
        // line 29
        echo "                ";
        $context["scale_id"] = 0;
        // line 30
        echo "
                <!-- Tab content -->
                <div class=\"tab-content\">
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["anslangs"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["anslang"]) {
            // line 34
            echo "                        <div id='tabpage_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["anslang"]);
            echo "' class='tab-page tab-pane fade in ";
            if (($context["i"] == 0)) {
                echo "active";
            }
            echo "'>
                            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($context["scalecount"] ?? null) - 1)));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["scale_id"]) {
                // line 36
                echo "                                 ";
                $context["result"] = $this->getAttribute($this->getAttribute(($context["results"] ?? null), $context["anslang"], array(), "array"), $context["scale_id"], array(), "array");
                // line 37
                echo "                                 ";
                $context["anscount"] = twig_length_filter($this->env, ($context["result"] ?? null));
                // line 38
                echo "                                ";
                // line 39
                echo "
                                ";
                // line 41
                echo "                                ";
                if ((($context["viewType"] ?? null) == "subQuestions")) {
                    // line 42
                    echo "                                    ";
                    $context["position"] = 0;
                    // line 43
                    echo "                                    ";
                    if ((($context["scalecount"] ?? null) > 1)) {
                        // line 44
                        echo "                                        ";
                        if (($context["scale_id"] == 0)) {
                            // line 45
                            echo "                                            <div class='header ui-widget-header'>
                                                ";
                            // line 46
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Y-Scale"));
                            echo "
                                            </div>
                                        ";
                        } else {
                            // line 49
                            echo "                                            <div class='header ui-widget-header'>
                                                ";
                            // line 50
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("X-Scale"));
                            echo "
                                            </div>
                                        ";
                        }
                        // line 53
                        echo "                                    ";
                    }
                    // line 54
                    echo "
                                ";
                    // line 56
                    echo "                                ";
                } elseif ((($context["viewType"] ?? null) == "answerOptions")) {
                    // line 57
                    echo "                                    ";
                    $context["position"] = 1;
                    // line 58
                    echo "                                    ";
                    if ((($context["scalecount"] ?? null) > 1)) {
                        // line 59
                        echo "                                        <div class='header ui-widget-header' style='margin-top:5px;'>
                                            ";
                        // line 60
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("Answer scale %s"), ($context["scale_id"] + 1)));
                        echo "
                                        </div>
                                    ";
                    }
                    // line 63
                    echo "                                ";
                }
                // line 64
                echo "
                                <!-- Answers/Subquestions Table -->
                                <table class='answertable table table-responsive' id='";
                // line 66
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["tableId"] ?? null), $context["anslang"], array(), "array"), $context["scale_id"], array(), "array"));
                echo "' data-scaleid='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["scale_id"]);
                echo "'>

                                    <!-- Headers -->
                                    <thead>
                                        <tr>
                                            <th class=\"col-md-1\">
                                                ";
                // line 72
                if ((($context["first"] ?? null) && (($context["activated"] ?? null) != "Y"))) {
                    // line 73
                    echo "                                                    ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Position"));
                    echo "
                                                ";
                } else {
                    // line 75
                    echo "                                                    &nbsp;
                                                ";
                }
                // line 77
                echo "                                            </th>
                                            <th class='col-md-1'>";
                // line 78
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Code"));
                echo "</th>

                                            <!-- subQuestions headers -->
                                            ";
                // line 81
                if ((($context["viewType"] ?? null) == "subQuestions")) {
                    // line 82
                    echo "                                                <th>
                                                    ";
                    // line 83
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Subquestion"));
                    echo "
                                                </th>
                                                ";
                    // line 85
                    if (($context["first"] ?? null)) {
                        // line 86
                        echo "                                                    ";
                        if (($context["scale_id"] == 0)) {
                            // line 87
                            echo "                                                        <th id='rel-eq-th' class='col-md-1'>
                                                            ";
                            // line 88
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Relevance equation"));
                            echo "
                                                        </th>
                                                    ";
                        }
                        // line 91
                        echo "                                                    <th class=\"col-md-1\">
                                                        ";
                        // line 92
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Action"));
                        echo "
                                                    </th>
                                                ";
                    }
                    // line 95
                    echo "
                                            <!-- answer Options header-->
                                            ";
                } elseif ((                // line 97
($context["viewType"] ?? null) == "answerOptions")) {
                    // line 98
                    echo "                                                ";
                    if (($context["assessmentvisible"] ?? null)) {
                        // line 99
                        echo "                                                    <th class='col-md-1'>
                                                        ";
                        // line 100
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Assessment value"));
                        echo "
                                                    </th>
                                                ";
                    } else {
                        // line 103
                        echo "                                                    <th style='display:none;'>
                                                        &nbsp;
                                                    </th>
                                                ";
                    }
                    // line 107
                    echo "
                                                <th class='col-md-8'>
                                                    ";
                    // line 109
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Answer option"));
                    echo "
                                                </th>

                                                <th class='col-md-1'>
                                                    ";
                    // line 113
                    if (($context["first"] ?? null)) {
                        // line 114
                        echo "                                                        ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Actions"));
                        echo "
                                                    ";
                    }
                    // line 116
                    echo "                                                </th>
                                            ";
                }
                // line 118
                echo "                                        </tr>
                                    </thead>

                                    <!-- Body -->
                                    <tbody id=\"rowcontainer\">
                                        ";
                // line 123
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["result"] ?? null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 124
                    echo "                                            <!-- Line tag -->
                                            ";
                    // line 125
                    if ((($context["viewType"] ?? null) == "subQuestions")) {
                        // line 126
                        echo "                                                ";
                        $this->loadTemplate("/admin/survey/Question/subquestionsAndAnswers/_subquestion.twig", "/admin/survey/Question/answerOptionsEdit_view.twig", 126)->display(array_merge($context, array("position" =>                         // line 127
($context["position"] ?? null), "scale_id" =>                         // line 128
$context["scale_id"], "activated" =>                         // line 129
($context["activated"] ?? null), "first" =>                         // line 130
($context["first"] ?? null), "surveyid" =>                         // line 131
($context["surveyid"] ?? null), "gid" =>                         // line 132
($context["gid"] ?? null), "qid" => $this->getAttribute(                        // line 133
$context["row"], "qid", array()), "language" => $this->getAttribute(                        // line 134
$context["row"], "language", array()), "title" => $this->getAttribute(                        // line 135
$context["row"], "title", array()), "question" => $this->getAttribute(                        // line 136
$context["row"], "question", array()), "relevance" => $this->getAttribute(                        // line 137
$context["row"], "relevance", array()), "oldCode" => true)));
                        // line 140
                        echo "
                                            ";
                    } elseif ((                    // line 141
($context["viewType"] ?? null) == "answerOptions")) {
                        // line 142
                        echo "                                                ";
                        $this->loadTemplate("/admin/survey/Question/subquestionsAndAnswers/_answer_option.twig", "/admin/survey/Question/answerOptionsEdit_view.twig", 142)->display(array_merge($context, array("position" =>                         // line 143
($context["position"] ?? null), "first" =>                         // line 144
($context["first"] ?? null), "assessmentvisible" =>                         // line 145
($context["assessmentvisible"] ?? null), "scale_id" =>                         // line 146
$context["scale_id"], "title" => $this->getAttribute(                        // line 147
$context["row"], "code", array()), "surveyid" =>                         // line 148
($context["surveyid"] ?? null), "gid" =>                         // line 149
($context["gid"] ?? null), "qid" =>                         // line 150
($context["qid"] ?? null), "language" => $this->getAttribute(                        // line 151
$context["row"], "language", array()), "assessment_value" => $this->getAttribute(                        // line 152
$context["row"], "assessment_value", array()), "sortorder" => $this->getAttribute(                        // line 153
$context["row"], "sortorder", array()), "answer" => $this->getAttribute(                        // line 154
$context["row"], "answer", array()), "oldCode" => true)));
                        // line 157
                        echo "
                                            ";
                    }
                    // line 159
                    echo "
                                            ";
                    // line 160
                    $context["position"] = (($context["position"] ?? null) + 1);
                    // line 161
                    echo "
                                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "                                    </tbody>
                                </table>

                                <div class=\"action-buttons\">
                                    ";
                // line 167
                if ((($context["viewType"] ?? null) == "subQuestions")) {
                    // line 168
                    echo "                                        ";
                    if ((($context["activated"] ?? null) == "Y")) {
                        // line 169
                        echo "                                            ";
                        $context["disabled"] = "disabled=\"disabled\"";
                        // line 170
                        echo "                                        ";
                    } else {
                        // line 171
                        echo "                                            ";
                        $context["disabled"] = "";
                        // line 172
                        echo "                                        ";
                    }
                    // line 173
                    echo "                                    ";
                } elseif ((($context["viewType"] ?? null) == "answerOptions")) {
                    // line 174
                    echo "                                        ";
                    if (($context["first"] ?? null)) {
                        // line 175
                        echo "                                            <input type='hidden' id='answercount_";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["scale_id"]);
                        echo "' name='answercount_";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["scale_id"]);
                        echo "' value='";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["anscount"] ?? null));
                        echo "' />
                                            ";
                        // line 176
                        $context["disabled"] = "";
                        // line 177
                        echo "                                        ";
                    }
                    // line 178
                    echo "                                        <br/>
                                    ";
                }
                // line 180
                echo "
                                    <button ";
                // line 181
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["disabled"] ?? null));
                echo "  id='btnlsbrowser_";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["anslang"]);
                echo "_";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["scale_id"]);
                echo "' data-scale-id=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["scale_id"]);
                echo "\" class='btnlsbrowser btn btn-default' type='button'    data-toggle=\"modal\" data-target=\"#labelsetbrowserModal\">
                                        ";
                // line 182
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Predefined label sets..."));
                echo "
                                    </button>

                                    <button ";
                // line 185
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["disabled"] ?? null));
                echo "  id='btnquickadd_";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["anslang"]);
                echo "_";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["scale_id"]);
                echo "' data-scale-id=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["scale_id"]);
                echo "\" class='btn btn-default btnquickadd' type='button'  data-toggle=\"modal\" data-target=\"#quickaddModal\" data-scale-id=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["scale_id"]);
                echo "\">
                                        ";
                // line 186
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Quick add..."));
                echo "
                                    </button>


                                    ";
                // line 190
                if (($context["has_permissions"] ?? null)) {
                    // line 191
                    echo "                                        <button class='bthsaveaslabel btn btn-default' id='bthsaveaslabel_";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["scale_id"]);
                    echo "' type='button' data-toggle=\"modal\" data-target=\"#saveaslabelModal\">
                                            ";
                    // line 192
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Save as label set"));
                    echo "
                                        </button>
                                    ";
                }
                // line 195
                echo "
                                </div>
                                ";
                // line 197
                $context["position"] = sprintf("%05d", ($context["position"] ?? null));
                // line 198
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scale_id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "                        </div>
                        ";
            // line 200
            $context["first"] = false;
            // line 201
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['anslang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "
                    <!--   Modals   -->
                    ";
        // line 204
        $this->loadTemplate("admin/survey/Question/question_subviews/_modals.twig", "/admin/survey/Question/answerOptionsEdit_view.twig", 204)->display($context);
        // line 205
        echo "
                    <p>
                        <input type='submit' class=\"hidden\" id='saveallbtn_";
        // line 207
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["anslang"] ?? null));
        echo "' name='method' value='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Save changes"));
        echo "' />
                        <!-- For javascript -->
                        <input
                            type=\"hidden\"
                            id=\"add-input-javascript-datas\"
                            data-url=\"";
        // line 212
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::createUrl("/admin/questions/sa/getSubquestionRowForAllLanguages/"));
        echo "\"
                            data-quickurl=\"";
        // line 213
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::createUrl("/admin/questions/", array("sa" => "getSubquestionRowQuickAdd", "surveyid" =>         // line 217
($context["surveyid"] ?? null), "gid" =>         // line 218
($context["gid"] ?? null))));
        // line 220
        echo "\"
                            data-assessmentvisible=\"";
        // line 221
        if ((twig_length_filter($this->env, ($context["assessmentvisible"] ?? null)) && (($context["assessmentvisible"] ?? null) == true))) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\"
                            data-errormessage=\"An error occured while processing the ajax request.\"
                            data-surveyid=\"";
        // line 223
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["surveyid"] ?? null));
        echo "\"
                            data-languages='";
        // line 224
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(CJSON::encode(($context["all_languages"] ?? null)));
        echo "'
                            data-gid=\"";
        // line 225
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["gid"] ?? null));
        echo "\"
                            data-qid=\"";
        // line 226
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["qid"] ?? null));
        echo "\"
                            data-scale-id=\"";
        // line 227
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["scale_id"] ?? null));
        echo "\" ";
        // line 228
        echo "                        />
                    </p>

                </div>
                <input type='hidden' id='bFullPOST' name='bFullPOST' value='1' />

            ";
    }

    public function getTemplateName()
    {
        return "/admin/survey/Question/answerOptionsEdit_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 228,  631 => 227,  627 => 226,  623 => 225,  619 => 224,  615 => 223,  606 => 221,  603 => 220,  601 => 218,  600 => 217,  599 => 213,  595 => 212,  585 => 207,  581 => 205,  579 => 204,  575 => 202,  561 => 201,  559 => 200,  556 => 199,  542 => 198,  540 => 197,  536 => 195,  530 => 192,  525 => 191,  523 => 190,  516 => 186,  504 => 185,  498 => 182,  488 => 181,  485 => 180,  481 => 178,  478 => 177,  476 => 176,  467 => 175,  464 => 174,  461 => 173,  458 => 172,  455 => 171,  452 => 170,  449 => 169,  446 => 168,  444 => 167,  438 => 163,  423 => 161,  421 => 160,  418 => 159,  414 => 157,  412 => 154,  411 => 153,  410 => 152,  409 => 151,  408 => 150,  407 => 149,  406 => 148,  405 => 147,  404 => 146,  403 => 145,  402 => 144,  401 => 143,  399 => 142,  397 => 141,  394 => 140,  392 => 137,  391 => 136,  390 => 135,  389 => 134,  388 => 133,  387 => 132,  386 => 131,  385 => 130,  384 => 129,  383 => 128,  382 => 127,  380 => 126,  378 => 125,  375 => 124,  358 => 123,  351 => 118,  347 => 116,  341 => 114,  339 => 113,  332 => 109,  328 => 107,  322 => 103,  316 => 100,  313 => 99,  310 => 98,  308 => 97,  304 => 95,  298 => 92,  295 => 91,  289 => 88,  286 => 87,  283 => 86,  281 => 85,  276 => 83,  273 => 82,  271 => 81,  265 => 78,  262 => 77,  258 => 75,  252 => 73,  250 => 72,  239 => 66,  235 => 64,  232 => 63,  226 => 60,  223 => 59,  220 => 58,  217 => 57,  214 => 56,  211 => 54,  208 => 53,  202 => 50,  199 => 49,  193 => 46,  190 => 45,  187 => 44,  184 => 43,  181 => 42,  178 => 41,  175 => 39,  173 => 38,  170 => 37,  167 => 36,  150 => 35,  141 => 34,  124 => 33,  119 => 30,  116 => 29,  113 => 28,  111 => 27,  108 => 26,  98 => 22,  94 => 21,  87 => 20,  83 => 19,  78 => 16,  76 => 15,  70 => 11,  66 => 9,  64 => 8,  61 => 7,  59 => 6,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/admin/survey/Question/answerOptionsEdit_view.twig", "C:\\xampp7.2.24\\htdocs\\encuesta-docente\\admin\\application\\views\\admin\\survey\\Question\\answerOptionsEdit_view.twig");
    }
}
