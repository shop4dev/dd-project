<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ab21dcc6286500afd891e04a6108da091a610407550dcd122451ff8e3d76f613 extends Twig_Template
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
        $__internal_df38384db305ed22e43400ad1211dcf5f514749b0ad2bc89ddff4148f5661691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df38384db305ed22e43400ad1211dcf5f514749b0ad2bc89ddff4148f5661691->enter($__internal_df38384db305ed22e43400ad1211dcf5f514749b0ad2bc89ddff4148f5661691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_90a3b622269b4132752dfbe7f454082a71ac3b04eb1f62c2f85dad3cb42af7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a3b622269b4132752dfbe7f454082a71ac3b04eb1f62c2f85dad3cb42af7d5->enter($__internal_90a3b622269b4132752dfbe7f454082a71ac3b04eb1f62c2f85dad3cb42af7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_df38384db305ed22e43400ad1211dcf5f514749b0ad2bc89ddff4148f5661691->leave($__internal_df38384db305ed22e43400ad1211dcf5f514749b0ad2bc89ddff4148f5661691_prof);

        
        $__internal_90a3b622269b4132752dfbe7f454082a71ac3b04eb1f62c2f85dad3cb42af7d5->leave($__internal_90a3b622269b4132752dfbe7f454082a71ac3b04eb1f62c2f85dad3cb42af7d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
