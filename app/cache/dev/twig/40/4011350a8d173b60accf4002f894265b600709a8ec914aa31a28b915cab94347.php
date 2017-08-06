<?php

/* ::base.html.twig */
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
        $__internal_3f5d36837bdc9604b08f1797f5d86f799f39749ec233c265ee607bead13b5463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5d36837bdc9604b08f1797f5d86f799f39749ec233c265ee607bead13b5463->enter($__internal_3f5d36837bdc9604b08f1797f5d86f799f39749ec233c265ee607bead13b5463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3f5d36837bdc9604b08f1797f5d86f799f39749ec233c265ee607bead13b5463->leave($__internal_3f5d36837bdc9604b08f1797f5d86f799f39749ec233c265ee607bead13b5463_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f87d87438eeb8b801aef8f3ecd1cc4e2a7d3e4ebd5ae4ebdd9df1848ff86d235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87d87438eeb8b801aef8f3ecd1cc4e2a7d3e4ebd5ae4ebdd9df1848ff86d235->enter($__internal_f87d87438eeb8b801aef8f3ecd1cc4e2a7d3e4ebd5ae4ebdd9df1848ff86d235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f87d87438eeb8b801aef8f3ecd1cc4e2a7d3e4ebd5ae4ebdd9df1848ff86d235->leave($__internal_f87d87438eeb8b801aef8f3ecd1cc4e2a7d3e4ebd5ae4ebdd9df1848ff86d235_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d817a76891623abd0849f9071315d55193c1c3d4a2049d51bf4bed69c12b7df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d817a76891623abd0849f9071315d55193c1c3d4a2049d51bf4bed69c12b7df5->enter($__internal_d817a76891623abd0849f9071315d55193c1c3d4a2049d51bf4bed69c12b7df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d817a76891623abd0849f9071315d55193c1c3d4a2049d51bf4bed69c12b7df5->leave($__internal_d817a76891623abd0849f9071315d55193c1c3d4a2049d51bf4bed69c12b7df5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_618e03e7174597ff56b87c3f6bf82bd4143f64ee068aed4dd9b0fa26a23e77b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618e03e7174597ff56b87c3f6bf82bd4143f64ee068aed4dd9b0fa26a23e77b3->enter($__internal_618e03e7174597ff56b87c3f6bf82bd4143f64ee068aed4dd9b0fa26a23e77b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_618e03e7174597ff56b87c3f6bf82bd4143f64ee068aed4dd9b0fa26a23e77b3->leave($__internal_618e03e7174597ff56b87c3f6bf82bd4143f64ee068aed4dd9b0fa26a23e77b3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b31403fc3569d1e90c45f55a9ad8c731acd9e785ec47cca9a7423ed73e9c83af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31403fc3569d1e90c45f55a9ad8c731acd9e785ec47cca9a7423ed73e9c83af->enter($__internal_b31403fc3569d1e90c45f55a9ad8c731acd9e785ec47cca9a7423ed73e9c83af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b31403fc3569d1e90c45f55a9ad8c731acd9e785ec47cca9a7423ed73e9c83af->leave($__internal_b31403fc3569d1e90c45f55a9ad8c731acd9e785ec47cca9a7423ed73e9c83af_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/app/Resources/views/base.html.twig");
    }
}
