<?php

namespace AJT\ReviewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Negative
 *
 * @ORM\Table(name="negative")
 * @ORM\Entity(repositoryClass="AJT\ReviewBundle\Repository\NegativeRepository")
 */
class Negative
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
     * @ORM\Column(name="negative", type="string", length=255, unique=true)
     */
    private $negative;


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
     * Set negative
     *
     * @param string $negative
     * @return Negative
     */
    public function setNegative($negative)
    {
        $this->negative = $negative;

        return $this;
    }

    /**
     * Get negative
     *
     * @return string 
     */
    public function getNegative()
    {
        return $this->negative;
    }
}
