<?php

/* GestionLpiBundle:Default:index.html.twig */
class __TwigTemplate_b5a7e4e956128dc14c889565e4778fde3a19893e4abcef2af22bdba678a27a15 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div style=\"width: 80%;
    padding-left: 150px;\" >
            ";
        // line 5
        if (($context["error"] ?? null)) {
            // line 6
            echo "                <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "message", array())), "html", null, true);
            echo "</div>
            ";
        }
        // line 8
        echo "
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["announces"] ?? null));
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
        return array (  101 => 35,  93 => 32,  88 => 30,  83 => 29,  81 => 28,  73 => 23,  64 => 19,  57 => 15,  50 => 10,  46 => 9,  43 => 8,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GestionLpiBundle:Default:index.html.twig", "D:\\wamp64\\www\\GLPI (1)\\src\\GestionLpiBundle/Resources/views/Default/index.html.twig");
    }
}
