<?php

/* compte/edit.html.twig */
class __TwigTemplate_9c371cb39d47eaeea285d1afb31d8a4222ce598f3685b332f8f8f7d62d4f716b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/edit.html.twig", 1);
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
        $__internal_d68a5fba3deeb2a1ef58d5378d6e6b3575da457b2e68e8c9defd3dd1788fec40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68a5fba3deeb2a1ef58d5378d6e6b3575da457b2e68e8c9defd3dd1788fec40->enter($__internal_d68a5fba3deeb2a1ef58d5378d6e6b3575da457b2e68e8c9defd3dd1788fec40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d68a5fba3deeb2a1ef58d5378d6e6b3575da457b2e68e8c9defd3dd1788fec40->leave($__internal_d68a5fba3deeb2a1ef58d5378d6e6b3575da457b2e68e8c9defd3dd1788fec40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78927966bac10d1831650ff27bf63c557fe26c2f8309b3e0f49afab1088e575c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78927966bac10d1831650ff27bf63c557fe26c2f8309b3e0f49afab1088e575c->enter($__internal_78927966bac10d1831650ff27bf63c557fe26c2f8309b3e0f49afab1088e575c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modification du Compte</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Modifier\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


            ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    <br><br>
    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionCompte_index");
        echo "\"><span class=\"fa-backward\"> - la liste</span></a>

";
        
        $__internal_78927966bac10d1831650ff27bf63c557fe26c2f8309b3e0f49afab1088e575c->leave($__internal_78927966bac10d1831650ff27bf63c557fe26c2f8309b3e0f49afab1088e575c_prof);

    }

    public function getTemplateName()
    {
        return "compte/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  64 => 14,  59 => 12,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Modification du Compte</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Modifier\" />
    {{ form_end(edit_form) }}


            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}

    <br><br>
    <a href=\"{{ path('GestionCompte_index') }}\"><span class=\"fa-backward\"> - la liste</span></a>

{% endblock %}
", "compte/edit.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\compte\\edit.html.twig");
    }
}
