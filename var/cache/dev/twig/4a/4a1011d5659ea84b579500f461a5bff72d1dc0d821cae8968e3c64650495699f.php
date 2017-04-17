<?php

/* todo/index.html.twig */
class __TwigTemplate_66f44150d2b8887c472e985facc5b13dc33cf380aeb63dca5ce633c9766783f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("todo/base.html.twig", "todo/index.html.twig", 1);
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
        $__internal_4719a2d942a2fc1c9fa6a45c6606812b2846f6fff78f67066f80d596896e62f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4719a2d942a2fc1c9fa6a45c6606812b2846f6fff78f67066f80d596896e62f8->enter($__internal_4719a2d942a2fc1c9fa6a45c6606812b2846f6fff78f67066f80d596896e62f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $__internal_398098e7791fd617bc63de7203780a0703a2f883e92549dc81f637714bb801f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398098e7791fd617bc63de7203780a0703a2f883e92549dc81f637714bb801f8->enter($__internal_398098e7791fd617bc63de7203780a0703a2f883e92549dc81f637714bb801f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4719a2d942a2fc1c9fa6a45c6606812b2846f6fff78f67066f80d596896e62f8->leave($__internal_4719a2d942a2fc1c9fa6a45c6606812b2846f6fff78f67066f80d596896e62f8_prof);

        
        $__internal_398098e7791fd617bc63de7203780a0703a2f883e92549dc81f637714bb801f8->leave($__internal_398098e7791fd617bc63de7203780a0703a2f883e92549dc81f637714bb801f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b7be9590fcd9fd1411e2d80eff5ea44359e628e79c97129ea58e33c05729fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7be9590fcd9fd1411e2d80eff5ea44359e628e79c97129ea58e33c05729fc1->enter($__internal_5b7be9590fcd9fd1411e2d80eff5ea44359e628e79c97129ea58e33c05729fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c265d50852a747c183a5d85e758d0c708ac78d5a3297789bd4cb831140f16f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c265d50852a747c183a5d85e758d0c708ac78d5a3297789bd4cb831140f16f04->enter($__internal_c265d50852a747c183a5d85e758d0c708ac78d5a3297789bd4cb831140f16f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h2 class=\"page-header\">Latest Todos</h2>

    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Todo</th>
            <th>Due Date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) || array_key_exists("todos", $context) ? $context["todos"] : (function () { throw new Twig_Error_Runtime('Variable "todos" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 18
            echo "        <tr>
            <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "id", array()), "html", null, true);
            echo "</th>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
            <td>
                <a href=\"/todo/details/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
                <a href=\"/todo/edit/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
                <a href=\"/todo/delete/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

";
        
        $__internal_c265d50852a747c183a5d85e758d0c708ac78d5a3297789bd4cb831140f16f04->leave($__internal_c265d50852a747c183a5d85e758d0c708ac78d5a3297789bd4cb831140f16f04_prof);

        
        $__internal_5b7be9590fcd9fd1411e2d80eff5ea44359e628e79c97129ea58e33c05729fc1->leave($__internal_5b7be9590fcd9fd1411e2d80eff5ea44359e628e79c97129ea58e33c05729fc1_prof);

    }

    public function getTemplateName()
    {
        return "todo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  92 => 25,  88 => 24,  84 => 23,  79 => 21,  75 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'todo/base.html.twig' %}

{% block body %}

    <h2 class=\"page-header\">Latest Todos</h2>

    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Todo</th>
            <th>Due Date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        {% for todo in todos %}
        <tr>
            <th scope=\"row\">{{ todo.id }}</th>
            <td>{{ todo.name }}</td>
            <td>{{ todo.dueDate|date('F j, Y, g:i a') }}</td>
            <td>
                <a href=\"/todo/details/{{ todo.id }}\" class=\"btn btn-success\">View</a>
                <a href=\"/todo/edit/{{ todo.id }}\" class=\"btn btn-default\">Edit</a>
                <a href=\"/todo/delete/{{ todo.id }}\" class=\"btn btn-danger\">Delete</a>
            </td>
        </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}", "todo/index.html.twig", "/home/emas/Projects/todolist/app/Resources/views/todo/index.html.twig");
    }
}
