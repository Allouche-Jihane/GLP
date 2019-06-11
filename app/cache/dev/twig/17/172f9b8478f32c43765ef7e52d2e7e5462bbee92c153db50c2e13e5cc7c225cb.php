<?php

/* matiere/show.html.twig */
class __TwigTemplate_65f8b0f85be6da5d3c582c697b03b9ee131691aa4086e131061efa38fc42a44a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matiere/show.html.twig", 1);
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
        $__internal_4f7d365edc14fcb0bdc444cf7fceb453bfe6e9f76147275488ead3d12d5ad731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7d365edc14fcb0bdc444cf7fceb453bfe6e9f76147275488ead3d12d5ad731->enter($__internal_4f7d365edc14fcb0bdc444cf7fceb453bfe6e9f76147275488ead3d12d5ad731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matiere/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f7d365edc14fcb0bdc444cf7fceb453bfe6e9f76147275488ead3d12d5ad731->leave($__internal_4f7d365edc14fcb0bdc444cf7fceb453bfe6e9f76147275488ead3d12d5ad731_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ee3e9f8fc82bba2ce0ca22799450b0fb38b3b8d5f8c064ea638100f22d886db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee3e9f8fc82bba2ce0ca22799450b0fb38b3b8d5f8c064ea638100f22d886db->enter($__internal_0ee3e9f8fc82bba2ce0ca22799450b0fb38b3b8d5f8c064ea638100f22d886db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Matiere</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nommatiere</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "nomMatiere", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>


            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionMatiere_index");
        echo "\"><span class=\"icon fa-backward\"> - la lise</a>
<br><br>
            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionMatiere_edit", array("id" => $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "id", array()))), "html", null, true);
        echo "\"><span class=\"icon fa-pencil\"> modifier</a>
        <br><br>
            ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_0ee3e9f8fc82bba2ce0ca22799450b0fb38b3b8d5f8c064ea638100f22d886db->leave($__internal_0ee3e9f8fc82bba2ce0ca22799450b0fb38b3b8d5f8c064ea638100f22d886db_prof);

    }

    public function getTemplateName()
    {
        return "matiere/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  81 => 28,  76 => 26,  71 => 24,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Matiere</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ matiere.id }}</td>
            </tr>
            <tr>
                <th>Nommatiere</th>
                <td>{{ matiere.nomMatiere }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ matiere.description }}</td>
            </tr>
        </tbody>
    </table>


            <a href=\"{{ path('GestionMatiere_index') }}\"><span class=\"icon fa-backward\"> - la lise</a>
<br><br>
            <a href=\"{{ path('GestionMatiere_edit', { 'id': matiere.id }) }}\"><span class=\"icon fa-pencil\"> modifier</a>
        <br><br>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}

{% endblock %}
", "matiere/show.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\matiere\\show.html.twig");
    }
}
