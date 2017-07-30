<?php

/* AJTReviewBundle:Reviews:topic.html.twig */
class __TwigTemplate_ea68ae348d91b9d1afa4c5ba38dedf70971a1eec1df1a5f3a126bf27ee3cf0c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AJTReviewBundle:Reviews:topic.html.twig", 1);
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
        $__internal_a97c5df3627cd1b3fcf1b7945d3447ef0ef8fdb014d05e6090912cf717c181c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97c5df3627cd1b3fcf1b7945d3447ef0ef8fdb014d05e6090912cf717c181c1->enter($__internal_a97c5df3627cd1b3fcf1b7945d3447ef0ef8fdb014d05e6090912cf717c181c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AJTReviewBundle:Reviews:topic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a97c5df3627cd1b3fcf1b7945d3447ef0ef8fdb014d05e6090912cf717c181c1->leave($__internal_a97c5df3627cd1b3fcf1b7945d3447ef0ef8fdb014d05e6090912cf717c181c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20542c565094b9bc2c09ef7e990c2fa184676d953d3e3c982c6c6818e8bcda8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20542c565094b9bc2c09ef7e990c2fa184676d953d3e3c982c6c6818e8bcda8e->enter($__internal_20542c565094b9bc2c09ef7e990c2fa184676d953d3e3c982c6c6818e8bcda8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t<div class=\"container\">
\t\t    <h2>Add new Topic</h2>

\t\t    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formTopic"]) ? $context["formTopic"] : $this->getContext($context, "formTopic")), 'form_start');
        echo "<br/>

\t\t    <div class=\"form-group\">
\t\t\t    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTopic"]) ? $context["formTopic"] : $this->getContext($context, "formTopic")), "topic", array()), 'label');
        echo "<br/>
\t\t\t    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTopic"]) ? $context["formTopic"] : $this->getContext($context, "formTopic")), "topic", array()), 'widget', array("attr" => array("placeholder" => "Your new topic")));
        echo "
\t\t\t    <span class=\"text_danger\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTopic"]) ? $context["formTopic"] : $this->getContext($context, "formTopic")), "topic", array()), 'errors');
        echo "</span><br/>

\t\t\t    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTopic"]) ? $context["formTopic"] : $this->getContext($context, "formTopic")), "alternativeName", array()), 'label');
        echo "<br/>
\t\t\t    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTopic"]) ? $context["formTopic"] : $this->getContext($context, "formTopic")), "alternativeName", array()), 'widget', array("attr" => array("placeholder" => "Separated by commas")));
        echo "
\t\t\t    <span class=\"text_danger\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTopic"]) ? $context["formTopic"] : $this->getContext($context, "formTopic")), "alternativeName", array()), 'errors');
        echo "</span><br/>

\t\t\t    <br/>
\t\t\t    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTopic"]) ? $context["formTopic"] : $this->getContext($context, "formTopic")), "saveTopic", array()), 'widget', array("label" => "Create new topics"));
        echo "
\t\t    </div>

\t\t    ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formTopic"]) ? $context["formTopic"] : $this->getContext($context, "formTopic")), 'form_end');
        echo "

\t\t    <div>

\t\t\t    <div>
\t\t\t    \t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"col-md-1\">ID</th>
\t\t\t\t\t\t\t<th class=\"col-md-4\">Topic</th>
\t\t\t\t\t\t\t<th class=\"col-md-6\">Alternative names</th>
\t\t\t\t\t\t\t<th class=\"col-md-2\">Action</th>
\t\t\t\t\t\t</tr>

\t\t                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["top"]) ? $context["top"] : $this->getContext($context, "top")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 38
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "topic", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "alternativeName", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajt_review_deleteTopic", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id" => $this->getAttribute($context["t"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
\t\t\t\t\t</table>

\t\t\t\t\t<ul class=\"pagination\">
\t\t\t            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagesCount"]) ? $context["pagesCount"] : $this->getContext($context, "pagesCount"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 52
            echo "\t\t\t                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajt_review_topic_p", array("page" => $context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li> 
\t\t\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t        </ul>
\t\t\t\t</div>

\t\t    </div>


    </div>


";
        
        $__internal_20542c565094b9bc2c09ef7e990c2fa184676d953d3e3c982c6c6818e8bcda8e->leave($__internal_20542c565094b9bc2c09ef7e990c2fa184676d953d3e3c982c6c6818e8bcda8e_prof);

    }

    public function getTemplateName()
    {
        return "AJTReviewBundle:Reviews:topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 54,  144 => 52,  140 => 51,  134 => 47,  124 => 43,  119 => 41,  115 => 40,  111 => 39,  108 => 38,  104 => 37,  88 => 24,  82 => 21,  76 => 18,  72 => 17,  68 => 16,  63 => 14,  59 => 13,  55 => 12,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
\t\t    <h2>Add new Topic</h2>

\t\t    {{ form_start(formTopic) }}<br/>

\t\t    <div class=\"form-group\">
\t\t\t    {{ form_label(formTopic.topic) }}<br/>
\t\t\t    {{ form_widget(formTopic.topic, {'attr' : {'placeholder' : 'Your new topic'}}) }}
\t\t\t    <span class=\"text_danger\">{{ form_errors(formTopic.topic) }}</span><br/>

\t\t\t    {{ form_label(formTopic.alternativeName) }}<br/>
\t\t\t    {{ form_widget(formTopic.alternativeName, {'attr' : {'placeholder' : 'Separated by commas'}}) }}
\t\t\t    <span class=\"text_danger\">{{ form_errors(formTopic.alternativeName) }}</span><br/>

\t\t\t    <br/>
\t\t\t    {{ form_widget(formTopic.saveTopic, {'label' : 'Create new topics'}) }}
\t\t    </div>

\t\t    {{ form_end(formTopic) }}

\t\t    <div>

\t\t\t    <div>
\t\t\t    \t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"col-md-1\">ID</th>
\t\t\t\t\t\t\t<th class=\"col-md-4\">Topic</th>
\t\t\t\t\t\t\t<th class=\"col-md-6\">Alternative names</th>
\t\t\t\t\t\t\t<th class=\"col-md-2\">Action</th>
\t\t\t\t\t\t</tr>

\t\t                {% for t in top %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ t.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ t.topic }}</td>
\t\t\t\t\t\t\t\t<td>{{ t.alternativeName }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" href=\"{{ path('ajt_review_deleteTopic', { page: page, id: t.id }) }}\">Delete</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t                {% endfor %}

\t\t\t\t\t</table>

\t\t\t\t\t<ul class=\"pagination\">
\t\t\t            {% for i in 1..pagesCount %}
\t\t\t                <li><a href=\"{{ path('ajt_review_topic_p', {'page': i}) }}\">{{ i }}</a></li> 
\t\t\t            {% endfor %}
\t\t\t        </ul>
\t\t\t\t</div>

\t\t    </div>


    </div>


{% endblock %}", "AJTReviewBundle:Reviews:topic.html.twig", "/home/antonio/ChallengeRepo/ReviewAnalyzer/src/AJT/ReviewBundle/Resources/views/Reviews/topic.html.twig");
    }
}
