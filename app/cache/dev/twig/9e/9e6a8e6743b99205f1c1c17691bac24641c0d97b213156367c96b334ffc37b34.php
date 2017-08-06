<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7786c87a733d20489777f738edff0ddd7fc77275d28ed369e008f95e63d5b101 extends Twig_Template
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
        $__internal_fd1532e2959a7d0b5365ad31baf4f2a833c98444f35d0fca048839bb6742d51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1532e2959a7d0b5365ad31baf4f2a833c98444f35d0fca048839bb6742d51d->enter($__internal_fd1532e2959a7d0b5365ad31baf4f2a833c98444f35d0fca048839bb6742d51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_fd1532e2959a7d0b5365ad31baf4f2a833c98444f35d0fca048839bb6742d51d->leave($__internal_fd1532e2959a7d0b5365ad31baf4f2a833c98444f35d0fca048839bb6742d51d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
