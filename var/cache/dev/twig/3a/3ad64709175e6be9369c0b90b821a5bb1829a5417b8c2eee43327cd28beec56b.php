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
        $__internal_71ceaf5a84403e22309192f36a77423abc9a510322dc7a5691867104a005073a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ceaf5a84403e22309192f36a77423abc9a510322dc7a5691867104a005073a->enter($__internal_71ceaf5a84403e22309192f36a77423abc9a510322dc7a5691867104a005073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $__internal_f3db96e8e73e16e9056c906f1eabce3fe920f31bd11e8ec49ac48fc866c568e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3db96e8e73e16e9056c906f1eabce3fe920f31bd11e8ec49ac48fc866c568e2->enter($__internal_f3db96e8e73e16e9056c906f1eabce3fe920f31bd11e8ec49ac48fc866c568e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71ceaf5a84403e22309192f36a77423abc9a510322dc7a5691867104a005073a->leave($__internal_71ceaf5a84403e22309192f36a77423abc9a510322dc7a5691867104a005073a_prof);

        
        $__internal_f3db96e8e73e16e9056c906f1eabce3fe920f31bd11e8ec49ac48fc866c568e2->leave($__internal_f3db96e8e73e16e9056c906f1eabce3fe920f31bd11e8ec49ac48fc866c568e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da07bebaa9f1e7b17375395f923c700c021b8bf87c1a46ed06a5e04a282c4f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da07bebaa9f1e7b17375395f923c700c021b8bf87c1a46ed06a5e04a282c4f8d->enter($__internal_da07bebaa9f1e7b17375395f923c700c021b8bf87c1a46ed06a5e04a282c4f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_929191a93bc86c56acd246a7094f815edc74f0b3b942e08b3b51d651077f857b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929191a93bc86c56acd246a7094f815edc74f0b3b942e08b3b51d651077f857b->enter($__internal_929191a93bc86c56acd246a7094f815edc74f0b3b942e08b3b51d651077f857b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_929191a93bc86c56acd246a7094f815edc74f0b3b942e08b3b51d651077f857b->leave($__internal_929191a93bc86c56acd246a7094f815edc74f0b3b942e08b3b51d651077f857b_prof);

        
        $__internal_da07bebaa9f1e7b17375395f923c700c021b8bf87c1a46ed06a5e04a282c4f8d->leave($__internal_da07bebaa9f1e7b17375395f923c700c021b8bf87c1a46ed06a5e04a282c4f8d_prof);

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

{% endblock %}", "todo/create.html.twig", "/home/petras/dd-project/app/Resources/views/todo/create.html.twig");
    }
}
