<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_fc5e59e01b2ffd9ce37b3cd5fb5931a87332de5812bd1100bdc64d6a93e94f9d extends Twig_Template
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
        $__internal_c211a7e145112978bf0efc3438fb0f57d8cd5bfed1fbae7c3275dd6aecf3c897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c211a7e145112978bf0efc3438fb0f57d8cd5bfed1fbae7c3275dd6aecf3c897->enter($__internal_c211a7e145112978bf0efc3438fb0f57d8cd5bfed1fbae7c3275dd6aecf3c897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c211a7e145112978bf0efc3438fb0f57d8cd5bfed1fbae7c3275dd6aecf3c897->leave($__internal_c211a7e145112978bf0efc3438fb0f57d8cd5bfed1fbae7c3275dd6aecf3c897_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
