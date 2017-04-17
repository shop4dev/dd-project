<?php

/* todo/create.html.twig */
class __TwigTemplate_e2fc07c9049540f19b398620377255e7d3713f604f123966d59388d61184c038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("todo/base.html.twig", "todo/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "todo/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0195430ecaa8f496b54039a7f46fbae214b104adf0a8f6ed492319cd6789df18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0195430ecaa8f496b54039a7f46fbae214b104adf0a8f6ed492319cd6789df18->enter($__internal_0195430ecaa8f496b54039a7f46fbae214b104adf0a8f6ed492319cd6789df18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $__internal_e085907fe1e00b9cd625dd9f5fadd85fdc9d55ee5488e4f3a78a0f4a93943369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e085907fe1e00b9cd625dd9f5fadd85fdc9d55ee5488e4f3a78a0f4a93943369->enter($__internal_e085907fe1e00b9cd625dd9f5fadd85fdc9d55ee5488e4f3a78a0f4a93943369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0195430ecaa8f496b54039a7f46fbae214b104adf0a8f6ed492319cd6789df18->leave($__internal_0195430ecaa8f496b54039a7f46fbae214b104adf0a8f6ed492319cd6789df18_prof);

        
        $__internal_e085907fe1e00b9cd625dd9f5fadd85fdc9d55ee5488e4f3a78a0f4a93943369->leave($__internal_e085907fe1e00b9cd625dd9f5fadd85fdc9d55ee5488e4f3a78a0f4a93943369_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd41d3abb1ddfd1029a424440d3271620e6b195c181aa16e48d0a8d69bf18ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd41d3abb1ddfd1029a424440d3271620e6b195c181aa16e48d0a8d69bf18ad7->enter($__internal_cd41d3abb1ddfd1029a424440d3271620e6b195c181aa16e48d0a8d69bf18ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b70130510cadc445906c4f50adcc7bbca52c5ae56e5e7a3853ebe7708d1e338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b70130510cadc445906c4f50adcc7bbca52c5ae56e5e7a3853ebe7708d1e338->enter($__internal_4b70130510cadc445906c4f50adcc7bbca52c5ae56e5e7a3853ebe7708d1e338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h2 class=\"page-header\">Add New Element</h2>
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "

    <script>
        window.onunload = refreshParent;
        function refreshParent() {
            window.opener.location.reload();
            window.close();
        }
    </script>

";
        
        $__internal_4b70130510cadc445906c4f50adcc7bbca52c5ae56e5e7a3853ebe7708d1e338->leave($__internal_4b70130510cadc445906c4f50adcc7bbca52c5ae56e5e7a3853ebe7708d1e338_prof);

        
        $__internal_cd41d3abb1ddfd1029a424440d3271620e6b195c181aa16e48d0a8d69bf18ad7->leave($__internal_cd41d3abb1ddfd1029a424440d3271620e6b195c181aa16e48d0a8d69bf18ad7_prof);

    }

    public function getTemplateName()
    {
        return "todo/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'todo/base.html.twig' %}

{% block body %}

    <h2 class=\"page-header\">Add New Element</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

    <script>
        window.onunload = refreshParent;
        function refreshParent() {
            window.opener.location.reload();
            window.close();
        }
    </script>

{% endblock %}", "todo/create.html.twig", "/home/emas/Projects/todolist/app/Resources/views/todo/create.html.twig");
    }
}
