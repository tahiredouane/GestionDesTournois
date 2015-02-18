<?php

namespace GT\GestionTournoisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GT\GestionTournoisBundle\Entity\Systeme;
use GT\GestionTournoisBundle\Form\SystemeType;

/**
 * Systeme controller.
 *
 */
class SystemeController extends Controller
{
    /**
     * Lists all Systeme entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GTGestionTournoisBundle:Systeme')->findAll();

        return $this->render('GTGestionTournoisBundle:Systeme:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Systeme entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Systeme();
        $form = $this->createForm(new SystemeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('systeme_show', array('id' => $entity->getId())));
        }

        return $this->render('GTGestionTournoisBundle:Systeme:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Systeme entity.
     *
     */
    public function newAction()
    {
        $entity = new Systeme();
        $form   = $this->createForm(new SystemeType(), $entity);

        return $this->render('GTGestionTournoisBundle:Systeme:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Systeme entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:Systeme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Systeme entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GTGestionTournoisBundle:Systeme:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Systeme entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:Systeme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Systeme entity.');
        }

        $editForm = $this->createForm(new SystemeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GTGestionTournoisBundle:Systeme:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Systeme entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:Systeme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Systeme entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SystemeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('systeme_edit', array('id' => $id)));
        }

        return $this->render('GTGestionTournoisBundle:Systeme:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Systeme entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GTGestionTournoisBundle:Systeme')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Systeme entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('systeme'));
    }

    /**
     * Creates a form to delete a Systeme entity by id.
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
