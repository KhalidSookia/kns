<?php

namespace App\SubsectionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\SubsectionBundle\Entity\Box2;
use App\SubsectionBundle\Form\Box2Type;

/**
 * Box2 controller.
 *
 * @Route("/admin/box2")
 */
class Box2Controller extends Controller
{

    /**
     * Lists all Box2 entities.
     *
     * @Route("/", name="admin_box2")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppSubsectionBundle:Box2')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Box2 entity.
     *
     * @Route("/", name="admin_box2_create")
     * @Method("POST")
     * @Template("AppSubsectionBundle:Box2:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Box2();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $entity->getUpload()->upload();
            $em->flush();

            return $this->redirect($this->generateUrl('admin_box2_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Box2 entity.
    *
    * @param Box2 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Box2 $entity)
    {
        $form = $this->createForm(new Box2Type(), $entity, array(
            'action' => $this->generateUrl('admin_box2_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Box2 entity.
     *
     * @Route("/new", name="admin_box2_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Box2();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Box2 entity.
     *
     * @Route("/{id}", name="admin_box2_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSubsectionBundle:Box2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Box2 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Box2 entity.
     *
     * @Route("/{id}/edit", name="admin_box2_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSubsectionBundle:Box2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Box2 entity.');
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
    * Creates a form to edit a Box2 entity.
    *
    * @param Box2 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Box2 $entity)
    {
        $form = $this->createForm(new Box2Type(), $entity, array(
            'action' => $this->generateUrl('admin_box2_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Box2 entity.
     *
     * @Route("/{id}", name="admin_box2_update")
     * @Method("PUT")
     * @Template("AppSubsectionBundle:Box2:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppSubsectionBundle:Box2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Box2 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_box2_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Box2 entity.
     *
     * @Route("/{id}", name="admin_box2_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppSubsectionBundle:Box2')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Box2 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_box2'));
    }

    /**
     * Creates a form to delete a Box2 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_box2_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
