<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_7429a7dcf9ceb54be0189c573f9bff798ed47b05211dd6ba135a1b5903bf05b1 extends Twig_Template
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
        $__internal_2393942db4afb0d60bcdcc3c283af69f5c67896a0e7b1e4a93c5562762b81e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2393942db4afb0d60bcdcc3c283af69f5c67896a0e7b1e4a93c5562762b81e52->enter($__internal_2393942db4afb0d60bcdcc3c283af69f5c67896a0e7b1e4a93c5562762b81e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2393942db4afb0d60bcdcc3c283af69f5c67896a0e7b1e4a93c5562762b81e52->leave($__internal_2393942db4afb0d60bcdcc3c283af69f5c67896a0e7b1e4a93c5562762b81e52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
