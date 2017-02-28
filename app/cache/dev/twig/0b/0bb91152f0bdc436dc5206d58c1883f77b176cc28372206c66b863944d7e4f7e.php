<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c473691f559dea02b84044c6af150f07573c1130637174446fcb2491b3038e7b extends Twig_Template
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
        $__internal_8873ac24d8b2886106b9f7ed687593bf7984352443913fb563cd1b3a7cf7339b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8873ac24d8b2886106b9f7ed687593bf7984352443913fb563cd1b3a7cf7339b->enter($__internal_8873ac24d8b2886106b9f7ed687593bf7984352443913fb563cd1b3a7cf7339b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8873ac24d8b2886106b9f7ed687593bf7984352443913fb563cd1b3a7cf7339b->leave($__internal_8873ac24d8b2886106b9f7ed687593bf7984352443913fb563cd1b3a7cf7339b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41f242607c901ebc036413f11f4c7c4706e52da0ab456dee905fe5dc2f6caa46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f242607c901ebc036413f11f4c7c4706e52da0ab456dee905fe5dc2f6caa46->enter($__internal_41f242607c901ebc036413f11f4c7c4706e52da0ab456dee905fe5dc2f6caa46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_41f242607c901ebc036413f11f4c7c4706e52da0ab456dee905fe5dc2f6caa46->leave($__internal_41f242607c901ebc036413f11f4c7c4706e52da0ab456dee905fe5dc2f6caa46_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cbc087eab7c10b8be81cf7191ed3421610644689de8efa9d3cba9aff8f0fbd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbc087eab7c10b8be81cf7191ed3421610644689de8efa9d3cba9aff8f0fbd0->enter($__internal_6cbc087eab7c10b8be81cf7191ed3421610644689de8efa9d3cba9aff8f0fbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6cbc087eab7c10b8be81cf7191ed3421610644689de8efa9d3cba9aff8f0fbd0->leave($__internal_6cbc087eab7c10b8be81cf7191ed3421610644689de8efa9d3cba9aff8f0fbd0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6376ab6080cb0509be0629ef9daeaa869b59c84e95bb7e6a86617a7e1de83016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6376ab6080cb0509be0629ef9daeaa869b59c84e95bb7e6a86617a7e1de83016->enter($__internal_6376ab6080cb0509be0629ef9daeaa869b59c84e95bb7e6a86617a7e1de83016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6376ab6080cb0509be0629ef9daeaa869b59c84e95bb7e6a86617a7e1de83016->leave($__internal_6376ab6080cb0509be0629ef9daeaa869b59c84e95bb7e6a86617a7e1de83016_prof);

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
