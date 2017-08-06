<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fef38eba02d51eeb2b5bc834fe43d6a4df9ada0e2154184e46d7a87042b352ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc3e119fd3769b3ff77266cb77cb89898fe15ed3019965b4fb4c5e47928e909b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3e119fd3769b3ff77266cb77cb89898fe15ed3019965b4fb4c5e47928e909b->enter($__internal_cc3e119fd3769b3ff77266cb77cb89898fe15ed3019965b4fb4c5e47928e909b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc3e119fd3769b3ff77266cb77cb89898fe15ed3019965b4fb4c5e47928e909b->leave($__internal_cc3e119fd3769b3ff77266cb77cb89898fe15ed3019965b4fb4c5e47928e909b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4963bfd512fac097637c37b66dc28c5b6eedb3d32fddfd433bef151aa6d423b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4963bfd512fac097637c37b66dc28c5b6eedb3d32fddfd433bef151aa6d423b->enter($__internal_a4963bfd512fac097637c37b66dc28c5b6eedb3d32fddfd433bef151aa6d423b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a4963bfd512fac097637c37b66dc28c5b6eedb3d32fddfd433bef151aa6d423b->leave($__internal_a4963bfd512fac097637c37b66dc28c5b6eedb3d32fddfd433bef151aa6d423b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a49332533a98c9421d21ff1bf6e2d82b518d5ea575cf35045a1e25d99234ee91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49332533a98c9421d21ff1bf6e2d82b518d5ea575cf35045a1e25d99234ee91->enter($__internal_a49332533a98c9421d21ff1bf6e2d82b518d5ea575cf35045a1e25d99234ee91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a49332533a98c9421d21ff1bf6e2d82b518d5ea575cf35045a1e25d99234ee91->leave($__internal_a49332533a98c9421d21ff1bf6e2d82b518d5ea575cf35045a1e25d99234ee91_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fef6fca9925387448abc623487cfc9a2fa63dcef358053ffd8e9917f02cc539c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef6fca9925387448abc623487cfc9a2fa63dcef358053ffd8e9917f02cc539c->enter($__internal_fef6fca9925387448abc623487cfc9a2fa63dcef358053ffd8e9917f02cc539c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fef6fca9925387448abc623487cfc9a2fa63dcef358053ffd8e9917f02cc539c->leave($__internal_fef6fca9925387448abc623487cfc9a2fa63dcef358053ffd8e9917f02cc539c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
