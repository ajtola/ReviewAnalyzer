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
        $__internal_3f6441f4ddd68163ba2e957345bcf4c9155c67bee94092ebec8029f0e0f826ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6441f4ddd68163ba2e957345bcf4c9155c67bee94092ebec8029f0e0f826ff->enter($__internal_3f6441f4ddd68163ba2e957345bcf4c9155c67bee94092ebec8029f0e0f826ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f6441f4ddd68163ba2e957345bcf4c9155c67bee94092ebec8029f0e0f826ff->leave($__internal_3f6441f4ddd68163ba2e957345bcf4c9155c67bee94092ebec8029f0e0f826ff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0da06370ee4623e2d8d04c47e0ba9ae7e994d409df9b033094148a4f49c45e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da06370ee4623e2d8d04c47e0ba9ae7e994d409df9b033094148a4f49c45e5c->enter($__internal_0da06370ee4623e2d8d04c47e0ba9ae7e994d409df9b033094148a4f49c45e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0da06370ee4623e2d8d04c47e0ba9ae7e994d409df9b033094148a4f49c45e5c->leave($__internal_0da06370ee4623e2d8d04c47e0ba9ae7e994d409df9b033094148a4f49c45e5c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5107b70d7900ae7ea8a03e82930bd4aeec4cf39e4400adce6b394075fd911006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5107b70d7900ae7ea8a03e82930bd4aeec4cf39e4400adce6b394075fd911006->enter($__internal_5107b70d7900ae7ea8a03e82930bd4aeec4cf39e4400adce6b394075fd911006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5107b70d7900ae7ea8a03e82930bd4aeec4cf39e4400adce6b394075fd911006->leave($__internal_5107b70d7900ae7ea8a03e82930bd4aeec4cf39e4400adce6b394075fd911006_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca2f25430fc6d47648960bccc6aae67570225a43d9820910406ef8c1cdcb9ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2f25430fc6d47648960bccc6aae67570225a43d9820910406ef8c1cdcb9ef1->enter($__internal_ca2f25430fc6d47648960bccc6aae67570225a43d9820910406ef8c1cdcb9ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ca2f25430fc6d47648960bccc6aae67570225a43d9820910406ef8c1cdcb9ef1->leave($__internal_ca2f25430fc6d47648960bccc6aae67570225a43d9820910406ef8c1cdcb9ef1_prof);

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
