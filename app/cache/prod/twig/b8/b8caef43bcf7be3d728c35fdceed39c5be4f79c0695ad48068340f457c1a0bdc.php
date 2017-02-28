<?php

/* NBMainBundle:Compagnie:list.html.twig */
class __TwigTemplate_f170acc061569e2b3f32f464950c00828012782f93db5f51425e4229dfbd1333 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Compagnie  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 4
    public function block_pagestyle($context, array $blocks = array())
    {
        // line 5
        echo "     <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.css")), "html", null, true);
        echo "\">
 ";
    }

    // line 8
    public function block_contentheader($context, array $blocks = array())
    {
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
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Compagnie de Transport (";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : null)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
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
    }

    // line 87
    public function block_pagescript($context, array $blocks = array())
    {
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
    }

    // line 94
    public function block_script($context, array $blocks = array())
    {
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
        return array (  203 => 95,  200 => 94,  194 => 90,  190 => 89,  187 => 88,  184 => 87,  162 => 67,  148 => 59,  144 => 58,  140 => 57,  134 => 54,  130 => 53,  126 => 52,  122 => 51,  118 => 50,  114 => 49,  111 => 48,  107 => 47,  86 => 29,  78 => 24,  72 => 20,  69 => 19,  61 => 14,  54 => 9,  51 => 8,  44 => 5,  41 => 4,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NBMainBundle:Compagnie:list.html.twig", "/var/www/html/ad/src/NB/MainBundle/Resources/views/Compagnie/list.html.twig");
    }
}
