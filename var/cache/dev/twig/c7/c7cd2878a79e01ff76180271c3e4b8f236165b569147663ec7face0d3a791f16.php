<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9b3fcb0f1f9e83f102d3702cd882f270fdc0531dd8ba2cf7cd7514f211e5e221 extends Twig_Template
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
        $__internal_698da04ab1f49def23c3f54628467fbde8eec32cb6a7cce5517ff63cae9c4999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698da04ab1f49def23c3f54628467fbde8eec32cb6a7cce5517ff63cae9c4999->enter($__internal_698da04ab1f49def23c3f54628467fbde8eec32cb6a7cce5517ff63cae9c4999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a309856fcd2fb410f5de4238e6bf2e9a89e8f9a2062e5c24174e2bc28e1aafff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a309856fcd2fb410f5de4238e6bf2e9a89e8f9a2062e5c24174e2bc28e1aafff->enter($__internal_a309856fcd2fb410f5de4238e6bf2e9a89e8f9a2062e5c24174e2bc28e1aafff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_698da04ab1f49def23c3f54628467fbde8eec32cb6a7cce5517ff63cae9c4999->leave($__internal_698da04ab1f49def23c3f54628467fbde8eec32cb6a7cce5517ff63cae9c4999_prof);

        
        $__internal_a309856fcd2fb410f5de4238e6bf2e9a89e8f9a2062e5c24174e2bc28e1aafff->leave($__internal_a309856fcd2fb410f5de4238e6bf2e9a89e8f9a2062e5c24174e2bc28e1aafff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
