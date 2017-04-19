<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d98e059dec94411996bf41f2474b2307753580b1e1cce53146d32434edb61019 extends Twig_Template
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
        $__internal_c87aa2336a78f52ecef144c44e1cf2bd8d802cfd3b282a5a5db0f2fd0dcbe7a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87aa2336a78f52ecef144c44e1cf2bd8d802cfd3b282a5a5db0f2fd0dcbe7a9->enter($__internal_c87aa2336a78f52ecef144c44e1cf2bd8d802cfd3b282a5a5db0f2fd0dcbe7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_6ac16042d981ce8cfed7c660fac3d73306afe6e92c97cae17c5d50f98c84243a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac16042d981ce8cfed7c660fac3d73306afe6e92c97cae17c5d50f98c84243a->enter($__internal_6ac16042d981ce8cfed7c660fac3d73306afe6e92c97cae17c5d50f98c84243a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c87aa2336a78f52ecef144c44e1cf2bd8d802cfd3b282a5a5db0f2fd0dcbe7a9->leave($__internal_c87aa2336a78f52ecef144c44e1cf2bd8d802cfd3b282a5a5db0f2fd0dcbe7a9_prof);

        
        $__internal_6ac16042d981ce8cfed7c660fac3d73306afe6e92c97cae17c5d50f98c84243a->leave($__internal_6ac16042d981ce8cfed7c660fac3d73306afe6e92c97cae17c5d50f98c84243a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
