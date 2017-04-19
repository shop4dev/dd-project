<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_cfc281957affe760700d03ddb0be7e8d39c7872eaac2adebd74b98c052471095 extends Twig_Template
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
        $__internal_491389626697a5a922f288167b531b3d48e2211f5bd68be3064c1b81212ff262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491389626697a5a922f288167b531b3d48e2211f5bd68be3064c1b81212ff262->enter($__internal_491389626697a5a922f288167b531b3d48e2211f5bd68be3064c1b81212ff262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d1d11603e3bb043f16680801be9db0bf48033cfe2acc910a4ffd7147d3b8f18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d11603e3bb043f16680801be9db0bf48033cfe2acc910a4ffd7147d3b8f18b->enter($__internal_d1d11603e3bb043f16680801be9db0bf48033cfe2acc910a4ffd7147d3b8f18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_491389626697a5a922f288167b531b3d48e2211f5bd68be3064c1b81212ff262->leave($__internal_491389626697a5a922f288167b531b3d48e2211f5bd68be3064c1b81212ff262_prof);

        
        $__internal_d1d11603e3bb043f16680801be9db0bf48033cfe2acc910a4ffd7147d3b8f18b->leave($__internal_d1d11603e3bb043f16680801be9db0bf48033cfe2acc910a4ffd7147d3b8f18b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
