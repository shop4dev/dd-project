<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_37f668905e2e7628dce9aaebcfb0172ba9ea505753ed820d901e53bf77fbdfaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9ab92619b277d39385d63d2c0a89b0cb22910db1783b8885d312f0e51f37aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ab92619b277d39385d63d2c0a89b0cb22910db1783b8885d312f0e51f37aae->enter($__internal_f9ab92619b277d39385d63d2c0a89b0cb22910db1783b8885d312f0e51f37aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8d52bab0c92dd395d16f22c7a28dbf822c1702ba3b5d13ac6678980419af034a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d52bab0c92dd395d16f22c7a28dbf822c1702ba3b5d13ac6678980419af034a->enter($__internal_8d52bab0c92dd395d16f22c7a28dbf822c1702ba3b5d13ac6678980419af034a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9ab92619b277d39385d63d2c0a89b0cb22910db1783b8885d312f0e51f37aae->leave($__internal_f9ab92619b277d39385d63d2c0a89b0cb22910db1783b8885d312f0e51f37aae_prof);

        
        $__internal_8d52bab0c92dd395d16f22c7a28dbf822c1702ba3b5d13ac6678980419af034a->leave($__internal_8d52bab0c92dd395d16f22c7a28dbf822c1702ba3b5d13ac6678980419af034a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_53d401047af7cfc8a2e15c3dfedd1de864fb1d561f8fef1f7dc42889e11bf975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d401047af7cfc8a2e15c3dfedd1de864fb1d561f8fef1f7dc42889e11bf975->enter($__internal_53d401047af7cfc8a2e15c3dfedd1de864fb1d561f8fef1f7dc42889e11bf975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6a5408cebeab46d65525c0d65a536ba4298efed1054778430f445c27305a88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a5408cebeab46d65525c0d65a536ba4298efed1054778430f445c27305a88b->enter($__internal_c6a5408cebeab46d65525c0d65a536ba4298efed1054778430f445c27305a88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c6a5408cebeab46d65525c0d65a536ba4298efed1054778430f445c27305a88b->leave($__internal_c6a5408cebeab46d65525c0d65a536ba4298efed1054778430f445c27305a88b_prof);

        
        $__internal_53d401047af7cfc8a2e15c3dfedd1de864fb1d561f8fef1f7dc42889e11bf975->leave($__internal_53d401047af7cfc8a2e15c3dfedd1de864fb1d561f8fef1f7dc42889e11bf975_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b377804eac24d095e56cbfde92c825c10b3500ba0ac320f1fad3f8149e50687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b377804eac24d095e56cbfde92c825c10b3500ba0ac320f1fad3f8149e50687->enter($__internal_7b377804eac24d095e56cbfde92c825c10b3500ba0ac320f1fad3f8149e50687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b997a2eec61b40c9b38e08135e3eb00cfcdad35880a40539081756f875481988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b997a2eec61b40c9b38e08135e3eb00cfcdad35880a40539081756f875481988->enter($__internal_b997a2eec61b40c9b38e08135e3eb00cfcdad35880a40539081756f875481988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b997a2eec61b40c9b38e08135e3eb00cfcdad35880a40539081756f875481988->leave($__internal_b997a2eec61b40c9b38e08135e3eb00cfcdad35880a40539081756f875481988_prof);

        
        $__internal_7b377804eac24d095e56cbfde92c825c10b3500ba0ac320f1fad3f8149e50687->leave($__internal_7b377804eac24d095e56cbfde92c825c10b3500ba0ac320f1fad3f8149e50687_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
