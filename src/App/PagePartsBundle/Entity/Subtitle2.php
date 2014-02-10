<?php

namespace App\PagePartsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subtitle2
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\PagePartsBundle\Entity\Subtitle2Repository")
 */
class Subtitle2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitle2", type="string", length=255)
     */
    private $subtitle2;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set subtitle2
     *
     * @param string $subtitle2
     * @return Subtitle2
     */
    public function setSubtitle2($subtitle2)
    {
        $this->subtitle2 = $subtitle2;

        return $this;
    }

    /**
     * Get subtitle2
     *
     * @return string 
     */
    public function getSubtitle2()
    {
        return $this->subtitle2;
    }
}
