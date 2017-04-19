<?php

/* base.html.twig */
class __TwigTemplate_ecb3622156435dcef755b54ddd8e4732d0aa1bb06c91b31273e3d3ad684eea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_120668e2500187b7b22454ed9670db4d7f46792465d9db49eb8229e4372573e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120668e2500187b7b22454ed9670db4d7f46792465d9db49eb8229e4372573e6->enter($__internal_120668e2500187b7b22454ed9670db4d7f46792465d9db49eb8229e4372573e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9c70c44bc0f6970fdf535e4f3b4e2e1fb56a93d0507a2ddcc2ad56e91a339257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c70c44bc0f6970fdf535e4f3b4e2e1fb56a93d0507a2ddcc2ad56e91a339257->enter($__internal_9c70c44bc0f6970fdf535e4f3b4e2e1fb56a93d0507a2ddcc2ad56e91a339257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mycss.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

            <!-- Fixed navbar -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">myTasks</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#login\">Login</a></li>
            </ul>
            </div><!--/.nav-collapse -->
        </div>
        </nav>

        <div class=\"container theme-showcase\" role=\"main\">

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class=\"jumbotron\">
                <h1>My Tasks</h1>
                <p>This is a page where every one can store they tasks to do. Check the status of done tasks and help each other to end super hard tasks.</p>
            </div>

        </div> <!-- /container -->

        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </body>
</html>
";
        
        $__internal_120668e2500187b7b22454ed9670db4d7f46792465d9db49eb8229e4372573e6->leave($__internal_120668e2500187b7b22454ed9670db4d7f46792465d9db49eb8229e4372573e6_prof);

        
        $__internal_9c70c44bc0f6970fdf535e4f3b4e2e1fb56a93d0507a2ddcc2ad56e91a339257->leave($__internal_9c70c44bc0f6970fdf535e4f3b4e2e1fb56a93d0507a2ddcc2ad56e91a339257_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0efb7bb553f92331c2832469a519494f8e1959a752fd717b771a29b19f3e1f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0efb7bb553f92331c2832469a519494f8e1959a752fd717b771a29b19f3e1f17->enter($__internal_0efb7bb553f92331c2832469a519494f8e1959a752fd717b771a29b19f3e1f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54fa886f22720ef222883d022c1d40875194a5954524fa8cc9c99b7692135249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fa886f22720ef222883d022c1d40875194a5954524fa8cc9c99b7692135249->enter($__internal_54fa886f22720ef222883d022c1d40875194a5954524fa8cc9c99b7692135249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_54fa886f22720ef222883d022c1d40875194a5954524fa8cc9c99b7692135249->leave($__internal_54fa886f22720ef222883d022c1d40875194a5954524fa8cc9c99b7692135249_prof);

        
        $__internal_0efb7bb553f92331c2832469a519494f8e1959a752fd717b771a29b19f3e1f17->leave($__internal_0efb7bb553f92331c2832469a519494f8e1959a752fd717b771a29b19f3e1f17_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b8343ca5aa35cc4d67b0bd48a88adf8f58bae1c398df0a9fc5a98562f391bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8343ca5aa35cc4d67b0bd48a88adf8f58bae1c398df0a9fc5a98562f391bf5->enter($__internal_0b8343ca5aa35cc4d67b0bd48a88adf8f58bae1c398df0a9fc5a98562f391bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d57ad5dfe5868cbedc7be6df0993b878aee97810a6e7a53acce0b3927bf70641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57ad5dfe5868cbedc7be6df0993b878aee97810a6e7a53acce0b3927bf70641->enter($__internal_d57ad5dfe5868cbedc7be6df0993b878aee97810a6e7a53acce0b3927bf70641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d57ad5dfe5868cbedc7be6df0993b878aee97810a6e7a53acce0b3927bf70641->leave($__internal_d57ad5dfe5868cbedc7be6df0993b878aee97810a6e7a53acce0b3927bf70641_prof);

        
        $__internal_0b8343ca5aa35cc4d67b0bd48a88adf8f58bae1c398df0a9fc5a98562f391bf5->leave($__internal_0b8343ca5aa35cc4d67b0bd48a88adf8f58bae1c398df0a9fc5a98562f391bf5_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e3768353307a92028957add7c8c60e012381e43c402a4e95a68960c1adeee5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3768353307a92028957add7c8c60e012381e43c402a4e95a68960c1adeee5f->enter($__internal_9e3768353307a92028957add7c8c60e012381e43c402a4e95a68960c1adeee5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a355001b0c0abd5209a8df4254747a65e3081fcac04d196221fd03f5d4b8a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a355001b0c0abd5209a8df4254747a65e3081fcac04d196221fd03f5d4b8a8d->enter($__internal_3a355001b0c0abd5209a8df4254747a65e3081fcac04d196221fd03f5d4b8a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3a355001b0c0abd5209a8df4254747a65e3081fcac04d196221fd03f5d4b8a8d->leave($__internal_3a355001b0c0abd5209a8df4254747a65e3081fcac04d196221fd03f5d4b8a8d_prof);

        
        $__internal_9e3768353307a92028957add7c8c60e012381e43c402a4e95a68960c1adeee5f->leave($__internal_9e3768353307a92028957add7c8c60e012381e43c402a4e95a68960c1adeee5f_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac7b56fdb3337712f2203ac6758b593adee653ad7554d7bd7bc369bcfd4f32b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7b56fdb3337712f2203ac6758b593adee653ad7554d7bd7bc369bcfd4f32b2->enter($__internal_ac7b56fdb3337712f2203ac6758b593adee653ad7554d7bd7bc369bcfd4f32b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_44a7b4ef6801d625fb9d534039e0d24aeae9e97fc779abd230a2f4b339bc63cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a7b4ef6801d625fb9d534039e0d24aeae9e97fc779abd230a2f4b339bc63cb->enter($__internal_44a7b4ef6801d625fb9d534039e0d24aeae9e97fc779abd230a2f4b339bc63cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_44a7b4ef6801d625fb9d534039e0d24aeae9e97fc779abd230a2f4b339bc63cb->leave($__internal_44a7b4ef6801d625fb9d534039e0d24aeae9e97fc779abd230a2f4b339bc63cb_prof);

        
        $__internal_ac7b56fdb3337712f2203ac6758b593adee653ad7554d7bd7bc369bcfd4f32b2->leave($__internal_ac7b56fdb3337712f2203ac6758b593adee653ad7554d7bd7bc369bcfd4f32b2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 46,  138 => 45,  121 => 6,  103 => 5,  91 => 47,  88 => 46,  86 => 45,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/mycss.css') }}\"/>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

            <!-- Fixed navbar -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">myTasks</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#login\">Login</a></li>
            </ul>
            </div><!--/.nav-collapse -->
        </div>
        </nav>

        <div class=\"container theme-showcase\" role=\"main\">

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class=\"jumbotron\">
                <h1>My Tasks</h1>
                <p>This is a page where every one can store they tasks to do. Check the status of done tasks and help each other to end super hard tasks.</p>
            </div>

        </div> <!-- /container -->

        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/tommar5/tasks/app/Resources/views/base.html.twig");
    }
}
