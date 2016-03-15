<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Manufactor
 *
 * @ORM\Table(name="manufactor")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ManufactorRepository")
 */
class Manufactor
{
    public function __construct()
    {
        $this->manufactors = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Article", mappedBy="manufactor")
     */
    private $manufactors;

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
     * @ORM\Column(name="link", type="text")
     */
    private $link;


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
     * @return Manufactor
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
     * Set link
     *
     * @param string $link
     *
     * @return Manufactor
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Add manufactor
     *
     * @param \AppBundle\Entity\Article $manufactor
     *
     * @return Manufactor
     */
    public function addManufactor(\AppBundle\Entity\Article $manufactor)
    {
        $this->manufactors[] = $manufactor;

        return $this;
    }

    /**
     * Remove manufactor
     *
     * @param \AppBundle\Entity\Article $manufactor
     */
    public function removeManufactor(\AppBundle\Entity\Article $manufactor)
    {
        $this->manufactors->removeElement($manufactor);
    }

    /**
     * Get manufactors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getManufactors()
    {
        return $this->manufactors;
    }
}
