<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/GestionCompte')) {
            // GestionCompte_index
            if (rtrim($pathinfo, '/') === '/GestionCompte') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_GestionCompte_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'GestionCompte_index');
                }

                return array (  '_controller' => 'GestionLpiBundle\\Controller\\CompteController::indexAction',  '_route' => 'GestionCompte_index',);
            }
            not_GestionCompte_index:

            // GestionCompte_show
            if (preg_match('#^/GestionCompte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_GestionCompte_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'GestionCompte_show')), array (  '_controller' => 'GestionLpiBundle\\Controller\\CompteController::showAction',));
            }
            not_GestionCompte_show:

            // GestionCompte_new
            if ($pathinfo === '/GestionCompte/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_GestionCompte_new;
                }

                return array (  '_controller' => 'GestionLpiBundle\\Controller\\CompteController::newAction',  '_route' => 'GestionCompte_new',);
            }
            not_GestionCompte_new:

            // GestionCompte_edit
            if (preg_match('#^/GestionCompte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_GestionCompte_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'GestionCompte_edit')), array (  '_controller' => 'GestionLpiBundle\\Controller\\CompteController::editAction',));
            }
            not_GestionCompte_edit:

            // GestionCompte_delete
            if (preg_match('#^/GestionCompte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_GestionCompte_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'GestionCompte_delete')), array (  '_controller' => 'GestionLpiBundle\\Controller\\CompteController::deleteAction',));
            }
            not_GestionCompte_delete:

        }

        // gestion_lpi_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gestion_lpi_homepage');
            }

            return array (  '_controller' => 'GestionLpiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gestion_lpi_homepage',);
        }

        // login_check
        if ($pathinfo === '/check') {
            return array (  '_controller' => 'GestionLpiBundle\\Controller\\DefaultController::loginCheckAction',  '_route' => 'login_check',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'GestionLpiBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
        }

        // gestion_lpi_home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'GestionLpiBundle\\Controller\\DefaultController::homeAction',  '_route' => 'gestion_lpi_home',);
        }

        if (0 === strpos($pathinfo, '/Gestion')) {
            if (0 === strpos($pathinfo, '/GestionEtudiant')) {
                // GestionEtudiant_index
                if (rtrim($pathinfo, '/') === '/GestionEtudiant') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_GestionEtudiant_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'GestionEtudiant_index');
                    }

                    return array (  '_controller' => 'GestionLpiBundle\\Controller\\EtudiantController::indexAction',  '_route' => 'GestionEtudiant_index',);
                }
                not_GestionEtudiant_index:

                // GestionEtudiant_show
                if (preg_match('#^/GestionEtudiant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_GestionEtudiant_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GestionEtudiant_show')), array (  '_controller' => 'GestionLpiBundle\\Controller\\EtudiantController::showAction',));
                }
                not_GestionEtudiant_show:

                // GestionEtudiant_new
                if ($pathinfo === '/GestionEtudiant/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_GestionEtudiant_new;
                    }

                    return array (  '_controller' => 'GestionLpiBundle\\Controller\\EtudiantController::newAction',  '_route' => 'GestionEtudiant_new',);
                }
                not_GestionEtudiant_new:

                // GestionEtudiant_edit
                if (preg_match('#^/GestionEtudiant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_GestionEtudiant_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GestionEtudiant_edit')), array (  '_controller' => 'GestionLpiBundle\\Controller\\EtudiantController::editAction',));
                }
                not_GestionEtudiant_edit:

                // GestionEtudiant_delete
                if (preg_match('#^/GestionEtudiant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_GestionEtudiant_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GestionEtudiant_delete')), array (  '_controller' => 'GestionLpiBundle\\Controller\\EtudiantController::deleteAction',));
                }
                not_GestionEtudiant_delete:

            }

            if (0 === strpos($pathinfo, '/GestionMatiere')) {
                // GestionMatiere_index
                if (rtrim($pathinfo, '/') === '/GestionMatiere') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_GestionMatiere_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'GestionMatiere_index');
                    }

                    return array (  '_controller' => 'GestionLpiBundle\\Controller\\MatiereController::indexAction',  '_route' => 'GestionMatiere_index',);
                }
                not_GestionMatiere_index:

                // GestionMatiere_show
                if (preg_match('#^/GestionMatiere/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_GestionMatiere_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GestionMatiere_show')), array (  '_controller' => 'GestionLpiBundle\\Controller\\MatiereController::showAction',));
                }
                not_GestionMatiere_show:

                // GestionMatiere_new
                if ($pathinfo === '/GestionMatiere/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_GestionMatiere_new;
                    }

                    return array (  '_controller' => 'GestionLpiBundle\\Controller\\MatiereController::newAction',  '_route' => 'GestionMatiere_new',);
                }
                not_GestionMatiere_new:

                // GestionMatiere_edit
                if (preg_match('#^/GestionMatiere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_GestionMatiere_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GestionMatiere_edit')), array (  '_controller' => 'GestionLpiBundle\\Controller\\MatiereController::editAction',));
                }
                not_GestionMatiere_edit:

                // GestionMatiere_delete
                if (preg_match('#^/GestionMatiere/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_GestionMatiere_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GestionMatiere_delete')), array (  '_controller' => 'GestionLpiBundle\\Controller\\MatiereController::deleteAction',));
                }
                not_GestionMatiere_delete:

            }

        }

        if (0 === strpos($pathinfo, '/announce')) {
            // announce_index
            if (rtrim($pathinfo, '/') === '/announce') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_announce_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'announce_index');
                }

                return array (  '_controller' => 'GestionLpiBundle\\Controller\\AnnounceController::indexAction',  '_route' => 'announce_index',);
            }
            not_announce_index:

            // announce_show
            if (preg_match('#^/announce/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_announce_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'announce_show')), array (  '_controller' => 'GestionLpiBundle\\Controller\\AnnounceController::showAction',));
            }
            not_announce_show:

            // announce_new
            if ($pathinfo === '/announce/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_announce_new;
                }

                return array (  '_controller' => 'GestionLpiBundle\\Controller\\AnnounceController::newAction',  '_route' => 'announce_new',);
            }
            not_announce_new:

            // announce_edit
            if (preg_match('#^/announce/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_announce_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'announce_edit')), array (  '_controller' => 'GestionLpiBundle\\Controller\\AnnounceController::editAction',));
            }
            not_announce_edit:

            // announce_delete
            if (preg_match('#^/announce/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_announce_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'announce_delete')), array (  '_controller' => 'GestionLpiBundle\\Controller\\AnnounceController::deleteAction',));
            }
            not_announce_delete:

        }

        if (0 === strpos($pathinfo, '/gestion')) {
            if (0 === strpos($pathinfo, '/gestionAbsence')) {
                // gestionAbsence_index
                if (rtrim($pathinfo, '/') === '/gestionAbsence') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_gestionAbsence_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'gestionAbsence_index');
                    }

                    return array (  '_controller' => 'GestionLpiBundle\\Controller\\AbsenceController::indexAction',  '_route' => 'gestionAbsence_index',);
                }
                not_gestionAbsence_index:

                // gestionAbsence_show
                if (preg_match('#^/gestionAbsence/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_gestionAbsence_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestionAbsence_show')), array (  '_controller' => 'GestionLpiBundle\\Controller\\AbsenceController::showAction',));
                }
                not_gestionAbsence_show:

                // gestionAbsence_new
                if ($pathinfo === '/gestionAbsence/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_gestionAbsence_new;
                    }

                    return array (  '_controller' => 'GestionLpiBundle\\Controller\\AbsenceController::newAction',  '_route' => 'gestionAbsence_new',);
                }
                not_gestionAbsence_new:

                // gestionAbsence_edit
                if (preg_match('#^/gestionAbsence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_gestionAbsence_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestionAbsence_edit')), array (  '_controller' => 'GestionLpiBundle\\Controller\\AbsenceController::editAction',));
                }
                not_gestionAbsence_edit:

                // gestionAbsence_delete
                if (preg_match('#^/gestionAbsence/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_gestionAbsence_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestionAbsence_delete')), array (  '_controller' => 'GestionLpiBundle\\Controller\\AbsenceController::deleteAction',));
                }
                not_gestionAbsence_delete:

            }

            if (0 === strpos($pathinfo, '/gestionNotes')) {
                // gestionNotes_index
                if (rtrim($pathinfo, '/') === '/gestionNotes') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_gestionNotes_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'gestionNotes_index');
                    }

                    return array (  '_controller' => 'GestionLpiBundle\\Controller\\NotesController::indexAction',  '_route' => 'gestionNotes_index',);
                }
                not_gestionNotes_index:

                // gestionNotes_show
                if (preg_match('#^/gestionNotes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_gestionNotes_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestionNotes_show')), array (  '_controller' => 'GestionLpiBundle\\Controller\\NotesController::showAction',));
                }
                not_gestionNotes_show:

                // gestionNotes_new
                if ($pathinfo === '/gestionNotes/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_gestionNotes_new;
                    }

                    return array (  '_controller' => 'GestionLpiBundle\\Controller\\NotesController::newAction',  '_route' => 'gestionNotes_new',);
                }
                not_gestionNotes_new:

                // gestionNotes_edit
                if (preg_match('#^/gestionNotes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_gestionNotes_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestionNotes_edit')), array (  '_controller' => 'GestionLpiBundle\\Controller\\NotesController::editAction',));
                }
                not_gestionNotes_edit:

                // gestionNotes_delete
                if (preg_match('#^/gestionNotes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_gestionNotes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestionNotes_delete')), array (  '_controller' => 'GestionLpiBundle\\Controller\\NotesController::deleteAction',));
                }
                not_gestionNotes_delete:

            }

        }

        // ajouterCompte
        if ($pathinfo === '/ajouterCompte') {
            return array (  '_controller' => 'GestionLpiBundle\\Controller\\ajouterCompteController::ajouterCompteAction',  '_route' => 'ajouterCompte',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
