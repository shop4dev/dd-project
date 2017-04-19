<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_649a726114e9ad95b89d7f5771391a85a90a385287e55e24920a7148e0454577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_311d98b567ecb671f37312e37af5dd3fb741e3a66d9eb178b8ab01ac4e688762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311d98b567ecb671f37312e37af5dd3fb741e3a66d9eb178b8ab01ac4e688762->enter($__internal_311d98b567ecb671f37312e37af5dd3fb741e3a66d9eb178b8ab01ac4e688762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_2c0e178d5f1eddc601d11d7089a907a67e5890436a22b068d5625aad18242625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0e178d5f1eddc601d11d7089a907a67e5890436a22b068d5625aad18242625->enter($__internal_2c0e178d5f1eddc601d11d7089a907a67e5890436a22b068d5625aad18242625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_311d98b567ecb671f37312e37af5dd3fb741e3a66d9eb178b8ab01ac4e688762->leave($__internal_311d98b567ecb671f37312e37af5dd3fb741e3a66d9eb178b8ab01ac4e688762_prof);

        
        $__internal_2c0e178d5f1eddc601d11d7089a907a67e5890436a22b068d5625aad18242625->leave($__internal_2c0e178d5f1eddc601d11d7089a907a67e5890436a22b068d5625aad18242625_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/tommar5/tasks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
