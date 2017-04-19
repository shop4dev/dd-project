<?php

/* tasks/index.html.twig */
class __TwigTemplate_b7d054083c52c86c67d1ce2b1af26d468ff8d53ea3097b48a6dd9c5ca1b355c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tasks/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db95a088318001e71fdb3dc126d555a84648e7df984a68f652268c408e7011b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db95a088318001e71fdb3dc126d555a84648e7df984a68f652268c408e7011b2->enter($__internal_db95a088318001e71fdb3dc126d555a84648e7df984a68f652268c408e7011b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tasks/index.html.twig"));

        $__internal_27fe30e09a032d3a2c1450a26237ee3aaff49844af5ed9bed7c309f34b7444a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fe30e09a032d3a2c1450a26237ee3aaff49844af5ed9bed7c309f34b7444a8->enter($__internal_27fe30e09a032d3a2c1450a26237ee3aaff49844af5ed9bed7c309f34b7444a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tasks/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db95a088318001e71fdb3dc126d555a84648e7df984a68f652268c408e7011b2->leave($__internal_db95a088318001e71fdb3dc126d555a84648e7df984a68f652268c408e7011b2_prof);

        
        $__internal_27fe30e09a032d3a2c1450a26237ee3aaff49844af5ed9bed7c309f34b7444a8->leave($__internal_27fe30e09a032d3a2c1450a26237ee3aaff49844af5ed9bed7c309f34b7444a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af2cfc36f5f44eefc2327cef483a36f79cf86e74951da23c706a0553193100b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2cfc36f5f44eefc2327cef483a36f79cf86e74951da23c706a0553193100b4->enter($__internal_af2cfc36f5f44eefc2327cef483a36f79cf86e74951da23c706a0553193100b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7dc5ee619d6092f00859481a4c83291861acfcc07281fb7607ace268117fd499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc5ee619d6092f00859481a4c83291861acfcc07281fb7607ace268117fd499->enter($__internal_7dc5ee619d6092f00859481a4c83291861acfcc07281fb7607ace268117fd499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_7dc5ee619d6092f00859481a4c83291861acfcc07281fb7607ace268117fd499->leave($__internal_7dc5ee619d6092f00859481a4c83291861acfcc07281fb7607ace268117fd499_prof);

        
        $__internal_af2cfc36f5f44eefc2327cef483a36f79cf86e74951da23c706a0553193100b4->leave($__internal_af2cfc36f5f44eefc2327cef483a36f79cf86e74951da23c706a0553193100b4_prof);

    }

    public function getTemplateName()
    {
        return "tasks/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{% endblock body %}", "tasks/index.html.twig", "/home/tommar5/dd-project/app/Resources/views/tasks/index.html.twig");
    }
}
