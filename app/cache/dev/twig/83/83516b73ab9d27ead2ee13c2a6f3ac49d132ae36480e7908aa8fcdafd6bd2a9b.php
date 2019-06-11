<?php

/* absence/ajouterAbcence.html.twig */
class __TwigTemplate_cee4f3f7d86b5f6fe74197fd249d25ca19fe57e13e4cfbb6b75f6ee15cfeadaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "absence/ajouterAbcence.html.twig", 1);
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
        $__internal_a13045f9c3a0c6413125ca66e03db52d337b206fcc16b99e296b7b9b398620e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13045f9c3a0c6413125ca66e03db52d337b206fcc16b99e296b7b9b398620e9->enter($__internal_a13045f9c3a0c6413125ca66e03db52d337b206fcc16b99e296b7b9b398620e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absence/ajouterAbcence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a13045f9c3a0c6413125ca66e03db52d337b206fcc16b99e296b7b9b398620e9->leave($__internal_a13045f9c3a0c6413125ca66e03db52d337b206fcc16b99e296b7b9b398620e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_521f072454308452893d809ce6104e01c6ca323286d5bb0677ca01aa733a380d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521f072454308452893d809ce6104e01c6ca323286d5bb0677ca01aa733a380d->enter($__internal_521f072454308452893d809ce6104e01c6ca323286d5bb0677ca01aa733a380d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>list des etudiants</h1>
                    <div id=\"message\" style=\"margin: 30px 0;\">


                    </div>
                   <div>
                       <label for=\"nbH\" style=\"display: inline\">Nombre des heurs : </label>
                       <input type=\"number\" id=\"nbH\" value=\"1\" min=\"1\" name=\"nbH\">
                       <label for=\"date\" style=\"display: inline\">date : </label>
                       <input type='datetime-local' class=\"form-control\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "Y-m-d hh:mm"), "html", null, true);
        echo "\" name=\"date\" id=\"date\"/>
                       ";
        // line 14
        if (array_key_exists("matieres", $context)) {
            // line 15
            echo "                       <select name=\"matiere\" id=\"matiere\" style=\"width: 200px!important; display: inline; max-height: 30px;\">
                           ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
            foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
                // line 17
                echo "                                ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 18
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "id", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nomMatiere", array()), "html", null, true);
                    echo "</option>
                                    ";
                } elseif (($this->getAttribute(                // line 19
$context["matiere"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "matiere", array()), "id", array()))) {
                    // line 20
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "id", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nomMatiere", array()), "html", null, true);
                    echo "</option>

                                ";
                } else {
                    // line 23
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "id", array()), "html", null, true);
                    echo "\" disabled>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nomMatiere", array()), "html", null, true);
                    echo "</option>
                                ";
                }
                // line 25
                echo "                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                       </select>
                       ";
        }
        // line 28
        echo "                       <br><br><br>
                   </div>
<div class=\"table-wrapper\">
    <table>
        <thead>
            <tr>
                <th>CNE : </th>
                <th>Nom :</th>
                <th>Prenom :</th>
                <th>Email :</th>
                <th>Adresse:</th>
                <th>Absent:</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etudiands"]) ? $context["etudiands"] : $this->getContext($context, "etudiands")));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 45
            echo "            <tr>
                <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_show", array("id" => $this->getAttribute($context["etudiant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "cne", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        </li>
                            <div class=\"material-switch\" style=\"display: inline\">
                                    <input  data-etId=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" id=\"abs_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" name=\"abs_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\"/>
                                    <label for=\"abs_";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" class=\"label-danger\"></label>
                            </div>
                        </li>
                    </ul>
                </td>

                <td>

                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_show", array("id" => $this->getAttribute($context["etudiant"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-list\"></span></a>

                        <br>
                            <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_edit", array("id" => $this->getAttribute($context["etudiant"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-pencil\"></span></a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </tbody>
    </table>

        <div class=\"span12\" >
            <button class=\" btn btn-primary pull-right\" id=\"submit\">Valider</button>
        </div>


