<?php
/**
 * Created by PhpStorm.
 * User: vasyasavincov
 * Date: 28.06.16
 * Time: 22:57
 */

namespace AppBundle\Entity;


class Company
{
    protected $id;
    protected $name;
    protected $domain;
    protected $geography;
    protected $email;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param mixed $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return mixed
     */
    public function getGeography()
    {
        return $this->geography;
    }

    /**
     * @param mixed $geography
     */
    public function setGeography($geography)
    {
        $this->geography = $geography;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}