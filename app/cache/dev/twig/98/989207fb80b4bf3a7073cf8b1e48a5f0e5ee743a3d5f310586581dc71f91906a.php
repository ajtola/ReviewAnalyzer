<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_181af8b1ecb579dc66bbbcb66dacb49b8c30c9b4af65396bf3640766fb98c666 extends Twig_Template
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
        $__internal_ae53ef780009c2b1f22d8c400fe2329f5fefa1c1700927ad5ec6aa9540ded675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae53ef780009c2b1f22d8c400fe2329f5fefa1c1700927ad5ec6aa9540ded675->enter($__internal_ae53ef780009c2b1f22d8c400fe2329f5fefa1c1700927ad5ec6aa9540ded675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ae53ef780009c2b1f22d8c400fe2329f5fefa1c1700927ad5ec6aa9540ded675->leave($__internal_ae53ef780009c2b1f22d8c400fe2329f5fefa1c1700927ad5ec6aa9540ded675_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
