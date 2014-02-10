<?php

namespace App\PagePartsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\PagePartsBundle\Entity\Subtitle3;
use App\PagePartsBundle\Form\Subtitle3Type;

/**
 * Subtitle3 controller.
 *
 * @Route("/admin/subtitle3")
 */
class Subtitle3Controller extends Controller
{

    /**
     * Lists all Subtitle3 entities.
     *
     * @Route("/", name="admin_subtitle3")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppPagePartsBundle:Subtitle3')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Subtitle3 entity.
     *
     * @Route("/", name="admin_subtitle3_create")
     * @Method("POST")
     * @Template("AppPagePartsBundle:Subtitle3:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Subtitle3();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_subtitle3_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Subtitle3 entity.
    *
    * @param Subtitle3 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Subtitle3 $entity)
    {
        $form = $this->createForm(new Subtitle3Type(), $entity, array(
            'action' => $this->generateUrl('admin_subtitle3_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Subtitle3 entity.
     *
     * @Route("/new", name="admin_subtitle3_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Subtitle3();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Subtitle3 entity.
     *
     * @Route("/{id}", name="admin_subtitle3_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPagePartsBundle:Subtitle3')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subtitle3 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Subtitle3 entity.
     *
     * @Route("/{id}/edit", name="admin_subtitle3_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPagePartsBundle:Subtitle3')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subtitle3 entity.');
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
    * Creates a form to edit a Subtitle3 entity.
    *
    * @param Subtitle3 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Subtitle3 $entity)
    {
        $form = $this->createForm(new Subtitle3Type(), $entity, array(
            'action' => $this->generateUrl('admin_subtitle3_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Subtitle3 entity.
     *
     * @Route("/{id}", name="admin_subtitle3_update")
     * @Method("PUT")
     * @Template("AppPagePartsBundle:Subtitle3:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPagePartsBundle:Subtitle3')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subtitle3 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_subtitle3_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Subtitle3 entity.
     *
     * @Route("/{id}", name="admin_subtitle3_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppPagePartsBundle:Subtitle3')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Subtitle3 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_subtitle3'));
    }

    /**
     * Creates a form to delete a Subtitle3 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_subtitle3_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
