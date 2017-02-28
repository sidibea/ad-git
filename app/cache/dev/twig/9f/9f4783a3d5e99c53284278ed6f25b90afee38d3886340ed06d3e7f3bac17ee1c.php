<?php

/* NBMainBundle:Compagnie:users.html.twig */
class __TwigTemplate_b1c9ae7f92271cad68454edb416417c6cc77a2003de1638e8e283446a34bd125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle:Compagnie:users.html.twig", 1);
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
        $__internal_1684adc1829b8671ec8889b692c7957ef8b040bc863f380a4089718ddf8fcf65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1684adc1829b8671ec8889b692c7957ef8b040bc863f380a4089718ddf8fcf65->enter($__internal_1684adc1829b8671ec8889b692c7957ef8b040bc863f380a4089718ddf8fcf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle:Compagnie:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1684adc1829b8671ec8889b692c7957ef8b040bc863f380a4089718ddf8fcf65->leave($__internal_1684adc1829b8671ec8889b692c7957ef8b040bc863f380a4089718ddf8fcf65_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_660c92df8d3af32146fa32e18163e5891e662985a06ff52946226e1f70e02e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660c92df8d3af32146fa32e18163e5891e662985a06ff52946226e1f70e02e5b->enter($__internal_660c92df8d3af32146fa32e18163e5891e662985a06ff52946226e1f70e02e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Compagnie  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_660c92df8d3af32146fa32e18163e5891e662985a06ff52946226e1f70e02e5b->leave($__internal_660c92df8d3af32146fa32e18163e5891e662985a06ff52946226e1f70e02e5b_prof);

    }

    // line 4
    public function block_pagestyle($context, array $blocks = array())
    {
        $__internal_c6cb08714d8e199321f2d19b5249277ce222aa8717b81824712ea1538ddd4e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6cb08714d8e199321f2d19b5249277ce222aa8717b81824712ea1538ddd4e9b->enter($__internal_c6cb08714d8e199321f2d19b5249277ce222aa8717b81824712ea1538ddd4e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagestyle"));

        // line 5
        echo "     <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.css")), "html", null, true);
        echo "\">
 ";
        
        $__internal_c6cb08714d8e199321f2d19b5249277ce222aa8717b81824712ea1538ddd4e9b->leave($__internal_c6cb08714d8e199321f2d19b5249277ce222aa8717b81824712ea1538ddd4e9b_prof);

    }

    // line 8
    public function block_contentheader($context, array $blocks = array())
    {
        $__internal_e3f60981da67fe1ec7349b3b3dc95feb8debceec9815381d893fc5bb30d89a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f60981da67fe1ec7349b3b3dc95feb8debceec9815381d893fc5bb30d89a68->enter($__internal_e3f60981da67fe1ec7349b3b3dc95feb8debceec9815381d893fc5bb30d89a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        // line 9
        echo "    <h1>
        Compagnies de Transport
        <small>Liste des utilisateurs</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Compagnie</li>
    </ol>
";
        
        $__internal_e3f60981da67fe1ec7349b3b3dc95feb8debceec9815381d893fc5bb30d89a68->leave($__internal_e3f60981da67fe1ec7349b3b3dc95feb8debceec9815381d893fc5bb30d89a68_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_66a918e0e9f033603900ac257eec7053ee78761da41d1d519f4b3f9a6ba81132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a918e0e9f033603900ac257eec7053ee78761da41d1d519f4b3f9a6ba81132->enter($__internal_66a918e0e9f033603900ac257eec7053ee78761da41d1d519f4b3f9a6ba81132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Utilisateurs de ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compagnie"]) ? $context["compagnie"] : $this->getContext($context, "compagnie")), "nom", array()), "html", null, true);
        echo " </h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div class=\" pull-right\">
                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_ajouter_compagnie_utilisateur", array("compagnie_id" => $this->getAttribute((isset($context["compagnie"]) ? $context["compagnie"] : $this->getContext($context, "compagnie")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-app\">
                        <i class=\"fa fa-plus\"></i> Ajouter utilisateur
                    </a>
                </div><br>
                <table id=\"company\" class=\"table table-bordered table-striped\">
                    <thead>
                    <tr>
                        <th>
                            Nom
                        </th>
                        <th>
                            Prenom
                        </th>
                        <th>
                            Email/Nom d'utilisateur
                        </th>
                        <th>
                            Derniere connexion
                        </th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>

                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["compagnie"]) ? $context["compagnie"] : $this->getContext($context, "compagnie")), "users", array()));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 54
            echo "                        <tr>
                            <td><b>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "nom", array()), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "prenom", array()), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "email", array()), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "lastLogin", array()), "d M Y h:i:s"), "html", null, true);
            echo "</b></td>
                            <td>

                            </td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <th>
                            Nom
                        </th>
                        <th>
                            Prenom
                        </th>
                        <th>
                            Email/Nom d'utilisateur
                        </th>
                        <th>
                            Derniere connexion
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
        
        $__internal_66a918e0e9f033603900ac257eec7053ee78761da41d1d519f4b3f9a6ba81132->leave($__internal_66a918e0e9f033603900ac257eec7053ee78761da41d1d519f4b3f9a6ba81132_prof);

    }

    // line 91
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_8dc9156014b48c141d57e99d604a3cc473dea8afe9da694a9aafd3e634e19992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc9156014b48c141d57e99d604a3cc473dea8afe9da694a9aafd3e634e19992->enter($__internal_8dc9156014b48c141d57e99d604a3cc473dea8afe9da694a9aafd3e634e19992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        // line 92
        echo "        <!-- DataTables -->
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.min.js")), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_8dc9156014b48c141d57e99d604a3cc473dea8afe9da694a9aafd3e634e19992->leave($__internal_8dc9156014b48c141d57e99d604a3cc473dea8afe9da694a9aafd3e634e19992_prof);

    }

    // line 98
    public function block_script($context, array $blocks = array())
    {
        $__internal_8cacf568360c276aad2a868b7f6140d725bc84e7e062ecdb8d44a87708bb0dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cacf568360c276aad2a868b7f6140d725bc84e7e062ecdb8d44a87708bb0dec->enter($__internal_8cacf568360c276aad2a868b7f6140d725bc84e7e062ecdb8d44a87708bb0dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 99
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
        
        $__internal_8cacf568360c276aad2a868b7f6140d725bc84e7e062ecdb8d44a87708bb0dec->leave($__internal_8cacf568360c276aad2a868b7f6140d725bc84e7e062ecdb8d44a87708bb0dec_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle:Compagnie:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 99,  225 => 98,  216 => 94,  212 => 93,  209 => 92,  203 => 91,  172 => 65,  159 => 58,  155 => 57,  151 => 56,  147 => 55,  144 => 54,  140 => 53,  113 => 29,  105 => 24,  99 => 20,  93 => 19,  82 => 14,  75 => 9,  69 => 8,  59 => 5,  53 => 4,  39 => 3,  11 => 1,);
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
        <small>Liste des utilisateurs</small>
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
                <h3 class=\"box-title\">Utilisateurs de {{ compagnie.nom }} </h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div class=\" pull-right\">
                    <a href=\"{{ path('nb_main_ajouter_compagnie_utilisateur', {'compagnie_id': compagnie.id}) }}\" class=\"btn btn-app\">
                        <i class=\"fa fa-plus\"></i> Ajouter utilisateur
                    </a>
                </div><br>
                <table id=\"company\" class=\"table table-bordered table-striped\">
                    <thead>
                    <tr>
                        <th>
                            Nom
                        </th>
                        <th>
                            Prenom
                        </th>
                        <th>
                            Email/Nom d'utilisateur
                        </th>
                        <th>
                            Derniere connexion
                        </th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>

                    {% for key, val in compagnie.users %}
                        <tr>
                            <td><b>{{ val.nom }}</b></td>
                            <td><b>{{ val.prenom }}</b></td>
                            <td><b>{{ val.email }}</b></td>
                            <td><b>{{ val.lastLogin | date('d M Y h:i:s') }}</b></td>
                            <td>

                            </td>
                        </tr>

                    {% endfor %}
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>
                            Nom
                        </th>
                        <th>
                            Prenom
                        </th>
                        <th>
                            Email/Nom d'utilisateur
                        </th>
                        <th>
                            Derniere connexion
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

{% endblock %}", "NBMainBundle:Compagnie:users.html.twig", "/var/www/html/ad/src/NB/MainBundle/Resources/views/Compagnie/users.html.twig");
    }
}
