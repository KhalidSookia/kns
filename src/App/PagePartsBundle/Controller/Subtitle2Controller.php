<?php

namespace App\PagePartsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\PagePartsBundle\Entity\Subtitle2;
use App\PagePartsBundle\Form\Subtitle2Type;

/**
 * Subtitle2 controller.
 *
 * @Route("/admin/subtitle2")
 */
class Subtitle2Controller extends Controller
{

    /**
     * Lists all Subtitle2 entities.
     *
     * @Route("/", name="admin_subtitle2")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppPagePartsBundle:Subtitle2')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Subtitle2 entity.
     *
     * @Route("/", name="admin_subtitle2_create")
     * @Method("POST")
     * @Template("AppPagePartsBundle:Subtitle2:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Subtitle2();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_subtitle2_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Subtitle2 entity.
    *
    * @param Subtitle2 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Subtitle2 $entity)
    {
        $form = $this->createForm(new Subtitle2Type(), $entity, array(
            'action' => $this->generateUrl('admin_subtitle2_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Subtitle2 entity.
     *
     * @Route("/new", name="admin_subtitle2_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Subtitle2();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Subtitle2 entity.
     *
     * @Route("/{id}", name="admin_subtitle2_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPagePartsBundle:Subtitle2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subtitle2 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Subtitle2 entity.
     *
     * @Route("/{id}/edit", name="admin_subtitle2_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPagePartsBundle:Subtitle2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subtitle2 entity.');
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
    * Creates a form to edit a Subtitle2 entity.
    *
    * @param Subtitle2 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Subtitle2 $entity)
    {
        $form = $this->createForm(new Subtitle2Type(), $entity, array(
            'action' => $this->generateUrl('admin_subtitle2_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Subtitle2 entity.
     *
     * @Route("/{id}", name="admin_subtitle2_update")
     * @Method("PUT")
     * @Template("AppPagePartsBundle:Subtitle2:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPagePartsBundle:Subtitle2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subtitle2 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_subtitle2_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Subtitle2 entity.
     *
     * @Route("/{id}", name="admin_subtitle2_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppPagePartsBundle:Subtitle2')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Subtitle2 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_subtitle2'));
    }

    /**
     * Creates a form to delete a Subtitle2 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_subtitle2_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
