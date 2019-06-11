<?php

/* announce/index.html.twig */
class __TwigTemplate_50c5042411ffcd8082ba19cb939c4615af0ca645261d80467aac6eeca1e5c9f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "announce/index.html.twig", 1);
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
        $__internal_ab6182893c5de6b1981da2b23279d3c1b3f762cc73f3c06155073274c08c6d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6182893c5de6b1981da2b23279d3c1b3f762cc73f3c06155073274c08c6d62->enter($__internal_ab6182893c5de6b1981da2b23279d3c1b3f762cc73f3c06155073274c08c6d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "announce/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab6182893c5de6b1981da2b23279d3c1b3f762cc73f3c06155073274c08c6d62->leave($__internal_ab6182893c5de6b1981da2b23279d3c1b3f762cc73f3c06155073274c08c6d62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e9a838d9d1e1b098623fb55f165b16c657dc99cc3895ebf0c449b02b791a948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9a838d9d1e1b098623fb55f165b16c657dc99cc3895ebf0c449b02b791a948->enter($__internal_1e9a838d9d1e1b098623fb55f165b16c657dc99cc3895ebf0c449b02b791a948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["announces"]) ? $context["announces"] : $this->getContext($context, "announces")));
        foreach ($context['_seq'] as $context["_key"] => $context["announce"]) {
            // line 7
            echo "        <hr class=\"style14\">

        <table>
            <tr>
                <th>Titre:</th>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["announce"], "titre", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th> ecrit par:</th>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["announce"], "compte", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["announce"], "compte", array()), "prenom", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td></td>
                <td>";
            // line 20
            echo $this->getAttribute($context["announce"], "announceText", array());
            echo "</td>
            </tr>


        </table>
        ";
            // line 25
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 26
                echo "            <div style=\"text-align: right\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_edit", array("id" => $this->getAttribute($context["announce"], "id", array()))), "html", null, true);
                echo "\"><span class=\"icon fa-pencil\"></span></a>
                <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_delete", array("id" => $this->getAttribute($context["announce"], "id", array()))), "html", null, true);
                echo "\"><span class=\"icon fa-remove\"></span></a></div>
            ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 28
$context["announce"], "compte", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 29
                echo "                <div style=\"text-align: right\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_edit", array("id" => $this->getAttribute($context["announce"], "id", array()))), "html", null, true);
                echo "\"><span class=\"icon fa-pencil\"></span></a>
                    <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_delete", array("id" => $this->getAttribute($context["announce"], "id", array()))), "html", null, true);
                echo "\"><span class=\"icon fa-remove\"></span></a></div>
        ";
            }
            // line 32
            echo "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_new");
        echo "\">Ajouter une announce</a>
        </li>
    </ul>
";
        
        $__internal_1e9a838d9d1e1b098623fb55f165b16c657dc99cc3895ebf0c449b02b791a948->leave($__internal_1e9a838d9d1e1b098623fb55f165b16c657dc99cc3895ebf0c449b02b791a948_prof);

    }

    public function getTemplateName()
    {
        return "announce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 39,  110 => 35,  102 => 32,  97 => 30,  92 => 29,  90 => 28,  86 => 27,  81 => 26,  79 => 25,  71 => 20,  62 => 16,  55 => 12,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <br>

    {% for announce in announces %}
        <hr class=\"style14\">

        <table>
            <tr>
                <th>Titre:</th>
                <td>{{ announce.titre }}</td>
            </tr>
            <tr>
                <th> ecrit par:</th>
                <td>{{ announce.compte.nom }} {{ announce.compte.prenom }}</td>
            </tr>
            <tr>
                <td></td>
                <td>{{ announce.announceText|raw }}</td>
            </tr>


        </table>
        {% if is_granted('ROLE_ADMIN') %}
            <div style=\"text-align: right\"><a href=\"{{ path('announce_edit', { 'id': announce.id }) }}\"><span class=\"icon fa-pencil\"></span></a>
                <a href=\"{{ path('announce_delete', { 'id': announce.id }) }}\"><span class=\"icon fa-remove\"></span></a></div>
            {% elseif announce.compte.id == app.user.id  %}
                <div style=\"text-align: right\"><a href=\"{{ path('announce_edit', { 'id': announce.id }) }}\"><span class=\"icon fa-pencil\"></span></a>
                    <a href=\"{{ path('announce_delete', { 'id': announce.id }) }}\"><span class=\"icon fa-remove\"></span></a></div>
        {% endif %}


    {% endfor %}


    <ul>
        <li>
            <a href=\"{{ path('announce_new') }}\">Ajouter une announce</a>
        </li>
    </ul>
{% endblock %}
", "announce/index.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\announce\\index.html.twig");
    }
}
