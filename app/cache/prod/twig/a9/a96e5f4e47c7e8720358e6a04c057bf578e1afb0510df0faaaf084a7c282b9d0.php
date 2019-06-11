<?php

/* absence/ajouterAbcence.html.twig */
class __TwigTemplate_f98b269ebdaff246aecf29ad3377eeb33cbf53d722649648e0243aec34dc8669 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), "Y-m-d hh:mm"), "html", null, true);
        echo "\" name=\"date\" id=\"date\"/>
                       ";
        // line 14
        if (array_key_exists("matieres", $context)) {
            // line 15
            echo "                       <select name=\"matiere\" id=\"matiere\" style=\"width: 200px!important; display: inline; max-height: 30px;\">
                           ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["matieres"] ?? null));
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
$context["matiere"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "matiere", array()), "id", array()))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["etudiands"] ?? null));
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
        return array (  183 => 72,  172 => 67,  166 => 64,  155 => 56,  145 => 55,  137 => 50,  133 => 49,  129 => 48,  125 => 47,  119 => 46,  116 => 45,  112 => 44,  94 => 28,  90 => 26,  84 => 25,  76 => 23,  67 => 20,  65 => 19,  58 => 18,  55 => 17,  51 => 16,  48 => 15,  46 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "absence/ajouterAbcence.html.twig", "D:\\wamp64\\www\\GLPI (1)\\GL\\app\\Resources\\views\\absence\\ajouterAbcence.html.twig");
    }
}
