<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_adf68b964f531ad4e7f0260efac69a23a7361a4ce0a3ca16970d15a9a1e84a8c extends Twig_Template
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
        $__internal_0c5d9ea01d4993a322f4bd376ae5b6f754346298af8d8f0ffb746fc8fe9b3853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5d9ea01d4993a322f4bd376ae5b6f754346298af8d8f0ffb746fc8fe9b3853->enter($__internal_0c5d9ea01d4993a322f4bd376ae5b6f754346298af8d8f0ffb746fc8fe9b3853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_801d1bfd09010a68d26694c0ec950115932f08503a84831f87a1d379fd3226d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801d1bfd09010a68d26694c0ec950115932f08503a84831f87a1d379fd3226d4->enter($__internal_801d1bfd09010a68d26694c0ec950115932f08503a84831f87a1d379fd3226d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0c5d9ea01d4993a322f4bd376ae5b6f754346298af8d8f0ffb746fc8fe9b3853->leave($__internal_0c5d9ea01d4993a322f4bd376ae5b6f754346298af8d8f0ffb746fc8fe9b3853_prof);

        
        $__internal_801d1bfd09010a68d26694c0ec950115932f08503a84831f87a1d379fd3226d4->leave($__internal_801d1bfd09010a68d26694c0ec950115932f08503a84831f87a1d379fd3226d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
