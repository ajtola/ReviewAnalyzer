<?php

/* AJTReviewBundle:Reviews:negative.html.twig */
class __TwigTemplate_a6a83585ee2ea2581153a936ef432a84a8c993ab5f99838a25b76a11bf9273ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AJTReviewBundle:Reviews:negative.html.twig", 1);
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
        $__internal_2680e5c00ca9afcfa1ac3a6d0ce2e901d078bb6cc94e72b6ab077846ef5122ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2680e5c00ca9afcfa1ac3a6d0ce2e901d078bb6cc94e72b6ab077846ef5122ea->enter($__internal_2680e5c00ca9afcfa1ac3a6d0ce2e901d078bb6cc94e72b6ab077846ef5122ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AJTReviewBundle:Reviews:negative.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2680e5c00ca9afcfa1ac3a6d0ce2e901d078bb6cc94e72b6ab077846ef5122ea->leave($__internal_2680e5c00ca9afcfa1ac3a6d0ce2e901d078bb6cc94e72b6ab077846ef5122ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d7e8e055b568bc50f1584b150fbb0935e1aa76b4505aa89a78895b35d0d526b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7e8e055b568bc50f1584b150fbb0935e1aa76b4505aa89a78895b35d0d526b->enter($__internal_6d7e8e055b568bc50f1584b150fbb0935e1aa76b4505aa89a78895b35d0d526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t<div class=\"container\">
\t\t\t<h2>Add new Negative Word</h2>

\t\t\t";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formNegative"]) ? $context["formNegative"] : $this->getContext($context, "formNegative")), 'form_start');
        echo "<br/>

\t\t\t<div class=\"form-group\">
\t\t\t    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNegative"]) ? $context["formNegative"] : $this->getContext($context, "formNegative")), "negative", array()), 'label');
        echo "<br/>
\t\t\t    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNegative"]) ? $context["formNegative"] : $this->getContext($context, "formNegative")), "negative", array()), 'widget', array("attr" => array("placeholder" => "Your new negative word")));
        echo "
\t\t\t    <span class=\"text_danger\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNegative"]) ? $context["formNegative"] : $this->getContext($context, "formNegative")), "negative", array()), 'errors');
        echo "</span><br/>
\t\t\t    
\t\t\t    <br/>
\t\t\t    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNegative"]) ? $context["formNegative"] : $this->getContext($context, "formNegative")), "saveNegative", array()), 'widget', array("label" => "Create new negative word"));
        echo "
\t\t    </div>

\t\t    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formNegative"]) ? $context["formNegative"] : $this->getContext($context, "formNegative")), 'rest');
        echo "

\t\t    <div>

\t\t\t    <div>
\t\t\t    \t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"col-md-1\">ID</th>
\t\t\t\t\t\t\t<th class=\"col-md-6\">Negative</th>
\t\t\t\t\t\t\t<th class=\"col-md-2\">Action</th>
\t\t\t\t\t\t</tr>

\t\t                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["neg"]) ? $context["neg"] : $this->getContext($context, "neg")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 33
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "negative", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajt_review_deleteNegative", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id" => $this->getAttribute($context["n"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
\t\t\t\t\t</table>

\t\t\t\t\t<ul class=\"pagination\">
\t\t\t            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagesCount"]) ? $context["pagesCount"] : $this->getContext($context, "pagesCount"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 46
            echo "\t\t\t                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajt_review_negative_p", array("page" => $context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li> 
\t\t\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t        </ul>
\t\t\t\t</div>

\t\t    </div>

    </div>


";
        
        $__internal_6d7e8e055b568bc50f1584b150fbb0935e1aa76b4505aa89a78895b35d0d526b->leave($__internal_6d7e8e055b568bc50f1584b150fbb0935e1aa76b4505aa89a78895b35d0d526b_prof);

    }

    public function getTemplateName()
    {
        return "AJTReviewBundle:Reviews:negative.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  126 => 46,  122 => 45,  116 => 41,  106 => 37,  101 => 35,  97 => 34,  94 => 33,  90 => 32,  75 => 20,  69 => 17,  63 => 14,  59 => 13,  55 => 12,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
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

\t<div class=\"container\">
\t\t\t<h2>Add new Negative Word</h2>

\t\t\t{{ form_start(formNegative) }}<br/>

\t\t\t<div class=\"form-group\">
\t\t\t    {{ form_label(formNegative.negative) }}<br/>
\t\t\t    {{ form_widget(formNegative.negative, {'attr' : {'placeholder' : 'Your new negative word'}}) }}
\t\t\t    <span class=\"text_danger\">{{ form_errors(formNegative.negative) }}</span><br/>
\t\t\t    
\t\t\t    <br/>
\t\t\t    {{ form_widget(formNegative.saveNegative, {'label' : 'Create new negative word'}) }}
\t\t    </div>

\t\t    {{ form_rest(formNegative) }}

\t\t    <div>

\t\t\t    <div>
\t\t\t    \t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"col-md-1\">ID</th>
\t\t\t\t\t\t\t<th class=\"col-md-6\">Negative</th>
\t\t\t\t\t\t\t<th class=\"col-md-2\">Action</th>
\t\t\t\t\t\t</tr>

\t\t                {% for n in neg %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ n.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ n.negative }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" href=\"{{ path('ajt_review_deleteNegative', { page: page, id: n.id }) }}\">Delete</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t                {% endfor %}

\t\t\t\t\t</table>

\t\t\t\t\t<ul class=\"pagination\">
\t\t\t            {% for i in 1..pagesCount %}
\t\t\t                <li><a href=\"{{ path('ajt_review_negative_p', {'page': i}) }}\">{{ i }}</a></li> 
\t\t\t            {% endfor %}
\t\t\t        </ul>
\t\t\t\t</div>

\t\t    </div>

    </div>


{% endblock %}", "AJTReviewBundle:Reviews:negative.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/src/AJT/ReviewBundle/Resources/views/Reviews/negative.html.twig");
    }
}
