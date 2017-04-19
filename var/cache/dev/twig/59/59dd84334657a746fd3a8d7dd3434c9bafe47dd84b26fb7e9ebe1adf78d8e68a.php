<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_02fe47fdd4604ba9d5baeb22e3ca82f2aa72ae15cc686e24e6bda415f5967a09 extends Twig_Template
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
        $__internal_9131d7ea320bdf237eab1523b676f3049616d64f8fefe2290f160a22f0a0f2e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9131d7ea320bdf237eab1523b676f3049616d64f8fefe2290f160a22f0a0f2e9->enter($__internal_9131d7ea320bdf237eab1523b676f3049616d64f8fefe2290f160a22f0a0f2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c15cc8393ea8b3bb71b94b510734ed84d94d35318262fb092af831407eca68a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15cc8393ea8b3bb71b94b510734ed84d94d35318262fb092af831407eca68a8->enter($__internal_c15cc8393ea8b3bb71b94b510734ed84d94d35318262fb092af831407eca68a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9131d7ea320bdf237eab1523b676f3049616d64f8fefe2290f160a22f0a0f2e9->leave($__internal_9131d7ea320bdf237eab1523b676f3049616d64f8fefe2290f160a22f0a0f2e9_prof);

        
        $__internal_c15cc8393ea8b3bb71b94b510734ed84d94d35318262fb092af831407eca68a8->leave($__internal_c15cc8393ea8b3bb71b94b510734ed84d94d35318262fb092af831407eca68a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
