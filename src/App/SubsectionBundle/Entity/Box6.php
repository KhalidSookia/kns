<?php

namespace App\SubsectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Box6
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\SubsectionBundle\Entity\Box6Repository")
 */
class Box6
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
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Title", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $title;

    /**
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Text", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $text;


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
     * Set title
     *
     * @param \App\PagePartsBundle\Entity\Title $title
     * @return Box6
     */
    public function setTitle(\App\PagePartsBundle\Entity\Title $title = null)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return \App\PagePartsBundle\Entity\Title 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param \App\PagePartsBundle\Entity\Text $text
     * @return Box6
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
     * Set upload
     *
     * @param \App\UploadBundle\Entity\Upload $upload
     * @return Box6
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