</div>

";
        
        $__internal_521f072454308452893d809ce6104e01c6ca323286d5bb0677ca01aa733a380d->leave($__internal_521f072454308452893d809ce6104e01c6ca323286d5bb0677ca01aa733a380d_prof);

    }

    public function getTemplateName()
    {
        return "absence/ajouterAbcence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 72,  181 => 67,  175 => 64,  164 => 56,  154 => 55,  146 => 50,  142 => 49,  138 => 48,  134 => 47,  128 => 46,  125 => 45,  121 => 44,  103 => 28,  99 => 26,  93 => 25,  85 => 23,  76 => 20,  74 => 19,  67 => 18,  64 => 17,  60 => 16,  57 => 15,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>list des etudiants</h1>
                    <div id=\"message\" style=\"margin: 30px 0;\">


                    </div>
                   <div>
                       <label for=\"nbH\" style=\"display: inline\">Nombre des heurs : </label>
                       <input type=\"number\" id=\"nbH\" value=\"1\" min=\"1\" name=\"nbH\">
                       <label for=\"date\" style=\"display: inline\">date : </label>
                       <input type='datetime-local' class=\"form-control\" value=\"{{ date|date('Y-m-d hh:mm') }}\" name=\"date\" id=\"date\"/>
                       {% if matieres is defined %}
                       <select name=\"matiere\" id=\"matiere\" style=\"width: 200px!important; display: inline; max-height: 30px;\">
                           {% for matiere in matieres %}
                                {% if is_granted('ROLE_ADMIN') %}
                                    <option value=\"{{ matiere.id }}\" selected>{{ matiere.nomMatiere }}</option>
                                    {% elseif matiere.id == app.user.matiere.id %}
                                        <option value=\"{{ matiere.id }}\" selected>{{ matiere.nomMatiere }}</option>

                                {% else %}
                                <option value=\"{{ matiere.id }}\" disabled>{{ matiere.nomMatiere }}</option>
                                {% endif %}
                           {% endfor %}
                       </select>
                       {% endif %}
                       <br><br><br>
                   </div>
<div class=\"table-wrapper\">
    <table>
        <thead>
            <tr>
                <th>CNE : </th>
                <th>Nom :</th>
                <th>Prenom :</th>
                <th>Email :</th>
                <th>Adresse:</th>
                <th>Absent:</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for etudiant in etudiands %}
            <tr>
                <td><a href=\"{{ path('GestionEtudiant_show', { 'id': etudiant.id }) }}\">{{ etudiant.cne }}</a></td>
                <td>{{ etudiant.nom }}</td>
                <td>{{ etudiant.prenom }}</td>
                <td>{{ etudiant.email }}</td>
                <td>{{ etudiant.adresse }}</td>
                <td>
                    <ul>
                        </li>
                            <div class=\"material-switch\" style=\"display: inline\">
                                    <input  data-etId=\"{{ etudiant.id }}\" id=\"abs_{{ etudiant.id }}\" name=\"abs_{{ etudiant.id }}\" value=\"{{ etudiant.id }}\" type=\"checkbox\"/>
                                    <label for=\"abs_{{ etudiant.id }}\" class=\"label-danger\"></label>
                            </div>
                        </li>
                    </ul>
                </td>

                <td>

                            <a href=\"{{ path('GestionEtudiant_show', { 'id': etudiant.id }) }}\"><span class=\"icon fa-list\"></span></a>

                        <br>
                            <a href=\"{{ path('GestionEtudiant_edit', { 'id': etudiant.id }) }}\"><span class=\"icon fa-pencil\"></span></a>

                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

        <div class=\"span12\" >
            <button class=\" btn btn-primary pull-right\" id=\"submit\">Valider</button>
        </div>


</div>

{% endblock %}
", "absence/ajouterAbcence.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\absence\\ajouterAbcence.html.twig");
    }
}
