<?php

namespace App\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function menuAction(){
        $em = $this->getDoctrine()->getManager();

        $menus = $em->getRepository('AdminMenuBundle:Menu')->findAll();

        // if($menus == null){
        //     throw $this->createNotFoundException('Menu non trouvé !!! Contacter le webmaster à l\'adresse webmaster@kns-3w.com');
        // }
        return $this->render('AppMenuBundle:Menu:menu.html.twig', array('menus' => $menus));
    }
}
