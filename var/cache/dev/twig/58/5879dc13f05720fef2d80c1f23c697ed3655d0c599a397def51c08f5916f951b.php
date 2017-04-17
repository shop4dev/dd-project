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
            'infobox' => array($this, 'block_infobox'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "profile/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef851e7f8689b6c88c8792bb8f1fc0d343e7eabfe000647538ab4b85e6b8bf09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef851e7f8689b6c88c8792bb8f1fc0d343e7eabfe000647538ab4b85e6b8bf09->enter($__internal_ef851e7f8689b6c88c8792bb8f1fc0d343e7eabfe000647538ab4b85e6b8bf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/Default/index.html.twig"));

        $__internal_9c337727ec667c008f41f36eb9c1a1a3e057d4762bacfa8c7a91321429074b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c337727ec667c008f41f36eb9c1a1a3e057d4762bacfa8c7a91321429074b31->enter($__internal_9c337727ec667c008f41f36eb9c1a1a3e057d4762bacfa8c7a91321429074b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef851e7f8689b6c88c8792bb8f1fc0d343e7eabfe000647538ab4b85e6b8bf09->leave($__internal_ef851e7f8689b6c88c8792bb8f1fc0d343e7eabfe000647538ab4b85e6b8bf09_prof);

        
        $__internal_9c337727ec667c008f41f36eb9c1a1a3e057d4762bacfa8c7a91321429074b31->leave($__internal_9c337727ec667c008f41f36eb9c1a1a3e057d4762bacfa8c7a91321429074b31_prof);

    }

    // line 3
    public function block_username($context, array $blocks = array())
    {
        $__internal_e16187eb3541d208d084053f5d60bdee82211abe1435379669a2e3c9c509cc88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16187eb3541d208d084053f5d60bdee82211abe1435379669a2e3c9c509cc88->enter($__internal_e16187eb3541d208d084053f5d60bdee82211abe1435379669a2e3c9c509cc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "username"));

        $__internal_98dfa60f44f6f76e3627adb862851210ae40cd0c35e49b9f8c2b9472d648faae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dfa60f44f6f76e3627adb862851210ae40cd0c35e49b9f8c2b9472d648faae->enter($__internal_98dfa60f44f6f76e3627adb862851210ae40cd0c35e49b9f8c2b9472d648faae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "username"));

        // line 4
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "user", array()), "name", array()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_98dfa60f44f6f76e3627adb862851210ae40cd0c35e49b9f8c2b9472d648faae->leave($__internal_98dfa60f44f6f76e3627adb862851210ae40cd0c35e49b9f8c2b9472d648faae_prof);

        
        $__internal_e16187eb3541d208d084053f5d60bdee82211abe1435379669a2e3c9c509cc88->leave($__internal_e16187eb3541d208d084053f5d60bdee82211abe1435379669a2e3c9c509cc88_prof);

    }

    // line 9
    public function block_infobox($context, array $blocks = array())
    {
        $__internal_f03414afc0ce3ee3a360e9992c6b34d36786038b9e2d3b35bd7c559b1507a430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03414afc0ce3ee3a360e9992c6b34d36786038b9e2d3b35bd7c559b1507a430->enter($__internal_f03414afc0ce3ee3a360e9992c6b34d36786038b9e2d3b35bd7c559b1507a430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "infobox"));

        $__internal_552e1c9ca6e5e51e091fcb62727a5b4e65c03e4b80b4797bf890143b0030996e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552e1c9ca6e5e51e091fcb62727a5b4e65c03e4b80b4797bf890143b0030996e->enter($__internal_552e1c9ca6e5e51e091fcb62727a5b4e65c03e4b80b4797bf890143b0030996e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "infobox"));

        // line 10
        echo "    <!-- Info boxes -->
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-gear-outline\"></i></span>

                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Your TODOS</span>
                    <span class=\"info-box-number\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["todo_count"]) || array_key_exists("todo_count", $context) ? $context["todo_count"] : (function () { throw new Twig_Error_Runtime('Variable "todo_count" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-red\"><i class=\"fa fa-google-plus\"></i></span>

                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Completed</span>
                    <span class=\"info-box-number\">0<small>%</small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class=\"clearfix visible-sm-block\"></div>
        <!-- /.col -->
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-yellow\"><i class=\"ion ion-ios-people-outline\"></i></span>

                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Users</span>
                    <span class=\"info-box-number\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["user_count"]) || array_key_exists("user_count", $context) ? $context["user_count"] : (function () { throw new Twig_Error_Runtime('Variable "user_count" does not exist.', 47, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-green\"><i class=\"ion ion-ios-cart-outline\"></i></span>

                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Total TODOS</span>
                    <span class=\"info-box-number\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["all_count"]) || array_key_exists("all_count", $context) ? $context["all_count"] : (function () { throw new Twig_Error_Runtime('Variable "all_count" does not exist.', 61, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </div>
    <!-- /.row -->
