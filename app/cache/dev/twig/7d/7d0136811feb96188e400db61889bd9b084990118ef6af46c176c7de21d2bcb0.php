<?php

/* layout.html.twig */
class __TwigTemplate_45476640c13c1eb89d2847b26c35d46ad578f123de857cfed6b7ff2949fdc37b extends Twig_Template
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
        $__internal_48c051b5eda0e2cb70bdcd550984f3d0fdc9b268129c7743fd014d5b5e7bd776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c051b5eda0e2cb70bdcd550984f3d0fdc9b268129c7743fd014d5b5e7bd776->enter($__internal_48c051b5eda0e2cb70bdcd550984f3d0fdc9b268129c7743fd014d5b5e7bd776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_48c051b5eda0e2cb70bdcd550984f3d0fdc9b268129c7743fd014d5b5e7bd776->leave($__internal_48c051b5eda0e2cb70bdcd550984f3d0fdc9b268129c7743fd014d5b5e7bd776_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2d5bd44cb6792cd7bc4e53507eb8ca55d4e960fa6dda4e0f33fb8c3bb40fbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d5bd44cb6792cd7bc4e53507eb8ca55d4e960fa6dda4e0f33fb8c3bb40fbf8->enter($__internal_d2d5bd44cb6792cd7bc4e53507eb8ca55d4e960fa6dda4e0f33fb8c3bb40fbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Review Analyzer";
        
        $__internal_d2d5bd44cb6792cd7bc4e53507eb8ca55d4e960fa6dda4e0f33fb8c3bb40fbf8->leave($__internal_d2d5bd44cb6792cd7bc4e53507eb8ca55d4e960fa6dda4e0f33fb8c3bb40fbf8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66e792c9574c1e0d0688a2c77002da17fefdd46b17afbdcbd7fdcd8c911d8816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e792c9574c1e0d0688a2c77002da17fefdd46b17afbdcbd7fdcd8c911d8816->enter($__internal_66e792c9574c1e0d0688a2c77002da17fefdd46b17afbdcbd7fdcd8c911d8816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">-->
        ";
        
        $__internal_66e792c9574c1e0d0688a2c77002da17fefdd46b17afbdcbd7fdcd8c911d8816->leave($__internal_66e792c9574c1e0d0688a2c77002da17fefdd46b17afbdcbd7fdcd8c911d8816_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_6912ab0ac605c61626b8811621fb3733dc4979a9989589e988756461a7e99a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6912ab0ac605c61626b8811621fb3733dc4979a9989589e988756461a7e99a6c->enter($__internal_6912ab0ac605c61626b8811621fb3733dc4979a9989589e988756461a7e99a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_6912ab0ac605c61626b8811621fb3733dc4979a9989589e988756461a7e99a6c->leave($__internal_6912ab0ac605c61626b8811621fb3733dc4979a9989589e988756461a7e99a6c_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e35dd93fe98c163549c01a5e0b6fe3829b941e8cd70803f4b2a216e30e2a8cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35dd93fe98c163549c01a5e0b6fe3829b941e8cd70803f4b2a216e30e2a8cb4->enter($__internal_e35dd93fe98c163549c01a5e0b6fe3829b941e8cd70803f4b2a216e30e2a8cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.2.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e35dd93fe98c163549c01a5e0b6fe3829b941e8cd70803f4b2a216e30e2a8cb4->leave($__internal_e35dd93fe98c163549c01a5e0b6fe3829b941e8cd70803f4b2a216e30e2a8cb4_prof);

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
</html>", "layout.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/app/Resources/views/layout.html.twig");
    }
}
