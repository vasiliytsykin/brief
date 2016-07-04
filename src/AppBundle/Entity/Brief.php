<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * Brief
 *
 * @ORM\Table(name="brief")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BriefRepository")
 */
class Brief
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
     * @ManyToOne(targetEntity="AppBundle\Entity\Company")
     * @JoinColumn(name="company_id", referencedColumnName="id")
     */
    private $company;

    /**
     * @ManyToOne(targetEntity="AppBundle\Entity\Manager")
     * @JoinColumn(name="manager_id", referencedColumnName="id")
     */
    private $manager;

    /**
     * @OneToOne(targetEntity="AppBundle\Entity\MarketingSection")
     * @JoinColumn(name="marketing_section_id", referencedColumnName="id")
     */
    private $marketingSection;

    /**
     * @OneToOne(targetEntity="AppBundle\Entity\GeneralInfoSection")
     * @JoinColumn(name="general_info_section_id", referencedColumnName="id")
     */
    private $generalInfoSection;

    /**
     * @OneToOne(targetEntity="AppBundle\Entity\DesignSection")
     * @JoinColumn(name="design_section_id", referencedColumnName="id")
     */
    private $designSection;

    /**
     * @OneToOne(targetEntity="AppBundle\Entity\TechDesignSection")
     * @JoinColumn(name="tech_design_section_id", referencedColumnName="id")
     */
    private $techDesignSection;

    /**
     * @OneToOne(targetEntity="AppBundle\Entity\CodeSection")
     * @JoinColumn(name="code_section_id", referencedColumnName="id")
     */
    private $codeSection;

    /**
     * @OneToOne(targetEntity="AppBundle\Entity\MakeupSection")
     * @JoinColumn(name="makeup_section_id", referencedColumnName="id")
     */
    private $makeupSection;

    /**
     * @OneToOne(targetEntity="AppBundle\Entity\ModuleSection")
     * @JoinColumn(name="module_section_id", referencedColumnName="id")
     */
    private $moduleSection;



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
     * Set companyId
     *
     * @param integer $company
     *
     * @return Brief
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get companyId
     *
     * @return int
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set managerId
     *
     * @param integer $manager
     *
     * @return Brief
     */
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get managerId
     *
     * @return int
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set marketingSectionId
     *
     * @param integer $marketingSection
     *
     * @return Brief
     */
    public function setMarketingSection($marketingSection)
    {
        $this->marketingSection = $marketingSection;

        return $this;
    }

    /**
     * Get marketingSectionId
     *
     * @return int
     */
    public function getMarketingSection()
    {
        return $this->marketingSection;
    }

    /**
     * Set generalInfoSectionId
     *
     * @param integer $generalInfoSection
     *
     * @return Brief
     */
    public function setGeneralInfoSection($generalInfoSection)
    {
        $this->generalInfoSection = $generalInfoSection;

        return $this;
    }

    /**
     * Get generalInfoSectionId
     *
     * @return int
     */
    public function getGeneralInfoSection()
    {
        return $this->generalInfoSection;
    }

    /**
     * Set designSectionId
     *
     * @param integer $designSection
     *
     * @return Brief
     */
    public function setDesignSection($designSection)
    {
        $this->designSection = $designSection;

        return $this;
    }

    /**
     * Get designSectionId
     *
     * @return int
     */
    public function getDesignSection()
    {
        return $this->designSection;
    }

    /**
     * Set techDesignSectionId
     *
     * @param integer $techDesignSection
     *
     * @return Brief
     */
    public function setTechDesignSection($techDesignSection)
    {
        $this->techDesignSection = $techDesignSection;

        return $this;
    }

    /**
     * Get techDesignSectionId
     *
     * @return int
     */
    public function getTechDesignSection()
    {
        return $this->techDesignSection;
    }

    /**
     * Set codeSectionId
     *
     * @param integer $codeSection
     *
     * @return Brief
     */
    public function setCodeSection($codeSection)
    {
        $this->codeSection = $codeSection;

        return $this;
    }

    /**
     * Get codeSectionId
     *
     * @return int
     */
    public function getCodeSection()
    {
        return $this->codeSection;
    }

    /**
     * Set makeupSectionId
     *
     * @param integer $makeupSection
     *
     * @return Brief
     */
    public function setMakeupSection($makeupSection)
    {
        $this->makeupSection = $makeupSection;

        return $this;
    }

    /**
     * Get makeupSectionId
     *
     * @return int
     */
    public function getMakeupSection()
    {
        return $this->makeupSection;
    }

    /**
     * Set moduleSectionId
     *
     * @param integer $moduleSection
     *
     * @return Brief
     */
    public function setModuleSection($moduleSection)
    {
        $this->moduleSection = $moduleSection;

        return $this;
    }

    /**
     * Get moduleSectionId
     *
     * @return int
     */
    public function getModuleSection()
    {
        return $this->moduleSection;
    }
}

