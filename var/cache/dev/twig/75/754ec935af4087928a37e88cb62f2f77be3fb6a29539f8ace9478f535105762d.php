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
        $__internal_3c91b60d5082178bcd4a96ee3b1429a0edcf8abefcbed15217bfe051f9f1f11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c91b60d5082178bcd4a96ee3b1429a0edcf8abefcbed15217bfe051f9f1f11d->enter($__internal_3c91b60d5082178bcd4a96ee3b1429a0edcf8abefcbed15217bfe051f9f1f11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8326e4fd3a9535ad999513d383791d53b0a4f118c5facfbe0e2709b99e2fea08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8326e4fd3a9535ad999513d383791d53b0a4f118c5facfbe0e2709b99e2fea08->enter($__internal_8326e4fd3a9535ad999513d383791d53b0a4f118c5facfbe0e2709b99e2fea08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c91b60d5082178bcd4a96ee3b1429a0edcf8abefcbed15217bfe051f9f1f11d->leave($__internal_3c91b60d5082178bcd4a96ee3b1429a0edcf8abefcbed15217bfe051f9f1f11d_prof);

        
        $__internal_8326e4fd3a9535ad999513d383791d53b0a4f118c5facfbe0e2709b99e2fea08->leave($__internal_8326e4fd3a9535ad999513d383791d53b0a4f118c5facfbe0e2709b99e2fea08_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c75c3c0ff049dcdb0cd34fb4c9ee1c6ed51c1452b53a0fc27c46ec736ee29bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c75c3c0ff049dcdb0cd34fb4c9ee1c6ed51c1452b53a0fc27c46ec736ee29bc->enter($__internal_4c75c3c0ff049dcdb0cd34fb4c9ee1c6ed51c1452b53a0fc27c46ec736ee29bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7ed3ffb1d31e94f9480f387637d7ab93bf78ceaeab599c821ac66504a7ecf950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed3ffb1d31e94f9480f387637d7ab93bf78ceaeab599c821ac66504a7ecf950->enter($__internal_7ed3ffb1d31e94f9480f387637d7ab93bf78ceaeab599c821ac66504a7ecf950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ed3ffb1d31e94f9480f387637d7ab93bf78ceaeab599c821ac66504a7ecf950->leave($__internal_7ed3ffb1d31e94f9480f387637d7ab93bf78ceaeab599c821ac66504a7ecf950_prof);

        
        $__internal_4c75c3c0ff049dcdb0cd34fb4c9ee1c6ed51c1452b53a0fc27c46ec736ee29bc->leave($__internal_4c75c3c0ff049dcdb0cd34fb4c9ee1c6ed51c1452b53a0fc27c46ec736ee29bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa5702b7ee993b0ba816a9703e5c25e0f7349dc453d61be25b17621780307e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5702b7ee993b0ba816a9703e5c25e0f7349dc453d61be25b17621780307e52->enter($__internal_aa5702b7ee993b0ba816a9703e5c25e0f7349dc453d61be25b17621780307e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ca0b236979c62111356776a7a8954321ee8ead9f6ba3b543c817b463ed246537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0b236979c62111356776a7a8954321ee8ead9f6ba3b543c817b463ed246537->enter($__internal_ca0b236979c62111356776a7a8954321ee8ead9f6ba3b543c817b463ed246537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca0b236979c62111356776a7a8954321ee8ead9f6ba3b543c817b463ed246537->leave($__internal_ca0b236979c62111356776a7a8954321ee8ead9f6ba3b543c817b463ed246537_prof);

        
        $__internal_aa5702b7ee993b0ba816a9703e5c25e0f7349dc453d61be25b17621780307e52->leave($__internal_aa5702b7ee993b0ba816a9703e5c25e0f7349dc453d61be25b17621780307e52_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05f77a56a237e5d6915f082074f90381c14e7b418f81742075bbb1b6d32b06ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f77a56a237e5d6915f082074f90381c14e7b418f81742075bbb1b6d32b06ad->enter($__internal_05f77a56a237e5d6915f082074f90381c14e7b418f81742075bbb1b6d32b06ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e8c28ed052a54f38486f37e0f051e9290568044a6dad98f36edaaf2cf258c051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c28ed052a54f38486f37e0f051e9290568044a6dad98f36edaaf2cf258c051->enter($__internal_e8c28ed052a54f38486f37e0f051e9290568044a6dad98f36edaaf2cf258c051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e8c28ed052a54f38486f37e0f051e9290568044a6dad98f36edaaf2cf258c051->leave($__internal_e8c28ed052a54f38486f37e0f051e9290568044a6dad98f36edaaf2cf258c051_prof);

        
        $__internal_05f77a56a237e5d6915f082074f90381c14e7b418f81742075bbb1b6d32b06ad->leave($__internal_05f77a56a237e5d6915f082074f90381c14e7b418f81742075bbb1b6d32b06ad_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
