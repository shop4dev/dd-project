<?php

/* auth/index.html.twig */
class __TwigTemplate_d6f82d3a020ca25c3ed41d1c9bb0f40a3d53fe8d4b94065c8da6d88df8db23da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("auth/base.html.twig", "auth/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "auth/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8249ef9a593c22f800673518e0b5eb432d0ef70e445e1377687fece8a9122671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8249ef9a593c22f800673518e0b5eb432d0ef70e445e1377687fece8a9122671->enter($__internal_8249ef9a593c22f800673518e0b5eb432d0ef70e445e1377687fece8a9122671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/index.html.twig"));

        $__internal_066fe8c63cf861763d5c277b11c15b2ed6a67d1d84040666e5266b89fabe551d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066fe8c63cf861763d5c277b11c15b2ed6a67d1d84040666e5266b89fabe551d->enter($__internal_066fe8c63cf861763d5c277b11c15b2ed6a67d1d84040666e5266b89fabe551d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8249ef9a593c22f800673518e0b5eb432d0ef70e445e1377687fece8a9122671->leave($__internal_8249ef9a593c22f800673518e0b5eb432d0ef70e445e1377687fece8a9122671_prof);

        
        $__internal_066fe8c63cf861763d5c277b11c15b2ed6a67d1d84040666e5266b89fabe551d->leave($__internal_066fe8c63cf861763d5c277b11c15b2ed6a67d1d84040666e5266b89fabe551d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5059c220203c00fae31591d855c4ceb9c93d04b59247d2ac1854a3d8f92d03c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5059c220203c00fae31591d855c4ceb9c93d04b59247d2ac1854a3d8f92d03c9->enter($__internal_5059c220203c00fae31591d855c4ceb9c93d04b59247d2ac1854a3d8f92d03c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0d159e9dd1617dee6b1f79a6506316f0cfaf37cd960d24908129f487d60a1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d159e9dd1617dee6b1f79a6506316f0cfaf37cd960d24908129f487d60a1ee->enter($__internal_c0d159e9dd1617dee6b1f79a6506316f0cfaf37cd960d24908129f487d60a1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">List of Game of Thrones Characters</div>

                    ";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "user", array()) != null)) {
            // line 13
            echo "                        <table class=\"table\">
                            <tr>
                                <th>Character</th>
                                <th>Real Name</th>
                            </tr>

                            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["character"]) || array_key_exists("character", $context) ? $context["character"] : (function () { throw new Twig_Error_Runtime('Variable "character" does not exist.', 19, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 20
                echo "                                <tr>
                                    <td>";
                // line 21
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                        </table>
                    ";
        }
        // line 26
        echo "

                </div>

                ";
        // line 30
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->getSourceContext()); })()), "user", array()) == null)) {
            // line 31
            echo "                    <a href=\"/login\" class=\"btn btn-info\"> You need to login to see the list 😜😜 >></a>
                ";
        }
        // line 33
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_c0d159e9dd1617dee6b1f79a6506316f0cfaf37cd960d24908129f487d60a1ee->leave($__internal_c0d159e9dd1617dee6b1f79a6506316f0cfaf37cd960d24908129f487d60a1ee_prof);

        
        $__internal_5059c220203c00fae31591d855c4ceb9c93d04b59247d2ac1854a3d8f92d03c9->leave($__internal_5059c220203c00fae31591d855c4ceb9c93d04b59247d2ac1854a3d8f92d03c9_prof);

    }

    public function getTemplateName()
    {
        return "auth/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  97 => 31,  95 => 30,  89 => 26,  85 => 24,  74 => 21,  71 => 20,  67 => 19,  59 => 13,  57 => 12,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'auth/base.html.twig' %}



{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">List of Game of Thrones Characters</div>

                    {% if app.user != null %}
                        <table class=\"table\">
                            <tr>
                                <th>Character</th>
                                <th>Real Name</th>
                            </tr>

                            {% for key, item in character %}
                                <tr>
                                    <td>{{ key }}</td><td>{{ item }}</td>
                                </tr>
                            {% endfor %}
                        </table>
                    {% endif %}


                </div>

                {% if app.user == null %}
                    <a href=\"/login\" class=\"btn btn-info\"> You need to login to see the list 😜😜 >></a>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}", "auth/index.html.twig", "/home/emas/Projects/todolist/app/Resources/views/auth/index.html.twig");
    }
}
