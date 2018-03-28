<?php

namespace Exploriment\HetznerCloud\Objects;

/**
 * Class ServerType
 * @package Exploriment\HetznerCloud\Objects
 */
final class ServerType extends BaseObject
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
     * @var int
     */
    public $cores;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var float
     */
    public $disk;

    /**
     * @var array
     */
    public $prices;

    /**
     * @var string
     */
    public $storage_type;

    /**
     * ID of the server type
     * @see https://docs.hetzner.cloud/#resources-server-types-get-1
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique identifier of the server type
     * @see https://docs.hetzner.cloud/#resources-server-types-get-1
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Description of the server type
     * @see https://docs.hetzner.cloud/#resources-server-types-get-1
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Number of CPU cores a server of this type will have
     * @see https://docs.hetzner.cloud/#resources-server-types-get-1
     *
     * @return int
     */
    public function getCores()
    {
        return $this->cores;
    }

    /**
     * Memory a server of this type will have in GB
     * @see https://docs.hetzner.cloud/#resources-server-types-get-1
     *
     * @return float
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * Disk size a server of this type will have in GB
     * @see https://docs.hetzner.cloud/#resources-server-types-get-1
     *
     * @return float
     */
    public function getDisk()
    {
        return $this->disk;
    }

    /**
     * Prices in different locations
     * @see https://docs.hetzner.cloud/#resources-server-types-get-1
     *
     * @return array
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Type of server boot drive. Local has higher speed.
     * Network has better availability
     * @see https://docs.hetzner.cloud/#resources-server-types-get-1
     *
     * @return string
     */
    public function getStorageType()
    {
        return $this->storage_type;
    }

    /**
     * @return bool
     */
    public function isLocal()
    {
        return $this->storage_type === 'local';
    }

    /**
     * @return bool
     */
    public function isNetwork()
    {
        return $this->storage_type === 'network';
    }

}