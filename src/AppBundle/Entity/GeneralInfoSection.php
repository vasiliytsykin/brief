<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * GeneralInfoSection
 *
 * @ORM\Table(name="general_info_section")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GeneralInfoSectionRepository")
 */
class GeneralInfoSection
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
     * @ORM\Column(name="target_name", type="string", length=100)
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $targetName;

    /**
     * @var string
     *
     * @ORM\Column(name="target_group", type="text")
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $targetGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="main_task", type="text")
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $mainTask;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="text")
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="structure", type="text")
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $structure;

    /**
     * @var string
     *
     * @ORM\Column(name="guideline", type="text", nullable=true)
     */
    private $guideline;


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
     * @return GeneralInfoSection
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
     * @return GeneralInfoSection
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
     * @return GeneralInfoSection
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
     * @return GeneralInfoSection
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
     * @return GeneralInfoSection
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
     * @return GeneralInfoSection
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
     * Set structure
     *
     * @param string $guideline
     *
     * @return GeneralInfoSection
     */
    public function setGuideline($guideline)
    {
        $this->guideline = $guideline;

        return $this;
    }

    /**
     * Get guideline
     *
     * @return string
     */
    public function getGuideline()
    {
        return $this->guideline;
    }
}

