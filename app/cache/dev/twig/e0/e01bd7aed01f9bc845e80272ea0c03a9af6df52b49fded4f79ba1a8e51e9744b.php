<?php

/* NBMainBundle:Compagnie:list.html.twig */
class __TwigTemplate_4bbc1138e99dda69c14596bd0d7c09da5f5c143c09b03ec8610c95ff2cf805ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle:Compagnie:list.html.twig", 1);
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
        $__internal_b44804d95c6f7b5c3b43d1c46cbdb2ba2f8adfb2092e87873919e84c96159b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44804d95c6f7b5c3b43d1c46cbdb2ba2f8adfb2092e87873919e84c96159b03->enter($__internal_b44804d95c6f7b5c3b43d1c46cbdb2ba2f8adfb2092e87873919e84c96159b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle:Compagnie:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b44804d95c6f7b5c3b43d1c46cbdb2ba2f8adfb2092e87873919e84c96159b03->leave($__internal_b44804d95c6f7b5c3b43d1c46cbdb2ba2f8adfb2092e87873919e84c96159b03_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fd3c278b77bcbda4d4252eff762be3347bb45e51d5fcfd3f09ef10cd71f9480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd3c278b77bcbda4d4252eff762be3347bb45e51d5fcfd3f09ef10cd71f9480->enter($__internal_6fd3c278b77bcbda4d4252eff762be3347bb45e51d5fcfd3f09ef10cd71f9480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Compagnie  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_6fd3c278b77bcbda4d4252eff762be3347bb45e51d5fcfd3f09ef10cd71f9480->leave($__internal_6fd3c278b77bcbda4d4252eff762be3347bb45e51d5fcfd3f09ef10cd71f9480_prof);

    }

    // line 4
    public function block_pagestyle($context, array $blocks = array())
    {
        $__internal_4ca4ed7ce25a4529cadeea0ca19a684c4354058da3239be535a4227989cf41a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca4ed7ce25a4529cadeea0ca19a684c4354058da3239be535a4227989cf41a4->enter($__internal_4ca4ed7ce25a4529cadeea0ca19a684c4354058da3239be535a4227989cf41a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagestyle"));

        // line 5
        echo "     <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.css")), "html", null, true);
        echo "\">
 ";
        
        $__internal_4ca4ed7ce25a4529cadeea0ca19a684c4354058da3239be535a4227989cf41a4->leave($__internal_4ca4ed7ce25a4529cadeea0ca19a684c4354058da3239be535a4227989cf41a4_prof);

    }

    // line 8
    public function block_contentheader($context, array $blocks = array())
    {
        $__internal_b64abe4be3b2e2c374b15905b48e2af4a93c894ed053cf760047d6f5afcde526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64abe4be3b2e2c374b15905b48e2af4a93c894ed053cf760047d6f5afcde526->enter($__internal_b64abe4be3b2e2c374b15905b48e2af4a93c894ed053cf760047d6f5afcde526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        // line 9
        echo "    <h1>
        Compagnies de Transport
        <small>Liste des Compagnie</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Compagnie</li>
    </ol>
";
        
        $__internal_b64abe4be3b2e2c374b15905b48e2af4a93c894ed053cf760047d6f5afcde526->leave($__internal_b64abe4be3b2e2c374b15905b48e2af4a93c894ed053cf760047d6f5afcde526_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_d9b626f3d93c592ba0836c15506fc0a41b16eaba67976feb11f1d2af893f1e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b626f3d93c592ba0836c15506fc0a41b16eaba67976feb11f1d2af893f1e8d->enter($__internal_d9b626f3d93c592ba0836c15506fc0a41b16eaba67976feb11f1d2af893f1e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Compagnie de Transport (";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : $this->getContext($context, "list"))), "html", null, true);
        echo ")</h3>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <div class=\" pull-right\">
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_ajouter_compagnie");
        echo "\" class=\"btn btn-app\">
                            <i class=\"fa fa-plus\"></i> Nouvelle compagnie
                        </a>
                    </div><br>
                    <table id=\"company\" class=\"table table-bordered table-striped\">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Tel.</th>
                            <th>Email</th>
                            <th>Com.</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 48
            echo "                                <tr>
                                    <td width=\"100\"><img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/images/uploads/compagnies/logo/" . $this->getAttribute($context["val"], "logo", array())))), "html", null, true);
            echo "\" width=\"100\" height=\"80\" alt=\"\"/></td>
                                    <td >";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "nom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "adresse", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "telephone", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "email", array()), "html", null, true);
            echo "</td>
                                    <td width=\"10\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "commission", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <div class=\"text-center\">
                                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_modifier_compagnie", array("id" => $this->getAttribute($context["val"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-social-icon btn-bitbucket\"><i class=\"fa fa-edit\"></i></a>
                                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_supprimer_compagnie", array("id" => $this->getAttribute($context["val"], "id", array()))), "html", null, true);
            echo "\"  onclick=\" return confirm('Voulez vous vraiment cette ligne ?')\" class=\"btn btn-social-icon btn-google\"><i class=\"fa fa-times\"></i></a>
                                            <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_liste_utilisateur_compagnie", array("compagnie_id" => $this->getAttribute($context["val"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-social-icon btn-facebook\"><i class=\"fa fa-users\"></i></a>

                                        </div>

                                    </td>
                                </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Tel.</th>
                            <th>Email</th>
                            <th>Commission</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>

