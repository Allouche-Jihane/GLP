<?php

/* notes/edit.html.twig */
class __TwigTemplate_c2fff0a66159c14ad0dfd4adb1f990ae5223fdb17e86ba47900a16231e89c302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "notes/edit.html.twig", 1);
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
        $__internal_28f745f5ef380e7d92d928267b93f2b6950c2bd19dcdd31b85e070474648d068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f745f5ef380e7d92d928267b93f2b6950c2bd19dcdd31b85e070474648d068->enter($__internal_28f745f5ef380e7d92d928267b93f2b6950c2bd19dcdd31b85e070474648d068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notes/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f745f5ef380e7d92d928267b93f2b6950c2bd19dcdd31b85e070474648d068->leave($__internal_28f745f5ef380e7d92d928267b93f2b6950c2bd19dcdd31b85e070474648d068_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_793827d96dfc3b40303211d8abb690b22e6055fc8b1d518036c51607fc411515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793827d96dfc3b40303211d8abb690b22e6055fc8b1d518036c51607fc411515->enter($__internal_793827d96dfc3b40303211d8abb690b22e6055fc8b1d518036c51607fc411515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Note edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Modifier\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionNotes_index");
        echo "\"><span class=\"icon fa-backward\"></a>
        <br>
            ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_793827d96dfc3b40303211d8abb690b22e6055fc8b1d518036c51607fc411515->leave($__internal_793827d96dfc3b40303211d8abb690b22e6055fc8b1d518036c51607fc411515_prof);

    }

    public function getTemplateName()
    {
        return "notes/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  64 => 14,  59 => 12,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Note edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Modifier\" />
    {{ form_end(edit_form) }}


            <a href=\"{{ path('gestionNotes_index') }}\"><span class=\"icon fa-backward\"></a>
        <br>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}

{% endblock %}
", "notes/edit.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\notes\\edit.html.twig");
    }
}
