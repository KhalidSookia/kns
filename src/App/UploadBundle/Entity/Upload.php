<?php

namespace App\UploadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Upload
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\UploadBundle\Entity\UploadRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Upload
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;


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
     * Set name
     *
     * @param string $name
     * @return Upload
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

    /**
     * Set url
     *
     * @param string $url
     * @return Upload
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }



    public $file;
    public $tempFilename;

    public function setFile(UploadedFile $file){
        $this->file = $file;

        if(null !== $this->url){
            $this->tempFilename = $this->url;
            $upload_name = \uniqid();        
            $this->url = null;
        }
    }

    /**
    * @ORM\PrePersist()
    * @ORM\PreUpdate()
    */
    public function preUpload(){
        if(null === $this->file){
            return;
        }
        $upload_name = \uniqid();        

        $this->url = $upload_name.'.'.$this->file->guessExtension();
    }

    /**
    * @ORM\PostPersist()
    * @ORM\PostUpdate()
    */
    public function upload(){
        if(null === $this->file){
            return;
        }
        if(null !== $this->tempFilename){
            $oldFile = $this->getUploadRootDir().$this->tempFilename;
            if(file_exists($oldFile)){
                unlink($oldFile);
            }
        }
        $this->file->move(
            $this->getUploadRootDir(),
            $this->url);
    }

    /**
    * @ORM\PreRemove()
    */
    public function preRemoveUpload(){
        $this->tempFilename = $this->getUploadRootDir().'/'.$upload_name.'.'.$this->url;
        var_dump($this->tempFilename); die();
    }
    /**
    * @ORM\PostRemove()
    */
    public function removeUpload(){
        if(null !== $this->tempFilename){
            $oldFile = $this->getUploadRootDir().$this->tempFilename;
            if(file_exists($oldFile)){
                unlink($oldFile);
            }
        }
    }

    public function getUploadDir(){
        return 'uploads/';
    }
    protected function getUploadRootDir(){
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function getWebPath(){
        return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
    }
}
