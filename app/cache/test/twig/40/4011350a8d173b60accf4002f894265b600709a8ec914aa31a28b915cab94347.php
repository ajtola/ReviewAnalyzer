<?php

/* base.html.twig */
class __TwigTemplate_6f5e820a9fc0e209a1e92f8bc0bda82297227324dea5fe224dacdb91e8064e64 extends Twig_Template
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
        $__internal_b0c6b57c4bf4d0d2b8ebbfe3b42c7d5dc2b4a394488af44f66331df9224f84fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c6b57c4bf4d0d2b8ebbfe3b42c7d5dc2b4a394488af44f66331df9224f84fe->enter($__internal_b0c6b57c4bf4d0d2b8ebbfe3b42c7d5dc2b4a394488af44f66331df9224f84fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b0c6b57c4bf4d0d2b8ebbfe3b42c7d5dc2b4a394488af44f66331df9224f84fe->leave($__internal_b0c6b57c4bf4d0d2b8ebbfe3b42c7d5dc2b4a394488af44f66331df9224f84fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b53a3d8a144a80591a1325259730a59e1744debe869e3ca22e78c18e03324bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53a3d8a144a80591a1325259730a59e1744debe869e3ca22e78c18e03324bf5->enter($__internal_b53a3d8a144a80591a1325259730a59e1744debe869e3ca22e78c18e03324bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b53a3d8a144a80591a1325259730a59e1744debe869e3ca22e78c18e03324bf5->leave($__internal_b53a3d8a144a80591a1325259730a59e1744debe869e3ca22e78c18e03324bf5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_669eb864081e9513cd5ecd39de4a943964d71b8574654e323fa2b03d9554bb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669eb864081e9513cd5ecd39de4a943964d71b8574654e323fa2b03d9554bb5f->enter($__internal_669eb864081e9513cd5ecd39de4a943964d71b8574654e323fa2b03d9554bb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_669eb864081e9513cd5ecd39de4a943964d71b8574654e323fa2b03d9554bb5f->leave($__internal_669eb864081e9513cd5ecd39de4a943964d71b8574654e323fa2b03d9554bb5f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3febb1523d1197921783e9137aaa8f7d82be7223f6d57c4cd3f5f9d981cfbb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3febb1523d1197921783e9137aaa8f7d82be7223f6d57c4cd3f5f9d981cfbb8e->enter($__internal_3febb1523d1197921783e9137aaa8f7d82be7223f6d57c4cd3f5f9d981cfbb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3febb1523d1197921783e9137aaa8f7d82be7223f6d57c4cd3f5f9d981cfbb8e->leave($__internal_3febb1523d1197921783e9137aaa8f7d82be7223f6d57c4cd3f5f9d981cfbb8e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3cfb541797f12b6b5a6a3e268bcb08b59c4e129b355a632264feea43980d8a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cfb541797f12b6b5a6a3e268bcb08b59c4e129b355a632264feea43980d8a36->enter($__internal_3cfb541797f12b6b5a6a3e268bcb08b59c4e129b355a632264feea43980d8a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3cfb541797f12b6b5a6a3e268bcb08b59c4e129b355a632264feea43980d8a36->leave($__internal_3cfb541797f12b6b5a6a3e268bcb08b59c4e129b355a632264feea43980d8a36_prof);

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
