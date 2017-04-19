<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_1cd7c5f205026ed6c821ab0c7ac3f72e7401bb0b041eb8fbca2252352ca93772 extends Twig_Template
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
        $__internal_21b7b7f2ce8702d31894e1f0d38a205be26e675b502e4cc45b61c0f9a66f7835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b7b7f2ce8702d31894e1f0d38a205be26e675b502e4cc45b61c0f9a66f7835->enter($__internal_21b7b7f2ce8702d31894e1f0d38a205be26e675b502e4cc45b61c0f9a66f7835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_798e4e17094a367abc790a1cdfab2757cd1616d5104bf9f96a4892954978fc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798e4e17094a367abc790a1cdfab2757cd1616d5104bf9f96a4892954978fc2d->enter($__internal_798e4e17094a367abc790a1cdfab2757cd1616d5104bf9f96a4892954978fc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_21b7b7f2ce8702d31894e1f0d38a205be26e675b502e4cc45b61c0f9a66f7835->leave($__internal_21b7b7f2ce8702d31894e1f0d38a205be26e675b502e4cc45b61c0f9a66f7835_prof);

        
        $__internal_798e4e17094a367abc790a1cdfab2757cd1616d5104bf9f96a4892954978fc2d->leave($__internal_798e4e17094a367abc790a1cdfab2757cd1616d5104bf9f96a4892954978fc2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
