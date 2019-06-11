<?php

/* notes/ajouterNotes.html.twig */
class __TwigTemplate_57c38cc3e53111e7c3e9460902a0299e5ea5d05c59740a5825cb275274abd57a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "notes/ajouterNotes.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javaScript' => array($this, 'block_javaScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_430da68951d73ca56aaf6a6dd3ec2c44f4bafa9ee772b6e9431bd2e295575b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430da68951d73ca56aaf6a6dd3ec2c44f4bafa9ee772b6e9431bd2e295575b44->enter($__internal_430da68951d73ca56aaf6a6dd3ec2c44f4bafa9ee772b6e9431bd2e295575b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notes/ajouterNotes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430da68951d73ca56aaf6a6dd3ec2c44f4bafa9ee772b6e9431bd2e295575b44->leave($__internal_430da68951d73ca56aaf6a6dd3ec2c44f4bafa9ee772b6e9431bd2e295575b44_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73f907c1aed953afe3b343ad22e7af4f9f233c2086a092d06bf6adf171d87ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f907c1aed953afe3b343ad22e7af4f9f233c2086a092d06bf6adf171d87ec8->enter($__internal_73f907c1aed953afe3b343ad22e7af4f9f233c2086a092d06bf6adf171d87ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>list des etudiants</h1>
                    <div id=\"message\" style=\"margin: 30px 0;\">


                    </div>
                   <div>
                       <label for=\"Desc\" style=\"display: inline\">Nom ou id pour la note: </label>
                       <input type=\"text\" id=\"Desc\" name=\"Desc\">
                       ";
        // line 12
        if (array_key_exists("matieres", $context)) {
            // line 13
            echo "                       <select name=\"matiere\" id=\"matiere\" style=\"width: 200px!important; display: inline; max-height: 30px;\">
                           ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
            foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
                // line 15
                echo "                               ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 16
                    echo "                                   <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "id", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nomMatiere", array()), "html", null, true);
                    echo "</option>
                               ";
                } elseif (($this->getAttribute(                // line 17
$context["matiere"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "matiere", array()), "id", array()))) {
                    // line 18
                    echo "                                   <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "id", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nomMatiere", array()), "html", null, true);
                    echo "</option>

                               ";
                } else {
                    // line 21
                    echo "                                   <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "id", array()), "html", null, true);
                    echo "\" disabled>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nomMatiere", array()), "html", null, true);
                    echo "</option>
                               ";
                }
                // line 23
                echo "                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                       </select>
                       ";
        }
        // line 26
        echo "                       <br><br><br>
                   </div>
<div class=\"table-wrapper\">
    <table>
        <thead>
            <tr>
                <th>CNE : </th>
                <th>Nom :</th>
                <th>Prenom :</th>
                <th>Note:</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etudiands"]) ? $context["etudiands"] : $this->getContext($context, "etudiands")));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 41
            echo "            <tr>
                <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_show", array("id" => $this->getAttribute($context["etudiant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "cne", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        </li>
                            <div style=\"display: none\">
                                <input  data-etId=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" id=\"note_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" name=\"note_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" checked=\"checked\" type=\"checkbox\" style=\"display: none\"/>
                                <label for=\"note_";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" class=\"label-danger\"></label>
                            </div>
                            <div class=\"material-switch\" style=\"display: inline\">

                                    <input  data-etId=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" id=\"note1_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" name=\"note1_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" type=\"number\"/>
                                    <label for=\"note1_";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "\" class=\"label-danger\"></label>

                            </div>
                        </li>
                    </ul>
                </td>
                <td>

                            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_show", array("id" => $this->getAttribute($context["etudiant"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-list\"></span></a>


                            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_edit", array("id" => $this->getAttribute($context["etudiant"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-pencil\"></span></a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>
    <div class=\"span12\" >
        <button class=\" btn btn-primary pull-right\" id=\"submit\">Valider</button>
    </div>
</div>

";
        
        $__internal_73f907c1aed953afe3b343ad22e7af4f9f233c2086a092d06bf6adf171d87ec8->leave($__internal_73f907c1aed953afe3b343ad22e7af4f9f233c2086a092d06bf6adf171d87ec8_prof);

    }

    // line 79
    public function block_javaScript($context, array $blocks = array())
    {
        $__internal_ddcecbce69a7175361516489aeea27930d4998b8079df7423cf68bf2dabb614c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddcecbce69a7175361516489aeea27930d4998b8079df7423cf68bf2dabb614c->enter($__internal_ddcecbce69a7175361516489aeea27930d4998b8079df7423cf68bf2dabb614c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javaScript"));

        // line 80
        echo "    <!-- Scripts -->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/skel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/util.js"), "html", null, true);
        echo "\"></script>
    <!--[if lte IE 8]><script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ie/respond.min.js"), "html", null, true);
        echo "\"></script><![endif]-->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/javaScriptNote.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ddcecbce69a7175361516489aeea27930d4998b8079df7423cf68bf2dabb614c->leave($__internal_ddcecbce69a7175361516489aeea27930d4998b8079df7423cf68bf2dabb614c_prof);

    }

    public function getTemplateName()
    {
        return "notes/ajouterNotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 86,  232 => 85,  228 => 84,  224 => 83,  220 => 82,  216 => 81,  213 => 80,  207 => 79,  193 => 71,  182 => 66,  176 => 63,  165 => 55,  157 => 54,  150 => 50,  140 => 49,  132 => 44,  128 => 43,  122 => 42,  119 => 41,  115 => 40,  99 => 26,  95 => 24,  89 => 23,  81 => 21,  72 => 18,  70 => 17,  63 => 16,  60 => 15,  56 => 14,  53 => 13,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
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
                       <label for=\"Desc\" style=\"display: inline\">Nom ou id pour la note: </label>
                       <input type=\"text\" id=\"Desc\" name=\"Desc\">
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
                <th>Note:</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for etudiant in etudiands %}
            <tr>
                <td><a href=\"{{ path('GestionEtudiant_show', { 'id': etudiant.id }) }}\">{{ etudiant.cne }}</a></td>
                <td>{{ etudiant.nom }}</td>
                <td>{{ etudiant.prenom }}</td>
                <td>
                    <ul>
                        </li>
                            <div style=\"display: none\">
                                <input  data-etId=\"{{ etudiant.id }}\" id=\"note_{{ etudiant.id }}\" name=\"note_{{ etudiant.id }}\" value=\"{{ etudiant.id }}\" checked=\"checked\" type=\"checkbox\" style=\"display: none\"/>
                                <label for=\"note_{{ etudiant.id }}\" class=\"label-danger\"></label>
                            </div>
                            <div class=\"material-switch\" style=\"display: inline\">

                                    <input  data-etId=\"{{ etudiant.id }}\" id=\"note1_{{ etudiant.id }}\" name=\"note1_{{ etudiant.id }}\" type=\"number\"/>
                                    <label for=\"note1_{{ etudiant.id }}\" class=\"label-danger\"></label>

                            </div>
                        </li>
                    </ul>
                </td>
                <td>

                            <a href=\"{{ path('GestionEtudiant_show', { 'id': etudiant.id }) }}\"><span class=\"icon fa-list\"></span></a>


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
{% block javaScript %}
    <!-- Scripts -->
    <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/skel.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/util.js') }}\"></script>
    <!--[if lte IE 8]><script src=\"{{ asset('assets/js/ie/respond.min.js') }}\"></script><![endif]-->
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>
    <script src=\"{{ asset('assets/js/javaScriptNote.js') }}\"></script>
{% endblock %}
", "notes/ajouterNotes.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\notes\\ajouterNotes.html.twig");
    }
}
