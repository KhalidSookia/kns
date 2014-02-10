<?php

namespace App\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Main
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\PageBundle\Entity\MainRepository")
 */
class Main
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
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Title", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $title2;

    /**
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Short", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $various;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box1", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $frontbox1;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box1", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $frontbox2;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box1", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $frontbox3;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box1", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $frontbox4;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box2", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $sidebox1;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box2", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $sidebox2;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box2", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $sidebox3;

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
     * @return Main
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
     * Set title2
     *
     * @param \App\PagePartsBundle\Entity\Title $title2
     * @return Main
     */
    public function setTitle2(\App\PagePartsBundle\Entity\Title $title2 = null)
    {
        $this->title2 = $title2;

        return $this;
    }

    /**
     * Get title2
     *
     * @return \App\PagePartsBundle\Entity\Title 
     */
    public function getTitle2()
    {
        return $this->title2;
    }

    /**
     * Set various
     *
     * @param \App\PagePartsBundle\Entity\Short $various
     * @return Main
     */
    public function setVarious(\App\PagePartsBundle\Entity\Short $various = null)
    {
        $this->various = $various;

        return $this;
    }

    /**
     * Get various
     *
     * @return \App\PagePartsBundle\Entity\Short 
     */
    public function getVarious()
    {
        return $this->various;
    }

    /**
     * Set frontbox1
     *
     * @param \App\SubsectionBundle\Entity\Box1 $frontbox1
     * @return Main
     */
    public function setFrontbox1(\App\SubsectionBundle\Entity\Box1 $frontbox1 = null)
    {
        $this->frontbox1 = $frontbox1;

        return $this;
    }

    /**
     * Get frontbox1
     *
     * @return \App\SubsectionBundle\Entity\Box1 
     */
    public function getFrontbox1()
    {
        return $this->frontbox1;
    }

    /**
     * Set frontbox2
     *
     * @param \App\SubsectionBundle\Entity\Box1 $frontbox2
     * @return Main
     */
    public function setFrontbox2(\App\SubsectionBundle\Entity\Box1 $frontbox2 = null)
    {
        $this->frontbox2 = $frontbox2;

        return $this;
    }

    /**
     * Get frontbox2
     *
     * @return \App\SubsectionBundle\Entity\Box1 
     */
    public function getFrontbox2()
    {
        return $this->frontbox2;
    }

    /**
     * Set frontbox3
     *
     * @param \App\SubsectionBundle\Entity\Box1 $frontbox3
     * @return Main
     */
    public function setFrontbox3(\App\SubsectionBundle\Entity\Box1 $frontbox3 = null)
    {
        $this->frontbox3 = $frontbox3;

        return $this;
    }

    /**
     * Get frontbox3
     *
     * @return \App\SubsectionBundle\Entity\Box1 
     */
    public function getFrontbox3()
    {
        return $this->frontbox3;
    }

    /**
     * Set frontbox4
     *
     * @param \App\SubsectionBundle\Entity\Box1 $frontbox4
     * @return Main
     */
    public function setFrontbox4(\App\SubsectionBundle\Entity\Box1 $frontbox4 = null)
    {
        $this->frontbox4 = $frontbox4;

        return $this;
    }

    /**
     * Get frontbox4
     *
     * @return \App\SubsectionBundle\Entity\Box1 
     */
    public function getFrontbox4()
    {
        return $this->frontbox4;
    }

    /**
     * Set sidebox1
     *
     * @param \App\SubsectionBundle\Entity\Box2 $sidebox1
     * @return Main
     */
    public function setSidebox1(\App\SubsectionBundle\Entity\Box2 $sidebox1 = null)
    {
        $this->sidebox1 = $sidebox1;

        return $this;
    }

    /**
     * Get sidebox1
     *
     * @return \App\SubsectionBundle\Entity\Box2 
     */
    public function getSidebox1()
    {
        return $this->sidebox1;
    }

    /**
     * Set sidebox2
     *
     * @param \App\SubsectionBundle\Entity\Box2 $sidebox2
     * @return Main
     */
    public function setSidebox2(\App\SubsectionBundle\Entity\Box2 $sidebox2 = null)
    {
        $this->sidebox2 = $sidebox2;

        return $this;
    }

    /**
     * Get sidebox2
     *
     * @return \App\SubsectionBundle\Entity\Box2 
     */
    public function getSidebox2()
    {
        return $this->sidebox2;
    }

    /**
     * Set sidebox3
     *
     * @param \App\SubsectionBundle\Entity\Box2 $sidebox3
     * @return Main
     */
    public function setSidebox3(\App\SubsectionBundle\Entity\Box2 $sidebox3 = null)
    {
        $this->sidebox3 = $sidebox3;

        return $this;
    }

    /**
     * Get sidebox3
     *
     * @return \App\SubsectionBundle\Entity\Box2 
     */
    public function getSidebox3()
    {
        return $this->sidebox3;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Main
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
