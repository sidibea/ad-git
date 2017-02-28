<?php

/* NBMainBundle:Villes:list.html.twig */
class __TwigTemplate_b5f63c2f6dd114459fd26a40339dcbfdbc9c0644a11fc87034dd36472c7b6150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle:Villes:list.html.twig", 1);
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
        $__internal_643baaa4e5018442d986f125bf6b8a42cdab3c505940ff00243d50c59a755db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643baaa4e5018442d986f125bf6b8a42cdab3c505940ff00243d50c59a755db5->enter($__internal_643baaa4e5018442d986f125bf6b8a42cdab3c505940ff00243d50c59a755db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle:Villes:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_643baaa4e5018442d986f125bf6b8a42cdab3c505940ff00243d50c59a755db5->leave($__internal_643baaa4e5018442d986f125bf6b8a42cdab3c505940ff00243d50c59a755db5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af16576d832a339fea970170a320881757195756d677fffaf102507993688b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af16576d832a339fea970170a320881757195756d677fffaf102507993688b79->enter($__internal_af16576d832a339fea970170a320881757195756d677fffaf102507993688b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Villes  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_af16576d832a339fea970170a320881757195756d677fffaf102507993688b79->leave($__internal_af16576d832a339fea970170a320881757195756d677fffaf102507993688b79_prof);

    }

    // line 4
    public function block_pagestyle($context, array $blocks = array())
    {
        $__internal_f2f719a41a38af2135bee6f0bf59318caf86f94cc4e0ee6de2cbe349cf45ddc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f719a41a38af2135bee6f0bf59318caf86f94cc4e0ee6de2cbe349cf45ddc2->enter($__internal_f2f719a41a38af2135bee6f0bf59318caf86f94cc4e0ee6de2cbe349cf45ddc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagestyle"));

        // line 5
        echo "     <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.css")), "html", null, true);
        echo "\">
 ";
        
        $__internal_f2f719a41a38af2135bee6f0bf59318caf86f94cc4e0ee6de2cbe349cf45ddc2->leave($__internal_f2f719a41a38af2135bee6f0bf59318caf86f94cc4e0ee6de2cbe349cf45ddc2_prof);

    }

    // line 8
    public function block_contentheader($context, array $blocks = array())
    {
        $__internal_4d2b27901f5f1baf22731982b4ade43dbfd96459bcf175b09f100b1f469806bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2b27901f5f1baf22731982b4ade43dbfd96459bcf175b09f100b1f469806bd->enter($__internal_4d2b27901f5f1baf22731982b4ade43dbfd96459bcf175b09f100b1f469806bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        // line 9
        echo "    <h1>
        Axes
        <small>Liste des Villes</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Villes</li>
    </ol>
";
        
        $__internal_4d2b27901f5f1baf22731982b4ade43dbfd96459bcf175b09f100b1f469806bd->leave($__internal_4d2b27901f5f1baf22731982b4ade43dbfd96459bcf175b09f100b1f469806bd_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_c967f754d7fbf9653ee217ddd173c06b661ac6c36358d38bc531c1b700df663a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c967f754d7fbf9653ee217ddd173c06b661ac6c36358d38bc531c1b700df663a->enter($__internal_c967f754d7fbf9653ee217ddd173c06b661ac6c36358d38bc531c1b700df663a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Villes (";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["list"] ?? $this->getContext($context, "list"))), "html", null, true);
        echo ")</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div class=\" pull-right\">
                    <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_ajouter_des_villes");
        echo "\" class=\"btn btn-app\">
                        <i class=\"fa fa-plus\"></i> Nouvelle ville
                    </a>
                </div><br>
                <table id=\"company\" class=\"table table-bordered table-striped\">
                    <thead>
                    <tr>
                        <th>

                        </th>
                        <th>
                            Nom
                        </th>

                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>

                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 49
            echo "                        <tr>
                            <td width=\"60\"><img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/images/uploads/compagnies/photo/" . $this->getAttribute($context["val"], "photo", array())))), "html", null, true);
            echo "\" width=\"40\" height=\"40\" alt=\"\"/></td>
                            <td><b>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "nom", array()), "html", null, true);
            echo "</b></td>

                            <td>
                                <div class=\"text-center\">
                                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_modifier_villes", array("id" => $this->getAttribute($context["val"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-social-icon btn-bitbucket\"><i class=\"fa fa-edit\"></i></a>
                                    <a href=\"\"  onclick=\" return confirm('Voulez vous vraiment cette ligne ?')\" class=\"btn btn-social-icon btn-google\"><i class=\"fa fa-times\"></i></a>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <th>

                        </th>
                        <th>
                            Nom
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
        
        $__internal_c967f754d7fbf9653ee217ddd173c06b661ac6c36358d38bc531c1b700df663a->leave($__internal_c967f754d7fbf9653ee217ddd173c06b661ac6c36358d38bc531c1b700df663a_prof);

    }

    // line 82
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_88c6daef9b746ddad9b64c92629e7cf6642e151f94e8477d92d56e0553a00e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c6daef9b746ddad9b64c92629e7cf6642e151f94e8477d92d56e0553a00e42->enter($__internal_88c6daef9b746ddad9b64c92629e7cf6642e151f94e8477d92d56e0553a00e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        // line 83
        echo "        <!-- DataTables -->
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.min.js")), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_88c6daef9b746ddad9b64c92629e7cf6642e151f94e8477d92d56e0553a00e42->leave($__internal_88c6daef9b746ddad9b64c92629e7cf6642e151f94e8477d92d56e0553a00e42_prof);

    }

    // line 89
    public function block_script($context, array $blocks = array())
    {
        $__internal_f0fe3502db46ce9fc35642edecac14514b01a6da80d12585b2f0c9eac58575ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fe3502db46ce9fc35642edecac14514b01a6da80d12585b2f0c9eac58575ba->enter($__internal_f0fe3502db46ce9fc35642edecac14514b01a6da80d12585b2f0c9eac58575ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 90
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
        
        $__internal_f0fe3502db46ce9fc35642edecac14514b01a6da80d12585b2f0c9eac58575ba->leave($__internal_f0fe3502db46ce9fc35642edecac14514b01a6da80d12585b2f0c9eac58575ba_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle:Villes:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 90,  213 => 89,  204 => 85,  200 => 84,  197 => 83,  191 => 82,  165 => 61,  153 => 55,  146 => 51,  142 => 50,  139 => 49,  135 => 48,  113 => 29,  105 => 24,  99 => 20,  93 => 19,  82 => 14,  75 => 9,  69 => 8,  59 => 5,  53 => 4,  39 => 3,  11 => 1,);
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

{% block title %} Villes  {{ parent() }} {% endblock %}
 {% block pagestyle %}
     <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/plugins/datatables/dataTables.bootstrap.css')) }}\">
 {% endblock %}

{% block contentheader %}
    <h1>
        Axes
        <small>Liste des Villes</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('nb_main_homepage') }}\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Villes</li>
    </ol>
{% endblock %}