";
        
        $__internal_d9b626f3d93c592ba0836c15506fc0a41b16eaba67976feb11f1d2af893f1e8d->leave($__internal_d9b626f3d93c592ba0836c15506fc0a41b16eaba67976feb11f1d2af893f1e8d_prof);

    }

    // line 87
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_722b3bb374dd5f7c62704168a1c2f9bf746afbe0e33e461b7929df72f12c0510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722b3bb374dd5f7c62704168a1c2f9bf746afbe0e33e461b7929df72f12c0510->enter($__internal_722b3bb374dd5f7c62704168a1c2f9bf746afbe0e33e461b7929df72f12c0510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        // line 88
        echo "  <!-- DataTables -->
  <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js")), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.min.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_722b3bb374dd5f7c62704168a1c2f9bf746afbe0e33e461b7929df72f12c0510->leave($__internal_722b3bb374dd5f7c62704168a1c2f9bf746afbe0e33e461b7929df72f12c0510_prof);

    }

    // line 94
    public function block_script($context, array $blocks = array())
    {
        $__internal_6bf73e7830944cb8289dcd1394eeac770d1a01530df3b1ce1c184c617f119fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf73e7830944cb8289dcd1394eeac770d1a01530df3b1ce1c184c617f119fe3->enter($__internal_6bf73e7830944cb8289dcd1394eeac770d1a01530df3b1ce1c184c617f119fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 95
        echo "        <!-- page script -->
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
        
        $__internal_6bf73e7830944cb8289dcd1394eeac770d1a01530df3b1ce1c184c617f119fe3->leave($__internal_6bf73e7830944cb8289dcd1394eeac770d1a01530df3b1ce1c184c617f119fe3_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle:Compagnie:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 95,  236 => 94,  227 => 90,  223 => 89,  220 => 88,  214 => 87,  189 => 67,  175 => 59,  171 => 58,  167 => 57,  161 => 54,  157 => 53,  153 => 52,  149 => 51,  145 => 50,  141 => 49,  138 => 48,  134 => 47,  113 => 29,  105 => 24,  99 => 20,  93 => 19,  82 => 14,  75 => 9,  69 => 8,  59 => 5,  53 => 4,  39 => 3,  11 => 1,);
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

{% block title %} Compagnie  {{ parent() }} {% endblock %}
 {% block pagestyle %}
     <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/plugins/datatables/dataTables.bootstrap.css')) }}\">
 {% endblock %}

{% block contentheader %}
    <h1>
        Compagnies de Transport
        <small>Liste des Compagnie</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('nb_main_homepage') }}\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Compagnie</li>
    </ol>
{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Compagnie de Transport ({{ list|length }})</h3>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <div class=\" pull-right\">
                        <a href=\"{{ path('nb_main_ajouter_compagnie') }}\" class=\"btn btn-app\">
                            <i class=\"fa fa-plus\"></i> Nouvelle compagnie
                        </a>
                    </div><br>
                    <table id=\"company\" class=\"table table-bordered table-striped\">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Tel.</th>
                            <th>Email</th>
                            <th>Com.</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                            {% for key, val in list %}
                                <tr>
                                    <td width=\"100\"><img src=\"{{ absolute_url(asset('assets/images/uploads/compagnies/logo/'~val.logo)) }}\" width=\"100\" height=\"80\" alt=\"\"/></td>
                                    <td >{{ val.nom }}</td>
                                    <td>{{ val.adresse }}</td>
                                    <td>{{ val.telephone }}</td>
                                    <td>{{ val.email }}</td>
                                    <td width=\"10\">{{ val.commission }}</td>
                                    <td>
                                        <div class=\"text-center\">
                                            <a href=\"{{ path('nb_main_modifier_compagnie', {'id': val.id}) }}\" class=\"btn btn-social-icon btn-bitbucket\"><i class=\"fa fa-edit\"></i></a>
                                            <a href=\"{{ path('nb_main_supprimer_compagnie', {'id': val.id}) }}\"  onclick=\" return confirm('Voulez vous vraiment cette ligne ?')\" class=\"btn btn-social-icon btn-google\"><i class=\"fa fa-times\"></i></a>
                                            <a href=\"{{ path('nb_main_liste_utilisateur_compagnie', {'compagnie_id': val.id}) }}\" class=\"btn btn-social-icon btn-facebook\"><i class=\"fa fa-users\"></i></a>

                                        </div>

                                    </td>
                                </tr>

                            {% endfor %}
                        </tbody>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Tel.</th>
                            <th>Email</th>
                            <th>Commission</th>
                            <th></th>
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

{% endblock %}", "NBMainBundle:Compagnie:list.html.twig", "/var/www/html/ad/src/NB/MainBundle/Resources/views/Compagnie/list.html.twig");
    }
}
