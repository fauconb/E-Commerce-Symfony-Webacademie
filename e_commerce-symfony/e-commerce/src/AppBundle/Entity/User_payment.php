<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User_payment
 *
 * @ORM\Table(name="user_payment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\User_paymentRepository")
 */
class User_payment
{

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="payments")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user_payment;
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
     * @ORM\Column(name="payment_type", type="string", length=255)
     */
    private $paymentType;

    /**
     * @var string
     *
     * @ORM\Column(name="card_number", type="string", length=255)
     */
    private $cardNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="card_crypto", type="integer")
     */
    private $cardCrypto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="card_expire", type="date")
     */
    private $cardExpire;

    /**
     * @var string
     *
     * @ORM\Column(name="card_name", type="string", length=255)
     */
    private $cardName;

    /**
     * @var string
     *
     * @ORM\Column(name="card_firstname", type="string", length=255)
     */
    private $cardFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="text")
     */
    private $iban;



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
     * Set paymentType
     *
     * @param string $paymentType
     *
     * @return User_payment
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set cardNumber
     *
     * @param string $cardNumber
     *
     * @return User_payment
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get cardNumber
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set cardCrypto
     *
     * @param integer $cardCrypto
     *
     * @return User_payment
     */
    public function setCardCrypto($cardCrypto)
    {
        $this->cardCrypto = $cardCrypto;

        return $this;
    }

    /**
     * Get cardCrypto
     *
     * @return integer
     */
    public function getCardCrypto()
    {
        return $this->cardCrypto;
    }

    /**
     * Set cardExpire
     *
     * @param \DateTime $cardExpire
     *
     * @return User_payment
     */
    public function setCardExpire($cardExpire)
    {
        $this->cardExpire = $cardExpire;

        return $this;
    }

    /**
     * Get cardExpire
     *
     * @return \DateTime
     */
    public function getCardExpire()
    {
        return $this->cardExpire;
    }

    /**
     * Set cardName
     *
     * @param string $cardName
     *
     * @return User_payment
     */
    public function setCardName($cardName)
    {
        $this->cardName = $cardName;

        return $this;
    }

    /**
     * Get cardName
     *
     * @return string
     */
    public function getCardName()
    {
        return $this->cardName;
    }

    /**
     * Set cardFirstname
     *
     * @param string $cardFirstname
     *
     * @return User_payment
     */
    public function setCardFirstname($cardFirstname)
    {
        $this->cardFirstname = $cardFirstname;

        return $this;
    }

    /**
     * Get cardFirstname
     *
     * @return string
     */
    public function getCardFirstname()
    {
        return $this->cardFirstname;
    }

    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return User_payment
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set userPayment
     *
     * @param \AppBundle\Entity\User $userPayment
     *
     * @return User_payment
     */
    public function setUserPayment(\AppBundle\Entity\User $userPayment = null)
    {
        $this->user_payment = $userPayment;

        return $this;
    }

    /**
     * Get userPayment
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserPayment()
    {
        return $this->user_payment;
    }
}
