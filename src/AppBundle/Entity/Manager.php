<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 *@ORM\Entity
 */
class Manager
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="manager_name", type="string", length=100, unique=true)
     */
    private $managerName;

    /**
     * @ORM\Column(name="manager_email", type="string", length=100)
     */
    private $managerEmail;

    /**
     * @ORM\Column(type="string", length=12)
     */
    private $phone;

    /**
     * @ORM\Column(type="integer")
     * @ManyToOne(targetEntity="Company")
     * @JoinColumn(name="company_id", referencedColumnName="id")
     */
    private $companyId;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getManagerName()
    {
        return $this->managerName;
    }

    /**
     * @param mixed $managerName
     * @return Manager
     */
    public function setManagerName($managerName)
    {
        $this->managerName = $managerName;
        
        return $this;
    }

    /**
     * @return string
     */
    public function getManagerEmail()
    {
        return $this->managerEmail;
    }

    /**
     * @param mixed $managerEmail
     * @return Manager
     */
    public function setManagerEmail($managerEmail)
    {
        $this->managerEmail = $managerEmail;
        
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     * @return Manager
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param integer $companyId
     * @return Manager
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
        
        return $this;
    }
}