<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'gt_gestion_tournois_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'tournois' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tournois',    ),  ),  4 =>   array (  ),),
        'tournois_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tournois',    ),  ),  4 =>   array (  ),),
        'tournois_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tournois/new',    ),  ),  4 =>   array (  ),),
        'tournois_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tournois/create',    ),  ),  4 =>   array (  ),),
        'tournois_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tournois',    ),  ),  4 =>   array (  ),),
        'tournois_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tournois',    ),  ),  4 =>   array (  ),),
        'tournois_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TournoisController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tournois',    ),  ),  4 =>   array (  ),),
        'tablereference' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tablereference',    ),  ),  4 =>   array (  ),),
        'tablereference_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tablereference',    ),  ),  4 =>   array (  ),),
        'tablereference_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tablereference/new',    ),  ),  4 =>   array (  ),),
        'tablereference_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tablereference/create',    ),  ),  4 =>   array (  ),),
        'tablereference_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tablereference',    ),  ),  4 =>   array (  ),),
        'tablereference_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tablereference',    ),  ),  4 =>   array (  ),),
        'tablereference_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\TableReferenceController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tablereference',    ),  ),  4 =>   array (  ),),
        'equipes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipes',    ),  ),  4 =>   array (  ),),
        'equipes_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/equipes',    ),  ),  4 =>   array (  ),),
        'equipes_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipes/new',    ),  ),  4 =>   array (  ),),
        'equipes_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipes/create',    ),  ),  4 =>   array (  ),),
        'equipes_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/equipes',    ),  ),  4 =>   array (  ),),
        'equipes_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/equipes',    ),  ),  4 =>   array (  ),),
        'equipes_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GT\\GestionTournoisBundle\\Controller\\EquipesController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/equipes',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
