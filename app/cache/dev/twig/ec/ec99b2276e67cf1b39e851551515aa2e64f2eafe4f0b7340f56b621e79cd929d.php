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
        $__internal_245a8d2244a70ac9d03fcca9077823df0cc70b89f78bbf7fff26e5ff4665bc41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245a8d2244a70ac9d03fcca9077823df0cc70b89f78bbf7fff26e5ff4665bc41->enter($__internal_245a8d2244a70ac9d03fcca9077823df0cc70b89f78bbf7fff26e5ff4665bc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_245a8d2244a70ac9d03fcca9077823df0cc70b89f78bbf7fff26e5ff4665bc41->leave($__internal_245a8d2244a70ac9d03fcca9077823df0cc70b89f78bbf7fff26e5ff4665bc41_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33b5a7e770434e0a67fa72631eb7e208ff034cf151d7d099c78ed6e629f64327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b5a7e770434e0a67fa72631eb7e208ff034cf151d7d099c78ed6e629f64327->enter($__internal_33b5a7e770434e0a67fa72631eb7e208ff034cf151d7d099c78ed6e629f64327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_33b5a7e770434e0a67fa72631eb7e208ff034cf151d7d099c78ed6e629f64327->leave($__internal_33b5a7e770434e0a67fa72631eb7e208ff034cf151d7d099c78ed6e629f64327_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7aff13aa169c0dab96567e6e5fcb659a2d143d54909e0bdc4076514f257294f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7aff13aa169c0dab96567e6e5fcb659a2d143d54909e0bdc4076514f257294f->enter($__internal_f7aff13aa169c0dab96567e6e5fcb659a2d143d54909e0bdc4076514f257294f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f7aff13aa169c0dab96567e6e5fcb659a2d143d54909e0bdc4076514f257294f->leave($__internal_f7aff13aa169c0dab96567e6e5fcb659a2d143d54909e0bdc4076514f257294f_prof);

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
