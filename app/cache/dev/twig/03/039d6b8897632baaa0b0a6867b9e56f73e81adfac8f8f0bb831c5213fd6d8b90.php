<?php

/* compte/show.html.twig */
class __TwigTemplate_f587e3b679af5ebda4cfc88424ce27b06758dc44edc44450f0ea1b24c0a89972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/show.html.twig", 1);
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
        $__internal_2898925db4db9d4fb5c9105ab48750208cf48624201cc39b515d9f81b7154066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2898925db4db9d4fb5c9105ab48750208cf48624201cc39b515d9f81b7154066->enter($__internal_2898925db4db9d4fb5c9105ab48750208cf48624201cc39b515d9f81b7154066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2898925db4db9d4fb5c9105ab48750208cf48624201cc39b515d9f81b7154066->leave($__internal_2898925db4db9d4fb5c9105ab48750208cf48624201cc39b515d9f81b7154066_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66fa3e7aa9da2a29517af693193932abd6da00a63169ff69d9606e640b3f66a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fa3e7aa9da2a29517af693193932abd6da00a63169ff69d9606e640b3f66a4->enter($__internal_66fa3e7aa9da2a29517af693193932abd6da00a63169ff69d9606e640b3f66a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Compte</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "login", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "dateCreation", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datemodification</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "dateModification", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "dateModification", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    ";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <input type=\"submit\" value=\"Supprimer\">
    ";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "



    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionCompte_index");
        echo "\"><span class=\"icon fa-backward\"> - la liste</a>
        <br>
            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionCompte_edit", array("id" => $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "id", array()))), "html", null, true);
        echo "\"><span class=\"icon fa-pencil\"> modifier</a>
        <br><br>

";
        
        $__internal_66fa3e7aa9da2a29517af693193932abd6da00a63169ff69d9606e640b3f66a4->leave($__internal_66fa3e7aa9da2a29517af693193932abd6da00a63169ff69d9606e640b3f66a4_prof);

    }

    public function getTemplateName()
    {
        return "compte/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 54,  127 => 52,  120 => 48,  115 => 46,  108 => 42,  99 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Compte</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ compte.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ compte.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ compte.prenom }}</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>{{ compte.login }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ compte.password }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ compte.status }}</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>{% if compte.dateCreation %}{{ compte.dateCreation|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Datemodification</th>
                <td>{% if compte.dateModification %}{{ compte.dateModification|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ compte.email }}</td>
            </tr>
        </tbody>
    </table>
    {{ form_start(delete_form) }}
    <input type=\"submit\" value=\"Supprimer\">
    {{ form_end(delete_form) }}



    <a href=\"{{ path('GestionCompte_index') }}\"><span class=\"icon fa-backward\"> - la liste</a>
        <br>
            <a href=\"{{ path('GestionCompte_edit', { 'id': compte.id }) }}\"><span class=\"icon fa-pencil\"> modifier</a>
        <br><br>

{% endblock %}
", "compte/show.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\compte\\show.html.twig");
    }
}
