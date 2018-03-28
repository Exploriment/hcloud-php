<?php

namespace Exploriment\HetznerCloud\Objects;

/**
 * Class Datacenter
 * @package Exploriment\HetznerCloud\Objects
 */
final class Datacenter extends BaseObject
{

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var object
     */
    public $location;

    /**
     * @var object
     */
    public $server_types;

    /**
     * ID of the datacenter
     *
     * @see https://docs.hetzner.cloud/#resources-datacenters-get-1
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique identifier of the datacenter
     *
     * @see https://docs.hetzner.cloud/#resources-datacenters-get-1
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Description of the datacenter
     *
     * @see https://docs.hetzner.cloud/#resources-datacenters-get-1
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Location where the datacenter resides in
     *
     * @see https://docs.hetzner.cloud/#resources-locations-get-1
     * @return Location
     */
    public function getLocation()
    {
        return new Location($this->location);
    }

    /**
     * The server types the datacenter can handle
     *
     * @see https://docs.hetzner.cloud/#resources-datacenters-get-1
     * @return object
     */
    public function getServerTypes()
    {
        return $this->server_types;
    }

    /**
     * Check if a server type is supported
     *
     * @param ServerType|int|string $server
     * @return bool
     */
    public function isSupported($server)
    {
        return in_array((string) $server, $this->server_types->supported);
    }

    /**
     * Check if a server type is available
     *
     * @param ServerType|int|string $server
     * @return bool
     */
    public function isAvailable($server)
    {
        return in_array((string) $server, $this->server_types->available);
    }

}