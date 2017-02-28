<?php

/* ::base.html.twig */
class __TwigTemplate_1169452e3569a4b79b725e617eeb08fc4f793bf9db029d4188b11cd5a44e8dd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pagestyle' => array($this, 'block_pagestyle'),
            'header' => array($this, 'block_header'),
            'sideboar' => array($this, 'block_sideboar'),
            'contentheader' => array($this, 'block_contentheader'),
            'content' => array($this, 'block_content'),
            'pagescript' => array($this, 'block_pagescript'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_477e2ebe2201481741ee8e2f71c095ca2d6414e2c603acf7c7a981ec1ee34acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477e2ebe2201481741ee8e2f71c095ca2d6414e2c603acf7c7a981ec1ee34acb->enter($__internal_477e2ebe2201481741ee8e2f71c095ca2d6414e2c603acf7c7a981ec1ee34acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>
        ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css")), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    ";
        // line 17
        $this->displayBlock('pagestyle', $context, $blocks);
        // line 21
        echo "    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/css/AdminLTE.min.css")), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/css/skins/_all-skins.min.css")), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<!-- Site wrapper -->
<div class=\"wrapper\">

    <header class=\"main-header\">
        ";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 43
        echo "
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            ";
        // line 52
        $this->displayBlock('sideboar', $context, $blocks);
        // line 56
        echo "        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            ";
        // line 66
        $this->displayBlock('contentheader', $context, $blocks);
        // line 70
        echo "        </section>

        <!-- Main content -->
        <section class=\"content\">
            ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "

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
                <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-user bg-yellow\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Custom Template Design
                                <span class=\"label label-danger pull-right\">70%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Update Resume
                                <span class=\"label label-success pull-right\">95%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Laravel Integration
                                <span class=\"label label-warning pull-right\">50%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Back End Framework
                                <span class=\"label label-primary pull-right\">68%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
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
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jQuery/jquery-2.2.3.min.js")), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
";
        // line 294
        $this->displayBlock('pagescript', $context, $blocks);
        // line 297
        echo "<!-- SlimScroll -->
<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/slimScroll/jquery.slimscroll.min.js")), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/fastclick/fastclick.js")), "html", null, true);
        echo "\"></script>

<!-- AdminLTE App -->
<script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/js/app.min.js")), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/js/demo.js")), "html", null, true);
        echo "\"></script>
 ";
        // line 306
        $this->displayBlock('script', $context, $blocks);
        // line 310
        echo "</body>
</html>

