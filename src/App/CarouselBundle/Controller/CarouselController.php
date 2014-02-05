<?php

namespace App\CarouselBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\CarouselBundle\Entity\Carousel;
use App\CarouselBundle\Form\CarouselType;
use App\UploadBundle\Entity\Upload;

/**
 * Carousel controller.
 *
 * @Route("/admin/carousel")
 */
class CarouselController extends Controller
{

    /**
     * Lists all Carousel entities.
     *
     * @Route("/", name="admin_carousel")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppCarouselBundle:Carousel')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Carousel entity.
     *
     * @Route("/", name="admin_carousel_create")
     * @Method("POST")
     * @Template("AppCarouselBundle:Carousel:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Carousel();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $entity->getImage()->upload();
            $em->flush();

            return $this->redirect($this->generateUrl('admin_carousel_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Carousel entity.
    *
    * @param Carousel $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Carousel $entity)
    {
        $form = $this->createForm(new CarouselType(), $entity, array(
            'action' => $this->generateUrl('admin_carousel_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Carousel entity.
     *
     * @Route("/new", name="admin_carousel_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Carousel();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Carousel entity.
     *
     * @Route("/{id}", name="admin_carousel_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppCarouselBundle:Carousel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Carousel entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Carousel entity.
     *
     * @Route("/{id}/edit", name="admin_carousel_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppCarouselBundle:Carousel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Carousel entity.');
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
    * Creates a form to edit a Carousel entity.
    *
    * @param Carousel $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Carousel $entity)
    {
        $form = $this->createForm(new CarouselType(), $entity, array(
            'action' => $this->generateUrl('admin_carousel_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Carousel entity.
     *
     * @Route("/{id}", name="admin_carousel_update")
     * @Method("PUT")
     * @Template("AppCarouselBundle:Carousel:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppCarouselBundle:Carousel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Carousel entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_carousel_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Carousel entity.
     *
     * @Route("/{id}", name="admin_carousel_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppCarouselBundle:Carousel')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Carousel entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_carousel'));
    }

    /**
     * Creates a form to delete a Carousel entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_carousel_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    public function carouselAction(){
        $em = $this->getDoctrine()->getManager();

        $carousels = $em->getRepository('AppCarouselBundle:Carousel')->findBy(array('active' => '1'));

        // if($carousels == null){
        //     throw $this->createNotFoundException('Carousel non trouvé !!! Contacter le webmaster à l\'adresse webmaster@kns-3w.com');
        // }
        return $this->render('AppCarouselBundle:Carousel:carousel.html.twig', array('carousels' => $carousels));
    }
}
