<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Caddie
 *
 * @ORM\Table(name="caddie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CaddieRepository")
 */
class Caddie
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
     * @ORM\Column(name="article_name", type="string", length=255)
     */
    private $articleName;

    /**
     * @var string
     *
     * @ORM\Column(name="article_ref", type="string", length=255)
     */
    private $articleRef;

    /**
     * @var int
     *
     * @ORM\Column(name="article_quantity", type="integer")
     */
    private $articleQuantity;

    /**
     * @var float
     *
     * @ORM\Column(name="article_price", type="float")
     */
    private $articlePrice;

    /**
     * @var int
     *
     * @ORM\Column(name="article_tax", type="integer")
     */
    private $articleTax;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


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
     * Set articleName
     *
     * @param string $articleName
     *
     * @return Caddie
     */
    public function setArticleName($articleName)
    {
        $this->articleName = $articleName;

        return $this;
    }

    /**
     * Get articleName
     *
     * @return string
     */
    public function getArticleName()
    {
        return $this->articleName;
    }

    /**
     * Set articleRef
     *
     * @param string $articleRef
     *
     * @return Caddie
     */
    public function setArticleRef($articleRef)
    {
        $this->articleRef = $articleRef;

        return $this;
    }

    /**
     * Get articleRef
     *
     * @return string
     */
    public function getArticleRef()
    {
        return $this->articleRef;
    }

    /**
     * Set articleQuantity
     *
     * @param integer $articleQuantity
     *
     * @return Caddie
     */
    public function setArticleQuantity($articleQuantity)
    {
        $this->articleQuantity = $articleQuantity;

        return $this;
    }

    /**
     * Get articleQuantity
     *
     * @return int
     */
    public function getArticleQuantity()
    {
        return $this->articleQuantity;
    }

    /**
     * Set articlePrice
     *
     * @param float $articlePrice
     *
     * @return Caddie
     */
    public function setArticlePrice($articlePrice)
    {
        $this->articlePrice = $articlePrice;

        return $this;
    }

    /**
     * Get articlePrice
     *
     * @return float
     */
    public function getArticlePrice()
    {
        return $this->articlePrice;
    }

    /**
     * Set articleTax
     *
     * @param string $articleTax
     *
     * @return Caddie
     */
    public function setArticleTax($articleTax)
    {
        $this->articleTax = $articleTax;

        return $this;
    }

    /**
     * Get articleTax
     *
     * @return string
     */
    public function getArticleTax()
    {
        return $this->articleTax;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Caddie
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Caddie
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
}

