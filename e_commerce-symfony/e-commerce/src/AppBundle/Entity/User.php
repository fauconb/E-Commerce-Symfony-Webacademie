<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $images;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\User_payment", mappedBy="user_payment")
     */
    private $payments;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\User_info", mappedBy="user_info")
     */
    private $infos;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */



    protected $id;

    public function __construct()
    {
        $this->payments = new ArrayCollection();
        $this->infos = new ArrayCollection();
        parent::__construct();

    }


    /**
     * Set images
     *
     * @param \AppBundle\Entity\User $images
     *
     * @return User
     */
    public function setImages(\AppBundle\Entity\User $images = null)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return \AppBundle\Entity\User
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add payment
     *
     * @param \AppBundle\Entity\User_payment $payment
     *
     * @return User
     */
    public function addPayment(\AppBundle\Entity\User_payment $payment)
    {
        $this->payments[] = $payment;

        return $this;
    }

    /**
     * Remove payment
     *
     * @param \AppBundle\Entity\User_payment $payment
     */
    public function removePayment(\AppBundle\Entity\User_payment $payment)
    {
        $this->payments->removeElement($payment);
    }

    /**
     * Get payments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Add info
     *
     * @param \AppBundle\Entity\User_info $info
     *
     * @return User
     */
    public function addInfo(\AppBundle\Entity\User_info $info)
    {
        $this->infos[] = $info;

        return $this;
    }

    /**
     * Remove info
     *
     * @param \AppBundle\Entity\User_info $info
     */
    public function removeInfo(\AppBundle\Entity\User_info $info)
    {
        $this->infos->removeElement($info);
    }

    /**
     * Get infos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInfos()
    {
        return $this->infos;
    }
}
