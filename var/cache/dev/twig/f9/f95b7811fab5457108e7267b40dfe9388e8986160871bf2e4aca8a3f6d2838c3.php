<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bd839a623d41e65c7ad875f8876c26b53612d034a2fd2ba100c18e03a3c8b771 extends Twig_Template
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
        $__internal_aac034b6ac91872b0d88099d51e028ac4ecc2d9f2e9948abd088285c5ec434b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac034b6ac91872b0d88099d51e028ac4ecc2d9f2e9948abd088285c5ec434b2->enter($__internal_aac034b6ac91872b0d88099d51e028ac4ecc2d9f2e9948abd088285c5ec434b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fd11af480db3cf2ea2a65b6d7f6324ee45d7fd0e62fb1afc8b1b78ba01d9ed43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd11af480db3cf2ea2a65b6d7f6324ee45d7fd0e62fb1afc8b1b78ba01d9ed43->enter($__internal_fd11af480db3cf2ea2a65b6d7f6324ee45d7fd0e62fb1afc8b1b78ba01d9ed43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aac034b6ac91872b0d88099d51e028ac4ecc2d9f2e9948abd088285c5ec434b2->leave($__internal_aac034b6ac91872b0d88099d51e028ac4ecc2d9f2e9948abd088285c5ec434b2_prof);

        
        $__internal_fd11af480db3cf2ea2a65b6d7f6324ee45d7fd0e62fb1afc8b1b78ba01d9ed43->leave($__internal_fd11af480db3cf2ea2a65b6d7f6324ee45d7fd0e62fb1afc8b1b78ba01d9ed43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e4fd75d436b806272f140e28d9be22a147fff329c8c50dbbc2a73ce92a9f827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4fd75d436b806272f140e28d9be22a147fff329c8c50dbbc2a73ce92a9f827->enter($__internal_3e4fd75d436b806272f140e28d9be22a147fff329c8c50dbbc2a73ce92a9f827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_70dccb6bd69f7d04a6be9304d0890f699589c6bb5f01e02c6e6e227126a25a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dccb6bd69f7d04a6be9304d0890f699589c6bb5f01e02c6e6e227126a25a07->enter($__internal_70dccb6bd69f7d04a6be9304d0890f699589c6bb5f01e02c6e6e227126a25a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_70dccb6bd69f7d04a6be9304d0890f699589c6bb5f01e02c6e6e227126a25a07->leave($__internal_70dccb6bd69f7d04a6be9304d0890f699589c6bb5f01e02c6e6e227126a25a07_prof);

        
        $__internal_3e4fd75d436b806272f140e28d9be22a147fff329c8c50dbbc2a73ce92a9f827->leave($__internal_3e4fd75d436b806272f140e28d9be22a147fff329c8c50dbbc2a73ce92a9f827_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e63941f60d46baa3cbd4db812980963a5777b26abe5e1f7ada61679dc2537a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e63941f60d46baa3cbd4db812980963a5777b26abe5e1f7ada61679dc2537a8->enter($__internal_4e63941f60d46baa3cbd4db812980963a5777b26abe5e1f7ada61679dc2537a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d57b91f1098bbcb88134373767b0b6616748e390c3219d8cb3b433629518b72c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57b91f1098bbcb88134373767b0b6616748e390c3219d8cb3b433629518b72c->enter($__internal_d57b91f1098bbcb88134373767b0b6616748e390c3219d8cb3b433629518b72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d57b91f1098bbcb88134373767b0b6616748e390c3219d8cb3b433629518b72c->leave($__internal_d57b91f1098bbcb88134373767b0b6616748e390c3219d8cb3b433629518b72c_prof);

        
        $__internal_4e63941f60d46baa3cbd4db812980963a5777b26abe5e1f7ada61679dc2537a8->leave($__internal_4e63941f60d46baa3cbd4db812980963a5777b26abe5e1f7ada61679dc2537a8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7fbcf503aa8389a2974caabf3c653dac316b55f789bb2c33e1e97473fadc783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fbcf503aa8389a2974caabf3c653dac316b55f789bb2c33e1e97473fadc783->enter($__internal_a7fbcf503aa8389a2974caabf3c653dac316b55f789bb2c33e1e97473fadc783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f0116d93fac4a25a2604fb682310f07c3309e5004df702a009cf52e8e6270b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0116d93fac4a25a2604fb682310f07c3309e5004df702a009cf52e8e6270b36->enter($__internal_f0116d93fac4a25a2604fb682310f07c3309e5004df702a009cf52e8e6270b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f0116d93fac4a25a2604fb682310f07c3309e5004df702a009cf52e8e6270b36->leave($__internal_f0116d93fac4a25a2604fb682310f07c3309e5004df702a009cf52e8e6270b36_prof);

        
        $__internal_a7fbcf503aa8389a2974caabf3c653dac316b55f789bb2c33e1e97473fadc783->leave($__internal_a7fbcf503aa8389a2974caabf3c653dac316b55f789bb2c33e1e97473fadc783_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
