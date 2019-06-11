<?php

/* compte/index.html.twig */
class __TwigTemplate_969ed7295061938945bc2b3efcabfd82f2b0c162d3408b94a5dd5011838ceae3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/index.html.twig", 1);
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
        $__internal_e32bd53f2fe514ea1e80ace37d91dedd5c6f46a1e61a88c2dd2cd05d91a6be9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32bd53f2fe514ea1e80ace37d91dedd5c6f46a1e61a88c2dd2cd05d91a6be9b->enter($__internal_e32bd53f2fe514ea1e80ace37d91dedd5c6f46a1e61a88c2dd2cd05d91a6be9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e32bd53f2fe514ea1e80ace37d91dedd5c6f46a1e61a88c2dd2cd05d91a6be9b->leave($__internal_e32bd53f2fe514ea1e80ace37d91dedd5c6f46a1e61a88c2dd2cd05d91a6be9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a25e111ea9ef7a17f08d4f85ce1b785daa17f9769e036795c2f4b66b1370f7d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25e111ea9ef7a17f08d4f85ce1b785daa17f9769e036795c2f4b66b1370f7d6->enter($__internal_a25e111ea9ef7a17f08d4f85ce1b785daa17f9769e036795c2f4b66b1370f7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>liste des comptes</h1>
<div class=\"table-wrapper\">
    <table border=\"1\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Login</th>
                <th>Status</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) ? $context["comptes"] : $this->getContext($context, "comptes")));
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionCompte_show", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "login", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionCompte_show", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-list\"></a>

                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionCompte_edit", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-pencil\"></a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
</div>


            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterCompte");
        echo "\">ajouter un nouveau Compte</a>

";
        
        $__internal_a25e111ea9ef7a17f08d4f85ce1b785daa17f9769e036795c2f4b66b1370f7d6->leave($__internal_a25e111ea9ef7a17f08d4f85ce1b785daa17f9769e036795c2f4b66b1370f7d6_prof);

    }

    public function getTemplateName()
    {
        return "compte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  107 => 35,  96 => 30,  91 => 28,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>liste des comptes</h1>
<div class=\"table-wrapper\">
    <table border=\"1\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Login</th>
                <th>Status</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for compte in comptes %}
            <tr>
                <td><a href=\"{{ path('GestionCompte_show', { 'id': compte.id }) }}\">{{ compte.id }}</a></td>
                <td>{{ compte.nom }}</td>
                <td>{{ compte.prenom }}</td>
                <td>{{ compte.login }}</td>
                <td>{{ compte.status }}</td>
                <td>{{ compte.email }}</td>
                <td>
                            <a href=\"{{ path('GestionCompte_show', { 'id': compte.id }) }}\"><span class=\"icon fa-list\"></a>

                            <a href=\"{{ path('GestionCompte_edit', { 'id': compte.id }) }}\"><span class=\"icon fa-pencil\"></a>

                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>


            <a href=\"{{ path('ajouterCompte') }}\">ajouter un nouveau Compte</a>

{% endblock %}
", "compte/index.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\compte\\index.html.twig");
    }
}
