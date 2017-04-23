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
        $__internal_9ca267ea5abbc5255e50e4032b2474216a638817dc5809a293960d15ac7fd2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca267ea5abbc5255e50e4032b2474216a638817dc5809a293960d15ac7fd2b8->enter($__internal_9ca267ea5abbc5255e50e4032b2474216a638817dc5809a293960d15ac7fd2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $__internal_fa90adecccf2036dadda9b42a5a5ac164bcf2222eebd16a51f29ea284b230b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa90adecccf2036dadda9b42a5a5ac164bcf2222eebd16a51f29ea284b230b1e->enter($__internal_fa90adecccf2036dadda9b42a5a5ac164bcf2222eebd16a51f29ea284b230b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ca267ea5abbc5255e50e4032b2474216a638817dc5809a293960d15ac7fd2b8->leave($__internal_9ca267ea5abbc5255e50e4032b2474216a638817dc5809a293960d15ac7fd2b8_prof);

        
        $__internal_fa90adecccf2036dadda9b42a5a5ac164bcf2222eebd16a51f29ea284b230b1e->leave($__internal_fa90adecccf2036dadda9b42a5a5ac164bcf2222eebd16a51f29ea284b230b1e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5a5d26952ab3befb944a1bb8c296f3611f7243cd6865f491087717c002b39d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a5d26952ab3befb944a1bb8c296f3611f7243cd6865f491087717c002b39d2->enter($__internal_b5a5d26952ab3befb944a1bb8c296f3611f7243cd6865f491087717c002b39d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2d83191a34c077185ca20ef77344e928b559e5ab9f84f430b5fe2e31118b43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d83191a34c077185ca20ef77344e928b559e5ab9f84f430b5fe2e31118b43a->enter($__internal_e2d83191a34c077185ca20ef77344e928b559e5ab9f84f430b5fe2e31118b43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    TODO - Login
";
        
        $__internal_e2d83191a34c077185ca20ef77344e928b559e5ab9f84f430b5fe2e31118b43a->leave($__internal_e2d83191a34c077185ca20ef77344e928b559e5ab9f84f430b5fe2e31118b43a_prof);

        
        $__internal_b5a5d26952ab3befb944a1bb8c296f3611f7243cd6865f491087717c002b39d2->leave($__internal_b5a5d26952ab3befb944a1bb8c296f3611f7243cd6865f491087717c002b39d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d8d2ba6120f5c98d26269fa0506872bc3bde80f92ea9806b1e5da7556db5ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8d2ba6120f5c98d26269fa0506872bc3bde80f92ea9806b1e5da7556db5ee6->enter($__internal_3d8d2ba6120f5c98d26269fa0506872bc3bde80f92ea9806b1e5da7556db5ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2340176c146656725c999239be24ee8bdcaeea91517c5eb7beac301d31784015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2340176c146656725c999239be24ee8bdcaeea91517c5eb7beac301d31784015->enter($__internal_2340176c146656725c999239be24ee8bdcaeea91517c5eb7beac301d31784015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

        <!-- /.login-logo -->
        <section id='home'>
            <div class=\"login-box-body\">
                <p class=\"login-box-msg\">Sign in to start your session</p>

                <form role=\"form\" method=\"POST\" action=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login_check");
        echo "\">
                    ";
        // line 36
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 36, $this->getSourceContext()); })())) {
            // line 37
            echo "                        <div class=\"alert alert-danger\">
                            ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 38, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 38, $this->getSourceContext()); })()), "messageData", array())), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 41
        echo "                    <div class=\"form-group has-feedback\">
                        <input id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"Email\">
                        ";
        // line 44
        echo "                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Password\">
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>
                    <div class=\"row\">
                        ";
        // line 52
        echo "                            ";
        // line 53
        echo "                                ";
        // line 54
        echo "                                    ";
        // line 55
        echo "                                ";
        // line 56
        echo "                            ";
        // line 57
        echo "                        ";
        // line 58
        echo "                        <!-- /.col -->
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
            <!-- /.login-box-body -->\t\t
    </section>

";
        
        $__internal_2340176c146656725c999239be24ee8bdcaeea91517c5eb7beac301d31784015->leave($__internal_2340176c146656725c999239be24ee8bdcaeea91517c5eb7beac301d31784015_prof);

        
        $__internal_3d8d2ba6120f5c98d26269fa0506872bc3bde80f92ea9806b1e5da7556db5ee6->leave($__internal_3d8d2ba6120f5c98d26269fa0506872bc3bde80f92ea9806b1e5da7556db5ee6_prof);

    }

    // line 84
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_04a42790d1733aa8650839f0b2b309890038ee30927c17bc8d1b85155172a7f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a42790d1733aa8650839f0b2b309890038ee30927c17bc8d1b85155172a7f3->enter($__internal_04a42790d1733aa8650839f0b2b309890038ee30927c17bc8d1b85155172a7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_2bb83b5b9147cffac6328a943c4c239c95e11fe664be052ba62104ce7521e386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb83b5b9147cffac6328a943c4c239c95e11fe664be052ba62104ce7521e386->enter($__internal_2bb83b5b9147cffac6328a943c4c239c95e11fe664be052ba62104ce7521e386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 85
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <!-- jQuery 2.2.3 -->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 96
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
        
        $__internal_2bb83b5b9147cffac6328a943c4c239c95e11fe664be052ba62104ce7521e386->leave($__internal_2bb83b5b9147cffac6328a943c4c239c95e11fe664be052ba62104ce7521e386_prof);

        
        $__internal_04a42790d1733aa8650839f0b2b309890038ee30927c17bc8d1b85155172a7f3->leave($__internal_04a42790d1733aa8650839f0b2b309890038ee30927c17bc8d1b85155172a7f3_prof);

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
        return array (  205 => 96,  200 => 94,  195 => 92,  186 => 85,  177 => 84,  143 => 58,  141 => 57,  139 => 56,  137 => 55,  135 => 54,  133 => 53,  131 => 52,  122 => 44,  118 => 42,  115 => 41,  109 => 38,  106 => 37,  104 => 36,  100 => 35,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'auth/base.html.twig' %}

{% block title %}
    TODO - Login
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

        <!-- /.login-logo -->
        <section id='home'>
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
            <!-- /.login-box-body -->\t\t
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

{% endblock %}", "auth/login.html.twig", "/home/petras/dd-project/app/Resources/views/auth/login.html.twig");
    }
}
