<?php

/* etudiant/show.html.twig */
class __TwigTemplate_8a38fbb74756435829707b8053ca6e33c3de6b5b5d633aa1916923a9de45742e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/show.html.twig", 1);
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
        $__internal_9b36697add52c6b7dd04c6a8a6250beed24215eb69f808cef4c03bfb43a94329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b36697add52c6b7dd04c6a8a6250beed24215eb69f808cef4c03bfb43a94329->enter($__internal_9b36697add52c6b7dd04c6a8a6250beed24215eb69f808cef4c03bfb43a94329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etudiant/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b36697add52c6b7dd04c6a8a6250beed24215eb69f808cef4c03bfb43a94329->leave($__internal_9b36697add52c6b7dd04c6a8a6250beed24215eb69f808cef4c03bfb43a94329_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_098e3d91485f868949f08c1c24de6fa561dc73ae4d54ff91364d9157c4d13798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098e3d91485f868949f08c1c24de6fa561dc73ae4d54ff91364d9157c4d13798->enter($__internal_098e3d91485f868949f08c1c24de6fa561dc73ae4d54ff91364d9157c4d13798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Etudiant</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cne</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "cne", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datenaissence</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "dateNaissence", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "dateNaissence", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Dateinscription</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "dateInscription", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "dateInscription", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    ";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <input type=\"submit\" value=\"Delete\">
    ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
<br><br>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_index");
        echo "\"><span class=\"icon fa-backward\"> - la liste</a>
<br>

        ";
        // line 49
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 50
            echo "
            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_edit", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-pencil\">- modifier</a>
            <br>
        ";
        }
        // line 54
        echo "



";
        
        $__internal_098e3d91485f868949f08c1c24de6fa561dc73ae4d54ff91364d9157c4d13798->leave($__internal_098e3d91485f868949f08c1c24de6fa561dc73ae4d54ff91364d9157c4d13798_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 54,  129 => 51,  126 => 50,  124 => 49,  118 => 46,  113 => 44,  108 => 42,  101 => 38,  92 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Etudiant</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ etudiant.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ etudiant.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ etudiant.prenom }}</td>
            </tr>
            <tr>
                <th>Cne</th>
                <td>{{ etudiant.cne }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ etudiant.email }}</td>
            </tr>
            <tr>
                <th>Datenaissence</th>
                <td>{% if etudiant.dateNaissence %}{{ etudiant.dateNaissence|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Dateinscription</th>
                <td>{% if etudiant.dateInscription %}{{ etudiant.dateInscription|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ etudiant.adresse }}</td>
            </tr>
        </tbody>
    </table>
    {{ form_start(delete_form) }}
    <input type=\"submit\" value=\"Delete\">
    {{ form_end(delete_form) }}
<br><br>
            <a href=\"{{ path('GestionEtudiant_index') }}\"><span class=\"icon fa-backward\"> - la liste</a>
<br>

        {% if is_granted('ROLE_ADMIN') %}

            <a href=\"{{ path('GestionEtudiant_edit', { 'id': etudiant.id }) }}\"><span class=\"icon fa-pencil\">- modifier</a>
            <br>
        {% endif %}




{% endblock %}
", "etudiant/show.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\etudiant\\show.html.twig");
    }
}
