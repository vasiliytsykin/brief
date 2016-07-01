<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MakeupSection
 *
 * @ORM\Table(name="makeup_section")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MakeupSectionRepository")
 */
class MakeupSection
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
     * @ORM\Column(name="restriction", type="text")
     */
    private $restriction;

    /**
     * @var string
     *
     * @ORM\Column(name="js_library", type="text")
     */
    private $jsLibrary;
    


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
     * Set restriction
     *
     * @param string $restriction
     *
     * @return MakeupSection
     */
    public function setRestriction($restriction)
    {
        $this->restriction = $restriction;

        return $this;
    }

    /**
     * Get restriction
     *
     * @return string
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Set jsLibrary
     *
     * @param string $jsLibrary
     *
     * @return MakeupSection
     */
    public function setJsLibrary($jsLibrary)
    {
        $this->jsLibrary = $jsLibrary;

        return $this;
    }

    /**
     * Get jsLibrary
     *
     * @return string
     */
    public function getJsLibrary()
    {
        return $this->jsLibrary;
    }
}

