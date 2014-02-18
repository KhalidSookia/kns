<?php

namespace App\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\PageBundle\Entity\CompanyRepository")
 */
class Company
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
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box3", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $frontbox1;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box3", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $frontbox2;

    /**
    * @ORM\OneToOne(targetEntity="App\SubsectionBundle\Entity\Box4", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $bottombox;

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
     * Set active
     *
     * @param boolean $active
     * @return Company
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
     * Set title1
     *
     * @param \App\PagePartsBundle\Entity\Title $title1
     * @return Company
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
     * @return Company
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
     * Set sidebox1
     *
     * @param \App\SubsectionBundle\Entity\Box2 $sidebox1
     * @return Company
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
     * @return Company
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
     * @return Company
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
     * Get frontbox1
     *
     * @return \App\SubsectionBundle\Entity\Box3 
     */
    public function getFrontbox1()
    {
        return $this->frontbox1;
    }

    /**
     * Set frontbox1
     *
     * @param \App\SubsectionBundle\Entity\Box3 $frontbox1
     * @return Company
     */
    public function setFrontbox1(\App\SubsectionBundle\Entity\Box3 $frontbox1 = null)
    {
        $this->frontbox1 = $frontbox1;

        return $this;
    }

    /**
     * Get frontbox2
     *
     * @return \App\SubsectionBundle\Entity\Box3 
     */
    public function getFrontbox2()
    {
        return $this->frontbox2;
    }

    /**
     * Set frontbox2
     *
     * @param \App\SubsectionBundle\Entity\Box3 $frontbox2
     * @return Company
     */
    public function setFrontbox2(\App\SubsectionBundle\Entity\Box3 $frontbox2 = null)
    {
        $this->frontbox2 = $frontbox2;

        return $this;
    }

    /**
     * Set bottombox
     *
     * @param \App\SubsectionBundle\Entity\Box4 $bottombox
     * @return Company
     */
    public function setBottombox(\App\SubsectionBundle\Entity\Box4 $bottombox = null)
    {
        $this->bottombox = $bottombox;

        return $this;
    }

    /**
     * Get bottombox
     *
     * @return \App\SubsectionBundle\Entity\Box4 
     */
    public function getBottombox()
    {
        return $this->bottombox;
    }
}
