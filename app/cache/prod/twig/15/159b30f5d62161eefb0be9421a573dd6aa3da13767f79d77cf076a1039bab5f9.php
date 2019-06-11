<?php

/* compte/show.html.twig */
class __TwigTemplate_499fa158a80bb4dbd3595dd5f43b9de2e17a11b6c7a0a32d4e34162b20e63471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/show.html.twig", 1);
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
        echo "    <h1>Compte</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["compte"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["compte"] ?? null), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["compte"] ?? null), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["compte"] ?? null), "login", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["compte"] ?? null), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["compte"] ?? null), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 34
        if ($this->getAttribute(($context["compte"] ?? null), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["compte"] ?? null), "dateCreation", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datemodification</th>
                <td>";
        // line 38
        if ($this->getAttribute(($context["compte"] ?? null), "dateModification", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["compte"] ?? null), "dateModification", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["compte"] ?? null), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    ";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
    <input type=\"submit\" value=\"Supprimer\">
    ";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "



    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionCompte_index");
        echo "\"><span class=\"icon fa-backward\"> - la liste</a>
        <br>
            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionCompte_edit", array("id" => $this->getAttribute(($context["compte"] ?? null), "id", array()))), "html", null, true);
        echo "\"><span class=\"icon fa-pencil\"> modifier</a>
        <br><br>

";
    }

    public function getTemplateName()
    {
        return "compte/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 54,  118 => 52,  111 => 48,  106 => 46,  99 => 42,  90 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "compte/show.html.twig", "D:\\wamp64\\www\\GLPI (1)\\GL\\app\\Resources\\views\\compte\\show.html.twig");
    }
}
