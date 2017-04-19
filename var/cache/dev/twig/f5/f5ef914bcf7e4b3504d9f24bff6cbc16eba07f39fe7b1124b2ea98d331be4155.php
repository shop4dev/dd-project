<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c9d1b5eb893d45f011b462503c840f22713ac80a6ee06cdffc93c51227ba15cf extends Twig_Template
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
        $__internal_d70642def23c052798ac0040754643c95e10d9d65de58cbc4118894ad39ef866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70642def23c052798ac0040754643c95e10d9d65de58cbc4118894ad39ef866->enter($__internal_d70642def23c052798ac0040754643c95e10d9d65de58cbc4118894ad39ef866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b503837f6e3de66a2020f19eba4532e641f9938cafa94e03462faa983abc255c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b503837f6e3de66a2020f19eba4532e641f9938cafa94e03462faa983abc255c->enter($__internal_b503837f6e3de66a2020f19eba4532e641f9938cafa94e03462faa983abc255c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d70642def23c052798ac0040754643c95e10d9d65de58cbc4118894ad39ef866->leave($__internal_d70642def23c052798ac0040754643c95e10d9d65de58cbc4118894ad39ef866_prof);

        
        $__internal_b503837f6e3de66a2020f19eba4532e641f9938cafa94e03462faa983abc255c->leave($__internal_b503837f6e3de66a2020f19eba4532e641f9938cafa94e03462faa983abc255c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
