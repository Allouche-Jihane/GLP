<?php

/* GestionLpiBundle:Default:home.html.twig */
class __TwigTemplate_57faa4405c526fa2f029b858632bddae68ab9440e303d3da6a2f66bc973c0632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GestionLpiBundle:Default:home.html.twig", 1);
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
        $__internal_602b8608f50ebfae083fe4f1a8f8e48a9aeae2f22cf0922c77dc768b6ce339aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602b8608f50ebfae083fe4f1a8f8e48a9aeae2f22cf0922c77dc768b6ce339aa->enter($__internal_602b8608f50ebfae083fe4f1a8f8e48a9aeae2f22cf0922c77dc768b6ce339aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionLpiBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_602b8608f50ebfae083fe4f1a8f8e48a9aeae2f22cf0922c77dc768b6ce339aa->leave($__internal_602b8608f50ebfae083fe4f1a8f8e48a9aeae2f22cf0922c77dc768b6ce339aa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c04acd8fcb8c850458fa873d8d1537cefab0ef15d6cd92aa4133f1770a485a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04acd8fcb8c850458fa873d8d1537cefab0ef15d6cd92aa4133f1770a485a4b->enter($__internal_c04acd8fcb8c850458fa873d8d1537cefab0ef15d6cd92aa4133f1770a485a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"div_chart\"></div>

    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 7
        echo $this->env->getExtension('CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension')->draw((isset($context["bar"]) ? $context["bar"] : $this->getContext($context, "bar")), "div_chart");
        echo "
    </script>
";
        
        $__internal_c04acd8fcb8c850458fa873d8d1537cefab0ef15d6cd92aa4133f1770a485a4b->leave($__internal_c04acd8fcb8c850458fa873d8d1537cefab0ef15d6cd92aa4133f1770a485a4b_prof);

    }

    public function getTemplateName()
    {
        return "GestionLpiBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
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
    <div id=\"div_chart\"></div>

    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        {{ gc_draw(bar, 'div_chart') }}
    </script>
{% endblock %}", "GestionLpiBundle:Default:home.html.twig", "C:\\GLPI_test\\GLPI\\src\\GestionLpiBundle/Resources/views/Default/home.html.twig");
    }
}
