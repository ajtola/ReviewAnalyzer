<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_b79281467dfd6956fbd754122e48586bfacd5161d254b5b4a9aadfe7df7a2854 extends Twig_Template
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
        $__internal_a88bfc2ddfbc689196cb726a1dbdd1ce84326e07836c220a60128ae19a50dc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88bfc2ddfbc689196cb726a1dbdd1ce84326e07836c220a60128ae19a50dc93->enter($__internal_a88bfc2ddfbc689196cb726a1dbdd1ce84326e07836c220a60128ae19a50dc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_a88bfc2ddfbc689196cb726a1dbdd1ce84326e07836c220a60128ae19a50dc93->leave($__internal_a88bfc2ddfbc689196cb726a1dbdd1ce84326e07836c220a60128ae19a50dc93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
