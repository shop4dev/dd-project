<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f44077459a34304bb17588a895f3a44c016cc0955be6875e45f6570bdd1956c5 extends Twig_Template
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
        $__internal_cb0afc579b2b52e3a10248ab08e98ce01838dd2edc30a7ceeafb0155f8528087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0afc579b2b52e3a10248ab08e98ce01838dd2edc30a7ceeafb0155f8528087->enter($__internal_cb0afc579b2b52e3a10248ab08e98ce01838dd2edc30a7ceeafb0155f8528087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_fb8880d7acd0580d6e37012f672c67704d8fde583fab71d50bf072fc2e6a26ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8880d7acd0580d6e37012f672c67704d8fde583fab71d50bf072fc2e6a26ac->enter($__internal_fb8880d7acd0580d6e37012f672c67704d8fde583fab71d50bf072fc2e6a26ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cb0afc579b2b52e3a10248ab08e98ce01838dd2edc30a7ceeafb0155f8528087->leave($__internal_cb0afc579b2b52e3a10248ab08e98ce01838dd2edc30a7ceeafb0155f8528087_prof);

        
        $__internal_fb8880d7acd0580d6e37012f672c67704d8fde583fab71d50bf072fc2e6a26ac->leave($__internal_fb8880d7acd0580d6e37012f672c67704d8fde583fab71d50bf072fc2e6a26ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
