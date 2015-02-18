<?php

namespace GT\GestionTournoisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GT\GestionTournoisBundle\Entity\Categorie;
use GT\GestionTournoisBundle\Form\CategorieType;

/**
 * Categorie controller.
 *
 */
class CategorieController extends Controller
{
    /**
     * Lists all Categorie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GTGestionTournoisBundle:Categorie')->findAll();

        return $this->render('GTGestionTournoisBundle:Categorie:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Categorie entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Categorie();
        $form = $this->createForm(new CategorieType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categorie_show', array('id' => $entity->getId())));
        }

        return $this->render('GTGestionTournoisBundle:Categorie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Categorie entity.
     *
     */
    public function newAction()
    {
        $entity = new Categorie();
        $form   = $this->createForm(new CategorieType(), $entity);

        return $this->render('GTGestionTournoisBundle:Categorie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Categorie entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GTGestionTournoisBundle:Categorie:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Categorie entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $editForm = $this->createForm(new CategorieType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GTGestionTournoisBundle:Categorie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Categorie entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GTGestionTournoisBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CategorieType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categorie_edit', array('id' => $id)));
        }

        return $this->render('GTGestionTournoisBundle:Categorie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Categorie entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GTGestionTournoisBundle:Categorie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Categorie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('categorie'));
    }

    /**
     * Creates a form to delete a Categorie entity by id.
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
