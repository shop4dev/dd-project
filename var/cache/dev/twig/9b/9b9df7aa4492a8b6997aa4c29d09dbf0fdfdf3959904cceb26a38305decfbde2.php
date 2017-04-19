<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_02e82817eba516ee8b0104632d3428a786a93df59bab57737fbd191ef93dbbb8 extends Twig_Template
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
        $__internal_f54c2b3423a745aca4534f675a3affbea52b1f8b5633c6c212c8b6e5939d502d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54c2b3423a745aca4534f675a3affbea52b1f8b5633c6c212c8b6e5939d502d->enter($__internal_f54c2b3423a745aca4534f675a3affbea52b1f8b5633c6c212c8b6e5939d502d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e0416a3640c856b01eb82ba1b2042958a281a2f7e28b436fd8355fb7670f69dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0416a3640c856b01eb82ba1b2042958a281a2f7e28b436fd8355fb7670f69dd->enter($__internal_e0416a3640c856b01eb82ba1b2042958a281a2f7e28b436fd8355fb7670f69dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f54c2b3423a745aca4534f675a3affbea52b1f8b5633c6c212c8b6e5939d502d->leave($__internal_f54c2b3423a745aca4534f675a3affbea52b1f8b5633c6c212c8b6e5939d502d_prof);

        
        $__internal_e0416a3640c856b01eb82ba1b2042958a281a2f7e28b436fd8355fb7670f69dd->leave($__internal_e0416a3640c856b01eb82ba1b2042958a281a2f7e28b436fd8355fb7670f69dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
