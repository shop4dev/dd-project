<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_5056df37cd35ddfe5da27c18801041ddc89e17b8ad0332e01f64f6ebf60396d3 extends Twig_Template
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
        $__internal_1a8f5dfd9a8aebcd1adaf751b05cd329d803540cbfe4fb08d094694d29d2ebf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8f5dfd9a8aebcd1adaf751b05cd329d803540cbfe4fb08d094694d29d2ebf5->enter($__internal_1a8f5dfd9a8aebcd1adaf751b05cd329d803540cbfe4fb08d094694d29d2ebf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d1a27a7470d90489837e7b346cd4981ba5840a8aae84e180f5e86d0e28427680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a27a7470d90489837e7b346cd4981ba5840a8aae84e180f5e86d0e28427680->enter($__internal_d1a27a7470d90489837e7b346cd4981ba5840a8aae84e180f5e86d0e28427680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1a8f5dfd9a8aebcd1adaf751b05cd329d803540cbfe4fb08d094694d29d2ebf5->leave($__internal_1a8f5dfd9a8aebcd1adaf751b05cd329d803540cbfe4fb08d094694d29d2ebf5_prof);

        
        $__internal_d1a27a7470d90489837e7b346cd4981ba5840a8aae84e180f5e86d0e28427680->leave($__internal_d1a27a7470d90489837e7b346cd4981ba5840a8aae84e180f5e86d0e28427680_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
