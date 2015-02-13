<?php

namespace GT\GestionTournoisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GT\GestionTournoisBundle\Entity\TableReference;
use GT\GestionTournoisBundle\Form\TableReferenceType;

/**
 * TableReference controller.
 *
 */
class TableReferenceController extends Controller
{
    /**
     * Lists all TableReference entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GTGestionTournoisBundle:TableReference')->findAll();

        return $this->render('GTGestionTournoisBundle:TableReference:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new TableReference entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new TableReference();
        $form = $this->createForm(new TableReferenceType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tablereference_show', array('id' => $entity->getId())));
        }

        return $this->render('GTGestionTournoisBundle:TableReference:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new TableReference entity.
     *
     */
    public function newAction()
    {
        $entity = new TableReference();
        $form   = $this->createForm(new TableReferenceType(), $entity);

        return $this->render('GTGestionTournoisBundle:TableReference:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TableReference entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:TableReference')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TableReference entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GTGestionTournoisBundle:TableReference:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing TableReference entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:TableReference')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TableReference entity.');
        }

        $editForm = $this->createForm(new TableReferenceType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GTGestionTournoisBundle:TableReference:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing TableReference entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:TableReference')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TableReference entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TableReferenceType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tablereference_edit', array('id' => $id)));
        }

        return $this->render('GTGestionTournoisBundle:TableReference:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TableReference entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GTGestionTournoisBundle:TableReference')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TableReference entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tablereference'));
    }

    /**
     * Creates a form to delete a TableReference entity by id.
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
