<?php

/* NBMainBundle:Axes:add.html.twig */
class __TwigTemplate_700ee2d605b1496bbd819e3aa83caeb765781a6f844366ef51bfa2810c27fb7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle:Axes:add.html.twig", 1);
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
        $__internal_6d759531bde167a777df5ca4ed96e0afebc37a1ef779f713267129cc7a91a588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d759531bde167a777df5ca4ed96e0afebc37a1ef779f713267129cc7a91a588->enter($__internal_6d759531bde167a777df5ca4ed96e0afebc37a1ef779f713267129cc7a91a588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle:Axes:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d759531bde167a777df5ca4ed96e0afebc37a1ef779f713267129cc7a91a588->leave($__internal_6d759531bde167a777df5ca4ed96e0afebc37a1ef779f713267129cc7a91a588_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3367b00da11bd6514442ad68c7bb3a8393abea3a5af256c34edd35bbdbef7050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3367b00da11bd6514442ad68c7bb3a8393abea3a5af256c34edd35bbdbef7050->enter($__internal_3367b00da11bd6514442ad68c7bb3a8393abea3a5af256c34edd35bbdbef7050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Axes  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_3367b00da11bd6514442ad68c7bb3a8393abea3a5af256c34edd35bbdbef7050->leave($__internal_3367b00da11bd6514442ad68c7bb3a8393abea3a5af256c34edd35bbdbef7050_prof);

    }

    // line 4
    public function block_pagestyle($context, array $blocks = array())
    {
        $__internal_190313dbf834b7aa8a8d72d29a25ccdf7ea58b7581b07d152546ed336f18ada3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190313dbf834b7aa8a8d72d29a25ccdf7ea58b7581b07d152546ed336f18ada3->enter($__internal_190313dbf834b7aa8a8d72d29a25ccdf7ea58b7581b07d152546ed336f18ada3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagestyle"));

        // line 5
        echo "     <!-- iCheck for checkboxes and radio inputs -->
     <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/iCheck/all.css")), "html", null, true);
        echo "\">
 ";
        
        $__internal_190313dbf834b7aa8a8d72d29a25ccdf7ea58b7581b07d152546ed336f18ada3->leave($__internal_190313dbf834b7aa8a8d72d29a25ccdf7ea58b7581b07d152546ed336f18ada3_prof);

    }

    // line 9
    public function block_contentheader($context, array $blocks = array())
    {
        $__internal_1fdd9784f1ccd20665f463b62492612b855fc83e13a3083fd4d3878a921c359f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdd9784f1ccd20665f463b62492612b855fc83e13a3083fd4d3878a921c359f->enter($__internal_1fdd9784f1ccd20665f463b62492612b855fc83e13a3083fd4d3878a921c359f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        // line 10
        echo "    <h1>
        Axes
        <small>Ajouter un axe</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Axes</li>
    </ol>
";
        
        $__internal_1fdd9784f1ccd20665f463b62492612b855fc83e13a3083fd4d3878a921c359f->leave($__internal_1fdd9784f1ccd20665f463b62492612b855fc83e13a3083fd4d3878a921c359f_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_572cbee043061eae38ff5de7bf1b6ad885491e47141251fbccc911a284827023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572cbee043061eae38ff5de7bf1b6ad885491e47141251fbccc911a284827023->enter($__internal_572cbee043061eae38ff5de7bf1b6ad885491e47141251fbccc911a284827023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "   <div class=\"row\">
       <div class=\"col-md-12\">
           <!-- general form elements -->
           <div class=\"box box-primary\">
               <div class=\"box-header with-border\">
                   <h3 class=\"box-title\">Ajouter un axe</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "

               ";
        // line 33
        echo "               ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
                   <div class=\"box-body\">
                       <div class=\"form-group\">
                           <label>Source</label>
                           ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "source", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                       </div>
                       <div class=\"form-group\">
                           <label>Destination</label>
                           ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "destination", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                       </div>
                       <div class=\"form-group\">
                           <label>Distance</label>
                           ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "distance", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                       </div>
                       <div class=\"form-group\">
                           <label>Capacite du bus</label>
                           ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                       </div>
                       <div class=\"form-group\">
                           <label>Type de destination</label>
                           ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                       </div>
                       <div class=\"form-group\">
                           <label>Type de Bus</label>
                           ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeBus", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                       </div>

                       <div class=\"form-group\">
                           <label>Description</label>
                           ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                       </div>
                       <div class=\"form-group\">
                           <label>Photo</label>
                           ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "photo", array()), 'widget', array("attr" => array("class" => "file")));
        echo "
                       </div>
                       <div class=\"form-group\">
                           <label>Activé ?</label>
                           ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActive", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                       </div>


                   </div>
                   <!-- /.box-body -->

                   <div class=\"box-footer\">
                       <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                   </div>
               ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

               ";
        // line 83
        echo "               ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
           </div>
           <!-- /.box -->
       </div>
   </div>
";
        
        $__internal_572cbee043061eae38ff5de7bf1b6ad885491e47141251fbccc911a284827023->leave($__internal_572cbee043061eae38ff5de7bf1b6ad885491e47141251fbccc911a284827023_prof);

    }

    // line 90
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_29c52ac433bde07537dfbbf0c03b494ecea70c909829647d818e7c3cd3a9a146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c52ac433bde07537dfbbf0c03b494ecea70c909829647d818e7c3cd3a9a146->enter($__internal_29c52ac433bde07537dfbbf0c03b494ecea70c909829647d818e7c3cd3a9a146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        // line 91
        echo "    <!-- iCheck 1.0.1 -->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/iCheck/icheck.min.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_29c52ac433bde07537dfbbf0c03b494ecea70c909829647d818e7c3cd3a9a146->leave($__internal_29c52ac433bde07537dfbbf0c03b494ecea70c909829647d818e7c3cd3a9a146_prof);

    }

    // line 96
    public function block_script($context, array $blocks = array())
    {
        $__internal_fedad30317f05e781b9a44bf67bb211e10f4027aa1483089428c8211c34e99da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fedad30317f05e781b9a44bf67bb211e10f4027aa1483089428c8211c34e99da->enter($__internal_fedad30317f05e781b9a44bf67bb211e10f4027aa1483089428c8211c34e99da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 97
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
        
        $__internal_fedad30317f05e781b9a44bf67bb211e10f4027aa1483089428c8211c34e99da->leave($__internal_fedad30317f05e781b9a44bf67bb211e10f4027aa1483089428c8211c34e99da_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle:Axes:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 97,  232 => 96,  223 => 92,  220 => 91,  214 => 90,  200 => 83,  195 => 80,  182 => 70,  175 => 66,  168 => 62,  160 => 57,  153 => 53,  146 => 49,  139 => 45,  132 => 41,  125 => 37,  117 => 33,  112 => 30,  101 => 21,  95 => 20,  84 => 15,  77 => 10,  71 => 9,  62 => 6,  59 => 5,  53 => 4,  39 => 3,  11 => 1,);
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
     <!-- iCheck for checkboxes and radio inputs -->
     <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/plugins/iCheck/all.css')) }}\">
 {% endblock %}

{% block contentheader %}
    <h1>
        Axes
        <small>Ajouter un axe</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('nb_main_homepage') }}\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        <li class=\"active\">Axes</li>
    </ol>
{% endblock %}

{% block content %}
   <div class=\"row\">
       <div class=\"col-md-12\">
           <!-- general form elements -->
           <div class=\"box box-primary\">
               <div class=\"box-header with-border\">
                   <h3 class=\"box-title\">Ajouter un axe</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               {{ form_start(form, {'attr': { 'role' : 'form' }}) }}

               {# Les erreurs générales du formulaire. #}
               {{ form_errors(form) }}
                   <div class=\"box-body\">
                       <div class=\"form-group\">
                           <label>Source</label>
                           {{ form_widget(form.source, {'attr': {'class': 'form-control' }}) }}
                       </div>
                       <div class=\"form-group\">
                           <label>Destination</label>
                           {{ form_widget(form.destination, {'attr': {'class': 'form-control' }}) }}
                       </div>
                       <div class=\"form-group\">
                           <label>Distance</label>
                           {{ form_widget(form.distance, {'attr': {'class': 'form-control' }}) }}
                       </div>
                       <div class=\"form-group\">
                           <label>Capacite du bus</label>
                           {{ form_widget(form.capacite, {'attr': {'class': 'form-control' }}) }}
                       </div>
                       <div class=\"form-group\">
                           <label>Type de destination</label>
                           {{ form_widget(form.type, {'attr': {'class': 'form-control' }}) }}
                       </div>
                       <div class=\"form-group\">
                           <label>Type de Bus</label>
                           {{ form_widget(form.typeBus, {'attr': {'class': 'form-control' }}) }}
                       </div>

                       <div class=\"form-group\">
                           <label>Description</label>
                           {{ form_widget(form.description, {'attr': {'class': 'form-control' }}) }}
                       </div>
                       <div class=\"form-group\">
                           <label>Photo</label>
                           {{ form_widget(form.photo, {'attr': {'class': 'file' }}) }}
                       </div>
                       <div class=\"form-group\">
                           <label>Activé ?</label>
                           {{ form_widget(form.isActive, {'attr': {'class': 'form-control' }}) }}
                       </div>


                   </div>
                   <!-- /.box-body -->

                   <div class=\"box-footer\">
                       <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                   </div>
               {{ form_rest(form) }}

               {# Fermeture de la balise <form> du formulaire HTML #}
               {{ form_end(form) }}
           </div>
           <!-- /.box -->
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

{% endblock %}", "NBMainBundle:Axes:add.html.twig", "/var/www/html/ad/src/NB/MainBundle/Resources/views/Axes/add.html.twig");
    }
}
