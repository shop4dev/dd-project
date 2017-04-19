<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_562be9ca48bb7b9e7a2d0d2a53db65db1a26a6ceda2e7afd82b9b4ab8a63e54e extends Twig_Template
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
        $__internal_476429c82b9f8b6e1cf3ddb08f0ec2eee5b669e4fd806fc25a848fa65d914a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476429c82b9f8b6e1cf3ddb08f0ec2eee5b669e4fd806fc25a848fa65d914a5b->enter($__internal_476429c82b9f8b6e1cf3ddb08f0ec2eee5b669e4fd806fc25a848fa65d914a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_2aba3c1c6b9c20698726a0987dba4c3ede06252e9a7a7fb3d383a9a51f19ed6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aba3c1c6b9c20698726a0987dba4c3ede06252e9a7a7fb3d383a9a51f19ed6f->enter($__internal_2aba3c1c6b9c20698726a0987dba4c3ede06252e9a7a7fb3d383a9a51f19ed6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_476429c82b9f8b6e1cf3ddb08f0ec2eee5b669e4fd806fc25a848fa65d914a5b->leave($__internal_476429c82b9f8b6e1cf3ddb08f0ec2eee5b669e4fd806fc25a848fa65d914a5b_prof);

        
        $__internal_2aba3c1c6b9c20698726a0987dba4c3ede06252e9a7a7fb3d383a9a51f19ed6f->leave($__internal_2aba3c1c6b9c20698726a0987dba4c3ede06252e9a7a7fb3d383a9a51f19ed6f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
