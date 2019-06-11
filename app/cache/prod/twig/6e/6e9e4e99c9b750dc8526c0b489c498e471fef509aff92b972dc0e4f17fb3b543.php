<?php

/* announce/new.html.twig */
class __TwigTemplate_943dfe352a7e91b1f48bfbc365a7f05fb3c3343490ed1e3a116d3fd28cffea96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "announce/new.html.twig", 1);
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
        echo "
    ";
        // line 10
        echo "


    <h1>nouvelle Annonce</h1>
    <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_new");
        echo "\" method=\"post\">
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        <table>
            <tbody>
            <tr>
                <td></td>
                <td>";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'row');
        echo "</td>
            </tr>
            <tr>
                <td></td>
                <td>";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "announceText", array()), 'row');
        echo "

                    <script type=\"text/javascript\" >
                        CKEDITOR.replace(\"gestionlpibundle_announce_announceText\");
                    </script>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Sauvgarder", array()), 'row');
        echo "</td>
            </tr>
            <tr>
                <td colspan=\"2\"><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_index");
        echo "\"><span class=\"icon fa-backward\"></span></a> - la liste</td>
            </tr>
            </tbody>
        </table>
    </form>

";
    }

    public function getTemplateName()
    {
        return "announce/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 37,  75 => 34,  63 => 25,  56 => 21,  48 => 16,  44 => 15,  40 => 14,  34 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "announce/new.html.twig", "D:\\wamp64\\www\\GLPI (1)\\GL\\app\\Resources\\views\\announce\\new.html.twig");
    }
}
