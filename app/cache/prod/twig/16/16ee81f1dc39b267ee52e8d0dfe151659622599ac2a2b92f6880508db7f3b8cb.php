<?php

/* NBMainBundle:Seatseller:list.html.twig */
class __TwigTemplate_f51e5e8ac3a0543b38573670fb15a75b49969494952b0c2e4c0398222547f56f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle:Seatseller:list.html.twig", 1);
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
        echo " Seatseller  ";
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
        Axes
        <small>Liste des Seatsellers</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Seatsellers</li>
    </ol>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Seatseller (";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : null)), "html", null, true);
        echo ")</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <div class=\" pull-right\">
                    <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_ajouter_seatseller");
        echo "\" class=\"btn btn-app\">
                        <i class=\"fa fa-plus\"></i> Nouveau Seatseller
                    </a>
                </div><br>
                <table id=\"company\" class=\"table table-bordered table-striped\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Code</th>
                        <th>Imm.</th>
                        <th>Nom</th>
                        <th>Ville</th>
                        <th>Quartier</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 49
            echo "                        <tr>
                            <td width=\"10\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "</td>
                            <td><b>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "code", array()), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "numeroNina", array()), "html", null, true);
            echo "</b></td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["val"], "ville", array()), "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["val"], "quartier", array()), "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "contact", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "email", array()), "html", null, true);
            echo "</td>

                            <td>
                                <div class=\"text-center\">
                                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_modifier_seatseller", array("id" => $this->getAttribute($context["val"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-social-icon btn-bitbucket\"><i class=\"fa fa-edit\"></i></a>
                                    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_seatseller_solde_compte", array("seatseller_id" => $this->getAttribute($context["val"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-social-icon btn-flickr\"><i class=\"fa fa-money\"></i></a>
                                    <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_liste_utilisateur_seatseller", array("seatseller_id" => $this->getAttribute($context["val"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-social-icon btn-twitter\"><i class=\"fa fa-users\"></i></a>
                                    <a href=\"\"  onclick=\" return confirm('Voulez vous vraiment cette ligne ?')\" class=\"btn btn-social-icon btn-google\"><i class=\"fa fa-times\"></i></a>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Code</th>
                        <th>Imm.</th>
                        <th>Nom</th>
                        <th>Ville</th>
                        <th>Quartier</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Options</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>

    ";
    }

    // line 91
    public function block_pagescript($context, array $blocks = array())
    {
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
    }

    // line 98
    public function block_script($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "NBMainBundle:Seatseller:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 99,  212 => 98,  206 => 94,  202 => 93,  199 => 92,  196 => 91,  172 => 69,  160 => 63,  156 => 62,  152 => 61,  145 => 57,  141 => 56,  137 => 55,  133 => 54,  127 => 53,  123 => 52,  119 => 51,  115 => 50,  112 => 49,  108 => 48,  86 => 29,  78 => 24,  72 => 20,  69 => 19,  61 => 14,  54 => 9,  51 => 8,  44 => 5,  41 => 4,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NBMainBundle:Seatseller:list.html.twig", "/var/www/html/ad/src/NB/MainBundle/Resources/views/Seatseller/list.html.twig");
    }
}
