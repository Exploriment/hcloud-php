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
    protected $ipv4;

    /**
     * @var object
     */
    protected $ipv6;

    /**
     * @var array
     */
    protected $floating_ips;

    /**
     * Retrieve the ipv4 address of the server
     *
     * @return string
     */
    public function getIpv4()
    {
        return $this->ipv4;
    }

    /**
     * Retrieve the ipv6 address of the server
     *
     * @return string
     */
    public function getIpv6()
    {
        return $this->ipv6;
    }

    /**
     * @return array
     */
    public function getFloatingIps()
    {
        return $this->floating_ips;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getIpv4()->ip;
    }

}