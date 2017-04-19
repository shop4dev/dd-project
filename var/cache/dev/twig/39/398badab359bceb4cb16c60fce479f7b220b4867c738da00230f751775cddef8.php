<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_27a14dc2bfef375141ad2a11215d385dc8f936bf01588520927377aafb5b6f7b extends Twig_Template
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
        $__internal_d57413f42952693718eab73ef06433e081f40eb0bd54b93f60253c23f73fd6a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57413f42952693718eab73ef06433e081f40eb0bd54b93f60253c23f73fd6a7->enter($__internal_d57413f42952693718eab73ef06433e081f40eb0bd54b93f60253c23f73fd6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a3834325611f7b22129803937b0896e5def324d3b3534a8933a4f10a805d095f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3834325611f7b22129803937b0896e5def324d3b3534a8933a4f10a805d095f->enter($__internal_a3834325611f7b22129803937b0896e5def324d3b3534a8933a4f10a805d095f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d57413f42952693718eab73ef06433e081f40eb0bd54b93f60253c23f73fd6a7->leave($__internal_d57413f42952693718eab73ef06433e081f40eb0bd54b93f60253c23f73fd6a7_prof);

        
        $__internal_a3834325611f7b22129803937b0896e5def324d3b3534a8933a4f10a805d095f->leave($__internal_a3834325611f7b22129803937b0896e5def324d3b3534a8933a4f10a805d095f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
