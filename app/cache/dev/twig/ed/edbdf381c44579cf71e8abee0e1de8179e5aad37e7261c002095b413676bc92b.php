<?php

/* notes/index.html.twig */
class __TwigTemplate_2e284345873d7943e81bc212cc1103125e068949d3758674268d3212ef25db8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "notes/index.html.twig", 1);
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
        $__internal_4cb95b25c307ae7f97778915120df83097ad734a3236a2fce56b300e332a06bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb95b25c307ae7f97778915120df83097ad734a3236a2fce56b300e332a06bd->enter($__internal_4cb95b25c307ae7f97778915120df83097ad734a3236a2fce56b300e332a06bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notes/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cb95b25c307ae7f97778915120df83097ad734a3236a2fce56b300e332a06bd->leave($__internal_4cb95b25c307ae7f97778915120df83097ad734a3236a2fce56b300e332a06bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_21addedcfcddb78051a49de4c16adcdeda2b259e66820b08d48076c21771375c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21addedcfcddb78051a49de4c16adcdeda2b259e66820b08d48076c21771375c->enter($__internal_21addedcfcddb78051a49de4c16adcdeda2b259e66820b08d48076c21771375c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notes list</h1>
    <div class=\"filtration\" style=\"\">

    </div>

<div class=\"table-wrapper\">
    <table>
        <tr>
            <td><input type=\"text\" id=\"searchCNE\" onkeyup=\"searchcne()\" placeholder=\"cne..\" style=\"width: inherit;\"></td>
            <td><input type=\"text\" id=\"searchNom\" onkeyup=\"searchname()\" placeholder=\"nom..\" style=\"width: inherit;\"></td>
            <td><input type=\"text\" id=\"searchPrenom\" onkeyup=\"searchprenom()\" placeholder=\"prenom..\" style=\"width: inherit;\"></td>
        </tr>
        <tr>
            <td><input type=\"text\" id=\"searchNote\" onkeyup=\"searchnote()\" placeholder=\"note..\" style=\"width: inherit;\"></td>
            <td><input type=\"text\" id=\"searchMatiere\" onkeyup=\"searchmatiere()\" placeholder=\"matiere..\" style=\"width: inherit;\"></td>
            <td><input type=\"text\" id=\"searchDesc\" onkeyup=\"searchdesc()\" placeholder=\"description..\" style=\"width: inherit;\"></td>
        </tr>
    </table>
    <table id=\"notes\">
        <thead>
            <tr>
                <th>cne</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Note</th>
                <th>Matiere</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "etudiant", array()), "cne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "etudiant", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "etudiant", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "note", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "matiere", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li style=\"list-style: none; display: inline\">
                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionNotes_show", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-list\"></span></a>
                        </li>
                        ";
            // line 48
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 49
                echo "                            <li style=\"list-style: none; display: inline\">
                                <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_edit", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
                echo "\"><span class=\"icon fa-pencil\"></span></a>
                            </li>
                        ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 52
$context["note"], "matiere", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "matiere", array()), "id", array()))) {
                // line 53
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionNotes_edit", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
                echo "\"><span class=\"icon fa-pencil\"></span></a>

                        ";
            } else {
                // line 56
                echo "                            <li style=\"list-style: none; display: inline\">
                                <a id=\"ban\" href=\"#\"><span class=\"icon fa-ban\"></span></a>
                            </li>
                        ";
            }
            // line 60
            echo "                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>
</div>
    <ul>
        <li>
            <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionNotes_new");
        echo "\">Create a new note</a>
        </li>
    </ul>
    <ul class=\"pagination\">
        <li><span class=\"button disabled\">Prev</span></li>
        <li><a href=\"#\" class=\"page active\">1</a></li>
        <li><a href=\"#\" class=\"page\">2</a></li>
        <li><a href=\"#\" class=\"page\">3</a></li>
        <li><span>…</span></li>
        <li><a href=\"#\" class=\"page\">8</a></li>
        <li><a href=\"#\" class=\"page\">9</a></li>
        <li><a href=\"#\" class=\"page\">10</a></li>
        <li><a href=\"#\" class=\"button\">Next</a></li>
    </ul>
