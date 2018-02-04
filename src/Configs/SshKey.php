<?php

namespace Exploriment\HetznerCloud\Configs;

use Exploriment\HetznerCloud\Exceptions\InvalidInput;
use Exploriment\HetznerCloud\Objects\Datacenter;
use Exploriment\HetznerCloud\Objects\Image;
use Exploriment\HetznerCloud\Objects\Location;
use Exploriment\HetznerCloud\Objects\ServerType;

/**
 * Class SshKey
 * @package Exploriment\HetznerCloud\Configs
 *
 * More information about how SSH keys are configured can be found in the
 * official documentation
 * @see https://docs.hetzner.cloud/#resources-ssh-keys-post
 */
final class SshKey extends Config
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $public_key;

    /**
     * SshKey constructor.
     * @param string $name
     * @param string $public_key
     */
    public function __construct($name = '', $public_key = '')
    {
        $this->setName($name);
        $this->setPublicKey($public_key);
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
    public function getPublicKey()
    {
        return $this->public_key;
    }

    /**
     * @param string $public_key
     */
    public function setPublicKey($public_key)
    {
        $this->public_key = $public_key;
    }

    /**
     * @throws InvalidInput
     */
    public function verify()
    {
        if(!$this->name)
            throw new InvalidInput('name is missing');
        if(!$this->public_key)
            throw new InvalidInput('public_key is missing');
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $return = [
            'name' => $this->name,
            'public_key' => $this->public_key,
        ];

        return $return;
    }

}