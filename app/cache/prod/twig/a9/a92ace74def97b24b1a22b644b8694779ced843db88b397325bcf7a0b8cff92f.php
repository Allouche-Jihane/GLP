<?php

/* GestionLpiBundle:Default:home.html.twig */
class __TwigTemplate_363085b652ed300116cd875e900a636c5e0403926e70a44ff6093a0394404af3 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
        echo $this->env->getExtension('CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension')->draw(($context["bar"] ?? null), "div_chart");
        echo "
        ";
        // line 13
        echo $this->env->getExtension('CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension')->draw(($context["baro"] ?? null), "div_charti");
        echo "

    </script>
";
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
        return array (  46 => 13,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GestionLpiBundle:Default:home.html.twig", "D:\\wamp64\\www\\GLPI (1)\\GL\\src\\GestionLpiBundle/Resources/views/Default/home.html.twig");
    }
}
