<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5976661a6a8ff4f557e6cc64ba11986b2678b302275d9a9286d58000dfd2b928 extends Twig_Template
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
        $__internal_b4a0ca4943f5236b251e48fdc54719a57e8f2024e30669aaa9a38223b820a05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a0ca4943f5236b251e48fdc54719a57e8f2024e30669aaa9a38223b820a05c->enter($__internal_b4a0ca4943f5236b251e48fdc54719a57e8f2024e30669aaa9a38223b820a05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_3eacdff360f5ee98af39f3387ffe040b7bf332e1d436fd0cc034399d5e05d418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eacdff360f5ee98af39f3387ffe040b7bf332e1d436fd0cc034399d5e05d418->enter($__internal_3eacdff360f5ee98af39f3387ffe040b7bf332e1d436fd0cc034399d5e05d418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b4a0ca4943f5236b251e48fdc54719a57e8f2024e30669aaa9a38223b820a05c->leave($__internal_b4a0ca4943f5236b251e48fdc54719a57e8f2024e30669aaa9a38223b820a05c_prof);

        
        $__internal_3eacdff360f5ee98af39f3387ffe040b7bf332e1d436fd0cc034399d5e05d418->leave($__internal_3eacdff360f5ee98af39f3387ffe040b7bf332e1d436fd0cc034399d5e05d418_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
