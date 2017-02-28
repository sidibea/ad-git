<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_55b31e8fb27a8567b0d5880c23fd94e93842250393ed0cc8799e4573bd51f74a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3959f6af8d997806f455c476911c019a5599b9c456fd8b3276316b07bd264fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3959f6af8d997806f455c476911c019a5599b9c456fd8b3276316b07bd264fb->enter($__internal_f3959f6af8d997806f455c476911c019a5599b9c456fd8b3276316b07bd264fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3959f6af8d997806f455c476911c019a5599b9c456fd8b3276316b07bd264fb->leave($__internal_f3959f6af8d997806f455c476911c019a5599b9c456fd8b3276316b07bd264fb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06eea5d66cd8e89fe526da701bd06fff688667d7848ac8981d2a646f640de004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06eea5d66cd8e89fe526da701bd06fff688667d7848ac8981d2a646f640de004->enter($__internal_06eea5d66cd8e89fe526da701bd06fff688667d7848ac8981d2a646f640de004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06eea5d66cd8e89fe526da701bd06fff688667d7848ac8981d2a646f640de004->leave($__internal_06eea5d66cd8e89fe526da701bd06fff688667d7848ac8981d2a646f640de004_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d35e588bc99848fe9de4331ba5d21181dc35873127e9b67d6bcc325d7aa7cf37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35e588bc99848fe9de4331ba5d21181dc35873127e9b67d6bcc325d7aa7cf37->enter($__internal_d35e588bc99848fe9de4331ba5d21181dc35873127e9b67d6bcc325d7aa7cf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d35e588bc99848fe9de4331ba5d21181dc35873127e9b67d6bcc325d7aa7cf37->leave($__internal_d35e588bc99848fe9de4331ba5d21181dc35873127e9b67d6bcc325d7aa7cf37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_816cf58c8f2ea6a1b6b3e8d7918d70e50df5d33da8724feecae484b6c1c98c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816cf58c8f2ea6a1b6b3e8d7918d70e50df5d33da8724feecae484b6c1c98c48->enter($__internal_816cf58c8f2ea6a1b6b3e8d7918d70e50df5d33da8724feecae484b6c1c98c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_816cf58c8f2ea6a1b6b3e8d7918d70e50df5d33da8724feecae484b6c1c98c48->leave($__internal_816cf58c8f2ea6a1b6b3e8d7918d70e50df5d33da8724feecae484b6c1c98c48_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/ad/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
