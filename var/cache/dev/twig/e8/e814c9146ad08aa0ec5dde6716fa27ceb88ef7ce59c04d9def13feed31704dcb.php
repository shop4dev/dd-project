<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_acfe819b6f4a7232b54f39cdbb3388fd6f0d690a404297663cb5171468e5c743 extends Twig_Template
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
        $__internal_aa124915947dd51d285565f5542fd21f5fb72fbdd06605c5a41c9be73188a181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa124915947dd51d285565f5542fd21f5fb72fbdd06605c5a41c9be73188a181->enter($__internal_aa124915947dd51d285565f5542fd21f5fb72fbdd06605c5a41c9be73188a181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3fa508af195db9cbd37f59b2e2fdc1aabd52eac04394cf4621bb86bb547cbce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa508af195db9cbd37f59b2e2fdc1aabd52eac04394cf4621bb86bb547cbce6->enter($__internal_3fa508af195db9cbd37f59b2e2fdc1aabd52eac04394cf4621bb86bb547cbce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_aa124915947dd51d285565f5542fd21f5fb72fbdd06605c5a41c9be73188a181->leave($__internal_aa124915947dd51d285565f5542fd21f5fb72fbdd06605c5a41c9be73188a181_prof);

        
        $__internal_3fa508af195db9cbd37f59b2e2fdc1aabd52eac04394cf4621bb86bb547cbce6->leave($__internal_3fa508af195db9cbd37f59b2e2fdc1aabd52eac04394cf4621bb86bb547cbce6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
