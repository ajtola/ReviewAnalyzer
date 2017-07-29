<?php

namespace AJT\ReviewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 *
 * @ORM\Table(name="review")
 * @ORM\Entity(repositoryClass="AJT\ReviewBundle\Repository\ReviewRepository")
 */
class Review
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
     * @ORM\Column(name="review", type="string", length=255)
     */
    private $review;

    /**
     * @var string
     *
     * @ORM\Column(name="analysis", type="string", length=255, nullable=true)
     */
    private $analysis;

    /**
     * @var int
     *
     * @ORM\Column(name="total", type="integer", nullable=true)
     */
    private $total;


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
     * Set review
     *
     * @param string $review
     * @return Review
     */
    public function setReview($review)
    {
        $this->review = $review;

        return $this;
    }

    /**
     * Get review
     *
     * @return string 
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * Set analysis
     *
     * @param string $analysis
     * @return Review
     */
    public function setAnalysis($analysis)
    {
        $this->analysis = $analysis;

        return $this;
    }

    /**
     * Get analysis
     *
     * @return string 
     */
    public function getAnalysis()
    {
        return $this->analysis;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return Review
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }
}
