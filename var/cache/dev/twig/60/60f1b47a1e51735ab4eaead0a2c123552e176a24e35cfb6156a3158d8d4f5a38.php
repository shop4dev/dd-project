<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dfd18cca4f478316a15a30b274128c5a94e2eabab242eb22444292b111f156c9 extends Twig_Template
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
        $__internal_808f5600dda5506e707d09cfb3a5b88c2e3090508fa543821b45581389c59226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808f5600dda5506e707d09cfb3a5b88c2e3090508fa543821b45581389c59226->enter($__internal_808f5600dda5506e707d09cfb3a5b88c2e3090508fa543821b45581389c59226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_84dd35f40b5ac8cbe539877fe39764e9ebf2e3aa2aa23654778dc63b24d939e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84dd35f40b5ac8cbe539877fe39764e9ebf2e3aa2aa23654778dc63b24d939e2->enter($__internal_84dd35f40b5ac8cbe539877fe39764e9ebf2e3aa2aa23654778dc63b24d939e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_808f5600dda5506e707d09cfb3a5b88c2e3090508fa543821b45581389c59226->leave($__internal_808f5600dda5506e707d09cfb3a5b88c2e3090508fa543821b45581389c59226_prof);

        
        $__internal_84dd35f40b5ac8cbe539877fe39764e9ebf2e3aa2aa23654778dc63b24d939e2->leave($__internal_84dd35f40b5ac8cbe539877fe39764e9ebf2e3aa2aa23654778dc63b24d939e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
