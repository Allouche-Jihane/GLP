<?php

/* notes/show.html.twig */
class __TwigTemplate_019d71d667288f7710c8e576db4ae7073bf75a079102ea40b6b7b68fe29f6184 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "notes/show.html.twig", 1);
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
        $__internal_9d38a6931155fa3eb7531d627601e80152ca16d9b078925048818b1823174e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d38a6931155fa3eb7531d627601e80152ca16d9b078925048818b1823174e47->enter($__internal_9d38a6931155fa3eb7531d627601e80152ca16d9b078925048818b1823174e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notes/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d38a6931155fa3eb7531d627601e80152ca16d9b078925048818b1823174e47->leave($__internal_9d38a6931155fa3eb7531d627601e80152ca16d9b078925048818b1823174e47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_390b936ce1ea8d165c3d898f888ac3357023de72c0ea7a36108f802de3da258a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390b936ce1ea8d165c3d898f888ac3357023de72c0ea7a36108f802de3da258a->enter($__internal_390b936ce1ea8d165c3d898f888ac3357023de72c0ea7a36108f802de3da258a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Note</h1>

    <table>
        <tbody>
            <tr>
                <th>Etudiant</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "etudiant", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "etudiant", array()), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "note", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Matiere</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "matiere", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionNotes_index");
        echo "\">Back to the list</a>
        </li>
        ";
        // line 31
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "        <li>

            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionNotes_edit", array("id" => $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "id", array()))), "html", null, true);
            echo "\">Edit</a>

        </li>
        <li>
            ";
            // line 38
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
                <input type=\"submit\" value=\"Delete\">
            ";
            // line 40
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
        </li>
        ";
        }
        // line 43
        echo "    </ul>
";
        
        $__internal_390b936ce1ea8d165c3d898f888ac3357023de72c0ea7a36108f802de3da258a->leave($__internal_390b936ce1ea8d165c3d898f888ac3357023de72c0ea7a36108f802de3da258a_prof);

    }

    public function getTemplateName()
    {
        return "notes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 43,  104 => 40,  99 => 38,  92 => 34,  88 => 32,  86 => 31,  81 => 29,  71 => 22,  64 => 18,  57 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Note</h1>

    <table>
        <tbody>
            <tr>
                <th>Etudiant</th>
                <td>{{ note.etudiant.nom }} {{ note.etudiant.prenom }}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ note.note }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ note.description }}</td>
            </tr>
            <tr>
                <th>Matiere</th>
                <td>{{ note.matiere }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('gestionNotes_index') }}\">Back to the list</a>
        </li>
        {% if is_granted('ROLE_ADMIN') %}
        <li>

            <a href=\"{{ path('gestionNotes_edit', { 'id': note.id }) }}\">Edit</a>

        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
        {% endif %}
    </ul>
{% endblock %}
", "notes/show.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\notes\\show.html.twig");
    }
}
