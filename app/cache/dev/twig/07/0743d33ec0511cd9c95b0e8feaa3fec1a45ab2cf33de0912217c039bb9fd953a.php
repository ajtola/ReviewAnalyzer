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
        $__internal_a36a54dcea1c614e68cb6b4aa3ac4a88bd871d2fbe383aee4b8138bb6e684523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36a54dcea1c614e68cb6b4aa3ac4a88bd871d2fbe383aee4b8138bb6e684523->enter($__internal_a36a54dcea1c614e68cb6b4aa3ac4a88bd871d2fbe383aee4b8138bb6e684523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AJTReviewBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_a36a54dcea1c614e68cb6b4aa3ac4a88bd871d2fbe383aee4b8138bb6e684523->leave($__internal_a36a54dcea1c614e68cb6b4aa3ac4a88bd871d2fbe383aee4b8138bb6e684523_prof);

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
