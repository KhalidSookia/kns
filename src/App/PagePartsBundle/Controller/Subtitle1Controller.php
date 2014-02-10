<?php

namespace App\PagePartsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\PagePartsBundle\Entity\Subtitle1;
use App\PagePartsBundle\Form\Subtitle1Type;

/**
 * Subtitle1 controller.
 *
 * @Route("/admin/subtitle1")
 */
class Subtitle1Controller extends Controller
{

    /**
     * Lists all Subtitle1 entities.
     *
     * @Route("/", name="admin_subtitle1")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppPagePartsBundle:Subtitle1')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Subtitle1 entity.
     *
     * @Route("/", name="admin_subtitle1_create")
     * @Method("POST")
     * @Template("AppPagePartsBundle:Subtitle1:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Subtitle1();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_subtitle1_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Subtitle1 entity.
    *
    * @param Subtitle1 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Subtitle1 $entity)
    {
        $form = $this->createForm(new Subtitle1Type(), $entity, array(
            'action' => $this->generateUrl('admin_subtitle1_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Subtitle1 entity.
     *
     * @Route("/new", name="admin_subtitle1_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Subtitle1();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Subtitle1 entity.
     *
     * @Route("/{id}", name="admin_subtitle1_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPagePartsBundle:Subtitle1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subtitle1 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Subtitle1 entity.
     *
     * @Route("/{id}/edit", name="admin_subtitle1_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPagePartsBundle:Subtitle1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subtitle1 entity.');
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
    * Creates a form to edit a Subtitle1 entity.
    *
    * @param Subtitle1 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Subtitle1 $entity)
    {
        $form = $this->createForm(new Subtitle1Type(), $entity, array(
            'action' => $this->generateUrl('admin_subtitle1_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Subtitle1 entity.
     *
     * @Route("/{id}", name="admin_subtitle1_update")
     * @Method("PUT")
     * @Template("AppPagePartsBundle:Subtitle1:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPagePartsBundle:Subtitle1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subtitle1 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_subtitle1_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Subtitle1 entity.
     *
     * @Route("/{id}", name="admin_subtitle1_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppPagePartsBundle:Subtitle1')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Subtitle1 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_subtitle1'));
    }

    /**
     * Creates a form to delete a Subtitle1 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_subtitle1_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
