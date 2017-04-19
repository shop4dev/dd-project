<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bd839a623d41e65c7ad875f8876c26b53612d034a2fd2ba100c18e03a3c8b771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57c69ffacc1ccf90e27886108cf888fdd27aa447faa5f628339dc06720e067df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c69ffacc1ccf90e27886108cf888fdd27aa447faa5f628339dc06720e067df->enter($__internal_57c69ffacc1ccf90e27886108cf888fdd27aa447faa5f628339dc06720e067df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_15e553186bf63de175f0d65293b7e76f8d4382a8ff05270d954bc16d6bcee04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e553186bf63de175f0d65293b7e76f8d4382a8ff05270d954bc16d6bcee04d->enter($__internal_15e553186bf63de175f0d65293b7e76f8d4382a8ff05270d954bc16d6bcee04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57c69ffacc1ccf90e27886108cf888fdd27aa447faa5f628339dc06720e067df->leave($__internal_57c69ffacc1ccf90e27886108cf888fdd27aa447faa5f628339dc06720e067df_prof);

        
        $__internal_15e553186bf63de175f0d65293b7e76f8d4382a8ff05270d954bc16d6bcee04d->leave($__internal_15e553186bf63de175f0d65293b7e76f8d4382a8ff05270d954bc16d6bcee04d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f47b884001a284652b3bb875e4e1c22c3524f27dee8ea0d51ddea83846b1e9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47b884001a284652b3bb875e4e1c22c3524f27dee8ea0d51ddea83846b1e9ab->enter($__internal_f47b884001a284652b3bb875e4e1c22c3524f27dee8ea0d51ddea83846b1e9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8243ed6a6e2fed9bb40e6d2b20c54c31e1a7ee7cd3340461327731212f1d2991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8243ed6a6e2fed9bb40e6d2b20c54c31e1a7ee7cd3340461327731212f1d2991->enter($__internal_8243ed6a6e2fed9bb40e6d2b20c54c31e1a7ee7cd3340461327731212f1d2991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8243ed6a6e2fed9bb40e6d2b20c54c31e1a7ee7cd3340461327731212f1d2991->leave($__internal_8243ed6a6e2fed9bb40e6d2b20c54c31e1a7ee7cd3340461327731212f1d2991_prof);

        
        $__internal_f47b884001a284652b3bb875e4e1c22c3524f27dee8ea0d51ddea83846b1e9ab->leave($__internal_f47b884001a284652b3bb875e4e1c22c3524f27dee8ea0d51ddea83846b1e9ab_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e77182cea1d80860ca3d5b581ed3564c03b3e90a1f403659d304a6d445e9d5d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77182cea1d80860ca3d5b581ed3564c03b3e90a1f403659d304a6d445e9d5d6->enter($__internal_e77182cea1d80860ca3d5b581ed3564c03b3e90a1f403659d304a6d445e9d5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bef741dba445b6cb8fe468067246cff30844ee3d8005eacf48deeeda4e2d6f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef741dba445b6cb8fe468067246cff30844ee3d8005eacf48deeeda4e2d6f17->enter($__internal_bef741dba445b6cb8fe468067246cff30844ee3d8005eacf48deeeda4e2d6f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bef741dba445b6cb8fe468067246cff30844ee3d8005eacf48deeeda4e2d6f17->leave($__internal_bef741dba445b6cb8fe468067246cff30844ee3d8005eacf48deeeda4e2d6f17_prof);

        
        $__internal_e77182cea1d80860ca3d5b581ed3564c03b3e90a1f403659d304a6d445e9d5d6->leave($__internal_e77182cea1d80860ca3d5b581ed3564c03b3e90a1f403659d304a6d445e9d5d6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cea94d86c2a51a9eb3af0bd3d0746923ca352cc3d02db062fd16e2b5b81edfd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea94d86c2a51a9eb3af0bd3d0746923ca352cc3d02db062fd16e2b5b81edfd1->enter($__internal_cea94d86c2a51a9eb3af0bd3d0746923ca352cc3d02db062fd16e2b5b81edfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0797c5dc540c240ac37b9f44a8e57a969135d9ba7d6b7b52f94c63801b51bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0797c5dc540c240ac37b9f44a8e57a969135d9ba7d6b7b52f94c63801b51bc2->enter($__internal_d0797c5dc540c240ac37b9f44a8e57a969135d9ba7d6b7b52f94c63801b51bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d0797c5dc540c240ac37b9f44a8e57a969135d9ba7d6b7b52f94c63801b51bc2->leave($__internal_d0797c5dc540c240ac37b9f44a8e57a969135d9ba7d6b7b52f94c63801b51bc2_prof);

        
        $__internal_cea94d86c2a51a9eb3af0bd3d0746923ca352cc3d02db062fd16e2b5b81edfd1->leave($__internal_cea94d86c2a51a9eb3af0bd3d0746923ca352cc3d02db062fd16e2b5b81edfd1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/tommar5/tasks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
