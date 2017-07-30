<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_dfe8eab8d94ff95deae1b190a527bb94e5ebb407fe7f6860885e90002e94a3fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c3435df05f701c7c12699dab4d07a5d1180c5bfd331b9fb7359683028ff15a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3435df05f701c7c12699dab4d07a5d1180c5bfd331b9fb7359683028ff15a7->enter($__internal_2c3435df05f701c7c12699dab4d07a5d1180c5bfd331b9fb7359683028ff15a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2c3435df05f701c7c12699dab4d07a5d1180c5bfd331b9fb7359683028ff15a7->leave($__internal_2c3435df05f701c7c12699dab4d07a5d1180c5bfd331b9fb7359683028ff15a7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0027b396d3ab4ea7720d7426a3942ba8b1dbce7c51644d9b1a7770261387ad56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0027b396d3ab4ea7720d7426a3942ba8b1dbce7c51644d9b1a7770261387ad56->enter($__internal_0027b396d3ab4ea7720d7426a3942ba8b1dbce7c51644d9b1a7770261387ad56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0027b396d3ab4ea7720d7426a3942ba8b1dbce7c51644d9b1a7770261387ad56->leave($__internal_0027b396d3ab4ea7720d7426a3942ba8b1dbce7c51644d9b1a7770261387ad56_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
