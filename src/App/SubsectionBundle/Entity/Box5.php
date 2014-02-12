<?php

namespace App\SubsectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Box5
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\SubsectionBundle\Entity\Box5Repository")
 */
class Box5
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
    * @ORM\OneToOne(targetEntity="App\UploadBundle\Entity\Upload", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $upload;

    /**
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Subtitle1", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $subtitle1;

    /**
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Text", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $text;

    /**
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Link", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $link;


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
     * Set upload
     *
     * @param \App\UploadBundle\Entity\Upload $upload
     * @return Box5
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

    /**
     * Set subtitle1
     *
     * @param \App\PagePartsBundle\Entity\Subtitle1 $subtitle1
     * @return Box5
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
     * Set text
     *
     * @param \App\PagePartsBundle\Entity\Text $text
     * @return Box5
     */
    public function setText(\App\PagePartsBundle\Entity\Text $text = null)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return \App\PagePartsBundle\Entity\Text 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set link
     *
     * @param \App\PagePartsBundle\Entity\Link $link
     * @return Box5
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
}
