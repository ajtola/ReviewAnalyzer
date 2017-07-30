<?php

/* AJTReviewBundle:Reviews:review.html.twig */
class __TwigTemplate_5b77f3022d45b4020dec188aea20b7019a342ec05c06c31a8dd0aa6d39251043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AJTReviewBundle:Reviews:review.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fce48e37d69fc7c4d485be0b47615bc7bc693479b87d6b9e06c16bfc0addb801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce48e37d69fc7c4d485be0b47615bc7bc693479b87d6b9e06c16bfc0addb801->enter($__internal_fce48e37d69fc7c4d485be0b47615bc7bc693479b87d6b9e06c16bfc0addb801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AJTReviewBundle:Reviews:review.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fce48e37d69fc7c4d485be0b47615bc7bc693479b87d6b9e06c16bfc0addb801->leave($__internal_fce48e37d69fc7c4d485be0b47615bc7bc693479b87d6b9e06c16bfc0addb801_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37a4666d2f8cb1733eb06b4e2901c26c3721f1145333d25831dbd0deb6551c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a4666d2f8cb1733eb06b4e2901c26c3721f1145333d25831dbd0deb6551c7f->enter($__internal_37a4666d2f8cb1733eb06b4e2901c26c3721f1145333d25831dbd0deb6551c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container\">
\t    <h2>Add Review</h2>
\t    <br>You can edit the file to import <a href=\"https://docs.google.com/spreadsheets/d/1GCOhIkzm13Kln6uyUhK7ShMoPn_qUCYLxCKDIogPQt0/edit#gid=0\">here</a>.
\t    <br>The file won't be removed.
\t    <br><a class=\"btn btn-sm btn-danger\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajt_review_import");
        echo "\">Import review file</a>

\t    ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "<br/>

\t    <div class=\"form-group\">
\t    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "review", array()), 'label');
        echo "<br/>
\t    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "review", array()), 'widget', array("attr" => array("placeholder" => "Your review")));
        echo "
\t    <span class=\"text_danger\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "review", array()), 'errors');
        echo "</span><br/>

\t    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Create review"));
        echo "
\t    </div>

\t    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>

";
        
        $__internal_37a4666d2f8cb1733eb06b4e2901c26c3721f1145333d25831dbd0deb6551c7f->leave($__internal_37a4666d2f8cb1733eb06b4e2901c26c3721f1145333d25831dbd0deb6551c7f_prof);

    }

    public function getTemplateName()
    {
        return "AJTReviewBundle:Reviews:review.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  74 => 19,  69 => 17,  65 => 16,  61 => 15,  55 => 12,  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
\t{{ parent() }}

    <div class=\"container\">
\t    <h2>Add Review</h2>
\t    <br>You can edit the file to import <a href=\"https://docs.google.com/spreadsheets/d/1GCOhIkzm13Kln6uyUhK7ShMoPn_qUCYLxCKDIogPQt0/edit#gid=0\">here</a>.
\t    <br>The file won't be removed.
\t    <br><a class=\"btn btn-sm btn-danger\" href=\"{{ path('ajt_review_import') }}\">Import review file</a>

\t    {{ form_start(form) }}<br/>

\t    <div class=\"form-group\">
\t    {{ form_label(form.review) }}<br/>
\t    {{ form_widget(form.review, {'attr' : {'placeholder' : 'Your review'}}) }}
\t    <span class=\"text_danger\">{{ form_errors(form.review) }}</span><br/>

\t    {{ form_widget(form.save, {'label' : 'Create review'}) }}
\t    </div>

\t    {{ form_rest(form) }}
    </div>

{% endblock %}", "AJTReviewBundle:Reviews:review.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/src/AJT/ReviewBundle/Resources/views/Reviews/review.html.twig");
    }
}
