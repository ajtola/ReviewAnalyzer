<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f734928fb473fe4f12012ad51f02bef6c2ef27531ec292ae9ebb7b5e61b1f45e extends Twig_Template
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
        $__internal_3ecc2646b935a8527fe9ed34d98ee1faaa93fda5db8666f0b63a738244aaf8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ecc2646b935a8527fe9ed34d98ee1faaa93fda5db8666f0b63a738244aaf8e7->enter($__internal_3ecc2646b935a8527fe9ed34d98ee1faaa93fda5db8666f0b63a738244aaf8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3ecc2646b935a8527fe9ed34d98ee1faaa93fda5db8666f0b63a738244aaf8e7->leave($__internal_3ecc2646b935a8527fe9ed34d98ee1faaa93fda5db8666f0b63a738244aaf8e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
