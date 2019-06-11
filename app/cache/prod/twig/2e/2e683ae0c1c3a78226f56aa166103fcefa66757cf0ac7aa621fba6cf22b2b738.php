<?php

/* announce/index.html.twig */
class __TwigTemplate_154a8986d716d651e237abc9d22b60a6170de302f514e2030302e4cb7d36d0b8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <br>

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["announces"] ?? null));
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
$context["announce"], "compte", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))) {
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
        return array (  107 => 39,  101 => 35,  93 => 32,  88 => 30,  83 => 29,  81 => 28,  77 => 27,  72 => 26,  70 => 25,  62 => 20,  53 => 16,  46 => 12,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "announce/index.html.twig", "D:\\wamp64\\www\\GLPI (1)\\GL\\app\\Resources\\views\\announce\\index.html.twig");
    }
}
