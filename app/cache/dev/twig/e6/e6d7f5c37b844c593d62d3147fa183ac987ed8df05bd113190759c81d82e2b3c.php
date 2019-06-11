<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_66fbdc48d059ed29a3c32cf445bfadc1f1b97d4a0233a605822978eae2e78a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f69d29476f1fa86f8319151d7e9c53f93702067feb73a222907e417e1268b38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69d29476f1fa86f8319151d7e9c53f93702067feb73a222907e417e1268b38e->enter($__internal_f69d29476f1fa86f8319151d7e9c53f93702067feb73a222907e417e1268b38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f69d29476f1fa86f8319151d7e9c53f93702067feb73a222907e417e1268b38e->leave($__internal_f69d29476f1fa86f8319151d7e9c53f93702067feb73a222907e417e1268b38e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e2c8e35b238f1f6b76f04b3e3891ad6e21c2933f4a34fec5ec2bfc75dce289b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c8e35b238f1f6b76f04b3e3891ad6e21c2933f4a34fec5ec2bfc75dce289b7->enter($__internal_e2c8e35b238f1f6b76f04b3e3891ad6e21c2933f4a34fec5ec2bfc75dce289b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2c8e35b238f1f6b76f04b3e3891ad6e21c2933f4a34fec5ec2bfc75dce289b7->leave($__internal_e2c8e35b238f1f6b76f04b3e3891ad6e21c2933f4a34fec5ec2bfc75dce289b7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0134c13cb6fdc398ef0537ca99ddf77b101977857a1aeaca68bd71a4e33de1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0134c13cb6fdc398ef0537ca99ddf77b101977857a1aeaca68bd71a4e33de1ed->enter($__internal_0134c13cb6fdc398ef0537ca99ddf77b101977857a1aeaca68bd71a4e33de1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0134c13cb6fdc398ef0537ca99ddf77b101977857a1aeaca68bd71a4e33de1ed->leave($__internal_0134c13cb6fdc398ef0537ca99ddf77b101977857a1aeaca68bd71a4e33de1ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d4d3b369dd8d71aafb17e2c76a46a4a5310b0b39319a733aba69aa0a318ba0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4d3b369dd8d71aafb17e2c76a46a4a5310b0b39319a733aba69aa0a318ba0c->enter($__internal_4d4d3b369dd8d71aafb17e2c76a46a4a5310b0b39319a733aba69aa0a318ba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4d4d3b369dd8d71aafb17e2c76a46a4a5310b0b39319a733aba69aa0a318ba0c->leave($__internal_4d4d3b369dd8d71aafb17e2c76a46a4a5310b0b39319a733aba69aa0a318ba0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\GLPI_test\\GLPI\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
