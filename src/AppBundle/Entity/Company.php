<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompanyRepository")
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
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="text")
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="geography", type="text")
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

