<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f53598199cc3172408221a89a9eac1511d4f127300a5f528a0185e5de92d91d2 extends Twig_Template
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
        $__internal_2f6c98a04872230f60ca85f46616c9bf26eae181e541f8bbac7f147f7a8099bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6c98a04872230f60ca85f46616c9bf26eae181e541f8bbac7f147f7a8099bc->enter($__internal_2f6c98a04872230f60ca85f46616c9bf26eae181e541f8bbac7f147f7a8099bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a439f842c6a9de1d8ac126291cbd168e817f38c518a23cb43d52589a294c3b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a439f842c6a9de1d8ac126291cbd168e817f38c518a23cb43d52589a294c3b90->enter($__internal_a439f842c6a9de1d8ac126291cbd168e817f38c518a23cb43d52589a294c3b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f6c98a04872230f60ca85f46616c9bf26eae181e541f8bbac7f147f7a8099bc->leave($__internal_2f6c98a04872230f60ca85f46616c9bf26eae181e541f8bbac7f147f7a8099bc_prof);

        
        $__internal_a439f842c6a9de1d8ac126291cbd168e817f38c518a23cb43d52589a294c3b90->leave($__internal_a439f842c6a9de1d8ac126291cbd168e817f38c518a23cb43d52589a294c3b90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_163b07b8ca797dbc3ab78bacea39385abf49dd466a077870123461d8bfd0c8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163b07b8ca797dbc3ab78bacea39385abf49dd466a077870123461d8bfd0c8ce->enter($__internal_163b07b8ca797dbc3ab78bacea39385abf49dd466a077870123461d8bfd0c8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_93323bb31d59a0857cc87f5bc82b72a31d4103cbca316db0114fa6845b5f415e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93323bb31d59a0857cc87f5bc82b72a31d4103cbca316db0114fa6845b5f415e->enter($__internal_93323bb31d59a0857cc87f5bc82b72a31d4103cbca316db0114fa6845b5f415e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_93323bb31d59a0857cc87f5bc82b72a31d4103cbca316db0114fa6845b5f415e->leave($__internal_93323bb31d59a0857cc87f5bc82b72a31d4103cbca316db0114fa6845b5f415e_prof);

        
        $__internal_163b07b8ca797dbc3ab78bacea39385abf49dd466a077870123461d8bfd0c8ce->leave($__internal_163b07b8ca797dbc3ab78bacea39385abf49dd466a077870123461d8bfd0c8ce_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c5eabe0b4bda8e2f38787998ca0b8504e8ca9ea26374782989f7f43cdea6c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5eabe0b4bda8e2f38787998ca0b8504e8ca9ea26374782989f7f43cdea6c51->enter($__internal_6c5eabe0b4bda8e2f38787998ca0b8504e8ca9ea26374782989f7f43cdea6c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e077e8c8a6ea57f301917f20c7ea4c248636baade66f2e9dd9be7f9b4e1187ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e077e8c8a6ea57f301917f20c7ea4c248636baade66f2e9dd9be7f9b4e1187ac->enter($__internal_e077e8c8a6ea57f301917f20c7ea4c248636baade66f2e9dd9be7f9b4e1187ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e077e8c8a6ea57f301917f20c7ea4c248636baade66f2e9dd9be7f9b4e1187ac->leave($__internal_e077e8c8a6ea57f301917f20c7ea4c248636baade66f2e9dd9be7f9b4e1187ac_prof);

        
        $__internal_6c5eabe0b4bda8e2f38787998ca0b8504e8ca9ea26374782989f7f43cdea6c51->leave($__internal_6c5eabe0b4bda8e2f38787998ca0b8504e8ca9ea26374782989f7f43cdea6c51_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5ae71e41697bf8cfd8a437f8e9e9c91c2a59cda7b2beab1b49e4c534bdefdac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ae71e41697bf8cfd8a437f8e9e9c91c2a59cda7b2beab1b49e4c534bdefdac->enter($__internal_f5ae71e41697bf8cfd8a437f8e9e9c91c2a59cda7b2beab1b49e4c534bdefdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_74e188eaa4df52368c11687fdb2c9bc8f698f744e5b945ab7fb07f3050edd171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e188eaa4df52368c11687fdb2c9bc8f698f744e5b945ab7fb07f3050edd171->enter($__internal_74e188eaa4df52368c11687fdb2c9bc8f698f744e5b945ab7fb07f3050edd171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_74e188eaa4df52368c11687fdb2c9bc8f698f744e5b945ab7fb07f3050edd171->leave($__internal_74e188eaa4df52368c11687fdb2c9bc8f698f744e5b945ab7fb07f3050edd171_prof);

        
        $__internal_f5ae71e41697bf8cfd8a437f8e9e9c91c2a59cda7b2beab1b49e4c534bdefdac->leave($__internal_f5ae71e41697bf8cfd8a437f8e9e9c91c2a59cda7b2beab1b49e4c534bdefdac_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/emas/Projects/todolist/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
