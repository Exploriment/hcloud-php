<?php

namespace Exploriment\HetznerCloud\Objects;

/**
 * Class ServerCreation
 * @package Exploriment\HetznerCloud\Objects
 */
final class ServerCreation extends BaseObject
{

    /**
     * @var object
     */
    protected $action;

    /**
     * @var object
     */
    protected $server;

    /**
     * @var string
     */
    protected $root_password;

    /**
     * @return Action
     */
    public function getAction()
    {
        return new Action($this->action);
    }

    /**
     * @return Server
     */
    public function getServer()
    {
        return new Server($this->server);
    }

    /**
     * @return string
     */
    public function getRootPassword()
    {
        return $this->root_password;
    }

}