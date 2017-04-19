<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_88ad4b6c43b01afc3dfd326c43db95c94382b9621b67d2f97f244a859524ede7 extends Twig_Template
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
        $__internal_593074af861237a06bce94d87d1515fcff08a4f06239a9c8e0bbec996809dad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593074af861237a06bce94d87d1515fcff08a4f06239a9c8e0bbec996809dad9->enter($__internal_593074af861237a06bce94d87d1515fcff08a4f06239a9c8e0bbec996809dad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_993d90ed5824e5960df491770ab6c62c28dd79a55da0a3793506c203c67e9b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993d90ed5824e5960df491770ab6c62c28dd79a55da0a3793506c203c67e9b1a->enter($__internal_993d90ed5824e5960df491770ab6c62c28dd79a55da0a3793506c203c67e9b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_593074af861237a06bce94d87d1515fcff08a4f06239a9c8e0bbec996809dad9->leave($__internal_593074af861237a06bce94d87d1515fcff08a4f06239a9c8e0bbec996809dad9_prof);

        
        $__internal_993d90ed5824e5960df491770ab6c62c28dd79a55da0a3793506c203c67e9b1a->leave($__internal_993d90ed5824e5960df491770ab6c62c28dd79a55da0a3793506c203c67e9b1a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
