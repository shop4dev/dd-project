<?php

/* auth/login.html.twig */
class __TwigTemplate_1bf7bba7f6b84027c3eea80e437bb98124423cd509be2688d95727f2c5941021 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("auth/base.html.twig", "auth/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "auth/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_713866985c4faf55e74fcc7a16437c24553880744d8e1a7d55658177fdf371a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713866985c4faf55e74fcc7a16437c24553880744d8e1a7d55658177fdf371a6->enter($__internal_713866985c4faf55e74fcc7a16437c24553880744d8e1a7d55658177fdf371a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $__internal_0fd98a96d9f701dcf509710a6a94e3fb450fccc21e440b43c87f3ac90022204f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd98a96d9f701dcf509710a6a94e3fb450fccc21e440b43c87f3ac90022204f->enter($__internal_0fd98a96d9f701dcf509710a6a94e3fb450fccc21e440b43c87f3ac90022204f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_713866985c4faf55e74fcc7a16437c24553880744d8e1a7d55658177fdf371a6->leave($__internal_713866985c4faf55e74fcc7a16437c24553880744d8e1a7d55658177fdf371a6_prof);

        
        $__internal_0fd98a96d9f701dcf509710a6a94e3fb450fccc21e440b43c87f3ac90022204f->leave($__internal_0fd98a96d9f701dcf509710a6a94e3fb450fccc21e440b43c87f3ac90022204f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55439867a79d1c3710bca4a0d74ae0132dd103ac5bbb53c4ee26b8bbd9c573e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55439867a79d1c3710bca4a0d74ae0132dd103ac5bbb53c4ee26b8bbd9c573e2->enter($__internal_55439867a79d1c3710bca4a0d74ae0132dd103ac5bbb53c4ee26b8bbd9c573e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9336b488b62fdf0f81a99e764494159b985a0a0614d212342989ef50dfdb8c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9336b488b62fdf0f81a99e764494159b985a0a0614d212342989ef50dfdb8c6d->enter($__internal_9336b488b62fdf0f81a99e764494159b985a0a0614d212342989ef50dfdb8c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    TODO - Login
";
        
        $__internal_9336b488b62fdf0f81a99e764494159b985a0a0614d212342989ef50dfdb8c6d->leave($__internal_9336b488b62fdf0f81a99e764494159b985a0a0614d212342989ef50dfdb8c6d_prof);

        
        $__internal_55439867a79d1c3710bca4a0d74ae0132dd103ac5bbb53c4ee26b8bbd9c573e2->leave($__internal_55439867a79d1c3710bca4a0d74ae0132dd103ac5bbb53c4ee26b8bbd9c573e2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_970ee067d7eeba178119a8b676b0e891a1a69dcd9fec1a6b5fdbaa3056551f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970ee067d7eeba178119a8b676b0e891a1a69dcd9fec1a6b5fdbaa3056551f24->enter($__internal_970ee067d7eeba178119a8b676b0e891a1a69dcd9fec1a6b5fdbaa3056551f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_510a59778ce2c1d05b4419eb378ed90c0a9d8dab7214b24b42710334fc4f9433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510a59778ce2c1d05b4419eb378ed90c0a9d8dab7214b24b42710334fc4f9433->enter($__internal_510a59778ce2c1d05b4419eb378ed90c0a9d8dab7214b24b42710334fc4f9433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <!-- /.login-logo -->
    <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Sign in to start your session</p>

        <form role=\"form\" method=\"POST\" action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login_check");
        echo "\">
            ";
        // line 14
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 16, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 16, $this->getSourceContext()); })()), "messageData", array())), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 19
        echo "            <div class=\"form-group has-feedback\">
                <input id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"Email\">
                ";
        // line 22
        echo "                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                <input id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Password\">
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"row\">
                ";
        // line 30
        echo "                    ";
        // line 31
        echo "                        ";
        // line 32
        echo "                            ";
        // line 33
        echo "                        ";
        // line 34
        echo "                    ";
        // line 35
        echo "                ";
        // line 36
        echo "                <!-- /.col -->
                <div class=\"col-xs-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class=\"social-auth-links text-center\">
            <p>- OR -</p>
            <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using
                Facebook</a>
            <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using
                Google+</a>
        </div>
        <!-- /.social-auth-links -->

        <a href=\"#\">I forgot my password</a><br>
        <a href=\"/register\" class=\"text-center\">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
";
        
        $__internal_510a59778ce2c1d05b4419eb378ed90c0a9d8dab7214b24b42710334fc4f9433->leave($__internal_510a59778ce2c1d05b4419eb378ed90c0a9d8dab7214b24b42710334fc4f9433_prof);

        
        $__internal_970ee067d7eeba178119a8b676b0e891a1a69dcd9fec1a6b5fdbaa3056551f24->leave($__internal_970ee067d7eeba178119a8b676b0e891a1a69dcd9fec1a6b5fdbaa3056551f24_prof);

    }

    // line 60
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1a9bd1cbeb9e967feb66cd1ed39e4490ba05fc1f12b473cf1d829942daccfeb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a9bd1cbeb9e967feb66cd1ed39e4490ba05fc1f12b473cf1d829942daccfeb1->enter($__internal_1a9bd1cbeb9e967feb66cd1ed39e4490ba05fc1f12b473cf1d829942daccfeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_f972eb2aad0875c8fafc8e2c4a608d5e52725d62b98b261b6b3b0813ecf458be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f972eb2aad0875c8fafc8e2c4a608d5e52725d62b98b261b6b3b0813ecf458be->enter($__internal_f972eb2aad0875c8fafc8e2c4a608d5e52725d62b98b261b6b3b0813ecf458be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 61
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <!-- jQuery 2.2.3 -->
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            \$('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
";
        
        $__internal_f972eb2aad0875c8fafc8e2c4a608d5e52725d62b98b261b6b3b0813ecf458be->leave($__internal_f972eb2aad0875c8fafc8e2c4a608d5e52725d62b98b261b6b3b0813ecf458be_prof);

        
        $__internal_1a9bd1cbeb9e967feb66cd1ed39e4490ba05fc1f12b473cf1d829942daccfeb1->leave($__internal_1a9bd1cbeb9e967feb66cd1ed39e4490ba05fc1f12b473cf1d829942daccfeb1_prof);

    }

    public function getTemplateName()
    {
        return "auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 72,  176 => 70,  171 => 68,  162 => 61,  153 => 60,  121 => 36,  119 => 35,  117 => 34,  115 => 33,  113 => 32,  111 => 31,  109 => 30,  100 => 22,  96 => 20,  93 => 19,  87 => 16,  84 => 15,  82 => 14,  78 => 13,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'auth/base.html.twig' %}

{% block title %}
    TODO - Login
{% endblock %}

{% block body %}

    <!-- /.login-logo -->
    <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Sign in to start your session</p>

        <form role=\"form\" method=\"POST\" action=\"{{ path('security_login_check') }}\">
            {% if error %}
                <div class=\"alert alert-danger\">
                    {{ error.messageKey|trans(error.messageData) }}
                </div>
            {% endif %}
            <div class=\"form-group has-feedback\">
                <input id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"{{ last_username }}\" placeholder=\"Email\">
                {#<input type=\"email\" class=\"form-control\" placeholder=\"Email\">#}
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                <input id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Password\">
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"row\">
                {#<div class=\"col-xs-8\">#}
                    {#<div class=\"checkbox icheck\">#}
                        {#<label>#}
                            {#<input type=\"checkbox\"> Remember Me#}
                        {#</label>#}
                    {#</div>#}
                {#</div>#}
                <!-- /.col -->
                <div class=\"col-xs-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class=\"social-auth-links text-center\">
            <p>- OR -</p>
            <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using
                Facebook</a>
            <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using
                Google+</a>
        </div>
        <!-- /.social-auth-links -->

        <a href=\"#\">I forgot my password</a><br>
        <a href=\"/register\" class=\"text-center\">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
{% endblock %}

{% block javascript %}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <!-- jQuery 2.2.3 -->
    <script src=\"{{ asset('profile/plugins/jQuery/jquery-2.2.3.min.js') }}\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"{{ asset('profile/bootstrap/js/bootstrap.min.js') }}\"></script>
    <!-- iCheck -->
    <script src=\"{{ asset('profile/plugins/iCheck/icheck.min.js') }}\"></script>
    <script>
        \$(function () {
            \$('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
{% endblock %}", "auth/login.html.twig", "/home/emas/Projects/todolist/app/Resources/views/auth/login.html.twig");
    }
}
