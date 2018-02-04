<?php

namespace Exploriment\HetznerCloud\Configs;

use Exploriment\HetznerCloud\Exceptions\InvalidInput;
use Exploriment\HetznerCloud\Objects;
use Exploriment\HetznerCloud\Objects\Location;
use Exploriment\HetznerCloud\Objects\ServerType;

/**
 * Class FloatingIp
 * @package Exploriment\HetznerCloud\Configs
 *
 * More information about how floating IPs are configured can be found in the
 * official documentation
 * @see https://docs.hetzner.cloud/#resources-floating-ips-post
 */
final class FloatingIp extends Config
{

    /**
     * Available floating IP types
     *
     * @const array
     */
    const TYPES = [
        'ipv4', 'ipv6', 'ipv43'
    ];

    /**
     * @var string
     */
    public $type;

    /**
     * @var null|string
     */
    public $home_location;

    /**
     * @var null|string
     */
    public $server;

    /**
     * @var null|string
     */
    public $description;

    /**
     * FloatingIp constructor.
     * @param $type
     */
    public function __construct($type = null)
    {
        if($type) $this->setType($type);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int|string|ServerType $type
     */
    public function setType($type)
    {
        $this->type = (string) $type;
    }

    /**
     * @return null|string
     */
    public function getHomeLocation()
    {
        return $this->home_location;
    }

    /**
     * @param int|string|Location $home_location
     */
    public function setHomeLocation($home_location)
    {
        $this->home_location = (string) $home_location;
    }

    /**
     * @return int|null
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @param int|string|Objects\Server $server
     */
    public function setServer($server)
    {
        $this->server = (string) $server;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @throws InvalidInput
     */
    public function verify()
    {
        if(!$this->type)
            throw new InvalidInput('type is missing');
        if(!in_array($this->type, self::TYPES))
            throw new InvalidInput('Invalid type "' . $this->type . '", must be one of: ' . implode(', ', self::TYPES));
        if(!$this->home_location && !$this->server)
            throw new InvalidInput('Either server or home_location must be provided');
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $return = [
            'type' => $this->type
        ];

        if($this->home_location) $return['home_location'] = $this->home_location;
        if($this->server) $return['server'] = $this->server;
        if($this->description) $return['description'] = $this->description;

        return $return;
    }

}