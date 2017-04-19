<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_fcf1994925ed13ae50ceaaa9fa1630895b6d8f504524ff1d777acdd3b5e606fa extends Twig_Template
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
        $__internal_6c797fa14f699eeb3e7615cd656a1a926c365e9d7211ac2cccf5850737f20131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c797fa14f699eeb3e7615cd656a1a926c365e9d7211ac2cccf5850737f20131->enter($__internal_6c797fa14f699eeb3e7615cd656a1a926c365e9d7211ac2cccf5850737f20131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_790043bd4f8fe98e04b48255e0d18c33fac0d6c01f7b8bd5ca654d618d528a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790043bd4f8fe98e04b48255e0d18c33fac0d6c01f7b8bd5ca654d618d528a9f->enter($__internal_790043bd4f8fe98e04b48255e0d18c33fac0d6c01f7b8bd5ca654d618d528a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_6c797fa14f699eeb3e7615cd656a1a926c365e9d7211ac2cccf5850737f20131->leave($__internal_6c797fa14f699eeb3e7615cd656a1a926c365e9d7211ac2cccf5850737f20131_prof);

        
        $__internal_790043bd4f8fe98e04b48255e0d18c33fac0d6c01f7b8bd5ca654d618d528a9f->leave($__internal_790043bd4f8fe98e04b48255e0d18c33fac0d6c01f7b8bd5ca654d618d528a9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
", "@Framework/Form/attributes.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
