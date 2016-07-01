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
     * @var int
     *
     * @ORM\Column(name="company_id", type="integer")
     * @ManyToOne(targetEntity="Company")
     * @JoinColumn(name="company_id", referencedColumnName="id")
     */
    private $companyId;

    /**
     * @var int
     *
     * @ORM\Column(name="manager_id", type="integer")
     * @ManyToOne(targetEntity="Manager")
     * @JoinColumn(name="manager_id", referencedColumnName="id")
     */
    private $managerId;

    /**
     * @var int
     *
     * @ORM\Column(name="marketing_section_id", type="integer", unique=true, nullable=true)
     * @OneToOne(targetEntity="MarketingSection")
     * @JoinColumn(name="marketing_section_id", referencedColumnName="id")
     */
    private $marketingSectionId;

    /**
     * @var int
     *
     * @ORM\Column(name="general_info_section_id", type="integer", unique=true, nullable=true)
     * @OneToOne(targetEntity="GeneralInfoSection")
     * @JoinColumn(name="general_info_section_id", referencedColumnName="id")
     */
    private $generalInfoSectionId;

    /**
     * @var int
     *
     * @ORM\Column(name="design_section_id", type="integer", unique=true, nullable=true)
     * @OneToOne(targetEntity="DesignSection")
     * @JoinColumn(name="design_section_id", referencedColumnName="id")
     */
    private $designSectionId;

    /**
     * @var int
     *
     * @ORM\Column(name="tech_design_section_id", type="integer", unique=true, nullable=true)
     * @OneToOne(targetEntity="TechDesignSection")
     * @JoinColumn(name="tech_design_section_id", referencedColumnName="id")
     */
    private $techDesignSectionId;

    /**
     * @var int
     *
     * @ORM\Column(name="code_section_id", type="integer", unique=true, nullable=true)
     * @OneToOne(targetEntity="CodeSection")
     * @JoinColumn(name="code_section_id", referencedColumnName="id")
     */
    private $codeSectionId;

    /**
     * @var int
     *
     * @ORM\Column(name="makeup_section_id", type="integer", unique=true, nullable=true)
     * @OneToOne(targetEntity="MakeupSection")
     * @JoinColumn(name="makeup_section_id", referencedColumnName="id")
     */
    private $makeupSectionId;

    /**
     * @var int
     *
     * @ORM\Column(name="module_section_id", type="integer", unique=true, nullable=true)
     * @OneToOne(targetEntity="ModuleSection")
     * @JoinColumn(name="module_section_id", referencedColumnName="id")
     */
    private $moduleSectionId;



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
     * @param integer $companyId
     *
     * @return Brief
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * Get companyId
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Set managerId
     *
     * @param integer $managerId
     *
     * @return Brief
     */
    public function setManagerId($managerId)
    {
        $this->managerId = $managerId;

        return $this;
    }

    /**
     * Get managerId
     *
     * @return int
     */
    public function getManagerId()
    {
        return $this->managerId;
    }

    /**
     * Set marketingSectionId
     *
     * @param integer $marketingSectionId
     *
     * @return Brief
     */
    public function setMarketingSectionId($marketingSectionId)
    {
        $this->marketingSectionId = $marketingSectionId;

        return $this;
    }

    /**
     * Get marketingSectionId
     *
     * @return int
     */
    public function getMarketingSectionId()
    {
        return $this->marketingSectionId;
    }

    /**
     * Set generalInfoSectionId
     *
     * @param integer $generalInfoSectionId
     *
     * @return Brief
     */
    public function setGeneralInfoSectionId($generalInfoSectionId)
    {
        $this->generalInfoSectionId = $generalInfoSectionId;

        return $this;
    }

    /**
     * Get generalInfoSectionId
     *
     * @return int
     */
    public function getGeneralInfoSectionId()
    {
        return $this->generalInfoSectionId;
    }

    /**
     * Set designSectionId
     *
     * @param integer $designSectionId
     *
     * @return Brief
     */
    public function setDesignSectionId($designSectionId)
    {
        $this->designSectionId = $designSectionId;

        return $this;
    }

    /**
     * Get designSectionId
     *
     * @return int
     */
    public function getDesignSectionId()
    {
        return $this->designSectionId;
    }

    /**
     * Set techDesignSectionId
     *
     * @param integer $techDesignSectionId
     *
     * @return Brief
     */
    public function setTechDesignSectionId($techDesignSectionId)
    {
        $this->techDesignSectionId = $techDesignSectionId;

        return $this;
    }

    /**
     * Get techDesignSectionId
     *
     * @return int
     */
    public function getTechDesignSectionId()
    {
        return $this->techDesignSectionId;
    }

    /**
     * Set codeSectionId
     *
     * @param integer $codeSectionId
     *
     * @return Brief
     */
    public function setCodeSectionId($codeSectionId)
    {
        $this->codeSectionId = $codeSectionId;

        return $this;
    }

    /**
     * Get codeSectionId
     *
     * @return int
     */
    public function getCodeSectionId()
    {
        return $this->codeSectionId;
    }

    /**
     * Set makeupSectionId
     *
     * @param integer $makeupSectionId
     *
     * @return Brief
     */
    public function setMakeupSectionId($makeupSectionId)
    {
        $this->makeupSectionId = $makeupSectionId;

        return $this;
    }

    /**
     * Get makeupSectionId
     *
     * @return int
     */
    public function getMakeupSectionId()
    {
        return $this->makeupSectionId;
    }

    /**
     * Set moduleSectionId
     *
     * @param integer $moduleSectionId
     *
     * @return Brief
     */
    public function setModuleSectionId($moduleSectionId)
    {
        $this->moduleSectionId = $moduleSectionId;

        return $this;
    }

    /**
     * Get moduleSectionId
     *
     * @return int
     */
    public function getModuleSectionId()
    {
        return $this->moduleSectionId;
    }
}

