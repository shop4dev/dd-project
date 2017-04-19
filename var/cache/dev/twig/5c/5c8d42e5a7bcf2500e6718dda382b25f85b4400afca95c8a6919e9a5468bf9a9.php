<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_11148cd946ddc855793cd1d60500c40ac9b1bf7a7b2d256fdd955d5d31a385d5 extends Twig_Template
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
        $__internal_90d02183d2a0c4ce8071e5d843b2a2fbe1ca80ec0f5dfaee7d643184d93d3d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d02183d2a0c4ce8071e5d843b2a2fbe1ca80ec0f5dfaee7d643184d93d3d2e->enter($__internal_90d02183d2a0c4ce8071e5d843b2a2fbe1ca80ec0f5dfaee7d643184d93d3d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5753feb6bfb58c1e85c6d38201f6a20ff0e4b97a8d32462f646dd3977961ec5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5753feb6bfb58c1e85c6d38201f6a20ff0e4b97a8d32462f646dd3977961ec5f->enter($__internal_5753feb6bfb58c1e85c6d38201f6a20ff0e4b97a8d32462f646dd3977961ec5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_90d02183d2a0c4ce8071e5d843b2a2fbe1ca80ec0f5dfaee7d643184d93d3d2e->leave($__internal_90d02183d2a0c4ce8071e5d843b2a2fbe1ca80ec0f5dfaee7d643184d93d3d2e_prof);

        
        $__internal_5753feb6bfb58c1e85c6d38201f6a20ff0e4b97a8d32462f646dd3977961ec5f->leave($__internal_5753feb6bfb58c1e85c6d38201f6a20ff0e4b97a8d32462f646dd3977961ec5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
