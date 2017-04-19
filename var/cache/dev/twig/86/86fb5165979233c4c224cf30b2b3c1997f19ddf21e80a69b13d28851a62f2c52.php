<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_108768bd00bc12379c9ba14ea8d6b197bd65f53a08fd61f7c36f9ac7a18866d4 extends Twig_Template
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
        $__internal_6c49b675dc24ca02d21cc07356b8676f4081fc29da6efb63e14e9cd8aa3f180b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c49b675dc24ca02d21cc07356b8676f4081fc29da6efb63e14e9cd8aa3f180b->enter($__internal_6c49b675dc24ca02d21cc07356b8676f4081fc29da6efb63e14e9cd8aa3f180b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6025fa9981847506e1533e1eface10cc5572cb8071dabe3004224ba7a4e2234c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6025fa9981847506e1533e1eface10cc5572cb8071dabe3004224ba7a4e2234c->enter($__internal_6025fa9981847506e1533e1eface10cc5572cb8071dabe3004224ba7a4e2234c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6c49b675dc24ca02d21cc07356b8676f4081fc29da6efb63e14e9cd8aa3f180b->leave($__internal_6c49b675dc24ca02d21cc07356b8676f4081fc29da6efb63e14e9cd8aa3f180b_prof);

        
        $__internal_6025fa9981847506e1533e1eface10cc5572cb8071dabe3004224ba7a4e2234c->leave($__internal_6025fa9981847506e1533e1eface10cc5572cb8071dabe3004224ba7a4e2234c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
