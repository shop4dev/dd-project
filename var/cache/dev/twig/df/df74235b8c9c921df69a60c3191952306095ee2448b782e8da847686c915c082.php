<?php

/* todo/base.html.twig */
class __TwigTemplate_86bfe8dd6f1305584615c996573cdc0111cfd6cae8d1f84c1035c163ed40c26c extends Twig_Template
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
        $__internal_f9e9fd1112d6346b3d4e2fd112a9fc46e619fb9153f683838554b1ae49a6ba59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e9fd1112d6346b3d4e2fd112a9fc46e619fb9153f683838554b1ae49a6ba59->enter($__internal_f9e9fd1112d6346b3d4e2fd112a9fc46e619fb9153f683838554b1ae49a6ba59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/base.html.twig"));

        $__internal_489f5feee042fe64c305a10b775233c922e56ff93fc665e826451fe334965fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489f5feee042fe64c305a10b775233c922e56ff93fc665e826451fe334965fc6->enter($__internal_489f5feee042fe64c305a10b775233c922e56ff93fc665e826451fe334965fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">

    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

</head>

<body>

<div class=\"container\" style=\"width: 100%;\">

    <div class=\"row\">

        <div class=\"col-md-12\">

            ";
        // line 31
        echo "                ";
        // line 32
        echo "            ";
        // line 33
        echo "            ";
        // line 34
        echo "                ";
        // line 35
        echo "            ";
        // line 36
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
        </div>

    </div>

</div><!-- /.container -->


";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "
</body>
</html>

";
        
        $__internal_f9e9fd1112d6346b3d4e2fd112a9fc46e619fb9153f683838554b1ae49a6ba59->leave($__internal_f9e9fd1112d6346b3d4e2fd112a9fc46e619fb9153f683838554b1ae49a6ba59_prof);

        
        $__internal_489f5feee042fe64c305a10b775233c922e56ff93fc665e826451fe334965fc6->leave($__internal_489f5feee042fe64c305a10b775233c922e56ff93fc665e826451fe334965fc6_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd48d111b044e3189d710a40e29aa0dad9cb667b88a4c8cf45bdc53456fd9589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd48d111b044e3189d710a40e29aa0dad9cb667b88a4c8cf45bdc53456fd9589->enter($__internal_cd48d111b044e3189d710a40e29aa0dad9cb667b88a4c8cf45bdc53456fd9589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c69c7ac355ab1965bc06ab37da3f20347e07030835e885703e362aa776b8a456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69c7ac355ab1965bc06ab37da3f20347e07030835e885703e362aa776b8a456->enter($__internal_c69c7ac355ab1965bc06ab37da3f20347e07030835e885703e362aa776b8a456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c69c7ac355ab1965bc06ab37da3f20347e07030835e885703e362aa776b8a456->leave($__internal_c69c7ac355ab1965bc06ab37da3f20347e07030835e885703e362aa776b8a456_prof);

        
        $__internal_cd48d111b044e3189d710a40e29aa0dad9cb667b88a4c8cf45bdc53456fd9589->leave($__internal_cd48d111b044e3189d710a40e29aa0dad9cb667b88a4c8cf45bdc53456fd9589_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38daad7eeeee8437fe76885f641716beb6477ece85a1deab39a6cc4e39136456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38daad7eeeee8437fe76885f641716beb6477ece85a1deab39a6cc4e39136456->enter($__internal_38daad7eeeee8437fe76885f641716beb6477ece85a1deab39a6cc4e39136456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_18f5f43bb33a8db943024193cee1af5d972129c929a45742e9990d2e0642483e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f5f43bb33a8db943024193cee1af5d972129c929a45742e9990d2e0642483e->enter($__internal_18f5f43bb33a8db943024193cee1af5d972129c929a45742e9990d2e0642483e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_18f5f43bb33a8db943024193cee1af5d972129c929a45742e9990d2e0642483e->leave($__internal_18f5f43bb33a8db943024193cee1af5d972129c929a45742e9990d2e0642483e_prof);

        
        $__internal_38daad7eeeee8437fe76885f641716beb6477ece85a1deab39a6cc4e39136456->leave($__internal_38daad7eeeee8437fe76885f641716beb6477ece85a1deab39a6cc4e39136456_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_b344b155016f25bd28d6f8b838a70a31a2e34bc3a923bc0a92d6a6c94c9cf309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b344b155016f25bd28d6f8b838a70a31a2e34bc3a923bc0a92d6a6c94c9cf309->enter($__internal_b344b155016f25bd28d6f8b838a70a31a2e34bc3a923bc0a92d6a6c94c9cf309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9c416e212b87d8974eeecdc700a9ad84d187f9556909ecc9f4fac2f51f7bc6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c416e212b87d8974eeecdc700a9ad84d187f9556909ecc9f4fac2f51f7bc6d->enter($__internal_c9c416e212b87d8974eeecdc700a9ad84d187f9556909ecc9f4fac2f51f7bc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c9c416e212b87d8974eeecdc700a9ad84d187f9556909ecc9f4fac2f51f7bc6d->leave($__internal_c9c416e212b87d8974eeecdc700a9ad84d187f9556909ecc9f4fac2f51f7bc6d_prof);

        
        $__internal_b344b155016f25bd28d6f8b838a70a31a2e34bc3a923bc0a92d6a6c94c9cf309->leave($__internal_b344b155016f25bd28d6f8b838a70a31a2e34bc3a923bc0a92d6a6c94c9cf309_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5678a9ef0bc346aa7095916ef2d14b0f1978bcd6d313b1e875ff42693d5e7c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5678a9ef0bc346aa7095916ef2d14b0f1978bcd6d313b1e875ff42693d5e7c7d->enter($__internal_5678a9ef0bc346aa7095916ef2d14b0f1978bcd6d313b1e875ff42693d5e7c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6cc5893618a627efcca971dd3b4a70356b9a66dba4b851c3e5145884b8d0442f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc5893618a627efcca971dd3b4a70356b9a66dba4b851c3e5145884b8d0442f->enter($__internal_6cc5893618a627efcca971dd3b4a70356b9a66dba4b851c3e5145884b8d0442f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6cc5893618a627efcca971dd3b4a70356b9a66dba4b851c3e5145884b8d0442f->leave($__internal_6cc5893618a627efcca971dd3b4a70356b9a66dba4b851c3e5145884b8d0442f_prof);

        
        $__internal_5678a9ef0bc346aa7095916ef2d14b0f1978bcd6d313b1e875ff42693d5e7c7d->leave($__internal_5678a9ef0bc346aa7095916ef2d14b0f1978bcd6d313b1e875ff42693d5e7c7d_prof);

    }

    public function getTemplateName()
    {
        return "todo/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 45,  142 => 36,  125 => 17,  107 => 12,  93 => 46,  91 => 45,  81 => 37,  78 => 36,  76 => 35,  74 => 34,  72 => 33,  70 => 32,  68 => 31,  52 => 18,  50 => 17,  42 => 12,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>{% block title %}Welcome!{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

</head>

<body>

<div class=\"container\" style=\"width: 100%;\">

    <div class=\"row\">

        <div class=\"col-md-12\">

            {#{% for flash_message in app.session.flashbag.get('notice') %}#}
                {#<div class=\"alert alert-success\">{{ flash_message }}</div>#}
            {#{% endfor %}#}
            {#{% for flash_message in app.session.flashbag.get('error') %}#}
                {#<div class=\"alert alert-danger\">{{ flash_message }}</div>#}
            {#{% endfor %}#}
            {% block body %}{% endblock %}

        </div>

    </div>

</div><!-- /.container -->


{% block javascripts %}{% endblock %}

</body>
</html>

", "todo/base.html.twig", "/home/petras/dd-project/app/Resources/views/todo/base.html.twig");
    }
}
