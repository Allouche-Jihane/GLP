<?php

/* GestionLpiBundle:ajouterCompte:ajouterCompte.html.twig */
class __TwigTemplate_dbe42b3ebb0704391ed954f71f3c0c58a6ce84a4a46b2686aef33578d3579572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GestionLpiBundle:ajouterCompte:ajouterCompte.html.twig", 1);
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
        $__internal_f9206eb22ef430114e7f248f83a4ecb4718ca48874a41570419e4880941bbd54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9206eb22ef430114e7f248f83a4ecb4718ca48874a41570419e4880941bbd54->enter($__internal_f9206eb22ef430114e7f248f83a4ecb4718ca48874a41570419e4880941bbd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionLpiBundle:ajouterCompte:ajouterCompte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9206eb22ef430114e7f248f83a4ecb4718ca48874a41570419e4880941bbd54->leave($__internal_f9206eb22ef430114e7f248f83a4ecb4718ca48874a41570419e4880941bbd54_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbc49a738f445c8c7a2559b1472596325b555e917dbeec78d1a40d5e6d83040d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc49a738f445c8c7a2559b1472596325b555e917dbeec78d1a40d5e6d83040d->enter($__internal_cbc49a738f445c8c7a2559b1472596325b555e917dbeec78d1a40d5e6d83040d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section class=\"login\">
        <article>
            <h2> nouveau Compte </h2>
            <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterCompte");
        echo "\" method=\"post\">
                ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'row');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'row', array("label" => "password"));
        echo "
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'row', array("label" => "repeat password"));
        echo "
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "

                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                <input type=\"submit\" value=\"ajouter !\">

            </form>
        </article>
    </section>
";
        
        $__internal_cbc49a738f445c8c7a2559b1472596325b555e917dbeec78d1a40d5e6d83040d->leave($__internal_cbc49a738f445c8c7a2559b1472596325b555e917dbeec78d1a40d5e6d83040d_prof);

    }

    public function getTemplateName()
    {
        return "GestionLpiBundle:ajouterCompte:ajouterCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}


{% block body %}
    <section class=\"login\">
        <article>
            <h2> nouveau Compte </h2>
            <form action=\"{{ path('ajouterCompte') }}\" method=\"post\">
                {{ form_errors(form) }}
                {{ form_row(form.login) }}
                {{ form_row(form.password.first, {'label':'password'}) }}
                {{ form_row(form.password.second, {'label':'repeat password'}) }}
                {{ form_row(form.nom) }}
                {{ form_row(form.prenom) }}
                {{ form_row(form.email) }}

                {{ form_rest(form) }}

                <input type=\"submit\" value=\"ajouter !\">

            </form>
        </article>
    </section>
{% endblock %}
", "GestionLpiBundle:ajouterCompte:ajouterCompte.html.twig", "C:\\GLPI_test\\GLPI\\src\\GestionLpiBundle/Resources/views/ajouterCompte/ajouterCompte.html.twig");
    }
}
