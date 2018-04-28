<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/**
 * @ORM\Entity(repositoryClass="App\Repository\FigureRepository")
 */
class Figure
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    public function getId()
    {
        return $this->id;
    }
    
    
    
    
    /**
	 * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    private $name;
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    
    
    
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $description;
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    
    

    
    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "image/jpeg" })
     */
    private $image;
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
    
    
    
    
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Message", mappedBy="figure")
     */
    private $messages;
    /**
     * @return Collection|Message[]
     */
    public function getMessages()
    {
        return $this->messages;
    }
    
    
    
    
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $difficulty;
    public function getDifficulty()
    {
        return $this->difficulty;
    }
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;
    }
    
    
    
    
    public function __construct()
    {
        $this->messages = new ArrayCollection();
        $this->secondaryImages = new ArrayCollection();
    }
    
    
    
    
}