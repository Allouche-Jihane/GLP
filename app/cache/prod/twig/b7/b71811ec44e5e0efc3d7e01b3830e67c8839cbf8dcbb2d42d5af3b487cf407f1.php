<?php

/* announce/show.html.twig */
class __TwigTemplate_e92d947a863577ad9562e3635c09b2f9997451d5d06121c294651053dc92e256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "announce/show.html.twig", 1);
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
    <h1>Announce</h1>
<div class=\"table-wrapper\">
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["announce"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["announce"] ?? null), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Announcetext</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["announce"] ?? null), "announceText", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 23
        if ($this->getAttribute(($context["announce"] ?? null), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["announce"] ?? null), "dateCreation", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datemodification</th>
                <td>";
        // line 27
        if ($this->getAttribute(($context["announce"] ?? null), "dateModification", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["announce"] ?? null), "dateModification", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>

            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_index");
        echo "\"><span class=\"fa-backward\"></span> - la liste  </a>
        <br>
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_edit", array("id" => $this->getAttribute(($context["announce"] ?? null), "id", array()))), "html", null, true);
        echo "\"><span class=\"fa-pencil\"></span> - modifier</a>
       <br>
    <br>
            ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "announce/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 40,  92 => 38,  86 => 35,  81 => 33,  70 => 27,  61 => 23,  54 => 19,  47 => 15,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "announce/show.html.twig", "D:\\wamp64\\www\\GLPI (1)\\GL\\app\\Resources\\views\\announce\\show.html.twig");
    }
}
