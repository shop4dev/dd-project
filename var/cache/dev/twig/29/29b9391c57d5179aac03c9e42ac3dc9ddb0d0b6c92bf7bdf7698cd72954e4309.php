<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5e26efcbe1c826448e0c1aaecbfa1b3e2d894c90c41fa359da6d9141e7f631d4 extends Twig_Template
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
        $__internal_bc257202a9fafc185815b256816540678ecd73bf2d7bf085dce29e3411bad558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc257202a9fafc185815b256816540678ecd73bf2d7bf085dce29e3411bad558->enter($__internal_bc257202a9fafc185815b256816540678ecd73bf2d7bf085dce29e3411bad558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4a2b63214e90a2ded8da4539739a7d1d0814544dcda75b53617c15c0065785e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2b63214e90a2ded8da4539739a7d1d0814544dcda75b53617c15c0065785e3->enter($__internal_4a2b63214e90a2ded8da4539739a7d1d0814544dcda75b53617c15c0065785e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc257202a9fafc185815b256816540678ecd73bf2d7bf085dce29e3411bad558->leave($__internal_bc257202a9fafc185815b256816540678ecd73bf2d7bf085dce29e3411bad558_prof);

        
        $__internal_4a2b63214e90a2ded8da4539739a7d1d0814544dcda75b53617c15c0065785e3->leave($__internal_4a2b63214e90a2ded8da4539739a7d1d0814544dcda75b53617c15c0065785e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_240b83fd6701fc91892019fe0e72e95f619563cc3b823d3a15f89af545c6e3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240b83fd6701fc91892019fe0e72e95f619563cc3b823d3a15f89af545c6e3a7->enter($__internal_240b83fd6701fc91892019fe0e72e95f619563cc3b823d3a15f89af545c6e3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e2327889a0776e5c95f2389e6b3317335e2caabaf36bbe1a2f657b073f2b09f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2327889a0776e5c95f2389e6b3317335e2caabaf36bbe1a2f657b073f2b09f3->enter($__internal_e2327889a0776e5c95f2389e6b3317335e2caabaf36bbe1a2f657b073f2b09f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e2327889a0776e5c95f2389e6b3317335e2caabaf36bbe1a2f657b073f2b09f3->leave($__internal_e2327889a0776e5c95f2389e6b3317335e2caabaf36bbe1a2f657b073f2b09f3_prof);

        
        $__internal_240b83fd6701fc91892019fe0e72e95f619563cc3b823d3a15f89af545c6e3a7->leave($__internal_240b83fd6701fc91892019fe0e72e95f619563cc3b823d3a15f89af545c6e3a7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_02fe080877bfb877f579cd66744a9e7fef8ef938525828caaf7bf07626084afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fe080877bfb877f579cd66744a9e7fef8ef938525828caaf7bf07626084afc->enter($__internal_02fe080877bfb877f579cd66744a9e7fef8ef938525828caaf7bf07626084afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75ff620a2fe6511300c315dda3cd70833993decddd50b2d1265b46a1c571113e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ff620a2fe6511300c315dda3cd70833993decddd50b2d1265b46a1c571113e->enter($__internal_75ff620a2fe6511300c315dda3cd70833993decddd50b2d1265b46a1c571113e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_75ff620a2fe6511300c315dda3cd70833993decddd50b2d1265b46a1c571113e->leave($__internal_75ff620a2fe6511300c315dda3cd70833993decddd50b2d1265b46a1c571113e_prof);

        
        $__internal_02fe080877bfb877f579cd66744a9e7fef8ef938525828caaf7bf07626084afc->leave($__internal_02fe080877bfb877f579cd66744a9e7fef8ef938525828caaf7bf07626084afc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f19f6d7abbae4f49c4b8275602c1281c5dfaa4acc77fa3bc6e789711c8661e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19f6d7abbae4f49c4b8275602c1281c5dfaa4acc77fa3bc6e789711c8661e9c->enter($__internal_f19f6d7abbae4f49c4b8275602c1281c5dfaa4acc77fa3bc6e789711c8661e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0d767c18fc980f012efaec47f28c0a347b261b0e2b8bfbecbe2f79ef7779425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d767c18fc980f012efaec47f28c0a347b261b0e2b8bfbecbe2f79ef7779425->enter($__internal_e0d767c18fc980f012efaec47f28c0a347b261b0e2b8bfbecbe2f79ef7779425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e0d767c18fc980f012efaec47f28c0a347b261b0e2b8bfbecbe2f79ef7779425->leave($__internal_e0d767c18fc980f012efaec47f28c0a347b261b0e2b8bfbecbe2f79ef7779425_prof);

        
        $__internal_f19f6d7abbae4f49c4b8275602c1281c5dfaa4acc77fa3bc6e789711c8661e9c->leave($__internal_f19f6d7abbae4f49c4b8275602c1281c5dfaa4acc77fa3bc6e789711c8661e9c_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
