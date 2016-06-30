<?php
/**
 * Created by PhpStorm.
 * User: vasyasavincov
 * Date: 28.06.16
 * Time: 16:22
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity
 */
class Company
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $domain;

    /**
     * @ORM\Column(type="text")
     */
    private $geography;

    /**
     * @ORM\Column(type="text")
     */
    private $products;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;


    public function __get($field)
    {
        return $this->$field;
    }

    public function __set($field, $value)
    {
        $this->$field = $value;
    }
}
