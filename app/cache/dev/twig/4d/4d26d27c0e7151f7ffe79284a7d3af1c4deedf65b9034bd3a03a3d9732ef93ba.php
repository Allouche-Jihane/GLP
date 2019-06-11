<?php

/* announce/show.html.twig */
class __TwigTemplate_d54cd5bc42510b62c3ce3264e3fde6bad5ff912e52a3d3617e2d2432b9542b33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "announce/show.html.twig", 1);
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
        $__internal_ba5db498960e787a98877ba652daf016ce2a44f69ec77b7069fd32a65aef5600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5db498960e787a98877ba652daf016ce2a44f69ec77b7069fd32a65aef5600->enter($__internal_ba5db498960e787a98877ba652daf016ce2a44f69ec77b7069fd32a65aef5600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "announce/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba5db498960e787a98877ba652daf016ce2a44f69ec77b7069fd32a65aef5600->leave($__internal_ba5db498960e787a98877ba652daf016ce2a44f69ec77b7069fd32a65aef5600_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea4c7e765748eb05e6f9a298aa031dd63de66183ba0273c59467d5083edbc8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4c7e765748eb05e6f9a298aa031dd63de66183ba0273c59467d5083edbc8aa->enter($__internal_ea4c7e765748eb05e6f9a298aa031dd63de66183ba0273c59467d5083edbc8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Announce</h1>
<div class=\"table-wrapper\">
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["announce"]) ? $context["announce"] : $this->getContext($context, "announce")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["announce"]) ? $context["announce"] : $this->getContext($context, "announce")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Announcetext</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["announce"]) ? $context["announce"] : $this->getContext($context, "announce")), "announceText", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 23
        if ($this->getAttribute((isset($context["announce"]) ? $context["announce"] : $this->getContext($context, "announce")), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["announce"]) ? $context["announce"] : $this->getContext($context, "announce")), "dateCreation", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datemodification</th>
                <td>";
        // line 27
        if ($this->getAttribute((isset($context["announce"]) ? $context["announce"] : $this->getContext($context, "announce")), "dateModification", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["announce"]) ? $context["announce"] : $this->getContext($context, "announce")), "dateModification", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>

            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_index");
        echo "\"><span class=\"fa-backward\"></span> - la liste  </a>
        <br>
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_edit", array("id" => $this->getAttribute((isset($context["announce"]) ? $context["announce"] : $this->getContext($context, "announce")), "id", array()))), "html", null, true);
        echo "\"><span class=\"fa-pencil\"></span> - modifier</a>
       <br>
    <br>
            ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_ea4c7e765748eb05e6f9a298aa031dd63de66183ba0273c59467d5083edbc8aa->leave($__internal_ea4c7e765748eb05e6f9a298aa031dd63de66183ba0273c59467d5083edbc8aa_prof);

    }

    public function getTemplateName()
    {
        return "announce/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 40,  101 => 38,  95 => 35,  90 => 33,  79 => 27,  70 => 23,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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

    <h1>Announce</h1>
<div class=\"table-wrapper\">
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ announce.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ announce.titre }}</td>
            </tr>
            <tr>
                <th>Announcetext</th>
                <td>{{ announce.announceText }}</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>{% if announce.dateCreation %}{{ announce.dateCreation|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Datemodification</th>
                <td>{% if announce.dateModification %}{{ announce.dateModification|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>
</div>

            <a href=\"{{ path('announce_index') }}\"><span class=\"fa-backward\"></span> - la liste  </a>
        <br>
            <a href=\"{{ path('announce_edit', { 'id': announce.id }) }}\"><span class=\"fa-pencil\"></span> - modifier</a>
       <br>
    <br>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}

{% endblock %}
", "announce/show.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\announce\\show.html.twig");
    }
}
