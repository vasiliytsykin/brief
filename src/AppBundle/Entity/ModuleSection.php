<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @var string
     *
     * @ORM\Column(name="site_modules", type="text", nullable=true)
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

