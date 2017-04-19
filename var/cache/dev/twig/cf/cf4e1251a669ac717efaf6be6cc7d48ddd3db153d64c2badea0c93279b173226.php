<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_f9796e39818c4a302377ecff98baf95854aecd047486baab7ec6833ff2aee74c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e187895b9ea563c89e72b798646bed70924f2cadd94800f113d9f03fa4ac782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e187895b9ea563c89e72b798646bed70924f2cadd94800f113d9f03fa4ac782->enter($__internal_3e187895b9ea563c89e72b798646bed70924f2cadd94800f113d9f03fa4ac782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_cd1a7f1e25614f9db52e14f6e9395fc2cb948404c6f9134e9933787fb5dbc02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1a7f1e25614f9db52e14f6e9395fc2cb948404c6f9134e9933787fb5dbc02c->enter($__internal_cd1a7f1e25614f9db52e14f6e9395fc2cb948404c6f9134e9933787fb5dbc02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e187895b9ea563c89e72b798646bed70924f2cadd94800f113d9f03fa4ac782->leave($__internal_3e187895b9ea563c89e72b798646bed70924f2cadd94800f113d9f03fa4ac782_prof);

        
        $__internal_cd1a7f1e25614f9db52e14f6e9395fc2cb948404c6f9134e9933787fb5dbc02c->leave($__internal_cd1a7f1e25614f9db52e14f6e9395fc2cb948404c6f9134e9933787fb5dbc02c_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8bf389f55f8ac015bbacf2c14fce85f8cd0990fead4a541fd95a292db3e375d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf389f55f8ac015bbacf2c14fce85f8cd0990fead4a541fd95a292db3e375d7->enter($__internal_8bf389f55f8ac015bbacf2c14fce85f8cd0990fead4a541fd95a292db3e375d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3e58977d3e21e9038af24bd01b8bcae9d54520a8fb7c20a4586b0617b8276d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e58977d3e21e9038af24bd01b8bcae9d54520a8fb7c20a4586b0617b8276d43->enter($__internal_3e58977d3e21e9038af24bd01b8bcae9d54520a8fb7c20a4586b0617b8276d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_3e58977d3e21e9038af24bd01b8bcae9d54520a8fb7c20a4586b0617b8276d43->leave($__internal_3e58977d3e21e9038af24bd01b8bcae9d54520a8fb7c20a4586b0617b8276d43_prof);

        
        $__internal_8bf389f55f8ac015bbacf2c14fce85f8cd0990fead4a541fd95a292db3e375d7->leave($__internal_8bf389f55f8ac015bbacf2c14fce85f8cd0990fead4a541fd95a292db3e375d7_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6a2f81ebb1bfaba0f18c8f682e5d21ed69f42530a8280877f97dcfd59d9a756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a2f81ebb1bfaba0f18c8f682e5d21ed69f42530a8280877f97dcfd59d9a756->enter($__internal_c6a2f81ebb1bfaba0f18c8f682e5d21ed69f42530a8280877f97dcfd59d9a756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a01e49dc2ef0be2fabeb572b6b043d4bbcd2a91b4d765f654895c6cb6a83b437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01e49dc2ef0be2fabeb572b6b043d4bbcd2a91b4d765f654895c6cb6a83b437->enter($__internal_a01e49dc2ef0be2fabeb572b6b043d4bbcd2a91b4d765f654895c6cb6a83b437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a01e49dc2ef0be2fabeb572b6b043d4bbcd2a91b4d765f654895c6cb6a83b437->leave($__internal_a01e49dc2ef0be2fabeb572b6b043d4bbcd2a91b4d765f654895c6cb6a83b437_prof);

        
        $__internal_c6a2f81ebb1bfaba0f18c8f682e5d21ed69f42530a8280877f97dcfd59d9a756->leave($__internal_c6a2f81ebb1bfaba0f18c8f682e5d21ed69f42530a8280877f97dcfd59d9a756_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
