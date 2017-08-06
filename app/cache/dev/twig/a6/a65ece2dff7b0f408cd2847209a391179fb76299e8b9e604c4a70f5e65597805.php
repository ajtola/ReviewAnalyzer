<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_24779d5f3a87ad7da794ca46f1c6367473f606779ac698471f1081785e808d3f extends Twig_Template
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
        $__internal_c5f0155fd8a8c7ff06c193e8a49dc5dcb21c2bb222d71cd8f0972a45566bc906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f0155fd8a8c7ff06c193e8a49dc5dcb21c2bb222d71cd8f0972a45566bc906->enter($__internal_c5f0155fd8a8c7ff06c193e8a49dc5dcb21c2bb222d71cd8f0972a45566bc906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c5f0155fd8a8c7ff06c193e8a49dc5dcb21c2bb222d71cd8f0972a45566bc906->leave($__internal_c5f0155fd8a8c7ff06c193e8a49dc5dcb21c2bb222d71cd8f0972a45566bc906_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
