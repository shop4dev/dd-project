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
        $__internal_60fa6652faa1865f254a6f10448c5a30d272e593378edb7105d08bb99bb49045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60fa6652faa1865f254a6f10448c5a30d272e593378edb7105d08bb99bb49045->enter($__internal_60fa6652faa1865f254a6f10448c5a30d272e593378edb7105d08bb99bb49045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/base.html.twig"));

        $__internal_648a0c9017f71049b89413c0125bdd0a088e89a0ca71d954dfed214590696c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648a0c9017f71049b89413c0125bdd0a088e89a0ca71d954dfed214590696c46->enter($__internal_648a0c9017f71049b89413c0125bdd0a088e89a0ca71d954dfed214590696c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/base.html.twig"));

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
        
        $__internal_60fa6652faa1865f254a6f10448c5a30d272e593378edb7105d08bb99bb49045->leave($__internal_60fa6652faa1865f254a6f10448c5a30d272e593378edb7105d08bb99bb49045_prof);

        
        $__internal_648a0c9017f71049b89413c0125bdd0a088e89a0ca71d954dfed214590696c46->leave($__internal_648a0c9017f71049b89413c0125bdd0a088e89a0ca71d954dfed214590696c46_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_dddbc6074a8a6e4d608ec739cd5c93eea0c12031854c842aee294a863734a9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dddbc6074a8a6e4d608ec739cd5c93eea0c12031854c842aee294a863734a9b4->enter($__internal_dddbc6074a8a6e4d608ec739cd5c93eea0c12031854c842aee294a863734a9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8e2644b87ec859750d7e8e99216919b94505afdd3fd172800a958d73f8b0842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e2644b87ec859750d7e8e99216919b94505afdd3fd172800a958d73f8b0842->enter($__internal_e8e2644b87ec859750d7e8e99216919b94505afdd3fd172800a958d73f8b0842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e8e2644b87ec859750d7e8e99216919b94505afdd3fd172800a958d73f8b0842->leave($__internal_e8e2644b87ec859750d7e8e99216919b94505afdd3fd172800a958d73f8b0842_prof);

        
        $__internal_dddbc6074a8a6e4d608ec739cd5c93eea0c12031854c842aee294a863734a9b4->leave($__internal_dddbc6074a8a6e4d608ec739cd5c93eea0c12031854c842aee294a863734a9b4_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_010e2a0b4a1be8ac0de9325a9a1cd4b2b87604734a454647970dc5f4b725ab60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010e2a0b4a1be8ac0de9325a9a1cd4b2b87604734a454647970dc5f4b725ab60->enter($__internal_010e2a0b4a1be8ac0de9325a9a1cd4b2b87604734a454647970dc5f4b725ab60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7c70b0467f757673bb63c9ad03bd86614579500c7ba0986073465192eb34c767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c70b0467f757673bb63c9ad03bd86614579500c7ba0986073465192eb34c767->enter($__internal_7c70b0467f757673bb63c9ad03bd86614579500c7ba0986073465192eb34c767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7c70b0467f757673bb63c9ad03bd86614579500c7ba0986073465192eb34c767->leave($__internal_7c70b0467f757673bb63c9ad03bd86614579500c7ba0986073465192eb34c767_prof);

        
        $__internal_010e2a0b4a1be8ac0de9325a9a1cd4b2b87604734a454647970dc5f4b725ab60->leave($__internal_010e2a0b4a1be8ac0de9325a9a1cd4b2b87604734a454647970dc5f4b725ab60_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_d76a12057da94035e11839840ea6decb367b42f4770c9633b1d72c34e9db83e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76a12057da94035e11839840ea6decb367b42f4770c9633b1d72c34e9db83e4->enter($__internal_d76a12057da94035e11839840ea6decb367b42f4770c9633b1d72c34e9db83e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e36dad36f9445f57a93114de7d51af63fedf20cc62f066da6f5c42db18c18cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36dad36f9445f57a93114de7d51af63fedf20cc62f066da6f5c42db18c18cf4->enter($__internal_e36dad36f9445f57a93114de7d51af63fedf20cc62f066da6f5c42db18c18cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e36dad36f9445f57a93114de7d51af63fedf20cc62f066da6f5c42db18c18cf4->leave($__internal_e36dad36f9445f57a93114de7d51af63fedf20cc62f066da6f5c42db18c18cf4_prof);

        
        $__internal_d76a12057da94035e11839840ea6decb367b42f4770c9633b1d72c34e9db83e4->leave($__internal_d76a12057da94035e11839840ea6decb367b42f4770c9633b1d72c34e9db83e4_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb3dce26a24a4ef61b93bb1eaa40116dc0584df5141aa71d67bbae684d105f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3dce26a24a4ef61b93bb1eaa40116dc0584df5141aa71d67bbae684d105f3e->enter($__internal_bb3dce26a24a4ef61b93bb1eaa40116dc0584df5141aa71d67bbae684d105f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fec5567005a2c026c3575705ec455f67387c9bc1f0c7a34b437b4a7f137610d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec5567005a2c026c3575705ec455f67387c9bc1f0c7a34b437b4a7f137610d9->enter($__internal_fec5567005a2c026c3575705ec455f67387c9bc1f0c7a34b437b4a7f137610d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fec5567005a2c026c3575705ec455f67387c9bc1f0c7a34b437b4a7f137610d9->leave($__internal_fec5567005a2c026c3575705ec455f67387c9bc1f0c7a34b437b4a7f137610d9_prof);

        
        $__internal_bb3dce26a24a4ef61b93bb1eaa40116dc0584df5141aa71d67bbae684d105f3e->leave($__internal_bb3dce26a24a4ef61b93bb1eaa40116dc0584df5141aa71d67bbae684d105f3e_prof);

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

", "todo/base.html.twig", "/home/emas/Projects/todolist/app/Resources/views/todo/base.html.twig");
    }
}
