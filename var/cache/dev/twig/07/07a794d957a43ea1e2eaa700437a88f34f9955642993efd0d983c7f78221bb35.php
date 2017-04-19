<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_008cdc2257fcd3fbc5ae5ed4c8dcfb742e184ed2ea67c98ced25babbd76d79e5 extends Twig_Template
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
        $__internal_7896c1e26f1d688decf0e4e7bd38a60f0c3df39ebf65b5300b11c716a1d72782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7896c1e26f1d688decf0e4e7bd38a60f0c3df39ebf65b5300b11c716a1d72782->enter($__internal_7896c1e26f1d688decf0e4e7bd38a60f0c3df39ebf65b5300b11c716a1d72782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_6732ff3082263da2161d651b036ff3046c59e9b8dc24dcaa615862e4aee36d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6732ff3082263da2161d651b036ff3046c59e9b8dc24dcaa615862e4aee36d23->enter($__internal_6732ff3082263da2161d651b036ff3046c59e9b8dc24dcaa615862e4aee36d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7896c1e26f1d688decf0e4e7bd38a60f0c3df39ebf65b5300b11c716a1d72782->leave($__internal_7896c1e26f1d688decf0e4e7bd38a60f0c3df39ebf65b5300b11c716a1d72782_prof);

        
        $__internal_6732ff3082263da2161d651b036ff3046c59e9b8dc24dcaa615862e4aee36d23->leave($__internal_6732ff3082263da2161d651b036ff3046c59e9b8dc24dcaa615862e4aee36d23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
