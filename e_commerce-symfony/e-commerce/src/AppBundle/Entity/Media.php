<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\mediaRepository")
 */
class Media
{

    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Article", mappedBy="articles_medias")
     */
    private $articles_media;

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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="path_virtuel", type="string", length=255)
     */
    private $path_virtuel;

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="integer")
     */
    private $size;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;


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
     * Set type
     *
     * @param string $type
     *
     * @return Media
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Media
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Media
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
     * Set pathVirtuel
     *
     * @param string $pathVirtuel
     *
     * @return Media
     */
    public function setPathVirtuel($pathVirtuel)
    {
        $this->path_virtuel = $pathVirtuel;

        return $this;
    }

    /**
     * Get pathVirtuel
     *
     * @return string
     */
    public function getPathVirtuel()
    {
        return $this->path_virtuel;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return Media
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Add articlesMedia
     *
     * @param \AppBundle\Entity\Article $articlesMedia
     *
     * @return Media
     */
    public function addArticlesMedia(\AppBundle\Entity\Article $articlesMedia)
    {
        $this->articles_media[] = $articlesMedia;

        return $this;
    }

    /**
     * Remove articlesMedia
     *
     * @param \AppBundle\Entity\Article $articlesMedia
     */
    public function removeArticlesMedia(\AppBundle\Entity\Article $articlesMedia)
    {
        $this->articles_media->removeElement($articlesMedia);
    }

    /**
     * Get articlesMedia
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticlesMedia()
    {
        return $this->articles_media;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Media
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
}
