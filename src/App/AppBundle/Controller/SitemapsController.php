<?php
namespace App\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SitemapsController extends Controller
{

    /**
     * @Route("/sitemap.{_format}", name="sample_sitemaps_sitemap", Requirements={"_format" = "xml"})
     * @Template("AcmeSampleStoreBundle:Sitemaps:sitemap.xml.twig")
     */
    public function sitemapAction() 
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $urls = array();
        $hostname = $this->getRequest()->getHost();

        // add some urls homepage
        $urls[] = array('loc' => $this->get('router')->generate('app_app_homepage'), 'changefreq' => 'weekly', 'priority' => '1.0');
        $urls[] = array('loc' => $this->get('router')->generate('app_app_company'), 'changefreq' => 'weekly', 'priority' => '1.0');
        $urls[] = array('loc' => $this->get('router')->generate('app_app_services'), 'changefreq' => 'weekly', 'priority' => '1.0');
        $urls[] = array('loc' => $this->get('router')->generate('app_app_homepage'), 'changefreq' => 'weekly', 'priority' => '1.0');
        $urls[] = array('loc' => $this->get('router')->generate('contact_new'), 'changefreq' => 'weekly', 'priority' => '0.9');
            

        return $this->render('AppAppBundle:App:sitemap.xml.twig', 
            array(
                'urls' => $urls, 'hostname' => $hostname
            ));
    }
}