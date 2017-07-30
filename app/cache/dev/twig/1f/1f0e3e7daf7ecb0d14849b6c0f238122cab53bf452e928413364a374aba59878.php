<?php

/* AJTReviewBundle:Reviews:positive.html.twig */
class __TwigTemplate_ee2cbbbff59b6dec6cf9fbde112c069d28276108a373bddb67ab13ca6c9e03ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AJTReviewBundle:Reviews:positive.html.twig", 1);
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
        $__internal_bd032b096d5887c6e4ac0b1ece8545546f793684f9c6349c817441f796601ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd032b096d5887c6e4ac0b1ece8545546f793684f9c6349c817441f796601ab9->enter($__internal_bd032b096d5887c6e4ac0b1ece8545546f793684f9c6349c817441f796601ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AJTReviewBundle:Reviews:positive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd032b096d5887c6e4ac0b1ece8545546f793684f9c6349c817441f796601ab9->leave($__internal_bd032b096d5887c6e4ac0b1ece8545546f793684f9c6349c817441f796601ab9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba1d5dbfb518ace873bed8ee13b24d7f76c00ad8626124893ba83f736d263813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1d5dbfb518ace873bed8ee13b24d7f76c00ad8626124893ba83f736d263813->enter($__internal_ba1d5dbfb518ace873bed8ee13b24d7f76c00ad8626124893ba83f736d263813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t<div class=\"container\">
\t\t\t<h2>Add new Positive Word</h2>

\t\t\t";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formPositive"]) ? $context["formPositive"] : $this->getContext($context, "formPositive")), 'form_start');
        echo "<br/>

\t\t\t<div class=\"form-group\">
\t\t\t    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPositive"]) ? $context["formPositive"] : $this->getContext($context, "formPositive")), "positive", array()), 'label');
        echo "<br/>
\t\t\t    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPositive"]) ? $context["formPositive"] : $this->getContext($context, "formPositive")), "positive", array()), 'widget', array("attr" => array("placeholder" => "Your new positive word")));
        echo "
\t\t\t    <span class=\"text_danger\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPositive"]) ? $context["formPositive"] : $this->getContext($context, "formPositive")), "positive", array()), 'errors');
        echo "</span><br/>
\t\t\t    
\t\t\t    <br/>
\t\t\t    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPositive"]) ? $context["formPositive"] : $this->getContext($context, "formPositive")), "savePositive", array()), 'widget', array("label" => "Create new positive word"));
        echo "
\t\t    </div>

\t\t    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formPositive"]) ? $context["formPositive"] : $this->getContext($context, "formPositive")), 'rest');
        echo "

\t\t    <div>

\t\t\t    <div>
\t\t\t    \t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"col-md-1\">ID</th>
\t\t\t\t\t\t\t<th class=\"col-md-6\">Positive</th>
\t\t\t\t\t\t\t<th class=\"col-md-2\">Action</th>
\t\t\t\t\t\t</tr>

\t\t                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pos"]) ? $context["pos"] : $this->getContext($context, "pos")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 33
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "positive", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajt_review_deletePositive", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajt_review_positive_p", array("page" => $context["i"])), "html", null, true);
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
        
        $__internal_ba1d5dbfb518ace873bed8ee13b24d7f76c00ad8626124893ba83f736d263813->leave($__internal_ba1d5dbfb518ace873bed8ee13b24d7f76c00ad8626124893ba83f736d263813_prof);

    }

    public function getTemplateName()
    {
        return "AJTReviewBundle:Reviews:positive.html.twig";
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
\t\t\t<h2>Add new Positive Word</h2>

\t\t\t{{ form_start(formPositive) }}<br/>

\t\t\t<div class=\"form-group\">
\t\t\t    {{ form_label(formPositive.positive) }}<br/>
\t\t\t    {{ form_widget(formPositive.positive, {'attr' : {'placeholder' : 'Your new positive word'}}) }}
\t\t\t    <span class=\"text_danger\">{{ form_errors(formPositive.positive) }}</span><br/>
\t\t\t    
\t\t\t    <br/>
\t\t\t    {{ form_widget(formPositive.savePositive, {'label' : 'Create new positive word'}) }}
\t\t    </div>

\t\t    {{ form_rest(formPositive) }}

\t\t    <div>

\t\t\t    <div>
\t\t\t    \t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"col-md-1\">ID</th>
\t\t\t\t\t\t\t<th class=\"col-md-6\">Positive</th>
\t\t\t\t\t\t\t<th class=\"col-md-2\">Action</th>
\t\t\t\t\t\t</tr>

\t\t                {% for p in pos %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ p.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ p.positive }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" href=\"{{ path('ajt_review_deletePositive', { page: page, id: p.id }) }}\">Delete</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t                {% endfor %}

\t\t\t\t\t</table>

\t\t\t\t\t<ul class=\"pagination\">
\t\t\t            {% for i in 1..pagesCount %}
\t\t\t                <li><a href=\"{{ path('ajt_review_positive_p', {'page': i}) }}\">{{ i }}</a></li> 
\t\t\t            {% endfor %}
\t\t\t        </ul>
\t\t\t\t</div>

\t\t    </div>
    </div>


{% endblock %}", "AJTReviewBundle:Reviews:positive.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/src/AJT/ReviewBundle/Resources/views/Reviews/positive.html.twig");
    }
}
