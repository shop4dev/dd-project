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
        $__internal_b5a41c7fb79b5bd5f11a7d585ca69e956f6c26f182d2b77d644b6581a022d14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a41c7fb79b5bd5f11a7d585ca69e956f6c26f182d2b77d644b6581a022d14f->enter($__internal_b5a41c7fb79b5bd5f11a7d585ca69e956f6c26f182d2b77d644b6581a022d14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $__internal_45ff3bc76dcea4dd4c9e7c26fa51580b036d130bc64c12c24e2dd5ba6beb5a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ff3bc76dcea4dd4c9e7c26fa51580b036d130bc64c12c24e2dd5ba6beb5a6c->enter($__internal_45ff3bc76dcea4dd4c9e7c26fa51580b036d130bc64c12c24e2dd5ba6beb5a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5a41c7fb79b5bd5f11a7d585ca69e956f6c26f182d2b77d644b6581a022d14f->leave($__internal_b5a41c7fb79b5bd5f11a7d585ca69e956f6c26f182d2b77d644b6581a022d14f_prof);

        
        $__internal_45ff3bc76dcea4dd4c9e7c26fa51580b036d130bc64c12c24e2dd5ba6beb5a6c->leave($__internal_45ff3bc76dcea4dd4c9e7c26fa51580b036d130bc64c12c24e2dd5ba6beb5a6c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a21e15a32c6ccb286fb5d0494ff7714cd2ac916d42e249361b87c152af563a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21e15a32c6ccb286fb5d0494ff7714cd2ac916d42e249361b87c152af563a14->enter($__internal_a21e15a32c6ccb286fb5d0494ff7714cd2ac916d42e249361b87c152af563a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fecab4149dd58d0b1dc1d9823b0f388020c7967ecc1bf36f4f6322a50b12c689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fecab4149dd58d0b1dc1d9823b0f388020c7967ecc1bf36f4f6322a50b12c689->enter($__internal_fecab4149dd58d0b1dc1d9823b0f388020c7967ecc1bf36f4f6322a50b12c689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <script>
        window.onunload = refreshParent;
        function refreshParent() {
            window.opener.location.reload();
            window.close();
        }
    </script>

";
        
        $__internal_fecab4149dd58d0b1dc1d9823b0f388020c7967ecc1bf36f4f6322a50b12c689->leave($__internal_fecab4149dd58d0b1dc1d9823b0f388020c7967ecc1bf36f4f6322a50b12c689_prof);

        
        $__internal_a21e15a32c6ccb286fb5d0494ff7714cd2ac916d42e249361b87c152af563a14->leave($__internal_a21e15a32c6ccb286fb5d0494ff7714cd2ac916d42e249361b87c152af563a14_prof);

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

    <script>
        window.onunload = refreshParent;
        function refreshParent() {
            window.opener.location.reload();
            window.close();
        }
    </script>

{% endblock %}", "todo/edit.html.twig", "/home/petras/dd-project/app/Resources/views/todo/edit.html.twig");
    }
}
