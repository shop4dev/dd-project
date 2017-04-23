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
        $__internal_b8606644f3f651a234810b561444bb047144b5cf5327b909938fe6ff08c6dd91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8606644f3f651a234810b561444bb047144b5cf5327b909938fe6ff08c6dd91->enter($__internal_b8606644f3f651a234810b561444bb047144b5cf5327b909938fe6ff08c6dd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/Default/index.html.twig"));

        $__internal_9546986eaa5bad6a6645d9809b7124ee49c9a40d99f8a65ab86b30073a2944af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9546986eaa5bad6a6645d9809b7124ee49c9a40d99f8a65ab86b30073a2944af->enter($__internal_9546986eaa5bad6a6645d9809b7124ee49c9a40d99f8a65ab86b30073a2944af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8606644f3f651a234810b561444bb047144b5cf5327b909938fe6ff08c6dd91->leave($__internal_b8606644f3f651a234810b561444bb047144b5cf5327b909938fe6ff08c6dd91_prof);

        
        $__internal_9546986eaa5bad6a6645d9809b7124ee49c9a40d99f8a65ab86b30073a2944af->leave($__internal_9546986eaa5bad6a6645d9809b7124ee49c9a40d99f8a65ab86b30073a2944af_prof);

    }

    // line 3
    public function block_username($context, array $blocks = array())
    {
        $__internal_1e91c9e58e2dbc121607a7372a5e45d6c09cafa4c23e72a32324fb6741687dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e91c9e58e2dbc121607a7372a5e45d6c09cafa4c23e72a32324fb6741687dc6->enter($__internal_1e91c9e58e2dbc121607a7372a5e45d6c09cafa4c23e72a32324fb6741687dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "username"));

        $__internal_54bd5ec98672f92a5fa8ca154859ada7c5f326480eda546e0b44bc906f817fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bd5ec98672f92a5fa8ca154859ada7c5f326480eda546e0b44bc906f817fc9->enter($__internal_54bd5ec98672f92a5fa8ca154859ada7c5f326480eda546e0b44bc906f817fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "username"));

        // line 4
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "user", array()), "name", array()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_54bd5ec98672f92a5fa8ca154859ada7c5f326480eda546e0b44bc906f817fc9->leave($__internal_54bd5ec98672f92a5fa8ca154859ada7c5f326480eda546e0b44bc906f817fc9_prof);

        
        $__internal_1e91c9e58e2dbc121607a7372a5e45d6c09cafa4c23e72a32324fb6741687dc6->leave($__internal_1e91c9e58e2dbc121607a7372a5e45d6c09cafa4c23e72a32324fb6741687dc6_prof);

    }

    // line 9
    public function block_infobox($context, array $blocks = array())
    {
        $__internal_1bbb384353b854ff16822173004786f5bae83158f5f609345d667f0f55b988a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbb384353b854ff16822173004786f5bae83158f5f609345d667f0f55b988a7->enter($__internal_1bbb384353b854ff16822173004786f5bae83158f5f609345d667f0f55b988a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "infobox"));

        $__internal_a6ed30238b08cc07f208d9e74d72559d6f9ba6f03ddf161962b1cb629c66469b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ed30238b08cc07f208d9e74d72559d6f9ba6f03ddf161962b1cb629c66469b->enter($__internal_a6ed30238b08cc07f208d9e74d72559d6f9ba6f03ddf161962b1cb629c66469b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "infobox"));

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
        
        $__internal_a6ed30238b08cc07f208d9e74d72559d6f9ba6f03ddf161962b1cb629c66469b->leave($__internal_a6ed30238b08cc07f208d9e74d72559d6f9ba6f03ddf161962b1cb629c66469b_prof);

        
        $__internal_1bbb384353b854ff16822173004786f5bae83158f5f609345d667f0f55b988a7->leave($__internal_1bbb384353b854ff16822173004786f5bae83158f5f609345d667f0f55b988a7_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3ea37ef1c25bae6c902cb10610660ce3cb6d13b2c71292888e48d8b2ec97d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ea37ef1c25bae6c902cb10610660ce3cb6d13b2c71292888e48d8b2ec97d32->enter($__internal_a3ea37ef1c25bae6c902cb10610660ce3cb6d13b2c71292888e48d8b2ec97d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cff1dd0f2094bc57bf32a9c276e85bd88351ab8e37a9fb6705bf203efdf2ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cff1dd0f2094bc57bf32a9c276e85bd88351ab8e37a9fb6705bf203efdf2ad7->enter($__internal_3cff1dd0f2094bc57bf32a9c276e85bd88351ab8e37a9fb6705bf203efdf2ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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


                        ";
                // line 104
                $context["difference1"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_date_converter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "dueDate", array())), "diff", array(0 => twig_date_converter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "createDate", array()))), "method");
                // line 105
                echo "                        ";
                $context["currentTime"] = twig_date_format_filter($this->env, "now", "m/d/Y");
                // line 106
                echo "
                        ";
                // line 107
                $context["difference2"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_date_converter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "dueDate", array())), "diff", array(0 => twig_date_converter($this->env, (isset($context["currentTime"]) || array_key_exists("currentTime", $context) ? $context["currentTime"] : (function () { throw new Twig_Error_Runtime('Variable "currentTime" does not exist.', 107, $this->getSourceContext()); })()))), "method");
                // line 108
                echo "                        ";
                $context["leftDays1"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["difference1"]) || array_key_exists("difference1", $context) ? $context["difference1"] : (function () { throw new Twig_Error_Runtime('Variable "difference1" does not exist.', 108, $this->getSourceContext()); })()), "days", array());
                // line 109
                echo "                        ";
                $context["leftDays2"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["difference2"]) || array_key_exists("difference2", $context) ? $context["difference2"] : (function () { throw new Twig_Error_Runtime('Variable "difference2" does not exist.', 109, $this->getSourceContext()); })()), "days", array());
                // line 110
                echo "                        ";
                if (((isset($context["leftDays1"]) || array_key_exists("leftDays1", $context) ? $context["leftDays1"] : (function () { throw new Twig_Error_Runtime('Variable "leftDays1" does not exist.', 110, $this->getSourceContext()); })()) > 0)) {
                    // line 111
                    echo "                            ";
                    $context["ratio"] = ((isset($context["leftDays2"]) || array_key_exists("leftDays2", $context) ? $context["leftDays2"] : (function () { throw new Twig_Error_Runtime('Variable "leftDays2" does not exist.', 111, $this->getSourceContext()); })()) / (isset($context["leftDays1"]) || array_key_exists("leftDays1", $context) ? $context["leftDays1"] : (function () { throw new Twig_Error_Runtime('Variable "leftDays1" does not exist.', 111, $this->getSourceContext()); })()));
                    // line 112
                    echo "                            ";
                    // line 113
                    echo "                            ";
                    // line 114
                    echo "                            ";
                    // line 115
                    echo "                            ";
                    if (((isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new Twig_Error_Runtime('Variable "ratio" does not exist.', 115, $this->getSourceContext()); })()) <= 0.33)) {
                        // line 116
                        echo "                                <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i></small>
                            ";
                    } elseif ((                    // line 117
(isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new Twig_Error_Runtime('Variable "ratio" does not exist.', 117, $this->getSourceContext()); })()) <= 0.66)) {
                        // line 118
                        echo "                                <small class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i></small>
                            ";
                    } else {
                        // line 120
                        echo "                                <small class=\"label label-success\"><i class=\"fa fa-clock-o\"></i></small>
                            ";
                    }
                    // line 122
                    echo "                        ";
                } else {
                    // line 123
                    echo "                            <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i></small>
                        ";
                }
                // line 125
                echo "


                        ";
                // line 129
                echo "


                        <!-- General tools such as edit or delete-->
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\" onClick=\"window.open('/profile/edit/";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "id", array()), "html", null, true);
                echo "','pagename','resizable,height=500,width=400'); return false;\"></i>
                            <a href=\"/profile/delete/";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["todo"], "id", array()), "html", null, true);
                echo "\" style=\"color: #dd4b39\"><i class=\"fa fa-trash-o\"></i></a>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "            </ul>
        </div>
        <!-- /.box-body -->
        <div class=\"box-footer clearfix no-border\">
            <button type=\"button\" class=\"btn btn-default pull-right\" onClick=\"window.open('/profile/create/";
            // line 143
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
        // line 151
        echo "
