<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_db688c6560cb5c6970dec47f82619ccf7023653b63fbf5b810231de242d038d6 extends Twig_Template
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
        $__internal_77d4f82efe58ae239bc25b9eb94d1274c18e51c15afb4015082dba5c31e84583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d4f82efe58ae239bc25b9eb94d1274c18e51c15afb4015082dba5c31e84583->enter($__internal_77d4f82efe58ae239bc25b9eb94d1274c18e51c15afb4015082dba5c31e84583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7e0f80b7e5972c704e506b159c5cc6effba50b0618c9dd6c4548399c7d528d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0f80b7e5972c704e506b159c5cc6effba50b0618c9dd6c4548399c7d528d1a->enter($__internal_7e0f80b7e5972c704e506b159c5cc6effba50b0618c9dd6c4548399c7d528d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_77d4f82efe58ae239bc25b9eb94d1274c18e51c15afb4015082dba5c31e84583->leave($__internal_77d4f82efe58ae239bc25b9eb94d1274c18e51c15afb4015082dba5c31e84583_prof);

        
        $__internal_7e0f80b7e5972c704e506b159c5cc6effba50b0618c9dd6c4548399c7d528d1a->leave($__internal_7e0f80b7e5972c704e506b159c5cc6effba50b0618c9dd6c4548399c7d528d1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
