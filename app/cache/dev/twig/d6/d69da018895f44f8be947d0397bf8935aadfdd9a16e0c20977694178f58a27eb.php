<?php

/* layout.html.twig */
class __TwigTemplate_54626276f0fd982a3d6faf60a1b18f126a03b215f8fabd5a0f2174fffb1822c4 extends Twig_Template
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
        $__internal_759d5ee08fbd78590943f36ca2c915a3fea67a49325dda5c43f18895097c26b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759d5ee08fbd78590943f36ca2c915a3fea67a49325dda5c43f18895097c26b8->enter($__internal_759d5ee08fbd78590943f36ca2c915a3fea67a49325dda5c43f18895097c26b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_759d5ee08fbd78590943f36ca2c915a3fea67a49325dda5c43f18895097c26b8->leave($__internal_759d5ee08fbd78590943f36ca2c915a3fea67a49325dda5c43f18895097c26b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcb34e0a3244aa83c7e25bf3e29631bc4d0dfc992328c2d552d3f8b9f635b2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb34e0a3244aa83c7e25bf3e29631bc4d0dfc992328c2d552d3f8b9f635b2d2->enter($__internal_bcb34e0a3244aa83c7e25bf3e29631bc4d0dfc992328c2d552d3f8b9f635b2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Review Analyzer";
        
        $__internal_bcb34e0a3244aa83c7e25bf3e29631bc4d0dfc992328c2d552d3f8b9f635b2d2->leave($__internal_bcb34e0a3244aa83c7e25bf3e29631bc4d0dfc992328c2d552d3f8b9f635b2d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4cd6005038dcc616dff95ef31a71316420c6759978c88bb3fc0a6d90b10ca45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd6005038dcc616dff95ef31a71316420c6759978c88bb3fc0a6d90b10ca45e->enter($__internal_4cd6005038dcc616dff95ef31a71316420c6759978c88bb3fc0a6d90b10ca45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">-->
        ";
        
        $__internal_4cd6005038dcc616dff95ef31a71316420c6759978c88bb3fc0a6d90b10ca45e->leave($__internal_4cd6005038dcc616dff95ef31a71316420c6759978c88bb3fc0a6d90b10ca45e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_42396a7a59b020dd730254eff2734487e4ab4d70e65b32bb456ade58e26d1318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42396a7a59b020dd730254eff2734487e4ab4d70e65b32bb456ade58e26d1318->enter($__internal_42396a7a59b020dd730254eff2734487e4ab4d70e65b32bb456ade58e26d1318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_42396a7a59b020dd730254eff2734487e4ab4d70e65b32bb456ade58e26d1318->leave($__internal_42396a7a59b020dd730254eff2734487e4ab4d70e65b32bb456ade58e26d1318_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5792b6aba199d29acebaa6ce41bd1bdc0ad280312aeb423198894a0dc184b008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5792b6aba199d29acebaa6ce41bd1bdc0ad280312aeb423198894a0dc184b008->enter($__internal_5792b6aba199d29acebaa6ce41bd1bdc0ad280312aeb423198894a0dc184b008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.2.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_5792b6aba199d29acebaa6ce41bd1bdc0ad280312aeb423198894a0dc184b008->leave($__internal_5792b6aba199d29acebaa6ce41bd1bdc0ad280312aeb423198894a0dc184b008_prof);

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