";
        
        $__internal_552e1c9ca6e5e51e091fcb62727a5b4e65c03e4b80b4797bf890143b0030996e->leave($__internal_552e1c9ca6e5e51e091fcb62727a5b4e65c03e4b80b4797bf890143b0030996e_prof);

        
        $__internal_f03414afc0ce3ee3a360e9992c6b34d36786038b9e2d3b35bd7c559b1507a430->leave($__internal_f03414afc0ce3ee3a360e9992c6b34d36786038b9e2d3b35bd7c559b1507a430_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_5aed27341b92a387a7ac208e9f6e143a2e96f6581cc6996e72fb5d4786cb86a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aed27341b92a387a7ac208e9f6e143a2e96f6581cc6996e72fb5d4786cb86a5->enter($__internal_5aed27341b92a387a7ac208e9f6e143a2e96f6581cc6996e72fb5d4786cb86a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f49b397afbd6ecb0a7ad37dca46f657ef81a791899de9cdc964b1d8e9e86f5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49b397afbd6ecb0a7ad37dca46f657ef81a791899de9cdc964b1d8e9e86f5ea->enter($__internal_f49b397afbd6ecb0a7ad37dca46f657ef81a791899de9cdc964b1d8e9e86f5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "
    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () { throw new Twig_Error_Runtime('Variable "lists" does not exist.', 73, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tolist"]) {
            // line 74
            echo "<section class=\"col-lg-4 connectedSortable\">

    <!-- TO DO List -->
    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <i class=\"ion ion-clipboard\"></i>

            <h3 class=\"box-title\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tolist"], "name", array()), "html", null, true);
            echo "</h3>

            <div class=\"box-tools pull-right\">
                <a href=\"/profile/listdelete/";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tolist"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-box-tool\"><i class=\"fa fa-times\"></i></a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body \">
            <ul class=\"todo-list\">
                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 90, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["tolist"], "id", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
                // line 91
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
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "name", array()), "html", null, true);
                echo "</span>
                        <!-- Emphasis label -->
                        <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i></small>
                        <!-- General tools such as edit or delete-->
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <a href=\"/profile/delete/";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "id", array()), "html", null, true);
                echo "\" style=\"color: #dd4b39\"><i class=\"fa fa-trash-o\"></i></a>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "            </ul>
        </div>
        <!-- /.box-body -->
        <div class=\"box-footer clearfix no-border\">
            <button type=\"button\" class=\"btn btn-default pull-right\" onClick=\"window.open('/profile/create/";
            // line 114
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
        // line 122
        echo "
<section class=\"col-lg-4 connectedSortable\">

    <button type=\"button\" class=\"btn btn-default pull-left\" onClick=\"window.open('/profile/list','pagename','resizable,height=230,width=370'); return false;\"><i class=\"fa fa-plus\"></i> Add new list</button>

    ";
        // line 128
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
        // line 142
        echo "                    ";
        // line 143
        echo "                    ";
        // line 144
        echo "                ";
        // line 145
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_f49b397afbd6ecb0a7ad37dca46f657ef81a791899de9cdc964b1d8e9e86f5ea->leave($__internal_f49b397afbd6ecb0a7ad37dca46f657ef81a791899de9cdc964b1d8e9e86f5ea_prof);

        
        $__internal_5aed27341b92a387a7ac208e9f6e143a2e96f6581cc6996e72fb5d4786cb86a5->leave($__internal_5aed27341b92a387a7ac208e9f6e143a2e96f6581cc6996e72fb5d4786cb86a5_prof);

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
        return array (  277 => 145,  275 => 144,  273 => 143,  271 => 142,  256 => 128,  249 => 122,  235 => 114,  229 => 110,  219 => 106,  210 => 100,  199 => 91,  195 => 90,  186 => 84,  180 => 81,  171 => 74,  167 => 73,  164 => 72,  155 => 71,  136 => 61,  119 => 47,  87 => 18,  77 => 10,  68 => 9,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'profile/base.html.twig' %}

{%  block username %}
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        {{ app.user.name }}
    {% endif %}
{% endblock %}

{% block infobox %}
    <!-- Info boxes -->
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-gear-outline\"></i></span>

                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Your TODOS</span>
                    <span class=\"info-box-number\">{{ todo_count }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-red\"><i class=\"fa fa-google-plus\"></i></span>

                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Completed</span>
                    <span class=\"info-box-number\">0<small>%</small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class=\"clearfix visible-sm-block\"></div>
        <!-- /.col -->
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-yellow\"><i class=\"ion ion-ios-people-outline\"></i></span>

                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Users</span>
                    <span class=\"info-box-number\">{{ user_count }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-green\"><i class=\"ion ion-ios-cart-outline\"></i></span>

                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Total TODOS</span>
                    <span class=\"info-box-number\">{{ all_count }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </div>
    <!-- /.row -->
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
                            <a href=\"/profile/delete/{{ todo.id }}\" style=\"color: #dd4b39\"><i class=\"fa fa-trash-o\"></i></a>
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

{% endblock %}", "profile/Default/index.html.twig", "/home/emas/Projects/dd-project/app/Resources/views/profile/Default/index.html.twig");
    }
}
