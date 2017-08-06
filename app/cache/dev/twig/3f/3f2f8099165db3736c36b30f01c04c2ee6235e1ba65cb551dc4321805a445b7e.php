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
        $__internal_abb4f622aa54029195f2efe832df6e83e45508aa4b336507c0b0d190b2974dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb4f622aa54029195f2efe832df6e83e45508aa4b336507c0b0d190b2974dba->enter($__internal_abb4f622aa54029195f2efe832df6e83e45508aa4b336507c0b0d190b2974dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abb4f622aa54029195f2efe832df6e83e45508aa4b336507c0b0d190b2974dba->leave($__internal_abb4f622aa54029195f2efe832df6e83e45508aa4b336507c0b0d190b2974dba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0668b1b785a3f47df6eb57f7c08ff191804412d8309c51e092a0e6c1d737cdb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0668b1b785a3f47df6eb57f7c08ff191804412d8309c51e092a0e6c1d737cdb3->enter($__internal_0668b1b785a3f47df6eb57f7c08ff191804412d8309c51e092a0e6c1d737cdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0668b1b785a3f47df6eb57f7c08ff191804412d8309c51e092a0e6c1d737cdb3->leave($__internal_0668b1b785a3f47df6eb57f7c08ff191804412d8309c51e092a0e6c1d737cdb3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d75f9d122e166268073e923320b0aeeab0d1fb3d24b2e4784b0e52910838d36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75f9d122e166268073e923320b0aeeab0d1fb3d24b2e4784b0e52910838d36a->enter($__internal_d75f9d122e166268073e923320b0aeeab0d1fb3d24b2e4784b0e52910838d36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d75f9d122e166268073e923320b0aeeab0d1fb3d24b2e4784b0e52910838d36a->leave($__internal_d75f9d122e166268073e923320b0aeeab0d1fb3d24b2e4784b0e52910838d36a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42c1c7852e998b734b709d11a194dd1f55a13fc16a9f7d0eb0cebcd446877bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c1c7852e998b734b709d11a194dd1f55a13fc16a9f7d0eb0cebcd446877bf5->enter($__internal_42c1c7852e998b734b709d11a194dd1f55a13fc16a9f7d0eb0cebcd446877bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_42c1c7852e998b734b709d11a194dd1f55a13fc16a9f7d0eb0cebcd446877bf5->leave($__internal_42c1c7852e998b734b709d11a194dd1f55a13fc16a9f7d0eb0cebcd446877bf5_prof);

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