";
        
        $__internal_21addedcfcddb78051a49de4c16adcdeda2b259e66820b08d48076c21771375c->leave($__internal_21addedcfcddb78051a49de4c16adcdeda2b259e66820b08d48076c21771375c_prof);

    }

    // line 84
    public function block_javaScript($context, array $blocks = array())
    {
        $__internal_ef6d72af6153f948649bb8c87a754e6da8aeb1d711350393d40fc934c18a8414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6d72af6153f948649bb8c87a754e6da8aeb1d711350393d40fc934c18a8414->enter($__internal_ef6d72af6153f948649bb8c87a754e6da8aeb1d711350393d40fc934c18a8414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javaScript"));

        // line 85
        echo "    <!-- Scripts -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/skel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/util.js"), "html", null, true);
        echo "\"></script>
    <!--[if lte IE 8]><script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ie/respond.min.js"), "html", null, true);
        echo "\"></script><![endif]-->
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/javaScriptNote.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom_js.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_ef6d72af6153f948649bb8c87a754e6da8aeb1d711350393d40fc934c18a8414->leave($__internal_ef6d72af6153f948649bb8c87a754e6da8aeb1d711350393d40fc934c18a8414_prof);

    }

    public function getTemplateName()
    {
        return "notes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 92,  205 => 91,  201 => 90,  197 => 89,  193 => 88,  189 => 87,  185 => 86,  182 => 85,  176 => 84,  154 => 69,  147 => 64,  138 => 60,  132 => 56,  125 => 53,  123 => 52,  118 => 50,  115 => 49,  113 => 48,  108 => 46,  101 => 42,  97 => 41,  93 => 40,  89 => 39,  85 => 38,  81 => 37,  78 => 36,  74 => 35,  41 => 4,  35 => 3,  11 => 1,);
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
    <h1>Notes list</h1>
    <div class=\"filtration\" style=\"\">

    </div>

<div class=\"table-wrapper\">
    <table>
        <tr>
            <td><input type=\"text\" id=\"searchCNE\" onkeyup=\"searchcne()\" placeholder=\"cne..\" style=\"width: inherit;\"></td>
            <td><input type=\"text\" id=\"searchNom\" onkeyup=\"searchname()\" placeholder=\"nom..\" style=\"width: inherit;\"></td>
            <td><input type=\"text\" id=\"searchPrenom\" onkeyup=\"searchprenom()\" placeholder=\"prenom..\" style=\"width: inherit;\"></td>
        </tr>
        <tr>
            <td><input type=\"text\" id=\"searchNote\" onkeyup=\"searchnote()\" placeholder=\"note..\" style=\"width: inherit;\"></td>
            <td><input type=\"text\" id=\"searchMatiere\" onkeyup=\"searchmatiere()\" placeholder=\"matiere..\" style=\"width: inherit;\"></td>
            <td><input type=\"text\" id=\"searchDesc\" onkeyup=\"searchdesc()\" placeholder=\"description..\" style=\"width: inherit;\"></td>
        </tr>
    </table>
    <table id=\"notes\">
        <thead>
            <tr>
                <th>cne</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Note</th>
                <th>Matiere</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for note in notes %}
            <tr>
                <td>{{ note.etudiant.cne }}</td>
                <td>{{ note.etudiant.nom }}</td>
                <td>{{ note.etudiant.prenom }}</td>
                <td>{{ note.note }}</td>
                <td>{{ note.matiere }}</td>
                <td>{{ note.description }}</td>
                <td>
                    <ul>
                        <li style=\"list-style: none; display: inline\">
                            <a href=\"{{ path('gestionNotes_show', { 'id': note.id }) }}\"><span class=\"icon fa-list\"></span></a>
                        </li>
                        {% if is_granted('ROLE_ADMIN') %}
                            <li style=\"list-style: none; display: inline\">
                                <a href=\"{{ path('gestionAbsence_edit', { 'id': note.id }) }}\"><span class=\"icon fa-pencil\"></span></a>
                            </li>
                        {% elseif note.matiere.id == app.user.matiere.id %}
                            <a href=\"{{ path('gestionNotes_edit', { 'id': note.id }) }}\"><span class=\"icon fa-pencil\"></span></a>

                        {% else %}
                            <li style=\"list-style: none; display: inline\">
                                <a id=\"ban\" href=\"#\"><span class=\"icon fa-ban\"></span></a>
                            </li>
                        {% endif %}
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
    <ul>
        <li>
            <a href=\"{{ path('gestionNotes_new') }}\">Create a new note</a>
        </li>
    </ul>
    <ul class=\"pagination\">
        <li><span class=\"button disabled\">Prev</span></li>
        <li><a href=\"#\" class=\"page active\">1</a></li>
        <li><a href=\"#\" class=\"page\">2</a></li>
        <li><a href=\"#\" class=\"page\">3</a></li>
        <li><span>…</span></li>
        <li><a href=\"#\" class=\"page\">8</a></li>
        <li><a href=\"#\" class=\"page\">9</a></li>
        <li><a href=\"#\" class=\"page\">10</a></li>
        <li><a href=\"#\" class=\"button\">Next</a></li>
    </ul>
{% endblock %}
{% block javaScript %}
    <!-- Scripts -->
    <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/skel.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/util.js') }}\"></script>
    <!--[if lte IE 8]><script src=\"{{ asset('assets/js/ie/respond.min.js') }}\"></script><![endif]-->
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>
    <script src=\"{{ asset('assets/js/javaScriptNote.js') }}\"></script>
    <script src=\"{{ asset('assets/js/custom_js.js') }}\"></script>


{% endblock %}
", "notes/index.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\notes\\index.html.twig");
    }
}
