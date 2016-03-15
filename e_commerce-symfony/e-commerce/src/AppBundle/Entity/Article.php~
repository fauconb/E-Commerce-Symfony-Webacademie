<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticleRepository")
 */
class Article
{
    public function __construct()
    {
        $this->articles_medias = new ArrayCollection();
        $this->articles_command = new ArrayCollection();
        $this->compatibilities = new ArrayCollection();
    }

    /**
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Categorie", inversedBy="articles")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    protected $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Manufactor", inversedBy="manufactors")
     * @ORM\JoinColumn(name="manufactor_id", referencedColumnName="id")
     */
    protected $manufactor;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Media", inversedBy="articles")
     * @ORM\JoinTable(name="articles_media")
     */
    private $articles_medias;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Command", inversedBy="articles")
     * @ORM\JoinTable(name="articles_commands")
     */
    private $articles_command;

    /**
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Tax", inversedBy="articles")
     * @ORM\JoinColumn(name="tva_id", referencedColumnName="id")
     */
    protected $tva;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Article_compatibilities", inversedBy="articles")
     * @ORM\JoinTable(name="articles_compatibilities")
     */
    private $compatibilities;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="desc_min", type="float")
     */
    private $descMin;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_long", type="text")
     */
    private $descLong;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="linked_to", type="string", length=255)
     */
    private $linkedTo;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer")
     */
    private $stock;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=255)
     */
    private $weight;

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
     *
     * @return Article
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
     * Set price
     *
     * @param integer $price
     *
     * @return Article
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set descMin
     *
     * @param string $descMin
     *
     * @return Article
     */
    public function setDescMin($descMin)
    {
        $this->descMin = $descMin;

        return $this;
    }

    /**
     * Get descMin
     *
     * @return string
     */
    public function getDescMin()
    {
        return $this->descMin;
    }

    /**
     * Set descLong
     *
     * @param string $descLong
     *
     * @return Article
     */
    public function setDescLong($descLong)
    {
        $this->descLong = $descLong;

        return $this;
    }

    /**
     * Get descLong
     *
     * @return string
     */
    public function getDescLong()
    {
        return $this->descLong;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Article
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set linkedTo
     *
     * @param string $linkedTo
     *
     * @return Article
     */
    public function setLinkedTo($linkedTo)
    {
        $this->linkedTo = $linkedTo;

        return $this;
    }

    /**
     * Get linkedTo
     *
     * @return string
     */
    public function getLinkedTo()
    {
        return $this->linkedTo;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return Article
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return Article
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set categorie
     *
     * @param \AdminBundle\Entity\Categorie $categorie
     *
     * @return Article
     */
    public function setCategorie(\AdminBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \AdminBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set manufactor
     *
     * @param \AppBundle\Entity\Article_manufactor $manufactor
     *
     * @return Article
     */
    public function setManufactor(\AppBundle\Entity\Article_manufactor $manufactor = null)
    {
        $this->manufactor = $manufactor;

        return $this;
    }

    /**
     * Get manufactor
     *
     * @return \AppBundle\Entity\Article_manufactor
     */
    public function getManufactor()
    {
        return $this->manufactor;
    }

    /**
     * Add articlesMedia
     *
     * @param \AppBundle\Entity\Media $articlesMedia
     *
     * @return Article
     */
    public function addArticlesMedia(\AppBundle\Entity\Media $articlesMedia)
    {
        $this->articles_medias[] = $articlesMedia;

        return $this;
    }

    /**
     * Remove articlesMedia
     *
     * @param \AppBundle\Entity\Media $articlesMedia
     */
    public function removeArticlesMedia(\AppBundle\Entity\Media $articlesMedia)
    {
        $this->articles_medias->removeElement($articlesMedia);
    }

    /**
     * Get articlesMedias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticlesMedias()
    {
        return $this->articles_medias;
    }

    /**
     * Add articlesCommand
     *
     * @param \AppBundle\Entity\Command $articlesCommand
     *
     * @return Article
     */
    public function addArticlesCommand(\AppBundle\Entity\Command $articlesCommand)
    {
        $this->articles_command[] = $articlesCommand;

        return $this;
    }

    /**
     * Remove articlesCommand
     *
     * @param \AppBundle\Entity\Command $articlesCommand
     */
    public function removeArticlesCommand(\AppBundle\Entity\Command $articlesCommand)
    {
        $this->articles_command->removeElement($articlesCommand);
    }

    /**
     * Get articlesCommand
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticlesCommand()
    {
        return $this->articles_command;
    }

    /**
     * Set tva
     *
     * @param \AdminBundle\Entity\Tax $tva
     *
     * @return Article
     */
    public function setTva(\AdminBundle\Entity\Tax $tva = null)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return \AdminBundle\Entity\Tax
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Add compatibility
     *
     * @param \AppBundle\Entity\Article_compatibilities $compatibility
     *
     * @return Article
     */
    public function addCompatibility(\AppBundle\Entity\Article_compatibilities $compatibility)
    {
        $this->compatibilities[] = $compatibility;

        return $this;
    }

    /**
     * Remove compatibility
     *
     * @param \AppBundle\Entity\Article_compatibilities $compatibility
     */
    public function removeCompatibility(\AppBundle\Entity\Article_compatibilities $compatibility)
    {
        $this->compatibilities->removeElement($compatibility);
    }

    /**
     * Get compatibilities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompatibilities()
    {
        return $this->compatibilities;
    }
}
