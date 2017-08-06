<?php

/* AJTReviewBundle:Default:index.html.twig */
class __TwigTemplate_b4cd5a2a2dae77505c93fbdc77669ff159c2bd225ae6816851965190978eebcc extends Twig_Template
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
        $__internal_62ff9a3a60bc3972e32fbef4759f8b01d0a2c93dacbd2f17725edfd21cf84077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ff9a3a60bc3972e32fbef4759f8b01d0a2c93dacbd2f17725edfd21cf84077->enter($__internal_62ff9a3a60bc3972e32fbef4759f8b01d0a2c93dacbd2f17725edfd21cf84077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AJTReviewBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_62ff9a3a60bc3972e32fbef4759f8b01d0a2c93dacbd2f17725edfd21cf84077->leave($__internal_62ff9a3a60bc3972e32fbef4759f8b01d0a2c93dacbd2f17725edfd21cf84077_prof);

    }

    public function getTemplateName()
    {
        return "AJTReviewBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AJTReviewBundle:Default:index.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/src/AJT/ReviewBundle/Resources/views/Default/index.html.twig");
    }
}
