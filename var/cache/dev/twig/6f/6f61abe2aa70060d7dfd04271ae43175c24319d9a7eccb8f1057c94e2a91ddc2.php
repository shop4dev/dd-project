<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_27a8cb69c9534f670bbfcce0618b07763f5006116351320413eeef4ff1a0a0b4 extends Twig_Template
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
        $__internal_7740613f6b0924f840c59572014a0e5ec2bf1cc306e00ff9b064a873fc04aa09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7740613f6b0924f840c59572014a0e5ec2bf1cc306e00ff9b064a873fc04aa09->enter($__internal_7740613f6b0924f840c59572014a0e5ec2bf1cc306e00ff9b064a873fc04aa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_705d3f91bcd53358b1cbe9c5263f7bbb86a6dd7136a7cb34221b51d6108106aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705d3f91bcd53358b1cbe9c5263f7bbb86a6dd7136a7cb34221b51d6108106aa->enter($__internal_705d3f91bcd53358b1cbe9c5263f7bbb86a6dd7136a7cb34221b51d6108106aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7740613f6b0924f840c59572014a0e5ec2bf1cc306e00ff9b064a873fc04aa09->leave($__internal_7740613f6b0924f840c59572014a0e5ec2bf1cc306e00ff9b064a873fc04aa09_prof);

        
        $__internal_705d3f91bcd53358b1cbe9c5263f7bbb86a6dd7136a7cb34221b51d6108106aa->leave($__internal_705d3f91bcd53358b1cbe9c5263f7bbb86a6dd7136a7cb34221b51d6108106aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
