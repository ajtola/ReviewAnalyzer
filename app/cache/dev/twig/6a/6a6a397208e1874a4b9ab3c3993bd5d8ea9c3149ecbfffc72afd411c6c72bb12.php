<?php

/* base.html.twig */
class __TwigTemplate_7b28dc70e39feb47a387bb4f9e0b607fe61cba4d93384a0dc637f6d177bb8206 extends Twig_Template
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
        $__internal_b6ed3b6205e1e46566bda5155086c9fbc8fc0f400d1b0c02dbae63e5822d6a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ed3b6205e1e46566bda5155086c9fbc8fc0f400d1b0c02dbae63e5822d6a32->enter($__internal_b6ed3b6205e1e46566bda5155086c9fbc8fc0f400d1b0c02dbae63e5822d6a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b6ed3b6205e1e46566bda5155086c9fbc8fc0f400d1b0c02dbae63e5822d6a32->leave($__internal_b6ed3b6205e1e46566bda5155086c9fbc8fc0f400d1b0c02dbae63e5822d6a32_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_06b3f4354e55730acfcfda20dab043959e59ea1612a56819dc7edebb1dcb1b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b3f4354e55730acfcfda20dab043959e59ea1612a56819dc7edebb1dcb1b0f->enter($__internal_06b3f4354e55730acfcfda20dab043959e59ea1612a56819dc7edebb1dcb1b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_06b3f4354e55730acfcfda20dab043959e59ea1612a56819dc7edebb1dcb1b0f->leave($__internal_06b3f4354e55730acfcfda20dab043959e59ea1612a56819dc7edebb1dcb1b0f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_829a063a208718e69ad6addd98b11d37d226edfd254051b30962269e0d0f5d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829a063a208718e69ad6addd98b11d37d226edfd254051b30962269e0d0f5d91->enter($__internal_829a063a208718e69ad6addd98b11d37d226edfd254051b30962269e0d0f5d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_829a063a208718e69ad6addd98b11d37d226edfd254051b30962269e0d0f5d91->leave($__internal_829a063a208718e69ad6addd98b11d37d226edfd254051b30962269e0d0f5d91_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d208011b417ac84cc4dda1431c422cf45302150232465b2758e92a88ac59c66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d208011b417ac84cc4dda1431c422cf45302150232465b2758e92a88ac59c66b->enter($__internal_d208011b417ac84cc4dda1431c422cf45302150232465b2758e92a88ac59c66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d208011b417ac84cc4dda1431c422cf45302150232465b2758e92a88ac59c66b->leave($__internal_d208011b417ac84cc4dda1431c422cf45302150232465b2758e92a88ac59c66b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca402c44d42ce01e34dfbbf2eaed1edc467e08b738b10c9cb7e0920abb67b953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca402c44d42ce01e34dfbbf2eaed1edc467e08b738b10c9cb7e0920abb67b953->enter($__internal_ca402c44d42ce01e34dfbbf2eaed1edc467e08b738b10c9cb7e0920abb67b953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca402c44d42ce01e34dfbbf2eaed1edc467e08b738b10c9cb7e0920abb67b953->leave($__internal_ca402c44d42ce01e34dfbbf2eaed1edc467e08b738b10c9cb7e0920abb67b953_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "/home/antonio/Challenge/ReviewAnalyzer/app/Resources/views/base.html.twig");
    }
}
