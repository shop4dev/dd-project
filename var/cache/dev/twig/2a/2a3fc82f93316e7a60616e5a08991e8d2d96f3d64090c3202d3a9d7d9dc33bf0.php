<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b4ad2d6449a54b396adc7eb7f6a55caf3172798308c5253e76ab521f69e740f9 extends Twig_Template
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
        $__internal_68a2a09e03e7350bced455f449bd9cc782333bbd2a03efc78a9b1bc3c06d324c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a2a09e03e7350bced455f449bd9cc782333bbd2a03efc78a9b1bc3c06d324c->enter($__internal_68a2a09e03e7350bced455f449bd9cc782333bbd2a03efc78a9b1bc3c06d324c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_0b92ca948fb7840bc1737237c2ab44563e0590a8069f36d93727949ffdec313b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b92ca948fb7840bc1737237c2ab44563e0590a8069f36d93727949ffdec313b->enter($__internal_0b92ca948fb7840bc1737237c2ab44563e0590a8069f36d93727949ffdec313b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_68a2a09e03e7350bced455f449bd9cc782333bbd2a03efc78a9b1bc3c06d324c->leave($__internal_68a2a09e03e7350bced455f449bd9cc782333bbd2a03efc78a9b1bc3c06d324c_prof);

        
        $__internal_0b92ca948fb7840bc1737237c2ab44563e0590a8069f36d93727949ffdec313b->leave($__internal_0b92ca948fb7840bc1737237c2ab44563e0590a8069f36d93727949ffdec313b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
