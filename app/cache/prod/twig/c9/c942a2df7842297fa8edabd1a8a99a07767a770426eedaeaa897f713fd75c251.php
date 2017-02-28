<?php

/* include/sideboar.html.twig */
class __TwigTemplate_8f2a8a992b25896822a018c04c4215b8a5b41695d45ae2fbf2e26415f24785af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Sidebar user panel -->
<div class=\"user-panel\">
    <div class=\"pull-left image\">
        <img src=\"../../dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
    </div>
    <div class=\"pull-left info\">
        <p>Next Group</p>
        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> En ligne</a>
    </div>
</div>

<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class=\"sidebar-menu\">
    <li class=\"header\">MENU PRINCIPAL</li>
    <li class=\"treeview\">
        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\">
            <i class=\"fa fa-dashboard\"></i> <span>Tableau de Bord</span>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_liste_des_compagnie");
        echo "\">
            <i class=\"fa fa-institution\"></i>
            <span>Compagnie de Transport</span>
        </a>

    </li>
    <li>
        <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_liste_seatseller");
        echo "\">
            <i class=\"fa fa-th\"></i> <span>Seatseller</span>
        </a>
    </li>
    <li>
        <a href=\"#\">
            <i class=\"fa fa-th\"></i> <span>Axes</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
        </a>
        <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_liste_des_axes");
        echo "\"><i class=\"fa fa-circle-o\"></i> Axes</a></li>
            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_liste_des_villes");
        echo "\"><i class=\"fa fa-circle-o\"></i> Villes</a></li>
        </ul>
    </li>
    <li class=\"treeview\">
        <a href=\"#\">
            <i class=\"fa fa-pie-chart\"></i>
            <span>Voyages</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
            <!--<span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>-->
        </a>
        <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_liste_des_voyages");
        echo "\"><i class=\"fa fa-circle-o\">Voyages</i></a></li>
            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_liste_des_point_embarquement");
        echo "\"><i class=\"fa fa-circle-o\">Points d'embarquement</i></a></li>

        </ul>
       <!-- <ul class=\"treeview-menu\">
            <li><a href=\"../charts/chartjs.html\"><i class=\"fa fa-circle-o\"></i> ChartJS</a></li>
            <li><a href=\"../charts/morris.html\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
            <li><a href=\"../charts/flot.html\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
            <li><a href=\"../charts/inline.html\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
        </ul>-->
    </li>
    <li class=\"treeview\">
        <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_liste_gestion_des_promotions");
        echo "\">
            <i class=\"fa fa-laptop\"></i>
            <span>Gestion des promotions</span>
        </a>
       <!-- <ul class=\"treeview-menu\">
            <li><a href=\"../UI/general.html\"><i class=\"fa fa-circle-o\"></i> General</a></li>
            <li><a href=\"../UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
            <li><a href=\"../UI/buttons.html\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
            <li><a href=\"../UI/sliders.html\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
            <li><a href=\"../UI/timeline.html\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
            <li><a href=\"../UI/modals.html\"><i class=\"fa fa-circle-o\"></i> Modals</a></li>
        </ul>-->
    </li>
    <li class=\"treeview\">
        <a href=\"#\">
            <i class=\"fa fa-edit\"></i> <span>Gestion de contenu</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
        </a>
        <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_termes_et_conditions");
        echo "\"><i class=\"fa fa-circle-o\"></i> Termes et conditions</a></li>
            <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_confidentialite");
        echo "\"><i class=\"fa fa-circle-o\"></i> Politique de confidentialité</a></li>
            <li><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_blog");
        echo "\"><i class=\"fa fa-circle-o\"></i>Blog</a></li>
            <li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_professionel");
        echo "\"><i class=\"fa fa-circle-o\"></i>Professionel</a></li>
            <li><a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_modification_voyage");
        echo "\"><i class=\"fa fa-circle-o\"></i>Modification voyage</a></li>
            <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_annulation_voyage");
        echo "\"><i class=\"fa fa-circle-o\"></i>Annulation voyage</a></li>
        </ul>
    </li>
    <li class=\"treeview\">
        <a href=\"#\">
            <i class=\"fa fa-table\"></i> <span>Gestion Newsletter</span>
        </a>
        <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_liste_gestion_newsletter");
        echo "\"></a></li>
        </ul>
       <!-- <ul class=\"treeview-menu\">
            <li><a href=\"../tables/simple.html\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
            <li><a href=\"../tables/data.html\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
        </ul>-->
    </li>
    <li class=\"treeview\">
        <a href=\"#\">
            <i class=\"fa fa-edit\"></i> <span>Statistiques</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
        </a>
        <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_termes_et_conditions");
        echo "\"><i class=\"fa fa-circle-o\"></i> Termes et conditions</a></li>
            <li><a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_confidentialite");
        echo "\"><i class=\"fa fa-circle-o\"></i> Politique de confidentialité</a></li>
            <li><a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_blog");
        echo "\"><i class=\"fa fa-circle-o\"></i>Blog</a></li>
            <li><a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_professionel");
        echo "\"><i class=\"fa fa-circle-o\"></i>Professionel</a></li>
            <li><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_modification_voyage");
        echo "\"><i class=\"fa fa-circle-o\"></i>Modification voyage</a></li>
            <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_annulation_voyage");
        echo "\"><i class=\"fa fa-circle-o\"></i>Annulation voyage</a></li>
        </ul>
    </li>
   <!-- <li>
        <a href=\"../calendar.html\">
            <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
            <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-red\">3</small>
              <small class=\"label pull-right bg-blue\">17</small>
            </span>
        </a>
    </li>
    <li>
        <a href=\"../mailbox/mailbox.html\">
            <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
            <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-yellow\">12</small>
              <small class=\"label pull-right bg-green\">16</small>
              <small class=\"label pull-right bg-red\">5</small>
            </span>
        </a>
    </li>
    <li class=\"treeview active\">
        <a href=\"#\">
            <i class=\"fa fa-folder\"></i> <span>Examples</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
        </a>
        <ul class=\"treeview-menu\">
            <li><a href=\"invoice.html\"><i class=\"fa fa-circle-o\"></i> Invoice</a></li>
            <li><a href=\"profile.html\"><i class=\"fa fa-circle-o\"></i> Profile</a></li>
            <li><a href=\"login.html\"><i class=\"fa fa-circle-o\"></i> Login</a></li>
            <li><a href=\"register.html\"><i class=\"fa fa-circle-o\"></i> Register</a></li>
            <li><a href=\"lockscreen.html\"><i class=\"fa fa-circle-o\"></i> Lockscreen</a></li>
            <li><a href=\"404.html\"><i class=\"fa fa-circle-o\"></i> 404 Error</a></li>
            <li><a href=\"500.html\"><i class=\"fa fa-circle-o\"></i> 500 Error</a></li>
            <li class=\"active\"><a href=\"blank.html\"><i class=\"fa fa-circle-o\"></i> Blank Page</a></li>
            <li><a href=\"pace.html\"><i class=\"fa fa-circle-o\"></i> Pace Page</a></li>
        </ul>
    </li>
    <li class=\"treeview\">
        <a href=\"#\">
            <i class=\"fa fa-share\"></i> <span>Multilevel</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
        </a>
        <ul class=\"treeview-menu\">
            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
            <li>
                <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One
                    <span class=\"pull-right-container\">
                  <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two</a></li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two
                            <span class=\"pull-right-container\">
                      <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
        </ul>
    </li>
    <li><a href=\"../../documentation/index.html\"><i class=\"fa fa-book\"></i> <span>Documentation</span></a></li>
    <li class=\"header\">LABELS</li>
    <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
    <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
    <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>-->
</ul>";
    }

    public function getTemplateName()
    {
        return "include/sideboar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 122,  198 => 121,  194 => 120,  190 => 119,  186 => 118,  182 => 117,  164 => 102,  153 => 94,  149 => 93,  145 => 92,  141 => 91,  137 => 90,  133 => 89,  109 => 68,  95 => 57,  91 => 56,  73 => 41,  69 => 40,  54 => 28,  44 => 21,  36 => 16,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "include/sideboar.html.twig", "/var/www/html/ad/app/Resources/views/include/sideboar.html.twig");
    }
}
