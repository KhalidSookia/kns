<?php

namespace App\PagePartsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subtitle3
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\PagePartsBundle\Entity\Subtitle3Repository")
 */
class Subtitle3
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
     * @ORM\Column(name="subtitle3", type="string", length=255)
     */
    private $subtitle3;

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
     * Set subtitle3
     *
     * @param string $subtitle3
     * @return Subtitle3
     */
    public function setSubtitle3($subtitle3)
    {
        $this->subtitle3 = $subtitle3;

        return $this;
    }

    /**
     * Get subtitle3
     *
     * @return string 
     */
    public function getSubtitle3()
    {
        return $this->subtitle3;
    }
}
