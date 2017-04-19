<?php

/* default/base.html.twig */
class __TwigTemplate_af875fe7e8fb935224cb0ba284651054e73a60da4e8ba5805862aa514e09a0bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fb9168b6ed40e6e76a84bd1c9961a9b893ef8ade1108affc6b36a7c3b3a4ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb9168b6ed40e6e76a84bd1c9961a9b893ef8ade1108affc6b36a7c3b3a4ee4->enter($__internal_8fb9168b6ed40e6e76a84bd1c9961a9b893ef8ade1108affc6b36a7c3b3a4ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/base.html.twig"));

        $__internal_e33b6817f284a2f8598b5098d012a5556c9e228baf6d14575d3bc047040dd491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33b6817f284a2f8598b5098d012a5556c9e228baf6d14575d3bc047040dd491->enter($__internal_e33b6817f284a2f8598b5098d012a5556c9e228baf6d14575d3bc047040dd491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/et-line-font.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nivo-lightbox.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nivo_themes/default/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    </head>
    <body data-spy=\"scroll\" data-target=\".navbar-collapse\" data-offset=\"50\">

        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "
    </body>
</html>";
        
        $__internal_8fb9168b6ed40e6e76a84bd1c9961a9b893ef8ade1108affc6b36a7c3b3a4ee4->leave($__internal_8fb9168b6ed40e6e76a84bd1c9961a9b893ef8ade1108affc6b36a7c3b3a4ee4_prof);

        
        $__internal_e33b6817f284a2f8598b5098d012a5556c9e228baf6d14575d3bc047040dd491->leave($__internal_e33b6817f284a2f8598b5098d012a5556c9e228baf6d14575d3bc047040dd491_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8006f20a812c792e3e393e2ecae785cd36e2dd96565d01fc93b207452667f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8006f20a812c792e3e393e2ecae785cd36e2dd96565d01fc93b207452667f82->enter($__internal_f8006f20a812c792e3e393e2ecae785cd36e2dd96565d01fc93b207452667f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e20aa08cbf54c44dcc86d0a2f7624f5396b6c12f640e7d854ccb15b94019a2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20aa08cbf54c44dcc86d0a2f7624f5396b6c12f640e7d854ccb15b94019a2b8->enter($__internal_e20aa08cbf54c44dcc86d0a2f7624f5396b6c12f640e7d854ccb15b94019a2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e20aa08cbf54c44dcc86d0a2f7624f5396b6c12f640e7d854ccb15b94019a2b8->leave($__internal_e20aa08cbf54c44dcc86d0a2f7624f5396b6c12f640e7d854ccb15b94019a2b8_prof);

        
        $__internal_f8006f20a812c792e3e393e2ecae785cd36e2dd96565d01fc93b207452667f82->leave($__internal_f8006f20a812c792e3e393e2ecae785cd36e2dd96565d01fc93b207452667f82_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c70a6694d3904bc42ed33bc0a78f004bb67a77088cd20698ec24d60bdffc1431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70a6694d3904bc42ed33bc0a78f004bb67a77088cd20698ec24d60bdffc1431->enter($__internal_c70a6694d3904bc42ed33bc0a78f004bb67a77088cd20698ec24d60bdffc1431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c47ecc59e7ba6f9db756517d3e30eadc8bb792ed5b55e9edb2c70d9c93c239f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47ecc59e7ba6f9db756517d3e30eadc8bb792ed5b55e9edb2c70d9c93c239f6->enter($__internal_c47ecc59e7ba6f9db756517d3e30eadc8bb792ed5b55e9edb2c70d9c93c239f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c47ecc59e7ba6f9db756517d3e30eadc8bb792ed5b55e9edb2c70d9c93c239f6->leave($__internal_c47ecc59e7ba6f9db756517d3e30eadc8bb792ed5b55e9edb2c70d9c93c239f6_prof);

        
        $__internal_c70a6694d3904bc42ed33bc0a78f004bb67a77088cd20698ec24d60bdffc1431->leave($__internal_c70a6694d3904bc42ed33bc0a78f004bb67a77088cd20698ec24d60bdffc1431_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bf369f3bd208fc7f596aebe74c1fd2c39288abf7b72370383b267e114862a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf369f3bd208fc7f596aebe74c1fd2c39288abf7b72370383b267e114862a02->enter($__internal_1bf369f3bd208fc7f596aebe74c1fd2c39288abf7b72370383b267e114862a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7a82559168d5650aed965562b2e47e267dec6e0f87811db4030fc28f6b94f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a82559168d5650aed965562b2e47e267dec6e0f87811db4030fc28f6b94f87->enter($__internal_d7a82559168d5650aed965562b2e47e267dec6e0f87811db4030fc28f6b94f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7a82559168d5650aed965562b2e47e267dec6e0f87811db4030fc28f6b94f87->leave($__internal_d7a82559168d5650aed965562b2e47e267dec6e0f87811db4030fc28f6b94f87_prof);

        
        $__internal_1bf369f3bd208fc7f596aebe74c1fd2c39288abf7b72370383b267e114862a02->leave($__internal_1bf369f3bd208fc7f596aebe74c1fd2c39288abf7b72370383b267e114862a02_prof);

    }

    public function getTemplateName()
    {
        return "default/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 20,  111 => 6,  93 => 5,  81 => 21,  79 => 20,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/animate.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/et-line-font.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/nivo-lightbox.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/nivo_themes/default/default.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    </head>
    <body data-spy=\"scroll\" data-target=\".navbar-collapse\" data-offset=\"50\">

        {% block body %}{% endblock %}

    </body>
</html>", "default/base.html.twig", "/home/tommar5/dd-project/app/Resources/views/default/base.html.twig");
    }
}
