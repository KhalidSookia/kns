<?php

namespace App\PagePartsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\PagePartsBundle\Entity\Short;
use App\PagePartsBundle\Form\ShortType;

/**
 * Short controller.
 *
 * @Route("/admin/short")
 */
class ShortController extends Controller
{

    /**
     * Lists all Short entities.
     *
     * @Route("/", name="admin_short")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppPagePartsBundle:Short')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Short entity.
     *
     * @Route("/", name="admin_short_create")
     * @Method("POST")
     * @Template("AppPagePartsBundle:Short:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Short();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_short_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Short entity.
    *
    * @param Short $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Short $entity)
    {
        $form = $this->createForm(new ShortType(), $entity, array(
            'action' => $this->generateUrl('admin_short_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Short entity.
     *
     * @Route("/new", name="admin_short_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Short();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Short entity.
     *
     * @Route("/{id}", name="admin_short_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPagePartsBundle:Short')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Short entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Short entity.
     *
     * @Route("/{id}/edit", name="admin_short_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPagePartsBundle:Short')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Short entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Short entity.
    *
    * @param Short $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Short $entity)
    {
        $form = $this->createForm(new ShortType(), $entity, array(
            'action' => $this->generateUrl('admin_short_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Short entity.
     *
     * @Route("/{id}", name="admin_short_update")
     * @Method("PUT")
     * @Template("AppPagePartsBundle:Short:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPagePartsBundle:Short')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Short entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_short_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Short entity.
     *
     * @Route("/{id}", name="admin_short_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppPagePartsBundle:Short')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Short entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_short'));
    }

    /**
     * Creates a form to delete a Short entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_short_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
