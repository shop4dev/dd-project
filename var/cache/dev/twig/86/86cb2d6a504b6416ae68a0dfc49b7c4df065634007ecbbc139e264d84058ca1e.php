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
        $__internal_a8d6220b4eb0bb475eee70882dbead0c7cd6664de671042ee1599a733ef705d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d6220b4eb0bb475eee70882dbead0c7cd6664de671042ee1599a733ef705d6->enter($__internal_a8d6220b4eb0bb475eee70882dbead0c7cd6664de671042ee1599a733ef705d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7075c7a24907f61afa72c51522fc5a717df3b95d5c034c674b29a8a794e3fa89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7075c7a24907f61afa72c51522fc5a717df3b95d5c034c674b29a8a794e3fa89->enter($__internal_7075c7a24907f61afa72c51522fc5a717df3b95d5c034c674b29a8a794e3fa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8d6220b4eb0bb475eee70882dbead0c7cd6664de671042ee1599a733ef705d6->leave($__internal_a8d6220b4eb0bb475eee70882dbead0c7cd6664de671042ee1599a733ef705d6_prof);

        
        $__internal_7075c7a24907f61afa72c51522fc5a717df3b95d5c034c674b29a8a794e3fa89->leave($__internal_7075c7a24907f61afa72c51522fc5a717df3b95d5c034c674b29a8a794e3fa89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db8c767ed55aa7ce4965bc73684e91321b8575b18fcb9b3856e38cc767cd423f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8c767ed55aa7ce4965bc73684e91321b8575b18fcb9b3856e38cc767cd423f->enter($__internal_db8c767ed55aa7ce4965bc73684e91321b8575b18fcb9b3856e38cc767cd423f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_430b97db06cb2a201be180ea7e9591361e4c378ca4dba0c0caba2b6bbb31ff63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430b97db06cb2a201be180ea7e9591361e4c378ca4dba0c0caba2b6bbb31ff63->enter($__internal_430b97db06cb2a201be180ea7e9591361e4c378ca4dba0c0caba2b6bbb31ff63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_430b97db06cb2a201be180ea7e9591361e4c378ca4dba0c0caba2b6bbb31ff63->leave($__internal_430b97db06cb2a201be180ea7e9591361e4c378ca4dba0c0caba2b6bbb31ff63_prof);

        
        $__internal_db8c767ed55aa7ce4965bc73684e91321b8575b18fcb9b3856e38cc767cd423f->leave($__internal_db8c767ed55aa7ce4965bc73684e91321b8575b18fcb9b3856e38cc767cd423f_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
