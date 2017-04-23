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
        $__internal_6bc972c87c3ba988443991d0b4ad8bceba9da0bca985f5b7f9bfe5a5fc59b155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc972c87c3ba988443991d0b4ad8bceba9da0bca985f5b7f9bfe5a5fc59b155->enter($__internal_6bc972c87c3ba988443991d0b4ad8bceba9da0bca985f5b7f9bfe5a5fc59b155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/base.html.twig"));

        $__internal_660f4c890feab6e161372cdf65cf3bcc987415e8d6326152f199a0ca0811376a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660f4c890feab6e161372cdf65cf3bcc987415e8d6326152f199a0ca0811376a->enter($__internal_660f4c890feab6e161372cdf65cf3bcc987415e8d6326152f199a0ca0811376a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/base.html.twig"));

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
        
        $__internal_6bc972c87c3ba988443991d0b4ad8bceba9da0bca985f5b7f9bfe5a5fc59b155->leave($__internal_6bc972c87c3ba988443991d0b4ad8bceba9da0bca985f5b7f9bfe5a5fc59b155_prof);

        
        $__internal_660f4c890feab6e161372cdf65cf3bcc987415e8d6326152f199a0ca0811376a->leave($__internal_660f4c890feab6e161372cdf65cf3bcc987415e8d6326152f199a0ca0811376a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e55bb3cf30b7cd823fc4805431c012d4c6e4d209c4fd94c3fc563ad6798d57c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55bb3cf30b7cd823fc4805431c012d4c6e4d209c4fd94c3fc563ad6798d57c8->enter($__internal_e55bb3cf30b7cd823fc4805431c012d4c6e4d209c4fd94c3fc563ad6798d57c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_141b6640423632f4302e13bb4f0222c9ce7258385e5bfa00573b1c23cf91badb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141b6640423632f4302e13bb4f0222c9ce7258385e5bfa00573b1c23cf91badb->enter($__internal_141b6640423632f4302e13bb4f0222c9ce7258385e5bfa00573b1c23cf91badb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_141b6640423632f4302e13bb4f0222c9ce7258385e5bfa00573b1c23cf91badb->leave($__internal_141b6640423632f4302e13bb4f0222c9ce7258385e5bfa00573b1c23cf91badb_prof);

        
        $__internal_e55bb3cf30b7cd823fc4805431c012d4c6e4d209c4fd94c3fc563ad6798d57c8->leave($__internal_e55bb3cf30b7cd823fc4805431c012d4c6e4d209c4fd94c3fc563ad6798d57c8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48ca01269d90fad6427bf832aff58eaaa7ae9476e2a6a65ba784c88154705880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ca01269d90fad6427bf832aff58eaaa7ae9476e2a6a65ba784c88154705880->enter($__internal_48ca01269d90fad6427bf832aff58eaaa7ae9476e2a6a65ba784c88154705880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_49d395076a364b64bd1e184c995be3563f02a5cc8ae679918a1f8242dde43570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d395076a364b64bd1e184c995be3563f02a5cc8ae679918a1f8242dde43570->enter($__internal_49d395076a364b64bd1e184c995be3563f02a5cc8ae679918a1f8242dde43570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_49d395076a364b64bd1e184c995be3563f02a5cc8ae679918a1f8242dde43570->leave($__internal_49d395076a364b64bd1e184c995be3563f02a5cc8ae679918a1f8242dde43570_prof);

        
        $__internal_48ca01269d90fad6427bf832aff58eaaa7ae9476e2a6a65ba784c88154705880->leave($__internal_48ca01269d90fad6427bf832aff58eaaa7ae9476e2a6a65ba784c88154705880_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_12237b35f560057737a7380937517eefdb0530357361d58abeaff115e82ea289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12237b35f560057737a7380937517eefdb0530357361d58abeaff115e82ea289->enter($__internal_12237b35f560057737a7380937517eefdb0530357361d58abeaff115e82ea289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5d9f7f302cf97ceee536a8f2c632c90901a418a8291d48a0174ee7d8c378ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d9f7f302cf97ceee536a8f2c632c90901a418a8291d48a0174ee7d8c378ccc->enter($__internal_c5d9f7f302cf97ceee536a8f2c632c90901a418a8291d48a0174ee7d8c378ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c5d9f7f302cf97ceee536a8f2c632c90901a418a8291d48a0174ee7d8c378ccc->leave($__internal_c5d9f7f302cf97ceee536a8f2c632c90901a418a8291d48a0174ee7d8c378ccc_prof);

        
        $__internal_12237b35f560057737a7380937517eefdb0530357361d58abeaff115e82ea289->leave($__internal_12237b35f560057737a7380937517eefdb0530357361d58abeaff115e82ea289_prof);

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
</html>", "default/base.html.twig", "/home/petras/dd-project/app/Resources/views/default/base.html.twig");
    }
}
