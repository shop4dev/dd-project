<?php

/* todo/edit.html.twig */
class __TwigTemplate_f625d4c0c911c41b73ecac76250c7ede7f4010a17e793f4891931697fb711036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("todo/base.html.twig", "todo/edit.html.twig", 1);
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
        $__internal_0558d8d3b732b1c431cf13c707fa8e43ecf983a48da4cd817f36fadeff0a1c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0558d8d3b732b1c431cf13c707fa8e43ecf983a48da4cd817f36fadeff0a1c98->enter($__internal_0558d8d3b732b1c431cf13c707fa8e43ecf983a48da4cd817f36fadeff0a1c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $__internal_28ea1cad6c6018f5415e6c744b0449a92f7b7945af39de21d8cd03ff3a7aea2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ea1cad6c6018f5415e6c744b0449a92f7b7945af39de21d8cd03ff3a7aea2c->enter($__internal_28ea1cad6c6018f5415e6c744b0449a92f7b7945af39de21d8cd03ff3a7aea2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0558d8d3b732b1c431cf13c707fa8e43ecf983a48da4cd817f36fadeff0a1c98->leave($__internal_0558d8d3b732b1c431cf13c707fa8e43ecf983a48da4cd817f36fadeff0a1c98_prof);

        
        $__internal_28ea1cad6c6018f5415e6c744b0449a92f7b7945af39de21d8cd03ff3a7aea2c->leave($__internal_28ea1cad6c6018f5415e6c744b0449a92f7b7945af39de21d8cd03ff3a7aea2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e80cb79e75a875cb5735a154f12c611cdd64d7eb928faca340fbc4abcf8d02be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80cb79e75a875cb5735a154f12c611cdd64d7eb928faca340fbc4abcf8d02be->enter($__internal_e80cb79e75a875cb5735a154f12c611cdd64d7eb928faca340fbc4abcf8d02be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04940cb83d4c63916276045804d02754cd173ea0e317aa5194d06ed17fe067d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04940cb83d4c63916276045804d02754cd173ea0e317aa5194d06ed17fe067d0->enter($__internal_04940cb83d4c63916276045804d02754cd173ea0e317aa5194d06ed17fe067d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h2 class=\"page-header\">Edit Todo</h2>
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

";
        
        $__internal_04940cb83d4c63916276045804d02754cd173ea0e317aa5194d06ed17fe067d0->leave($__internal_04940cb83d4c63916276045804d02754cd173ea0e317aa5194d06ed17fe067d0_prof);

        
        $__internal_e80cb79e75a875cb5735a154f12c611cdd64d7eb928faca340fbc4abcf8d02be->leave($__internal_e80cb79e75a875cb5735a154f12c611cdd64d7eb928faca340fbc4abcf8d02be_prof);

    }

    public function getTemplateName()
    {
        return "todo/edit.html.twig";
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

    <h2 class=\"page-header\">Edit Todo</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

{% endblock %}", "todo/edit.html.twig", "/home/petras/dd-project/app/Resources/views/todo/edit.html.twig");
    }
}
