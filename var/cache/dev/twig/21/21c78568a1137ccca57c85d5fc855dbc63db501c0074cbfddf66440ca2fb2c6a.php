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
        $__internal_2b290d22c64008edc4af166ee4ee7d7b7a4c410bd2724dd53ee9c7d57a0694a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b290d22c64008edc4af166ee4ee7d7b7a4c410bd2724dd53ee9c7d57a0694a6->enter($__internal_2b290d22c64008edc4af166ee4ee7d7b7a4c410bd2724dd53ee9c7d57a0694a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_36aaab3a19a8b32fbf2c82ea03b1145a8f4c426dc40bfd7f6aa251b2eeed2286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36aaab3a19a8b32fbf2c82ea03b1145a8f4c426dc40bfd7f6aa251b2eeed2286->enter($__internal_36aaab3a19a8b32fbf2c82ea03b1145a8f4c426dc40bfd7f6aa251b2eeed2286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b290d22c64008edc4af166ee4ee7d7b7a4c410bd2724dd53ee9c7d57a0694a6->leave($__internal_2b290d22c64008edc4af166ee4ee7d7b7a4c410bd2724dd53ee9c7d57a0694a6_prof);

        
        $__internal_36aaab3a19a8b32fbf2c82ea03b1145a8f4c426dc40bfd7f6aa251b2eeed2286->leave($__internal_36aaab3a19a8b32fbf2c82ea03b1145a8f4c426dc40bfd7f6aa251b2eeed2286_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2d4a8550a8a7cd0bce655e72aed012ec1c9602b4a5f3637c97e61091e147902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d4a8550a8a7cd0bce655e72aed012ec1c9602b4a5f3637c97e61091e147902->enter($__internal_f2d4a8550a8a7cd0bce655e72aed012ec1c9602b4a5f3637c97e61091e147902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_875919906f9af7ac914824400db90c20f81a8ccd4c54d0a66d43c69e16bc27bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875919906f9af7ac914824400db90c20f81a8ccd4c54d0a66d43c69e16bc27bc->enter($__internal_875919906f9af7ac914824400db90c20f81a8ccd4c54d0a66d43c69e16bc27bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_875919906f9af7ac914824400db90c20f81a8ccd4c54d0a66d43c69e16bc27bc->leave($__internal_875919906f9af7ac914824400db90c20f81a8ccd4c54d0a66d43c69e16bc27bc_prof);

        
        $__internal_f2d4a8550a8a7cd0bce655e72aed012ec1c9602b4a5f3637c97e61091e147902->leave($__internal_f2d4a8550a8a7cd0bce655e72aed012ec1c9602b4a5f3637c97e61091e147902_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9351b9eefa36ef3a30e9fc0f89a6dda2337209e29c95903ff2a84e0659a23301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9351b9eefa36ef3a30e9fc0f89a6dda2337209e29c95903ff2a84e0659a23301->enter($__internal_9351b9eefa36ef3a30e9fc0f89a6dda2337209e29c95903ff2a84e0659a23301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a59e8d5879f280dfc8944349a626586a793cc25e64d314ec91735d394a521f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a59e8d5879f280dfc8944349a626586a793cc25e64d314ec91735d394a521f3->enter($__internal_3a59e8d5879f280dfc8944349a626586a793cc25e64d314ec91735d394a521f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3a59e8d5879f280dfc8944349a626586a793cc25e64d314ec91735d394a521f3->leave($__internal_3a59e8d5879f280dfc8944349a626586a793cc25e64d314ec91735d394a521f3_prof);

        
        $__internal_9351b9eefa36ef3a30e9fc0f89a6dda2337209e29c95903ff2a84e0659a23301->leave($__internal_9351b9eefa36ef3a30e9fc0f89a6dda2337209e29c95903ff2a84e0659a23301_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0346e06eeee03a4f44061d4843640371ec6c773f688ce4cc96d06b447da98c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0346e06eeee03a4f44061d4843640371ec6c773f688ce4cc96d06b447da98c9b->enter($__internal_0346e06eeee03a4f44061d4843640371ec6c773f688ce4cc96d06b447da98c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26f21c78894d3cee21236e62050e3fb0b0927ef193d7e560af06e39fe5ec4390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f21c78894d3cee21236e62050e3fb0b0927ef193d7e560af06e39fe5ec4390->enter($__internal_26f21c78894d3cee21236e62050e3fb0b0927ef193d7e560af06e39fe5ec4390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_26f21c78894d3cee21236e62050e3fb0b0927ef193d7e560af06e39fe5ec4390->leave($__internal_26f21c78894d3cee21236e62050e3fb0b0927ef193d7e560af06e39fe5ec4390_prof);

        
        $__internal_0346e06eeee03a4f44061d4843640371ec6c773f688ce4cc96d06b447da98c9b->leave($__internal_0346e06eeee03a4f44061d4843640371ec6c773f688ce4cc96d06b447da98c9b_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
