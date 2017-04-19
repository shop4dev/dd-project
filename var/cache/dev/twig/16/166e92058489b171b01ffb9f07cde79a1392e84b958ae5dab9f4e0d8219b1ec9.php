<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f2af994afc1a590952d7500cbef3cccd31c51acf2cb9beff593cb81aaa88ebd9 extends Twig_Template
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
        $__internal_8808ec9afb26c34b1a680be5835bf29b05ca8a0170c298fccaea2754a7127199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8808ec9afb26c34b1a680be5835bf29b05ca8a0170c298fccaea2754a7127199->enter($__internal_8808ec9afb26c34b1a680be5835bf29b05ca8a0170c298fccaea2754a7127199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_826c1eb1360ad3ba8ade7a1adf20cf93074f7da5b4e890e3eb1a62657216cc8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826c1eb1360ad3ba8ade7a1adf20cf93074f7da5b4e890e3eb1a62657216cc8f->enter($__internal_826c1eb1360ad3ba8ade7a1adf20cf93074f7da5b4e890e3eb1a62657216cc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8808ec9afb26c34b1a680be5835bf29b05ca8a0170c298fccaea2754a7127199->leave($__internal_8808ec9afb26c34b1a680be5835bf29b05ca8a0170c298fccaea2754a7127199_prof);

        
        $__internal_826c1eb1360ad3ba8ade7a1adf20cf93074f7da5b4e890e3eb1a62657216cc8f->leave($__internal_826c1eb1360ad3ba8ade7a1adf20cf93074f7da5b4e890e3eb1a62657216cc8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
