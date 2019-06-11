<?php

/* etudiant/index.html.twig */
class __TwigTemplate_577509c692d1ba4a99f270f74eeadca21decd5c4b1fa56c7eb904dc4c3112390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/index.html.twig", 1);
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
        $__internal_498f7bc9ef21289ffde42f87f1156862a62d8aa7aa5c8cdef85ed9bfee996ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498f7bc9ef21289ffde42f87f1156862a62d8aa7aa5c8cdef85ed9bfee996ef3->enter($__internal_498f7bc9ef21289ffde42f87f1156862a62d8aa7aa5c8cdef85ed9bfee996ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_498f7bc9ef21289ffde42f87f1156862a62d8aa7aa5c8cdef85ed9bfee996ef3->leave($__internal_498f7bc9ef21289ffde42f87f1156862a62d8aa7aa5c8cdef85ed9bfee996ef3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e86a1285954223f7ca32a99bdee367fc1bb06a427eb940410d4b7a95adb7e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e86a1285954223f7ca32a99bdee367fc1bb06a427eb940410d4b7a95adb7e19->enter($__internal_6e86a1285954223f7ca32a99bdee367fc1bb06a427eb940410d4b7a95adb7e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste Des Etudiants</h1>
<div class=\"table-wrapper\">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Cne</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants")));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_show", array("id" => $this->getAttribute($context["etudiant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "cne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_show", array("id" => $this->getAttribute($context["etudiant"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-list\"></span></a>
                        </li>
                        ";
            // line 32
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 33
                echo "                        <li>
                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_edit", array("id" => $this->getAttribute($context["etudiant"], "id", array()))), "html", null, true);
                echo "\"><span class=\"icon fa-pencil\"></span> </a>
                        </li>
                        ";
            }
            // line 37
            echo "                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
</div>
    ";
        // line 44
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 45
            echo "     <ul>
        <li>
            <a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_new");
            echo "\">Ajouter un nouveau etudiant</a>
        </li>
     </ul>
    ";
        }
        
        $__internal_6e86a1285954223f7ca32a99bdee367fc1bb06a427eb940410d4b7a95adb7e19->leave($__internal_6e86a1285954223f7ca32a99bdee367fc1bb06a427eb940410d4b7a95adb7e19_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  125 => 45,  123 => 44,  118 => 41,  109 => 37,  103 => 34,  100 => 33,  98 => 32,  93 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Liste Des Etudiants</h1>
<div class=\"table-wrapper\">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Cne</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for etudiant in etudiants %}
            <tr>
                <td><a href=\"{{ path('GestionEtudiant_show', { 'id': etudiant.id }) }}\">{{ etudiant.id }}</a></td>
                <td>{{ etudiant.nom }}</td>
                <td>{{ etudiant.prenom }}</td>
                <td>{{ etudiant.cne }}</td>
                <td>{{ etudiant.email }}</td>
                <td>{{ etudiant.adresse }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('GestionEtudiant_show', { 'id': etudiant.id }) }}\"><span class=\"icon fa-list\"></span></a>
                        </li>
                        {% if is_granted('ROLE_ADMIN') %}
                        <li>
                            <a href=\"{{ path('GestionEtudiant_edit', { 'id': etudiant.id }) }}\"><span class=\"icon fa-pencil\"></span> </a>
                        </li>
                        {% endif %}
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
    {% if is_granted('ROLE_ADMIN') %}
     <ul>
        <li>
            <a href=\"{{ path('GestionEtudiant_new') }}\">Ajouter un nouveau etudiant</a>
        </li>
     </ul>
    {% endif %}
{% endblock %}
", "etudiant/index.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\etudiant\\index.html.twig");
    }
}
