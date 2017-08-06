<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_87157e0afd721f4075982f9cd1b97e552fa19ef0fa52ea4c3a35905d5a30602c extends Twig_Template
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
        $__internal_901871d1e18a0c48cd3d5b8ddc5236e578bfa7d0ccbb0920d4b390ff2f7dea9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901871d1e18a0c48cd3d5b8ddc5236e578bfa7d0ccbb0920d4b390ff2f7dea9b->enter($__internal_901871d1e18a0c48cd3d5b8ddc5236e578bfa7d0ccbb0920d4b390ff2f7dea9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_901871d1e18a0c48cd3d5b8ddc5236e578bfa7d0ccbb0920d4b390ff2f7dea9b->leave($__internal_901871d1e18a0c48cd3d5b8ddc5236e578bfa7d0ccbb0920d4b390ff2f7dea9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
