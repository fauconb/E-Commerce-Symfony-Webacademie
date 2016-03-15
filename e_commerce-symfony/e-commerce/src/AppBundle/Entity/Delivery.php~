<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Delivery
 *
 * @ORM\Table(name="delivery")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DeliveryRepository")
 */
class Delivery
{
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
     * @ORM\Column(name="provider", type="float")
     */
    private $provider;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delevery_min_date", type="datetime")
     */
    private $deleveryMinDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delevery_max_date", type="datetime")
     */
    private $deleveryMaxDate;


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
     * Set name
     *
     * @param string $name
     *
     * @return Delivery
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
     * @return Delivery
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set provider
     *
     * @param string $provider
     *
     * @return Delivery
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set deleveryDateMin
     *
     * @param \DateTime $deleveryDateMin
     *
     * @return Delivery
     */
    public function setDeleveryDateMin($deleveryDateMin)
    {
        $this->deleveryDateMin = $deleveryDateMin;

        return $this;
    }

    /**
     * Get deleveryDateMin
     *
     * @return \DateTime
     */
    public function getDeleveryDateMin()
    {
        return $this->deleveryDateMin;
    }

    /**
     * Set deleveryMaxDate
     *
     * @param \DateTime $deleveryMaxDate
     *
     * @return Delivery
     */
    public function setDeleveryMaxDate($deleveryMaxDate)
    {
        $this->deleveryMaxDate = $deleveryMaxDate;

        return $this;
    }

    /**
     * Get deleveryMaxDate
     *
     * @return \DateTime
     */
    public function getDeleveryMaxDate()
    {
        return $this->deleveryMaxDate;
    }

    /**
     * Set deleveryMinDate
     *
     * @param \DateTime $deleveryMinDate
     *
     * @return Delivery
     */
    public function setDeleveryMinDate($deleveryMinDate)
    {
        $this->deleveryMinDate = $deleveryMinDate;

        return $this;
    }

    /**
     * Get deleveryMinDate
     *
     * @return \DateTime
     */
    public function getDeleveryMinDate()
    {
        return $this->deleveryMinDate;
    }
}
