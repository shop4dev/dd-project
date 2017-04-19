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
        $__internal_1de370667ea10a26f7d1d900b46ef773da76275fbc3a9cff04a1ce0b1a35c081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de370667ea10a26f7d1d900b46ef773da76275fbc3a9cff04a1ce0b1a35c081->enter($__internal_1de370667ea10a26f7d1d900b46ef773da76275fbc3a9cff04a1ce0b1a35c081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_619419d0c1d4bc37d2ff3089dd932397c6f0c53d90635a92babcfee9ef79417e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_619419d0c1d4bc37d2ff3089dd932397c6f0c53d90635a92babcfee9ef79417e->enter($__internal_619419d0c1d4bc37d2ff3089dd932397c6f0c53d90635a92babcfee9ef79417e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/et-line-font.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nivo-lightbox.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nivo_themes/default/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    </head>
    <body data-spy=\"scroll\" data-target=\".navbar-collapse\" data-offset=\"50\">

        <!-- navigation section -->
        <section class=\"navbar navbar-fixed-top custom-navbar\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon icon-bar\"></span>
                        <span class=\"icon icon-bar\"></span>
                        <span class=\"icon icon-bar\"></span>
                    </button>
                    <a href=\"#\" class=\"navbar-brand\">myTasks</a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#home\" class=\"smoothScroll\">HOME</a></li>
                        <li><a href=\"#\" class=\"\">SING IN</a></li>
                        <li><a href=\"#\" class=\"\">SING UP</a></li>
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
                        <a href=\"#work\" class=\"smoothScroll btn btn-danger\">Sing in</a>
                        <a href=\"#contact\" class=\"smoothScroll btn btn-default\">Sing up</a>
                    </div>
                </div>
            </div>\t\t
        </section>

        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/smoothscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/isotope.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/imagesloaded.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    </body>
</html>
";
        
        $__internal_1de370667ea10a26f7d1d900b46ef773da76275fbc3a9cff04a1ce0b1a35c081->leave($__internal_1de370667ea10a26f7d1d900b46ef773da76275fbc3a9cff04a1ce0b1a35c081_prof);

        
        $__internal_619419d0c1d4bc37d2ff3089dd932397c6f0c53d90635a92babcfee9ef79417e->leave($__internal_619419d0c1d4bc37d2ff3089dd932397c6f0c53d90635a92babcfee9ef79417e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce783b914ca71dc173c93973d778f315dc73903fbf97e1ace37e9ac426de0ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce783b914ca71dc173c93973d778f315dc73903fbf97e1ace37e9ac426de0ff5->enter($__internal_ce783b914ca71dc173c93973d778f315dc73903fbf97e1ace37e9ac426de0ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea1fb778825037ad85438430327538bb414757df4d9625bb7e8a54e16bfb13f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1fb778825037ad85438430327538bb414757df4d9625bb7e8a54e16bfb13f9->enter($__internal_ea1fb778825037ad85438430327538bb414757df4d9625bb7e8a54e16bfb13f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ea1fb778825037ad85438430327538bb414757df4d9625bb7e8a54e16bfb13f9->leave($__internal_ea1fb778825037ad85438430327538bb414757df4d9625bb7e8a54e16bfb13f9_prof);

        
        $__internal_ce783b914ca71dc173c93973d778f315dc73903fbf97e1ace37e9ac426de0ff5->leave($__internal_ce783b914ca71dc173c93973d778f315dc73903fbf97e1ace37e9ac426de0ff5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_33fb874f9ebf142e5cefcb17a2a7fd4011161c0d40548f69e87281154a93f459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33fb874f9ebf142e5cefcb17a2a7fd4011161c0d40548f69e87281154a93f459->enter($__internal_33fb874f9ebf142e5cefcb17a2a7fd4011161c0d40548f69e87281154a93f459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_290ac70d8c46d34d9c9faaf5016d80e073397848dbb57278be8c335ca1dad16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290ac70d8c46d34d9c9faaf5016d80e073397848dbb57278be8c335ca1dad16f->enter($__internal_290ac70d8c46d34d9c9faaf5016d80e073397848dbb57278be8c335ca1dad16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_290ac70d8c46d34d9c9faaf5016d80e073397848dbb57278be8c335ca1dad16f->leave($__internal_290ac70d8c46d34d9c9faaf5016d80e073397848dbb57278be8c335ca1dad16f_prof);

        
        $__internal_33fb874f9ebf142e5cefcb17a2a7fd4011161c0d40548f69e87281154a93f459->leave($__internal_33fb874f9ebf142e5cefcb17a2a7fd4011161c0d40548f69e87281154a93f459_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7d06aa3b42cc7ea71e34230de1b0d3c59133e167f1cadea55f66888b2ea7990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d06aa3b42cc7ea71e34230de1b0d3c59133e167f1cadea55f66888b2ea7990->enter($__internal_f7d06aa3b42cc7ea71e34230de1b0d3c59133e167f1cadea55f66888b2ea7990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a33dfa1e077a0167317766523227e1332a0148e2d2d9cd1c4b256cb850a685b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a33dfa1e077a0167317766523227e1332a0148e2d2d9cd1c4b256cb850a685b->enter($__internal_8a33dfa1e077a0167317766523227e1332a0148e2d2d9cd1c4b256cb850a685b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8a33dfa1e077a0167317766523227e1332a0148e2d2d9cd1c4b256cb850a685b->leave($__internal_8a33dfa1e077a0167317766523227e1332a0148e2d2d9cd1c4b256cb850a685b_prof);

        
        $__internal_f7d06aa3b42cc7ea71e34230de1b0d3c59133e167f1cadea55f66888b2ea7990->leave($__internal_f7d06aa3b42cc7ea71e34230de1b0d3c59133e167f1cadea55f66888b2ea7990_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f6150fe9e6c57ff0f2dda63a4c23dc683b88a98b66058bbefbfa95e703d22c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6150fe9e6c57ff0f2dda63a4c23dc683b88a98b66058bbefbfa95e703d22c8->enter($__internal_6f6150fe9e6c57ff0f2dda63a4c23dc683b88a98b66058bbefbfa95e703d22c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_15b2e2439c1ec7f4a8b91133c6f2d444164c022414619ae0669ecb70aff27a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b2e2439c1ec7f4a8b91133c6f2d444164c022414619ae0669ecb70aff27a61->enter($__internal_15b2e2439c1ec7f4a8b91133c6f2d444164c022414619ae0669ecb70aff27a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_15b2e2439c1ec7f4a8b91133c6f2d444164c022414619ae0669ecb70aff27a61->leave($__internal_15b2e2439c1ec7f4a8b91133c6f2d444164c022414619ae0669ecb70aff27a61_prof);

        
        $__internal_6f6150fe9e6c57ff0f2dda63a4c23dc683b88a98b66058bbefbfa95e703d22c8->leave($__internal_6f6150fe9e6c57ff0f2dda63a4c23dc683b88a98b66058bbefbfa95e703d22c8_prof);

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
        return array (  225 => 68,  208 => 67,  191 => 6,  173 => 5,  161 => 69,  158 => 68,  156 => 67,  151 => 65,  147 => 64,  143 => 63,  139 => 62,  135 => 61,  131 => 60,  127 => 59,  123 => 58,  119 => 57,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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

        <!-- navigation section -->
        <section class=\"navbar navbar-fixed-top custom-navbar\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon icon-bar\"></span>
                        <span class=\"icon icon-bar\"></span>
                        <span class=\"icon icon-bar\"></span>
                    </button>
                    <a href=\"#\" class=\"navbar-brand\">myTasks</a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#home\" class=\"smoothScroll\">HOME</a></li>
                        <li><a href=\"#\" class=\"\">SING IN</a></li>
                        <li><a href=\"#\" class=\"\">SING UP</a></li>
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
                        <a href=\"#work\" class=\"smoothScroll btn btn-danger\">Sing in</a>
                        <a href=\"#contact\" class=\"smoothScroll btn btn-default\">Sing up</a>
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

        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/tommar5/dd-project/app/Resources/views/base.html.twig");
    }
}
