<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0525e73710e966f774f6e30b0e64a9190e0ecc342637bb72ca2d8b51e7996982 extends Twig_Template
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
        $__internal_4ccae2f4838c7aeaa0028e96a85849793f30fbe9008a2e87b3049666b907fea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccae2f4838c7aeaa0028e96a85849793f30fbe9008a2e87b3049666b907fea8->enter($__internal_4ccae2f4838c7aeaa0028e96a85849793f30fbe9008a2e87b3049666b907fea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_7d23e85354a9cc294ac6c8cb97d92865b5967b5525e1191292b03225e1f30eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d23e85354a9cc294ac6c8cb97d92865b5967b5525e1191292b03225e1f30eda->enter($__internal_7d23e85354a9cc294ac6c8cb97d92865b5967b5525e1191292b03225e1f30eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4ccae2f4838c7aeaa0028e96a85849793f30fbe9008a2e87b3049666b907fea8->leave($__internal_4ccae2f4838c7aeaa0028e96a85849793f30fbe9008a2e87b3049666b907fea8_prof);

        
        $__internal_7d23e85354a9cc294ac6c8cb97d92865b5967b5525e1191292b03225e1f30eda->leave($__internal_7d23e85354a9cc294ac6c8cb97d92865b5967b5525e1191292b03225e1f30eda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
