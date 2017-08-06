<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fef38eba02d51eeb2b5bc834fe43d6a4df9ada0e2154184e46d7a87042b352ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_fb05f0a6cec0ec8b78ed1ef783a49773176a3dd95283adccbb807279e4fc7eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb05f0a6cec0ec8b78ed1ef783a49773176a3dd95283adccbb807279e4fc7eaf->enter($__internal_fb05f0a6cec0ec8b78ed1ef783a49773176a3dd95283adccbb807279e4fc7eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb05f0a6cec0ec8b78ed1ef783a49773176a3dd95283adccbb807279e4fc7eaf->leave($__internal_fb05f0a6cec0ec8b78ed1ef783a49773176a3dd95283adccbb807279e4fc7eaf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eddc9f0a8140019c12cbdc8b1166470ffd82898962210b32e9cbd7eaa9da14ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eddc9f0a8140019c12cbdc8b1166470ffd82898962210b32e9cbd7eaa9da14ef->enter($__internal_eddc9f0a8140019c12cbdc8b1166470ffd82898962210b32e9cbd7eaa9da14ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eddc9f0a8140019c12cbdc8b1166470ffd82898962210b32e9cbd7eaa9da14ef->leave($__internal_eddc9f0a8140019c12cbdc8b1166470ffd82898962210b32e9cbd7eaa9da14ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd037f0813454a51e16332cb34b9867302f9338b863362fb94f9f19c5449f3b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd037f0813454a51e16332cb34b9867302f9338b863362fb94f9f19c5449f3b1->enter($__internal_cd037f0813454a51e16332cb34b9867302f9338b863362fb94f9f19c5449f3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cd037f0813454a51e16332cb34b9867302f9338b863362fb94f9f19c5449f3b1->leave($__internal_cd037f0813454a51e16332cb34b9867302f9338b863362fb94f9f19c5449f3b1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d36168a1ebb0289cb4f2255a331ce427508cd20b7eadbc2cb1dba2cb1b4d5868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36168a1ebb0289cb4f2255a331ce427508cd20b7eadbc2cb1dba2cb1b4d5868->enter($__internal_d36168a1ebb0289cb4f2255a331ce427508cd20b7eadbc2cb1dba2cb1b4d5868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d36168a1ebb0289cb4f2255a331ce427508cd20b7eadbc2cb1dba2cb1b4d5868->leave($__internal_d36168a1ebb0289cb4f2255a331ce427508cd20b7eadbc2cb1dba2cb1b4d5868_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
