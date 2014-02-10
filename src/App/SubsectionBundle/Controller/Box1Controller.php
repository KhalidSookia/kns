<?php

namespace App\SubsectionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\SubsectionBundle\Entity\Box1;
use App\SubsectionBundle\Form\Box1Type;

/**
 * Box1 controller.
 *
 * @Route("/admin/box1")
 */
class Box1Controller extends Controller
{

    /**
     * Lists all Box1 entities.
     *
     * @Route("/", name="admin_box1")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppSubsectionBundle:Box1')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Box1 entity.
     *
     * @Route("/", name="admin_box1_create")
     * @Method("POST")
     * @Template("AppSubsectionBundle:Box1:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Box1();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $entity->getUpload()->upload();
            $em->flush();

            return $this->redirect($this->generateUrl('admin_box1_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Box1 entity.
    *
    * @param Box1 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Box1 $entity)
    {
        $form = $this->createForm(new Box1Type(), $entity, array(
            'action' => $this->generateUrl('admin_box1_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Box1 entity.
     *
     * @Route("/new", name="admin_box1_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Box1();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Box1 entity.
     *
     * @Route("/{id}", name="admin_box1_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSubsectionBundle:Box1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Box1 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Box1 entity.
     *
     * @Route("/{id}/edit", name="admin_box1_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSubsectionBundle:Box1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Box1 entity.');
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
    * Creates a form to edit a Box1 entity.
    *
    * @param Box1 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Box1 $entity)
    {
        $form = $this->createForm(new Box1Type(), $entity, array(
            'action' => $this->generateUrl('admin_box1_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Box1 entity.
     *
     * @Route("/{id}", name="admin_box1_update")
     * @Method("PUT")
     * @Template("AppSubsectionBundle:Box1:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSubsectionBundle:Box1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Box1 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_box1_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Box1 entity.
     *
     * @Route("/{id}", name="admin_box1_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppSubsectionBundle:Box1')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Box1 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_box1'));
    }

    /**
     * Creates a form to delete a Box1 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_box1_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