";
        
        $__internal_477e2ebe2201481741ee8e2f71c095ca2d6414e2c603acf7c7a981ec1ee34acb->leave($__internal_477e2ebe2201481741ee8e2f71c095ca2d6414e2c603acf7c7a981ec1ee34acb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_61c3f3416cc7462e8fe1fb237606b001644785cf109a7ec85e68406ee6960d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c3f3416cc7462e8fe1fb237606b001644785cf109a7ec85e68406ee6960d72->enter($__internal_61c3f3416cc7462e8fe1fb237606b001644785cf109a7ec85e68406ee6960d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | nextBus";
        
        $__internal_61c3f3416cc7462e8fe1fb237606b001644785cf109a7ec85e68406ee6960d72->leave($__internal_61c3f3416cc7462e8fe1fb237606b001644785cf109a7ec85e68406ee6960d72_prof);

    }

    // line 17
    public function block_pagestyle($context, array $blocks = array())
    {
        $__internal_6382129e922708226fc033542e719bcaf1b400823f6820a9431c42e5cc6e8603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6382129e922708226fc033542e719bcaf1b400823f6820a9431c42e5cc6e8603->enter($__internal_6382129e922708226fc033542e719bcaf1b400823f6820a9431c42e5cc6e8603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagestyle"));

        // line 18
        echo "

    ";
        
        $__internal_6382129e922708226fc033542e719bcaf1b400823f6820a9431c42e5cc6e8603->leave($__internal_6382129e922708226fc033542e719bcaf1b400823f6820a9431c42e5cc6e8603_prof);

    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        $__internal_b5a3f56d872bb45aa43953d6fbf72a1a2652a22f96bff4b9a002e383f43e8d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a3f56d872bb45aa43953d6fbf72a1a2652a22f96bff4b9a002e383f43e8d5b->enter($__internal_b5a3f56d872bb45aa43953d6fbf72a1a2652a22f96bff4b9a002e383f43e8d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 40
        echo "        ";
        $this->loadTemplate("include/header.html.twig", "::base.html.twig", 40)->display($context);
        // line 41
        echo "
        ";
        
        $__internal_b5a3f56d872bb45aa43953d6fbf72a1a2652a22f96bff4b9a002e383f43e8d5b->leave($__internal_b5a3f56d872bb45aa43953d6fbf72a1a2652a22f96bff4b9a002e383f43e8d5b_prof);

    }

    // line 52
    public function block_sideboar($context, array $blocks = array())
    {
        $__internal_b2ef39e9bde765b10e38a2a427f2016db89f15fb0f04ecf172235063773fbdec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ef39e9bde765b10e38a2a427f2016db89f15fb0f04ecf172235063773fbdec->enter($__internal_b2ef39e9bde765b10e38a2a427f2016db89f15fb0f04ecf172235063773fbdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sideboar"));

        // line 53
        echo "            ";
        $this->loadTemplate("include/sideboar.html.twig", "::base.html.twig", 53)->display($context);
        // line 54
        echo "
            ";
        
        $__internal_b2ef39e9bde765b10e38a2a427f2016db89f15fb0f04ecf172235063773fbdec->leave($__internal_b2ef39e9bde765b10e38a2a427f2016db89f15fb0f04ecf172235063773fbdec_prof);

    }

    // line 66
    public function block_contentheader($context, array $blocks = array())
    {
        $__internal_def2fa6ef29e9946ab235e0589c0cb61e2f48d69713e6d9400703442e9578ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def2fa6ef29e9946ab235e0589c0cb61e2f48d69713e6d9400703442e9578ee6->enter($__internal_def2fa6ef29e9946ab235e0589c0cb61e2f48d69713e6d9400703442e9578ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        // line 67
        echo "

            ";
        
        $__internal_def2fa6ef29e9946ab235e0589c0cb61e2f48d69713e6d9400703442e9578ee6->leave($__internal_def2fa6ef29e9946ab235e0589c0cb61e2f48d69713e6d9400703442e9578ee6_prof);

    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
        $__internal_635261fad9d448c814e9f76e61b2ad7e26d3bbe41fe9c6b101f5ee30f68879a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635261fad9d448c814e9f76e61b2ad7e26d3bbe41fe9c6b101f5ee30f68879a0->enter($__internal_635261fad9d448c814e9f76e61b2ad7e26d3bbe41fe9c6b101f5ee30f68879a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 75
        echo "

            ";
        
        $__internal_635261fad9d448c814e9f76e61b2ad7e26d3bbe41fe9c6b101f5ee30f68879a0->leave($__internal_635261fad9d448c814e9f76e61b2ad7e26d3bbe41fe9c6b101f5ee30f68879a0_prof);

    }

    // line 294
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_aed614f55f8052392535c688b0e49bcdbdc138eab6993dbbc0dd0d9285cdcbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed614f55f8052392535c688b0e49bcdbdc138eab6993dbbc0dd0d9285cdcbdc->enter($__internal_aed614f55f8052392535c688b0e49bcdbdc138eab6993dbbc0dd0d9285cdcbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        // line 295
        echo "
";
        
        $__internal_aed614f55f8052392535c688b0e49bcdbdc138eab6993dbbc0dd0d9285cdcbdc->leave($__internal_aed614f55f8052392535c688b0e49bcdbdc138eab6993dbbc0dd0d9285cdcbdc_prof);

    }

    // line 306
    public function block_script($context, array $blocks = array())
    {
        $__internal_9f3dd7b4b2115a89cfee9af16599ed2d8d85e9cdb92f9c77d5f6b1020a38aec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3dd7b4b2115a89cfee9af16599ed2d8d85e9cdb92f9c77d5f6b1020a38aec2->enter($__internal_9f3dd7b4b2115a89cfee9af16599ed2d8d85e9cdb92f9c77d5f6b1020a38aec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 307
        echo "

 ";
        
        $__internal_9f3dd7b4b2115a89cfee9af16599ed2d8d85e9cdb92f9c77d5f6b1020a38aec2->leave($__internal_9f3dd7b4b2115a89cfee9af16599ed2d8d85e9cdb92f9c77d5f6b1020a38aec2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 307,  485 => 306,  477 => 295,  471 => 294,  462 => 75,  456 => 74,  447 => 67,  441 => 66,  433 => 54,  430 => 53,  424 => 52,  416 => 41,  413 => 40,  407 => 39,  398 => 18,  392 => 17,  380 => 7,  370 => 310,  368 => 306,  364 => 305,  359 => 303,  353 => 300,  348 => 298,  345 => 297,  343 => 294,  339 => 293,  334 => 291,  119 => 78,  117 => 74,  111 => 70,  109 => 66,  97 => 56,  95 => 52,  84 => 43,  82 => 39,  65 => 25,  59 => 22,  56 => 21,  54 => 17,  46 => 12,  40 => 8,  38 => 7,  30 => 1,);
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
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>
        {% block title %} | nextBus{% endblock %}
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/bootstrap/css/bootstrap.min.css')) }}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    {% block pagestyle %}


    {% endblock %}
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/dist/css/AdminLTE.min.css')) }}\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/dist/css/skins/_all-skins.min.css')) }}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<!-- Site wrapper -->
<div class=\"wrapper\">

    <header class=\"main-header\">
        {% block header %}
        {% include 'include/header.html.twig' %}

        {% endblock %}

    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            {% block sideboar %}
            {% include 'include/sideboar.html.twig' %}

            {% endblock %}
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            {% block contentheader %}


            {% endblock %}
        </section>

        <!-- Main content -->
        <section class=\"content\">
            {% block content %}


            {% endblock %}


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
                <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-user bg-yellow\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Custom Template Design
                                <span class=\"label label-danger pull-right\">70%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Update Resume
                                <span class=\"label label-success pull-right\">95%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Laravel Integration
                                <span class=\"label label-warning pull-right\">50%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Back End Framework
                                <span class=\"label label-primary pull-right\">68%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
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
<script src=\"{{ absolute_url(asset('assets/plugins/jQuery/jquery-2.2.3.min.js')) }}\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"{{ absolute_url(asset('assets/bootstrap/js/bootstrap.min.js')) }}\"></script>
{% block pagescript %}

{% endblock %}
<!-- SlimScroll -->
<script src=\"{{ absolute_url(asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')) }}\"></script>
<!-- FastClick -->
<script src=\"{{ absolute_url(asset('assets/plugins/fastclick/fastclick.js')) }}\"></script>

<!-- AdminLTE App -->
<script src=\"{{ absolute_url(asset('assets/dist/js/app.min.js')) }}\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"{{ absolute_url(asset('assets/dist/js/demo.js')) }}\"></script>
 {% block script %}


 {% endblock %}
</body>
</html>

", "::base.html.twig", "/var/www/html/ad/app/Resources/views/base.html.twig");
    }
}
