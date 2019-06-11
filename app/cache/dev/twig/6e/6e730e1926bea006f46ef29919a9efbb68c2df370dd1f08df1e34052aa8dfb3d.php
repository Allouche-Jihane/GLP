<?php

/* GestionLpiBundle:Default:index.html.twig */
class __TwigTemplate_c0e9a6b336466921ca7c2351f28d5703b3c42398a49bae1ea40586b4ae902e1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GestionLpiBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69b558350148b9c2b79ed37a10c8d447db1b9d6e657033b858aa94cd9137ec4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b558350148b9c2b79ed37a10c8d447db1b9d6e657033b858aa94cd9137ec4b->enter($__internal_69b558350148b9c2b79ed37a10c8d447db1b9d6e657033b858aa94cd9137ec4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionLpiBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69b558350148b9c2b79ed37a10c8d447db1b9d6e657033b858aa94cd9137ec4b->leave($__internal_69b558350148b9c2b79ed37a10c8d447db1b9d6e657033b858aa94cd9137ec4b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1117a1bd7faa448943235f2143fb23e3a133131e752f998aecaebe54dd04d46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1117a1bd7faa448943235f2143fb23e3a133131e752f998aecaebe54dd04d46b->enter($__internal_1117a1bd7faa448943235f2143fb23e3a133131e752f998aecaebe54dd04d46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div style=\"width: 80%;
    padding-left: 150px;\" >
            ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "                <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array())), "html", null, true);
            echo "</div>
            ";
        }
        // line 8
        echo "
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["announces"]) ? $context["announces"] : $this->getContext($context, "announces")));
        foreach ($context['_seq'] as $context["_key"] => $context["announce"]) {
            // line 10
            echo "                <hr class=\"style14\">

                <table>
                    <tr>
                        <th>Titre:</th>
                        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["announce"], "titre", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th> ecrit par:</th>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["announce"], "compte", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["announce"], "compte", array()), "prenom", array()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>";
            // line 23
            echo $this->getAttribute($context["announce"], "announceText", array());
            echo "</td>
                    </tr>


                </table>
                ";
            // line 28
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 29
                echo "                    <div style=\"text-align: right\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_edit", array("id" => $this->getAttribute($context["announce"], "id", array()))), "html", null, true);
                echo "\">edit</a> -
                        <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_delete", array("id" => $this->getAttribute($context["announce"], "id", array()))), "html", null, true);
                echo "\">delete</a></div>
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
        echo "</div>
";
        
        $__internal_1117a1bd7faa448943235f2143fb23e3a133131e752f998aecaebe54dd04d46b->leave($__internal_1117a1bd7faa448943235f2143fb23e3a133131e752f998aecaebe54dd04d46b_prof);

    }

    public function getTemplateName()
    {
        return "GestionLpiBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  102 => 32,  97 => 30,  92 => 29,  90 => 28,  82 => 23,  73 => 19,  66 => 15,  59 => 10,  55 => 9,  52 => 8,  46 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}
<div style=\"width: 80%;
    padding-left: 150px;\" >
            {% if error %}
                <div class=\"error\">{{ error.message|trans }}</div>
            {% endif %}

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
                    <div style=\"text-align: right\"><a href=\"{{ path('announce_edit', { 'id': announce.id }) }}\">edit</a> -
                        <a href=\"{{ path('announce_delete', { 'id': announce.id }) }}\">delete</a></div>
                {% endif %}


            {% endfor %}
</div>
{% endblock %}", "GestionLpiBundle:Default:index.html.twig", "C:\\GLPI_test\\GLPI\\src\\GestionLpiBundle/Resources/views/Default/index.html.twig");
    }
}
