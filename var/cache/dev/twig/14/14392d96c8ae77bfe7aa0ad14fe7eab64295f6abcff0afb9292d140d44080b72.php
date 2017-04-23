<?php

/* auth/base.html.twig */
class __TwigTemplate_5766473796a2d057de72a01b61c5694e20eb9862df6f9d8813ea317a809a6ddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfb4d526be9675d742836f9246a2732a4c2cb8d45c70ecfc141339c264371205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb4d526be9675d742836f9246a2732a4c2cb8d45c70ecfc141339c264371205->enter($__internal_bfb4d526be9675d742836f9246a2732a4c2cb8d45c70ecfc141339c264371205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/base.html.twig"));

        $__internal_7a90a0b1a64b3b0c0203451691ee05b9e30f0ecf248e037fb8dacd6668c46428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a90a0b1a64b3b0c0203451691ee05b9e30f0ecf248e037fb8dacd6668c46428->enter($__internal_7a90a0b1a64b3b0c0203451691ee05b9e30f0ecf248e037fb8dacd6668c46428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/iCheck/square/blue.css"), "html", null, true);
        echo "\">
</head>
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"../../index2.html\"><b>Todo</b>List</a>
    </div>

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 28
            echo "        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 31
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
</div>
<!-- /.login-box -->

";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "
</body>
</html>


";
        
        $__internal_bfb4d526be9675d742836f9246a2732a4c2cb8d45c70ecfc141339c264371205->leave($__internal_bfb4d526be9675d742836f9246a2732a4c2cb8d45c70ecfc141339c264371205_prof);

        
        $__internal_7a90a0b1a64b3b0c0203451691ee05b9e30f0ecf248e037fb8dacd6668c46428->leave($__internal_7a90a0b1a64b3b0c0203451691ee05b9e30f0ecf248e037fb8dacd6668c46428_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_59705d87623737354efb06130bf4dffbbf47b9a81c083f8a5e8eed6e85757b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59705d87623737354efb06130bf4dffbbf47b9a81c083f8a5e8eed6e85757b97->enter($__internal_59705d87623737354efb06130bf4dffbbf47b9a81c083f8a5e8eed6e85757b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_876002c9bad5446a4db19838e1dbc58beaa2b72f079810b3354dba17ef2583ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876002c9bad5446a4db19838e1dbc58beaa2b72f079810b3354dba17ef2583ba->enter($__internal_876002c9bad5446a4db19838e1dbc58beaa2b72f079810b3354dba17ef2583ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_876002c9bad5446a4db19838e1dbc58beaa2b72f079810b3354dba17ef2583ba->leave($__internal_876002c9bad5446a4db19838e1dbc58beaa2b72f079810b3354dba17ef2583ba_prof);

        
        $__internal_59705d87623737354efb06130bf4dffbbf47b9a81c083f8a5e8eed6e85757b97->leave($__internal_59705d87623737354efb06130bf4dffbbf47b9a81c083f8a5e8eed6e85757b97_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1286faafb98bd1b45b237ec930c797e7a3eb2a3fe86cea1f5bac03a25834bcaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1286faafb98bd1b45b237ec930c797e7a3eb2a3fe86cea1f5bac03a25834bcaa->enter($__internal_1286faafb98bd1b45b237ec930c797e7a3eb2a3fe86cea1f5bac03a25834bcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ceed8d5437426e965a65931a9f155ecce045aa61a78e12a60b1ccb050c25a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ceed8d5437426e965a65931a9f155ecce045aa61a78e12a60b1ccb050c25a87->enter($__internal_6ceed8d5437426e965a65931a9f155ecce045aa61a78e12a60b1ccb050c25a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ceed8d5437426e965a65931a9f155ecce045aa61a78e12a60b1ccb050c25a87->leave($__internal_6ceed8d5437426e965a65931a9f155ecce045aa61a78e12a60b1ccb050c25a87_prof);

        
        $__internal_1286faafb98bd1b45b237ec930c797e7a3eb2a3fe86cea1f5bac03a25834bcaa->leave($__internal_1286faafb98bd1b45b237ec930c797e7a3eb2a3fe86cea1f5bac03a25834bcaa_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88bad2f31b4394ea383c75c6714d5a4c1e697027966fec3b8c99a99920b5ad24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88bad2f31b4394ea383c75c6714d5a4c1e697027966fec3b8c99a99920b5ad24->enter($__internal_88bad2f31b4394ea383c75c6714d5a4c1e697027966fec3b8c99a99920b5ad24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f4d471c4d48bec48b075d53406d6e0991031f6c4fd12892ffc7c16432765a729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d471c4d48bec48b075d53406d6e0991031f6c4fd12892ffc7c16432765a729->enter($__internal_f4d471c4d48bec48b075d53406d6e0991031f6c4fd12892ffc7c16432765a729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f4d471c4d48bec48b075d53406d6e0991031f6c4fd12892ffc7c16432765a729->leave($__internal_f4d471c4d48bec48b075d53406d6e0991031f6c4fd12892ffc7c16432765a729_prof);

        
        $__internal_88bad2f31b4394ea383c75c6714d5a4c1e697027966fec3b8c99a99920b5ad24->leave($__internal_88bad2f31b4394ea383c75c6714d5a4c1e697027966fec3b8c99a99920b5ad24_prof);

    }

    public function getTemplateName()
    {
        return "auth/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 38,  141 => 33,  124 => 6,  109 => 39,  107 => 38,  101 => 34,  98 => 33,  89 => 31,  84 => 30,  75 => 28,  71 => 27,  60 => 19,  55 => 17,  46 => 11,  39 => 7,  35 => 6,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{% block title %}{% endblock %}</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"{{ asset('profile/bootstrap/css/bootstrap.min.css') }}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('profile/dist/css/AdminLTE.min.css') }}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{ asset('profile/plugins/iCheck/square/blue.css') }}\">
</head>
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"../../index2.html\"><b>Todo</b>List</a>
    </div>

    {% for flash_message in app.session.flashbag.get('notice') %}
        <div class=\"alert alert-success\">{{ flash_message }}</div>
    {% endfor %}
    {% for flash_message in app.session.flashbag.get('error') %}
        <div class=\"alert alert-danger\">{{ flash_message }}</div>
    {% endfor %}
    {% block body %}{% endblock %}

</div>
<!-- /.login-box -->

{% block javascripts %}{% endblock %}

</body>
</html>


", "auth/base.html.twig", "/home/petras/dd-project/app/Resources/views/auth/base.html.twig");
    }
}
