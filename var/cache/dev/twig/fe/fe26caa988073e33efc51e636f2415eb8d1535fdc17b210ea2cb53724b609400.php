<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c4cd8584726b4cbf296055e79b04044973c6c2263a7a920197d8904fd438803e extends Twig_Template
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
        $__internal_6b5d546d8a8fc6f9cec823791d1d4abd165e1a56d795e02358c208d1870f2909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5d546d8a8fc6f9cec823791d1d4abd165e1a56d795e02358c208d1870f2909->enter($__internal_6b5d546d8a8fc6f9cec823791d1d4abd165e1a56d795e02358c208d1870f2909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_acf0c345b9bbaa52b33ccab2ca4f362df0956c8d0dafafdef25ba957f1e2bc22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf0c345b9bbaa52b33ccab2ca4f362df0956c8d0dafafdef25ba957f1e2bc22->enter($__internal_acf0c345b9bbaa52b33ccab2ca4f362df0956c8d0dafafdef25ba957f1e2bc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6b5d546d8a8fc6f9cec823791d1d4abd165e1a56d795e02358c208d1870f2909->leave($__internal_6b5d546d8a8fc6f9cec823791d1d4abd165e1a56d795e02358c208d1870f2909_prof);

        
        $__internal_acf0c345b9bbaa52b33ccab2ca4f362df0956c8d0dafafdef25ba957f1e2bc22->leave($__internal_acf0c345b9bbaa52b33ccab2ca4f362df0956c8d0dafafdef25ba957f1e2bc22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
