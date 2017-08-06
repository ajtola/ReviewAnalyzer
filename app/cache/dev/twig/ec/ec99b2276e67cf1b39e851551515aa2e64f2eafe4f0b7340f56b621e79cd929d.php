<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_bc1d1aa4779e5144682b63d17845d5efb795a8d830fcea1c2496bd62bc47b4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9d694ca8990b34aee355e1e6249f57058f63b5ab7956a32cd91629567f1cc63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d694ca8990b34aee355e1e6249f57058f63b5ab7956a32cd91629567f1cc63->enter($__internal_f9d694ca8990b34aee355e1e6249f57058f63b5ab7956a32cd91629567f1cc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9d694ca8990b34aee355e1e6249f57058f63b5ab7956a32cd91629567f1cc63->leave($__internal_f9d694ca8990b34aee355e1e6249f57058f63b5ab7956a32cd91629567f1cc63_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_702d4d481dc4630906a9786b6ba6c8c23451baccc67a48548a6d8d024d300ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702d4d481dc4630906a9786b6ba6c8c23451baccc67a48548a6d8d024d300ebc->enter($__internal_702d4d481dc4630906a9786b6ba6c8c23451baccc67a48548a6d8d024d300ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_702d4d481dc4630906a9786b6ba6c8c23451baccc67a48548a6d8d024d300ebc->leave($__internal_702d4d481dc4630906a9786b6ba6c8c23451baccc67a48548a6d8d024d300ebc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a543a4a14b8bc92a5fe24b6be2d42ac78f8e6fba3d71b594fe91fe8624ebd9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a543a4a14b8bc92a5fe24b6be2d42ac78f8e6fba3d71b594fe91fe8624ebd9b0->enter($__internal_a543a4a14b8bc92a5fe24b6be2d42ac78f8e6fba3d71b594fe91fe8624ebd9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a543a4a14b8bc92a5fe24b6be2d42ac78f8e6fba3d71b594fe91fe8624ebd9b0->leave($__internal_a543a4a14b8bc92a5fe24b6be2d42ac78f8e6fba3d71b594fe91fe8624ebd9b0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
