<?php

namespace App\SubsectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Box4
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\SubsectionBundle\Entity\Box4Repository")
 */
class Box4
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
     * @return Box4
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
     * @return Box4
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
     * Set link_text
     *
     * @param \App\PagePartsBundle\Entity\Short $linkText
     * @return Box4
     */
    public function setLinkText(\App\PagePartsBundle\Entity\Short $linkText = null)
    {
        $this->link_text = $linkText;

        return $this;
    }

    /**
     * Get link_text
     *
     * @return \App\PagePartsBundle\Entity\Short 
     */
    public function getLinkText()
    {
        return $this->link_text;
    }

    /**
     * Set link
     *
     * @param \App\PagePartsBundle\Entity\Link $link
     * @return Box4
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
