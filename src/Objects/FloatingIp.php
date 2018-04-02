<?php

namespace Exploriment\HetznerCloud\Objects;
use Exploriment\HetznerCloud\FloatingIps;
use Exploriment\HetznerCloud\Servers;

/**
 * Class FloatingIp
 * @package Exploriment\HetznerCloud\Objects
 */
final class FloatingIp extends BaseObject
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string
     */
    protected $ip;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var int|null
     */
    protected $server;

    /**
     * @var array
     */
    protected $dns_ptr;

    /**
     * @var object
     */
    protected $home_location;

    /**
     * @var bool
     */
    protected $blocked;

    /**
     * ID of the floating IP
     * @see https://docs.hetzner.cloud/#resources-floating-ips-get-1
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Description of the floating IP
     * @see https://docs.hetzner.cloud/#resources-floating-ips-get-1
     *
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * IP address of the floating IP
     * @see https://docs.hetzner.cloud/#resources-floating-ips-get-1
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Type of the floating IP (ipv4 or ipv6)
     * @see https://docs.hetzner.cloud/#resources-floating-ips-get-1
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isIpv4()
    {
        return $this->type === 'ipv4';
    }

    /**
     * @return bool
     */
    public function isIpv6()
    {
        return $this->type === 'ipv6';
    }

    /**
     * ID of the server the floating IP is assigned to,
     * null if not assigned
     * @see https://docs.hetzner.cloud/#resources-floating-ips-get-1
     *
     * @return int|null
     */
    public function getServerId()
    {
        return $this->server;
    }

    /**
     * Get server information as a Server object
     * null if the floating IP is not assigned to a server
     *
     * @return Server|null
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function getServer()
    {
        if(is_null($this->server))
            return null;

        return Servers::find($this->server);
    }

    /**
     * Array of reverse DNS entries
     * @see https://docs.hetzner.cloud/#resources-floating-ips-get-1
     *
     * @return array
     */
    public function getDnsPtr()
    {
        return $this->dns_ptr;
    }

    /**
     * Location of the floating IP was created in.
     * Routing is optimized for this location.
     * @see https://docs.hetzner.cloud/#resources-floating-ips-get-1
     *
     * @return Location
     */
    public function getHomeLocation()
    {
        return new Location($this->home_location);
    }

    /**
     * Whether the IP is blocked
     * @see https://docs.hetzner.cloud/#resources-floating-ips-get-1
     *
     * @return bool
     */
    public function isBlocked()
    {
        return $this->blocked;
    }

    /**
     * @see FloatingIps::update()
     *
     * @param string $description
     * @return FloatingIp
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function update($description)
    {
        return FloatingIps::update($this->id, $description);
    }

    /**
     * @see FloatingIps::assign()
     *
     * @param int|string|Server $server
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     */
    public function assign($server)
    {
        return FloatingIps::assign($this->id, $server);
    }

    /**
     * @see FloatingIps::unassign()
     *
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     */
    public function unassign()
    {
        return FloatingIps::unassign($this->id);
    }

    /**
     * @see FloatingIps::changeDnsPtr()
     *
     * @param string $ip
     * @param null|string $dns_ptr
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     */
    public function changeDnsPtr($ip, $dns_ptr = null)
    {
        return FloatingIps::changeDnsPtr($this->id, $ip, $dns_ptr);
    }

    /**
     * @see FloatingIps::delete()
     *
     * @return bool
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     */
    public function delete()
    {
        return FloatingIps::delete($this->id);
    }

}