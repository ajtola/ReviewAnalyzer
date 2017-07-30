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
        $__internal_a2b8e49cd4a7e074793aee761b608d4e815dcfa1ba5e13b070d679d161f6236a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b8e49cd4a7e074793aee761b608d4e815dcfa1ba5e13b070d679d161f6236a->enter($__internal_a2b8e49cd4a7e074793aee761b608d4e815dcfa1ba5e13b070d679d161f6236a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a2b8e49cd4a7e074793aee761b608d4e815dcfa1ba5e13b070d679d161f6236a->leave($__internal_a2b8e49cd4a7e074793aee761b608d4e815dcfa1ba5e13b070d679d161f6236a_prof);

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
