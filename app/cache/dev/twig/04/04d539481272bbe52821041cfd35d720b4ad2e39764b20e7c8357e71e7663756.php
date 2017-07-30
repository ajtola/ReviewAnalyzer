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
        $__internal_f254dfc554055929db4a10a77d280f473eee62e0950a7c5d54a5d9e1282465c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f254dfc554055929db4a10a77d280f473eee62e0950a7c5d54a5d9e1282465c3->enter($__internal_f254dfc554055929db4a10a77d280f473eee62e0950a7c5d54a5d9e1282465c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f254dfc554055929db4a10a77d280f473eee62e0950a7c5d54a5d9e1282465c3->leave($__internal_f254dfc554055929db4a10a77d280f473eee62e0950a7c5d54a5d9e1282465c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5d80808e3ec0c1e5eb221e219a49f8237ccc1cd53a13454ce0586673396fd49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d80808e3ec0c1e5eb221e219a49f8237ccc1cd53a13454ce0586673396fd49->enter($__internal_b5d80808e3ec0c1e5eb221e219a49f8237ccc1cd53a13454ce0586673396fd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b5d80808e3ec0c1e5eb221e219a49f8237ccc1cd53a13454ce0586673396fd49->leave($__internal_b5d80808e3ec0c1e5eb221e219a49f8237ccc1cd53a13454ce0586673396fd49_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e73d2a90c8f668b1007255774271fd5849cf6f566078350361b68f81c8157c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e73d2a90c8f668b1007255774271fd5849cf6f566078350361b68f81c8157c7->enter($__internal_3e73d2a90c8f668b1007255774271fd5849cf6f566078350361b68f81c8157c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e73d2a90c8f668b1007255774271fd5849cf6f566078350361b68f81c8157c7->leave($__internal_3e73d2a90c8f668b1007255774271fd5849cf6f566078350361b68f81c8157c7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0212596c3d0070f02c3857877f6dbfce6583cd0af56ee128c7136b96cc29bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0212596c3d0070f02c3857877f6dbfce6583cd0af56ee128c7136b96cc29bf8->enter($__internal_e0212596c3d0070f02c3857877f6dbfce6583cd0af56ee128c7136b96cc29bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e0212596c3d0070f02c3857877f6dbfce6583cd0af56ee128c7136b96cc29bf8->leave($__internal_e0212596c3d0070f02c3857877f6dbfce6583cd0af56ee128c7136b96cc29bf8_prof);

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
