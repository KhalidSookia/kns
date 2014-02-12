<?php

namespace App\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AppController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();

        $mains = $em->getRepository('AppPageBundle:Main')->findBy(array('active' => '1'));


        if($mains == null){
            throw $this->createNotFoundException('Mains non trouvé !!! Contacter le webmaster à l\'adresse webmaster@kns-3w.com');
        }
        return $this->render('AppAppBundle:App:index.html.twig', 
        	array(
        		'mains' => $mains,
        		));

    }

    public function companyAction(){
        $em = $this->getDoctrine()->getManager();

        $company = $em->getRepository('AppPageBundle:Company')->findBy(
            array('active' => true));

        // if (!$company) {
        //     throw $this->createNotFoundException('Company non trouvé !!! Contacter le webmaster à l\'adresse webmaster@kns-3w.com');
        // }

        return $this->render('AppAppBundle:App:company.html.twig', array('companies' => $company));
    }

    public function servicesAction(){
        $em = $this->getDoctrine()->getManager();

        $services = $em->getRepository('AppPageBundle:Services')->findBy(
            array('active' => true));

        // if (!$company) {
        //     throw $this->createNotFoundException('Company non trouvé !!! Contacter le webmaster à l\'adresse webmaster@kns-3w.com');
        // }

        return $this->render('AppAppBundle:App:services.html.twig', array('services' => $services));
    }

    public function pageAction($slug){
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository('AppProductBundle:Product')->findBy(
            array('active' => true, 'slug' => $slug));

        if (!$product) {
            throw $this->createNotFoundException('Unable to find Product product.');
        }

        return $this->render('AppAppBundle:Product:index.html.twig', array('products' => $product));
    }
}
