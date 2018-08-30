<?php

/* ./subviews/footer/footer.twig */
class __TwigTemplate_48c3908737dce051877fe2eed57c7beb5f9bc4bd9f433854e9b2e137883f83d0 extends Twig_Template
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
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

    }

    public function getTemplateName()
    {
        return "./subviews/footer/footer.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Add your footer in this file.

You will need to add custom CSS to make this work, for example, the following
should work for a bottom-aligned footer in all browsers that properly support
flex:

body {
     padding-bottom: 0; /* no bottom padding, footer should be bottom aligned */
     padding-top: 60px;/* now is redefine in JS to fit any title length */
     flex-direction: column; /* article, then footer */
     display: flex; /* flex, to extend the content to full size */
     min-height: 100vh; /* full height, to bottom-align footer */
}
body > article {
    flex: 1; /* the main article should use as much space as possible */
}

#}
", "./subviews/footer/footer.twig", "C:\\xampp\\htdocs\\LimeSurvey\\themes\\survey\\vanilla\\views\\subviews\\footer\\footer.twig");
    }
}
