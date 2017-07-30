<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e3b890be24e3be2e08239c9d6e8b6b82974bbae7ad36bb2cb83e05db09282d81 extends Twig_Template
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
        $__internal_daa7a6f80885f93d4358aa9319f1c980b55b339e743c1bb1d030ae0daf46324a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa7a6f80885f93d4358aa9319f1c980b55b339e743c1bb1d030ae0daf46324a->enter($__internal_daa7a6f80885f93d4358aa9319f1c980b55b339e743c1bb1d030ae0daf46324a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_daa7a6f80885f93d4358aa9319f1c980b55b339e743c1bb1d030ae0daf46324a->leave($__internal_daa7a6f80885f93d4358aa9319f1c980b55b339e743c1bb1d030ae0daf46324a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
