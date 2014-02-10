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
}
