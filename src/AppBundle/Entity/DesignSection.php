<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * DesignSection
 *
 * @ORM\Table(name="design_section")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DesignSectionRepository")
 */
class DesignSection
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
     * @ORM\Column(name="style", type="text")
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $style;

    /**
     * @var string
     *
     * @ORM\Column(name="impression", type="text")
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $impression;

    /**
     * @var string
     *
     * @ORM\Column(name="anti_features", type="text", nullable=true)
     */
    private $antiFeatures;

    /**
     * @var string
     *
     * @ORM\Column(name="anti_associations", type="text", nullable=true)
     */
    private $antiAssociations;
    


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
     * Set style
     *
     * @param string $style
     *
     * @return DesignSection
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set impression
     *
     * @param string $impression
     *
     * @return DesignSection
     */
    public function setImpression($impression)
    {
        $this->impression = $impression;

        return $this;
    }

    /**
     * Get impression
     *
     * @return string
     */
    public function getImpression()
    {
        return $this->impression;
    }

    /**
     * Set antiFeatures
     *
     * @param string $antiFeatures
     *
     * @return DesignSection
     */
    public function setAntiFeatures($antiFeatures)
    {
        $this->antiFeatures = $antiFeatures;

        return $this;
    }

    /**
     * Get antiFeatures
     *
     * @return string
     */
    public function getAntiFeatures()
    {
        return $this->antiFeatures;
    }

    /**
     * Set antiAssociations
     *
     * @param string $antiAssociations
     *
     * @return DesignSection
     */
    public function setAntiAssociations($antiAssociations)
    {
        $this->antiAssociations = $antiAssociations;

        return $this;
    }

    /**
     * Get antiAssociations
     *
     * @return string
     */
    public function getAntiAssociations()
    {
        return $this->antiAssociations;
    }
}

