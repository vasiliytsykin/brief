<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiteGeneralInfo
 *
 * @ORM\Table(name="site_general_info")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SiteGeneralInfoRepository")
 */
class SiteGeneralInfo
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
     * @ORM\Column(name="target_name", type="string", length=100)
     */
    private $targetName;

    /**
     * @var string
     *
     * @ORM\Column(name="target_group", type="text")
     */
    private $targetGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="main_task", type="text")
     */
    private $mainTask;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="text")
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="structure", type="text")
     */
    private $structure;

    /**
     * @var string
     *
     * @ORM\Column(name="guidline", type="text")
     */
    private $guidline;

    


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
     * Set targetName
     *
     * @param string $targetName
     *
     * @return SiteGeneralInfo
     */
    public function setTargetName($targetName)
    {
        $this->targetName = $targetName;

        return $this;
    }

    /**
     * Get targetName
     *
     * @return string
     */
    public function getTargetName()
    {
        return $this->targetName;
    }

    /**
     * Set targetGroup
     *
     * @param string $targetGroup
     *
     * @return SiteGeneralInfo
     */
    public function setTargetGroup($targetGroup)
    {
        $this->targetGroup = $targetGroup;

        return $this;
    }

    /**
     * Get targetGroup
     *
     * @return string
     */
    public function getTargetGroup()
    {
        return $this->targetGroup;
    }

    /**
     * Set mainTask
     *
     * @param string $mainTask
     *
     * @return SiteGeneralInfo
     */
    public function setMainTask($mainTask)
    {
        $this->mainTask = $mainTask;

        return $this;
    }

    /**
     * Get mainTask
     *
     * @return string
     */
    public function getMainTask()
    {
        return $this->mainTask;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return SiteGeneralInfo
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return SiteGeneralInfo
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set structure
     *
     * @param string $structure
     *
     * @return SiteGeneralInfo
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;

        return $this;
    }

    /**
     * Get structure
     *
     * @return string
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * Set guidline
     *
     * @param string $guidline
     *
     * @return SiteGeneralInfo
     */
    public function setGuidline($guidline)
    {
        $this->guidline = $guidline;

        return $this;
    }

    /**
     * Get guidline
     *
     * @return string
     */
    public function getGuidline()
    {
        return $this->guidline;
    }

    /**
     * Set briefId
     *
     * @param integer $briefId
     *
     * @return SiteGeneralInfo
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

