<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_72e86c22b9ef3a7dd334477894772cafea95a7be56b3c6bf095443eac127e837 extends Twig_Template
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
        $__internal_5ee36174ea16f47d2e785610173372dd143411569eb4cfdecefe96d31db8609c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee36174ea16f47d2e785610173372dd143411569eb4cfdecefe96d31db8609c->enter($__internal_5ee36174ea16f47d2e785610173372dd143411569eb4cfdecefe96d31db8609c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_aadad26356ab976a01f9c683b6af02f89c969efca9f345452bf035e9eb051bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aadad26356ab976a01f9c683b6af02f89c969efca9f345452bf035e9eb051bfe->enter($__internal_aadad26356ab976a01f9c683b6af02f89c969efca9f345452bf035e9eb051bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5ee36174ea16f47d2e785610173372dd143411569eb4cfdecefe96d31db8609c->leave($__internal_5ee36174ea16f47d2e785610173372dd143411569eb4cfdecefe96d31db8609c_prof);

        
        $__internal_aadad26356ab976a01f9c683b6af02f89c969efca9f345452bf035e9eb051bfe->leave($__internal_aadad26356ab976a01f9c683b6af02f89c969efca9f345452bf035e9eb051bfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
