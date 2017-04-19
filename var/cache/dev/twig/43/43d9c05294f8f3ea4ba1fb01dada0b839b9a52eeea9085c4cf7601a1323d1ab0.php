<?php

/* tasks/profile.html.twig */
class __TwigTemplate_0c78395bc4eda65d00ca01753874b6f0567a3a522e1b2db57cb3771e5715412d extends Twig_Template
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
        $__internal_23e1d19443bd1b90f98fcd49385b866782fd0c200c75bb4feffabdbb573d1abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e1d19443bd1b90f98fcd49385b866782fd0c200c75bb4feffabdbb573d1abe->enter($__internal_23e1d19443bd1b90f98fcd49385b866782fd0c200c75bb4feffabdbb573d1abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tasks/profile.html.twig"));

        $__internal_b9e80a104a48366a11217a7c3deccc112fb7bc06ed21b5418b083bcf9606d7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e80a104a48366a11217a7c3deccc112fb7bc06ed21b5418b083bcf9606d7c4->enter($__internal_b9e80a104a48366a11217a7c3deccc112fb7bc06ed21b5418b083bcf9606d7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tasks/profile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["avatar_url"] ?? $this->getContext($context, "avatar_url")), "html", null, true);
        echo "\" class=\"thumbnail\" />
    </body>
</html>";
        
        $__internal_23e1d19443bd1b90f98fcd49385b866782fd0c200c75bb4feffabdbb573d1abe->leave($__internal_23e1d19443bd1b90f98fcd49385b866782fd0c200c75bb4feffabdbb573d1abe_prof);

        
        $__internal_b9e80a104a48366a11217a7c3deccc112fb7bc06ed21b5418b083bcf9606d7c4->leave($__internal_b9e80a104a48366a11217a7c3deccc112fb7bc06ed21b5418b083bcf9606d7c4_prof);

    }

    public function getTemplateName()
    {
        return "tasks/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <img src=\"{{ avatar_url }}\" class=\"thumbnail\" />
    </body>
</html>", "tasks/profile.html.twig", "/home/tommar5/dd-project/app/Resources/views/tasks/profile.html.twig");
    }
}
