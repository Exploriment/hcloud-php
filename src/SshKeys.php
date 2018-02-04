<?php

namespace Exploriment\HetznerCloud;

use Exploriment\HetznerCloud\Exceptions\InvalidInput;
use Exploriment\HetznerCloud\Objects\SshKey;

/**
 * Class SshKeys
 * @package Exploriment\HetznerCloud
 */
final class SshKeys extends Resource
{

    /**
     * @var null|string
     */
    protected static $className;

    /**
     * @var int
     */
    protected static $currentPage = 1;

    /**
     * @var array
     */
    public static $options = [ ];

    /**
     * @var bool
     */
    protected static $hasNextPage = false;

    /**
     * Create a new SSH key
     * @see https://docs.hetzner.cloud/#resources-ssh-keys-post
     *
     * @param Configs\SshKey $config
     * @return SshKey
     * @throws Exceptions\MalformedResponse
     * @throws InvalidInput
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function create($config)
    {
        if(!is_a($config, Configs\SshKey::class))
            throw new InvalidInput('config must be a ' . Configs\SshKey::class);

        $config->verify();

        $response = self::request('POST', '', $config->toArray());

        return new SshKey($response->ssh_key);
    }

    /**
     * Updates the SSH key name.
     * @see https://docs.hetzner.cloud/#resources-ssh-keys-put
     *
     * @param int $id
     * @param string $name
     * @return SshKey
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function update($id, $name)
    {
        $response = self::request('PUT', $id, [
            'name' => $name
        ]);

        return new SshKey($response->ssh_key);
    }
    public static function rename($id, $name) { return self::update($id, $name); }

    /**
     * Delete a SSH key
     * @see https://docs.hetzner.cloud/#resources-ssh-keys-delete
     *
     * @param int $id
     * @return bool
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function delete($id)
    {
        self::request('DELETE', $id);

        return true;
    }

}