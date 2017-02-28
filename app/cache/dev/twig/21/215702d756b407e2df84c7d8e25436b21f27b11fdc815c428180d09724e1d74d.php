<?php

/* NBMainBundle:Compagnie:add.html.twig */
class __TwigTemplate_b954f9bf4384f39ce7c2bb8a703da7fdfda14bfe7b2014b9221de9c417d44026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle:Compagnie:add.html.twig", 1);
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
        $__internal_7919cc5eab5a95349af67df357c7acd4b9a179e09add2316b55be990741720c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7919cc5eab5a95349af67df357c7acd4b9a179e09add2316b55be990741720c9->enter($__internal_7919cc5eab5a95349af67df357c7acd4b9a179e09add2316b55be990741720c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle:Compagnie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7919cc5eab5a95349af67df357c7acd4b9a179e09add2316b55be990741720c9->leave($__internal_7919cc5eab5a95349af67df357c7acd4b9a179e09add2316b55be990741720c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff36450952853a67573db34a0c3a49b778712de1b66a23d99d069d072ea67c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff36450952853a67573db34a0c3a49b778712de1b66a23d99d069d072ea67c56->enter($__internal_ff36450952853a67573db34a0c3a49b778712de1b66a23d99d069d072ea67c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Compagnie  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_ff36450952853a67573db34a0c3a49b778712de1b66a23d99d069d072ea67c56->leave($__internal_ff36450952853a67573db34a0c3a49b778712de1b66a23d99d069d072ea67c56_prof);

    }

    // line 4
    public function block_pagestyle($context, array $blocks = array())
    {
        $__internal_5ae2542e8f8443de22412e0b437bed2b0eada03d11a53cad2cbe9e83ad999806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae2542e8f8443de22412e0b437bed2b0eada03d11a53cad2cbe9e83ad999806->enter($__internal_5ae2542e8f8443de22412e0b437bed2b0eada03d11a53cad2cbe9e83ad999806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagestyle"));

        // line 5
        echo "     <!-- iCheck for checkboxes and radio inputs -->
     <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/iCheck/all.css")), "html", null, true);
        echo "\">
 ";
        
        $__internal_5ae2542e8f8443de22412e0b437bed2b0eada03d11a53cad2cbe9e83ad999806->leave($__internal_5ae2542e8f8443de22412e0b437bed2b0eada03d11a53cad2cbe9e83ad999806_prof);

    }

    // line 9
    public function block_contentheader($context, array $blocks = array())
    {
        $__internal_6ef79a5af963dae59cd8717bd52c7e7e29c3aba436255ca553457ba27998b8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef79a5af963dae59cd8717bd52c7e7e29c3aba436255ca553457ba27998b8ae->enter($__internal_6ef79a5af963dae59cd8717bd52c7e7e29c3aba436255ca553457ba27998b8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        // line 10
        echo "    <h1>
        Compagnies de Transport
        <small>Ajouter une Compagnie</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Compagnie</li>
    </ol>
";
        
        $__internal_6ef79a5af963dae59cd8717bd52c7e7e29c3aba436255ca553457ba27998b8ae->leave($__internal_6ef79a5af963dae59cd8717bd52c7e7e29c3aba436255ca553457ba27998b8ae_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_116273f976574b4bf7bbaf9c0b078c7738b5128b66cf2a87b7fcb2f2ac49df8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116273f976574b4bf7bbaf9c0b078c7738b5128b66cf2a87b7fcb2f2ac49df8f->enter($__internal_116273f976574b4bf7bbaf9c0b078c7738b5128b66cf2a87b7fcb2f2ac49df8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Nouvelle Compagnie</h3>
                </div>
                ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "", "class" => "form-horizontal")));
        echo "

                ";
        // line 30
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <div class=\"box-body\">

                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-institution\"></i></span>
                                    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la compagnie")));
        echo "
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-bullhorn\"></i></span>
                                    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "slogan", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Slogan de la compagnie")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero de telephone de la compagnie")));
        echo "
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-money\"></i></span>
                                    ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commission", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Commission offerte par la compagnie")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "3", "placeholder" => "Adresse de la compagnie")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metatitre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Titre Meta de la compagnie")));
        echo "
                                </div>
                            </div>

                            <!-- /.col -->
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa  fa-commenting\"></i></span>
                                    ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metadescription", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description Meta de la compagnie")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motCle", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mot cle pour la recherche de la compagnie")));
        echo "
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-envelope \"></i></span>
                                    ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse Email de la compagnie")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse de la compagnie")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo", array()), 'widget', array("attr" => array("class" => "file", "placeholder" => "")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget', array("attr" => array("class" => "minimal", "placeholder" => "")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                ";
        // line 157
        echo "                ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_116273f976574b4bf7bbaf9c0b078c7738b5128b66cf2a87b7fcb2f2ac49df8f->leave($__internal_116273f976574b4bf7bbaf9c0b078c7738b5128b66cf2a87b7fcb2f2ac49df8f_prof);

    }

    // line 164
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_f21bacdd3b4ec5a8b1405ea440e08d8b9e76cc866c922ce5a36474f852bb8c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21bacdd3b4ec5a8b1405ea440e08d8b9e76cc866c922ce5a36474f852bb8c24->enter($__internal_f21bacdd3b4ec5a8b1405ea440e08d8b9e76cc866c922ce5a36474f852bb8c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        // line 165
        echo "    <!-- iCheck 1.0.1 -->
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/iCheck/icheck.min.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f21bacdd3b4ec5a8b1405ea440e08d8b9e76cc866c922ce5a36474f852bb8c24->leave($__internal_f21bacdd3b4ec5a8b1405ea440e08d8b9e76cc866c922ce5a36474f852bb8c24_prof);

    }

    // line 170
    public function block_script($context, array $blocks = array())
    {
        $__internal_1bb7761356405c30ec71a87df56fa124f8988a0ad7aafb16caf7cf6fb5f8f892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb7761356405c30ec71a87df56fa124f8988a0ad7aafb16caf7cf6fb5f8f892->enter($__internal_1bb7761356405c30ec71a87df56fa124f8988a0ad7aafb16caf7cf6fb5f8f892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_1bb7761356405c30ec71a87df56fa124f8988a0ad7aafb16caf7cf6fb5f8f892->leave($__internal_1bb7761356405c30ec71a87df56fa124f8988a0ad7aafb16caf7cf6fb5f8f892_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle:Compagnie:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 171,  318 => 170,  309 => 166,  306 => 165,  300 => 164,  286 => 157,  281 => 154,  276 => 152,  260 => 139,  248 => 130,  235 => 120,  220 => 108,  210 => 101,  197 => 91,  186 => 83,  173 => 73,  160 => 63,  150 => 56,  136 => 45,  126 => 38,  114 => 30,  109 => 27,  101 => 21,  95 => 20,  84 => 15,  77 => 10,  71 => 9,  62 => 6,  59 => 5,  53 => 4,  39 => 3,  11 => 1,);
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
     <!-- iCheck for checkboxes and radio inputs -->
     <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/plugins/iCheck/all.css')) }}\">
 {% endblock %}

{% block contentheader %}
    <h1>
        Compagnies de Transport
        <small>Ajouter une Compagnie</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('nb_main_homepage') }}\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Compagnie</li>
    </ol>
{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Nouvelle Compagnie</h3>
                </div>
                {{ form_start(form, {'attr': {'id': '', 'class' : 'form-horizontal' }}) }}

                {# Les erreurs générales du formulaire. #}
                {{ form_errors(form) }}
                <div class=\"box-body\">

                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-institution\"></i></span>
                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder' : 'Nom de la compagnie' }}) }}
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-bullhorn\"></i></span>
                                    {{ form_widget(form.slogan, {'attr': {'class': 'form-control', 'placeholder' : 'Slogan de la compagnie' }}) }}
                                </div>
                            </div>
                            <!-- /.col -->
                        </div> <br>
                        <!-- /.row -->

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-phone\"></i></span>
                                    {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder' : 'Numero de telephone de la compagnie' }}) }}
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-money\"></i></span>
                                    {{ form_widget(form.commission, {'attr': {'class': 'form-control', 'placeholder' : 'Commission offerte par la compagnie' }}) }}
                                </div>
                            </div>
                            <!-- /.col -->
                        </div> <br>
                        <!-- /.row -->

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    {{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'rows': '3', 'placeholder' : 'Adresse de la compagnie' }}) }}
                                </div>
                            </div>
                        </div><br>
                        <!-- /.row -->

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa  fa-gg\"></i></span>
                                    {{ form_widget(form.metatitre, {'attr': {'class': 'form-control', 'placeholder' : 'Titre Meta de la compagnie' }}) }}
                                </div>
                            </div>

                            <!-- /.col -->
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa  fa-commenting\"></i></span>
                                    {{ form_widget(form.metadescription, {'attr': {'class': 'form-control', 'placeholder' : 'Description Meta de la compagnie' }}) }}
                                </div>
                            </div>
                            <!-- /.col -->
                        </div> <br>
                        <!-- /.row -->
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-hand-pointer-o\"></i></span>
                                    {{ form_widget(form.motCle, {'attr': {'class': 'form-control', 'placeholder' : 'Mot cle pour la recherche de la compagnie' }}) }}
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-envelope \"></i></span>
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder' : 'Adresse Email de la compagnie' }}) }}
                                </div>
                            </div>
                            <!-- /.col -->

                        </div> <br>
                        <!-- /.row -->


                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder' : 'Adresse de la compagnie' }}) }}
                                </div>
                            </div>
                        </div><br>
                        <!-- /.row -->

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label>Logo</label>
                                    {{ form_widget(form.logo, {'attr': {'class': 'file', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                        </div><br>
                        <!-- /.row -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label>Activée ?</label>
                                    {{ form_widget(form.isActive, {'attr': {'class': 'minimal', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                        </div><br>
                        <!-- /.row -->


                    </div>

                </div>
                <div class=\"box-footer\">
                    <button type=\"submit\" class=\"btn btn-info\">Enregistrer</button>

                    <a href=\"{{ path('nb_main_liste_des_compagnie') }}\" class=\"btn btn-default pull-right\">Annuler</a>
                </div>
                {{ form_rest(form) }}

                {# Fermeture de la balise <form> du formulaire HTML #}
                {{ form_end(form) }}
            </div>
        </div>
    </div>

{% endblock %}

{% block pagescript %}
    <!-- iCheck 1.0.1 -->
    <script src=\"{{ absolute_url(asset('assets/plugins/iCheck/icheck.min.js')) }}\"></script>
{% endblock %}


{% block script %}
    <!-- page script -->
    <script>
        \$(function () {
            //iCheck for checkbox and radio inputs
            \$('input[type=\"checkbox\"].minimal, input[type=\"radio\"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });
        });
    </script>

{% endblock %}", "NBMainBundle:Compagnie:add.html.twig", "/var/www/html/ad/src/NB/MainBundle/Resources/views/Compagnie/add.html.twig");
    }
}
