<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4372f575d57aac305cd82da1036187d1e8d2dee7fb55c077b7a6b12c346cbec3 extends Twig_Template
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
        $__internal_f4fc233c1a5fcfbd317c4b45c94944e73fc67ae24b308a8c198d6db52895a36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4fc233c1a5fcfbd317c4b45c94944e73fc67ae24b308a8c198d6db52895a36c->enter($__internal_f4fc233c1a5fcfbd317c4b45c94944e73fc67ae24b308a8c198d6db52895a36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_03d678d477f3978076b11178586a4a56c36a100fe07a0395b7a83e78b18daf12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d678d477f3978076b11178586a4a56c36a100fe07a0395b7a83e78b18daf12->enter($__internal_03d678d477f3978076b11178586a4a56c36a100fe07a0395b7a83e78b18daf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f4fc233c1a5fcfbd317c4b45c94944e73fc67ae24b308a8c198d6db52895a36c->leave($__internal_f4fc233c1a5fcfbd317c4b45c94944e73fc67ae24b308a8c198d6db52895a36c_prof);

        
        $__internal_03d678d477f3978076b11178586a4a56c36a100fe07a0395b7a83e78b18daf12->leave($__internal_03d678d477f3978076b11178586a4a56c36a100fe07a0395b7a83e78b18daf12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
