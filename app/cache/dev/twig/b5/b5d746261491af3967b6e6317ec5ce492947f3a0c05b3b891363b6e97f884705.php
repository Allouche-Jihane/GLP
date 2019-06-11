<?php

/* etudiant/new.html.twig */
class __TwigTemplate_f37baa06c5db6357aa6b877906d899717235258571431dc5e1392a853b0da376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/new.html.twig", 1);
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
        $__internal_0aa23179ae42f8f0231b5019bb12253718ea9a6f214ddf327cef18c830760004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa23179ae42f8f0231b5019bb12253718ea9a6f214ddf327cef18c830760004->enter($__internal_0aa23179ae42f8f0231b5019bb12253718ea9a6f214ddf327cef18c830760004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etudiant/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aa23179ae42f8f0231b5019bb12253718ea9a6f214ddf327cef18c830760004->leave($__internal_0aa23179ae42f8f0231b5019bb12253718ea9a6f214ddf327cef18c830760004_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89cf26c2239f561cba18e2253a0fb91480fa422e3b3cb0aff56e462f59523744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89cf26c2239f561cba18e2253a0fb91480fa422e3b3cb0aff56e462f59523744->enter($__internal_89cf26c2239f561cba18e2253a0fb91480fa422e3b3cb0aff56e462f59523744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ajouter</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Ajouter\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
   <br>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_index");
        echo "\"><span class=\"icon fa-backward\"></a>

";
        
        $__internal_89cf26c2239f561cba18e2253a0fb91480fa422e3b3cb0aff56e462f59523744->leave($__internal_89cf26c2239f561cba18e2253a0fb91480fa422e3b3cb0aff56e462f59523744_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>ajouter</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Ajouter\" />
    {{ form_end(form) }}
   <br>
            <a href=\"{{ path('GestionEtudiant_index') }}\"><span class=\"icon fa-backward\"></a>

{% endblock %}
", "etudiant/new.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\etudiant\\new.html.twig");
    }
}
