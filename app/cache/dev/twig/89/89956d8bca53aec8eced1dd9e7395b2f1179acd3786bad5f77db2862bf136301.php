<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_332fb3349e2fa2a720da2065ee1db56f82b233b15b39f440eeb75d86defea919 extends Twig_Template
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
        $__internal_a017fbc74f9660be264b2ced5541a1a354560e00833134f8aa231b4f84ffbd85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a017fbc74f9660be264b2ced5541a1a354560e00833134f8aa231b4f84ffbd85->enter($__internal_a017fbc74f9660be264b2ced5541a1a354560e00833134f8aa231b4f84ffbd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_a017fbc74f9660be264b2ced5541a1a354560e00833134f8aa231b4f84ffbd85->leave($__internal_a017fbc74f9660be264b2ced5541a1a354560e00833134f8aa231b4f84ffbd85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
