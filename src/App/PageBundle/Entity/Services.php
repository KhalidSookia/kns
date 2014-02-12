<?php

namespace App\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Services
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\PageBundle\Entity\ServicesRepository")
 */
class Services
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
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Title", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $title1;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box5", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $frontbox1;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box5", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $frontbox2;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box5", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $frontbox3;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box5", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $frontbox4;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box5", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $frontbox5;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box5", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $frontbox6;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box6", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $bottombox1;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box7", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $bottombox2;

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
     * Set title1
     *
     * @param \App\PagePartsBundle\Entity\Title $title1
     * @return Services
     */
    public function setTitle1(\App\PagePartsBundle\Entity\Title $title1 = null)
    {
        $this->title1 = $title1;

        return $this;
    }

    /**
     * Get title1
     *
     * @return \App\PagePartsBundle\Entity\Title 
     */
    public function getTitle1()
    {
        return $this->title1;
    }

    /**
     * Set frontbox1
     *
     * @param \App\SubsectionBundle\Entity\Box5 $frontbox1
     * @return Services
     */
    public function setFrontbox1(\App\SubsectionBundle\Entity\Box5 $frontbox1 = null)
    {
        $this->frontbox1 = $frontbox1;

        return $this;
    }

    /**
     * Get frontbox1
     *
     * @return \App\SubsectionBundle\Entity\Box5 
     */
    public function getFrontbox1()
    {
        return $this->frontbox1;
    }

    /**
     * Set frontbox2
     *
     * @param \App\SubsectionBundle\Entity\Box5 $frontbox2
     * @return Services
     */
    public function setFrontbox2(\App\SubsectionBundle\Entity\Box5 $frontbox2 = null)
    {
        $this->frontbox2 = $frontbox2;

        return $this;
    }

    /**
     * Get frontbox2
     *
     * @return \App\SubsectionBundle\Entity\Box5 
     */
    public function getFrontbox2()
    {
        return $this->frontbox2;
    }

    /**
     * Set frontbox3
     *
     * @param \App\SubsectionBundle\Entity\Box5 $frontbox3
     * @return Services
     */
    public function setFrontbox3(\App\SubsectionBundle\Entity\Box5 $frontbox3 = null)
    {
        $this->frontbox3 = $frontbox3;

        return $this;
    }

    /**
     * Get frontbox3
     *
     * @return \App\SubsectionBundle\Entity\Box5 
     */
    public function getFrontbox3()
    {
        return $this->frontbox3;
    }

    /**
     * Set frontbox4
     *
     * @param \App\SubsectionBundle\Entity\Box5 $frontbox4
     * @return Services
     */
    public function setFrontbox4(\App\SubsectionBundle\Entity\Box5 $frontbox4 = null)
    {
        $this->frontbox4 = $frontbox4;

        return $this;
    }

    /**
     * Get frontbox4
     *
     * @return \App\SubsectionBundle\Entity\Box5 
     */
    public function getFrontbox4()
    {
        return $this->frontbox4;
    }

    /**
     * Set frontbox5
     *
     * @param \App\SubsectionBundle\Entity\Box5 $frontbox5
     * @return Services
     */
    public function setFrontbox5(\App\SubsectionBundle\Entity\Box5 $frontbox5 = null)
    {
        $this->frontbox5 = $frontbox5;

        return $this;
    }

    /**
     * Get frontbox5
     *
     * @return \App\SubsectionBundle\Entity\Box5 
     */
    public function getFrontbox5()
    {
        return $this->frontbox5;
    }

    /**
     * Set frontbox6
     *
     * @param \App\SubsectionBundle\Entity\Box5 $frontbox6
     * @return Services
     */
    public function setFrontbox6(\App\SubsectionBundle\Entity\Box5 $frontbox6 = null)
    {
        $this->frontbox6 = $frontbox6;

        return $this;
    }

    /**
     * Get frontbox6
     *
     * @return \App\SubsectionBundle\Entity\Box5 
     */
    public function getFrontbox6()
    {
        return $this->frontbox6;
    }

    /**
     * Set bottombox1
     *
     * @param \App\SubsectionBundle\Entity\Box6 $bottombox1
     * @return Services
     */
    public function setBottombox1(\App\SubsectionBundle\Entity\Box6 $bottombox1 = null)
    {
        $this->bottombox1 = $bottombox1;

        return $this;
    }

    /**
     * Get bottombox1
     *
     * @return \App\SubsectionBundle\Entity\Box6 
     */
    public function getBottombox1()
    {
        return $this->bottombox1;
    }

    /**
     * Set bottombox2
     *
     * @param \App\SubsectionBundle\Entity\Box7 $bottombox2
     * @return Services
     */
    public function setBottombox2(\App\SubsectionBundle\Entity\Box7 $bottombox2 = null)
    {
        $this->bottombox2 = $bottombox2;

        return $this;
    }

    /**
     * Get bottombox2
     *
     * @return \App\SubsectionBundle\Entity\Box7 
     */
    public function getBottombox2()
    {
        return $this->bottombox2;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Services
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
}
