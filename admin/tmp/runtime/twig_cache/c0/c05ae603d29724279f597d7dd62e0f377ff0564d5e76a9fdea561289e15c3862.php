<?php

/* __string_template__c4df22af340f4a42329ff5114648f84fecc6e4964b5c3a74f87eb7dce71a8347 */
class __TwigTemplate_2fcc280c9a7aa8b6e8e03a5816cb4ce5c4279c556f96523837b76ccf6f5199cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 28, "block" => 63);
        $filters = array("format" => 58);
        $functions = array("registerTemplateCssFile" => 27, "gT" => 58, "include" => 64);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block'),
                array('format'),
                array('registerTemplateCssFile', 'gT', 'include')
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

        // line 25
        echo "
";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerTemplateCssFile("css/errors.css"));
        echo "
";
        // line 28
        $context["aError"] = $this->getAttribute(($context["aSurveyInfo"] ?? null), "aError", array());
        // line 29
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 31
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

    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

        <title>
            ERROR! ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_title", array()));
        echo "
        </title>

        ";
        // line 46
        echo "        <meta name=\"generator\" content=\"LimeSurvey http://www.limesurvey.org\" />
        <link rel=\"shortcut icon\" href=\"";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["templateurl"] ?? null));
        echo "favicon.ico\" />
    </head>

    <body  class=\"";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "body", array()));
        echo " lang-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["surveylanguage"] ?? null));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["surveyformat"] ?? null));
        echo "\" marginwidth=\"0\" marginheight=\"0\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "body", array()));
        echo ">
        <article id=\"block_error\">
            <div>
                <h2>";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "title", array()));
        echo "</h2>
                <p>
                    ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "message", array()));
        echo "
                </p>
                <p>
                    ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("For further information please contact %s:"), $this->getAttribute(($context["aSurveyInfo"] ?? null), "adminname", array())));
        echo "<br>
                    <a href='mailto:";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "adminemail", array()));
        echo "'>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "adminemail", array()));
        echo "</a>
                </p>
            </div>
        </article>
        ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/footer/footer.twig"));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__c4df22af340f4a42329ff5114648f84fecc6e4964b5c3a74f87eb7dce71a8347";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 64,  137 => 63,  131 => 66,  129 => 63,  120 => 59,  116 => 58,  110 => 55,  105 => 53,  93 => 50,  87 => 47,  84 => 46,  78 => 39,  57 => 31,  53 => 29,  51 => 28,  47 => 27,  44 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__c4df22af340f4a42329ff5114648f84fecc6e4964b5c3a74f87eb7dce71a8347", "");
    }
}
