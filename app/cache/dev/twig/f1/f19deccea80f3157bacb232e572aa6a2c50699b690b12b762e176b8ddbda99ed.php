<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2964b092b23b1a2db23e18700f01b3e3024a0473614008031fa29790216ee1bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fafab53d037832de2119b1ba4747ac5c0308d02d81ad507137640828d83039f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fafab53d037832de2119b1ba4747ac5c0308d02d81ad507137640828d83039f->enter($__internal_1fafab53d037832de2119b1ba4747ac5c0308d02d81ad507137640828d83039f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fafab53d037832de2119b1ba4747ac5c0308d02d81ad507137640828d83039f->leave($__internal_1fafab53d037832de2119b1ba4747ac5c0308d02d81ad507137640828d83039f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04d89a52c4cd032c50dbcc63d84a5e04a478891394e1803c0f7c2f730f9f6d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d89a52c4cd032c50dbcc63d84a5e04a478891394e1803c0f7c2f730f9f6d01->enter($__internal_04d89a52c4cd032c50dbcc63d84a5e04a478891394e1803c0f7c2f730f9f6d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_04d89a52c4cd032c50dbcc63d84a5e04a478891394e1803c0f7c2f730f9f6d01->leave($__internal_04d89a52c4cd032c50dbcc63d84a5e04a478891394e1803c0f7c2f730f9f6d01_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ad984b4c23cf2f562993272129ccc5249803a2ed5cc610f84a448a6726039d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad984b4c23cf2f562993272129ccc5249803a2ed5cc610f84a448a6726039d2->enter($__internal_3ad984b4c23cf2f562993272129ccc5249803a2ed5cc610f84a448a6726039d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3ad984b4c23cf2f562993272129ccc5249803a2ed5cc610f84a448a6726039d2->leave($__internal_3ad984b4c23cf2f562993272129ccc5249803a2ed5cc610f84a448a6726039d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a7732619d4b988a42430796f5e549c3b302ac130acbe5125ed21975e219d2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7732619d4b988a42430796f5e549c3b302ac130acbe5125ed21975e219d2df->enter($__internal_9a7732619d4b988a42430796f5e549c3b302ac130acbe5125ed21975e219d2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9a7732619d4b988a42430796f5e549c3b302ac130acbe5125ed21975e219d2df->leave($__internal_9a7732619d4b988a42430796f5e549c3b302ac130acbe5125ed21975e219d2df_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/ad/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
