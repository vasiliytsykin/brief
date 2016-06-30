<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $style;

    /**
     * @var string
     *
     * @ORM\Column(name="impression", type="text")
     */
    private $impression;

    /**
     * @var string
     *
     * @ORM\Column(name="anti_features", type="text")
     */
    private $antiFeatures;

    /**
     * @var string
     *
     * @ORM\Column(name="anti_associations", type="text")
     */
    private $antiAssociations;

    /**
     * @var int
     *
     * @ORM\Column(name="brief_id", type="integer", unique=true)
     */
    private $briefId;


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

    /**
     * Set briefId
     *
     * @param integer $briefId
     *
     * @return DesignSection
     */
    public function setBriefId($briefId)
    {
        $this->briefId = $briefId;

        return $this;
    }

    /**
     * Get briefId
     *
     * @return int
     */
    public function getBriefId()
    {
        return $this->briefId;
    }
}

