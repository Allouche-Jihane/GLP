<?php

/* ::base.html.twig */
class __TwigTemplate_147ca6d2778cedc1d3336a3e7323d320c3675b3fb0bb725d16fa59004da94432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javaScript' => array($this, 'block_javaScript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<!--
\tEditorial by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Gestion LPI</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    <!--[if lte IE 8]><script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ie/html5shiv.js"), "html", null, true);
        echo "\"></script><![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" />
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ie9.css"), "html", null, true);
        echo "\" /><![endif]-->
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ie8.css"), "html", null, true);
        echo "\" /><![endif]-->
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"//cdn.ckeditor.com/4.7.0/standard/ckeditor.js\"></script>
    ";
        // line 19
        $this->displayBlock('javaScript', $context, $blocks);
        // line 33
        echo "
</head>
<body>

<!-- Wrapper -->
<div id=\"wrapper\">

    <!-- Main -->
    <div id=\"main\">

        <div class=\"inner\">

            <!-- Header -->
            <header id=\"header\">
                <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_lpi_home");
        echo "\" class=\"logo\"><strong>Gestion LPI</strong> ESTO</a>

                <ul class=\"icons\">
                    <li>
                        ";
        // line 51
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") == false)) {
            // line 52
            echo "                            <nav>

                                <aside class=\"menu\">
                                    <div class=\"menu-content\">
                                        <i class=\"fa fa-unlock-alt\"></i><a href=\"#\" id=\"login\">Login</a>
                                    </div>
                                    <div class=\"arrow-up\"></div>
                                </aside>
                                <div class=\"login-form\" style=\"text-align: -webkit-left;\">
                                    <form action=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
            echo "\" method=\"post\">
                                        <label for=\"username\">Username:</label>
                                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
            echo "\" />

                                        <label for=\"password\">Password:</label>
                                        <input type=\"password\" id=\"password\" name=\"_password\" />

                                        <button type=\"submit\" class=\"btn btn-primary pull-right\" style=\"margin-top: 5px;margin-bottom: 5px;\">login</button>
                                    </form>
                                </div>
                            </nav>

                            <script type=\"text/javascript\">

                                \$(document).ready(function(){
                                    var arrow = \$(\".arrow-up\");
                                    var form = \$(\".login-form\");
                                    var status = false;
                                    \$(\"#login\").click(function(event){
                                        event.preventDefault();
                                        if(status == false){
                                            arrow.fadeIn();
                                            form.fadeIn();
                                            status = true;
                                        }else{
                                            arrow.fadeOut();
                                            form.fadeOut();
                                            status = false;
                                        }
                                    })
                                })

                            </script>

                        ";
        }
        // line 96
        echo "                    </li>
                    ";
        // line 97
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 98
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "login", array()), "html", null, true);
            echo "</li>
                    <li><a href=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a></li>
                    ";
        }
        // line 101
        echo "                    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") == false)) {
            // line 102
            echo "                    <li>
                        <img src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/esto_ump.gif"), "html", null, true);
            echo "\" width=\"50%\" height=\"50%\">
                    </li>
                    ";
        }
        // line 106
        echo "                </ul>


            </header>


            <!-- Body -->
            ";
        // line 113
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "

        </div>
    </div>
