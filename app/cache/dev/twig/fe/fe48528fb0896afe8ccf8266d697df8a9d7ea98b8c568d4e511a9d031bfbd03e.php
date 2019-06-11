<?php

/* announce/new.html.twig */
class __TwigTemplate_789f3a3e229bfd3fa8cf593d2d659a10482bc50d6c753176cb3e0bd1dbe376e5 extends Twig_Template
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
        $__internal_c12391469539f265d94984fba02e42ece975f8077828bb5140d78d5168542ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12391469539f265d94984fba02e42ece975f8077828bb5140d78d5168542ecb->enter($__internal_c12391469539f265d94984fba02e42ece975f8077828bb5140d78d5168542ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "announce/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c12391469539f265d94984fba02e42ece975f8077828bb5140d78d5168542ecb->leave($__internal_c12391469539f265d94984fba02e42ece975f8077828bb5140d78d5168542ecb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af99f3ef24b373a2d96a10ac39be6e71b325de3490af6113f1948b3a36d259e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af99f3ef24b373a2d96a10ac39be6e71b325de3490af6113f1948b3a36d259e0->enter($__internal_af99f3ef24b373a2d96a10ac39be6e71b325de3490af6113f1948b3a36d259e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <table>
            <tbody>
            <tr>
                <td></td>
                <td>";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'row');
        echo "</td>
            </tr>
            <tr>
                <td></td>
                <td>";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "announceText", array()), 'row');
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Sauvgarder", array()), 'row');
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
        
        $__internal_af99f3ef24b373a2d96a10ac39be6e71b325de3490af6113f1948b3a36d259e0->leave($__internal_af99f3ef24b373a2d96a10ac39be6e71b325de3490af6113f1948b3a36d259e0_prof);

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
        return array (  90 => 37,  84 => 34,  72 => 25,  65 => 21,  57 => 16,  53 => 15,  49 => 14,  43 => 10,  40 => 4,  34 => 3,  11 => 1,);
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

    {#<h1>New Announce</h1>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}#}



    <h1>nouvelle Annonce</h1>
    <form action=\"{{ path('announce_new') }}\" method=\"post\">
        {{ form_row(form._token) }}
        {{ form_errors(form) }}
        <table>
            <tbody>
            <tr>
                <td></td>
                <td>{{ form_row(form.titre) }}</td>
            </tr>
            <tr>
                <td></td>
                <td>{{ form_row(form.announceText) }}

                    <script type=\"text/javascript\" >
                        CKEDITOR.replace(\"gestionlpibundle_announce_announceText\");
                    </script>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>{{ form_row(form.Sauvgarder) }}</td>
            </tr>
            <tr>
                <td colspan=\"2\"><a href=\"{{ path('announce_index') }}\"><span class=\"icon fa-backward\"></span></a> - la liste</td>
            </tr>
            </tbody>
        </table>
    </form>

{% endblock %}
", "announce/new.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\announce\\new.html.twig");
    }
}
