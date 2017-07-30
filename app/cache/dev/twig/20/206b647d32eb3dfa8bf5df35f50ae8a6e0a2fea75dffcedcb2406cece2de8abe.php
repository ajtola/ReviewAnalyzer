<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0fff2e8420edfa1515cf94818600401ceb6d2bde5426a16a8ecd8a8888c3e343 extends Twig_Template
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
        $__internal_0e00a078443726e34f7998165a5c5d86efc2f4e3a56689cfe9eadef483d725c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e00a078443726e34f7998165a5c5d86efc2f4e3a56689cfe9eadef483d725c5->enter($__internal_0e00a078443726e34f7998165a5c5d86efc2f4e3a56689cfe9eadef483d725c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0e00a078443726e34f7998165a5c5d86efc2f4e3a56689cfe9eadef483d725c5->leave($__internal_0e00a078443726e34f7998165a5c5d86efc2f4e3a56689cfe9eadef483d725c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
