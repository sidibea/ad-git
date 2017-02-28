<?php

/* NBMainBundle:Villes:add.html.twig */
class __TwigTemplate_27fd6924e47835ae9dff5cfabd9e745e84dc0202e08b3907afbeb85ccb30d22c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle:Villes:add.html.twig", 1);
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
        $__internal_b09d2b32f877fbb9bf185a2a26d2d7220c32bcb4404c3f1d0c4cc61d40466eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09d2b32f877fbb9bf185a2a26d2d7220c32bcb4404c3f1d0c4cc61d40466eea->enter($__internal_b09d2b32f877fbb9bf185a2a26d2d7220c32bcb4404c3f1d0c4cc61d40466eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle:Villes:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b09d2b32f877fbb9bf185a2a26d2d7220c32bcb4404c3f1d0c4cc61d40466eea->leave($__internal_b09d2b32f877fbb9bf185a2a26d2d7220c32bcb4404c3f1d0c4cc61d40466eea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af654afb11cedc43db0fa381a43c89e9c451a281986b346511496768f095d12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af654afb11cedc43db0fa381a43c89e9c451a281986b346511496768f095d12a->enter($__internal_af654afb11cedc43db0fa381a43c89e9c451a281986b346511496768f095d12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Compagnie  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_af654afb11cedc43db0fa381a43c89e9c451a281986b346511496768f095d12a->leave($__internal_af654afb11cedc43db0fa381a43c89e9c451a281986b346511496768f095d12a_prof);

    }

    // line 4
    public function block_pagestyle($context, array $blocks = array())
    {
        $__internal_86f5c5b9de240c7ee7b13f9356eb5bc954ca442dc9dbb3aeb0e9d9d2bfd0a7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f5c5b9de240c7ee7b13f9356eb5bc954ca442dc9dbb3aeb0e9d9d2bfd0a7c8->enter($__internal_86f5c5b9de240c7ee7b13f9356eb5bc954ca442dc9dbb3aeb0e9d9d2bfd0a7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagestyle"));

        // line 5
        echo "     <!-- iCheck for checkboxes and radio inputs -->
     <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/iCheck/all.css")), "html", null, true);
        echo "\">
 ";
        
        $__internal_86f5c5b9de240c7ee7b13f9356eb5bc954ca442dc9dbb3aeb0e9d9d2bfd0a7c8->leave($__internal_86f5c5b9de240c7ee7b13f9356eb5bc954ca442dc9dbb3aeb0e9d9d2bfd0a7c8_prof);

    }

    // line 9
    public function block_contentheader($context, array $blocks = array())
    {
        $__internal_a054ff6d6626ef0715b4c8eb0c706259fcd86fe3083ad55d4c3604d583b2ca80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a054ff6d6626ef0715b4c8eb0c706259fcd86fe3083ad55d4c3604d583b2ca80->enter($__internal_a054ff6d6626ef0715b4c8eb0c706259fcd86fe3083ad55d4c3604d583b2ca80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        // line 10
        echo "    <h1>
        Ville
        <small>Ajouter une ville</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">ville</li>
    </ol>
";
        
        $__internal_a054ff6d6626ef0715b4c8eb0c706259fcd86fe3083ad55d4c3604d583b2ca80->leave($__internal_a054ff6d6626ef0715b4c8eb0c706259fcd86fe3083ad55d4c3604d583b2ca80_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b3d2139c90b70ecbf577838e77d1f9ef4e1c688abb700b704ea28da336c42b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3d2139c90b70ecbf577838e77d1f9ef4e1c688abb700b704ea28da336c42b8->enter($__internal_4b3d2139c90b70ecbf577838e77d1f9ef4e1c688abb700b704ea28da336c42b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Nouvelle ville</h3>
                </div>
                ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "", "class" => "form-horizontal")));
        echo "

                ";
        // line 30
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
                <div class=\"box-body\">

                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-institution\"></i></span>
                                    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la ville")));
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
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse de la compagnie")));
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
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "photo", array()), 'widget', array("attr" => array("class" => "file", "placeholder" => "")));
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
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActive", array()), 'widget', array("attr" => array("class" => "minimal", "placeholder" => "")));
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
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_liste_des_compagnie");
        echo "\" class=\"btn btn-default pull-right\">Annuler</a>
                </div>
                ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

                ";
        // line 88
        echo "                ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_4b3d2139c90b70ecbf577838e77d1f9ef4e1c688abb700b704ea28da336c42b8->leave($__internal_4b3d2139c90b70ecbf577838e77d1f9ef4e1c688abb700b704ea28da336c42b8_prof);

    }

    // line 95
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_64c6bad9eb06adb4c812c921f9daf92771ffa055d073fa22fabfa166adcbbc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c6bad9eb06adb4c812c921f9daf92771ffa055d073fa22fabfa166adcbbc0e->enter($__internal_64c6bad9eb06adb4c812c921f9daf92771ffa055d073fa22fabfa166adcbbc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        // line 96
        echo "    <!-- iCheck 1.0.1 -->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/iCheck/icheck.min.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_64c6bad9eb06adb4c812c921f9daf92771ffa055d073fa22fabfa166adcbbc0e->leave($__internal_64c6bad9eb06adb4c812c921f9daf92771ffa055d073fa22fabfa166adcbbc0e_prof);

    }

    // line 101
    public function block_script($context, array $blocks = array())
    {
        $__internal_2269128a52e4026fbce4193a43f5369f8757b61151a84e720d3549d87e9be0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2269128a52e4026fbce4193a43f5369f8757b61151a84e720d3549d87e9be0f8->enter($__internal_2269128a52e4026fbce4193a43f5369f8757b61151a84e720d3549d87e9be0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 102
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
        
        $__internal_2269128a52e4026fbce4193a43f5369f8757b61151a84e720d3549d87e9be0f8->leave($__internal_2269128a52e4026fbce4193a43f5369f8757b61151a84e720d3549d87e9be0f8_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle:Villes:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 102,  225 => 101,  216 => 97,  213 => 96,  207 => 95,  193 => 88,  188 => 85,  183 => 83,  167 => 70,  155 => 61,  142 => 51,  126 => 38,  114 => 30,  109 => 27,  101 => 21,  95 => 20,  84 => 15,  77 => 10,  71 => 9,  62 => 6,  59 => 5,  53 => 4,  39 => 3,  11 => 1,);
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
        Ville
        <small>Ajouter une ville</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('nb_main_homepage') }}\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">ville</li>
    </ol>
{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Nouvelle ville</h3>
                </div>
                {{ form_start(form, {'attr': {'id': '', 'class' : 'form-horizontal' }}) }}

                {# Les erreurs générales du formulaire. #}
                {{ form_errors(form) }}
                <div class=\"box-body\">

                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-institution\"></i></span>
                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder' : 'Nom de la ville' }}) }}
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
                                    {{ form_widget(form.photo, {'attr': {'class': 'file', 'placeholder' : '' }}) }}
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

{% endblock %}", "NBMainBundle:Villes:add.html.twig", "/var/www/html/ad/src/NB/MainBundle/Resources/views/Villes/add.html.twig");
    }
}
