<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_354ccaa5a3fcc5b832d8a5f0c0cf1bf3abf29a537e0ad3a0144a453fc1e867ff extends Twig_Template
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
        $__internal_a3e0a49404c9689f9fc31f8adcf24c511eb1a59a61f1344c5fb29664b0adb83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e0a49404c9689f9fc31f8adcf24c511eb1a59a61f1344c5fb29664b0adb83b->enter($__internal_a3e0a49404c9689f9fc31f8adcf24c511eb1a59a61f1344c5fb29664b0adb83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a3e0a49404c9689f9fc31f8adcf24c511eb1a59a61f1344c5fb29664b0adb83b->leave($__internal_a3e0a49404c9689f9fc31f8adcf24c511eb1a59a61f1344c5fb29664b0adb83b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
