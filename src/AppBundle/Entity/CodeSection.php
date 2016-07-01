<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CodeSection
 *
 * @ORM\Table(name="code_section")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CodeSectionRepository")
 */
class CodeSection
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
     * @ORM\Column(name="server", type="string", length=255)
     */
    private $server;

    /**
     * @var string
     *
     * @ORM\Column(name="programming_lang", type="string", length=255)
     */
    private $programmingLang;

    /**
     * @var string
     *
     * @ORM\Column(name="data_base", type="string", length=255)
     */
    private $dataBase;

    /**
     * @var string
     *
     * @ORM\Column(name="server_config", type="text")
     */
    private $serverConfig;

    /**
     * @var string
     *
     * @ORM\Column(name="encoding", type="string", length=255)
     */
    private $encoding;

    /**
     * @var string
     *
     * @ORM\Column(name="cms", type="text")
     */
    private $cms;



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
     * Set server
     *
     * @param string $server
     *
     * @return CodeSection
     */
    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get server
     *
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Set programmingLang
     *
     * @param string $programmingLang
     *
     * @return CodeSection
     */
    public function setProgrammingLang($programmingLang)
    {
        $this->programmingLang = $programmingLang;

        return $this;
    }

    /**
     * Get programmingLang
     *
     * @return string
     */
    public function getProgrammingLang()
    {
        return $this->programmingLang;
    }

    /**
     * Set dataBase
     *
     * @param string $dataBase
     *
     * @return CodeSection
     */
    public function setDataBase($dataBase)
    {
        $this->dataBase = $dataBase;

        return $this;
    }

    /**
     * Get dataBase
     *
     * @return string
     */
    public function getDataBase()
    {
        return $this->dataBase;
    }

    /**
     * Set serverConfig
     *
     * @param string $serverConfig
     *
     * @return CodeSection
     */
    public function setServerConfig($serverConfig)
    {
        $this->serverConfig = $serverConfig;

        return $this;
    }

    /**
     * Get serverConfig
     *
     * @return string
     */
    public function getServerConfig()
    {
        return $this->serverConfig;
    }

    /**
     * Set encoding
     *
     * @param string $encoding
     *
     * @return CodeSection
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;

        return $this;
    }

    /**
     * Get encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Set cms
     *
     * @param string $cms
     *
     * @return CodeSection
     */
    public function setCms($cms)
    {
        $this->cms = $cms;

        return $this;
    }

    /**
     * Get cms
     *
     * @return string
     */
    public function getCms()
    {
        return $this->cms;
    }
}

