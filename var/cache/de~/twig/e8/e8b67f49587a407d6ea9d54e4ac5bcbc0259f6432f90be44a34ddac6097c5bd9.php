<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_04b0d5b68b2e7cad0dd94f8a266e92ef18dc421a23faaba9704df6a5f3ed9acd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_670bbce8f587251ed9af0a2b97278ea21b4e6290da7643334141659421b843a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670bbce8f587251ed9af0a2b97278ea21b4e6290da7643334141659421b843a3->enter($__internal_670bbce8f587251ed9af0a2b97278ea21b4e6290da7643334141659421b843a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6661438b56a8af6e828ecadb26198d67199b8b5cb62b4d1c957167bf651a0908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6661438b56a8af6e828ecadb26198d67199b8b5cb62b4d1c957167bf651a0908->enter($__internal_6661438b56a8af6e828ecadb26198d67199b8b5cb62b4d1c957167bf651a0908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_670bbce8f587251ed9af0a2b97278ea21b4e6290da7643334141659421b843a3->leave($__internal_670bbce8f587251ed9af0a2b97278ea21b4e6290da7643334141659421b843a3_prof);

        
        $__internal_6661438b56a8af6e828ecadb26198d67199b8b5cb62b4d1c957167bf651a0908->leave($__internal_6661438b56a8af6e828ecadb26198d67199b8b5cb62b4d1c957167bf651a0908_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_535b8e6154e72bbf7d72d61b7714a60799b7c2a80b58e05bac08bc9f55960826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535b8e6154e72bbf7d72d61b7714a60799b7c2a80b58e05bac08bc9f55960826->enter($__internal_535b8e6154e72bbf7d72d61b7714a60799b7c2a80b58e05bac08bc9f55960826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f1ed3f0b5aeb57bad605c5873c6e624a7537bee77ac2e9410e6aff851c6c986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1ed3f0b5aeb57bad605c5873c6e624a7537bee77ac2e9410e6aff851c6c986->enter($__internal_1f1ed3f0b5aeb57bad605c5873c6e624a7537bee77ac2e9410e6aff851c6c986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1f1ed3f0b5aeb57bad605c5873c6e624a7537bee77ac2e9410e6aff851c6c986->leave($__internal_1f1ed3f0b5aeb57bad605c5873c6e624a7537bee77ac2e9410e6aff851c6c986_prof);

        
        $__internal_535b8e6154e72bbf7d72d61b7714a60799b7c2a80b58e05bac08bc9f55960826->leave($__internal_535b8e6154e72bbf7d72d61b7714a60799b7c2a80b58e05bac08bc9f55960826_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_01e18e56809df25f0dcd607d9b8c85c0347052d0b9327b6926701f88298d09b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e18e56809df25f0dcd607d9b8c85c0347052d0b9327b6926701f88298d09b2->enter($__internal_01e18e56809df25f0dcd607d9b8c85c0347052d0b9327b6926701f88298d09b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b677698239477f0d276d5c50131db30375596a979a9da9f5fb63eb007f2cab9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b677698239477f0d276d5c50131db30375596a979a9da9f5fb63eb007f2cab9a->enter($__internal_b677698239477f0d276d5c50131db30375596a979a9da9f5fb63eb007f2cab9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b677698239477f0d276d5c50131db30375596a979a9da9f5fb63eb007f2cab9a->leave($__internal_b677698239477f0d276d5c50131db30375596a979a9da9f5fb63eb007f2cab9a_prof);

        
        $__internal_01e18e56809df25f0dcd607d9b8c85c0347052d0b9327b6926701f88298d09b2->leave($__internal_01e18e56809df25f0dcd607d9b8c85c0347052d0b9327b6926701f88298d09b2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_06a068a1cabf42caf979cccf3a06a18de4a4b04c344419d3f2d2c6e9a13ba2d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a068a1cabf42caf979cccf3a06a18de4a4b04c344419d3f2d2c6e9a13ba2d4->enter($__internal_06a068a1cabf42caf979cccf3a06a18de4a4b04c344419d3f2d2c6e9a13ba2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cce9c86fb757ff637a2e8433a54eeafec305118ef3a7944c150b19df33d1b145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce9c86fb757ff637a2e8433a54eeafec305118ef3a7944c150b19df33d1b145->enter($__internal_cce9c86fb757ff637a2e8433a54eeafec305118ef3a7944c150b19df33d1b145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_cce9c86fb757ff637a2e8433a54eeafec305118ef3a7944c150b19df33d1b145->leave($__internal_cce9c86fb757ff637a2e8433a54eeafec305118ef3a7944c150b19df33d1b145_prof);

        
        $__internal_06a068a1cabf42caf979cccf3a06a18de4a4b04c344419d3f2d2c6e9a13ba2d4->leave($__internal_06a068a1cabf42caf979cccf3a06a18de4a4b04c344419d3f2d2c6e9a13ba2d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/tommar5/tasks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
