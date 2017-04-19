<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a0cb5a7d7ffd83f2d1a15872436da9b7be55c926a954cee6968cc997f80a2d86 extends Twig_Template
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
        $__internal_ff9e37fec7f4bd382ee62a2749c22ca9b8336d9879fd1316955c8142a465ef98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9e37fec7f4bd382ee62a2749c22ca9b8336d9879fd1316955c8142a465ef98->enter($__internal_ff9e37fec7f4bd382ee62a2749c22ca9b8336d9879fd1316955c8142a465ef98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_1fa8159e66749ebd52cdabe34715efe71029c9d010782aa2c5c20d0c0229210f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa8159e66749ebd52cdabe34715efe71029c9d010782aa2c5c20d0c0229210f->enter($__internal_1fa8159e66749ebd52cdabe34715efe71029c9d010782aa2c5c20d0c0229210f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ff9e37fec7f4bd382ee62a2749c22ca9b8336d9879fd1316955c8142a465ef98->leave($__internal_ff9e37fec7f4bd382ee62a2749c22ca9b8336d9879fd1316955c8142a465ef98_prof);

        
        $__internal_1fa8159e66749ebd52cdabe34715efe71029c9d010782aa2c5c20d0c0229210f->leave($__internal_1fa8159e66749ebd52cdabe34715efe71029c9d010782aa2c5c20d0c0229210f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
