<?php

namespace Exploriment\HetznerCloud\Objects;

/**
 * Class PublicNet
 * @package Exploriment\HetznerCloud\Objects
 */
final class PublicNet extends BaseObject
{

    /**
     * @var object
     */
    public $ipv4;

    /**
     * @var object
     */
    public $ipv6;

    /**
     * Retrieve the ipv4 address of the server
     *
     * @return string
     */
    public function getIpv4()
    {
        return $this->ipv4->ip;
    }

    /**
     * Retrieve the ipv6 address of the server
     *
     * @return string
     */
    public function getIpv6()
    {
        return $this->ipv6->ip;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getIpv4();
    }

}