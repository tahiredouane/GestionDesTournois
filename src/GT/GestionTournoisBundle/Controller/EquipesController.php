<?php

namespace GT\GestionTournoisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GT\GestionTournoisBundle\Entity\Equipes;
use GT\GestionTournoisBundle\Form\EquipesType;

/**
 * Equipes controller.
 *
 */
class EquipesController extends Controller
{
    /**
     * Lists all Equipes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GTGestionTournoisBundle:Equipes')->findAll();

        return $this->render('GTGestionTournoisBundle:Equipes:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Equipes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Equipes();
        $form = $this->createForm(new EquipesType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('equipes_show', array('id' => $entity->getId())));
        }

        return $this->render('GTGestionTournoisBundle:Equipes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Equipes entity.
     *
     */
    public function newAction()
    {
        $entity = new Equipes();
        $form   = $this->createForm(new EquipesType(), $entity);

        return $this->render('GTGestionTournoisBundle:Equipes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Equipes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:Equipes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equipes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GTGestionTournoisBundle:Equipes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Equipes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:Equipes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equipes entity.');
        }

        $editForm = $this->createForm(new EquipesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GTGestionTournoisBundle:Equipes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Equipes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:Equipes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equipes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EquipesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('equipes_edit', array('id' => $id)));
        }

        return $this->render('GTGestionTournoisBundle:Equipes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Equipes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GTGestionTournoisBundle:Equipes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Equipes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('equipes'));
    }

    /**
     * Creates a form to delete a Equipes entity by id.
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
