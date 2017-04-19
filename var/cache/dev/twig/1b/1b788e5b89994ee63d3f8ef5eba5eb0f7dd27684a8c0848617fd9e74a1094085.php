<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e32fe7bbc587592d7d02b52fb0d248e7f6247282752466e0f9c5031b2c7e618c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_dec2784cfb61dfe19055b053ebc21c5141a26c417e72252eaca899d5a6ae3130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec2784cfb61dfe19055b053ebc21c5141a26c417e72252eaca899d5a6ae3130->enter($__internal_dec2784cfb61dfe19055b053ebc21c5141a26c417e72252eaca899d5a6ae3130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_202d89274a74ead79d032e9e736e18c383fa6929dd50efef99528d98bcf8ba8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202d89274a74ead79d032e9e736e18c383fa6929dd50efef99528d98bcf8ba8b->enter($__internal_202d89274a74ead79d032e9e736e18c383fa6929dd50efef99528d98bcf8ba8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dec2784cfb61dfe19055b053ebc21c5141a26c417e72252eaca899d5a6ae3130->leave($__internal_dec2784cfb61dfe19055b053ebc21c5141a26c417e72252eaca899d5a6ae3130_prof);

        
        $__internal_202d89274a74ead79d032e9e736e18c383fa6929dd50efef99528d98bcf8ba8b->leave($__internal_202d89274a74ead79d032e9e736e18c383fa6929dd50efef99528d98bcf8ba8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb016e9e07e46f61de462fa473624474da2b41ba2894186da9ea7e2623bf76ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb016e9e07e46f61de462fa473624474da2b41ba2894186da9ea7e2623bf76ef->enter($__internal_bb016e9e07e46f61de462fa473624474da2b41ba2894186da9ea7e2623bf76ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_23f63521bc644fafba8a85c54136d8e389ea438d061144d449f4d319a22235d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f63521bc644fafba8a85c54136d8e389ea438d061144d449f4d319a22235d0->enter($__internal_23f63521bc644fafba8a85c54136d8e389ea438d061144d449f4d319a22235d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_23f63521bc644fafba8a85c54136d8e389ea438d061144d449f4d319a22235d0->leave($__internal_23f63521bc644fafba8a85c54136d8e389ea438d061144d449f4d319a22235d0_prof);

        
        $__internal_bb016e9e07e46f61de462fa473624474da2b41ba2894186da9ea7e2623bf76ef->leave($__internal_bb016e9e07e46f61de462fa473624474da2b41ba2894186da9ea7e2623bf76ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d24c71f189b776c489ae802f58b62427376e9297d0d0c2335e8361b5fbc5845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d24c71f189b776c489ae802f58b62427376e9297d0d0c2335e8361b5fbc5845->enter($__internal_8d24c71f189b776c489ae802f58b62427376e9297d0d0c2335e8361b5fbc5845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0c69c0deb404893f8c8ff8bf0a6299e1565a629acda2157dd8d945cc2fdaf489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c69c0deb404893f8c8ff8bf0a6299e1565a629acda2157dd8d945cc2fdaf489->enter($__internal_0c69c0deb404893f8c8ff8bf0a6299e1565a629acda2157dd8d945cc2fdaf489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c69c0deb404893f8c8ff8bf0a6299e1565a629acda2157dd8d945cc2fdaf489->leave($__internal_0c69c0deb404893f8c8ff8bf0a6299e1565a629acda2157dd8d945cc2fdaf489_prof);

        
        $__internal_8d24c71f189b776c489ae802f58b62427376e9297d0d0c2335e8361b5fbc5845->leave($__internal_8d24c71f189b776c489ae802f58b62427376e9297d0d0c2335e8361b5fbc5845_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_338dab0bbbb8023dced225e74f0fdb888c10be1e4a8825b795ec1921c720f5e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338dab0bbbb8023dced225e74f0fdb888c10be1e4a8825b795ec1921c720f5e6->enter($__internal_338dab0bbbb8023dced225e74f0fdb888c10be1e4a8825b795ec1921c720f5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c230969edd06c07fb518c0fdcb802b69742b68b326dc9d7b840fac9d9c1919d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c230969edd06c07fb518c0fdcb802b69742b68b326dc9d7b840fac9d9c1919d3->enter($__internal_c230969edd06c07fb518c0fdcb802b69742b68b326dc9d7b840fac9d9c1919d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c230969edd06c07fb518c0fdcb802b69742b68b326dc9d7b840fac9d9c1919d3->leave($__internal_c230969edd06c07fb518c0fdcb802b69742b68b326dc9d7b840fac9d9c1919d3_prof);

        
        $__internal_338dab0bbbb8023dced225e74f0fdb888c10be1e4a8825b795ec1921c720f5e6->leave($__internal_338dab0bbbb8023dced225e74f0fdb888c10be1e4a8825b795ec1921c720f5e6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
