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
        $__internal_7fa3ba3733a4ce9683e732443b3a4596a3231fe07a8f539e5cf6f4f735f1ae32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa3ba3733a4ce9683e732443b3a4596a3231fe07a8f539e5cf6f4f735f1ae32->enter($__internal_7fa3ba3733a4ce9683e732443b3a4596a3231fe07a8f539e5cf6f4f735f1ae32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tasks/index.html.twig"));

        $__internal_e6dddc05fb42ac05e5db48d5ad7d58c9fad952cbf349ab4b98e81d28533c24eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6dddc05fb42ac05e5db48d5ad7d58c9fad952cbf349ab4b98e81d28533c24eb->enter($__internal_e6dddc05fb42ac05e5db48d5ad7d58c9fad952cbf349ab4b98e81d28533c24eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tasks/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fa3ba3733a4ce9683e732443b3a4596a3231fe07a8f539e5cf6f4f735f1ae32->leave($__internal_7fa3ba3733a4ce9683e732443b3a4596a3231fe07a8f539e5cf6f4f735f1ae32_prof);

        
        $__internal_e6dddc05fb42ac05e5db48d5ad7d58c9fad952cbf349ab4b98e81d28533c24eb->leave($__internal_e6dddc05fb42ac05e5db48d5ad7d58c9fad952cbf349ab4b98e81d28533c24eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d9a20ab5035208965be16b73a0f22017b80dd0534c1d88664fae56629f2457a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9a20ab5035208965be16b73a0f22017b80dd0534c1d88664fae56629f2457a->enter($__internal_7d9a20ab5035208965be16b73a0f22017b80dd0534c1d88664fae56629f2457a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0c482939e126063705d2f8aa275f950eef6637d4bebb1f897e79c94fe4223d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c482939e126063705d2f8aa275f950eef6637d4bebb1f897e79c94fe4223d0->enter($__internal_b0c482939e126063705d2f8aa275f950eef6637d4bebb1f897e79c94fe4223d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_b0c482939e126063705d2f8aa275f950eef6637d4bebb1f897e79c94fe4223d0->leave($__internal_b0c482939e126063705d2f8aa275f950eef6637d4bebb1f897e79c94fe4223d0_prof);

        
        $__internal_7d9a20ab5035208965be16b73a0f22017b80dd0534c1d88664fae56629f2457a->leave($__internal_7d9a20ab5035208965be16b73a0f22017b80dd0534c1d88664fae56629f2457a_prof);

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

{% endblock body %}", "tasks/index.html.twig", "/home/tommar5/tasks/app/Resources/views/tasks/index.html.twig");
    }
}
