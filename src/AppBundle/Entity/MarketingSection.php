<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MarketingSection
 *
 * @ORM\Table(name="marketing_section")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MarketingSectionRepository")
 */
class MarketingSection
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
     * @ORM\Column(name="competitors", type="text", nullable=true)
     */
    private $competitors;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="text", nullable=true)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="capacity", type="text", nullable=true)
     */
    private $capacity;


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
     * Set competitors
     *
     * @param string $competitors
     *
     * @return MarketingSection
     */
    public function setCompetitors($competitors)
    {
        $this->competitors = $competitors;

        return $this;
    }

    /**
     * Get competitors
     *
     * @return string
     */
    public function getCompetitors()
    {
        return $this->competitors;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return MarketingSection
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set capacity
     *
     * @param string $capacity
     *
     * @return MarketingSection
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }
}

