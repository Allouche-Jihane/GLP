<?php

/* etudiant/show.html.twig */
class __TwigTemplate_b24615e97b6ff9c40245561e3bba8184c12110406061505970f196ab02e3af08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/show.html.twig", 1);
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
        echo "    <h1>Etudiant</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? null), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? null), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cne</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? null), "cne", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? null), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datenaissence</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["etudiant"] ?? null), "dateNaissence", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["etudiant"] ?? null), "dateNaissence", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Dateinscription</th>
                <td>";
        // line 34
        if ($this->getAttribute(($context["etudiant"] ?? null), "dateInscription", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["etudiant"] ?? null), "dateInscription", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? null), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    ";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
    <input type=\"submit\" value=\"Delete\">
    ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
<br><br>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_index");
        echo "\"><span class=\"icon fa-backward\"> - la liste</a>
<br>

        ";
        // line 49
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 50
            echo "
            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_edit", array("id" => $this->getAttribute(($context["etudiant"] ?? null), "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-pencil\">- modifier</a>
            <br>
        ";
        }
        // line 54
        echo "



";
    }

    public function getTemplateName()
    {
        return "etudiant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 54,  120 => 51,  117 => 50,  115 => 49,  109 => 46,  104 => 44,  99 => 42,  92 => 38,  83 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "etudiant/show.html.twig", "D:\\wamp64\\www\\GLPI (1)\\GL\\app\\Resources\\views\\etudiant\\show.html.twig");
    }
}
