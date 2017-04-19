<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a1525a61a3301f5a07d62f2684d4314e26bd55aa823260813fee4101103f4ce7 extends Twig_Template
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
        $__internal_a01ae19fe32db3cfb486af767c7112fe5499c93582af65ff13a7ecae08c51544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01ae19fe32db3cfb486af767c7112fe5499c93582af65ff13a7ecae08c51544->enter($__internal_a01ae19fe32db3cfb486af767c7112fe5499c93582af65ff13a7ecae08c51544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_17e425c7b7afe2c178ccb25a7abc3578b192d3918d2562ba46aeb7e8493745ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e425c7b7afe2c178ccb25a7abc3578b192d3918d2562ba46aeb7e8493745ba->enter($__internal_17e425c7b7afe2c178ccb25a7abc3578b192d3918d2562ba46aeb7e8493745ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a01ae19fe32db3cfb486af767c7112fe5499c93582af65ff13a7ecae08c51544->leave($__internal_a01ae19fe32db3cfb486af767c7112fe5499c93582af65ff13a7ecae08c51544_prof);

        
        $__internal_17e425c7b7afe2c178ccb25a7abc3578b192d3918d2562ba46aeb7e8493745ba->leave($__internal_17e425c7b7afe2c178ccb25a7abc3578b192d3918d2562ba46aeb7e8493745ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
