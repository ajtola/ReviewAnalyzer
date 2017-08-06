<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8d2759cb29bc879064c4b64c99d6f9d4bc67f40549bf6a23add07769b1ad42c5 extends Twig_Template
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
        $__internal_c5635d4dbf6ad4180be68acc309fd8f5f8dd031c78e49356a86e7696452fec60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5635d4dbf6ad4180be68acc309fd8f5f8dd031c78e49356a86e7696452fec60->enter($__internal_c5635d4dbf6ad4180be68acc309fd8f5f8dd031c78e49356a86e7696452fec60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c5635d4dbf6ad4180be68acc309fd8f5f8dd031c78e49356a86e7696452fec60->leave($__internal_c5635d4dbf6ad4180be68acc309fd8f5f8dd031c78e49356a86e7696452fec60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