<section class=\"col-lg-4 connectedSortable\">

    <button type=\"button\" class=\"btn btn-default pull-left\" onClick=\"window.open('/profile/list','pagename','resizable,height=230,width=370'); return false;\"><i class=\"fa fa-plus\"></i> Add new list</button>

    ";
        // line 157
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
        // line 171
        echo "                    ";
        // line 172
        echo "                    ";
        // line 173
        echo "                ";
        // line 174
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_3cff1dd0f2094bc57bf32a9c276e85bd88351ab8e37a9fb6705bf203efdf2ad7->leave($__internal_3cff1dd0f2094bc57bf32a9c276e85bd88351ab8e37a9fb6705bf203efdf2ad7_prof);

        
        $__internal_a3ea37ef1c25bae6c902cb10610660ce3cb6d13b2c71292888e48d8b2ec97d32->leave($__internal_a3ea37ef1c25bae6c902cb10610660ce3cb6d13b2c71292888e48d8b2ec97d32_prof);

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
        return array (  342 => 174,  340 => 173,  338 => 172,  336 => 171,  321 => 157,  314 => 151,  300 => 143,  294 => 139,  284 => 135,  280 => 134,  273 => 129,  268 => 125,  264 => 123,  261 => 122,  257 => 120,  253 => 118,  251 => 117,  248 => 116,  245 => 115,  243 => 114,  241 => 113,  239 => 112,  236 => 111,  233 => 110,  230 => 109,  227 => 108,  225 => 107,  222 => 106,  219 => 105,  217 => 104,  210 => 100,  199 => 91,  195 => 90,  186 => 84,  180 => 81,  171 => 74,  167 => 73,  164 => 72,  155 => 71,  136 => 61,  119 => 47,  87 => 18,  77 => 10,  68 => 9,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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


                        {% set difference1 = date(todo.dueDate).diff(date(todo.createDate)) %}
                        {% set currentTime = 'now'|date(\"m/d/Y\") %}

                        {% set difference2 = date(todo.dueDate).diff(date(currentTime)) %}
                        {% set leftDays1 = difference1.days %}
                        {% set leftDays2 = difference2.days %}
                        {% if leftDays1 > 0 %}
                            {% set ratio = leftDays2/leftDays1 %}
                            {#{{ ratio }}#}
                            {#{{ leftDays1 }} /#}
                            {#{{ leftDays2 }}#}
                            {% if ratio <= 0.33 %}
                                <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i></small>
                            {% elseif ratio <= 0.66 %}
                                <small class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i></small>
                            {% else %}
                                <small class=\"label label-success\"><i class=\"fa fa-clock-o\"></i></small>
                            {% endif %}
                        {% else %}
                            <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i></small>
                        {% endif %}



                        {#{{difference1|date(\"%d'%h'%i'%s''\")}}#}



                        <!-- General tools such as edit or delete-->
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\" onClick=\"window.open('/profile/edit/{{ todo.id }}','pagename','resizable,height=500,width=400'); return false;\"></i>
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

{% endblock %}", "profile/Default/index.html.twig", "/home/petras/dd-project/app/Resources/views/profile/Default/index.html.twig");
    }
}
