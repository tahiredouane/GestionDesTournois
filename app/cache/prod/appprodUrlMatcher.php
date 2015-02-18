<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // gt_gestion_tournois_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gt_gestion_tournois_homepage')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/tournois')) {
                // tournois
                if (rtrim($pathinfo, '/') === '/tournois') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tournois');
                    }

                    return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::indexAction',  '_route' => 'tournois',);
                }

                // tournois_show
                if (preg_match('#^/tournois/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournois_show')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::showAction',));
                }

                // tournois_new
                if ($pathinfo === '/tournois/new') {
                    return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::newAction',  '_route' => 'tournois_new',);
                }

                // tournois_create
                if ($pathinfo === '/tournois/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tournois_create;
                    }

                    return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::createAction',  '_route' => 'tournois_create',);
                }
                not_tournois_create:

                // tournois_edit
                if (preg_match('#^/tournois/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournois_edit')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::editAction',));
                }

                // tournois_update
                if (preg_match('#^/tournois/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tournois_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournois_update')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::updateAction',));
                }
                not_tournois_update:

                // tournois_delete
                if (preg_match('#^/tournois/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tournois_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournois_delete')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::deleteAction',));
                }
                not_tournois_delete:

            }

            if (0 === strpos($pathinfo, '/tablereference')) {
                // tablereference
                if (rtrim($pathinfo, '/') === '/tablereference') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tablereference');
                    }

                    return array (  '_controller' => 'GTGestionTournoisBundle:TableReference:index',  '_route' => 'tablereference',);
                }

                // tablereference_show
                if (preg_match('#^/tablereference/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tablereference_show')), array (  '_controller' => 'GTGestionTournoisBundle:TableReference:show',));
                }

                // tablereference_new
                if ($pathinfo === '/tablereference/new') {
                    return array (  '_controller' => 'GTGestionTournoisBundle:TableReference:new',  '_route' => 'tablereference_new',);
                }

                // tablereference_create
                if ($pathinfo === '/tablereference/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tablereference_create;
                    }

                    return array (  '_controller' => 'GTGestionTournoisBundle:TableReference:create',  '_route' => 'tablereference_create',);
                }
                not_tablereference_create:

                // tablereference_edit
                if (preg_match('#^/tablereference/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tablereference_edit')), array (  '_controller' => 'GTGestionTournoisBundle:TableReference:edit',));
                }

                // tablereference_update
                if (preg_match('#^/tablereference/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tablereference_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tablereference_update')), array (  '_controller' => 'GTGestionTournoisBundle:TableReference:update',));
                }
                not_tablereference_update:

                // tablereference_delete
                if (preg_match('#^/tablereference/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tablereference_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tablereference_delete')), array (  '_controller' => 'GTGestionTournoisBundle:TableReference:delete',));
                }
                not_tablereference_delete:

            }

        }

        if (0 === strpos($pathinfo, '/equipes/equipes')) {
            // equipes
            if ($pathinfo === '/equipes/equipes') {
                return array (  '_controller' => 'GTGestionTournoisBundle:Equipes:index',  '_route' => 'equipes',);
            }

            // equipes_show
            if (preg_match('#^/equipes/equipes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipes_show')), array (  '_controller' => 'GTGestionTournoisBundle:Equipes:show',));
            }

            // equipes_new
            if ($pathinfo === '/equipes/equipes/new') {
                return array (  '_controller' => 'GTGestionTournoisBundle:Equipes:new',  '_route' => 'equipes_new',);
            }

            // equipes_create
            if ($pathinfo === '/equipes/equipes/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_equipes_create;
                }

                return array (  '_controller' => 'GTGestionTournoisBundle:Equipes:create',  '_route' => 'equipes_create',);
            }
            not_equipes_create:

            // equipes_edit
            if (preg_match('#^/equipes/equipes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipes_edit')), array (  '_controller' => 'GTGestionTournoisBundle:Equipes:edit',));
            }

            // equipes_update
            if (preg_match('#^/equipes/equipes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_equipes_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipes_update')), array (  '_controller' => 'GTGestionTournoisBundle:Equipes:update',));
            }
            not_equipes_update:

            // equipes_delete
            if (preg_match('#^/equipes/equipes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_equipes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipes_delete')), array (  '_controller' => 'GTGestionTournoisBundle:Equipes:delete',));
            }
            not_equipes_delete:

        }

        if (0 === strpos($pathinfo, '/tour')) {
            // tour
            if (rtrim($pathinfo, '/') === '/tour') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tour');
                }

                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TourController::indexAction',  '_route' => 'tour',);
            }

            // tour_show
            if (preg_match('#^/tour/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tour_show')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TourController::showAction',));
            }

            // tour_new
            if ($pathinfo === '/tour/new') {
                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TourController::newAction',  '_route' => 'tour_new',);
            }

            // tour_create
            if ($pathinfo === '/tour/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tour_create;
                }

                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TourController::createAction',  '_route' => 'tour_create',);
            }
            not_tour_create:

            // tour_edit
            if (preg_match('#^/tour/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tour_edit')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TourController::editAction',));
            }

            // tour_update
            if (preg_match('#^/tour/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tour_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tour_update')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TourController::updateAction',));
            }
            not_tour_update:

            // tour_delete
            if (preg_match('#^/tour/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tour_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tour_delete')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TourController::deleteAction',));
            }
            not_tour_delete:

        }

        if (0 === strpos($pathinfo, '/systeme')) {
            // systeme
            if (rtrim($pathinfo, '/') === '/systeme') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'systeme');
                }

                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\SystemeController::indexAction',  '_route' => 'systeme',);
            }

            // systeme_show
            if (preg_match('#^/systeme/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'systeme_show')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\SystemeController::showAction',));
            }

            // systeme_new
            if ($pathinfo === '/systeme/new') {
                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\SystemeController::newAction',  '_route' => 'systeme_new',);
            }

            // systeme_create
            if ($pathinfo === '/systeme/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_systeme_create;
                }

                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\SystemeController::createAction',  '_route' => 'systeme_create',);
            }
            not_systeme_create:

            // systeme_edit
            if (preg_match('#^/systeme/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'systeme_edit')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\SystemeController::editAction',));
            }

            // systeme_update
            if (preg_match('#^/systeme/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_systeme_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'systeme_update')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\SystemeController::updateAction',));
            }
            not_systeme_update:

            // systeme_delete
            if (preg_match('#^/systeme/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_systeme_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'systeme_delete')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\SystemeController::deleteAction',));
            }
            not_systeme_delete:

        }

        if (0 === strpos($pathinfo, '/typecarte')) {
            // typecarte
            if (rtrim($pathinfo, '/') === '/typecarte') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'typecarte');
                }

                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TypeCarteController::indexAction',  '_route' => 'typecarte',);
            }

            // typecarte_show
            if (preg_match('#^/typecarte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecarte_show')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TypeCarteController::showAction',));
            }

            // typecarte_new
            if ($pathinfo === '/typecarte/new') {
                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TypeCarteController::newAction',  '_route' => 'typecarte_new',);
            }

            // typecarte_create
            if ($pathinfo === '/typecarte/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_typecarte_create;
                }

                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TypeCarteController::createAction',  '_route' => 'typecarte_create',);
            }
            not_typecarte_create:

            // typecarte_edit
            if (preg_match('#^/typecarte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecarte_edit')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TypeCarteController::editAction',));
            }

            // typecarte_update
            if (preg_match('#^/typecarte/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_typecarte_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecarte_update')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TypeCarteController::updateAction',));
            }
            not_typecarte_update:

            // typecarte_delete
            if (preg_match('#^/typecarte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_typecarte_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecarte_delete')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TypeCarteController::deleteAction',));
            }
            not_typecarte_delete:

        }

        if (0 === strpos($pathinfo, '/categorie')) {
            // categorie
            if (rtrim($pathinfo, '/') === '/categorie') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categorie');
                }

                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie',);
            }

            // categorie_show
            if (preg_match('#^/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\CategorieController::showAction',));
            }

            // categorie_new
            if ($pathinfo === '/categorie/new') {
                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
            }

            // categorie_create
            if ($pathinfo === '/categorie/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categorie_create;
                }

                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\CategorieController::createAction',  '_route' => 'categorie_create',);
            }
            not_categorie_create:

            // categorie_edit
            if (preg_match('#^/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\CategorieController::editAction',));
            }

            // categorie_update
            if (preg_match('#^/categorie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_categorie_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_update')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\CategorieController::updateAction',));
            }
            not_categorie_update:

            // categorie_delete
            if (preg_match('#^/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_categorie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\CategorieController::deleteAction',));
            }
            not_categorie_delete:

        }

        if (0 === strpos($pathinfo, '/groupe')) {
            // groupe
            if (rtrim($pathinfo, '/') === '/groupe') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'groupe');
                }

                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\GroupeController::indexAction',  '_route' => 'groupe',);
            }

            // groupe_show
            if (preg_match('#^/groupe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_show')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\GroupeController::showAction',));
            }

            // groupe_new
            if ($pathinfo === '/groupe/new') {
                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\GroupeController::newAction',  '_route' => 'groupe_new',);
            }

            // groupe_create
            if ($pathinfo === '/groupe/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_groupe_create;
                }

                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\GroupeController::createAction',  '_route' => 'groupe_create',);
            }
            not_groupe_create:

            // groupe_edit
            if (preg_match('#^/groupe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_edit')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\GroupeController::editAction',));
            }

            // groupe_update
            if (preg_match('#^/groupe/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_groupe_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_update')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\GroupeController::updateAction',));
            }
            not_groupe_update:

            // groupe_delete
            if (preg_match('#^/groupe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_groupe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_delete')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\GroupeController::deleteAction',));
            }
            not_groupe_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
