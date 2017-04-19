<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ee20e546a617b72acfa3f6b524eceed87a2784458018f669e386512df33bccea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57dfa6954461c494204887d5d29755582b7d75e856aa4862015746ca878041b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57dfa6954461c494204887d5d29755582b7d75e856aa4862015746ca878041b6->enter($__internal_57dfa6954461c494204887d5d29755582b7d75e856aa4862015746ca878041b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_359b71c832cfe805d737de1dbbce79a411e8c3bd2d66c59e6dfe16243e28828f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359b71c832cfe805d737de1dbbce79a411e8c3bd2d66c59e6dfe16243e28828f->enter($__internal_359b71c832cfe805d737de1dbbce79a411e8c3bd2d66c59e6dfe16243e28828f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57dfa6954461c494204887d5d29755582b7d75e856aa4862015746ca878041b6->leave($__internal_57dfa6954461c494204887d5d29755582b7d75e856aa4862015746ca878041b6_prof);

        
        $__internal_359b71c832cfe805d737de1dbbce79a411e8c3bd2d66c59e6dfe16243e28828f->leave($__internal_359b71c832cfe805d737de1dbbce79a411e8c3bd2d66c59e6dfe16243e28828f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dce0ae0472a1cededa345a37d0e74e30b3ddb1c4bf61b8570eb3f27a63607f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce0ae0472a1cededa345a37d0e74e30b3ddb1c4bf61b8570eb3f27a63607f19->enter($__internal_dce0ae0472a1cededa345a37d0e74e30b3ddb1c4bf61b8570eb3f27a63607f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed5ab09e3e016ced30b154c44f01099a1b9b57a15f356f57897d561599d2c9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5ab09e3e016ced30b154c44f01099a1b9b57a15f356f57897d561599d2c9d9->enter($__internal_ed5ab09e3e016ced30b154c44f01099a1b9b57a15f356f57897d561599d2c9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ed5ab09e3e016ced30b154c44f01099a1b9b57a15f356f57897d561599d2c9d9->leave($__internal_ed5ab09e3e016ced30b154c44f01099a1b9b57a15f356f57897d561599d2c9d9_prof);

        
        $__internal_dce0ae0472a1cededa345a37d0e74e30b3ddb1c4bf61b8570eb3f27a63607f19->leave($__internal_dce0ae0472a1cededa345a37d0e74e30b3ddb1c4bf61b8570eb3f27a63607f19_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/tommar5/tasks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
