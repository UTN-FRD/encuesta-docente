<?php

/* admin/survey/Question/question_subviews/_modals.twig */
class __TwigTemplate_fc0714d515607af6c19e7b4c574de48c96aceba22072e36a8d94eb2af3b47311 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array("gT" => 13);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array('gT')
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

        // line 6
        echo "
<!-- quickaddModal -->
<div class=\"modal fade labelsets-update\" id=\"quickaddModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"quickaddModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span >&times;</span></button>
                <h4 class=\"modal-title\" id=\"quickaddModal\">";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Enter your answers:"));
        echo "</h4>
            </div>

            <div class=\"modal-body\">
                <p>
                    ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Enter one answer per line. You can provide a code by separating code and answer text with a semikolon or tab. For multilingual surveys you add the translation(s) on the same line separated with a semikolon or tab."));
        echo "
                </p>
                <textarea id='quickaddarea' class='tipme' title='' cols='100' rows='10' style='width:570px;'></textarea>
            </div>
            <div class=\"modal-footer button-list\">
                <button class='btn btn-default' id='btnqareplace' type='button'>";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Replace"));
        echo "</button>
                <button class='btn btn-default' id='btnqainsert' type='button'>";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Add"));
        echo "</button>
                <button class='btn btn-warning' id='btnqacancel' type='button'  data-dismiss=\"modal\">";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Cancel"));
        echo "</button>
            </div>
        </div>
    </div>
</div>

<!--labelset browser Modal -->
<div class=\"modal fade labelsets-update\" id=\"labelsetbrowserModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"labelsetbrowserModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span >&times;</span></button>
                <h4 class=\"modal-title\" id=\"labelsetbrowserModal\">";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Available label sets:"));
        echo "</h4>
            </div>

            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <label for=\"labelsets\">";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("Please select a label set");
        echo "</label>
                        </div>
                        <div class=\"col-sm-12\">
                            <select id='labelsets' size='10' style='width:250px;'>
                                <option>--";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Select label set"));
        echo "--</option>
                            </select>
                        </div>
                        <div class=\"row\">
                            <div id='labelsetpreview' class=\"col-sm-12 ls-space margin top-15\" >

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class=\"modal-footer button-list\">
                <button id='btnlsreplace' type='button' class='btn btn-default'>";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Replace"));
        echo "</button>
                <button id='btnlsinsert' type='button' class='btn btn-default'>";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Add"));
        echo "</button>
                <button class='btn btn-warning' id='btnqacancel' type='button'  data-dismiss=\"modal\">";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Cancel"));
        echo "</button>
            </div>
        </div>
    </div>
</div>

<!-- Save as labelset Modal -->
<div class=\"modal fade\" id=\"saveaslabelModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"saveaslabelModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span >&times;</span></button>
                <h4 class=\"modal-title\">
                    ";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Save as label set:"));
        echo "
                </h4>

            </div>

            <div class=\"modal-body\">
                <p>
                    <input type=\"radio\" name=\"savelabeloption\" id=\"newlabel\">
                    <label for=\"newlabel\">";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("New label set"));
        echo "</label>
                </p>
                <p>
                    <input type=\"radio\" name=\"savelabeloption\" id=\"replacelabel\">
                    <label for=\"replacelabel\">";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Replace existing label set"));
        echo "
                </p>
            </div>

            <div class=\"modal-footer button-list\">
                <button id='btnsave' class='btn btn-default' type='button'>";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Save"));
        echo "</button>
                <button class='btn btn-warning' id='btnlacancel' type='button'  data-dismiss=\"modal\">";
        // line 94
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Cancel"));
        echo "</button>
            </div>
        </div>
    </div>
</div>

<!-- Confirm labelset replacement -->
<div class=\"modal fade\" id=\"dialog-confirm-replaceModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"dialog-confirm-replaceModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span >&times;</span></button>
                <h4 class=\"modal-title\">
                    ";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Replace label set?"));
        echo "
                </h4>
            </div>

            <div class=\"modal-body\">
                <p>
                    <span id='strReplaceMessage'></span>
                </p>
            </div>

            <div class=\"modal-footer button-list\">
                <button class='btn btn-default' id='btnlconfirmreplace' type='button' data-dismiss=\"modal\"  >";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("OK"));
        echo "</button>
                <button class='btn btn-warning' id='btnlacancel' type='button'  data-dismiss=\"modal\">";
        // line 119
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Cancel"));
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/survey/Question/question_subviews/_modals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 119,  208 => 118,  194 => 107,  178 => 94,  174 => 93,  166 => 88,  159 => 84,  148 => 76,  132 => 63,  128 => 62,  124 => 61,  108 => 48,  101 => 44,  91 => 37,  76 => 25,  72 => 24,  68 => 23,  60 => 18,  52 => 13,  43 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/survey/Question/question_subviews/_modals.twig", "C:\\xampp7.2.24\\htdocs\\encuesta-docente\\admin\\application\\views\\admin\\survey\\Question\\question_subviews\\_modals.twig");
    }
}
