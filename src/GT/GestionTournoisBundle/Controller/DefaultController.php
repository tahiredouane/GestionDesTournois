<?php

namespace GT\GestionTournoisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GTGestionTournoisBundle:Default:index.html.twig', array('name' => $name));
    }
}
