<?php

/* NBMainBundle:Axes:list.html.twig */
class __TwigTemplate_e02e952f0213949c5a36d95cbc29dbc0082d284775d6d9e17cc672eb38e4407b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle:Axes:list.html.twig", 1);
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
        $__internal_eab51b444437a60cfac28fdc6e7ee5be9348c2d97df9395e4624be5589530400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab51b444437a60cfac28fdc6e7ee5be9348c2d97df9395e4624be5589530400->enter($__internal_eab51b444437a60cfac28fdc6e7ee5be9348c2d97df9395e4624be5589530400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle:Axes:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eab51b444437a60cfac28fdc6e7ee5be9348c2d97df9395e4624be5589530400->leave($__internal_eab51b444437a60cfac28fdc6e7ee5be9348c2d97df9395e4624be5589530400_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c93e32755cb75222551d7408d4a97649877edc588c812bd218fcab901cc0267e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93e32755cb75222551d7408d4a97649877edc588c812bd218fcab901cc0267e->enter($__internal_c93e32755cb75222551d7408d4a97649877edc588c812bd218fcab901cc0267e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Axes  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_c93e32755cb75222551d7408d4a97649877edc588c812bd218fcab901cc0267e->leave($__internal_c93e32755cb75222551d7408d4a97649877edc588c812bd218fcab901cc0267e_prof);

    }

    // line 4
    public function block_pagestyle($context, array $blocks = array())
    {
        $__internal_67198dae5fea2cb38fa8aeac9ec2241544654f0a5146dcd40288d36d7bf697f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67198dae5fea2cb38fa8aeac9ec2241544654f0a5146dcd40288d36d7bf697f7->enter($__internal_67198dae5fea2cb38fa8aeac9ec2241544654f0a5146dcd40288d36d7bf697f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagestyle"));

        // line 5
        echo "     <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.css")), "html", null, true);
        echo "\">
 ";
        
        $__internal_67198dae5fea2cb38fa8aeac9ec2241544654f0a5146dcd40288d36d7bf697f7->leave($__internal_67198dae5fea2cb38fa8aeac9ec2241544654f0a5146dcd40288d36d7bf697f7_prof);

    }

    // line 8
    public function block_contentheader($context, array $blocks = array())
    {
        $__internal_4da8ab0f5dfdecbe90053e807bdf8e508f8478e374efd5dcc4cd894026fae9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da8ab0f5dfdecbe90053e807bdf8e508f8478e374efd5dcc4cd894026fae9ce->enter($__internal_4da8ab0f5dfdecbe90053e807bdf8e508f8478e374efd5dcc4cd894026fae9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        // line 9
        echo "    <h1>
        Axes
        <small>Liste des axes</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Axes</li>
    </ol>
";
        
        $__internal_4da8ab0f5dfdecbe90053e807bdf8e508f8478e374efd5dcc4cd894026fae9ce->leave($__internal_4da8ab0f5dfdecbe90053e807bdf8e508f8478e374efd5dcc4cd894026fae9ce_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_255e37e43bbb63440cecb6c87cc39493d0557db6a9aa5d10fd528501d93aa507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255e37e43bbb63440cecb6c87cc39493d0557db6a9aa5d10fd528501d93aa507->enter($__internal_255e37e43bbb63440cecb6c87cc39493d0557db6a9aa5d10fd528501d93aa507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Axes (";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["list"] ?? $this->getContext($context, "list"))), "html", null, true);
        echo ")</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div class=\" pull-right\">
                    <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_ajouter_axes");
        echo "\" class=\"btn btn-app\">
                        <i class=\"fa fa-plus\"></i> Nouvel axes
                    </a>
                </div><br>
                <table id=\"company\" class=\"table table-bordered table-striped\">
                    <thead>
                    <tr>
                        <th>

                        </th>
                        <th>
                            Axes
                        </th>
                        <th>Type</th>
                        <th>
                            Distance
                        </th>

                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>

                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 53
            echo "                        <tr>
                            <td width=\"60\"><img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/images/uploads/compagnies/photo/" . $this->getAttribute($context["val"], "photo", array())))), "html", null, true);
            echo "\" width=\"40\" height=\"40\" alt=\"\"/></td>
                            <td><b>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "nom", array()), "html", null, true);
            echo "</b></td>
                            <td width=\"50\">
                                ";
            // line 57
            if (($this->getAttribute($context["val"], "type", array()) == 0)) {
                // line 58
                echo "                                    <span class=\"badge bg-blue\">Internationale</span>
                                ";
            } else {
                // line 60
                echo "                                    <span class=\"badge bg-green\">Nationale</span>
                                ";
            }
            // line 62
            echo "                            </td>
                            <td><b>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "distance", array()), "html", null, true);
            echo " km</b></td>

                            <td>
                                <div class=\"text-center\">
                                    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_modifier_axes", array("id" => $this->getAttribute($context["val"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-social-icon btn-bitbucket\"><i class=\"fa fa-edit\"></i></a>
                                    <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_supprimer_compagnie", array("id" => $this->getAttribute($context["val"], "id", array()))), "html", null, true);
            echo "\"  onclick=\" return confirm('Voulez vous vraiment cette ligne ?')\" class=\"btn btn-social-icon btn-google\"><i class=\"fa fa-times\"></i></a>

                                </div>
                            </td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <th>

                        </th>
                        <th>
                            Axes
                        </th>
                        <th>Type</th>
                        <th>
                            Distance
                        </th>
                        <th>Options</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>

    ";
        
        $__internal_255e37e43bbb63440cecb6c87cc39493d0557db6a9aa5d10fd528501d93aa507->leave($__internal_255e37e43bbb63440cecb6c87cc39493d0557db6a9aa5d10fd528501d93aa507_prof);

    }

    // line 99
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_d5811b7cff342f7de472b355d4d7de96a102b4fe10cf1c0aae4e2fa4db3fca58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5811b7cff342f7de472b355d4d7de96a102b4fe10cf1c0aae4e2fa4db3fca58->enter($__internal_d5811b7cff342f7de472b355d4d7de96a102b4fe10cf1c0aae4e2fa4db3fca58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        // line 100
        echo "        <!-- DataTables -->
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.min.js")), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_d5811b7cff342f7de472b355d4d7de96a102b4fe10cf1c0aae4e2fa4db3fca58->leave($__internal_d5811b7cff342f7de472b355d4d7de96a102b4fe10cf1c0aae4e2fa4db3fca58_prof);

    }

    // line 106
    public function block_script($context, array $blocks = array())
    {
        $__internal_ec738cee8ad04bfa637cb00d11ae5bab56b8b491a24d8702f5508340030bdf1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec738cee8ad04bfa637cb00d11ae5bab56b8b491a24d8702f5508340030bdf1e->enter($__internal_ec738cee8ad04bfa637cb00d11ae5bab56b8b491a24d8702f5508340030bdf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 107
        echo "    <!-- page script -->
    <script>
        \$(function () {
            \$(\"#example1\").DataTable();
            \$('#company').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false
            });
        });
    </script>

";
        
        $__internal_ec738cee8ad04bfa637cb00d11ae5bab56b8b491a24d8702f5508340030bdf1e->leave($__internal_ec738cee8ad04bfa637cb00d11ae5bab56b8b491a24d8702f5508340030bdf1e_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle:Axes:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 107,  243 => 106,  234 => 102,  230 => 101,  227 => 100,  221 => 99,  192 => 75,  179 => 68,  175 => 67,  168 => 63,  165 => 62,  161 => 60,  157 => 58,  155 => 57,  150 => 55,  146 => 54,  143 => 53,  139 => 52,  113 => 29,  105 => 24,  99 => 20,  93 => 19,  82 => 14,  75 => 9,  69 => 8,  59 => 5,  53 => 4,  39 => 3,  11 => 1,);
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

{% block title %} Axes  {{ parent() }} {% endblock %}
 {% block pagestyle %}
     <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/plugins/datatables/dataTables.bootstrap.css')) }}\">
 {% endblock %}

{% block contentheader %}
    <h1>
        Axes
        <small>Liste des axes</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('nb_main_homepage') }}\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Axes</li>
    </ol>
{% endblock %}

