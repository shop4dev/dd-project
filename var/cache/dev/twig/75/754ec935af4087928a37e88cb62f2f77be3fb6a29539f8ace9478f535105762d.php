<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dae027eb2981f265b54ea1a4e8e6d99771f230f3406bbec133f56678914f8dbc extends Twig_Template
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
        $__internal_42998e88a20e479cca202b19a44a82aa17792f3ad381b07d46b0d989e6b15c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42998e88a20e479cca202b19a44a82aa17792f3ad381b07d46b0d989e6b15c9d->enter($__internal_42998e88a20e479cca202b19a44a82aa17792f3ad381b07d46b0d989e6b15c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7b9051d4704bbfeaabab0598dd76045b9c5fce96c5f19fecceb7c34e9cdf4f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9051d4704bbfeaabab0598dd76045b9c5fce96c5f19fecceb7c34e9cdf4f79->enter($__internal_7b9051d4704bbfeaabab0598dd76045b9c5fce96c5f19fecceb7c34e9cdf4f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42998e88a20e479cca202b19a44a82aa17792f3ad381b07d46b0d989e6b15c9d->leave($__internal_42998e88a20e479cca202b19a44a82aa17792f3ad381b07d46b0d989e6b15c9d_prof);

        
        $__internal_7b9051d4704bbfeaabab0598dd76045b9c5fce96c5f19fecceb7c34e9cdf4f79->leave($__internal_7b9051d4704bbfeaabab0598dd76045b9c5fce96c5f19fecceb7c34e9cdf4f79_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_931311a115ca8b503c24fb9a34e67d1139304bb666a085cb3467375aca08dd0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931311a115ca8b503c24fb9a34e67d1139304bb666a085cb3467375aca08dd0b->enter($__internal_931311a115ca8b503c24fb9a34e67d1139304bb666a085cb3467375aca08dd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4953d9ec346b395b850f9774f12375fde756057147e8b69e786ea537ee60b934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4953d9ec346b395b850f9774f12375fde756057147e8b69e786ea537ee60b934->enter($__internal_4953d9ec346b395b850f9774f12375fde756057147e8b69e786ea537ee60b934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4953d9ec346b395b850f9774f12375fde756057147e8b69e786ea537ee60b934->leave($__internal_4953d9ec346b395b850f9774f12375fde756057147e8b69e786ea537ee60b934_prof);

        
        $__internal_931311a115ca8b503c24fb9a34e67d1139304bb666a085cb3467375aca08dd0b->leave($__internal_931311a115ca8b503c24fb9a34e67d1139304bb666a085cb3467375aca08dd0b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_278fd282db29d7c233d284f2669dc1c636f36d40f3babfef27eff156171be67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278fd282db29d7c233d284f2669dc1c636f36d40f3babfef27eff156171be67a->enter($__internal_278fd282db29d7c233d284f2669dc1c636f36d40f3babfef27eff156171be67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0425a47480b2a55ee7676ee4b03216b448d4df495072be1cf03b77eeb385f3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0425a47480b2a55ee7676ee4b03216b448d4df495072be1cf03b77eeb385f3fe->enter($__internal_0425a47480b2a55ee7676ee4b03216b448d4df495072be1cf03b77eeb385f3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0425a47480b2a55ee7676ee4b03216b448d4df495072be1cf03b77eeb385f3fe->leave($__internal_0425a47480b2a55ee7676ee4b03216b448d4df495072be1cf03b77eeb385f3fe_prof);

        
        $__internal_278fd282db29d7c233d284f2669dc1c636f36d40f3babfef27eff156171be67a->leave($__internal_278fd282db29d7c233d284f2669dc1c636f36d40f3babfef27eff156171be67a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58a461ef73895ec0207a07aaa4beb870b495bee65f099fe6c44d26d34d676a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a461ef73895ec0207a07aaa4beb870b495bee65f099fe6c44d26d34d676a89->enter($__internal_58a461ef73895ec0207a07aaa4beb870b495bee65f099fe6c44d26d34d676a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_075639eab8c1f9809a3fb368599f18a1f6eff6df8a8a84e146cbc26b88ff6402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075639eab8c1f9809a3fb368599f18a1f6eff6df8a8a84e146cbc26b88ff6402->enter($__internal_075639eab8c1f9809a3fb368599f18a1f6eff6df8a8a84e146cbc26b88ff6402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_075639eab8c1f9809a3fb368599f18a1f6eff6df8a8a84e146cbc26b88ff6402->leave($__internal_075639eab8c1f9809a3fb368599f18a1f6eff6df8a8a84e146cbc26b88ff6402_prof);

        
        $__internal_58a461ef73895ec0207a07aaa4beb870b495bee65f099fe6c44d26d34d676a89->leave($__internal_58a461ef73895ec0207a07aaa4beb870b495bee65f099fe6c44d26d34d676a89_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/emas/Projects/todolist/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
