<?php

/* absence/index.html.twig */
class __TwigTemplate_9a020c800c30d07fe28ca333b5d54ed42181cb1a0eede052773e03183f3b2002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "absence/index.html.twig", 1);
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
        echo "    <h1>liste d'absences</h1>
    <ul>
        <li style=\"list-style: none\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_new");
        echo "\" ></span>Ajouter Absence</a>
        </li>
    </ul>
<div class=\"table-wrapper\">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Dateabsence</th>
                <th>nom</th>
                <th>prenom</th>
                <th>Nombreheurs</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["absences"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_show", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            if ($this->getAttribute($context["absence"], "dateAbsence", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "dateAbsence", array()), "Y-m-d "), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "etudiant", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "etudiant", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "nombreHeurs", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li style=\"list-style: none; display: inline\">
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_show", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon fa-list\"></span></a>
                        </li>
                        ";
            // line 35
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 36
                echo "                        <li style=\"list-style: none; display: inline\">
                            <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_edit", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
                echo "\"><span class=\"icon fa-pencil\"></span></a>
                        </li>
                        ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 39
$context["absence"], "matiere", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "matiere", array()), "id", array()))) {
                // line 40
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_edit", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
                echo "\"><span class=\"icon fa-pencil\"></span></a>
                        ";
            } else {
                // line 42
                echo "                        <li style=\"list-style: none; display: inline\">
                            <a id=\"ban\" href=\"#\"><span class=\"icon fa-ban\"></span></a>
                        </li>
                        ";
            }
            // line 46
            echo "                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>
</div>

";
    }

    public function getTemplateName()
    {
        return "absence/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 50,  118 => 46,  112 => 42,  106 => 40,  104 => 39,  99 => 37,  96 => 36,  94 => 35,  89 => 33,  82 => 29,  78 => 28,  74 => 27,  68 => 26,  62 => 25,  59 => 24,  55 => 23,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "absence/index.html.twig", "D:\\wamp64\\www\\GLPI (1)\\GL\\app\\Resources\\views\\absence\\index.html.twig");
    }
}
