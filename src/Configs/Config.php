<?php

namespace Codelayer\Columbus\Configs;

class Config
{
    /**
     * API id.
     * @var string
     */
    private $id;

    /**
     * API secret.
     * @var string
     */
    private $secret;

    /**
     * Config constructor.
     *
     * @param string $id
     * @param string $secret
     */
    public function __construct($id = '', $secret = '')
    {
        $this->id = $id;
        $this->secret = $secret;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     *
     * @return Config
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return Config
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}