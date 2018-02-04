<?php

namespace Exploriment\HetznerCloud\Configs;

use Exploriment\HetznerCloud\Exceptions\InvalidInput;
use Exploriment\HetznerCloud\Objects\Datacenter;
use Exploriment\HetznerCloud\Objects\Image;
use Exploriment\HetznerCloud\Objects\Location;
use Exploriment\HetznerCloud\Objects\ServerType;

/**
 * Class Server
 * @package Exploriment\HetznerCloud\Configs
 *
 * More information about how servers are configured can be found in the
 * official documentation
 * @see https://docs.hetzner.cloud/#resources-servers-post
 */
final class Server extends Config
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $server_type;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $datacenter;

    /**
     * @var string
     */
    public $location;

    /**
     * @var bool
     */
    public $start_after_create = true;

    /**
     * @var array
     */
    public $ssh_keys = [ ];

    /**
     * @var string
     */
    public $user_data;

    /**
     * Server constructor.
     * @param $name
     * @param $server_type
     * @param $image
     */
    public function __construct($name = null, $server_type = null, $image = null)
    {
        if($name) $this->setName($name);
        if($server_type) $this->setServerType($server_type);
        if($image) $this->setImage($image);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getServerType()
    {
        return $this->server_type;
    }

    /**
     * @param int|string|ServerType $server_type
     */
    public function setServerType($server_type)
    {
        $this->server_type = (string) $server_type;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param int|string|Image $image
     */
    public function setImage($image)
    {
        $this->image = (string) $image;
    }

    /**
     * @return string
     */
    public function getDatacenter()
    {
        return $this->datacenter;
    }

    /**
     * @param int|string|Datacenter $datacenter
     */
    public function setDatacenter($datacenter)
    {
        $this->datacenter = (string) $datacenter;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param int|string|Location $location
     */
    public function setLocation($location)
    {
        $this->location = (string) $location;
    }

    /**
     * @return bool
     */
    public function isStartAfterCreate()
    {
        return $this->start_after_create;
    }

    /**
     * @param bool $start_after_create
     */
    public function setStartAfterCreate($start_after_create)
    {
        $this->start_after_create = (bool) $start_after_create;
    }

    /**
     * @return array
     */
    public function getSshKeys()
    {
        return $this->ssh_keys;
    }

    /**
     * @param array $ssh_keys
     * @throws InvalidInput
     */
    public function setSshKeys($ssh_keys)
    {
        // validate the ssh_keys input
        if(!is_array($ssh_keys))
            throw new InvalidInput('ssh_keys argument must be an array');
        // validate if they are numeric IDs
        foreach($ssh_keys as $key)
        {
            if(!is_numeric($key))
                throw new InvalidInput('ssh_keys must be an array with (numeric) IDs');
        }

        $this->ssh_keys = $ssh_keys;
    }

    /**
     * @return string
     */
    public function getUserData()
    {
        return $this->user_data;
    }

    /**
     * @param string $user_data
     */
    public function setUserData($user_data)
    {
        $this->user_data = (string) $user_data;
    }

    /**
     * @throws InvalidInput
     */
    public function verify()
    {
        if(!$this->name)
            throw new InvalidInput('name is missing');
        if(!$this->image)
            throw new InvalidInput('image is missing');
        if(!$this->server_type)
            throw new InvalidInput('server_type is missing');
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $return = [
            'name' => $this->name,
            'image' => $this->image,
            'server_type' => $this->server_type,
            'start_after_create' => $this->start_after_create,
            'ssh_keys' => $this->ssh_keys
        ];

        if($this->location) $return['location'] = $this->location;
        if($this->datacenter) $return['datacenter'] = $this->datacenter;
        if($this->user_data) $return['user_data'] = $this->user_data;

        return $return;
    }

}