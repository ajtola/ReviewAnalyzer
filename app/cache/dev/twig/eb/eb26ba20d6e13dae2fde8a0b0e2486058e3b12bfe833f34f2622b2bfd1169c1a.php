<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_07eb3d299cec2ffbeeac25d2dd815384faae0a31b44863ed416167fd783e3712 extends Twig_Template
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
        $__internal_f8cbeb31d61721b9e6b39b0b23d3b06d98e1b459bd305d024837cd4089b01d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8cbeb31d61721b9e6b39b0b23d3b06d98e1b459bd305d024837cd4089b01d46->enter($__internal_f8cbeb31d61721b9e6b39b0b23d3b06d98e1b459bd305d024837cd4089b01d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f8cbeb31d61721b9e6b39b0b23d3b06d98e1b459bd305d024837cd4089b01d46->leave($__internal_f8cbeb31d61721b9e6b39b0b23d3b06d98e1b459bd305d024837cd4089b01d46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
