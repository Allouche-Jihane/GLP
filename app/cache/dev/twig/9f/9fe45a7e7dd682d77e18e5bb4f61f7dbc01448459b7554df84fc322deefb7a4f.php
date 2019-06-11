<?php

/* matiere/index.html.twig */
class __TwigTemplate_8780c408f300e92734ea7c3c7c3b54b7f22474977c7c6f64172bc86f61b82a8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matiere/index.html.twig", 1);
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
        $__internal_2eb5392180c629711cfbf06b39213a8bb19d21eca65fd6d1e4898dd548194cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb5392180c629711cfbf06b39213a8bb19d21eca65fd6d1e4898dd548194cbb->enter($__internal_2eb5392180c629711cfbf06b39213a8bb19d21eca65fd6d1e4898dd548194cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matiere/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eb5392180c629711cfbf06b39213a8bb19d21eca65fd6d1e4898dd548194cbb->leave($__internal_2eb5392180c629711cfbf06b39213a8bb19d21eca65fd6d1e4898dd548194cbb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fff17af726a231033fdf3961a46e700761d0a450818ee26c40771097e05b927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fff17af726a231033fdf3961a46e700761d0a450818ee26c40771097e05b927->enter($__internal_3fff17af726a231033fdf3961a46e700761d0a450818ee26c40771097e05b927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Matieres list</h1>
<div class=\"table-wrapper\">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nommatiere</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionMatiere_show", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nomMatiere", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionMatiere_show", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-list\"></a>

                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionMatiere_edit", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-pencil\"></a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
</div>
    <br>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionMatiere_new");
        echo "\">Ajouter une nouvelle matiere</a>

";
        
        $__internal_3fff17af726a231033fdf3961a46e700761d0a450818ee26c40771097e05b927->leave($__internal_3fff17af726a231033fdf3961a46e700761d0a450818ee26c40771097e05b927_prof);

    }

    public function getTemplateName()
    {
        return "matiere/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  92 => 29,  81 => 24,  76 => 22,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Matieres list</h1>
<div class=\"table-wrapper\">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nommatiere</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for matiere in matieres %}
            <tr>
                <td><a href=\"{{ path('GestionMatiere_show', { 'id': matiere.id }) }}\">{{ matiere.id }}</a></td>
                <td>{{ matiere.nomMatiere }}</td>
                <td>{{ matiere.description }}</td>
                <td>
                            <a href=\"{{ path('GestionMatiere_show', { 'id': matiere.id }) }}\"><span class=\"icon fa-list\"></a>

                            <a href=\"{{ path('GestionMatiere_edit', { 'id': matiere.id }) }}\"><span class=\"icon fa-pencil\"></a>

                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
    <br>
            <a href=\"{{ path('GestionMatiere_new') }}\">Ajouter une nouvelle matiere</a>

{% endblock %}
", "matiere/index.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\matiere\\index.html.twig");
    }
}
