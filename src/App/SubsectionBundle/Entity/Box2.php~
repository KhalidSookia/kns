<?php

namespace App\SubsectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Box2
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\SubsectionBundle\Entity\Box2Repository")
 */
class Box2
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
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Subtitle1", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $subtitle1;

    /**
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Subtitle3", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $subtitle3;

    /**
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Short", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $short;

    /**
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Link", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $link;

    /**
    * @ORM\OneToOne(targetEntity="App\UploadBundle\Entity\Upload", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $upload;


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
     * @param \App\PagePartsBundle\Entity\Subtitle1 $subtitle1
     * @return Box2
     */
    public function setSubtitle1(\App\PagePartsBundle\Entity\Subtitle1 $subtitle1 = null)
    {
        $this->subtitle1 = $subtitle1;

        return $this;
    }

    /**
     * Get subtitle1
     *
     * @return \App\PagePartsBundle\Entity\Subtitle1 
     */
    public function getSubtitle1()
    {
        return $this->subtitle1;
    }

    /**
     * Set subtitle3
     *
     * @param \App\PagePartsBundle\Entity\Subtitle3 $subtitle3
     * @return Box2
     */
    public function setSubtitle3(\App\PagePartsBundle\Entity\Subtitle3 $subtitle3 = null)
    {
        $this->subtitle3 = $subtitle3;

        return $this;
    }

    /**
     * Get subtitle3
     *
     * @return \App\PagePartsBundle\Entity\Subtitle3 
     */
    public function getSubtitle3()
    {
        return $this->subtitle3;
    }

    /**
     * Set short
     *
     * @param \App\PagePartsBundle\Entity\Short $short
     * @return Box2
     */
    public function setShort(\App\PagePartsBundle\Entity\Short $short = null)
    {
        $this->short = $short;

        return $this;
    }

    /**
     * Get short
     *
     * @return \App\PagePartsBundle\Entity\Short 
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * Set link
     *
     * @param \App\PagePartsBundle\Entity\Link $link
     * @return Box2
     */
    public function setLink(\App\PagePartsBundle\Entity\Link $link = null)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return \App\PagePartsBundle\Entity\Link 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set upload
     *
     * @param \App\UploadBundle\Entity\Upload $upload
     * @return Box2
     */
    public function setUpload(\App\UploadBundle\Entity\Upload $upload = null)
    {
        $this->upload = $upload;

        return $this;
    }

    /**
     * Get upload
     *
     * @return \App\UploadBundle\Entity\Upload 
     */
    public function getUpload()
    {
        return $this->upload;
    }
}
