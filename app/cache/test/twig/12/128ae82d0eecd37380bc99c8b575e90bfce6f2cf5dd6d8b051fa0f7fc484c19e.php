<?php

/* AJTReviewBundle:Reviews:index.html.twig */
class __TwigTemplate_af79eae824abb3f92ff13c173117cebacdf6e6e4eeac045a161a41047dd2ef9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AJTReviewBundle:Reviews:index.html.twig", 1);
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
        $__internal_636e8242d905cbd9ed3f885281f597e44130320069cdf91f8309ec7a01260e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636e8242d905cbd9ed3f885281f597e44130320069cdf91f8309ec7a01260e24->enter($__internal_636e8242d905cbd9ed3f885281f597e44130320069cdf91f8309ec7a01260e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AJTReviewBundle:Reviews:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_636e8242d905cbd9ed3f885281f597e44130320069cdf91f8309ec7a01260e24->leave($__internal_636e8242d905cbd9ed3f885281f597e44130320069cdf91f8309ec7a01260e24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_380008c944d694c5496e9b8635ced1bd9f6eb313d55701c4742491d0b3615cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380008c944d694c5496e9b8635ced1bd9f6eb313d55701c4742491d0b3615cdf->enter($__internal_380008c944d694c5496e9b8635ced1bd9f6eb313d55701c4742491d0b3615cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t<div class=\"container\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<h2 class=>Reviews</h2>
\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"col-md-1\">ID</th>
\t\t\t\t\t<th class=\"col-md-6\">Review Content</th>
\t\t\t\t\t<th class=\"col-md-2\">Analysis</th>
\t\t\t\t\t<th class=\"col-md-1\">Total</th>
\t\t\t\t\t<th class=\"col-md-2\">Action</th>
\t\t\t\t</tr>

                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revs"]) ? $context["revs"] : $this->getContext($context, "revs")));
        foreach ($context['_seq'] as $context["_key"] => $context["rev"]) {
            // line 24
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["rev"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["rev"], "review", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<!--<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["rev"], "analysis", array()), "html", null, true);
            echo " HOLA</td>-->
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 29
            $context["analysis"] = twig_split_filter($this->env, $this->getAttribute($context["rev"], "analysis", array()), ";");
            // line 30
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["analysis"]) ? $context["analysis"] : $this->getContext($context, "analysis")));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 31
                echo "\t\t\t\t\t\t\t\t";
                if (($context["a"] != "")) {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t-> ";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo " <br/>
\t\t\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["rev"], "total", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajt_review_run", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id" => $this->getAttribute($context["rev"], "id", array()))), "html", null, true);
            echo "\">Rate this review</a>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajt_review_deleteReview", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id" => $this->getAttribute($context["rev"], "id", array()))), "html", null, true);
            echo "\">Delete this review</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
\t\t\t</table>
\t\t</div>

\t\t<div>
\t\t\t<ul class=\"pagination\">
\t            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagesCount"]) ? $context["pagesCount"] : $this->getContext($context, "pagesCount"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            echo "\t                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajt_review_index_p", array("page" => $context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li> 
\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t        </ul>
\t\t</div>

\t</div>



";
        
        $__internal_380008c944d694c5496e9b8635ced1bd9f6eb313d55701c4742491d0b3615cdf->leave($__internal_380008c944d694c5496e9b8635ced1bd9f6eb313d55701c4742491d0b3615cdf_prof);

    }

    public function getTemplateName()
    {
        return "AJTReviewBundle:Reviews:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 52,  139 => 50,  135 => 49,  127 => 43,  117 => 39,  113 => 38,  108 => 36,  105 => 35,  99 => 34,  93 => 32,  90 => 31,  85 => 30,  83 => 29,  78 => 27,  74 => 26,  70 => 25,  67 => 24,  63 => 23,  40 => 4,  34 => 3,  11 => 1,);
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
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<h2 class=>Reviews</h2>
\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"col-md-1\">ID</th>
\t\t\t\t\t<th class=\"col-md-6\">Review Content</th>
\t\t\t\t\t<th class=\"col-md-2\">Analysis</th>
\t\t\t\t\t<th class=\"col-md-1\">Total</th>
\t\t\t\t\t<th class=\"col-md-2\">Action</th>
\t\t\t\t</tr>

                {% for rev in revs %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ rev.id }}</td>
\t\t\t\t\t\t<td>{{ rev.review }}</td>
\t\t\t\t\t\t<!--<td>{{ rev.analysis }} HOLA</td>-->
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% set analysis = rev.analysis | split(';') %}
\t\t\t\t\t\t\t{% for a in analysis%}
\t\t\t\t\t\t\t\t{% if a != \"\" %}
\t\t\t\t\t\t\t\t-> {{ a }} <br/>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ rev.total }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary\" href=\"{{ path('ajt_review_run', { page: page, id: rev.id }) }}\">Rate this review</a>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" href=\"{{ path('ajt_review_deleteReview', { page: page, id: rev.id }) }}\">Delete this review</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}

\t\t\t</table>
\t\t</div>

\t\t<div>
\t\t\t<ul class=\"pagination\">
\t            {% for i in 1..pagesCount %}
\t                <li><a href=\"{{ path('ajt_review_index_p', {'page': i}) }}\">{{ i }}</a></li> 
\t            {% endfor %}
\t        </ul>
\t\t</div>

\t</div>



{% endblock %}", "AJTReviewBundle:Reviews:index.html.twig", "/home/antonio/Challenge/ReviewAnalyzer/src/AJT/ReviewBundle/Resources/views/Reviews/index.html.twig");
    }
}
