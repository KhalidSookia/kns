<?php

namespace App\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Page
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\PageBundle\Entity\PageRepository")
 */
class Page
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
    * @ORM\Column(name="name", type="text")
    *
    */
    private $name;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box3", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $main;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box5", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $sidebox;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

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
     * Set slug
     *
     * @param string $slug
     * @return Page
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Page
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set main
     *
     * @param \App\SubsectionBundle\Entity\Box3 $main
     * @return Page
     */
    public function setMain(\App\SubsectionBundle\Entity\Box3 $main = null)
    {
        $this->main = $main;

        return $this;
    }

    /**
     * Get main
     *
     * @return \App\SubsectionBundle\Entity\Box3 
     */
    public function getMain()
    {
        return $this->main;
    }

    /**
     * Set sidebox
     *
     * @param \App\SubsectionBundle\Entity\Box5 $sidebox
     * @return Page
     */
    public function setSidebox(\App\SubsectionBundle\Entity\Box5 $sidebox = null)
    {
        $this->sidebox = $sidebox;

        return $this;
    }

    /**
     * Get sidebox
     *
     * @return \App\SubsectionBundle\Entity\Box5 
     */
    public function getSidebox()
    {
        return $this->sidebox;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Page
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
