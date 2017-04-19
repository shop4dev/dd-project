<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9eb9427f0681f6c757aa23cac29e88c7097157c7b3953dd68cb0443bf377623f extends Twig_Template
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
        $__internal_dc4ebcac01b25f600fa251db8d854f6b035e6b3323199b6912305ef99f8b06a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4ebcac01b25f600fa251db8d854f6b035e6b3323199b6912305ef99f8b06a3->enter($__internal_dc4ebcac01b25f600fa251db8d854f6b035e6b3323199b6912305ef99f8b06a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_415a35d4f1d60dfad9e5a3a32d923ffff74c32fb274ffce86d98e043e2461a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415a35d4f1d60dfad9e5a3a32d923ffff74c32fb274ffce86d98e043e2461a0a->enter($__internal_415a35d4f1d60dfad9e5a3a32d923ffff74c32fb274ffce86d98e043e2461a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_dc4ebcac01b25f600fa251db8d854f6b035e6b3323199b6912305ef99f8b06a3->leave($__internal_dc4ebcac01b25f600fa251db8d854f6b035e6b3323199b6912305ef99f8b06a3_prof);

        
        $__internal_415a35d4f1d60dfad9e5a3a32d923ffff74c32fb274ffce86d98e043e2461a0a->leave($__internal_415a35d4f1d60dfad9e5a3a32d923ffff74c32fb274ffce86d98e043e2461a0a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
