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
        $__internal_854c44ef3d3cdb3cd2d97c1e3b771548fcf14404bda264c6424664e9ecf33f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854c44ef3d3cdb3cd2d97c1e3b771548fcf14404bda264c6424664e9ecf33f7e->enter($__internal_854c44ef3d3cdb3cd2d97c1e3b771548fcf14404bda264c6424664e9ecf33f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_24fc593547b2779bb651562aa418053d3160719dbd5db5d57aff07eb77a7ea21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fc593547b2779bb651562aa418053d3160719dbd5db5d57aff07eb77a7ea21->enter($__internal_24fc593547b2779bb651562aa418053d3160719dbd5db5d57aff07eb77a7ea21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_854c44ef3d3cdb3cd2d97c1e3b771548fcf14404bda264c6424664e9ecf33f7e->leave($__internal_854c44ef3d3cdb3cd2d97c1e3b771548fcf14404bda264c6424664e9ecf33f7e_prof);

        
        $__internal_24fc593547b2779bb651562aa418053d3160719dbd5db5d57aff07eb77a7ea21->leave($__internal_24fc593547b2779bb651562aa418053d3160719dbd5db5d57aff07eb77a7ea21_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f83d205738a98c25e8daf58ebaecce2805578c47558826c677dff142df4cf26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f83d205738a98c25e8daf58ebaecce2805578c47558826c677dff142df4cf26->enter($__internal_1f83d205738a98c25e8daf58ebaecce2805578c47558826c677dff142df4cf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6d34761c1cf97c279cca03557867e2f000ad7cfdbf544b071c39ae337ea6d3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d34761c1cf97c279cca03557867e2f000ad7cfdbf544b071c39ae337ea6d3ac->enter($__internal_6d34761c1cf97c279cca03557867e2f000ad7cfdbf544b071c39ae337ea6d3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d34761c1cf97c279cca03557867e2f000ad7cfdbf544b071c39ae337ea6d3ac->leave($__internal_6d34761c1cf97c279cca03557867e2f000ad7cfdbf544b071c39ae337ea6d3ac_prof);

        
        $__internal_1f83d205738a98c25e8daf58ebaecce2805578c47558826c677dff142df4cf26->leave($__internal_1f83d205738a98c25e8daf58ebaecce2805578c47558826c677dff142df4cf26_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b03e2e1af1208f7829141e959ad7cc5b5b9bbe5e8cd5a4c3753380e0c49ce71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b03e2e1af1208f7829141e959ad7cc5b5b9bbe5e8cd5a4c3753380e0c49ce71->enter($__internal_5b03e2e1af1208f7829141e959ad7cc5b5b9bbe5e8cd5a4c3753380e0c49ce71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e7f7e160ba7c27190565a8924bf4f0e092ac3e3df725978357c55b1832eb64da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f7e160ba7c27190565a8924bf4f0e092ac3e3df725978357c55b1832eb64da->enter($__internal_e7f7e160ba7c27190565a8924bf4f0e092ac3e3df725978357c55b1832eb64da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e7f7e160ba7c27190565a8924bf4f0e092ac3e3df725978357c55b1832eb64da->leave($__internal_e7f7e160ba7c27190565a8924bf4f0e092ac3e3df725978357c55b1832eb64da_prof);

        
        $__internal_5b03e2e1af1208f7829141e959ad7cc5b5b9bbe5e8cd5a4c3753380e0c49ce71->leave($__internal_5b03e2e1af1208f7829141e959ad7cc5b5b9bbe5e8cd5a4c3753380e0c49ce71_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a26a7e4616baa384692b38c20d5f704dd496b266e2e0b724f287047e9e27801f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26a7e4616baa384692b38c20d5f704dd496b266e2e0b724f287047e9e27801f->enter($__internal_a26a7e4616baa384692b38c20d5f704dd496b266e2e0b724f287047e9e27801f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c97973dd069d635182e7fa18120a6ad007ec438219622b544245f22162d8e3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97973dd069d635182e7fa18120a6ad007ec438219622b544245f22162d8e3f3->enter($__internal_c97973dd069d635182e7fa18120a6ad007ec438219622b544245f22162d8e3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c97973dd069d635182e7fa18120a6ad007ec438219622b544245f22162d8e3f3->leave($__internal_c97973dd069d635182e7fa18120a6ad007ec438219622b544245f22162d8e3f3_prof);

        
        $__internal_a26a7e4616baa384692b38c20d5f704dd496b266e2e0b724f287047e9e27801f->leave($__internal_a26a7e4616baa384692b38c20d5f704dd496b266e2e0b724f287047e9e27801f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/petras/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
