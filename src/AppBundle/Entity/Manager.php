<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="manager")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ManagerRepository")
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
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $managerName;

    /**
     * @ORM\Column(name="manager_email", type="string", length=100)
     * @Assert\NotBlank(message="обязательное поле!")
     * @Assert\Email(message="укажите корректный email")
     */
    private $managerEmail;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\NotBlank(message="обязательное поле!")
     * @Assert\Regex("/^(\+7|8)(\s|-)?(\d{3})(\s|-)?((\d{2})|(\d{3}))(\s|-)?(\d{2})(\s|-)?(?(6)\d{3}|\d{2})/", message="укажите корректный телефон")
     */
    private $phone;

    /**
     * @ManyToOne(targetEntity="Company")
     * @JoinColumn(name="company_id", referencedColumnName="id")
     */
    private $company;

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
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param integer $company
     * @return Manager
     */
    public function setCompany($company)
    {
        $this->company = $company;
        
        return $this;
    }
}