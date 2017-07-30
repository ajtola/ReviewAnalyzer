<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_05631d80e3b244866f6905245c13ec28c1749f038fcd082633fa38d66e93f12a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle:Configurator:layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd77e7e4421249b86309fcc7c1d61a33ddfa738e9a502c1dcf5d3522ac6eb8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd77e7e4421249b86309fcc7c1d61a33ddfa738e9a502c1dcf5d3522ac6eb8d0->enter($__internal_fd77e7e4421249b86309fcc7c1d61a33ddfa738e9a502c1dcf5d3522ac6eb8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd77e7e4421249b86309fcc7c1d61a33ddfa738e9a502c1dcf5d3522ac6eb8d0->leave($__internal_fd77e7e4421249b86309fcc7c1d61a33ddfa738e9a502c1dcf5d3522ac6eb8d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d87a10d0adea2518732ec9286e59e9e7aa977ec1fcad1b4d254b4422614f1e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87a10d0adea2518732ec9286e59e9e7aa977ec1fcad1b4d254b4422614f1e84->enter($__internal_d87a10d0adea2518732ec9286e59e9e7aa977ec1fcad1b4d254b4422614f1e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d87a10d0adea2518732ec9286e59e9e7aa977ec1fcad1b4d254b4422614f1e84->leave($__internal_d87a10d0adea2518732ec9286e59e9e7aa977ec1fcad1b4d254b4422614f1e84_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8df95ad56ff97bb5ff43cdf85460abf58e2ef42101a2f6ce289955f4fce80fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8df95ad56ff97bb5ff43cdf85460abf58e2ef42101a2f6ce289955f4fce80fb->enter($__internal_f8df95ad56ff97bb5ff43cdf85460abf58e2ef42101a2f6ce289955f4fce80fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f8df95ad56ff97bb5ff43cdf85460abf58e2ef42101a2f6ce289955f4fce80fb->leave($__internal_f8df95ad56ff97bb5ff43cdf85460abf58e2ef42101a2f6ce289955f4fce80fb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_90e6627a4510cea986db83a0a9ae53b5a93ccb3e6e8b007f5f81d3e7f5ee1e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e6627a4510cea986db83a0a9ae53b5a93ccb3e6e8b007f5f81d3e7f5ee1e20->enter($__internal_90e6627a4510cea986db83a0a9ae53b5a93ccb3e6e8b007f5f81d3e7f5ee1e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_90e6627a4510cea986db83a0a9ae53b5a93ccb3e6e8b007f5f81d3e7f5ee1e20->leave($__internal_90e6627a4510cea986db83a0a9ae53b5a93ccb3e6e8b007f5f81d3e7f5ee1e20_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_3dc4e85cdce5afbbab9ad31cb41dc409504561ca024d481ef957294f51840cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc4e85cdce5afbbab9ad31cb41dc409504561ca024d481ef957294f51840cfd->enter($__internal_3dc4e85cdce5afbbab9ad31cb41dc409504561ca024d481ef957294f51840cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3dc4e85cdce5afbbab9ad31cb41dc409504561ca024d481ef957294f51840cfd->leave($__internal_3dc4e85cdce5afbbab9ad31cb41dc409504561ca024d481ef957294f51840cfd_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle:Configurator:layout.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
