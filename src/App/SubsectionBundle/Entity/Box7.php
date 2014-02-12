<?php

namespace App\SubsectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Box7
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\SubsectionBundle\Entity\Box7Repository")
 */
class Box7
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
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Subtitle1", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $subtitle1;

    /**
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Subtitle1", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $subtitle2;

    /**
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Text", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $text1;

    /**
    * @ORM\OneToOne(targetEntity="App\PagePartsBundle\Entity\Text", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $text2;


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
     * @return Box7
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
     * Set subtitle1
     *
     * @param \App\PagePartsBundle\Entity\Subtitle1 $subtitle1
     * @return Box7
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
     * Set subtitle2
     *
     * @param \App\PagePartsBundle\Entity\Subtitle1 $subtitle2
     * @return Box7
     */
    public function setSubtitle2(\App\PagePartsBundle\Entity\Subtitle1 $subtitle2 = null)
    {
        $this->subtitle2 = $subtitle2;

        return $this;
    }

    /**
     * Get subtitle2
     *
     * @return \App\PagePartsBundle\Entity\Subtitle1 
     */
    public function getSubtitle2()
    {
        return $this->subtitle2;
    }

    /**
     * Set text1
     *
     * @param \App\PagePartsBundle\Entity\Text $text1
     * @return Box7
     */
    public function setText1(\App\PagePartsBundle\Entity\Text $text1 = null)
    {
        $this->text1 = $text1;

        return $this;
    }

    /**
     * Get text1
     *
     * @return \App\PagePartsBundle\Entity\Text 
     */
    public function getText1()
    {
        return $this->text1;
    }

    /**
     * Set text2
     *
     * @param \App\PagePartsBundle\Entity\Text $text2
     * @return Box7
     */
    public function setText2(\App\PagePartsBundle\Entity\Text $text2 = null)
    {
        $this->text2 = $text2;

        return $this;
    }

    /**
     * Get text2
     *
     * @return \App\PagePartsBundle\Entity\Text 
     */
    public function getText2()
    {
        return $this->text2;
    }
}
