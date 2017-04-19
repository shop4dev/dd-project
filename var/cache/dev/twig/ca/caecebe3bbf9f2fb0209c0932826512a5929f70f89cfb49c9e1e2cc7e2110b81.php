<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_1c52d9de2cecdf3fda59ceaa1da8c8cb8d01d9d1f827be54d0310f2a9c4e31ed extends Twig_Template
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
        $__internal_1758ec0ffef33003a04bf07aa66fe96b8e2ed6c9606905d9995604079f027d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1758ec0ffef33003a04bf07aa66fe96b8e2ed6c9606905d9995604079f027d08->enter($__internal_1758ec0ffef33003a04bf07aa66fe96b8e2ed6c9606905d9995604079f027d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_2ba2430653446812adcc3f9abb6444195a7a63e78a326c45d7e9535244deb8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba2430653446812adcc3f9abb6444195a7a63e78a326c45d7e9535244deb8be->enter($__internal_2ba2430653446812adcc3f9abb6444195a7a63e78a326c45d7e9535244deb8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_1758ec0ffef33003a04bf07aa66fe96b8e2ed6c9606905d9995604079f027d08->leave($__internal_1758ec0ffef33003a04bf07aa66fe96b8e2ed6c9606905d9995604079f027d08_prof);

        
        $__internal_2ba2430653446812adcc3f9abb6444195a7a63e78a326c45d7e9535244deb8be->leave($__internal_2ba2430653446812adcc3f9abb6444195a7a63e78a326c45d7e9535244deb8be_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "WebProfilerBundle:Profiler:header.html.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
