<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ccdcaf32110dc132b014b139663e1da2e16a65f4a922b53bacf8af576f4e01da extends Twig_Template
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
        $__internal_e7f21534d6516fb12a86b8ae0a00fb1f7c1917c95446857becca830b8bb3eea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f21534d6516fb12a86b8ae0a00fb1f7c1917c95446857becca830b8bb3eea5->enter($__internal_e7f21534d6516fb12a86b8ae0a00fb1f7c1917c95446857becca830b8bb3eea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_022c43fdee4bb7dcb671bf56225934157024c14153022a8af45c6e048df25aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022c43fdee4bb7dcb671bf56225934157024c14153022a8af45c6e048df25aae->enter($__internal_022c43fdee4bb7dcb671bf56225934157024c14153022a8af45c6e048df25aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e7f21534d6516fb12a86b8ae0a00fb1f7c1917c95446857becca830b8bb3eea5->leave($__internal_e7f21534d6516fb12a86b8ae0a00fb1f7c1917c95446857becca830b8bb3eea5_prof);

        
        $__internal_022c43fdee4bb7dcb671bf56225934157024c14153022a8af45c6e048df25aae->leave($__internal_022c43fdee4bb7dcb671bf56225934157024c14153022a8af45c6e048df25aae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
