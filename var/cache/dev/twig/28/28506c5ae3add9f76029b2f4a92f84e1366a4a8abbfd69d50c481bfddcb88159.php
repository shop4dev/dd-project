<?php

/* auth/register.html.twig */
class __TwigTemplate_18118387a57b37360a2960d1b59b4bfdccc6b23450acfa9763a04c9287dbbbd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("auth/base.html.twig", "auth/register.html.twig", 1);
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
        $__internal_d20434dc651c0f06d0ba83dd3bf1608d99d977e79e6539933a7bd4eed43cd96d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20434dc651c0f06d0ba83dd3bf1608d99d977e79e6539933a7bd4eed43cd96d->enter($__internal_d20434dc651c0f06d0ba83dd3bf1608d99d977e79e6539933a7bd4eed43cd96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $__internal_181708578df9ad5a00f606290ad6bcebf83bb607a0c416d9cb3ffebc8ecf41b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181708578df9ad5a00f606290ad6bcebf83bb607a0c416d9cb3ffebc8ecf41b4->enter($__internal_181708578df9ad5a00f606290ad6bcebf83bb607a0c416d9cb3ffebc8ecf41b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d20434dc651c0f06d0ba83dd3bf1608d99d977e79e6539933a7bd4eed43cd96d->leave($__internal_d20434dc651c0f06d0ba83dd3bf1608d99d977e79e6539933a7bd4eed43cd96d_prof);

        
        $__internal_181708578df9ad5a00f606290ad6bcebf83bb607a0c416d9cb3ffebc8ecf41b4->leave($__internal_181708578df9ad5a00f606290ad6bcebf83bb607a0c416d9cb3ffebc8ecf41b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6812ef9ea13d6796139629514d5209cec55cb146b3de96f6e640472b60e43ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6812ef9ea13d6796139629514d5209cec55cb146b3de96f6e640472b60e43ba2->enter($__internal_6812ef9ea13d6796139629514d5209cec55cb146b3de96f6e640472b60e43ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a8adab704edd7f1b9d677e8b79951756cd3b1c54ec8e543bd4940a520eb2536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8adab704edd7f1b9d677e8b79951756cd3b1c54ec8e543bd4940a520eb2536->enter($__internal_0a8adab704edd7f1b9d677e8b79951756cd3b1c54ec8e543bd4940a520eb2536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    TODO - Register
";
        
        $__internal_0a8adab704edd7f1b9d677e8b79951756cd3b1c54ec8e543bd4940a520eb2536->leave($__internal_0a8adab704edd7f1b9d677e8b79951756cd3b1c54ec8e543bd4940a520eb2536_prof);

        
        $__internal_6812ef9ea13d6796139629514d5209cec55cb146b3de96f6e640472b60e43ba2->leave($__internal_6812ef9ea13d6796139629514d5209cec55cb146b3de96f6e640472b60e43ba2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5acc73ed668db5644501a755b551e919401aed19d3edba91010b44cb130910be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5acc73ed668db5644501a755b551e919401aed19d3edba91010b44cb130910be->enter($__internal_5acc73ed668db5644501a755b551e919401aed19d3edba91010b44cb130910be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29df8cf4bd9df0dc6aa6fe5e3739ab101e692b142edf6f47f6ab47aa20f7bec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29df8cf4bd9df0dc6aa6fe5e3739ab101e692b142edf6f47f6ab47aa20f7bec5->enter($__internal_29df8cf4bd9df0dc6aa6fe5e3739ab101e692b142edf6f47f6ab47aa20f7bec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <!-- navigation section -->
        <section class=\"navbar navbar-fixed-top custom-navbar\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon icon-bar\"></span>
                        <span class=\"icon icon-bar\"></span>
                        <span class=\"icon icon-bar\"></span>
                    </button>
                    <a href=\"/\" class=\"navbar-brand\">myTasks</a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"/\" class=\"smoothScroll\">HOME</a></li>
                        <li><a href=\"/login\" class=\"\">SING IN</a></li>
                        <li><a href=\"/register\" class=\"\">SING UP</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <div class=\"register-box-body\">
        <section id=\"home\">
        <p class=\"login-box-msg\">Register a new membership</p>

        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'form_start');
        echo "
            <div class=\"form-group has-feedback\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "name", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Enter your name")));
        echo "
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Enter your email")));
        echo "
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Enter password")));
        echo "
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Retype password")));
        echo "
                <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
            </div>
            <div class=\"row\" style=\"margin-left: 5px;\">
                <div class=\"col-xs-8\">
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\"> I agree to the <a href=\"#\">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class=\"col-xs-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Register</button>
                </div>
                <!-- /.col -->
            </div>
        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), 'form_end');
        echo "

        <div class=\"social-auth-links text-center\">
            <p>- OR -</p>
            <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign up using
                Facebook</a>
            <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign up using
                Google+</a>
        </div>

        <a href=\"/login\" class=\"text-center\">I already have a membership</a>
    </div>\t\t
        </section>

";
        
        $__internal_29df8cf4bd9df0dc6aa6fe5e3739ab101e692b142edf6f47f6ab47aa20f7bec5->leave($__internal_29df8cf4bd9df0dc6aa6fe5e3739ab101e692b142edf6f47f6ab47aa20f7bec5_prof);

        
        $__internal_5acc73ed668db5644501a755b551e919401aed19d3edba91010b44cb130910be->leave($__internal_5acc73ed668db5644501a755b551e919401aed19d3edba91010b44cb130910be_prof);

    }

    // line 81
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_adf229e43fe3035b070694235ded257fa56b224ea51e6cd0f927bb75da3b6596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf229e43fe3035b070694235ded257fa56b224ea51e6cd0f927bb75da3b6596->enter($__internal_adf229e43fe3035b070694235ded257fa56b224ea51e6cd0f927bb75da3b6596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6792b8e8b07de2f14526f53337f376f87802f418b969bd3332545483cb8951a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6792b8e8b07de2f14526f53337f376f87802f418b969bd3332545483cb8951a3->enter($__internal_6792b8e8b07de2f14526f53337f376f87802f418b969bd3332545483cb8951a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 82
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <!-- jQuery 2.2.3 -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 93
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
        
        $__internal_6792b8e8b07de2f14526f53337f376f87802f418b969bd3332545483cb8951a3->leave($__internal_6792b8e8b07de2f14526f53337f376f87802f418b969bd3332545483cb8951a3_prof);

        
        $__internal_adf229e43fe3035b070694235ded257fa56b224ea51e6cd0f927bb75da3b6596->leave($__internal_adf229e43fe3035b070694235ded257fa56b224ea51e6cd0f927bb75da3b6596_prof);

    }

    public function getTemplateName()
    {
        return "auth/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 93,  193 => 91,  188 => 89,  179 => 82,  170 => 81,  145 => 65,  125 => 48,  118 => 44,  111 => 40,  104 => 36,  99 => 34,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'auth/base.html.twig' %}

{% block title %}
    TODO - Register
{% endblock %}

{% block body %}

    <!-- navigation section -->
        <section class=\"navbar navbar-fixed-top custom-navbar\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon icon-bar\"></span>
                        <span class=\"icon icon-bar\"></span>
                        <span class=\"icon icon-bar\"></span>
                    </button>
                    <a href=\"/\" class=\"navbar-brand\">myTasks</a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"/\" class=\"smoothScroll\">HOME</a></li>
                        <li><a href=\"/login\" class=\"\">SING IN</a></li>
                        <li><a href=\"/register\" class=\"\">SING UP</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <div class=\"register-box-body\">
        <section id=\"home\">
        <p class=\"login-box-msg\">Register a new membership</p>

        {{ form_start(form) }}
            <div class=\"form-group has-feedback\">
                {{ form_row(form.name, {'attr': {'class': 'form-control', 'placeholder': 'Enter your name'}}) }}
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                {{ form_row(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Enter your email'}}) }}
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                {{ form_row(form.plainPassword.first, {'attr': {'class': 'form-control', 'placeholder': 'Enter password'}}) }}
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                {{ form_row(form.plainPassword.second, {'attr': {'class': 'form-control', 'placeholder': 'Retype password'}}) }}
                <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
            </div>
            <div class=\"row\" style=\"margin-left: 5px;\">
                <div class=\"col-xs-8\">
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\"> I agree to the <a href=\"#\">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class=\"col-xs-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Register</button>
                </div>
                <!-- /.col -->
            </div>
        {{ form_end(form) }}

        <div class=\"social-auth-links text-center\">
            <p>- OR -</p>
            <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign up using
                Facebook</a>
            <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign up using
                Google+</a>
        </div>

        <a href=\"/login\" class=\"text-center\">I already have a membership</a>
    </div>\t\t
        </section>

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
{% endblock %}", "auth/register.html.twig", "/home/tommar5/dd-project/app/Resources/views/auth/register.html.twig");
    }
}
