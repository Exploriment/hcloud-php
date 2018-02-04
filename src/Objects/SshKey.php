<?php

namespace Exploriment\HetznerCloud\Objects;
use Exploriment\HetznerCloud\SshKeys;

/**
 * Class SshKey
 * @package Exploriment\HetznerCloud\Objects
 */
final class SshKey extends Object
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
    public $fingerprint;

    /**
     * @var string
     */
    public $public_key;

    /**
     * ID of the SSH key
     * @see https://docs.hetzner.cloud/#resources-ssh-keys-get-1
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique identifier of the SSH key
     * @see https://docs.hetzner.cloud/#resources-ssh-keys-get-1
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Fingerprint of the SSH key
     * @see https://docs.hetzner.cloud/#resources-ssh-keys-get-1
     *
     * @return string
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * Public key of the SSH key
     * @see https://docs.hetzner.cloud/#resources-ssh-keys-get-1
     *
     * @return string
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    /**
     * @see SshKeys::update()
     *
     * @param string $name
     * @return SshKey
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function update($name)
    {
        return SshKeys::update($this->id, $name);
    }

    /**
     * @see SshKeys::update()
     *
     * @param string $name
     * @return SshKey
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function rename($name)
    {
        return SshKeys::update($this->id, $name);
    }

    /**
     * @see SshKeys::delete()
     *
     * @return bool
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     */
    public function delete()
    {
        return SshKeys::delete($this->id);
    }

}