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
    
    /**
	 * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    private $name;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $description;
    
    
    
    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $brochure;

    public function getBrochure()
    {
        return $this->brochure;
    }

    public function setBrochure($brochure)
    {
        $this->brochure = $brochure;

        return $this;
    }
    
    
    
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $difficulty;
    
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Message", mappedBy="figure")
     */
    private $messages;
    public function __construct()
    {
        $this->messages = new ArrayCollection();
        $this->secondaryImages = new ArrayCollection();
    }
    
    
    
    
    /**
     * @return Collection|Message[]
     */
    public function getMessages()
    {
        return $this->messages;
    }
    
    
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getDifficulty()
    {
        return $this->difficulty;
    }
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;
    }
    
    
    
    
    
    
    
    
    
    
    
}


















