<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f53598199cc3172408221a89a9eac1511d4f127300a5f528a0185e5de92d91d2 extends Twig_Template
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
        $__internal_2d0b94270262b66abfef818f8b9fcd6270e42789c6e9c8e2825fc578a13acd6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0b94270262b66abfef818f8b9fcd6270e42789c6e9c8e2825fc578a13acd6a->enter($__internal_2d0b94270262b66abfef818f8b9fcd6270e42789c6e9c8e2825fc578a13acd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dce1c0e75141450f29626716a8435677cd05bf144608ea5290ec8755c613b726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce1c0e75141450f29626716a8435677cd05bf144608ea5290ec8755c613b726->enter($__internal_dce1c0e75141450f29626716a8435677cd05bf144608ea5290ec8755c613b726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d0b94270262b66abfef818f8b9fcd6270e42789c6e9c8e2825fc578a13acd6a->leave($__internal_2d0b94270262b66abfef818f8b9fcd6270e42789c6e9c8e2825fc578a13acd6a_prof);

        
        $__internal_dce1c0e75141450f29626716a8435677cd05bf144608ea5290ec8755c613b726->leave($__internal_dce1c0e75141450f29626716a8435677cd05bf144608ea5290ec8755c613b726_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_110316b4711988ebff6ca7026471976a303700868bfe10bc6681b0f2ecc012b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110316b4711988ebff6ca7026471976a303700868bfe10bc6681b0f2ecc012b0->enter($__internal_110316b4711988ebff6ca7026471976a303700868bfe10bc6681b0f2ecc012b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c13c43008adb3d8256360ac7df71bfc22ff31f911844876b02e5a83a89b784a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c13c43008adb3d8256360ac7df71bfc22ff31f911844876b02e5a83a89b784a->enter($__internal_6c13c43008adb3d8256360ac7df71bfc22ff31f911844876b02e5a83a89b784a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6c13c43008adb3d8256360ac7df71bfc22ff31f911844876b02e5a83a89b784a->leave($__internal_6c13c43008adb3d8256360ac7df71bfc22ff31f911844876b02e5a83a89b784a_prof);

        
        $__internal_110316b4711988ebff6ca7026471976a303700868bfe10bc6681b0f2ecc012b0->leave($__internal_110316b4711988ebff6ca7026471976a303700868bfe10bc6681b0f2ecc012b0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26c4dd656e9e1ba7606d13a521e8c45a585119c4d40ee606de1f1d0f55593438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c4dd656e9e1ba7606d13a521e8c45a585119c4d40ee606de1f1d0f55593438->enter($__internal_26c4dd656e9e1ba7606d13a521e8c45a585119c4d40ee606de1f1d0f55593438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f83ffe6f7f88b8f05c346816fdf10b963278e4b3b9a7d0b407d4883d1d0c1b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83ffe6f7f88b8f05c346816fdf10b963278e4b3b9a7d0b407d4883d1d0c1b38->enter($__internal_f83ffe6f7f88b8f05c346816fdf10b963278e4b3b9a7d0b407d4883d1d0c1b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f83ffe6f7f88b8f05c346816fdf10b963278e4b3b9a7d0b407d4883d1d0c1b38->leave($__internal_f83ffe6f7f88b8f05c346816fdf10b963278e4b3b9a7d0b407d4883d1d0c1b38_prof);

        
        $__internal_26c4dd656e9e1ba7606d13a521e8c45a585119c4d40ee606de1f1d0f55593438->leave($__internal_26c4dd656e9e1ba7606d13a521e8c45a585119c4d40ee606de1f1d0f55593438_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa9a369a6b485c29cc2bfccb52d7ddf47e5150009c1c455f346e9436c94e15bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9a369a6b485c29cc2bfccb52d7ddf47e5150009c1c455f346e9436c94e15bf->enter($__internal_aa9a369a6b485c29cc2bfccb52d7ddf47e5150009c1c455f346e9436c94e15bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7123be14c1d006f5fdb523a79b83b7eaab3bbc76c0093c152041716ced668e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7123be14c1d006f5fdb523a79b83b7eaab3bbc76c0093c152041716ced668e3->enter($__internal_f7123be14c1d006f5fdb523a79b83b7eaab3bbc76c0093c152041716ced668e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_f7123be14c1d006f5fdb523a79b83b7eaab3bbc76c0093c152041716ced668e3->leave($__internal_f7123be14c1d006f5fdb523a79b83b7eaab3bbc76c0093c152041716ced668e3_prof);

        
        $__internal_aa9a369a6b485c29cc2bfccb52d7ddf47e5150009c1c455f346e9436c94e15bf->leave($__internal_aa9a369a6b485c29cc2bfccb52d7ddf47e5150009c1c455f346e9436c94e15bf_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/petras/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
