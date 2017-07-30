<?php

/* AJTReviewBundle:Reviews:index.html.twig */
class __TwigTemplate_83f5001d74b6e64daa2b200d147ab17d445bc3136138cd98b9408b969c3ae3be extends Twig_Template
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
        $__internal_b24c10c189beae7d059981cca9f6edc25779c7a9adf42809a4f36e60d3fa2865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24c10c189beae7d059981cca9f6edc25779c7a9adf42809a4f36e60d3fa2865->enter($__internal_b24c10c189beae7d059981cca9f6edc25779c7a9adf42809a4f36e60d3fa2865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AJTReviewBundle:Reviews:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b24c10c189beae7d059981cca9f6edc25779c7a9adf42809a4f36e60d3fa2865->leave($__internal_b24c10c189beae7d059981cca9f6edc25779c7a9adf42809a4f36e60d3fa2865_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_236003d2e762f98aae0d1a8571459bb02ea27c1785c3ba3153a4ebe6a0979d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236003d2e762f98aae0d1a8571459bb02ea27c1785c3ba3153a4ebe6a0979d9e->enter($__internal_236003d2e762f98aae0d1a8571459bb02ea27c1785c3ba3153a4ebe6a0979d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 28
            $context["analysis"] = twig_split_filter($this->env, $this->getAttribute($context["rev"], "analysis", array()), ";");
            // line 29
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["analysis"]) ? $context["analysis"] : $this->getContext($context, "analysis")));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 30
                echo "\t\t\t\t\t\t\t\t";
                if (($context["a"] != "")) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t-> ";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo " <br/>
\t\t\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["rev"], "total", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajt_review_run", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id" => $this->getAttribute($context["rev"], "id", array()))), "html", null, true);
            echo "\">Rate this review</a>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajt_review_deleteReview", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id" => $this->getAttribute($context["rev"], "id", array()))), "html", null, true);
            echo "\">Delete this review</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
\t\t\t</table>
\t\t\t<a class=\"btn btn-sm btn-primary\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajt_review_runAll");
        echo "\">Rate All</a>
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
        
        $__internal_236003d2e762f98aae0d1a8571459bb02ea27c1785c3ba3153a4ebe6a0979d9e->leave($__internal_236003d2e762f98aae0d1a8571459bb02ea27c1785c3ba3153a4ebe6a0979d9e_prof);

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
        return array (  150 => 52,  139 => 50,  135 => 49,  127 => 44,  123 => 42,  113 => 38,  109 => 37,  104 => 35,  101 => 34,  95 => 33,  89 => 31,  86 => 30,  81 => 29,  79 => 28,  74 => 26,  70 => 25,  67 => 24,  63 => 23,  40 => 4,  34 => 3,  11 => 1,);
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
\t\t\t<a class=\"btn btn-sm btn-primary\" href=\"{{ path('ajt_review_runAll') }}\">Rate All</a>
\t\t</div>

\t\t<div>
\t\t\t<ul class=\"pagination\">
\t            {% for i in 1..pagesCount %}
\t                <li><a href=\"{{ path('ajt_review_index_p', {'page': i}) }}\">{{ i }}</a></li> 
\t            {% endfor %}
\t        </ul>
\t\t</div>

\t</div>



{% endblock %}", "AJTReviewBundle:Reviews:index.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/src/AJT/ReviewBundle/Resources/views/Reviews/index.html.twig");
    }
}
