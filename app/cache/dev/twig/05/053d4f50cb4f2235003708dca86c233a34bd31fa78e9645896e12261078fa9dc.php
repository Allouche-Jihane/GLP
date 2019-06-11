<?php

/* matiere/new.html.twig */
class __TwigTemplate_1fe55ad33f099c351e88afb2608c3461412fe7bf0bc70a8286066f2684d31dc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matiere/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c79d6617e88923cd09327d24c875307c6709768841bda712f8d2a10d2ba04837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79d6617e88923cd09327d24c875307c6709768841bda712f8d2a10d2ba04837->enter($__internal_c79d6617e88923cd09327d24c875307c6709768841bda712f8d2a10d2ba04837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matiere/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c79d6617e88923cd09327d24c875307c6709768841bda712f8d2a10d2ba04837->leave($__internal_c79d6617e88923cd09327d24c875307c6709768841bda712f8d2a10d2ba04837_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e35d55ae2b6672cf56099908c6ab83dc8c3cb712d7ec46a4b52a06f45fccb6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35d55ae2b6672cf56099908c6ab83dc8c3cb712d7ec46a4b52a06f45fccb6a3->enter($__internal_e35d55ae2b6672cf56099908c6ab83dc8c3cb712d7ec46a4b52a06f45fccb6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ajoutation d'une Matiere</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Ajouter\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionMatiere_index");
        echo "\"><span class=\"icon fa-backward\"> - la liste</a>

";
        
        $__internal_e35d55ae2b6672cf56099908c6ab83dc8c3cb712d7ec46a4b52a06f45fccb6a3->leave($__internal_e35d55ae2b6672cf56099908c6ab83dc8c3cb712d7ec46a4b52a06f45fccb6a3_prof);

    }

    public function getTemplateName()
    {
        return "matiere/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Ajoutation d'une Matiere</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Ajouter\" />
    {{ form_end(form) }}


            <a href=\"{{ path('GestionMatiere_index') }}\"><span class=\"icon fa-backward\"> - la liste</a>

{% endblock %}
", "matiere/new.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\matiere\\new.html.twig");
    }
}
