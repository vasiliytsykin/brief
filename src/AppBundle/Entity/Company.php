<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Validator\Constraints as MyAssert;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompanyRepository")
 * @MyAssert\UniqueConstraint(message="компания с таким адресом уже существует",
 *     entityName="companyName", field="companyEmail", repository="AppBundle\Entity\Company")
 */
class Company
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
     * @ORM\Column(name="company_name", type="string", length=100, unique=true)
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="text")
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="geography", type="text")
     * @Assert\NotBlank(message="обязательное поле!")
     */
    private $geography;

    /**
     * @var string
     *
     * @ORM\Column(name="products", type="text", nullable=true)
     */
    private $products;

    /**
     * @var string
     *
     * @ORM\Column(name="company_email", type="string", length=100, unique=true)
     * @Assert\NotBlank(message="обязательное поле!")
     * @Assert\Email(message="укажите корректный email")
     */
    private $companyEmail;


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
     * Set comapnyName
     *
     * @param string $companyName
     *
     * @return Company
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set domain
     *
     * @param string $domain
     *
     * @return Company
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set geography
     *
     * @param string $geography
     *
     * @return Company
     */
    public function setGeography($geography)
    {
        $this->geography = $geography;

        return $this;
    }

    /**
     * Get geography
     *
     * @return string
     */
    public function getGeography()
    {
        return $this->geography;
    }

    /**
     * Set products
     *
     * @param string $products
     *
     * @return Company
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return string
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set email
     *
     * @param string $companyEmail
     *
     * @return Company
     */
    public function setCompanyEmail($companyEmail)
    {
        $this->companyEmail = $companyEmail;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getCompanyEmail()
    {
        return $this->companyEmail;
    }
}

