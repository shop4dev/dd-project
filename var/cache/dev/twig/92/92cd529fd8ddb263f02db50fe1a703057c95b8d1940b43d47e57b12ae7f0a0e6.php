<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9fe76bd1c2f3bda8d87e9c28cbe4da71db0d8b271dd71a98eb5ec2a2aa1717fa extends Twig_Template
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
        $__internal_9e3b7c61ade25569fedbbd44442c802b38f030ec924bacac7020d55e35c7172c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3b7c61ade25569fedbbd44442c802b38f030ec924bacac7020d55e35c7172c->enter($__internal_9e3b7c61ade25569fedbbd44442c802b38f030ec924bacac7020d55e35c7172c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_bc9c1feddbf69717ba608f611ce6925ce4a64bd13a7071e44c7b699fd1abf7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9c1feddbf69717ba608f611ce6925ce4a64bd13a7071e44c7b699fd1abf7af->enter($__internal_bc9c1feddbf69717ba608f611ce6925ce4a64bd13a7071e44c7b699fd1abf7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9e3b7c61ade25569fedbbd44442c802b38f030ec924bacac7020d55e35c7172c->leave($__internal_9e3b7c61ade25569fedbbd44442c802b38f030ec924bacac7020d55e35c7172c_prof);

        
        $__internal_bc9c1feddbf69717ba608f611ce6925ce4a64bd13a7071e44c7b699fd1abf7af->leave($__internal_bc9c1feddbf69717ba608f611ce6925ce4a64bd13a7071e44c7b699fd1abf7af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
