<?php

/* notes/ajouterNotes.html.twig */
class __TwigTemplate_7f712ab92a1d740d8b7a7827437c2068a59a34b54b5b4daeda17b5ca273ae205 extends Twig_Template
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
            $context['_seq'] = twig_ensure_traversable(($context["matieres"] ?? null));
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
$context["matiere"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "matiere", array()), "id", array()))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["etudiands"] ?? null));
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
    }

    // line 79
    public function block_javaScript($context, array $blocks = array())
    {
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
        return array (  221 => 86,  217 => 85,  213 => 84,  209 => 83,  205 => 82,  201 => 81,  198 => 80,  195 => 79,  184 => 71,  173 => 66,  167 => 63,  156 => 55,  148 => 54,  141 => 50,  131 => 49,  123 => 44,  119 => 43,  113 => 42,  110 => 41,  106 => 40,  90 => 26,  86 => 24,  80 => 23,  72 => 21,  63 => 18,  61 => 17,  54 => 16,  51 => 15,  47 => 14,  44 => 13,  42 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "notes/ajouterNotes.html.twig", "D:\\wamp64\\www\\GLPI (1)\\GL\\app\\Resources\\views\\notes\\ajouterNotes.html.twig");
    }
}
