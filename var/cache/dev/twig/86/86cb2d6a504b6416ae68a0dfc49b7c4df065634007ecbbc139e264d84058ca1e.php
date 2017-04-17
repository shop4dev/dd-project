<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fc56cc03328e3d8df3c43e22f6ef798ff6630e720605144e70a6f675fb162816 extends Twig_Template
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
        $__internal_52914c29cc9ec37e8e13705554515365b0996796e5710ee9b2beef6e9e1f6d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52914c29cc9ec37e8e13705554515365b0996796e5710ee9b2beef6e9e1f6d13->enter($__internal_52914c29cc9ec37e8e13705554515365b0996796e5710ee9b2beef6e9e1f6d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3dbeac607a513478f208d2d24fe25387596333df7d90474f90a01c5ecb3b069d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbeac607a513478f208d2d24fe25387596333df7d90474f90a01c5ecb3b069d->enter($__internal_3dbeac607a513478f208d2d24fe25387596333df7d90474f90a01c5ecb3b069d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52914c29cc9ec37e8e13705554515365b0996796e5710ee9b2beef6e9e1f6d13->leave($__internal_52914c29cc9ec37e8e13705554515365b0996796e5710ee9b2beef6e9e1f6d13_prof);

        
        $__internal_3dbeac607a513478f208d2d24fe25387596333df7d90474f90a01c5ecb3b069d->leave($__internal_3dbeac607a513478f208d2d24fe25387596333df7d90474f90a01c5ecb3b069d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a9beb39e7a18bfd32573ab3d40dbcb3b157aafbbd529a97937afdd4ed92e2799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9beb39e7a18bfd32573ab3d40dbcb3b157aafbbd529a97937afdd4ed92e2799->enter($__internal_a9beb39e7a18bfd32573ab3d40dbcb3b157aafbbd529a97937afdd4ed92e2799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f4a4289def17b176b7f8c073c72ef90926c5c5a5af406e164f000e1f85861341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a4289def17b176b7f8c073c72ef90926c5c5a5af406e164f000e1f85861341->enter($__internal_f4a4289def17b176b7f8c073c72ef90926c5c5a5af406e164f000e1f85861341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f4a4289def17b176b7f8c073c72ef90926c5c5a5af406e164f000e1f85861341->leave($__internal_f4a4289def17b176b7f8c073c72ef90926c5c5a5af406e164f000e1f85861341_prof);

        
        $__internal_a9beb39e7a18bfd32573ab3d40dbcb3b157aafbbd529a97937afdd4ed92e2799->leave($__internal_a9beb39e7a18bfd32573ab3d40dbcb3b157aafbbd529a97937afdd4ed92e2799_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/emas/Projects/todolist/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
