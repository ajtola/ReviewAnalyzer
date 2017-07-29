<?php

namespace AJT\ReviewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Topic
 *
 * @ORM\Table(name="topic")
 * @ORM\Entity(repositoryClass="AJT\ReviewBundle\Repository\TopicRepository")
 */
class Topic
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
     * @ORM\Column(name="topic", type="string", length=255, unique=true)
     */
    private $topic;

    /**
     * @var string
     *
     * @ORM\Column(name="alternativeName", type="string", length=255, nullable=true)
     */
    private $alternativeName;


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
     * Set topic
     *
     * @param string $topic
     * @return Topic
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return string 
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set alternativeName
     *
     * @param string $alternativeName
     * @return Topic
     */
    public function setAlternativeName($alternativeName)
    {
        $this->alternativeName = $alternativeName;

        return $this;
    }

    /**
     * Get alternativeName
     *
     * @return string 
     */
    public function getAlternativeName()
    {
        return $this->alternativeName;
    }
}
