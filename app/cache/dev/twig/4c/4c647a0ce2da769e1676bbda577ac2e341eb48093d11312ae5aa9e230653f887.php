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
        $__internal_89fd8353cf1d1e4c1faa807600894d97293cd0c7caa39d9d045fefd558e19287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fd8353cf1d1e4c1faa807600894d97293cd0c7caa39d9d045fefd558e19287->enter($__internal_89fd8353cf1d1e4c1faa807600894d97293cd0c7caa39d9d045fefd558e19287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89fd8353cf1d1e4c1faa807600894d97293cd0c7caa39d9d045fefd558e19287->leave($__internal_89fd8353cf1d1e4c1faa807600894d97293cd0c7caa39d9d045fefd558e19287_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae0daf896fca83f5b7e94fd0aa6ca0d7b1e37c368d1ade28d57c08d7b969df92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0daf896fca83f5b7e94fd0aa6ca0d7b1e37c368d1ade28d57c08d7b969df92->enter($__internal_ae0daf896fca83f5b7e94fd0aa6ca0d7b1e37c368d1ade28d57c08d7b969df92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ae0daf896fca83f5b7e94fd0aa6ca0d7b1e37c368d1ade28d57c08d7b969df92->leave($__internal_ae0daf896fca83f5b7e94fd0aa6ca0d7b1e37c368d1ade28d57c08d7b969df92_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25b3d20c656ea933477146fc99c7150fb2735e8847fefa7c7d149bf1b51960f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b3d20c656ea933477146fc99c7150fb2735e8847fefa7c7d149bf1b51960f2->enter($__internal_25b3d20c656ea933477146fc99c7150fb2735e8847fefa7c7d149bf1b51960f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_25b3d20c656ea933477146fc99c7150fb2735e8847fefa7c7d149bf1b51960f2->leave($__internal_25b3d20c656ea933477146fc99c7150fb2735e8847fefa7c7d149bf1b51960f2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_54585be9a01b748ba04ee1fdccce4aaa0eda88b0461bd0b0436655601f84de92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54585be9a01b748ba04ee1fdccce4aaa0eda88b0461bd0b0436655601f84de92->enter($__internal_54585be9a01b748ba04ee1fdccce4aaa0eda88b0461bd0b0436655601f84de92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_54585be9a01b748ba04ee1fdccce4aaa0eda88b0461bd0b0436655601f84de92->leave($__internal_54585be9a01b748ba04ee1fdccce4aaa0eda88b0461bd0b0436655601f84de92_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_58d2a6661c5ad762a3f45d98d1fd2056068a3fac95ddfa2993f11a6e4d2c3fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d2a6661c5ad762a3f45d98d1fd2056068a3fac95ddfa2993f11a6e4d2c3fda->enter($__internal_58d2a6661c5ad762a3f45d98d1fd2056068a3fac95ddfa2993f11a6e4d2c3fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_58d2a6661c5ad762a3f45d98d1fd2056068a3fac95ddfa2993f11a6e4d2c3fda->leave($__internal_58d2a6661c5ad762a3f45d98d1fd2056068a3fac95ddfa2993f11a6e4d2c3fda_prof);

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
