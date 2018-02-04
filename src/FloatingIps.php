<?php

namespace Exploriment\HetznerCloud;

use Exploriment\HetznerCloud\Configs;
use Exploriment\HetznerCloud\Exceptions\InvalidInput;
use Exploriment\HetznerCloud\Objects\Action;
use Exploriment\HetznerCloud\Objects\FloatingIp;
use Exploriment\HetznerCloud\Objects\Server;
use Exploriment\HetznerCloud\Traits\Actionable;

/**
 * Class FloatingIps
 * @package Exploriment\HetznerCloud
 */
final class FloatingIps extends Resource
{

    use Actionable;

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
     * Create a new floating IP
     * @see https://docs.hetzner.cloud/#resources-floating-ips-post
     *
     * @param Configs\FloatingIp $config
     * @return FloatingIp
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function create($config)
    {
        if(!is_a($config, Configs\FloatingIp::class))
            throw new InvalidInput('config must be a ' . Configs\FloatingIp::class);

        $config->verify();

        $response = self::request('POST', '', $config->toArray());

        return new FloatingIp($response->floating_ip);
    }

    /**
     * Updates the description of a floating IP.
     * @see https://docs.hetzner.cloud/#resources-floating-ips-put
     *
     * @param int $id
     * @param string $description
     * @return FloatingIp
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function update($id, $description)
    {
        $response = self::request('PUT', $id, [
            'description' => $description
        ]);

        return new FloatingIp($response->floating_ip);
    }

    /**
     * Assign a floating IP to a server
     * @see https://docs.hetzner.cloud/#resources-floating-ip-actions-post
     *
     * @param int $id
     * @param int|string|Server $server
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function assign($id, $server)
    {
        return self::action($id, 'assign', [
            'server' => (string) $server
        ]);
    }

    /**
     * Unassign a Floating IP, resulting in it being unreachable. You may assign it to a server again at a later time.
     * @see https://docs.hetzner.cloud/#resources-floating-ip-actions-post-1
     *
     * @param int $id
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function unassign($id)
    {
        return self::action($id, 'unassign');
    }

    /**
     * Changes the hostname that will appear when getting the hostname belonging to this Floating IP.
     * @see https://docs.hetzner.cloud/#resources-floating-ip-actions-post-2
     *
     * @param int $id
     * @param string $ip
     * @param null|string $dns_ptr
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function changeDnsPtr($id, $ip, $dns_ptr = null)
    {
        return self::action($id, 'change_dns_ptr', [
            'ip' => $ip,
            'dns_ptr' => $dns_ptr
        ]);
    }

    /**
     * Delete a floating IP. If it is currently assigned to a server
     * it will automatically get unassigned.
     * @see https://docs.hetzner.cloud/#resources-floating-ips-delete
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