<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3a661ebe73fff3d18a348cf3043f93fbb24469c839d6b205865544eb9ecb6155 extends Twig_Template
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
        $__internal_ce02d0982d5f5eaa4da49d252bdcb3ace78cef43e2b0cbe863b1bb1607987e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce02d0982d5f5eaa4da49d252bdcb3ace78cef43e2b0cbe863b1bb1607987e58->enter($__internal_ce02d0982d5f5eaa4da49d252bdcb3ace78cef43e2b0cbe863b1bb1607987e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0870673ce752b4b71772b6694d5c2b796b2c58c021a0ca0eb715280e332ca225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0870673ce752b4b71772b6694d5c2b796b2c58c021a0ca0eb715280e332ca225->enter($__internal_0870673ce752b4b71772b6694d5c2b796b2c58c021a0ca0eb715280e332ca225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ce02d0982d5f5eaa4da49d252bdcb3ace78cef43e2b0cbe863b1bb1607987e58->leave($__internal_ce02d0982d5f5eaa4da49d252bdcb3ace78cef43e2b0cbe863b1bb1607987e58_prof);

        
        $__internal_0870673ce752b4b71772b6694d5c2b796b2c58c021a0ca0eb715280e332ca225->leave($__internal_0870673ce752b4b71772b6694d5c2b796b2c58c021a0ca0eb715280e332ca225_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
