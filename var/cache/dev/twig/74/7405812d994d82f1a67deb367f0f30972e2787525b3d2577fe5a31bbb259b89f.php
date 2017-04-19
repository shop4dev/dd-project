<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2919079727d4c0081f9ea66c16c5f15aaccc8a6ee6975ab8487472aa858d6c7d extends Twig_Template
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
        $__internal_931973585a088094a5a8f8eeeacf73e1dd92130ee9f6145b8662d7d0de81e0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931973585a088094a5a8f8eeeacf73e1dd92130ee9f6145b8662d7d0de81e0d8->enter($__internal_931973585a088094a5a8f8eeeacf73e1dd92130ee9f6145b8662d7d0de81e0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a6dc194398d03b29b5f6f60b29ed12dd66e4b4ac2f564b43f543bd92bd90e7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6dc194398d03b29b5f6f60b29ed12dd66e4b4ac2f564b43f543bd92bd90e7eb->enter($__internal_a6dc194398d03b29b5f6f60b29ed12dd66e4b4ac2f564b43f543bd92bd90e7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_931973585a088094a5a8f8eeeacf73e1dd92130ee9f6145b8662d7d0de81e0d8->leave($__internal_931973585a088094a5a8f8eeeacf73e1dd92130ee9f6145b8662d7d0de81e0d8_prof);

        
        $__internal_a6dc194398d03b29b5f6f60b29ed12dd66e4b4ac2f564b43f543bd92bd90e7eb->leave($__internal_a6dc194398d03b29b5f6f60b29ed12dd66e4b4ac2f564b43f543bd92bd90e7eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
