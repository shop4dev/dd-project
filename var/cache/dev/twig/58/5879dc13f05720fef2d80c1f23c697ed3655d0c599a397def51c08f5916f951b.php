<?php

/* profile/Default/index.html.twig */
class __TwigTemplate_73e6108e8171ec510f9cef82e5f529bd6c8a044f967048e839856df92c6882a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("profile/base.html.twig", "profile/Default/index.html.twig", 1);
        $this->blocks = array(
            'username' => array($this, 'block_username'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "profile/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_120565d340b6223345fad2f3fb30dcf4765a313fa1399305a90d4ec6ac6407db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120565d340b6223345fad2f3fb30dcf4765a313fa1399305a90d4ec6ac6407db->enter($__internal_120565d340b6223345fad2f3fb30dcf4765a313fa1399305a90d4ec6ac6407db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/Default/index.html.twig"));

        $__internal_47cfbcc1611a19ac051d1c1ba4b83b47bc7128b999744c087b586062003783cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cfbcc1611a19ac051d1c1ba4b83b47bc7128b999744c087b586062003783cc->enter($__internal_47cfbcc1611a19ac051d1c1ba4b83b47bc7128b999744c087b586062003783cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_120565d340b6223345fad2f3fb30dcf4765a313fa1399305a90d4ec6ac6407db->leave($__internal_120565d340b6223345fad2f3fb30dcf4765a313fa1399305a90d4ec6ac6407db_prof);

        
        $__internal_47cfbcc1611a19ac051d1c1ba4b83b47bc7128b999744c087b586062003783cc->leave($__internal_47cfbcc1611a19ac051d1c1ba4b83b47bc7128b999744c087b586062003783cc_prof);

    }

    // line 3
    public function block_username($context, array $blocks = array())
    {
        $__internal_c062a1c8720876d13c148db776c0f2c9d5f4deeddce427ce3fbd600e9626c1da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c062a1c8720876d13c148db776c0f2c9d5f4deeddce427ce3fbd600e9626c1da->enter($__internal_c062a1c8720876d13c148db776c0f2c9d5f4deeddce427ce3fbd600e9626c1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "username"));

        $__internal_f42d095d77da74fee79a13685530b7d8dd64e4e901dce4b56cca6c3cf49cc453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42d095d77da74fee79a13685530b7d8dd64e4e901dce4b56cca6c3cf49cc453->enter($__internal_f42d095d77da74fee79a13685530b7d8dd64e4e901dce4b56cca6c3cf49cc453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "username"));

        // line 4
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "user", array()), "name", array()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_f42d095d77da74fee79a13685530b7d8dd64e4e901dce4b56cca6c3cf49cc453->leave($__internal_f42d095d77da74fee79a13685530b7d8dd64e4e901dce4b56cca6c3cf49cc453_prof);

        
        $__internal_c062a1c8720876d13c148db776c0f2c9d5f4deeddce427ce3fbd600e9626c1da->leave($__internal_c062a1c8720876d13c148db776c0f2c9d5f4deeddce427ce3fbd600e9626c1da_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ace6d22c48d06c01b816007f7623920add2693dbd98c67e11b8ec74065447bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace6d22c48d06c01b816007f7623920add2693dbd98c67e11b8ec74065447bed->enter($__internal_ace6d22c48d06c01b816007f7623920add2693dbd98c67e11b8ec74065447bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66a11e8ff9d9163a30624e9a76773af6908ca946e5db812d9d9e32426324641a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a11e8ff9d9163a30624e9a76773af6908ca946e5db812d9d9e32426324641a->enter($__internal_66a11e8ff9d9163a30624e9a76773af6908ca946e5db812d9d9e32426324641a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () { throw new Twig_Error_Runtime('Variable "lists" does not exist.', 11, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tolist"]) {
            // line 12
            echo "<section class=\"col-lg-4 connectedSortable\">

    <!-- TO DO List -->
    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <i class=\"ion ion-clipboard\"></i>

            <h3 class=\"box-title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tolist"], "name", array()), "html", null, true);
            echo "</h3>

            <div class=\"box-tools pull-right\">
                <a href=\"/profile/listdelete/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tolist"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-box-tool\"><i class=\"fa fa-times\"></i></a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body \">
            <ul class=\"todo-list\">
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 28, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["tolist"], "id", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
                // line 29
                echo "                    <li>
                        <!-- drag handle -->
                        <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <!-- checkbox -->
                        <input type=\"checkbox\" value=\"\">
                        <!-- todo text -->
                        <span class=\"text\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "name", array()), "html", null, true);
                echo "</span>
                        <!-- Emphasis label -->
                        <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i></small>
                        <!-- General tools such as edit or delete-->
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <a href=\"/profile/delete/";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "id", array()), "html", null, true);
                echo "\" style=\"color:   #dd4b39\"><i class=\"fa fa-trash-o\"></i></a>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </ul>
        </div>
        <!-- /.box-body -->
        <div class=\"box-footer clearfix no-border\">
            <button type=\"button\" class=\"btn btn-default pull-right\" onClick=\"window.open('/profile/create/";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tolist"], "id", array()), "html", null, true);
            echo "','pagename','resizable,height=500,width=400'); return false;\"><i class=\"fa fa-plus\"></i> Add item</button>
        </div>
    </div>
    <!-- /.box -->