";
        // line 121
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 122
            echo "    <!-- Sidebar -->
    <div id=\"sidebar\">
        <div class=\"inner\">

            <!-- Search -->
            <section id=\"search\" class=\"alt\">
                <img src=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/esto_ump.gif"), "html", null, true);
            echo "\">
            </section>

            <!-- Menu -->
            <nav id=\"menu\">
                <header class=\"major\">
                    <h2>Menu</h2>
                </header>
                <ul>
                    <li><a href=\"";
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_lpi_home");
            echo "\">Homepage</a></li>
                    <li><a href=\"";
            // line 138
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionEtudiant_index");
            echo "\">Etudiants</a></li>
                    <li><a href=\"";
            // line 139
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionMatiere_index");
            echo "\">Matiers</a></li>
                    ";
            // line 140
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 141
                echo "                        <li>
                            <span class=\"opener\">Comptes</span>
                            <ul>
                                <li><a href=\"";
                // line 144
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("GestionCompte_index");
                echo "\">Gestion des Comptes</a></li>
                                <li><a href=\"";
                // line 145
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterCompte");
                echo "\">ajouter</a></li>
                            </ul>
                        </li>
                    ";
            }
            // line 149
            echo "
                    <li><a href=\"";
            // line 150
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionAbsence_index");
            echo "\">Absences</a></li>
                    <li><a href=\"";
            // line 151
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionNotes_index");
            echo "\">Notes</a></li>
                    <li>
                        <span class=\"opener\">Announces</span>
                        <ul>
                            <li><a href=\"";
            // line 155
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_index");
            echo "\">les Announces</a></li>
                            <li><a href=\"";
            // line 156
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announce_new");
            echo "\">Ajouter announce</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Section -->
            <section>
                <header class=\"major\">
                    <h2>autre</h2>
                </header>
                <div class=\"mini-posts\">
                    <article>
                        <a href=\"http://esto.ump.ma/index.php/2016-05-10-15-57-08/dept-gi\" class=\"image\"><img src=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/infodepart.jpg"), "html", null, true);
            echo "\" alt=\"\" />DÉPARTEMENT GI
                        </a>
                        <p>Offre une formation complète et très pointue dans un domaine toujours en mutation avec des révolutions continues en NTIC, E-Learning...</p>
                    </article>
                </div>
                <ul class=\"actions\">
                    <li><a href=\"http://esto.ump.ma/index.php/2016-05-10-15-57-08/dept-gi\" class=\"button\">More</a></li>
                </ul>
            </section>

            <!-- Section -->
            <section>
                <header class=\"major\">
                    <h2>NOUS CONTACTER</h2>
                </header>
                <p>
                    pour toute question , demande d'information concernant les études , l'internat, ou autres ... contactez nous.
                </p>
                <ul class=\"contact\">
                    <li class=\"fa-envelope-o\"><a href=\"#\">esto.webmaster@ump.ma <br>support.esto@ump.ma</a></li>
                    <li class=\"fa-phone\">+212 36 500 224</li>
                    <li class=\"fa-fax\">+212 36 500 223</li>
                    <li class=\"fa-home\">BP 473 Complexe universitaire <br />
                        Al Qods Oujda 60000</li>
                </ul>
            </section>

            <!-- Footer -->
            <footer id=\"footer\">
                <p class=\"copyright\">&copy; Conditions d'utilisation <a href=\"http://esto.ump.ma/images/esto/Charte_vie_privee1.pdf\">Charte de vie privée</a> <a href=\"http://esto.ump.ma/\">ESTO</a>, tous droits réservés.</p>
            </footer>

        </div>
    </div>
";
        }
        // line 204
        echo "</div>

</body>
</html>";
    }

    // line 19
    public function block_javaScript($context, array $blocks = array())
    {
        // line 20
        echo "        <!-- Scripts -->
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom_js.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/skel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/util.js"), "html", null, true);
        echo "\"></script>
        <!--[if lte IE 8]><script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ie/respond.min.js"), "html", null, true);
        echo "\"></script><![endif]-->
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/javaScript.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>



    ";
    }

    // line 113
    public function block_body($context, array $blocks = array())
    {
        // line 114
        echo "

            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 114,  353 => 113,  343 => 27,  339 => 26,  335 => 25,  331 => 24,  327 => 23,  323 => 22,  319 => 21,  316 => 20,  313 => 19,  306 => 204,  268 => 169,  252 => 156,  248 => 155,  241 => 151,  237 => 150,  234 => 149,  227 => 145,  223 => 144,  218 => 141,  216 => 140,  212 => 139,  208 => 138,  204 => 137,  192 => 128,  184 => 122,  182 => 121,  176 => 117,  174 => 113,  165 => 106,  159 => 103,  156 => 102,  153 => 101,  148 => 99,  143 => 98,  141 => 97,  138 => 96,  102 => 63,  97 => 61,  86 => 52,  84 => 51,  77 => 47,  61 => 33,  59 => 19,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  38 => 13,  34 => 12,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "D:\\wamp64\\www\\GLPI (1)\\app/Resources\\views/base.html.twig");
    }
}
