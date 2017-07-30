<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9ca6d46e5c12f05f880ab1500d22008451760e5f53eaed45e803c135fadc681b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f4e52c9e0bdfa95ad352dc2d43955a36dbed14e8fb5180e0051e7f24fde4cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4e52c9e0bdfa95ad352dc2d43955a36dbed14e8fb5180e0051e7f24fde4cce->enter($__internal_3f4e52c9e0bdfa95ad352dc2d43955a36dbed14e8fb5180e0051e7f24fde4cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f4e52c9e0bdfa95ad352dc2d43955a36dbed14e8fb5180e0051e7f24fde4cce->leave($__internal_3f4e52c9e0bdfa95ad352dc2d43955a36dbed14e8fb5180e0051e7f24fde4cce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a31d49dea6ec19534ee77d32dbe48346703fdbc84aa3bd7f569443118357425f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31d49dea6ec19534ee77d32dbe48346703fdbc84aa3bd7f569443118357425f->enter($__internal_a31d49dea6ec19534ee77d32dbe48346703fdbc84aa3bd7f569443118357425f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a31d49dea6ec19534ee77d32dbe48346703fdbc84aa3bd7f569443118357425f->leave($__internal_a31d49dea6ec19534ee77d32dbe48346703fdbc84aa3bd7f569443118357425f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63e3246e02e3fb70ba6eecd6f4288afa7c89df08f04564a14c7a83523f07ec93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e3246e02e3fb70ba6eecd6f4288afa7c89df08f04564a14c7a83523f07ec93->enter($__internal_63e3246e02e3fb70ba6eecd6f4288afa7c89df08f04564a14c7a83523f07ec93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_63e3246e02e3fb70ba6eecd6f4288afa7c89df08f04564a14c7a83523f07ec93->leave($__internal_63e3246e02e3fb70ba6eecd6f4288afa7c89df08f04564a14c7a83523f07ec93_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8cb2308dc3b1666b92a7fe357c24575bed3ccd65582ca7cf675814bee1748fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8cb2308dc3b1666b92a7fe357c24575bed3ccd65582ca7cf675814bee1748fc->enter($__internal_c8cb2308dc3b1666b92a7fe357c24575bed3ccd65582ca7cf675814bee1748fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c8cb2308dc3b1666b92a7fe357c24575bed3ccd65582ca7cf675814bee1748fc->leave($__internal_c8cb2308dc3b1666b92a7fe357c24575bed3ccd65582ca7cf675814bee1748fc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
