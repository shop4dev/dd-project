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
        $__internal_318c7a3ad039d654393c74031051838f2d768bd0f1b7d5a98f313b2716b71296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318c7a3ad039d654393c74031051838f2d768bd0f1b7d5a98f313b2716b71296->enter($__internal_318c7a3ad039d654393c74031051838f2d768bd0f1b7d5a98f313b2716b71296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c4883a7007f906714f20857c5eb5b8240aced3d02174b1e89343741c1a227f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4883a7007f906714f20857c5eb5b8240aced3d02174b1e89343741c1a227f68->enter($__internal_c4883a7007f906714f20857c5eb5b8240aced3d02174b1e89343741c1a227f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_318c7a3ad039d654393c74031051838f2d768bd0f1b7d5a98f313b2716b71296->leave($__internal_318c7a3ad039d654393c74031051838f2d768bd0f1b7d5a98f313b2716b71296_prof);

        
        $__internal_c4883a7007f906714f20857c5eb5b8240aced3d02174b1e89343741c1a227f68->leave($__internal_c4883a7007f906714f20857c5eb5b8240aced3d02174b1e89343741c1a227f68_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_15379663096d35f801a9e38eab4eeaba2deb6f61b08103ab81eb9c913520e5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15379663096d35f801a9e38eab4eeaba2deb6f61b08103ab81eb9c913520e5e4->enter($__internal_15379663096d35f801a9e38eab4eeaba2deb6f61b08103ab81eb9c913520e5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bb8fe3027feba1ba0535d6dca4c6c7f5ab128f0728f448aa9f4f51b05e1abb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8fe3027feba1ba0535d6dca4c6c7f5ab128f0728f448aa9f4f51b05e1abb85->enter($__internal_bb8fe3027feba1ba0535d6dca4c6c7f5ab128f0728f448aa9f4f51b05e1abb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bb8fe3027feba1ba0535d6dca4c6c7f5ab128f0728f448aa9f4f51b05e1abb85->leave($__internal_bb8fe3027feba1ba0535d6dca4c6c7f5ab128f0728f448aa9f4f51b05e1abb85_prof);

        
        $__internal_15379663096d35f801a9e38eab4eeaba2deb6f61b08103ab81eb9c913520e5e4->leave($__internal_15379663096d35f801a9e38eab4eeaba2deb6f61b08103ab81eb9c913520e5e4_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
