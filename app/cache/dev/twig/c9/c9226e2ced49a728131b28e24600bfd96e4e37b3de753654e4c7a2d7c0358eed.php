<?php

/* announce/edit.html.twig */
class __TwigTemplate_f22bc705bc32e06fe80c0cf5c1fb019ed8fc9083be5b39412d0a21351b8d86cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "announce/edit.html.twig", 1);
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
        $__internal_337b07a2d345c7d2f6a4bbf514b83efe1f269977bb76d54edd1e04a804a3c086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337b07a2d345c7d2f6a4bbf514b83efe1f269977bb76d54edd1e04a804a3c086->enter($__internal_337b07a2d345c7d2f6a4bbf514b83efe1f269977bb76d54edd1e04a804a3c086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "announce/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_337b07a2d345c7d2f6a4bbf514b83efe1f269977bb76d54edd1e04a804a3c086->leave($__internal_337b07a2d345c7d2f6a4bbf514b83efe1f269977bb76d54edd1e04a804a3c086_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86bdbdc651f6c650a6d6264ae90c380a27006f0e319f66e8a4f6cae215d76396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86bdbdc651f6c650a6d6264ae90c380a27006f0e319f66e8a4f6cae215d76396->enter($__internal_86bdbdc651f6c650a6d6264ae90c380a27006f0e319f66e8a4f6cae215d76396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Announce edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    <script type=\"text/javascript\" >
        CKEDITOR.replace(\"gestionlpibundle_announce_announceText\");
    </script>
        <input type=\"submit\" value=\"modifier\" />
    ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_index");
        echo "\"><span class=\"fa-backward\"></span> - la liste</a>
        </li>
        <li>
            ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"supprimer\">
            ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_86bdbdc651f6c650a6d6264ae90c380a27006f0e319f66e8a4f6cae215d76396->leave($__internal_86bdbdc651f6c650a6d6264ae90c380a27006f0e319f66e8a4f6cae215d76396_prof);

    }

    public function getTemplateName()
    {
        return "announce/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  69 => 19,  63 => 16,  56 => 12,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Announce edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
    <script type=\"text/javascript\" >
        CKEDITOR.replace(\"gestionlpibundle_announce_announceText\");
    </script>
        <input type=\"submit\" value=\"modifier\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('announce_index') }}\"><span class=\"fa-backward\"></span> - la liste</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "announce/edit.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\announce\\edit.html.twig");
    }
}
