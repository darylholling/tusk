<?php

namespace WebshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\entity\User;

/**
 * Factuur
 *
 * @ORM\Table(name="factuur")
 * @ORM\Entity(repositoryClass="WebshopBundle\Repository\FactuurRepository")
 */
class Factuur
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *
     */
    private $user_id;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }



    /**
     * @var string
     *
     * @ORM\Column(name="datum", type="string", length=11)
     */
    private $datum;


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
     * Set datum
     *
     * @param string $datum
     *
     * @return Factuur
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return string
     */
    public function getDatum()
    {
        return $this->datum;
    }

    public function __toString()
    {
        return $this->getId().' '.$this->getUserId();
    }


}

