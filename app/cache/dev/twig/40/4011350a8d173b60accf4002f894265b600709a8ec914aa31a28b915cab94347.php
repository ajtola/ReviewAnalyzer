<?php

/* ::base.html.twig */
class __TwigTemplate_6f5e820a9fc0e209a1e92f8bc0bda82297227324dea5fe224dacdb91e8064e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63cc2d777366a23fb57307212d634ee985aced606f6c0f7cba61c70b324d0df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cc2d777366a23fb57307212d634ee985aced606f6c0f7cba61c70b324d0df6->enter($__internal_63cc2d777366a23fb57307212d634ee985aced606f6c0f7cba61c70b324d0df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_63cc2d777366a23fb57307212d634ee985aced606f6c0f7cba61c70b324d0df6->leave($__internal_63cc2d777366a23fb57307212d634ee985aced606f6c0f7cba61c70b324d0df6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b953fc6c2a45f47e8de5182a03dcac72cb22329cab80aaa0ca6ecf38ed640c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b953fc6c2a45f47e8de5182a03dcac72cb22329cab80aaa0ca6ecf38ed640c5->enter($__internal_3b953fc6c2a45f47e8de5182a03dcac72cb22329cab80aaa0ca6ecf38ed640c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3b953fc6c2a45f47e8de5182a03dcac72cb22329cab80aaa0ca6ecf38ed640c5->leave($__internal_3b953fc6c2a45f47e8de5182a03dcac72cb22329cab80aaa0ca6ecf38ed640c5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bebe3303979be5b21e28aa6bab52faaaa20b7ee300ab04732ba5c223eaef72f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebe3303979be5b21e28aa6bab52faaaa20b7ee300ab04732ba5c223eaef72f0->enter($__internal_bebe3303979be5b21e28aa6bab52faaaa20b7ee300ab04732ba5c223eaef72f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bebe3303979be5b21e28aa6bab52faaaa20b7ee300ab04732ba5c223eaef72f0->leave($__internal_bebe3303979be5b21e28aa6bab52faaaa20b7ee300ab04732ba5c223eaef72f0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_381e9b82052b29d70b57eebd825b2574ca65008de0eaf9b08d1017da8f3b9bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381e9b82052b29d70b57eebd825b2574ca65008de0eaf9b08d1017da8f3b9bb8->enter($__internal_381e9b82052b29d70b57eebd825b2574ca65008de0eaf9b08d1017da8f3b9bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_381e9b82052b29d70b57eebd825b2574ca65008de0eaf9b08d1017da8f3b9bb8->leave($__internal_381e9b82052b29d70b57eebd825b2574ca65008de0eaf9b08d1017da8f3b9bb8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b5af953fb8bfb258a32fd1b4f66cbc49ae50cb83da222973f059057b5e190f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5af953fb8bfb258a32fd1b4f66cbc49ae50cb83da222973f059057b5e190f0->enter($__internal_9b5af953fb8bfb258a32fd1b4f66cbc49ae50cb83da222973f059057b5e190f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9b5af953fb8bfb258a32fd1b4f66cbc49ae50cb83da222973f059057b5e190f0->leave($__internal_9b5af953fb8bfb258a32fd1b4f66cbc49ae50cb83da222973f059057b5e190f0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/app/Resources/views/base.html.twig");
    }
}