{% block content %}
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Axes ({{ list|length }})</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div class=\" pull-right\">
                    <a href=\"{{ path('nb_main_ajouter_axes') }}\" class=\"btn btn-app\">
                        <i class=\"fa fa-plus\"></i> Nouvel axes
                    </a>
                </div><br>
                <table id=\"company\" class=\"table table-bordered table-striped\">
                    <thead>
                    <tr>
                        <th>

                        </th>
                        <th>
                            Axes
                        </th>
                        <th>Type</th>
                        <th>
                            Distance
                        </th>

                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>

                    {% for key, val in list %}
                        <tr>
                            <td width=\"60\"><img src=\"{{ absolute_url(asset('assets/images/uploads/compagnies/photo/'~val.photo)) }}\" width=\"40\" height=\"40\" alt=\"\"/></td>
                            <td><b>{{ val.nom }}</b></td>
                            <td width=\"50\">
                                {% if val.type == 0 %}
                                    <span class=\"badge bg-blue\">Internationale</span>
                                {% else %}
                                    <span class=\"badge bg-green\">Nationale</span>
                                {% endif %}
                            </td>
                            <td><b>{{ val.distance }} km</b></td>

                            <td>
                                <div class=\"text-center\">
                                    <a href=\"{{ path('nb_main_modifier_axes', {'id': val.id}) }}\" class=\"btn btn-social-icon btn-bitbucket\"><i class=\"fa fa-edit\"></i></a>
                                    <a href=\"{{ path('nb_main_supprimer_compagnie', {'id': val.id}) }}\"  onclick=\" return confirm('Voulez vous vraiment cette ligne ?')\" class=\"btn btn-social-icon btn-google\"><i class=\"fa fa-times\"></i></a>

                                </div>
                            </td>
                        </tr>

                    {% endfor %}
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>

                        </th>
                        <th>
                            Axes
                        </th>
                        <th>Type</th>
                        <th>
                            Distance
                        </th>
                        <th>Options</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>

    {% endblock %}

    {% block pagescript %}
        <!-- DataTables -->
        <script src=\"{{ absolute_url(asset('assets/plugins/datatables/jquery.dataTables.min.js')) }}\"></script>
        <script src=\"{{ absolute_url(asset('assets/plugins/datatables/dataTables.bootstrap.min.js')) }}\"></script>
    {% endblock %}


    {% block script %}
    <!-- page script -->
    <script>
        \$(function () {
            \$(\"#example1\").DataTable();
            \$('#company').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": true,
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false
            });
        });
    </script>

{% endblock %}", "NBMainBundle:Axes:list.html.twig", "/var/www/html/ad/src/NB/MainBundle/Resources/views/Axes/list.html.twig");
    }
}
