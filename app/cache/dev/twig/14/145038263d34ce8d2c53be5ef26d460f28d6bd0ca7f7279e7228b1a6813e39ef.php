<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c6b2d8439f178ccf51bf5d94faed81b64cc08cee1d1b7a9f89dcfd81de90a97a extends Twig_Template
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
        $__internal_27ac4a41efac8194a104f8cfd0c27d6746046bb9c8f508eae9465c1699e9f0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ac4a41efac8194a104f8cfd0c27d6746046bb9c8f508eae9465c1699e9f0aa->enter($__internal_27ac4a41efac8194a104f8cfd0c27d6746046bb9c8f508eae9465c1699e9f0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_27ac4a41efac8194a104f8cfd0c27d6746046bb9c8f508eae9465c1699e9f0aa->leave($__internal_27ac4a41efac8194a104f8cfd0c27d6746046bb9c8f508eae9465c1699e9f0aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/antonio/ChallengeRepo/ReviewAnalyzer/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
