<?php

namespace App\PagePartsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Short
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\PagePartsBundle\Entity\ShortRepository")
 */
class Short
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
     * @ORM\Column(name="short", type="string", length=255)
     */
    private $short;


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
     * Set short
     *
     * @param string $short
     * @return Short
     */
    public function setShort($short)
    {
        $this->short = $short;

        return $this;
    }

    /**
     * Get short
     *
     * @return string 
     */
    public function getShort()
    {
        return $this->short;
    }
}
