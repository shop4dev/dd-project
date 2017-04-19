<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_439babb4dd694130755fe84d4f6f45cedc5495227eefcfcfb935f592abc1cfcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7de3a257aa6ff23ca75e6df8e1cf37ce3cc2d36cc8c14d1c49167a404defc9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7de3a257aa6ff23ca75e6df8e1cf37ce3cc2d36cc8c14d1c49167a404defc9f->enter($__internal_b7de3a257aa6ff23ca75e6df8e1cf37ce3cc2d36cc8c14d1c49167a404defc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6770af6d90fa8a0ee74e531a38cd04bb50ac6ee086abe69039dc3a4553a8b281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6770af6d90fa8a0ee74e531a38cd04bb50ac6ee086abe69039dc3a4553a8b281->enter($__internal_6770af6d90fa8a0ee74e531a38cd04bb50ac6ee086abe69039dc3a4553a8b281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b7de3a257aa6ff23ca75e6df8e1cf37ce3cc2d36cc8c14d1c49167a404defc9f->leave($__internal_b7de3a257aa6ff23ca75e6df8e1cf37ce3cc2d36cc8c14d1c49167a404defc9f_prof);

        
        $__internal_6770af6d90fa8a0ee74e531a38cd04bb50ac6ee086abe69039dc3a4553a8b281->leave($__internal_6770af6d90fa8a0ee74e531a38cd04bb50ac6ee086abe69039dc3a4553a8b281_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3ea4468e3392feed556fb771ef6bbb7014b37d0c1d42f2a0c57066cec69208f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ea4468e3392feed556fb771ef6bbb7014b37d0c1d42f2a0c57066cec69208f->enter($__internal_f3ea4468e3392feed556fb771ef6bbb7014b37d0c1d42f2a0c57066cec69208f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fff03cad76522eef11ce4753d7b46ade5442837f959d690d9801bc0471990c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff03cad76522eef11ce4753d7b46ade5442837f959d690d9801bc0471990c72->enter($__internal_fff03cad76522eef11ce4753d7b46ade5442837f959d690d9801bc0471990c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fff03cad76522eef11ce4753d7b46ade5442837f959d690d9801bc0471990c72->leave($__internal_fff03cad76522eef11ce4753d7b46ade5442837f959d690d9801bc0471990c72_prof);

        
        $__internal_f3ea4468e3392feed556fb771ef6bbb7014b37d0c1d42f2a0c57066cec69208f->leave($__internal_f3ea4468e3392feed556fb771ef6bbb7014b37d0c1d42f2a0c57066cec69208f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
