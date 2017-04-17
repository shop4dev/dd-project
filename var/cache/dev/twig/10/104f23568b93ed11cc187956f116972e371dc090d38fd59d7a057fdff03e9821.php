<?php

/* todo/details.html.twig */
class __TwigTemplate_7f052f2d71c02bd92e1bc0cbdab47cbcb9530ef1f6fa02b4055940911957d783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("todo/base.html.twig", "todo/details.html.twig", 1);
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
        $__internal_2f77a21bed0b9b147aa4078c6264f91e8d405d9ed14ed488c80e1edc176914f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f77a21bed0b9b147aa4078c6264f91e8d405d9ed14ed488c80e1edc176914f4->enter($__internal_2f77a21bed0b9b147aa4078c6264f91e8d405d9ed14ed488c80e1edc176914f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/details.html.twig"));

        $__internal_65279caad7131e2e6c9524f53bc026f96546e96b19922e802f0e41086ee9f88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65279caad7131e2e6c9524f53bc026f96546e96b19922e802f0e41086ee9f88f->enter($__internal_65279caad7131e2e6c9524f53bc026f96546e96b19922e802f0e41086ee9f88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f77a21bed0b9b147aa4078c6264f91e8d405d9ed14ed488c80e1edc176914f4->leave($__internal_2f77a21bed0b9b147aa4078c6264f91e8d405d9ed14ed488c80e1edc176914f4_prof);

        
        $__internal_65279caad7131e2e6c9524f53bc026f96546e96b19922e802f0e41086ee9f88f->leave($__internal_65279caad7131e2e6c9524f53bc026f96546e96b19922e802f0e41086ee9f88f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df6d953c19babe91541c90474fff79c527d9953ae0a61864080a9c59c003258b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6d953c19babe91541c90474fff79c527d9953ae0a61864080a9c59c003258b->enter($__internal_df6d953c19babe91541c90474fff79c527d9953ae0a61864080a9c59c003258b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e89fd4413806048804fd34d88ff0a5f16d3c87ddcbc0fa3dec7d0273e2aded7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89fd4413806048804fd34d88ff0a5f16d3c87ddcbc0fa3dec7d0273e2aded7b->enter($__internal_e89fd4413806048804fd34d88ff0a5f16d3c87ddcbc0fa3dec7d0273e2aded7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <a href=\"/todos\">Back to Todos</a>
    <hr>
    <h2 class=\"page-header\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new Twig_Error_Runtime('Variable "todo" does not exist.', 7, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new Twig_Error_Runtime('Variable "todo" does not exist.', 9, $this->getSourceContext()); })()), "category", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Description: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new Twig_Error_Runtime('Variable "todo" does not exist.', 10, $this->getSourceContext()); })()), "priority", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Due: <strong>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new Twig_Error_Runtime('Variable "todo" does not exist.', 11, $this->getSourceContext()); })()), "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</strong></li>
    </ul>
    <p>
        ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new Twig_Error_Runtime('Variable "todo" does not exist.', 14, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "
    </p>

";
        
        $__internal_e89fd4413806048804fd34d88ff0a5f16d3c87ddcbc0fa3dec7d0273e2aded7b->leave($__internal_e89fd4413806048804fd34d88ff0a5f16d3c87ddcbc0fa3dec7d0273e2aded7b_prof);

        
        $__internal_df6d953c19babe91541c90474fff79c527d9953ae0a61864080a9c59c003258b->leave($__internal_df6d953c19babe91541c90474fff79c527d9953ae0a61864080a9c59c003258b_prof);

    }

    public function getTemplateName()
    {
        return "todo/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  67 => 11,  63 => 10,  59 => 9,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'todo/base.html.twig' %}

{% block body %}

    <a href=\"/todos\">Back to Todos</a>
    <hr>
    <h2 class=\"page-header\">{{ todo.name }}</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: {{ todo.category }}</li>
        <li class=\"list-group-item\">Description: {{ todo.priority}}</li>
        <li class=\"list-group-item\">Due: <strong>{{ todo.dueDate|date('F j, Y, g:i a')}}</strong></li>
    </ul>
    <p>
        {{ todo.description }}
    </p>

{% endblock %}", "todo/details.html.twig", "/home/emas/Projects/todolist/app/Resources/views/todo/details.html.twig");
    }
}
