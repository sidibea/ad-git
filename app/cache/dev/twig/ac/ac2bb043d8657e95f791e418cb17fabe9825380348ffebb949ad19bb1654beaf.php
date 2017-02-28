<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f4b8f6959eb326150a7967cb34f8b1f82a5d30d7ce7f36ee00c45d3abedd1e3b extends Twig_Template
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
        $__internal_244ead6cf2ad76febc2d7e67eccf063753d32d1f45616765d001cb8248413d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244ead6cf2ad76febc2d7e67eccf063753d32d1f45616765d001cb8248413d01->enter($__internal_244ead6cf2ad76febc2d7e67eccf063753d32d1f45616765d001cb8248413d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_244ead6cf2ad76febc2d7e67eccf063753d32d1f45616765d001cb8248413d01->leave($__internal_244ead6cf2ad76febc2d7e67eccf063753d32d1f45616765d001cb8248413d01_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c63d620e788b8529a3a8382899a308851c28680fa70ce86ce680475772af8b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63d620e788b8529a3a8382899a308851c28680fa70ce86ce680475772af8b6f->enter($__internal_c63d620e788b8529a3a8382899a308851c28680fa70ce86ce680475772af8b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c63d620e788b8529a3a8382899a308851c28680fa70ce86ce680475772af8b6f->leave($__internal_c63d620e788b8529a3a8382899a308851c28680fa70ce86ce680475772af8b6f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2eb09e86b0517525d2331dd91ba2fa301c6a30fa361277826c5bcd9dba2733b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2eb09e86b0517525d2331dd91ba2fa301c6a30fa361277826c5bcd9dba2733b->enter($__internal_b2eb09e86b0517525d2331dd91ba2fa301c6a30fa361277826c5bcd9dba2733b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b2eb09e86b0517525d2331dd91ba2fa301c6a30fa361277826c5bcd9dba2733b->leave($__internal_b2eb09e86b0517525d2331dd91ba2fa301c6a30fa361277826c5bcd9dba2733b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf97c63a3dfd35acb73371ade3b8d8d8addc5ccc8e21707a44ca2f7b5b9a0ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf97c63a3dfd35acb73371ade3b8d8d8addc5ccc8e21707a44ca2f7b5b9a0ff0->enter($__internal_bf97c63a3dfd35acb73371ade3b8d8d8addc5ccc8e21707a44ca2f7b5b9a0ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bf97c63a3dfd35acb73371ade3b8d8d8addc5ccc8e21707a44ca2f7b5b9a0ff0->leave($__internal_bf97c63a3dfd35acb73371ade3b8d8d8addc5ccc8e21707a44ca2f7b5b9a0ff0_prof);

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
