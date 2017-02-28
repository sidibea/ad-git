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

        // nb_main_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nb_main_homepage');
            }

            return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::indexAction',  '_route' => 'nb_main_homepage',);
        }

        if (0 === strpos($pathinfo, '/compagnie')) {
            // nb_main_liste_des_compagnie
            if ($pathinfo === '/compagnie/liste-des-compagnie') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\CompagnieController::listAction',  '_route' => 'nb_main_liste_des_compagnie',);
            }

            // nb_main_ajouter_compagnie
            if ($pathinfo === '/compagnie/ajouter-une-compagnie') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\CompagnieController::addAction',  '_route' => 'nb_main_ajouter_compagnie',);
            }

            // nb_main_modifier_compagnie
            if (0 === strpos($pathinfo, '/compagnie/modifier-une-compagnie') && preg_match('#^/compagnie/modifier\\-une\\-compagnie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_modifier_compagnie')), array (  '_controller' => 'NB\\MainBundle\\Controller\\CompagnieController::editAction',));
            }

            // nb_main_supprimer_compagnie
            if (0 === strpos($pathinfo, '/compagnie/supprimer-une-compagnie') && preg_match('#^/compagnie/supprimer\\-une\\-compagnie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_supprimer_compagnie')), array (  '_controller' => 'NB\\MainBundle\\Controller\\CompagnieController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/compagnie/liste-utilisateur-compagnie')) {
                // nb_main_liste_utilisateur_compagnie
                if (preg_match('#^/compagnie/liste\\-utilisateur\\-compagnie/(?P<compagnie_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_liste_utilisateur_compagnie')), array (  '_controller' => 'NB\\MainBundle\\Controller\\CompagnieController::usersAction',));
                }

                // nb_main_ajouter_compagnie_utilisateur
                if (preg_match('#^/compagnie/liste\\-utilisateur\\-compagnie/(?P<compagnie_id>[^/]++)/nouveau$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_ajouter_compagnie_utilisateur')), array (  '_controller' => 'NB\\MainBundle\\Controller\\CompagnieController::usersAddAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/seat')) {
            if (0 === strpos($pathinfo, '/seatSeller')) {
                // nb_main_liste_seatseller
                if ($pathinfo === '/seatSeller/liste-seatseller') {
                    return array (  '_controller' => 'NB\\MainBundle\\Controller\\SeatSellerController::listAction',  '_route' => 'nb_main_liste_seatseller',);
                }

                // nb_main_ajouter_seatseller
                if ($pathinfo === '/seatSeller/nouveau-seatseller') {
                    return array (  '_controller' => 'NB\\MainBundle\\Controller\\SeatSellerController::addAction',  '_route' => 'nb_main_ajouter_seatseller',);
                }

                // nb_main_modifier_seatseller
                if (0 === strpos($pathinfo, '/seatSeller/modifier-seatseller') && preg_match('#^/seatSeller/modifier\\-seatseller/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_modifier_seatseller')), array (  '_controller' => 'NB\\MainBundle\\Controller\\SeatSellerController::editAction',));
                }

                // nb_main_liste_utilisateur_seatseller
                if (0 === strpos($pathinfo, '/seatSeller/utilisateur-seatseller') && preg_match('#^/seatSeller/utilisateur\\-seatseller/(?P<seatseller_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_liste_utilisateur_seatseller')), array (  '_controller' => 'NB\\MainBundle\\Controller\\SeatSellerController::usersAction',));
                }

            }

            if (0 === strpos($pathinfo, '/seatseller')) {
                // nb_main_seatseller_users_nouveau
                if (preg_match('#^/seatseller/(?P<seatseller_id>[^/]++)/utilisateurs/nouveau$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_seatseller_users_nouveau')), array (  '_controller' => 'NB\\MainBundle\\Controller\\SeatSellerController::usersAddAction',));
                }

                // nb_main_seatseller_solde_compte
                if (preg_match('#^/seatseller/(?P<seatseller_id>[^/]++)/account$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_seatseller_solde_compte')), array (  '_controller' => 'NB\\MainBundle\\Controller\\SeatSellerController::accountAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/axes')) {
            // nb_main_liste_des_axes
            if ($pathinfo === '/axes/liste-des-axes') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\AxesController::listAction',  '_route' => 'nb_main_liste_des_axes',);
            }

            // nb_main_ajouter_axes
            if ($pathinfo === '/axes/ajouter-des-axes') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\AxesController::addAction',  '_route' => 'nb_main_ajouter_axes',);
            }

            // nb_main_modifier_axes
            if (0 === strpos($pathinfo, '/axes/modifier-un-axe') && preg_match('#^/axes/modifier\\-un\\-axe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_modifier_axes')), array (  '_controller' => 'NB\\MainBundle\\Controller\\AxesController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/v')) {
            if (0 === strpos($pathinfo, '/vil')) {
                // nb_main_liste_des_villes
                if ($pathinfo === '/villes/liste-des-villes') {
                    return array (  '_controller' => 'NB\\MainBundle\\Controller\\VillesController::listAction',  '_route' => 'nb_main_liste_des_villes',);
                }

                // nb_main_ajouter_des_villes
                if ($pathinfo === '/viles/ajouter-une-ville') {
                    return array (  '_controller' => 'NB\\MainBundle\\Controller\\VillesController::addAction',  '_route' => 'nb_main_ajouter_des_villes',);
                }

                // nb_main_modifier_villes
                if (0 === strpos($pathinfo, '/villes/modifier-une-ville') && preg_match('#^/villes/modifier\\-une\\-ville/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_modifier_villes')), array (  '_controller' => 'NB\\MainBundle\\Controller\\VillesController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/voyages')) {
                // nb_main_liste_des_voyages
                if ($pathinfo === '/voyages/liste-des-voyages') {
                    return array (  '_controller' => 'NB\\MainBundle\\Controller\\VoyagesController::listAction',  '_route' => 'nb_main_liste_des_voyages',);
                }

                // nb_main_ajouter_des_voyages
                if ($pathinfo === '/voyages/ajouter-des-voyages') {
                    return array (  '_controller' => 'NB\\MainBundle\\Controller\\VoyagesController::addAction',  '_route' => 'nb_main_ajouter_des_voyages',);
                }

                // nb_main_modifier_voyages
                if (0 === strpos($pathinfo, '/voyages/modifier-un-voyage') && preg_match('#^/voyages/modifier\\-un\\-voyage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_modifier_voyages')), array (  '_controller' => 'NB\\MainBundle\\Controller\\VoyagesController::editAction',));
                }

                if (0 === strpos($pathinfo, '/voyages/point-embarquement')) {
                    // nb_main_liste_des_point_embarquement
                    if ($pathinfo === '/voyages/point-embarquement') {
                        return array (  '_controller' => 'NB\\MainBundle\\Controller\\PointController::listAction',  '_route' => 'nb_main_liste_des_point_embarquement',);
                    }

                    // nb_main_ajouter_des_point_embarquement
                    if ($pathinfo === '/voyages/point-embarquement/nouveau') {
                        return array (  '_controller' => 'NB\\MainBundle\\Controller\\PointController::addAction',  '_route' => 'nb_main_ajouter_des_point_embarquement',);
                    }

                }

                // nb_main_modifier_des_point_embarquement
                if (0 === strpos($pathinfo, '/voyages/modifier-point-embarquement') && preg_match('#^/voyages/modifier\\-point\\-embarquement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_modifier_des_point_embarquement')), array (  '_controller' => 'NB\\MainBundle\\Controller\\PointController::editAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/promotions')) {
            // nb_main_liste_gestion_des_promotions
            if ($pathinfo === '/promotions/liste-gestion-des-promotions') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\PromotionsController::listAction',  '_route' => 'nb_main_liste_gestion_des_promotions',);
            }

            // nb_main_ajouter_gestion_des_promotions
            if ($pathinfo === '/promotions/ajouter-gestion-des-promotions') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\PromotionsController::addAction',  '_route' => 'nb_main_ajouter_gestion_des_promotions',);
            }

            // nb_main_modifier_gestion_des_promotions
            if (0 === strpos($pathinfo, '/promotions/modifier-une-promotion') && preg_match('#^/promotions/modifier\\-une\\-promotion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_modifier_gestion_des_promotions')), array (  '_controller' => 'NB\\MainBundle\\Controller\\PromotionsController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/termes_conditions')) {
            // nb_main_liste_termes_et_conditions
            if ($pathinfo === '/termes_conditions/liste-termes-et-conditions') {
                return array (  '_controller' => 'NBMainBundle:TermesConditions:list',  '_route' => 'nb_main_liste_termes_et_conditions',);
            }

            // nb_main_modifier_termes_et_conditions
            if (0 === strpos($pathinfo, '/termes_conditions/modifier-termes-et-conditions') && preg_match('#^/termes_conditions/modifier\\-termes\\-et\\-conditions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_modifier_termes_et_conditions')), array (  '_controller' => 'NBMainBundle:TermesConditions:edit',));
            }

        }

        if (0 === strpos($pathinfo, '/confidentialite')) {
            // nb_main_liste_de_confidentialite
            if ($pathinfo === '/confidentialite/liste-des-confidentialites') {
                return array (  '_controller' => 'NBMainBundle:Confidentialite:list',  '_route' => 'nb_main_liste_de_confidentialite',);
            }

            // nb_main_modifier_confidentialite
            if (0 === strpos($pathinfo, '/confidentialite/modifier-confidentialites') && preg_match('#^/confidentialite/modifier\\-confidentialites/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_modifier_confidentialite')), array (  '_controller' => 'NBMainBundle:Confidentialite:edit',));
            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            // nb_main_liste_blog
            if ($pathinfo === '/blog/liste-blog') {
                return array (  '_controller' => 'NBMainBundle:Blog:list',  '_route' => 'nb_main_liste_blog',);
            }

            // nb_main_modifier_blog
            if ($pathinfo === '/blog/modifier-blog') {
                return array (  '_controller' => 'NBMainBundle:Blog:edit',  '_route' => 'nb_main_modifier_blog',);
            }

        }

        if (0 === strpos($pathinfo, '/professionel')) {
            // nb_main_liste_professionel
            if ($pathinfo === '/professionel/liste-professionel') {
                return array (  '_controller' => 'NBMainBundle:Professionel:list',  '_route' => 'nb_main_liste_professionel',);
            }

            // nb_main_modifier_professionel
            if ($pathinfo === '/professionel/modifier-professionel') {
                return array (  '_controller' => 'NBMainBundle:Professionel:edit',  '_route' => 'nb_main_modifier_professionel',);
            }

        }

        if (0 === strpos($pathinfo, '/modif_voyage')) {
            // nb_main_liste_modification_voyage
            if ($pathinfo === '/modif_voyage/liste-modification-voyage') {
                return array (  '_controller' => 'NBMainBundle:ModificationVoyage:list',  '_route' => 'nb_main_liste_modification_voyage',);
            }

            // nb_main_modifier_modification_voyage
            if ($pathinfo === '/modif_voyage/modifier-modification-voyage') {
                return array (  '_controller' => 'NBMainBundle:ModificationVoyage:edit',  '_route' => 'nb_main_modifier_modification_voyage',);
            }

        }

        if (0 === strpos($pathinfo, '/annul_voyage')) {
            // nb_main_liste_annulation_voyage
            if ($pathinfo === '/annul_voyage/liste-annulation-voyage') {
                return array (  '_controller' => 'NBMainBundle:AnnulationVoyage:list',  '_route' => 'nb_main_liste_annulation_voyage',);
            }

            // nb_main_modifier_annulation_voyage
            if ($pathinfo === '/annul_voyage/modifier-annulation-voyage') {
                return array (  '_controller' => 'NBMainBundle:annulationVoyage:edit',  '_route' => 'nb_main_modifier_annulation_voyage',);
            }

        }

        if (0 === strpos($pathinfo, '/cms')) {
            // nb_main_termes_et_conditions
            if ($pathinfo === '/cms/termes-et-conditions') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\CMSController::TermesConditionsAction',  '_route' => 'nb_main_termes_et_conditions',);
            }

            // nb_main_confidentialite
            if ($pathinfo === '/cms/confidentialites') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\CMSController::ConfidentialiteAction',  '_route' => 'nb_main_confidentialite',);
            }

            // nb_main_blog
            if ($pathinfo === '/cms/blog') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\CMSController::BlogAction',  '_route' => 'nb_main_blog',);
            }

            // nb_main_professionel
            if ($pathinfo === '/cms/professionel') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\CMSController::ProfessionelAction',  '_route' => 'nb_main_professionel',);
            }

            // nb_main_modification_voyage
            if ($pathinfo === '/cms/modification-voyage') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\CMSController::ModificationVoyageAction',  '_route' => 'nb_main_modification_voyage',);
            }

            // nb_main_annulation_voyage
            if ($pathinfo === '/cms/annulation-voyage') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\CMSController::AnnulationVoyageAction',  '_route' => 'nb_main_annulation_voyage',);
            }

        }

        if (0 === strpos($pathinfo, '/gest_newsletter')) {
            // nb_main_liste_gestion_newsletter
            if ($pathinfo === '/gest_newsletter/liste-gestion-newsletter') {
                return array (  '_controller' => 'NBMainBundle:GestionNewsletter:list',  '_route' => 'nb_main_liste_gestion_newsletter',);
            }

            // nb_main_modifier_gestion_newsletter
            if ($pathinfo === '/gest_newsletter/modifier-gestion-newsletter') {
                return array (  '_controller' => 'NBMainBundle:GestionNewsletter:edit',  '_route' => 'nb_main_modifier_gestion_newsletter',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'NB\\UsersBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
