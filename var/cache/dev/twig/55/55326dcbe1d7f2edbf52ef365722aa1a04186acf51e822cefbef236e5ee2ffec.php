<?php

/* profile/base.html.twig */
class __TwigTemplate_d6df6519036cd1b52a7160ed2b3094e786956a6b9bde32afa02548ec029fb821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b06f1ecc89c424f7e30dd97f06d0604bb4fdcc78e94edf05df79662880a02e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06f1ecc89c424f7e30dd97f06d0604bb4fdcc78e94edf05df79662880a02e6a->enter($__internal_b06f1ecc89c424f7e30dd97f06d0604bb4fdcc78e94edf05df79662880a02e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/base.html.twig"));

        $__internal_3619258546bc7f9500759bf275803f7ecebccebf7cd4c6ee74c817ae4f928879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3619258546bc7f9500759bf275803f7ecebccebf7cd4c6ee74c817ae4f928879->enter($__internal_3619258546bc7f9500759bf275803f7ecebccebf7cd4c6ee74c817ae4f928879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\">

        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Admin</b>LTE</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=\"dropdown messages-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">0</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 0 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    ";
        // line 64
        echo "                                        ";
        // line 65
        echo "                                            ";
        // line 66
        echo "                                                ";
        // line 67
        echo "                                            ";
        // line 68
        echo "                                            ";
        // line 69
        echo "                                                ";
        // line 70
        echo "                                                ";
        // line 71
        echo "                                            ";
        // line 72
        echo "                                            ";
        // line 73
        echo "                                        ";
        // line 74
        echo "                                    ";
        // line 75
        echo "                                    ";
        // line 76
        echo "                                    ";
        // line 77
        echo "                                        ";
        // line 78
        echo "                                            ";
        // line 79
        echo "                                                ";
        // line 80
        echo "                                            ";
        // line 81
        echo "                                            ";
        // line 82
        echo "                                                ";
        // line 83
        echo "                                                ";
        // line 84
        echo "                                            ";
        // line 85
        echo "                                            ";
        // line 86
        echo "                                        ";
        // line 87
        echo "                                    ";
        // line 88
        echo "                                    ";
        // line 89
        echo "                                        ";
        // line 90
        echo "                                            ";
        // line 91
        echo "                                                ";
        // line 92
        echo "                                            ";
        // line 93
        echo "                                            ";
        // line 94
        echo "                                                ";
        // line 95
        echo "                                                ";
        // line 96
        echo "                                            ";
        // line 97
        echo "                                            ";
        // line 98
        echo "                                        ";
        // line 99
        echo "                                    ";
        // line 100
        echo "                                    ";
        // line 101
        echo "                                        ";
        // line 102
        echo "                                            ";
        // line 103
        echo "                                                ";
        // line 104
        echo "                                            ";
        // line 105
        echo "                                            ";
        // line 106
        echo "                                                ";
        // line 107
        echo "                                                ";
        // line 108
        echo "                                            ";
        // line 109
        echo "                                            ";
        // line 110
        echo "                                        ";
        // line 111
        echo "                                    ";
        // line 112
        echo "                                    ";
        // line 113
        echo "                                        ";
        // line 114
        echo "                                            ";
        // line 115
        echo "                                                ";
        // line 116
        echo "                                            ";
        // line 117
        echo "                                            ";
        // line 118
        echo "                                                ";
        // line 119
        echo "                                                ";
        // line 120
        echo "                                            ";
        // line 121
        echo "                                            ";
        // line 122
        echo "                                        ";
        // line 123
        echo "                                    ";
        // line 124
        echo "                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class=\"dropdown notifications-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">1</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 1 notification</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    ";
        // line 146
        echo "                                        ";
        // line 147
        echo "                                            ";
        // line 148
        echo "                                            ";
        // line 149
        echo "                                        ";
        // line 150
        echo "                                    ";
        // line 151
        echo "                                    ";
        // line 152
        echo "                                        ";
        // line 153
        echo "                                            ";
        // line 154
        echo "                                        ";
        // line 155
        echo "                                    ";
        // line 156
        echo "                                    ";
        // line 157
        echo "                                        ";
        // line 158
        echo "                                            ";
        // line 159
        echo "                                        ";
        // line 160
        echo "                                    ";
        // line 161
        echo "                                    ";
        // line 162
        echo "                                        ";
        // line 163
        echo "                                            ";
        // line 164
        echo "                                        ";
        // line 165
        echo "                                    ";
        // line 166
        echo "                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class=\"dropdown tasks-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-flag-o\"></i>
                            <span class=\"label label-danger\">0</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 0 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    ";
        // line 183
        echo "                                        ";
        // line 184
        echo "                                            ";
        // line 185
        echo "                                                ";
        // line 186
        echo "                                                ";
        // line 187
        echo "                                            ";
        // line 188
        echo "                                            ";
        // line 189
        echo "                                                ";
        // line 190
        echo "                                                    ";
        // line 191
        echo "                                                ";
        // line 192
        echo "                                            ";
        // line 193
        echo "                                        ";
        // line 194
        echo "                                    ";
        // line 195
        echo "                                    ";
        // line 196
        echo "                                    ";
        // line 197
        echo "                                        ";
        // line 198
        echo "                                            ";
        // line 199
        echo "                                                ";
        // line 200
        echo "                                                ";
        // line 201
        echo "                                            ";
        // line 202
        echo "                                            ";
        // line 203
        echo "                                                ";
        // line 204
        echo "                                                    ";
        // line 205
        echo "                                                ";
        // line 206
        echo "                                            ";
        // line 207
        echo "                                        ";
        // line 208
        echo "                                    ";
        // line 209
        echo "                                    ";
        // line 210
        echo "                                    ";
        // line 211
        echo "                                        ";
        // line 212
        echo "                                            ";
        // line 213
        echo "                                                ";
        // line 214
        echo "                                                ";
        // line 215
        echo "                                            ";
        // line 216
        echo "                                            ";
        // line 217
        echo "                                                ";
        // line 218
        echo "                                                    ";
        // line 219
        echo "                                                ";
        // line 220
        echo "                                            ";
        // line 221
        echo "                                        ";
        // line 222
        echo "                                    ";
        // line 223
        echo "                                    ";
        // line 224
        echo "                                    ";
        // line 225
        echo "                                        ";
        // line 226
        echo "                                            ";
        // line 227
        echo "                                                ";
        // line 228
        echo "                                                ";
        // line 229
        echo "                                            ";
        // line 230
        echo "                                            ";
        // line 231
        echo "                                                ";
        // line 232
        echo "                                                    ";
        // line 233
        echo "                                                ";
        // line 234
        echo "                                            ";
        // line 235
        echo "                                        ";
        // line 236
        echo "                                    ";
        // line 237
        echo "                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class=\"footer\">
                                <a href=\"#\">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/dist/img/nurser.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">";
        // line 249
        $this->displayBlock("username", $context, $blocks);
        echo "</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">
                                <img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/dist/img/nurser.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    ";
        // line 257
        $this->displayBlock("username", $context, $blocks);
        echo "
                                    <small>Member since 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            ";
        // line 263
        echo "                                ";
        // line 264
        echo "                                    ";
        // line 265
        echo "                                        ";
        // line 266
        echo "                                    ";
        // line 267
        echo "                                    ";
        // line 268
        echo "                                        ";
        // line 269
        echo "                                    ";
        // line 270
        echo "                                    ";
        // line 271
        echo "                                        ";
        // line 272
        echo "                                    ";
        // line 273
        echo "                                ";
        // line 274
        echo "                                ";
        // line 275
        echo "                            ";
        // line 276
        echo "                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"/logout\" class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- Sidebar user panel -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    <img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/dist/img/nurser.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                </div>
                <div class=\"pull-left info\">
                    <p>";
        // line 306
        $this->displayBlock("username", $context, $blocks);
        echo "</p>
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search User...\">
                    <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\">
                <li class=\"header\">MAIN NAVIGATION</li>
                <li>
                    <a href=\"pages/widgets.html\">
                        <i class=\"fa fa-th\"></i> <span>Widgets</span>
                        <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-green\">new</small>
            </span>
                    </a>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-pie-chart\"></i>
                        <span>Charts</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/charts/chartjs.html\"><i class=\"fa fa-circle-o\"></i> ChartJS</a></li>
                        <li><a href=\"pages/charts/morris.html\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
                        <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
                        <li><a href=\"pages/charts/inline.html\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-laptop\"></i>
                        <span>UI Elements</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/UI/general.html\"><i class=\"fa fa-circle-o\"></i> General</a></li>
                        <li><a href=\"pages/UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
                        <li><a href=\"pages/UI/buttons.html\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
                        <li><a href=\"pages/UI/sliders.html\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
                        <li><a href=\"pages/UI/timeline.html\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
                        <li><a href=\"pages/UI/modals.html\"><i class=\"fa fa-circle-o\"></i> Modals</a></li>
                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-edit\"></i> <span>Forms</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/forms/general.html\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
                        <li><a href=\"pages/forms/advanced.html\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
                        <li><a href=\"pages/forms/editors.html\"><i class=\"fa fa-circle-o\"></i> Editors</a></li>
                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-table\"></i> <span>Tables</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
                        <li><a href=\"pages/tables/data.html\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"pages/calendar.html\">
                        <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                        <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-red\">3</small>
              <small class=\"label pull-right bg-blue\">17</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href=\"pages/mailbox/mailbox.html\">
                        <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                        <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-yellow\">12</small>
              <small class=\"label pull-right bg-green\">16</small>
              <small class=\"label pull-right bg-red\">5</small>
            </span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Dashboard
                <small>Version 2.0</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <!-- Info boxes -->
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-gear-outline\"></i></span>

                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">CPU Traffic</span>
                            <span class=\"info-box-number\">90<small>%</small></span>
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
                            <span class=\"info-box-text\">Likes</span>
                            <span class=\"info-box-number\">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class=\"clearfix visible-sm-block\"></div>

                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-green\"><i class=\"ion ion-ios-cart-outline\"></i></span>

                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Sales</span>
                            <span class=\"info-box-number\">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-yellow\"><i class=\"ion ion-ios-people-outline\"></i></span>

                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">New Members</span>
                            <span class=\"info-box-number\">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <!-- Main row -->
            <div class=\"row\">

                ";
        // line 494
        $this->displayBlock('body', $context, $blocks);
        // line 495
        echo "
            </div>
            <!-- /.row (main row) -->
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2014-2016 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <!-- Home tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">


            </div>
            <!-- /.tab-pane -->

            <!-- Settings tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">General Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Report panel usage
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Allow mail redirect
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Expose author name in posts
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Show me as online
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Turn off notifications
                            <input type=\"checkbox\" class=\"pull-right\">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Delete chat history
                            <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>

</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Morris.js charts -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
<script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
<!-- jvectormap -->
<script src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
<script src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!-- datepicker -->
<script src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
<!-- Slimscroll -->
<script src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("profile/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_b06f1ecc89c424f7e30dd97f06d0604bb4fdcc78e94edf05df79662880a02e6a->leave($__internal_b06f1ecc89c424f7e30dd97f06d0604bb4fdcc78e94edf05df79662880a02e6a_prof);

        
        $__internal_3619258546bc7f9500759bf275803f7ecebccebf7cd4c6ee74c817ae4f928879->leave($__internal_3619258546bc7f9500759bf275803f7ecebccebf7cd4c6ee74c817ae4f928879_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_abbcccc7e602c540e87ace4b68caf2b1d6a142745b1e63f81294516b6d54194f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbcccc7e602c540e87ace4b68caf2b1d6a142745b1e63f81294516b6d54194f->enter($__internal_abbcccc7e602c540e87ace4b68caf2b1d6a142745b1e63f81294516b6d54194f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_276dd2091be24425f6a8520c0e3679a95ad8973f40d8c242c1d8672b1721a47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276dd2091be24425f6a8520c0e3679a95ad8973f40d8c242c1d8672b1721a47a->enter($__internal_276dd2091be24425f6a8520c0e3679a95ad8973f40d8c242c1d8672b1721a47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Todo Dashboard";
        
        $__internal_276dd2091be24425f6a8520c0e3679a95ad8973f40d8c242c1d8672b1721a47a->leave($__internal_276dd2091be24425f6a8520c0e3679a95ad8973f40d8c242c1d8672b1721a47a_prof);

        
        $__internal_abbcccc7e602c540e87ace4b68caf2b1d6a142745b1e63f81294516b6d54194f->leave($__internal_abbcccc7e602c540e87ace4b68caf2b1d6a142745b1e63f81294516b6d54194f_prof);

    }

    // line 494
    public function block_body($context, array $blocks = array())
    {
        $__internal_7564f684bb19971fecd2de848650124d60765685ee9d8d44c1c6e18491515a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7564f684bb19971fecd2de848650124d60765685ee9d8d44c1c6e18491515a20->enter($__internal_7564f684bb19971fecd2de848650124d60765685ee9d8d44c1c6e18491515a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c204baf5eeeb08ad03913d4f40730bb927dc6f87e7d2baf6e4078735455de2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c204baf5eeeb08ad03913d4f40730bb927dc6f87e7d2baf6e4078735455de2d->enter($__internal_5c204baf5eeeb08ad03913d4f40730bb927dc6f87e7d2baf6e4078735455de2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5c204baf5eeeb08ad03913d4f40730bb927dc6f87e7d2baf6e4078735455de2d->leave($__internal_5c204baf5eeeb08ad03913d4f40730bb927dc6f87e7d2baf6e4078735455de2d_prof);

        
        $__internal_7564f684bb19971fecd2de848650124d60765685ee9d8d44c1c6e18491515a20->leave($__internal_7564f684bb19971fecd2de848650124d60765685ee9d8d44c1c6e18491515a20_prof);

    }

    public function getTemplateName()
    {
        return "profile/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  930 => 494,  912 => 6,  899 => 642,  894 => 640,  889 => 638,  884 => 636,  879 => 634,  874 => 632,  869 => 630,  864 => 628,  858 => 625,  853 => 623,  849 => 622,  844 => 620,  839 => 618,  833 => 615,  822 => 607,  708 => 495,  706 => 494,  515 => 306,  509 => 303,  480 => 276,  478 => 275,  476 => 274,  474 => 273,  472 => 272,  470 => 271,  468 => 270,  466 => 269,  464 => 268,  462 => 267,  460 => 266,  458 => 265,  456 => 264,  454 => 263,  446 => 257,  440 => 254,  432 => 249,  428 => 248,  415 => 237,  413 => 236,  411 => 235,  409 => 234,  407 => 233,  405 => 232,  403 => 231,  401 => 230,  399 => 229,  397 => 228,  395 => 227,  393 => 226,  391 => 225,  389 => 224,  387 => 223,  385 => 222,  383 => 221,  381 => 220,  379 => 219,  377 => 218,  375 => 217,  373 => 216,  371 => 215,  369 => 214,  367 => 213,  365 => 212,  363 => 211,  361 => 210,  359 => 209,  357 => 208,  355 => 207,  353 => 206,  351 => 205,  349 => 204,  347 => 203,  345 => 202,  343 => 201,  341 => 200,  339 => 199,  337 => 198,  335 => 197,  333 => 196,  331 => 195,  329 => 194,  327 => 193,  325 => 192,  323 => 191,  321 => 190,  319 => 189,  317 => 188,  315 => 187,  313 => 186,  311 => 185,  309 => 184,  307 => 183,  289 => 166,  287 => 165,  285 => 164,  283 => 163,  281 => 162,  279 => 161,  277 => 160,  275 => 159,  273 => 158,  271 => 157,  269 => 156,  267 => 155,  265 => 154,  263 => 153,  261 => 152,  259 => 151,  257 => 150,  255 => 149,  253 => 148,  251 => 147,  249 => 146,  226 => 124,  224 => 123,  222 => 122,  220 => 121,  218 => 120,  216 => 119,  214 => 118,  212 => 117,  210 => 116,  208 => 115,  206 => 114,  204 => 113,  202 => 112,  200 => 111,  198 => 110,  196 => 109,  194 => 108,  192 => 107,  190 => 106,  188 => 105,  186 => 104,  184 => 103,  182 => 102,  180 => 101,  178 => 100,  176 => 99,  174 => 98,  172 => 97,  170 => 96,  168 => 95,  166 => 94,  164 => 93,  162 => 92,  160 => 91,  158 => 90,  156 => 89,  154 => 88,  152 => 87,  150 => 86,  148 => 85,  146 => 84,  144 => 83,  142 => 82,  140 => 81,  138 => 80,  136 => 79,  134 => 78,  132 => 77,  130 => 76,  128 => 75,  126 => 74,  124 => 73,  122 => 72,  120 => 71,  118 => 70,  116 => 69,  114 => 68,  112 => 67,  110 => 66,  108 => 65,  106 => 64,  61 => 21,  55 => 18,  50 => 16,  41 => 10,  34 => 6,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{% block title %}Todo Dashboard{% endblock %}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"{{ asset('profile/bootstrap/css/bootstrap.min.css') }}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"{{ asset('profile/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('profile/dist/css/AdminLTE.min.css') }}\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"{{ asset('profile/dist/css/skins/_all-skins.min.css') }}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\">

        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Admin</b>LTE</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=\"dropdown messages-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">0</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 0 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    {#<li><!-- start message -->#}
                                        {#<a href=\"#\">#}
                                            {#<div class=\"pull-left\">#}
                                                {#<img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">#}
                                            {#</div>#}
                                            {#<h4>#}
                                                {#Support Team#}
                                                {#<small><i class=\"fa fa-clock-o\"></i> 5 mins</small>#}
                                            {#</h4>#}
                                            {#<p>Why not buy a new awesome theme?</p>#}
                                        {#</a>#}
                                    {#</li>#}
                                    {#<!-- end message -->#}
                                    {#<li>#}
                                        {#<a href=\"#\">#}
                                            {#<div class=\"pull-left\">#}
                                                {#<img src=\"dist/img/user3-128x128.jpg\" class=\"img-circle\" alt=\"User Image\">#}
                                            {#</div>#}
                                            {#<h4>#}
                                                {#AdminLTE Design Team#}
                                                {#<small><i class=\"fa fa-clock-o\"></i> 2 hours</small>#}
                                            {#</h4>#}
                                            {#<p>Why not buy a new awesome theme?</p>#}
                                        {#</a>#}
                                    {#</li>#}
                                    {#<li>#}
                                        {#<a href=\"#\">#}
                                            {#<div class=\"pull-left\">#}
                                                {#<img src=\"dist/img/user4-128x128.jpg\" class=\"img-circle\" alt=\"User Image\">#}
                                            {#</div>#}
                                            {#<h4>#}
                                                {#Developers#}
                                                {#<small><i class=\"fa fa-clock-o\"></i> Today</small>#}
                                            {#</h4>#}
                                            {#<p>Why not buy a new awesome theme?</p>#}
                                        {#</a>#}
                                    {#</li>#}
                                    {#<li>#}
                                        {#<a href=\"#\">#}
                                            {#<div class=\"pull-left\">#}
                                                {#<img src=\"dist/img/user3-128x128.jpg\" class=\"img-circle\" alt=\"User Image\">#}
                                            {#</div>#}
                                            {#<h4>#}
                                                {#Sales Department#}
                                                {#<small><i class=\"fa fa-clock-o\"></i> Yesterday</small>#}
                                            {#</h4>#}
                                            {#<p>Why not buy a new awesome theme?</p>#}
                                        {#</a>#}
                                    {#</li>#}
                                    {#<li>#}
                                        {#<a href=\"#\">#}
                                            {#<div class=\"pull-left\">#}
                                                {#<img src=\"dist/img/user4-128x128.jpg\" class=\"img-circle\" alt=\"User Image\">#}
                                            {#</div>#}
                                            {#<h4>#}
                                                {#Reviewers#}
                                                {#<small><i class=\"fa fa-clock-o\"></i> 2 days</small>#}
                                            {#</h4>#}
                                            {#<p>Why not buy a new awesome theme?</p>#}
                                        {#</a>#}
                                    {#</li>#}
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class=\"dropdown notifications-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">1</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 1 notification</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    {#<li>#}
                                        {#<a href=\"#\">#}
                                            {#<i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the#}
                                            {#page and may cause design problems#}
                                        {#</a>#}
                                    {#</li>#}
                                    {#<li>#}
                                        {#<a href=\"#\">#}
                                            {#<i class=\"fa fa-users text-red\"></i> 5 new members joined#}
                                        {#</a>#}
                                    {#</li>#}
                                    {#<li>#}
                                        {#<a href=\"#\">#}
                                            {#<i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made#}
                                        {#</a>#}
                                    {#</li>#}
                                    {#<li>#}
                                        {#<a href=\"#\">#}
                                            {#<i class=\"fa fa-user text-red\"></i> You changed your username#}
                                        {#</a>#}
                                    {#</li>#}
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class=\"dropdown tasks-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-flag-o\"></i>
                            <span class=\"label label-danger\">0</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 0 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    {#<li><!-- Task item -->#}
                                        {#<a href=\"#\">#}
                                            {#<h3>#}
                                                {#Design some buttons#}
                                                {#<small class=\"pull-right\">20%</small>#}
                                            {#</h3>#}
                                            {#<div class=\"progress xs\">#}
                                                {#<div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">#}
                                                    {#<span class=\"sr-only\">20% Complete</span>#}
                                                {#</div>#}
                                            {#</div>#}
                                        {#</a>#}
                                    {#</li>#}
                                    {#<!-- end task item -->#}
                                    {#<li><!-- Task item -->#}
                                        {#<a href=\"#\">#}
                                            {#<h3>#}
                                                {#Create a nice theme#}
                                                {#<small class=\"pull-right\">40%</small>#}
                                            {#</h3>#}
                                            {#<div class=\"progress xs\">#}
                                                {#<div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">#}
                                                    {#<span class=\"sr-only\">40% Complete</span>#}
                                                {#</div>#}
                                            {#</div>#}
                                        {#</a>#}
                                    {#</li>#}
                                    {#<!-- end task item -->#}
                                    {#<li><!-- Task item -->#}
                                        {#<a href=\"#\">#}
                                            {#<h3>#}
                                                {#Some task I need to do#}
                                                {#<small class=\"pull-right\">60%</small>#}
                                            {#</h3>#}
                                            {#<div class=\"progress xs\">#}
                                                {#<div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">#}
                                                    {#<span class=\"sr-only\">60% Complete</span>#}
                                                {#</div>#}
                                            {#</div>#}
                                        {#</a>#}
                                    {#</li>#}
                                    {#<!-- end task item -->#}
                                    {#<li><!-- Task item -->#}
                                        {#<a href=\"#\">#}
                                            {#<h3>#}
                                                {#Make beautiful transitions#}
                                                {#<small class=\"pull-right\">80%</small>#}
                                            {#</h3>#}
                                            {#<div class=\"progress xs\">#}
                                                {#<div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">#}
                                                    {#<span class=\"sr-only\">80% Complete</span>#}
                                                {#</div>#}
                                            {#</div>#}
                                        {#</a>#}
                                    {#</li>#}
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class=\"footer\">
                                <a href=\"#\">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"{{ asset('profile/dist/img/nurser.jpg') }}\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">{{ block('username') }}</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">
                                <img src=\"{{ asset('profile/dist/img/nurser.jpg') }}\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    {{ block('username') }}
                                    <small>Member since 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            {#<li class=\"user-body\">#}
                                {#<div class=\"row\">#}
                                    {#<div class=\"col-xs-4 text-center\">#}
                                        {#<a href=\"#\">Followers</a>#}
                                    {#</div>#}
                                    {#<div class=\"col-xs-4 text-center\">#}
                                        {#<a href=\"#\">Sales</a>#}
                                    {#</div>#}
                                    {#<div class=\"col-xs-4 text-center\">#}
                                        {#<a href=\"#\">Friends</a>#}
                                    {#</div>#}
                                {#</div>#}
                                {#<!-- /.row -->#}
                            {#</li>#}
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"/logout\" class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- Sidebar user panel -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    <img src=\"{{ asset('profile/dist/img/nurser.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                </div>
                <div class=\"pull-left info\">
                    <p>{{ block('username') }}</p>
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search User...\">
                    <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\">
                <li class=\"header\">MAIN NAVIGATION</li>
                <li>
                    <a href=\"pages/widgets.html\">
                        <i class=\"fa fa-th\"></i> <span>Widgets</span>
                        <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-green\">new</small>
            </span>
                    </a>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-pie-chart\"></i>
                        <span>Charts</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/charts/chartjs.html\"><i class=\"fa fa-circle-o\"></i> ChartJS</a></li>
                        <li><a href=\"pages/charts/morris.html\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
                        <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
                        <li><a href=\"pages/charts/inline.html\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-laptop\"></i>
                        <span>UI Elements</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/UI/general.html\"><i class=\"fa fa-circle-o\"></i> General</a></li>
                        <li><a href=\"pages/UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
                        <li><a href=\"pages/UI/buttons.html\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
                        <li><a href=\"pages/UI/sliders.html\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
                        <li><a href=\"pages/UI/timeline.html\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
                        <li><a href=\"pages/UI/modals.html\"><i class=\"fa fa-circle-o\"></i> Modals</a></li>
                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-edit\"></i> <span>Forms</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/forms/general.html\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
                        <li><a href=\"pages/forms/advanced.html\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
                        <li><a href=\"pages/forms/editors.html\"><i class=\"fa fa-circle-o\"></i> Editors</a></li>
                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-table\"></i> <span>Tables</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
                        <li><a href=\"pages/tables/data.html\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"pages/calendar.html\">
                        <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                        <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-red\">3</small>
              <small class=\"label pull-right bg-blue\">17</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href=\"pages/mailbox/mailbox.html\">
                        <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                        <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-yellow\">12</small>
              <small class=\"label pull-right bg-green\">16</small>
              <small class=\"label pull-right bg-red\">5</small>
            </span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Dashboard
                <small>Version 2.0</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <!-- Info boxes -->
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-ios-gear-outline\"></i></span>

                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">CPU Traffic</span>
                            <span class=\"info-box-number\">90<small>%</small></span>
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
                            <span class=\"info-box-text\">Likes</span>
                            <span class=\"info-box-number\">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class=\"clearfix visible-sm-block\"></div>

                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-green\"><i class=\"ion ion-ios-cart-outline\"></i></span>

                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Sales</span>
                            <span class=\"info-box-number\">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-yellow\"><i class=\"ion ion-ios-people-outline\"></i></span>

                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">New Members</span>
                            <span class=\"info-box-number\">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <!-- Main row -->
            <div class=\"row\">

                {% block body %}{% endblock %}

            </div>
            <!-- /.row (main row) -->
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2014-2016 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <!-- Home tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">


            </div>
            <!-- /.tab-pane -->

            <!-- Settings tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">General Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Report panel usage
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Allow mail redirect
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Expose author name in posts
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Show me as online
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Turn off notifications
                            <input type=\"checkbox\" class=\"pull-right\">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Delete chat history
                            <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>

</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src=\"{{ asset('profile/plugins/jQuery/jquery-2.2.3.min.js') }}\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src=\"{{ asset('profile/bootstrap/js/bootstrap.min.js') }}\"></script>
<!-- Morris.js charts -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
<script src=\"{{ asset('profile/plugins/morris/morris.min.js') }}\"></script>
<!-- Sparkline -->
<script src=\"{{ asset('profile/plugins/sparkline/jquery.sparkline.min.js') }}\"></script>
<!-- jvectormap -->
<script src=\"{{ asset('profile/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}\"></script>
<script src=\"{{ asset('profile/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}\"></script>
<!-- jQuery Knob Chart -->
<script src=\"{{ asset('profile/plugins/knob/jquery.knob.js') }}\"></script>
<!-- daterangepicker -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
<script src=\"{{ asset('profile/plugins/daterangepicker/daterangepicker.js') }}\"></script>
<!-- datepicker -->
<script src=\"{{ asset('profile/plugins/datepicker/bootstrap-datepicker.js') }}\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"{{ asset('profile/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}\"></script>
<!-- Slimscroll -->
<script src=\"{{ asset('profile/plugins/slimScroll/jquery.slimscroll.min.js') }}\"></script>
<!-- FastClick -->
<script src=\"{{ asset('profile/plugins/fastclick/fastclick.js') }}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('profile/dist/js/app.min.js') }}\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"{{ asset('profile/dist/js/pages/dashboard.js') }}\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"{{ asset('profile/dist/js/demo.js') }}\"></script>
</body>
</html>", "profile/base.html.twig", "/home/emas/Projects/todolist/app/Resources/views/profile/base.html.twig");
    }
}
