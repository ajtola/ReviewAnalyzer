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
        $__internal_56226210b7059b5520e2ff4a3e1624e29ace35f572f853ebb000f07302b6610b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56226210b7059b5520e2ff4a3e1624e29ace35f572f853ebb000f07302b6610b->enter($__internal_56226210b7059b5520e2ff4a3e1624e29ace35f572f853ebb000f07302b6610b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_56226210b7059b5520e2ff4a3e1624e29ace35f572f853ebb000f07302b6610b->leave($__internal_56226210b7059b5520e2ff4a3e1624e29ace35f572f853ebb000f07302b6610b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bbc97b9dc26c885c3fce424415618b6fbe9710d2ed893f582e73e0140c5fd87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbc97b9dc26c885c3fce424415618b6fbe9710d2ed893f582e73e0140c5fd87->enter($__internal_3bbc97b9dc26c885c3fce424415618b6fbe9710d2ed893f582e73e0140c5fd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3bbc97b9dc26c885c3fce424415618b6fbe9710d2ed893f582e73e0140c5fd87->leave($__internal_3bbc97b9dc26c885c3fce424415618b6fbe9710d2ed893f582e73e0140c5fd87_prof);

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
