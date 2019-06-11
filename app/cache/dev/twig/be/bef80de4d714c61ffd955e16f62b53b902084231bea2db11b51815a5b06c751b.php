<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60d835df50e1c59fed72ee222ba08c888529f095f73a940519eaf321b1251cb7 extends Twig_Template
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
        $__internal_2ad9698a18f6c728e08496ab801977932cb311c5df5cbcac359d6543c38ed1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad9698a18f6c728e08496ab801977932cb311c5df5cbcac359d6543c38ed1a6->enter($__internal_2ad9698a18f6c728e08496ab801977932cb311c5df5cbcac359d6543c38ed1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ad9698a18f6c728e08496ab801977932cb311c5df5cbcac359d6543c38ed1a6->leave($__internal_2ad9698a18f6c728e08496ab801977932cb311c5df5cbcac359d6543c38ed1a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b66d1ce7c08d50ebf0180897edc6cc9995deb105acef751a63b2a4603026a388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66d1ce7c08d50ebf0180897edc6cc9995deb105acef751a63b2a4603026a388->enter($__internal_b66d1ce7c08d50ebf0180897edc6cc9995deb105acef751a63b2a4603026a388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b66d1ce7c08d50ebf0180897edc6cc9995deb105acef751a63b2a4603026a388->leave($__internal_b66d1ce7c08d50ebf0180897edc6cc9995deb105acef751a63b2a4603026a388_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98bd1c240d3cc763286eb8187b14366f260166f87dc7bebb339a3aac409fa467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98bd1c240d3cc763286eb8187b14366f260166f87dc7bebb339a3aac409fa467->enter($__internal_98bd1c240d3cc763286eb8187b14366f260166f87dc7bebb339a3aac409fa467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_98bd1c240d3cc763286eb8187b14366f260166f87dc7bebb339a3aac409fa467->leave($__internal_98bd1c240d3cc763286eb8187b14366f260166f87dc7bebb339a3aac409fa467_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1913376d4dd5f6766e813c92a6036586bf8fab19fde93034cfd79092b5d40e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1913376d4dd5f6766e813c92a6036586bf8fab19fde93034cfd79092b5d40e82->enter($__internal_1913376d4dd5f6766e813c92a6036586bf8fab19fde93034cfd79092b5d40e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1913376d4dd5f6766e813c92a6036586bf8fab19fde93034cfd79092b5d40e82->leave($__internal_1913376d4dd5f6766e813c92a6036586bf8fab19fde93034cfd79092b5d40e82_prof);

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
