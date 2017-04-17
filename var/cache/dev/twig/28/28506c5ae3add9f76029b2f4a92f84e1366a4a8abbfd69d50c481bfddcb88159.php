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
        $__internal_fdb89fa226497be58f827cf654431d4fa8298b199f69cc7f91ab13cd63195803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb89fa226497be58f827cf654431d4fa8298b199f69cc7f91ab13cd63195803->enter($__internal_fdb89fa226497be58f827cf654431d4fa8298b199f69cc7f91ab13cd63195803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $__internal_ef797f2b6650cd9a1777e6788b16e0d70ab328a3ddbc4e263d62afefeeeb7c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef797f2b6650cd9a1777e6788b16e0d70ab328a3ddbc4e263d62afefeeeb7c7e->enter($__internal_ef797f2b6650cd9a1777e6788b16e0d70ab328a3ddbc4e263d62afefeeeb7c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdb89fa226497be58f827cf654431d4fa8298b199f69cc7f91ab13cd63195803->leave($__internal_fdb89fa226497be58f827cf654431d4fa8298b199f69cc7f91ab13cd63195803_prof);

        
        $__internal_ef797f2b6650cd9a1777e6788b16e0d70ab328a3ddbc4e263d62afefeeeb7c7e->leave($__internal_ef797f2b6650cd9a1777e6788b16e0d70ab328a3ddbc4e263d62afefeeeb7c7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b603078386cdf1a01d7538ae41a1f88c18d11009f20c21b80343bda5ce6a0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b603078386cdf1a01d7538ae41a1f88c18d11009f20c21b80343bda5ce6a0a2->enter($__internal_4b603078386cdf1a01d7538ae41a1f88c18d11009f20c21b80343bda5ce6a0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b82c0c6c5227d752a3c3b33501708d8abccb388d2f2add1b6d7c0f2c6532bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b82c0c6c5227d752a3c3b33501708d8abccb388d2f2add1b6d7c0f2c6532bc6->enter($__internal_7b82c0c6c5227d752a3c3b33501708d8abccb388d2f2add1b6d7c0f2c6532bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    TODO - Register
";
        
        $__internal_7b82c0c6c5227d752a3c3b33501708d8abccb388d2f2add1b6d7c0f2c6532bc6->leave($__internal_7b82c0c6c5227d752a3c3b33501708d8abccb388d2f2add1b6d7c0f2c6532bc6_prof);

        
        $__internal_4b603078386cdf1a01d7538ae41a1f88c18d11009f20c21b80343bda5ce6a0a2->leave($__internal_4b603078386cdf1a01d7538ae41a1f88c18d11009f20c21b80343bda5ce6a0a2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0d641bd24aa16904015bf85f3da4b359a2dc42f7b36a5374e6cc20733dd6144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d641bd24aa16904015bf85f3da4b359a2dc42f7b36a5374e6cc20733dd6144->enter($__internal_c0d641bd24aa16904015bf85f3da4b359a2dc42f7b36a5374e6cc20733dd6144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65b37027ed830daa7dfaad17a5e20af6b62556df62eafb22ca7117dc21699415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b37027ed830daa7dfaad17a5e20af6b62556df62eafb22ca7117dc21699415->enter($__internal_65b37027ed830daa7dfaad17a5e20af6b62556df62eafb22ca7117dc21699415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"register-box-body\">
        <p class=\"login-box-msg\">Register a new membership</p>

        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_start');
        echo "
            <div class=\"form-group has-feedback\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "name", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Enter your name")));
        echo "
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Enter your email")));
        echo "
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Enter password")));
        echo "
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Retype password")));
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
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'form_end');
        echo "

        <div class=\"social-auth-links text-center\">
            <p>- OR -</p>
            <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign up using
                Facebook</a>
            <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign up using
                Google+</a>
        </div>

        <a href=\"/login\" class=\"text-center\">I already have a membership</a>
    </div>

";
        
        $__internal_65b37027ed830daa7dfaad17a5e20af6b62556df62eafb22ca7117dc21699415->leave($__internal_65b37027ed830daa7dfaad17a5e20af6b62556df62eafb22ca7117dc21699415_prof);

        
        $__internal_c0d641bd24aa16904015bf85f3da4b359a2dc42f7b36a5374e6cc20733dd6144->leave($__internal_c0d641bd24aa16904015bf85f3da4b359a2dc42f7b36a5374e6cc20733dd6144_prof);

    }

    // line 58
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f6976deb19af4e51e187f0db01f24292f1348810c970454fb49966c723281d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6976deb19af4e51e187f0db01f24292f1348810c970454fb49966c723281d9d->enter($__internal_f6976deb19af4e51e187f0db01f24292f1348810c970454fb49966c723281d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_db8806ff1817af1c6063d049c4df7a888d0d35e7b34fcf8dcc02c827fa32e201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8806ff1817af1c6063d049c4df7a888d0d35e7b34fcf8dcc02c827fa32e201->enter($__internal_db8806ff1817af1c6063d049c4df7a888d0d35e7b34fcf8dcc02c827fa32e201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 59
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <!-- jQuery 2.2.3 -->
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 70
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
        
        $__internal_db8806ff1817af1c6063d049c4df7a888d0d35e7b34fcf8dcc02c827fa32e201->leave($__internal_db8806ff1817af1c6063d049c4df7a888d0d35e7b34fcf8dcc02c827fa32e201_prof);

        
        $__internal_f6976deb19af4e51e187f0db01f24292f1348810c970454fb49966c723281d9d->leave($__internal_f6976deb19af4e51e187f0db01f24292f1348810c970454fb49966c723281d9d_prof);

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
        return array (  175 => 70,  170 => 68,  165 => 66,  156 => 59,  147 => 58,  123 => 43,  103 => 26,  96 => 22,  89 => 18,  82 => 14,  77 => 12,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'auth/base.html.twig' %}

{% block title %}
    TODO - Register
{% endblock %}

{% block body %}

    <div class=\"register-box-body\">
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
    </div>

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
{% endblock %}", "auth/register.html.twig", "/home/emas/Projects/dd-project/app/Resources/views/auth/register.html.twig");
    }
}