{% block content %}
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Villes ({{ list|length }})</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div class=\" pull-right\">
                    <a href=\"{{ path('nb_main_ajouter_des_villes') }}\" class=\"btn btn-app\">
                        <i class=\"fa fa-plus\"></i> Nouvelle ville
                    </a>
                </div><br>
                <table id=\"company\" class=\"table table-bordered table-striped\">
                    <thead>
                    <tr>
                        <th>

                        </th>
                        <th>
                            Nom
                        </th>

                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>

                    {% for key, val in list %}
                        <tr>
                            <td width=\"60\"><img src=\"{{ absolute_url(asset('assets/images/uploads/compagnies/photo/'~val.photo)) }}\" width=\"40\" height=\"40\" alt=\"\"/></td>
                            <td><b>{{ val.nom }}</b></td>

                            <td>
                                <div class=\"text-center\">
                                    <a href=\"{{ path('nb_main_modifier_villes', {'id': val.id}) }}\" class=\"btn btn-social-icon btn-bitbucket\"><i class=\"fa fa-edit\"></i></a>
                                    <a href=\"\"  onclick=\" return confirm('Voulez vous vraiment cette ligne ?')\" class=\"btn btn-social-icon btn-google\"><i class=\"fa fa-times\"></i></a>
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
                            Nom
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

{% endblock %}", "NBMainBundle:Villes:list.html.twig", "/var/www/html/ad/src/NB/MainBundle/Resources/views/Villes/list.html.twig");
    }
}
