<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @Assert\Image(
     *     minWidth = 100,
     *     maxWidth = 100,
     *     minHeight = 100,
     *     maxHeight = 100
     * )
     */
    protected $headshot;
    
    
    /**
     * @ORM\Column(type="string", length=500, name="contenu")
     */
    private $link;
    
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $isMaster;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Figure", inversedBy="secondaryImages")
     * @ORM\JoinColumn(nullable=true)
     */
    private $figure;
    
    public function getFigure(): Figure
    {
        return $this->figure;
    }
    public function setFigure(Figure $figure)
    {
        $this->figure = $figure;
    }
    
    
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getLink()
    {
        return $this->link;
    }
    public function setLink($link)
    {
        $this->link = $link;
    }
    
    
    
}