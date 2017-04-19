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
        $__internal_c9250a05dc5d7e15938e01579bc476be14051ebf61236eead9b60a1242791743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9250a05dc5d7e15938e01579bc476be14051ebf61236eead9b60a1242791743->enter($__internal_c9250a05dc5d7e15938e01579bc476be14051ebf61236eead9b60a1242791743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b2913e4cd7746f92c8a1744c853808b961c52d87199638da85eb8c954e54ddd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2913e4cd7746f92c8a1744c853808b961c52d87199638da85eb8c954e54ddd4->enter($__internal_b2913e4cd7746f92c8a1744c853808b961c52d87199638da85eb8c954e54ddd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9250a05dc5d7e15938e01579bc476be14051ebf61236eead9b60a1242791743->leave($__internal_c9250a05dc5d7e15938e01579bc476be14051ebf61236eead9b60a1242791743_prof);

        
        $__internal_b2913e4cd7746f92c8a1744c853808b961c52d87199638da85eb8c954e54ddd4->leave($__internal_b2913e4cd7746f92c8a1744c853808b961c52d87199638da85eb8c954e54ddd4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47012c73969ac4e1635a248166e791769f20895846581c8955a297e0a1cbebb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47012c73969ac4e1635a248166e791769f20895846581c8955a297e0a1cbebb0->enter($__internal_47012c73969ac4e1635a248166e791769f20895846581c8955a297e0a1cbebb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_68c9b8a6135be542e036765636887c93a59e31ee6d5f6647cce1a1e02f9ab788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c9b8a6135be542e036765636887c93a59e31ee6d5f6647cce1a1e02f9ab788->enter($__internal_68c9b8a6135be542e036765636887c93a59e31ee6d5f6647cce1a1e02f9ab788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_68c9b8a6135be542e036765636887c93a59e31ee6d5f6647cce1a1e02f9ab788->leave($__internal_68c9b8a6135be542e036765636887c93a59e31ee6d5f6647cce1a1e02f9ab788_prof);

        
        $__internal_47012c73969ac4e1635a248166e791769f20895846581c8955a297e0a1cbebb0->leave($__internal_47012c73969ac4e1635a248166e791769f20895846581c8955a297e0a1cbebb0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2abfa78d0a9d5dc7ddab9759617df8835ff90dbeb0ec8d4c4c77b1a91301e529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2abfa78d0a9d5dc7ddab9759617df8835ff90dbeb0ec8d4c4c77b1a91301e529->enter($__internal_2abfa78d0a9d5dc7ddab9759617df8835ff90dbeb0ec8d4c4c77b1a91301e529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bae74810fff643c115815cefff1388c5d55a633036e51f892cb46d7c7ddb1608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae74810fff643c115815cefff1388c5d55a633036e51f892cb46d7c7ddb1608->enter($__internal_bae74810fff643c115815cefff1388c5d55a633036e51f892cb46d7c7ddb1608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bae74810fff643c115815cefff1388c5d55a633036e51f892cb46d7c7ddb1608->leave($__internal_bae74810fff643c115815cefff1388c5d55a633036e51f892cb46d7c7ddb1608_prof);

        
        $__internal_2abfa78d0a9d5dc7ddab9759617df8835ff90dbeb0ec8d4c4c77b1a91301e529->leave($__internal_2abfa78d0a9d5dc7ddab9759617df8835ff90dbeb0ec8d4c4c77b1a91301e529_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a10e281114932c46e1cd994cb2432c5f3c1d0855160b034dcf23fd9f130c0f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10e281114932c46e1cd994cb2432c5f3c1d0855160b034dcf23fd9f130c0f2b->enter($__internal_a10e281114932c46e1cd994cb2432c5f3c1d0855160b034dcf23fd9f130c0f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db979dc41d606bd5e1dca5944885c147929249e5a404f1390374dd4da11b2ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db979dc41d606bd5e1dca5944885c147929249e5a404f1390374dd4da11b2ea7->enter($__internal_db979dc41d606bd5e1dca5944885c147929249e5a404f1390374dd4da11b2ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db979dc41d606bd5e1dca5944885c147929249e5a404f1390374dd4da11b2ea7->leave($__internal_db979dc41d606bd5e1dca5944885c147929249e5a404f1390374dd4da11b2ea7_prof);

        
        $__internal_a10e281114932c46e1cd994cb2432c5f3c1d0855160b034dcf23fd9f130c0f2b->leave($__internal_a10e281114932c46e1cd994cb2432c5f3c1d0855160b034dcf23fd9f130c0f2b_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/tommar5/tasks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
