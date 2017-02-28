<?php

/* NBMainBundle:Compagnie:edit.html.twig */
class __TwigTemplate_64735bed9a5bc41b074c684757bf35f66bc68e675997d1c2d88a1454687c6d15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle:Compagnie:edit.html.twig", 1);
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
        echo "     <!-- iCheck for checkboxes and radio inputs -->
     <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/iCheck/all.css")), "html", null, true);
        echo "\">
 ";
    }

    // line 9
    public function block_contentheader($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>
        Compagnies de Transport
        <small>Modifier une Compagnie</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Compagnie</li>
    </ol>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Modifier une Compagnie</h3>
                </div>
                ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("id" => "", "class" => "form-horizontal")));
        echo "

                ";
        // line 30
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                <div class=\"box-body\">

                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-institution\"></i></span>
                                    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la compagnie")));
        echo "
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-bullhorn\"></i></span>
                                    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "slogan", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Slogan de la compagnie")));
        echo "
                                </div>
                            </div>
                            <!-- /.col -->
                        </div> <br>
                        <!-- /.row -->

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-phone\"></i></span>
                                    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero de telephone de la compagnie")));
        echo "
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-money\"></i></span>
                                    ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commission", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Commission offerte par la compagnie")));
        echo "
                                </div>
                            </div>
                            <!-- /.col -->
                        </div> <br>
                        <!-- /.row -->

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "3", "placeholder" => "Adresse de la compagnie")));
        echo "
                                </div>
                            </div>
                        </div><br>
                        <!-- /.row -->

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa  fa-gg\"></i></span>
                                    ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metatitre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Titre Meta de la compagnie")));
        echo "
                                </div>
                            </div>

                            <!-- /.col -->
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa  fa-commenting\"></i></span>
                                    ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metadescription", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description Meta de la compagnie")));
        echo "
                                </div>
                            </div>
                            <!-- /.col -->
                        </div> <br>
                        <!-- /.row -->
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-hand-pointer-o\"></i></span>
                                    ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "motCle", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mot cle pour la recherche de la compagnie")));
        echo "
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-envelope \"></i></span>
                                    ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse Email de la compagnie")));
        echo "
                                </div>
                            </div>
                            <!-- /.col -->

                        </div> <br>
                        <!-- /.row -->


                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse de la compagnie")));
        echo "
                                </div>
                            </div>
                        </div><br>
                        <!-- /.row -->

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label>Logo</label>
                                    ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "logo", array()), 'widget', array("attr" => array("class" => "file", "placeholder" => "")));
        echo "
                                </div>
                            </div>
                        </div><br>
                        <!-- /.row -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label>Activée ?</label>
                                    ";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isActive", array()), 'widget', array("attr" => array("class" => "minimal", "placeholder" => "")));
        echo "
                                </div>
                            </div>
                        </div><br>
                        <!-- /.row -->


                    </div>

                </div>
                <div class=\"box-footer\">
                    <button type=\"submit\" class=\"btn btn-info\">Enregistrer</button>

                    <a href=\"";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_liste_des_compagnie");
        echo "\" class=\"btn btn-default pull-right\">Annuler</a>
                </div>
                ";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

                ";
        // line 157
        echo "                ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
    }

    // line 164
    public function block_pagescript($context, array $blocks = array())
    {
        // line 165
        echo "    <!-- iCheck 1.0.1 -->
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/iCheck/icheck.min.js")), "html", null, true);
        echo "\"></script>
";
    }

    // line 170
    public function block_script($context, array $blocks = array())
    {
        // line 171
        echo "    <!-- page script -->
    <script>
        \$(function () {
            //iCheck for checkbox and radio inputs
            \$('input[type=\"checkbox\"].minimal, input[type=\"radio\"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "NBMainBundle:Compagnie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 171,  282 => 170,  276 => 166,  273 => 165,  270 => 164,  259 => 157,  254 => 154,  249 => 152,  233 => 139,  221 => 130,  208 => 120,  193 => 108,  183 => 101,  170 => 91,  159 => 83,  146 => 73,  133 => 63,  123 => 56,  109 => 45,  99 => 38,  87 => 30,  82 => 27,  74 => 21,  71 => 20,  63 => 15,  56 => 10,  53 => 9,  47 => 6,  44 => 5,  41 => 4,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NBMainBundle:Compagnie:edit.html.twig", "/var/www/html/ad/src/NB/MainBundle/Resources/views/Compagnie/edit.html.twig");
    }
}
