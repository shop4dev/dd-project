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
        $__internal_b1de477f2868604ea74b32038aedb85f0cfd052bb9c513f98e9f9767f272659f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1de477f2868604ea74b32038aedb85f0cfd052bb9c513f98e9f9767f272659f->enter($__internal_b1de477f2868604ea74b32038aedb85f0cfd052bb9c513f98e9f9767f272659f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/base.html.twig"));

        $__internal_c262252704d9003c64bc370df7648e00cf246b19ce7d01d8109e1baf4379e7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c262252704d9003c64bc370df7648e00cf246b19ce7d01d8109e1baf4379e7e8->enter($__internal_c262252704d9003c64bc370df7648e00cf246b19ce7d01d8109e1baf4379e7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/base.html.twig"));

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
        
        $__internal_b1de477f2868604ea74b32038aedb85f0cfd052bb9c513f98e9f9767f272659f->leave($__internal_b1de477f2868604ea74b32038aedb85f0cfd052bb9c513f98e9f9767f272659f_prof);

        
        $__internal_c262252704d9003c64bc370df7648e00cf246b19ce7d01d8109e1baf4379e7e8->leave($__internal_c262252704d9003c64bc370df7648e00cf246b19ce7d01d8109e1baf4379e7e8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3add23d215ec690735282646a40cb7b7b39dfcd3cc5299bddb7873d0fe5ddc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3add23d215ec690735282646a40cb7b7b39dfcd3cc5299bddb7873d0fe5ddc2->enter($__internal_a3add23d215ec690735282646a40cb7b7b39dfcd3cc5299bddb7873d0fe5ddc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a5e641abc1447a00218f3ffc695f8881b6d73d8ab37a58e235b1c23b40d017d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5e641abc1447a00218f3ffc695f8881b6d73d8ab37a58e235b1c23b40d017d->enter($__internal_3a5e641abc1447a00218f3ffc695f8881b6d73d8ab37a58e235b1c23b40d017d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3a5e641abc1447a00218f3ffc695f8881b6d73d8ab37a58e235b1c23b40d017d->leave($__internal_3a5e641abc1447a00218f3ffc695f8881b6d73d8ab37a58e235b1c23b40d017d_prof);

        
        $__internal_a3add23d215ec690735282646a40cb7b7b39dfcd3cc5299bddb7873d0fe5ddc2->leave($__internal_a3add23d215ec690735282646a40cb7b7b39dfcd3cc5299bddb7873d0fe5ddc2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b0b0bfff4184ae5d3f23e0fbc2bf4b7b7cf3cccebed6366d45f2f2455584a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0b0bfff4184ae5d3f23e0fbc2bf4b7b7cf3cccebed6366d45f2f2455584a79->enter($__internal_8b0b0bfff4184ae5d3f23e0fbc2bf4b7b7cf3cccebed6366d45f2f2455584a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2275e641604b024fa08283bcc940efe31280225c6dbc79abfd80b97bec37e43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2275e641604b024fa08283bcc940efe31280225c6dbc79abfd80b97bec37e43c->enter($__internal_2275e641604b024fa08283bcc940efe31280225c6dbc79abfd80b97bec37e43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2275e641604b024fa08283bcc940efe31280225c6dbc79abfd80b97bec37e43c->leave($__internal_2275e641604b024fa08283bcc940efe31280225c6dbc79abfd80b97bec37e43c_prof);

        
        $__internal_8b0b0bfff4184ae5d3f23e0fbc2bf4b7b7cf3cccebed6366d45f2f2455584a79->leave($__internal_8b0b0bfff4184ae5d3f23e0fbc2bf4b7b7cf3cccebed6366d45f2f2455584a79_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11c610fa7fdb24b04265da35e47a46774498605fd4bdde968a5968a4ab67ad79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c610fa7fdb24b04265da35e47a46774498605fd4bdde968a5968a4ab67ad79->enter($__internal_11c610fa7fdb24b04265da35e47a46774498605fd4bdde968a5968a4ab67ad79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3eb3a21a7b7d60b0321185388339ab947cffd4b83404550539fdee3effa8f99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb3a21a7b7d60b0321185388339ab947cffd4b83404550539fdee3effa8f99f->enter($__internal_3eb3a21a7b7d60b0321185388339ab947cffd4b83404550539fdee3effa8f99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3eb3a21a7b7d60b0321185388339ab947cffd4b83404550539fdee3effa8f99f->leave($__internal_3eb3a21a7b7d60b0321185388339ab947cffd4b83404550539fdee3effa8f99f_prof);

        
        $__internal_11c610fa7fdb24b04265da35e47a46774498605fd4bdde968a5968a4ab67ad79->leave($__internal_11c610fa7fdb24b04265da35e47a46774498605fd4bdde968a5968a4ab67ad79_prof);

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


", "auth/base.html.twig", "/home/emas/Projects/todolist/app/Resources/views/auth/base.html.twig");
    }
}
