<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6cb8838ae2bcb5a30865f1ab24001c14b2e37513d70865d8536db064025e5900 extends Twig_Template
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
        $__internal_fa41fc5f64bab6e6ebbd31d4761cec19e2a6ed34c2c35e63e6b40faaecad3f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa41fc5f64bab6e6ebbd31d4761cec19e2a6ed34c2c35e63e6b40faaecad3f52->enter($__internal_fa41fc5f64bab6e6ebbd31d4761cec19e2a6ed34c2c35e63e6b40faaecad3f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_fa41fc5f64bab6e6ebbd31d4761cec19e2a6ed34c2c35e63e6b40faaecad3f52->leave($__internal_fa41fc5f64bab6e6ebbd31d4761cec19e2a6ed34c2c35e63e6b40faaecad3f52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
