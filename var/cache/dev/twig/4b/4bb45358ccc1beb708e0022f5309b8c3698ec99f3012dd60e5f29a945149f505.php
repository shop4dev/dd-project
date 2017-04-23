<?php

/* default/index.html.twig */
class __TwigTemplate_36c6de60a93b3bacd313779ce0df1b307a7261d42eac892d0c63b8be4c9c71da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ec43b126f978192ef9209f9872774d82d4bdc0bb74a8bec0afcc5978fd2b11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec43b126f978192ef9209f9872774d82d4bdc0bb74a8bec0afcc5978fd2b11d->enter($__internal_3ec43b126f978192ef9209f9872774d82d4bdc0bb74a8bec0afcc5978fd2b11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_2cc9cc3edd60b38c9ee61623012effb772c1a35f4e4cd9273fdd988a557bcd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc9cc3edd60b38c9ee61623012effb772c1a35f4e4cd9273fdd988a557bcd03->enter($__internal_2cc9cc3edd60b38c9ee61623012effb772c1a35f4e4cd9273fdd988a557bcd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ec43b126f978192ef9209f9872774d82d4bdc0bb74a8bec0afcc5978fd2b11d->leave($__internal_3ec43b126f978192ef9209f9872774d82d4bdc0bb74a8bec0afcc5978fd2b11d_prof);

        
        $__internal_2cc9cc3edd60b38c9ee61623012effb772c1a35f4e4cd9273fdd988a557bcd03->leave($__internal_2cc9cc3edd60b38c9ee61623012effb772c1a35f4e4cd9273fdd988a557bcd03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6156dbe38a8712f2f531131704b6da9fc9a498991f3f05a1120621c0314d391c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6156dbe38a8712f2f531131704b6da9fc9a498991f3f05a1120621c0314d391c->enter($__internal_6156dbe38a8712f2f531131704b6da9fc9a498991f3f05a1120621c0314d391c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9b7c4a72ba223195f2580ed8a513e530853ef96b0fa9d6ad98fc9861a5a0e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b7c4a72ba223195f2580ed8a513e530853ef96b0fa9d6ad98fc9861a5a0e72->enter($__internal_d9b7c4a72ba223195f2580ed8a513e530853ef96b0fa9d6ad98fc9861a5a0e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
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

        <!-- home section -->
        <section id=\"home\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <h3>NOTE TASKS / HELP EACH OTHER / MAKE LIFE EASY</h3>
                        <h1>myTASKS</h1>
                        <hr>
                        <a href=\"/login\" class=\"smoothScroll btn btn-danger\">Sing in</a>
                        <a href=\"/register\" class=\"smoothScroll btn btn-default\">Sing up</a>
                    </div>
                </div>
            </div>\t\t
        </section>

        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/smoothscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/isotope.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/imagesloaded.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_d9b7c4a72ba223195f2580ed8a513e530853ef96b0fa9d6ad98fc9861a5a0e72->leave($__internal_d9b7c4a72ba223195f2580ed8a513e530853ef96b0fa9d6ad98fc9861a5a0e72_prof);

        
        $__internal_6156dbe38a8712f2f531131704b6da9fc9a498991f3f05a1120621c0314d391c->leave($__internal_6156dbe38a8712f2f531131704b6da9fc9a498991f3f05a1120621c0314d391c_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 49,  116 => 48,  112 => 47,  108 => 46,  104 => 45,  100 => 44,  96 => 43,  92 => 42,  88 => 41,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/base.html.twig' %}

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

        <!-- home section -->
        <section id=\"home\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <h3>NOTE TASKS / HELP EACH OTHER / MAKE LIFE EASY</h3>
                        <h1>myTASKS</h1>
                        <hr>
                        <a href=\"/login\" class=\"smoothScroll btn btn-danger\">Sing in</a>
                        <a href=\"/register\" class=\"smoothScroll btn btn-default\">Sing up</a>
                    </div>
                </div>
            </div>\t\t
        </section>

        <script src=\"{{ asset('js/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('js/smoothscroll.js') }}\"></script>
        <script src=\"{{ asset('js/isotope.js') }}\"></script>
        <script src=\"{{ asset('js/imagesloaded.min.js') }}\"></script>
        <script src=\"{{ asset('js/nivo-lightbox.min.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.backstretch.min.js') }}\"></script>
        <script src=\"{{ asset('js/wow.min.js') }}\"></script>
        <script src=\"{{ asset('js/custom.js') }}\"></script>

{% endblock %}
", "default/index.html.twig", "/home/petras/dd-project/app/Resources/views/default/index.html.twig");
    }
}
