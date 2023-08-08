<?php

/* __string_template__ee097b373ea22f744bc756cf4a828ac73cf91742ebb53ebeefef65185716aef5 */
class __TwigTemplate_c07f93f8db5b091093bc387fb22e1d6e60446afeaa4f8d44c73d5611bc4c33a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("layout_global.twig", "__string_template__ee097b373ea22f744bc756cf4a828ac73cf91742ebb53ebeefef65185716aef5", 18);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_global.twig";
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "__string_template__ee097b373ea22f744bc756cf4a828ac73cf91742ebb53ebeefef65185716aef5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__ee097b373ea22f744bc756cf4a828ac73cf91742ebb53ebeefef65185716aef5", "");
    }
}
