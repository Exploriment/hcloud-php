<?php

namespace Exploriment\HetznerCloud\Objects;

/**
 * Class ConsoleCredentials
 * @package Exploriment\HetznerCloud\Objects
 */
final class ConsoleCredentials extends BaseObject
{

    /**
     * @var object
     */
    protected $action;

    /**
     * @var string
     */
    protected $wss_url;

    /**
     * @var string
     */
    protected $password;

    /**
     * @return Action
     */
    public function getAction()
    {
        return new Action($this->action);
    }

    /**
     * @return string
     */
    public function getWssUrl()
    {
        return $this->wss_url;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

}