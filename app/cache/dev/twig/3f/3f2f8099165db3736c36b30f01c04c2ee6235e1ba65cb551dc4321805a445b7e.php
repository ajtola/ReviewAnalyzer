<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_df6f220f9b740e622cfcd02fc7eea3422717a889ce9b1edb6aea040027220d58 extends Twig_Template
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
        $__internal_24520b4fd2ba9a7a978c7ad7d2a2cddb67044e64d8a2aa126ba2b8e2b6ba2f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24520b4fd2ba9a7a978c7ad7d2a2cddb67044e64d8a2aa126ba2b8e2b6ba2f9d->enter($__internal_24520b4fd2ba9a7a978c7ad7d2a2cddb67044e64d8a2aa126ba2b8e2b6ba2f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24520b4fd2ba9a7a978c7ad7d2a2cddb67044e64d8a2aa126ba2b8e2b6ba2f9d->leave($__internal_24520b4fd2ba9a7a978c7ad7d2a2cddb67044e64d8a2aa126ba2b8e2b6ba2f9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dee1659911a1e3b1110068f3f0594bf243ae6be26007842c18b1fa61844e972d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee1659911a1e3b1110068f3f0594bf243ae6be26007842c18b1fa61844e972d->enter($__internal_dee1659911a1e3b1110068f3f0594bf243ae6be26007842c18b1fa61844e972d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dee1659911a1e3b1110068f3f0594bf243ae6be26007842c18b1fa61844e972d->leave($__internal_dee1659911a1e3b1110068f3f0594bf243ae6be26007842c18b1fa61844e972d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71e2867e9fd803246ca951209e45095cddd7356d81c1c00043a3c50cb61786c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e2867e9fd803246ca951209e45095cddd7356d81c1c00043a3c50cb61786c2->enter($__internal_71e2867e9fd803246ca951209e45095cddd7356d81c1c00043a3c50cb61786c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_71e2867e9fd803246ca951209e45095cddd7356d81c1c00043a3c50cb61786c2->leave($__internal_71e2867e9fd803246ca951209e45095cddd7356d81c1c00043a3c50cb61786c2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ae4a087888242d94fbc0bc27d42538af9704936e23e9017e725b1ea2bec56dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae4a087888242d94fbc0bc27d42538af9704936e23e9017e725b1ea2bec56dd->enter($__internal_2ae4a087888242d94fbc0bc27d42538af9704936e23e9017e725b1ea2bec56dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ae4a087888242d94fbc0bc27d42538af9704936e23e9017e725b1ea2bec56dd->leave($__internal_2ae4a087888242d94fbc0bc27d42538af9704936e23e9017e725b1ea2bec56dd_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
