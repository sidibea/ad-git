<?php

/* NBMainBundle::index.html.twig */
class __TwigTemplate_7b8d2f1f2315b6e89bf4408c3463c349b9bf45054bd7543eb3caf3e8eb9ea549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle::index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pagestyle' => array($this, 'block_pagestyle'),
            'contentheader' => array($this, 'block_contentheader'),
            'content' => array($this, 'block_content'),
            'pagescript' => array($this, 'block_pagescript'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c03d0177f7d57fddd30aa61d0da8719cd8484fcb7a1aaa540a3475617b3c3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c03d0177f7d57fddd30aa61d0da8719cd8484fcb7a1aaa540a3475617b3c3b4->enter($__internal_5c03d0177f7d57fddd30aa61d0da8719cd8484fcb7a1aaa540a3475617b3c3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c03d0177f7d57fddd30aa61d0da8719cd8484fcb7a1aaa540a3475617b3c3b4->leave($__internal_5c03d0177f7d57fddd30aa61d0da8719cd8484fcb7a1aaa540a3475617b3c3b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f43a5da078aa75801cc154a385b110493063267d8c9531df82c124399dd3b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f43a5da078aa75801cc154a385b110493063267d8c9531df82c124399dd3b4f->enter($__internal_7f43a5da078aa75801cc154a385b110493063267d8c9531df82c124399dd3b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Tableau de Bord  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_7f43a5da078aa75801cc154a385b110493063267d8c9531df82c124399dd3b4f->leave($__internal_7f43a5da078aa75801cc154a385b110493063267d8c9531df82c124399dd3b4f_prof);

    }

    // line 5
    public function block_pagestyle($context, array $blocks = array())
    {
        $__internal_e2c5901aa0d74cf78972153c9d6187040d0f2dd1fb3fd792586c8f06bf16cc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c5901aa0d74cf78972153c9d6187040d0f2dd1fb3fd792586c8f06bf16cc5e->enter($__internal_e2c5901aa0d74cf78972153c9d6187040d0f2dd1fb3fd792586c8f06bf16cc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagestyle"));

        // line 6
        echo "     <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.css")), "html", null, true);
        echo "\">
 ";
        
        $__internal_e2c5901aa0d74cf78972153c9d6187040d0f2dd1fb3fd792586c8f06bf16cc5e->leave($__internal_e2c5901aa0d74cf78972153c9d6187040d0f2dd1fb3fd792586c8f06bf16cc5e_prof);

    }

    // line 9
    public function block_contentheader($context, array $blocks = array())
    {
        $__internal_5dc3d10cf884553f60f3df263904d608ca28c34a333c3acecb28a10afdae9a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc3d10cf884553f60f3df263904d608ca28c34a333c3acecb28a10afdae9a43->enter($__internal_5dc3d10cf884553f60f3df263904d608ca28c34a333c3acecb28a10afdae9a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        // line 10
        echo "    <h1>
        Tableau de Bord
        <small>Panneau d'administration</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Tableau de Bord</li>
    </ol>
";
        
        $__internal_5dc3d10cf884553f60f3df263904d608ca28c34a333c3acecb28a10afdae9a43->leave($__internal_5dc3d10cf884553f60f3df263904d608ca28c34a333c3acecb28a10afdae9a43_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_b28ac0e1cc8c068a01cd52a849200922e30caa83411a17a6dc2cbf1430b374e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28ac0e1cc8c068a01cd52a849200922e30caa83411a17a6dc2cbf1430b374e0->enter($__internal_b28ac0e1cc8c068a01cd52a849200922e30caa83411a17a6dc2cbf1430b374e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <!-- Small boxes (Stat box) -->
    <div class=\"row\">
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-aqua\">
                <div class=\"inner\">
                    <h3>150</h3>

                    <p>Seatsellers</p>
                </div>
                <div class=\"icon\">
                    <i class=\"ion ion-bag\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-green\">
                <div class=\"inner\">
                    <h3>53 000 000 FCFA</h3>

                    <p>Chiffre d'affaire</p>
                </div>
                <div class=\"icon\">
                    <i class=\"ion ion-stats-bars\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-yellow\">
                <div class=\"inner\">
                    <h3>44</h3>

                    <p>Rebonds</p>
                </div>
                <div class=\"icon\">
                    <i class=\"ion ion-person-add\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-red\">
                <div class=\"inner\">
                    <h3>65</h3>

                    <p>Billets achetés</p>
                </div>
                <div class=\"icon\">
                    <i class=\"ion ion-pie-graph\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

    ";
        // line 86
        $this->loadTemplate("NBMainBundle:includes:recap.html.twig", "NBMainBundle::index.html.twig", 86)->display($context);
        // line 87
        echo "
";
        
        $__internal_b28ac0e1cc8c068a01cd52a849200922e30caa83411a17a6dc2cbf1430b374e0->leave($__internal_b28ac0e1cc8c068a01cd52a849200922e30caa83411a17a6dc2cbf1430b374e0_prof);

    }

    // line 90
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_0409a567227f340883bcb1debd656965a7acf164bfdbe4bd3cd7ead391e5443e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0409a567227f340883bcb1debd656965a7acf164bfdbe4bd3cd7ead391e5443e->enter($__internal_0409a567227f340883bcb1debd656965a7acf164bfdbe4bd3cd7ead391e5443e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        // line 91
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/chartjs/Chart.min.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0409a567227f340883bcb1debd656965a7acf164bfdbe4bd3cd7ead391e5443e->leave($__internal_0409a567227f340883bcb1debd656965a7acf164bfdbe4bd3cd7ead391e5443e_prof);

    }

    // line 94
    public function block_script($context, array $blocks = array())
    {
        $__internal_f2f45393ae65547310561c8a58700a01f8baa0cadff4ea189dc48d11e8371316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f45393ae65547310561c8a58700a01f8baa0cadff4ea189dc48d11e8371316->enter($__internal_f2f45393ae65547310561c8a58700a01f8baa0cadff4ea189dc48d11e8371316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 95
        echo "    <!-- page script -->
    <script>
        \$(function () {
            'use strict';

            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */

            //-----------------------
            //- MONTHLY SALES CHART -
            //-----------------------

            // Get context with jQuery - using jQuery's .get() method.
            var salesChartCanvas = \$(\"#salesChart\").get(0).getContext(\"2d\");
            // This will get the first returned node in the jQuery collection.
            var salesChart = new Chart(salesChartCanvas);

            var salesChartData = {
                labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
                datasets: [
                    {
                        label: \"Electronics\",
                        fillColor: \"rgb(210, 214, 222)\",
                        strokeColor: \"rgb(210, 214, 222)\",
                        pointColor: \"rgb(210, 214, 222)\",
                        pointStrokeColor: \"#c1c7d1\",
                        pointHighlightFill: \"#fff\",
                        pointHighlightStroke: \"rgb(220,220,220)\",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: \"Digital Goods\",
                        fillColor: \"rgba(60,141,188,0.9)\",
                        strokeColor: \"rgba(60,141,188,0.8)\",
                        pointColor: \"#3b8bba\",
                        pointStrokeColor: \"rgba(60,141,188,1)\",
                        pointHighlightFill: \"#fff\",
                        pointHighlightStroke: \"rgba(60,141,188,1)\",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            };

            var salesChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: false,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 4,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: \"<ul class=\\\"<%=name.toLowerCase()%>-legend\\\"><% for (var i=0; i<datasets.length; i++)<li><span style=\\\"background-color:<%=datasets[i].lineColor%>\\\"></span><%=datasets[i].label%></li><%}%></ul>\",
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true
            };

            //Create the line chart
            salesChart.Line(salesChartData, salesChartOptions);
        });
    </script>

";
        
        $__internal_f2f45393ae65547310561c8a58700a01f8baa0cadff4ea189dc48d11e8371316->leave($__internal_f2f45393ae65547310561c8a58700a01f8baa0cadff4ea189dc48d11e8371316_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 95,  192 => 94,  182 => 91,  176 => 90,  168 => 87,  166 => 86,  99 => 21,  93 => 20,  82 => 15,  75 => 10,  69 => 9,  59 => 6,  53 => 5,  39 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block title %} Tableau de Bord  {{ parent() }} {% endblock %}

 {% block pagestyle %}
     <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/plugins/datatables/dataTables.bootstrap.css')) }}\">
 {% endblock %}

{% block contentheader %}
    <h1>
        Tableau de Bord
        <small>Panneau d'administration</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('nb_main_homepage') }}\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Tableau de Bord</li>
    </ol>
{% endblock %}

{% block content %}
    <!-- Small boxes (Stat box) -->
    <div class=\"row\">
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-aqua\">
                <div class=\"inner\">
                    <h3>150</h3>

                    <p>Seatsellers</p>
                </div>
                <div class=\"icon\">
                    <i class=\"ion ion-bag\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-green\">
                <div class=\"inner\">
                    <h3>53 000 000 FCFA</h3>

                    <p>Chiffre d'affaire</p>
                </div>
                <div class=\"icon\">
                    <i class=\"ion ion-stats-bars\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-yellow\">
                <div class=\"inner\">
                    <h3>44</h3>

                    <p>Rebonds</p>
                </div>
                <div class=\"icon\">
                    <i class=\"ion ion-person-add\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-red\">
                <div class=\"inner\">
                    <h3>65</h3>

                    <p>Billets achetés</p>
                </div>
                <div class=\"icon\">
                    <i class=\"ion ion-pie-graph\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

    {% include \"NBMainBundle:includes:recap.html.twig\" %}

{% endblock %}

{% block pagescript %}
    <script src=\"{{ absolute_url(asset('assets/plugins/chartjs/Chart.min.js')) }}\"></script>
{% endblock %}

{% block script %}
    <!-- page script -->
    <script>
        \$(function () {
            'use strict';

            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */

            //-----------------------
            //- MONTHLY SALES CHART -
            //-----------------------

            // Get context with jQuery - using jQuery's .get() method.
            var salesChartCanvas = \$(\"#salesChart\").get(0).getContext(\"2d\");
            // This will get the first returned node in the jQuery collection.
            var salesChart = new Chart(salesChartCanvas);

            var salesChartData = {
                labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
                datasets: [
                    {
                        label: \"Electronics\",
                        fillColor: \"rgb(210, 214, 222)\",
                        strokeColor: \"rgb(210, 214, 222)\",
                        pointColor: \"rgb(210, 214, 222)\",
                        pointStrokeColor: \"#c1c7d1\",
                        pointHighlightFill: \"#fff\",
                        pointHighlightStroke: \"rgb(220,220,220)\",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: \"Digital Goods\",
                        fillColor: \"rgba(60,141,188,0.9)\",
                        strokeColor: \"rgba(60,141,188,0.8)\",
                        pointColor: \"#3b8bba\",
                        pointStrokeColor: \"rgba(60,141,188,1)\",
                        pointHighlightFill: \"#fff\",
                        pointHighlightStroke: \"rgba(60,141,188,1)\",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            };

            var salesChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: false,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 4,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: \"<ul class=\\\"<%=name.toLowerCase()%>-legend\\\"><% for (var i=0; i<datasets.length; i++)<li><span style=\\\"background-color:<%=datasets[i].lineColor%>\\\"></span><%=datasets[i].label%></li><%}%></ul>\",
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true
            };

            //Create the line chart
            salesChart.Line(salesChartData, salesChartOptions);
        });
    </script>

{% endblock %}", "NBMainBundle::index.html.twig", "/var/www/html/ad/src/NB/MainBundle/Resources/views/index.html.twig");
    }
}
