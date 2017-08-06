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
        $__internal_342b0a31bfa8062d201d33e636e5e2e84bbd9ab7b35d720b3ea29a78fd5aae61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342b0a31bfa8062d201d33e636e5e2e84bbd9ab7b35d720b3ea29a78fd5aae61->enter($__internal_342b0a31bfa8062d201d33e636e5e2e84bbd9ab7b35d720b3ea29a78fd5aae61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_342b0a31bfa8062d201d33e636e5e2e84bbd9ab7b35d720b3ea29a78fd5aae61->leave($__internal_342b0a31bfa8062d201d33e636e5e2e84bbd9ab7b35d720b3ea29a78fd5aae61_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_99f8224b4ae6d90f27276cbbe520d16a5d5405190689b94f3586bc26b6c2f8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f8224b4ae6d90f27276cbbe520d16a5d5405190689b94f3586bc26b6c2f8f1->enter($__internal_99f8224b4ae6d90f27276cbbe520d16a5d5405190689b94f3586bc26b6c2f8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Review Analyzer";
        
        $__internal_99f8224b4ae6d90f27276cbbe520d16a5d5405190689b94f3586bc26b6c2f8f1->leave($__internal_99f8224b4ae6d90f27276cbbe520d16a5d5405190689b94f3586bc26b6c2f8f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ed07ae3e32113f9192aee951bbb8b9a9fa9231d37afb8fbf6aa31f596daaef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed07ae3e32113f9192aee951bbb8b9a9fa9231d37afb8fbf6aa31f596daaef6->enter($__internal_8ed07ae3e32113f9192aee951bbb8b9a9fa9231d37afb8fbf6aa31f596daaef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">-->
        ";
        
        $__internal_8ed07ae3e32113f9192aee951bbb8b9a9fa9231d37afb8fbf6aa31f596daaef6->leave($__internal_8ed07ae3e32113f9192aee951bbb8b9a9fa9231d37afb8fbf6aa31f596daaef6_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cc2f743be3305a58fe421fd0f1c45f089fa184919481a6697a4b4d85b53bbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc2f743be3305a58fe421fd0f1c45f089fa184919481a6697a4b4d85b53bbbc->enter($__internal_8cc2f743be3305a58fe421fd0f1c45f089fa184919481a6697a4b4d85b53bbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_8cc2f743be3305a58fe421fd0f1c45f089fa184919481a6697a4b4d85b53bbbc->leave($__internal_8cc2f743be3305a58fe421fd0f1c45f089fa184919481a6697a4b4d85b53bbbc_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_460d973598ad6960a99bbdec8491b03c87d25a4cd7009b2004620ead963465bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460d973598ad6960a99bbdec8491b03c87d25a4cd7009b2004620ead963465bd->enter($__internal_460d973598ad6960a99bbdec8491b03c87d25a4cd7009b2004620ead963465bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.2.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_460d973598ad6960a99bbdec8491b03c87d25a4cd7009b2004620ead963465bd->leave($__internal_460d973598ad6960a99bbdec8491b03c87d25a4cd7009b2004620ead963465bd_prof);

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
