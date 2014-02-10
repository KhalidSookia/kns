<?php

namespace App\PagePartsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subtitle1
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\PagePartsBundle\Entity\Subtitle1Repository")
 */
class Subtitle1
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
     * @ORM\Column(name="subtitle1", type="string", length=255, nullable=true)
     */
    private $subtitle1;


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
     * Set subtitle1
     *
     * @param string $subtitle1
     * @return Subtitle1
     */
    public function setSubtitle1($subtitle1)
    {
        $this->subtitle1 = $subtitle1;

        return $this;
    }

    /**
     * Get subtitle1
     *
     * @return string 
     */
    public function getSubtitle1()
    {
        return $this->subtitle1;
    }
}
