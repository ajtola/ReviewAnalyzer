<?php

/* layout.html.twig */
class __TwigTemplate_5076eb3d615cdb4b4cdef0e98e94342ad325c405ae2578fa27354134eb886983 extends Twig_Template
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
        $__internal_6adb2c784dc94133c2d084a4f811fa68ab34ed567ba61a9b1f70d6796b8f0b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6adb2c784dc94133c2d084a4f811fa68ab34ed567ba61a9b1f70d6796b8f0b3d->enter($__internal_6adb2c784dc94133c2d084a4f811fa68ab34ed567ba61a9b1f70d6796b8f0b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>";
        
        $__internal_6adb2c784dc94133c2d084a4f811fa68ab34ed567ba61a9b1f70d6796b8f0b3d->leave($__internal_6adb2c784dc94133c2d084a4f811fa68ab34ed567ba61a9b1f70d6796b8f0b3d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f30f94ab19e7bb3cd5b1e3e885ce4c413f9babcc0d4cf11e34f30c6c83caf1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30f94ab19e7bb3cd5b1e3e885ce4c413f9babcc0d4cf11e34f30c6c83caf1f7->enter($__internal_f30f94ab19e7bb3cd5b1e3e885ce4c413f9babcc0d4cf11e34f30c6c83caf1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Review Analyzer";
        
        $__internal_f30f94ab19e7bb3cd5b1e3e885ce4c413f9babcc0d4cf11e34f30c6c83caf1f7->leave($__internal_f30f94ab19e7bb3cd5b1e3e885ce4c413f9babcc0d4cf11e34f30c6c83caf1f7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5afd61ef6bd69c40ce98133acfc370ba2a2170ccc3786adb032d3302b8599b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5afd61ef6bd69c40ce98133acfc370ba2a2170ccc3786adb032d3302b8599b4->enter($__internal_c5afd61ef6bd69c40ce98133acfc370ba2a2170ccc3786adb032d3302b8599b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">-->
        ";
        
        $__internal_c5afd61ef6bd69c40ce98133acfc370ba2a2170ccc3786adb032d3302b8599b4->leave($__internal_c5afd61ef6bd69c40ce98133acfc370ba2a2170ccc3786adb032d3302b8599b4_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_a90d3ee6c3995d6937e298a486665932ecad4a310fbeb52b74ac9c9731258a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90d3ee6c3995d6937e298a486665932ecad4a310fbeb52b74ac9c9731258a31->enter($__internal_a90d3ee6c3995d6937e298a486665932ecad4a310fbeb52b74ac9c9731258a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_a90d3ee6c3995d6937e298a486665932ecad4a310fbeb52b74ac9c9731258a31->leave($__internal_a90d3ee6c3995d6937e298a486665932ecad4a310fbeb52b74ac9c9731258a31_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c402855de871aa33bdf04722a106613c2d6a3f00d818df7e2b9feec29965dbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c402855de871aa33bdf04722a106613c2d6a3f00d818df7e2b9feec29965dbbe->enter($__internal_c402855de871aa33bdf04722a106613c2d6a3f00d818df7e2b9feec29965dbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.2.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c402855de871aa33bdf04722a106613c2d6a3f00d818df7e2b9feec29965dbbe->leave($__internal_c402855de871aa33bdf04722a106613c2d6a3f00d818df7e2b9feec29965dbbe_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 18,  112 => 17,  106 => 16,  96 => 14,  90 => 13,  81 => 8,  76 => 7,  70 => 6,  58 => 5,  50 => 20,  47 => 16,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Review Analyzer{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.min.css') }}\">
            <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('public/css/style.css') }}\">-->
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
            {{ include('menu.html.twig') }}
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('public/js/jquery-3.2.0.min.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "layout.html.twig", "/home/antonio/Challenge/ReviewAnalyzer/app/Resources/views/layout.html.twig");
    }
}
