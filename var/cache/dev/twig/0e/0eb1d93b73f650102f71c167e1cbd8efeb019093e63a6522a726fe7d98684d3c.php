<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_48fd95720911e6965718a61ede18421169d22f4fd684e4f2367a484ce961a7e9 extends Twig_Template
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
        $__internal_c178aea250e7721218f30da3edf5fef3c328901bb9e876a17029f1d474d62c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c178aea250e7721218f30da3edf5fef3c328901bb9e876a17029f1d474d62c83->enter($__internal_c178aea250e7721218f30da3edf5fef3c328901bb9e876a17029f1d474d62c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_fee23633519528022b9074d5ce43032a0de4ea008157e792031045cce8cc029b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee23633519528022b9074d5ce43032a0de4ea008157e792031045cce8cc029b->enter($__internal_fee23633519528022b9074d5ce43032a0de4ea008157e792031045cce8cc029b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c178aea250e7721218f30da3edf5fef3c328901bb9e876a17029f1d474d62c83->leave($__internal_c178aea250e7721218f30da3edf5fef3c328901bb9e876a17029f1d474d62c83_prof);

        
        $__internal_fee23633519528022b9074d5ce43032a0de4ea008157e792031045cce8cc029b->leave($__internal_fee23633519528022b9074d5ce43032a0de4ea008157e792031045cce8cc029b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
