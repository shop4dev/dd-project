<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bd94edd8a045875b07481df56b2c40bde00dae3addef2b02f43bce2c92b6a189 extends Twig_Template
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
        $__internal_8c5489a27094999cc93d3fb20ade3d9b812c8334f3294f50ef5caa14594092cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5489a27094999cc93d3fb20ade3d9b812c8334f3294f50ef5caa14594092cb->enter($__internal_8c5489a27094999cc93d3fb20ade3d9b812c8334f3294f50ef5caa14594092cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e914aedae0eaf490187f0f9393e00a82e189358e19758ead710cf747ca5cd0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e914aedae0eaf490187f0f9393e00a82e189358e19758ead710cf747ca5cd0ab->enter($__internal_e914aedae0eaf490187f0f9393e00a82e189358e19758ead710cf747ca5cd0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8c5489a27094999cc93d3fb20ade3d9b812c8334f3294f50ef5caa14594092cb->leave($__internal_8c5489a27094999cc93d3fb20ade3d9b812c8334f3294f50ef5caa14594092cb_prof);

        
        $__internal_e914aedae0eaf490187f0f9393e00a82e189358e19758ead710cf747ca5cd0ab->leave($__internal_e914aedae0eaf490187f0f9393e00a82e189358e19758ead710cf747ca5cd0ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
