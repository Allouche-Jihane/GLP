<?php

/* absence/index.html.twig */
class __TwigTemplate_fff128afa1a8b8f86cbeec4afc5add34dd066023ebcd446bd7c180cc162c17e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "absence/index.html.twig", 1);
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
        $__internal_2b771fb0aea5522bd49b74da258a162592e4e1719894bc31a3c7e74cd954af03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b771fb0aea5522bd49b74da258a162592e4e1719894bc31a3c7e74cd954af03->enter($__internal_2b771fb0aea5522bd49b74da258a162592e4e1719894bc31a3c7e74cd954af03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absence/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b771fb0aea5522bd49b74da258a162592e4e1719894bc31a3c7e74cd954af03->leave($__internal_2b771fb0aea5522bd49b74da258a162592e4e1719894bc31a3c7e74cd954af03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_490aee5ca56db96307cd73dcae74e40c8c02456df5f955d5e1f790db3b505bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490aee5ca56db96307cd73dcae74e40c8c02456df5f955d5e1f790db3b505bad->enter($__internal_490aee5ca56db96307cd73dcae74e40c8c02456df5f955d5e1f790db3b505bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>liste d'absences</h1>
    <ul>
        <li style=\"list-style: none\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_new");
        echo "\" ></span>Ajouter Absence</a>
        </li>
    </ul>
<div class=\"table-wrapper\">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Dateabsence</th>
                <th>nom</th>
                <th>prenom</th>
                <th>Nombreheurs</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences")));
        foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_show", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            if ($this->getAttribute($context["absence"], "dateAbsence", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "dateAbsence", array()), "Y-m-d "), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "etudiant", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "etudiant", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "nombreHeurs", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li style=\"list-style: none; display: inline\">
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_show", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-list\"></span></a>
                        </li>
                        ";
            // line 35
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 36
                echo "                        <li style=\"list-style: none; display: inline\">
                            <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_edit", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
                echo "\"><span class=\"icon fa-pencil\"></span></a>
                        </li>
                        ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 39
$context["absence"], "matiere", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "matiere", array()), "id", array()))) {
                // line 40
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_edit", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
                echo "\"><span class=\"icon fa-pencil\"></span></a>
                        ";
            } else {
                // line 42
                echo "                        <li style=\"list-style: none; display: inline\">
                            <a id=\"ban\" href=\"#\"><span class=\"icon fa-ban\"></span></a>
                        </li>
                        ";
            }
            // line 46
            echo "                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>
</div>

";
        
        $__internal_490aee5ca56db96307cd73dcae74e40c8c02456df5f955d5e1f790db3b505bad->leave($__internal_490aee5ca56db96307cd73dcae74e40c8c02456df5f955d5e1f790db3b505bad_prof);

    }

    public function getTemplateName()
    {
        return "absence/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  127 => 46,  121 => 42,  115 => 40,  113 => 39,  108 => 37,  105 => 36,  103 => 35,  98 => 33,  91 => 29,  87 => 28,  83 => 27,  77 => 26,  71 => 25,  68 => 24,  64 => 23,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>liste d'absences</h1>
    <ul>
        <li style=\"list-style: none\">
            <a href=\"{{ path('gestionAbsence_new') }}\" ></span>Ajouter Absence</a>
        </li>
    </ul>
<div class=\"table-wrapper\">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Dateabsence</th>
                <th>nom</th>
                <th>prenom</th>
                <th>Nombreheurs</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for absence in absences %}
            <tr>
                <td><a href=\"{{ path('gestionAbsence_show', { 'id': absence.id }) }}\">{{ absence.id }}</a></td>
                <td>{% if absence.dateAbsence %}{{ absence.dateAbsence|date('Y-m-d ') }}{% endif %}</td>
                <td>{{ absence.etudiant.nom }}</td>
                <td>{{ absence.etudiant.prenom }}</td>
                <td>{{ absence.nombreHeurs }}</td>
                <td>
                    <ul>
                        <li style=\"list-style: none; display: inline\">
                            <a href=\"{{ path('gestionAbsence_show', { 'id': absence.id }) }}\"><span class=\"icon fa-list\"></span></a>
                        </li>
                        {% if is_granted('ROLE_ADMIN') %}
                        <li style=\"list-style: none; display: inline\">
                            <a href=\"{{ path('gestionAbsence_edit', { 'id': absence.id }) }}\"><span class=\"icon fa-pencil\"></span></a>
                        </li>
                        {% elseif absence.matiere.id == app.user.matiere.id %}
                        <a href=\"{{ path('gestionAbsence_edit', { 'id': absence.id }) }}\"><span class=\"icon fa-pencil\"></span></a>
                        {% else %}
                        <li style=\"list-style: none; display: inline\">
                            <a id=\"ban\" href=\"#\"><span class=\"icon fa-ban\"></span></a>
                        </li>
                        {% endif %}
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>

{% endblock %}
", "absence/index.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\absence\\index.html.twig");
    }
}
