<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_d9fc170db502fdbe40aeb6295dbbb7913b549dc715619293b74e03f57758d049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85846933e1013db59821ff3e2414c2900f88b5f0dab9ee1be3c0c95e1aecd906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85846933e1013db59821ff3e2414c2900f88b5f0dab9ee1be3c0c95e1aecd906->enter($__internal_85846933e1013db59821ff3e2414c2900f88b5f0dab9ee1be3c0c95e1aecd906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_094d7275023f0f0c94bb145a22479173b51565424b9c323729f544bbe456db64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094d7275023f0f0c94bb145a22479173b51565424b9c323729f544bbe456db64->enter($__internal_094d7275023f0f0c94bb145a22479173b51565424b9c323729f544bbe456db64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_85846933e1013db59821ff3e2414c2900f88b5f0dab9ee1be3c0c95e1aecd906->leave($__internal_85846933e1013db59821ff3e2414c2900f88b5f0dab9ee1be3c0c95e1aecd906_prof);

        
        $__internal_094d7275023f0f0c94bb145a22479173b51565424b9c323729f544bbe456db64->leave($__internal_094d7275023f0f0c94bb145a22479173b51565424b9c323729f544bbe456db64_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/emas/Projects/todolist/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
