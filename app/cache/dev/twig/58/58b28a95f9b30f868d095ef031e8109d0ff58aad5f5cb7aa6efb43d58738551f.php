<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_08756a28a611088b8d234b02eb46492a2f4cf5d40f6d67be5a7aeb70c04d2815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_6c5efe975dcedb3673a463f46a65a6daea5d9a8ff4427a1d4673a8d78e3c8b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5efe975dcedb3673a463f46a65a6daea5d9a8ff4427a1d4673a8d78e3c8b16->enter($__internal_6c5efe975dcedb3673a463f46a65a6daea5d9a8ff4427a1d4673a8d78e3c8b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c5efe975dcedb3673a463f46a65a6daea5d9a8ff4427a1d4673a8d78e3c8b16->leave($__internal_6c5efe975dcedb3673a463f46a65a6daea5d9a8ff4427a1d4673a8d78e3c8b16_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7efd4c0829139b2edb3d41bf495e82af6c74e6acb3b119190aaa5e88200dd23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7efd4c0829139b2edb3d41bf495e82af6c74e6acb3b119190aaa5e88200dd23->enter($__internal_a7efd4c0829139b2edb3d41bf495e82af6c74e6acb3b119190aaa5e88200dd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a7efd4c0829139b2edb3d41bf495e82af6c74e6acb3b119190aaa5e88200dd23->leave($__internal_a7efd4c0829139b2edb3d41bf495e82af6c74e6acb3b119190aaa5e88200dd23_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a120da6b69b8e09f145aba285d11be8e7beee6ad513a96d1d93b44cd8e729009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a120da6b69b8e09f145aba285d11be8e7beee6ad513a96d1d93b44cd8e729009->enter($__internal_a120da6b69b8e09f145aba285d11be8e7beee6ad513a96d1d93b44cd8e729009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a120da6b69b8e09f145aba285d11be8e7beee6ad513a96d1d93b44cd8e729009->leave($__internal_a120da6b69b8e09f145aba285d11be8e7beee6ad513a96d1d93b44cd8e729009_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af14bab321c14c736457653e5a91a8aa1603f8d7fed8011fb31975cea7d1ac1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af14bab321c14c736457653e5a91a8aa1603f8d7fed8011fb31975cea7d1ac1b->enter($__internal_af14bab321c14c736457653e5a91a8aa1603f8d7fed8011fb31975cea7d1ac1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_af14bab321c14c736457653e5a91a8aa1603f8d7fed8011fb31975cea7d1ac1b->leave($__internal_af14bab321c14c736457653e5a91a8aa1603f8d7fed8011fb31975cea7d1ac1b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/antonio/Challenge/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
