<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuleSection
 *
 * @ORM\Table(name="module_section")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModuleSectionRepository")
 */
class ModuleSection
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
     * @var int
     *
     * @ORM\Column(name="brief_id", type="integer", unique=true)
     */
    private $briefId;

    /**
     * @var string
     *
     * @ORM\Column(name="site_modules", type="text")
     */
    private $siteModules;


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
     * Set briefId
     *
     * @param integer $briefId
     *
     * @return ModuleSection
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

    /**
     * Set siteModules
     *
     * @param string $siteModules
     *
     * @return ModuleSection
     */
    public function setSiteModules($siteModules)
    {
        $this->siteModules = $siteModules;

        return $this;
    }

    /**
     * Get siteModules
     *
     * @return string
     */
    public function getSiteModules()
    {
        return $this->siteModules;
    }
}

