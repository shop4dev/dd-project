<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9cdd3f8a4cea117afd5817428ba1c79d7bfddb675cfef2859e23d941b66a5f08 extends Twig_Template
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
        $__internal_baf0d07865ff979e92500e6662d2b86bcec4992440850e9259a33830576d8121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baf0d07865ff979e92500e6662d2b86bcec4992440850e9259a33830576d8121->enter($__internal_baf0d07865ff979e92500e6662d2b86bcec4992440850e9259a33830576d8121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f05b83e94aeb540f50e997021803933773e119fd9dd2431dae045562172ee0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05b83e94aeb540f50e997021803933773e119fd9dd2431dae045562172ee0cd->enter($__internal_f05b83e94aeb540f50e997021803933773e119fd9dd2431dae045562172ee0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_baf0d07865ff979e92500e6662d2b86bcec4992440850e9259a33830576d8121->leave($__internal_baf0d07865ff979e92500e6662d2b86bcec4992440850e9259a33830576d8121_prof);

        
        $__internal_f05b83e94aeb540f50e997021803933773e119fd9dd2431dae045562172ee0cd->leave($__internal_f05b83e94aeb540f50e997021803933773e119fd9dd2431dae045562172ee0cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
