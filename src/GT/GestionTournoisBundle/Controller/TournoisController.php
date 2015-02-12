<?php

namespace GT\GestionTournoisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GT\GestionTournoisBundle\Entity\Tournois;
use GT\GestionTournoisBundle\Form\TournoisType;

/**
 * Tournois controller.
 *
 */
class TournoisController extends Controller
{
    /**
     * Lists all Tournois entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GTGestionTournoisBundle:Tournois')->findAll();

        return $this->render('GTGestionTournoisBundle:Tournois:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Tournois entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Tournois();
        $form = $this->createForm(new TournoisType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tournois_show', array('id' => $entity->getId())));
        }

        return $this->render('GTGestionTournoisBundle:Tournois:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Tournois entity.
     *
     */
    public function newAction()
    {
        $entity = new Tournois();
        $form   = $this->createForm(new TournoisType(), $entity);

        return $this->render('GTGestionTournoisBundle:Tournois:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tournois entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:Tournois')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tournois entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GTGestionTournoisBundle:Tournois:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tournois entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:Tournois')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tournois entity.');
        }

        $editForm = $this->createForm(new TournoisType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GTGestionTournoisBundle:Tournois:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Tournois entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:Tournois')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tournois entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TournoisType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tournois_edit', array('id' => $id)));
        }

        return $this->render('GTGestionTournoisBundle:Tournois:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tournois entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GTGestionTournoisBundle:Tournois')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tournois entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tournois'));
    }

    /**
     * Creates a form to delete a Tournois entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
