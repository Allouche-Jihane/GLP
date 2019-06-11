<?php

/* base.html.twig */
class __TwigTemplate_b3f1f06f332552e5f7fc868a53950de1fc229b2acbe923880714b115ad0d076b extends Twig_Template
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
        $__internal_a5bf971ed2fd4f145487ff44db8daf1a55642f2bcca5cd50838d11e36bc9401b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5bf971ed2fd4f145487ff44db8daf1a55642f2bcca5cd50838d11e36bc9401b->enter($__internal_a5bf971ed2fd4f145487ff44db8daf1a55642f2bcca5cd50838d11e36bc9401b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "login", array()), "html", null, true);
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
        
        $__internal_a5bf971ed2fd4f145487ff44db8daf1a55642f2bcca5cd50838d11e36bc9401b->leave($__internal_a5bf971ed2fd4f145487ff44db8daf1a55642f2bcca5cd50838d11e36bc9401b_prof);

    }

    // line 19
    public function block_javaScript($context, array $blocks = array())
    {
        $__internal_6dbe16f1dff3e64cf1dadc60268676bc26006ac32b6c70d0bacfa36e9a561697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbe16f1dff3e64cf1dadc60268676bc26006ac32b6c70d0bacfa36e9a561697->enter($__internal_6dbe16f1dff3e64cf1dadc60268676bc26006ac32b6c70d0bacfa36e9a561697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javaScript"));

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
        
        $__internal_6dbe16f1dff3e64cf1dadc60268676bc26006ac32b6c70d0bacfa36e9a561697->leave($__internal_6dbe16f1dff3e64cf1dadc60268676bc26006ac32b6c70d0bacfa36e9a561697_prof);

    }

    // line 113
    public function block_body($context, array $blocks = array())
    {
        $__internal_945b84d4c4c04f6c87f8aa6e5bd28df430df7f090419b9bbc6aef21cb4de5407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945b84d4c4c04f6c87f8aa6e5bd28df430df7f090419b9bbc6aef21cb4de5407->enter($__internal_945b84d4c4c04f6c87f8aa6e5bd28df430df7f090419b9bbc6aef21cb4de5407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 114
        echo "

            ";
        
        $__internal_945b84d4c4c04f6c87f8aa6e5bd28df430df7f090419b9bbc6aef21cb4de5407->leave($__internal_945b84d4c4c04f6c87f8aa6e5bd28df430df7f090419b9bbc6aef21cb4de5407_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 114,  365 => 113,  352 => 27,  348 => 26,  344 => 25,  340 => 24,  336 => 23,  332 => 22,  328 => 21,  325 => 20,  319 => 19,  309 => 204,  271 => 169,  255 => 156,  251 => 155,  244 => 151,  240 => 150,  237 => 149,  230 => 145,  226 => 144,  221 => 141,  219 => 140,  215 => 139,  211 => 138,  207 => 137,  195 => 128,  187 => 122,  185 => 121,  179 => 117,  177 => 113,  168 => 106,  162 => 103,  159 => 102,  156 => 101,  151 => 99,  146 => 98,  144 => 97,  141 => 96,  105 => 63,  100 => 61,  89 => 52,  87 => 51,  80 => 47,  64 => 33,  62 => 19,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  37 => 12,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
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
    <!--[if lte IE 8]><script src=\"{{ asset('assets/js/ie/html5shiv.js') }}\"></script><![endif]-->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\" />
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"{{ asset('assets/css/ie9.css') }}\" /><![endif]-->
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"{{ asset('assets/css/ie8.css') }}\" /><![endif]-->
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"//cdn.ckeditor.com/4.7.0/standard/ckeditor.js\"></script>
    {% block javaScript %}
        <!-- Scripts -->
        <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/custom_js.js') }}\"></script>
        <script src=\"{{ asset('assets/js/skel.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/util.js') }}\"></script>
        <!--[if lte IE 8]><script src=\"{{ asset('assets/js/ie/respond.min.js') }}\"></script><![endif]-->
        <script src=\"{{ asset('assets/js/main.js') }}\"></script>
        <script src=\"{{ asset('assets/js/javaScript.js') }}\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>



    {% endblock %}

</head>
<body>

<!-- Wrapper -->
<div id=\"wrapper\">

    <!-- Main -->
    <div id=\"main\">

        <div class=\"inner\">

            <!-- Header -->
            <header id=\"header\">
                <a href=\"{{ path('gestion_lpi_home') }}\" class=\"logo\"><strong>Gestion LPI</strong> ESTO</a>

                <ul class=\"icons\">
                    <li>
                        {% if is_granted('ROLE_USER') == false %}
                            <nav>

                                <aside class=\"menu\">
                                    <div class=\"menu-content\">
                                        <i class=\"fa fa-unlock-alt\"></i><a href=\"#\" id=\"login\">Login</a>
                                    </div>
                                    <div class=\"arrow-up\"></div>
                                </aside>
                                <div class=\"login-form\" style=\"text-align: -webkit-left;\">
                                    <form action=\"{{ path('login_check') }}\" method=\"post\">
                                        <label for=\"username\">Username:</label>
                                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

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

                        {% endif %}
                    </li>
                    {% if is_granted('ROLE_USER') %}
                    <li>{{ app.user.login }}</li>
                    <li><a href=\"{{ path('logout') }}\">Logout</a></li>
                    {% endif %}
                    {% if is_granted('ROLE_USER') == false %}
                    <li>
                        <img src=\"{{ asset('images/esto_ump.gif') }}\" width=\"50%\" height=\"50%\">
                    </li>
                    {% endif %}
                </ul>


            </header>


            <!-- Body -->
            {% block body %}


            {% endblock %}


        </div>
    </div>
{% if is_granted('ROLE_USER') %}
    <!-- Sidebar -->
    <div id=\"sidebar\">
        <div class=\"inner\">

            <!-- Search -->
            <section id=\"search\" class=\"alt\">
                <img src=\"{{ asset('images/esto_ump.gif') }}\">
            </section>

            <!-- Menu -->
            <nav id=\"menu\">
                <header class=\"major\">
                    <h2>Menu</h2>
                </header>
                <ul>
                    <li><a href=\"{{ path('gestion_lpi_home') }}\">Homepage</a></li>
                    <li><a href=\"{{ path('GestionEtudiant_index') }}\">Etudiants</a></li>
                    <li><a href=\"{{ path('GestionMatiere_index') }}\">Matiers</a></li>
                    {% if is_granted('ROLE_ADMIN') %}
                        <li>
                            <span class=\"opener\">Comptes</span>
                            <ul>
                                <li><a href=\"{{ path('GestionCompte_index') }}\">Gestion des Comptes</a></li>
                                <li><a href=\"{{ path('ajouterCompte') }}\">ajouter</a></li>
                            </ul>
                        </li>
                    {% endif %}

                    <li><a href=\"{{ path('gestionAbsence_index') }}\">Absences</a></li>
                    <li><a href=\"{{ path('gestionNotes_index') }}\">Notes</a></li>
                    <li>
                        <span class=\"opener\">Announces</span>
                        <ul>
                            <li><a href=\"{{ path('announce_index') }}\">les Announces</a></li>
                            <li><a href=\"{{ path('announce_new') }}\">Ajouter announce</a></li>
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
                        <a href=\"http://esto.ump.ma/index.php/2016-05-10-15-57-08/dept-gi\" class=\"image\"><img src=\"{{ asset('images/infodepart.jpg') }}\" alt=\"\" />DÉPARTEMENT GI
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
{% endif %}
</div>

</body>
</html>", "base.html.twig", "C:\\GLPI_test\\GLPI\\app\\Resources\\views\\base.html.twig");
    }
}
