<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_73aede3da97b7a2acb5b734942c2ed352b27e0cf138c2371e13a4d9b7ec0dc26 extends Twig_Template
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
        $__internal_932450ea8f1b9bc8b942848871bdfec2dc7c08ebbed08d7e892f6e99bf34d3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932450ea8f1b9bc8b942848871bdfec2dc7c08ebbed08d7e892f6e99bf34d3c0->enter($__internal_932450ea8f1b9bc8b942848871bdfec2dc7c08ebbed08d7e892f6e99bf34d3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_932450ea8f1b9bc8b942848871bdfec2dc7c08ebbed08d7e892f6e99bf34d3c0->leave($__internal_932450ea8f1b9bc8b942848871bdfec2dc7c08ebbed08d7e892f6e99bf34d3c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
