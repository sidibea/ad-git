<?php

/* include/header.html.twig */
class __TwigTemplate_114b8258732a8b826cbf9dc924267810b2235bfc019c82eb4ee1cc5212e1fe88 extends Twig_Template
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
        $__internal_44c1e9122a725c477dd9e169c822ff7e7c1a222834aa482e4ca0427caf023366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c1e9122a725c477dd9e169c822ff7e7c1a222834aa482e4ca0427caf023366->enter($__internal_44c1e9122a725c477dd9e169c822ff7e7c1a222834aa482e4ca0427caf023366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "include/header.html.twig"));

        // line 1
        echo "<!-- Logo -->
<a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\" class=\"logo\">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class=\"logo-mini\"><b>next</b>Bus</span>
    <!-- logo for regular state and mobile devices -->
    <span class=\"logo-lg\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png")), "html", null, true);
        echo "\" alt=\"Logo nextBus\" title=\"Logo nextBus\" /></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class=\"navbar navbar-static-top\">
    <!-- Sidebar toggle button-->
    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </a>

    <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">

            <!-- User Account: style can be found in dropdown.less -->
            <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png")), "html", null, true);
        echo "\" class=\"user-image\" alt=\"Logo\">
                    <span class=\"hidden-xs\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</span>
                </a>
                <ul class=\"dropdown-menu\">
                    <!-- User image -->
                    <li class=\"user-header\">
                        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png")), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                        <p>
                            ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "
                            <small>Dernière connexion le ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "d M Y"), "html", null, true);
        echo "</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class=\"user-footer\">
                        <div class=\"pull-left\">
                            <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                        </div>
                        <div class=\"pull-right\">
                            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\" class=\"btn btn-default btn-flat\">Se deconnecter</a>
                        </div>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>";
        
        $__internal_44c1e9122a725c477dd9e169c822ff7e7c1a222834aa482e4ca0427caf023366->leave($__internal_44c1e9122a725c477dd9e169c822ff7e7c1a222834aa482e4ca0427caf023366_prof);

    }

    public function getTemplateName()
    {
        return "include/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 43,  75 => 34,  71 => 33,  65 => 30,  57 => 25,  53 => 24,  32 => 6,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Logo -->
<a href=\"{{ path('nb_main_homepage') }}\" class=\"logo\">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class=\"logo-mini\"><b>next</b>Bus</span>
    <!-- logo for regular state and mobile devices -->
    <span class=\"logo-lg\"><img src=\"{{ absolute_url(asset('assets/images/logo.png')) }}\" alt=\"Logo nextBus\" title=\"Logo nextBus\" /></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class=\"navbar navbar-static-top\">
    <!-- Sidebar toggle button-->
    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </a>

    <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">

            <!-- User Account: style can be found in dropdown.less -->
            <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <img src=\"{{ absolute_url(asset('assets/images/logo.png')) }}\" class=\"user-image\" alt=\"Logo\">
                    <span class=\"hidden-xs\">{{ app.user.nom }}</span>
                </a>
                <ul class=\"dropdown-menu\">
                    <!-- User image -->
                    <li class=\"user-header\">
                        <img src=\"{{ absolute_url(asset('assets/images/logo.png')) }}\" class=\"img-circle\" alt=\"User Image\">

                        <p>
                            {{ app.user.nom }}
                            <small>Dernière connexion le {{ app.user.lastLogin |date('d M Y') }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class=\"user-footer\">
                        <div class=\"pull-left\">
                            <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                        </div>
                        <div class=\"pull-right\">
                            <a href=\"{{ path('logout') }}\" class=\"btn btn-default btn-flat\">Se deconnecter</a>
                        </div>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>", "include/header.html.twig", "/var/www/html/ad/app/Resources/views/include/header.html.twig");
    }
}
