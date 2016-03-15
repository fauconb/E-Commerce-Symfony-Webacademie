<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Article_compatibilities
 *
 * @ORM\Table(name="article_compatibilities")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Article_compatibilitiesRepository")
 */
class Article_compatibilities
{
    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Article", mappedBy="compatibilities")
     */
    private $articles;

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
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Article_compatibilities
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
     * Add article
     *
     * @param \AppBundle\Entity\Articles $article
     *
     * @return Article_compatibilities
     */
    public function addArticle(\AppBundle\Entity\Articles $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \AppBundle\Entity\Articles $article
     */
    public function removeArticle(\AppBundle\Entity\Articles $article)
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
}
