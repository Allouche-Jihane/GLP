<?php

/* GestionLpiBundle:Default:home.html.twig */
class __TwigTemplate_2e62ea5521e40c8af063556f842851c7980dcafaf23426fba943cec43d0963fe extends Twig_Template
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
        $__internal_bea7b08a8ed373f39b153cc604a8c0d09165369d11494846b60224e40a32720d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea7b08a8ed373f39b153cc604a8c0d09165369d11494846b60224e40a32720d->enter($__internal_bea7b08a8ed373f39b153cc604a8c0d09165369d11494846b60224e40a32720d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionLpiBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bea7b08a8ed373f39b153cc604a8c0d09165369d11494846b60224e40a32720d->leave($__internal_bea7b08a8ed373f39b153cc604a8c0d09165369d11494846b60224e40a32720d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ce97abab7ea9c351082541dffb7208ae2112931293dd3fc928a4a9cd6dd76dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce97abab7ea9c351082541dffb7208ae2112931293dd3fc928a4a9cd6dd76dc->enter($__internal_4ce97abab7ea9c351082541dffb7208ae2112931293dd3fc928a4a9cd6dd76dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br>
    <br>
    <div id=\"div_chart\"></div>
    <br>
    <br>
    <div id=\"div_charti\"></div>

    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 12
        echo $this->env->getExtension('CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension')->draw((isset($context["bar"]) ? $context["bar"] : $this->getContext($context, "bar")), "div_chart");
        echo "
        ";
        // line 13
        echo $this->env->getExtension('CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension')->draw((isset($context["baro"]) ? $context["baro"] : $this->getContext($context, "baro")), "div_charti");
        echo "

    </script>
";
        
        $__internal_4ce97abab7ea9c351082541dffb7208ae2112931293dd3fc928a4a9cd6dd76dc->leave($__internal_4ce97abab7ea9c351082541dffb7208ae2112931293dd3fc928a4a9cd6dd76dc_prof);

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
        return array (  55 => 13,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
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
    <br>
    <br>
    <div id=\"div_chart\"></div>
    <br>
    <br>
    <div id=\"div_charti\"></div>

    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        {{ gc_draw(bar, 'div_chart') }}
        {{ gc_draw(baro, 'div_charti') }}

    </script>
{% endblock %}", "GestionLpiBundle:Default:home.html.twig", "C:\\GLPI_test\\GLPI\\src\\GestionLpiBundle/Resources/views/Default/home.html.twig");
    }
}
