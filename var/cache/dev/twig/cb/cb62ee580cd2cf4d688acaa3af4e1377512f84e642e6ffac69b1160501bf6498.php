<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_81af507a7ea12d70a823f5e96361d0e343d20806cf1d8437f43b7f3f4d4568c8 extends Twig_Template
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
        $__internal_b251e7cac19296352c7b9016d50066aa2eae76b9edcc74db15eb69f00980df36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b251e7cac19296352c7b9016d50066aa2eae76b9edcc74db15eb69f00980df36->enter($__internal_b251e7cac19296352c7b9016d50066aa2eae76b9edcc74db15eb69f00980df36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3e7801c5bcb75ea560f913e958291a9694acfc79da4f1ccb69673ef1d03934da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7801c5bcb75ea560f913e958291a9694acfc79da4f1ccb69673ef1d03934da->enter($__internal_3e7801c5bcb75ea560f913e958291a9694acfc79da4f1ccb69673ef1d03934da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b251e7cac19296352c7b9016d50066aa2eae76b9edcc74db15eb69f00980df36->leave($__internal_b251e7cac19296352c7b9016d50066aa2eae76b9edcc74db15eb69f00980df36_prof);

        
        $__internal_3e7801c5bcb75ea560f913e958291a9694acfc79da4f1ccb69673ef1d03934da->leave($__internal_3e7801c5bcb75ea560f913e958291a9694acfc79da4f1ccb69673ef1d03934da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
