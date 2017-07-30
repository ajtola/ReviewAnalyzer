<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a0c086e5d61f51d8b08b241755b3f6a5941b73a4e1d339aeaa35ebae48f97f53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14207194a81fa2c854a642275743587da3fb7fb7bbd8eb09280c3f3a1ce5ff80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14207194a81fa2c854a642275743587da3fb7fb7bbd8eb09280c3f3a1ce5ff80->enter($__internal_14207194a81fa2c854a642275743587da3fb7fb7bbd8eb09280c3f3a1ce5ff80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_14207194a81fa2c854a642275743587da3fb7fb7bbd8eb09280c3f3a1ce5ff80->leave($__internal_14207194a81fa2c854a642275743587da3fb7fb7bbd8eb09280c3f3a1ce5ff80_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
