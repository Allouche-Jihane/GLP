<?php

/* absence/show.html.twig */
class __TwigTemplate_d2a8d51b001c2acd3a66001a8bcce056eb3f19e77f95cf1f8a50907b56915102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "absence/show.html.twig", 1);
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
        $__internal_fd2b717dd0a0ff3523c91b4d8ebe52cf1af125da3b2ec4ae7c55a35542537bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2b717dd0a0ff3523c91b4d8ebe52cf1af125da3b2ec4ae7c55a35542537bf9->enter($__internal_fd2b717dd0a0ff3523c91b4d8ebe52cf1af125da3b2ec4ae7c55a35542537bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absence/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd2b717dd0a0ff3523c91b4d8ebe52cf1af125da3b2ec4ae7c55a35542537bf9->leave($__internal_fd2b717dd0a0ff3523c91b4d8ebe52cf1af125da3b2ec4ae7c55a35542537bf9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b34c5929c13890701fd42199d9ac4412913ffd987b3dea52be43a58a1ef90227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34c5929c13890701fd42199d9ac4412913ffd987b3dea52be43a58a1ef90227->enter($__internal_b34c5929c13890701fd42199d9ac4412913ffd987b3dea52be43a58a1ef90227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Absence</h1>
<div class=\"table-wrapper\">
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateabsence</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "dateAbsence", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "dateAbsence", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Nombreheurs</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "nombreHeurs", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>
    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_index");
        echo "\">Back to the list</a>
        </li>
        ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "        <li>
            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_edit", array("id" => $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
        </li>
        <li>
            ";
            // line 32
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
                <input type=\"submit\" value=\"Delete\">
            ";
            // line 34
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
        </li>
        ";
        }
        // line 37
        echo "    </ul>
";
        
        $__internal_b34c5929c13890701fd42199d9ac4412913ffd987b3dea52be43a58a1ef90227->leave($__internal_b34c5929c13890701fd42199d9ac4412913ffd987b3dea52be43a58a1ef90227_prof);

    }

    public function getTemplateName()
    {
        return "absence/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 37,  95 => 34,  90 => 32,  84 => 29,  81 => 28,  79 => 27,  74 => 25,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Absence</h1>
<div class=\"table-wrapper\">
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ absence.id }}</td>
            </tr>
            <tr>
                <th>Dateabsence</th>
                <td>{% if absence.dateAbsence %}{{ absence.dateAbsence|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Nombreheurs</th>
                <td>{{ absence.nombreHeurs }}</td>
            </tr>
        </tbody>
    </table>
</div>
    <ul>
        <li>
            <a href=\"{{ path('gestionAbsence_index') }}\">Back to the list</a>
        </li>
        {% if is_granted('ROLE_ADMIN') %}
        <li>
            <a href=\"{{ path('gestionAbsence_edit', { 'id': absence.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
        {% endif %}
    </ul>
{% endblock %}
", "absence/show.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\absence\\show.html.twig");
    }
}
