<?php

namespace AJT\ReviewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Positive
 *
 * @ORM\Table(name="positive")
 * @ORM\Entity(repositoryClass="AJT\ReviewBundle\Repository\PositiveRepository")
 */
class Positive
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
     * @ORM\Column(name="positive", type="string", length=255, unique=true)
     */
    private $positive;


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
     * Set positive
     *
     * @param string $positive
     * @return Positive
     */
    public function setPositive($positive)
    {
        $this->positive = $positive;

        return $this;
    }

    /**
     * Get positive
     *
     * @return string 
     */
    public function getPositive()
    {
        return $this->positive;
    }
}
