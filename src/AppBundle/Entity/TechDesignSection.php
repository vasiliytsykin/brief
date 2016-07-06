<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TechDesignSection
 *
 * @ORM\Table(name="tech_design_section")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TechDesignSectionRepository")
 */
class TechDesignSection
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
     * @ORM\Column(name="mobile", type="text", nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="browsers", type="text")
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $browsers;

    /**
     * @var string
     *
     * @ORM\Column(name="resolution", type="string", length=100)
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $resolution;

    /**
     * @var string
     *
     * @ORM\Column(name="media", type="text", nullable=true)
     */
    private $media;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="text")
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $language;


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
     * Set mobile
     *
     * @param string $mobile
     *
     * @return TechDesignSection
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set browsers
     *
     * @param string $browsers
     *
     * @return TechDesignSection
     */
    public function setBrowsers($browsers)
    {
        $this->browsers = $browsers;

        return $this;
    }

    /**
     * Get browsers
     *
     * @return string
     */
    public function getBrowsers()
    {
        return $this->browsers;
    }

    /**
     * Set resolution
     *
     * @param string $resolution
     *
     * @return TechDesignSection
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    /**
     * Get resolution
     *
     * @return string
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set media
     *
     * @param string $media
     *
     * @return TechDesignSection
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return TechDesignSection
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
}

