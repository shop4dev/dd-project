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
        $__internal_45121c077a8b9a029030998aaf93559556a757d2d061691395ac50a0423eaecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45121c077a8b9a029030998aaf93559556a757d2d061691395ac50a0423eaecb->enter($__internal_45121c077a8b9a029030998aaf93559556a757d2d061691395ac50a0423eaecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/base.html.twig"));

        $__internal_85219ed3abbecb247de07f8e6522ed20c255893e4ee0b187dbc2af95890a821a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85219ed3abbecb247de07f8e6522ed20c255893e4ee0b187dbc2af95890a821a->enter($__internal_85219ed3abbecb247de07f8e6522ed20c255893e4ee0b187dbc2af95890a821a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/base.html.twig"));

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
        
        $__internal_45121c077a8b9a029030998aaf93559556a757d2d061691395ac50a0423eaecb->leave($__internal_45121c077a8b9a029030998aaf93559556a757d2d061691395ac50a0423eaecb_prof);

        
        $__internal_85219ed3abbecb247de07f8e6522ed20c255893e4ee0b187dbc2af95890a821a->leave($__internal_85219ed3abbecb247de07f8e6522ed20c255893e4ee0b187dbc2af95890a821a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdc6492ef59ac990e9eaaeebb30c099440268ac307ba5ef8a71e8baaa547326b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc6492ef59ac990e9eaaeebb30c099440268ac307ba5ef8a71e8baaa547326b->enter($__internal_cdc6492ef59ac990e9eaaeebb30c099440268ac307ba5ef8a71e8baaa547326b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_610421717b713336a1b97a018976d8ddfbb0797c2264eb4972ba40c7dc25c366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610421717b713336a1b97a018976d8ddfbb0797c2264eb4972ba40c7dc25c366->enter($__internal_610421717b713336a1b97a018976d8ddfbb0797c2264eb4972ba40c7dc25c366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_610421717b713336a1b97a018976d8ddfbb0797c2264eb4972ba40c7dc25c366->leave($__internal_610421717b713336a1b97a018976d8ddfbb0797c2264eb4972ba40c7dc25c366_prof);

        
        $__internal_cdc6492ef59ac990e9eaaeebb30c099440268ac307ba5ef8a71e8baaa547326b->leave($__internal_cdc6492ef59ac990e9eaaeebb30c099440268ac307ba5ef8a71e8baaa547326b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_230c577cea94b76e3ded0358f001acb1fb9219f51ce0b798ea87d692aa543cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230c577cea94b76e3ded0358f001acb1fb9219f51ce0b798ea87d692aa543cba->enter($__internal_230c577cea94b76e3ded0358f001acb1fb9219f51ce0b798ea87d692aa543cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02cc48db2b716ff95f52757aed453c719fc281c66c32e40e0ff0749f146a6224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02cc48db2b716ff95f52757aed453c719fc281c66c32e40e0ff0749f146a6224->enter($__internal_02cc48db2b716ff95f52757aed453c719fc281c66c32e40e0ff0749f146a6224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_02cc48db2b716ff95f52757aed453c719fc281c66c32e40e0ff0749f146a6224->leave($__internal_02cc48db2b716ff95f52757aed453c719fc281c66c32e40e0ff0749f146a6224_prof);

        
        $__internal_230c577cea94b76e3ded0358f001acb1fb9219f51ce0b798ea87d692aa543cba->leave($__internal_230c577cea94b76e3ded0358f001acb1fb9219f51ce0b798ea87d692aa543cba_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ab6dcd5c14af7cc80b63da4089dbf9f1a6f37cfe1b249c3035a3eb078a5827a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab6dcd5c14af7cc80b63da4089dbf9f1a6f37cfe1b249c3035a3eb078a5827a->enter($__internal_6ab6dcd5c14af7cc80b63da4089dbf9f1a6f37cfe1b249c3035a3eb078a5827a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_60916c24945c4a2bf7a5d85d634277da318aefa76d437b819103d26718f1cac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60916c24945c4a2bf7a5d85d634277da318aefa76d437b819103d26718f1cac1->enter($__internal_60916c24945c4a2bf7a5d85d634277da318aefa76d437b819103d26718f1cac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_60916c24945c4a2bf7a5d85d634277da318aefa76d437b819103d26718f1cac1->leave($__internal_60916c24945c4a2bf7a5d85d634277da318aefa76d437b819103d26718f1cac1_prof);

        
        $__internal_6ab6dcd5c14af7cc80b63da4089dbf9f1a6f37cfe1b249c3035a3eb078a5827a->leave($__internal_6ab6dcd5c14af7cc80b63da4089dbf9f1a6f37cfe1b249c3035a3eb078a5827a_prof);

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


", "auth/base.html.twig", "/home/tommar5/dd-project/app/Resources/views/auth/base.html.twig");
    }
}
