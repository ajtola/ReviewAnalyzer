<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a4b4ae6d6dd1f3e8728ef1120d453912e8e040beb7e9166e2880bbd7eaca37fd extends Twig_Template
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
        $__internal_49202cbd9df0b6ce2ed9753259737da145df5b38a9d30fb28db2879b46f45c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49202cbd9df0b6ce2ed9753259737da145df5b38a9d30fb28db2879b46f45c81->enter($__internal_49202cbd9df0b6ce2ed9753259737da145df5b38a9d30fb28db2879b46f45c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_49202cbd9df0b6ce2ed9753259737da145df5b38a9d30fb28db2879b46f45c81->leave($__internal_49202cbd9df0b6ce2ed9753259737da145df5b38a9d30fb28db2879b46f45c81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