</section>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tolist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
<section class=\"col-lg-4 connectedSortable\">

    <button type=\"button\" class=\"btn btn-default pull-left\" onClick=\"window.open('/profile/list','pagename','resizable,height=230,width=370'); return false;\"><i class=\"fa fa-plus\"></i> Add new list</button>

    ";
        // line 66
        echo "
</section>

    <div class=\"modal fade\" id=\"addList\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Add new list</h4>
                </div>
                <div class=\"modal-body\">
                    ...
                </div>
                ";
        // line 80
        echo "                    ";
        // line 81
        echo "                    ";
        // line 82
        echo "                ";
        // line 83
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_66a11e8ff9d9163a30624e9a76773af6908ca946e5db812d9d9e32426324641a->leave($__internal_66a11e8ff9d9163a30624e9a76773af6908ca946e5db812d9d9e32426324641a_prof);

        
        $__internal_ace6d22c48d06c01b816007f7623920add2693dbd98c67e11b8ec74065447bed->leave($__internal_ace6d22c48d06c01b816007f7623920add2693dbd98c67e11b8ec74065447bed_prof);

    }

    public function getTemplateName()
    {
        return "profile/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 83,  187 => 82,  185 => 81,  183 => 80,  168 => 66,  161 => 60,  147 => 52,  141 => 48,  131 => 44,  122 => 38,  111 => 29,  107 => 28,  98 => 22,  92 => 19,  83 => 12,  79 => 11,  76 => 10,  67 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'profile/base.html.twig' %}

{%  block username %}
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        {{ app.user.name }}
    {% endif %}
{% endblock %}

{% block body %}

    {% for tolist in lists %}
<section class=\"col-lg-4 connectedSortable\">

    <!-- TO DO List -->
    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <i class=\"ion ion-clipboard\"></i>

            <h3 class=\"box-title\">{{ tolist.name }}</h3>

            <div class=\"box-tools pull-right\">
                <a href=\"/profile/listdelete/{{ tolist.id }}\" class=\"btn btn-box-tool\"><i class=\"fa fa-times\"></i></a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body \">
            <ul class=\"todo-list\">
                {% for todo in data[tolist.id] %}
                    <li>
                        <!-- drag handle -->
                        <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <!-- checkbox -->
                        <input type=\"checkbox\" value=\"\">
                        <!-- todo text -->
                        <span class=\"text\">{{ todo.name }}</span>
                        <!-- Emphasis label -->
                        <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i></small>
                        <!-- General tools such as edit or delete-->
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <a href=\"/profile/delete/{{ todo.id }}\" style=\"color:   #dd4b39\"><i class=\"fa fa-trash-o\"></i></a>
                        </div>
                    </li>
                {% endfor %}
            </ul>
        </div>
        <!-- /.box-body -->
        <div class=\"box-footer clearfix no-border\">
            <button type=\"button\" class=\"btn btn-default pull-right\" onClick=\"window.open('/profile/create/{{ tolist.id }}','pagename','resizable,height=500,width=400'); return false;\"><i class=\"fa fa-plus\"></i> Add item</button>
        </div>
    </div>
    <!-- /.box -->

</section>

    {% endfor %}

<section class=\"col-lg-4 connectedSortable\">

    <button type=\"button\" class=\"btn btn-default pull-left\" onClick=\"window.open('/profile/list','pagename','resizable,height=230,width=370'); return false;\"><i class=\"fa fa-plus\"></i> Add new list</button>

    {#<button type=\"button\" href=\"/profile/list\" class=\"btn btn-default pull-left\" data-toggle=\"modal\" data-target=\"#addList\"><i class=\"fa fa-plus\"></i> Add new list</button>#}

</section>

    <div class=\"modal fade\" id=\"addList\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Add new list</h4>
                </div>
                <div class=\"modal-body\">
                    ...
                </div>
                {#<div class=\"modal-footer\">#}
                    {#<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>#}
                    {#<button type=\"button\" class=\"btn btn-primary\">Save changes</button>#}
                {#</div>#}
            </div>
        </div>
    </div>

{% endblock %}", "profile/Default/index.html.twig", "/home/emas/Projects/todolist/app/Resources/views/profile/Default/index.html.twig");
    }
}
