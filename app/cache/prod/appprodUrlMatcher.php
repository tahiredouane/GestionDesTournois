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
                if ($pathinfo === '/tournois') {
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
                if ($pathinfo === '/tablereference') {
                    return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::indexAction',  '_route' => 'tablereference',);
                }

                // tablereference_show
                if (preg_match('#^/tablereference/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tablereference_show')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::showAction',));
                }

                // tablereference_new
                if ($pathinfo === '/tablereference/new') {
                    return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::newAction',  '_route' => 'tablereference_new',);
                }

                // tablereference_create
                if ($pathinfo === '/tablereference/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tablereference_create;
                    }

                    return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::createAction',  '_route' => 'tablereference_create',);
                }
                not_tablereference_create:

                // tablereference_edit
                if (preg_match('#^/tablereference/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tablereference_edit')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::editAction',));
                }

                // tablereference_update
                if (preg_match('#^/tablereference/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tablereference_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tablereference_update')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::updateAction',));
                }
                not_tablereference_update:

                // tablereference_delete
                if (preg_match('#^/tablereference/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tablereference_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tablereference_delete')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::deleteAction',));
                }
                not_tablereference_delete:

            }

        }

        if (0 === strpos($pathinfo, '/equipes')) {
            // equipes
            if ($pathinfo === '/equipes') {
                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::indexAction',  '_route' => 'equipes',);
            }

            // equipes_show
            if (preg_match('#^/equipes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipes_show')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::showAction',));
            }

            // equipes_new
            if ($pathinfo === '/equipes/new') {
                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::newAction',  '_route' => 'equipes_new',);
            }

            // equipes_create
            if ($pathinfo === '/equipes/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_equipes_create;
                }

                return array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::createAction',  '_route' => 'equipes_create',);
            }
            not_equipes_create:

            // equipes_edit
            if (preg_match('#^/equipes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipes_edit')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::editAction',));
            }

            // equipes_update
            if (preg_match('#^/equipes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_equipes_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipes_update')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::updateAction',));
            }
            not_equipes_update:

            // equipes_delete
            if (preg_match('#^/equipes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_equipes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipes_delete')), array (  '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::deleteAction',));
            }
            not_equipes_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
