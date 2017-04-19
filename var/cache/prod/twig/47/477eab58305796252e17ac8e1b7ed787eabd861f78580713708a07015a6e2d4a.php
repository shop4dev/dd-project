<?php

/* :tasks:profile.html.twig */
class __TwigTemplate_e11bcf37fd9259593d92aa4bd2f386ae0ce5f79c3b698d00a41feb368117faf7 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["avatar_url"] ?? null), "html", null, true);
        echo "\" class=\"thumbnail\" />
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return ":tasks:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":tasks:profile.html.twig", "/home/tommar5/dd-project/app/Resources/views/tasks/profile.html.twig");
    }
}
