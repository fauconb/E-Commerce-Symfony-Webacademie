<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\CategorieRepository")
 */
class Categorie
{
    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->children = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Article", mappedBy="categorie")
     */
    private $articles;

    /**
     * @ORM\OneToMany(targetEntity="AdminBundle\Entity\Categorie", mappedBy="parent")
     */
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Categorie", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;

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
     * @var string
     *
     * @ORM\Column(name="desc_min", type="string", length=255)
     */
    private $descMin;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_long", type="text")
     */
    private $descLong;


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
     * @return Categorie
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
     * Set descMin
     *
     * @param string $descMin
     *
     * @return Categorie
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
     * @return Categorie
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
     * Add article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Categorie
     */
    public function addArticle(\AppBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \AppBundle\Entity\Article $article
     */
    public function removeArticle(\AppBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Add child
     *
     * @param \AdminBundle\Entity\Categorie $child
     *
     * @return Categorie
     */
    public function addChild(\AdminBundle\Entity\Categorie $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \AdminBundle\Entity\Categorie $child
     */
    public function removeChild(\AdminBundle\Entity\Categorie $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \AdminBundle\Entity\Categorie $parent
     *
     * @return Categorie
     */
    public function setParent(\AdminBundle\Entity\Categorie $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AdminBundle\Entity\Categorie
     */
    public function getParent()
    {
        return $this->parent;
    }
}
