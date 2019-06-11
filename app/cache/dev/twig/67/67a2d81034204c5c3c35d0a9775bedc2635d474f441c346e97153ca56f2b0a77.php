<?php

/* etudiant/edit.html.twig */
class __TwigTemplate_8a4d13912c0343cc3e94c60c000f7929ce67580e858a875d2fba337c5bc59990 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/edit.html.twig", 1);
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
        $__internal_74aa53b984841cc5cd0bc6a22c8751541e3f1716d191944e2f777f565ba63e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74aa53b984841cc5cd0bc6a22c8751541e3f1716d191944e2f777f565ba63e40->enter($__internal_74aa53b984841cc5cd0bc6a22c8751541e3f1716d191944e2f777f565ba63e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etudiant/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74aa53b984841cc5cd0bc6a22c8751541e3f1716d191944e2f777f565ba63e40->leave($__internal_74aa53b984841cc5cd0bc6a22c8751541e3f1716d191944e2f777f565ba63e40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11d5fada97ab7c39488eb7f6df9ba793b1fa89ec07d7392e50b9aab1743a3718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d5fada97ab7c39488eb7f6df9ba793b1fa89ec07d7392e50b9aab1743a3718->enter($__internal_11d5fada97ab7c39488eb7f6df9ba793b1fa89ec07d7392e50b9aab1743a3718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Etudiant edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_index");
        echo "\"><span class=\"icon fa-backward\">  - la liste</a>
        <br>
    <br>
            ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_11d5fada97ab7c39488eb7f6df9ba793b1fa89ec07d7392e50b9aab1743a3718->leave($__internal_11d5fada97ab7c39488eb7f6df9ba793b1fa89ec07d7392e50b9aab1743a3718_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  65 => 15,  59 => 12,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Etudiant edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}


            <a href=\"{{ path('GestionEtudiant_index') }}\"><span class=\"icon fa-backward\">  - la liste</a>
        <br>
    <br>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}

{% endblock %}
", "etudiant/edit.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\etudiant\\edit.html.twig");
    }
}
