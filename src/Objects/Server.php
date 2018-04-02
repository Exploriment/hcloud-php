<?php

namespace Exploriment\HetznerCloud\Objects;

use Exploriment\HetznerCloud\Servers;

/**
 * Class Server
 * @package Exploriment\HetznerCloud\Objects
 */
final class Server extends BaseObject
{

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $created;

    /**
     * @var object
     */
    protected $public_net;

    /**
     * @var object
     */
    protected $server_type;

    /**
     * @var object
     */
    protected $datacenter;

    /**
     * @var object|null
     */
    protected $image;

    /**
     * @var object|null
     */
    protected $iso;

    /**
     * @var bool
     */
    protected $rescue_enabled;

    /**
     * @var bool
     */
    protected $locked;

    /**
     * @var string|null
     */
    protected $backup_window;
    
    /**
     * @var int|null
     */
    protected $outgoing_traffic;

    /**
     * @var int|null
     */
    protected $ingoing_traffic;

    /**
     * @var int
     */
    protected $included_traffic;

    /**
     * @see Servers::findAction()
     *
     * @param int $id
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function findAction($id)
    {
        return Servers::findAction($this->id, $id);
    }

    /**
     * @see Servers::getMetrics()
     *
     * @param int|string $start
     * @param int|string $end
     * @param array $types
     * @param int|null $step
     * @return object
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\InvalidInput
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function getMetrics($start, $end, $types = Servers::METRIC_TYPES, $step = null)
    {
        return Servers::getMetrics($this->id, $start, $end, $types, $step);
    }

    /**
     * @see Servers::rename()
     *
     * @param string $name
     * @return Server
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     */
    public function rename($name)
    {
        return Servers::rename($this->id, $name);
    }

    /**
     * @see Servers::start()
     *
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     */
    public function start()
    {
        return Servers::start($this->id);
    }
    public function powerOn() { return $this->start(); }

    /**
     * @see Servers::reboot()
     *
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     */
    public function reboot()
    {
        return Servers::reboot($this->id);
    }
    public function restart() { return $this->reboot(); }

    /**
     * @see Servers::reset()
     *
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     */
    public function reset()
    {
        return Servers::reset($this->id);
    }

    /**
     * @see Servers::shutdown()
     *
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     */
    public function shutdown()
    {
        return Servers::shutdown($this->id);
    }
    public function stop() { return $this->shutdown(); }

    /**
     * @see Servers::powerOff()
     *
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     */
    public function powerOff()
    {
        return Servers::powerOff($this->id);
    }

    /**
     * @see Servers::resetPassword()
     *
     * @return ActionPasswordReset
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function resetPassword()
    {
        return Servers::resetPassword($this->id);
    }

    /**
     * @see Servers::enableRescue()
     *
     * @param string $type
     * @param array $ssh_keys
     * @return ActionPasswordReset
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\InvalidInput
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function enableRescue($type = 'linux64', $ssh_keys = [ ])
    {
        return Servers::enableRescue($this->id, $type, $ssh_keys);
    }

    /**
     * @see Servers::disableRescue()
     *
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function disableRescue()
    {
        return Servers::disableRescue($this->id);
    }

    /**
     * @see Servers::rebuild()
     *
     * @param int|string|Image $image
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function rebuild($image)
    {
        return Servers::rebuild($this->id, $image);
    }

    /**
     * @see Servers::changeType()
     *
     * @param int|string|ServerType $server_type
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function changeType($server_type)
    {
        return Servers::changeType($this->id, $server_type);
    }

    /**
     * @see Servers::enableBackups()
     *
     * @param string|null $backup_window
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\InvalidInput
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function enableBackups($backup_window = null)
    {
        return Servers::enableBackups($this->id, $backup_window);
    }

    /**
     * @see Servers::disableBackups()
     *
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function disableBackups()
    {
        return Servers::disableBackups($this->id);
    }

    /**
     * @see Servers::attachIso()
     *
     * @param int|string|ISO $iso
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function attachIso($iso)
    {
        return Servers::attachIso($iso);
    }

    /**
     * @see Servers::detachIso()
     *
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function detachIso()
    {
        return Servers::detachIso($this->id);
    }

    /**
     * @see Servers::changeDnsPtr()
     *
     * @param string $ip
     * @param null|string $dns_ptr
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function changeDnsPtr($ip, $dns_ptr = null)
    {
        return Servers::changeDnsPtr($this->id, $ip, $dns_ptr);
    }

    /**
     * @see Servers::changeProtection()
     *
     * @param bool $delete
     * @param bool $rebuild
     * @return Action
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function changeProtection($delete, $rebuild)
    {
        return Servers::changeProtection($this->id, $delete, $rebuild);
    }

    /**
     * @see Servers::delete()
     *
     * @return Action
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     */
    public function delete()
    {
        return Servers::delete($this->id);
    }

    /**
     * ID of the server
     *
     * @see https://docs.hetzner.cloud/#resources-servers-get-1
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Name of the server (must be unique per project and a valid hostname as per RFC 1123)
     *
     * @see https://docs.hetzner.cloud/#resources-servers-get-1
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Status of the server
     *
     * @see https://docs.hetzner.cloud/#resources-servers-get-1
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return bool
     */
    public function isRunning()
    {
        return $this->status === 'running';
    }

    /**
     * @return bool
     */
    public function isInitializing()
    {
        return $this->status === 'initializing';
    }

    /**
     * @return bool
     */
    public function isStarting()
    {
        return $this->status === 'starting';
    }

    /**
     * @return bool
     */
    public function isStopping()
    {
        return $this->status === 'stopping';
    }

    /**
     * @return bool
     */
    public function isOff()
    {
        return $this->status === 'off';
    }

    /**
     * @return bool
     */
    public function isDeleting()
    {
        return $this->status === 'deleting';
    }

    /**
     * @return bool
     */
    public function isMigrating()
    {
        return $this->status === 'migrating';
    }

    /**
     * @return bool
     */
    public function isRebuilding()
    {
        return $this->status === 'rebuilding';
    }

    /**
     * @return bool
     */
    public function isUnknown()
    {
        return $this->status === 'unknown';
    }

    /**
     * Point in time when the server was created (in ISO-8601 format)
     *
     * @see https://docs.hetzner.cloud/#resources-servers-get-1
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Public network information
     *
     * @see https://docs.hetzner.cloud/#resources-servers-get-1
     * @return PublicNet
     */
    public function getPublicNet()
    {
        return new PublicNet($this->public_net);
    }

    /**
     * Type of server - determines how much ram, disk and cpu a server has
     *
     * @see https://docs.hetzner.cloud/#resources-server-types-get-1
     * @return ServerType
     */
    public function getServerType()
    {
        return new ServerType($this->server_type);
    }

    /**
     * Datacenter this server is located at
     *
     * @see https://docs.hetzner.cloud/#resources-datacenters-get-1
     * @return Datacenter
     */
    public function getDatacenter()
    {
        return new Datacenter($this->datacenter);
    }

    /**
     * Image this server was created from
     *
     * @see https://docs.hetzner.cloud/#resources-images-get-1
     * @return Image|null
     */
    public function getImage()
    {
        if(is_null($this->image))
            return null;

        return new Image($this->image);
    }

    /**
     * ISO image that is attached to this server. Null if no ISO is attached
     *
     * @see https://docs.hetzner.cloud/#resources-iso-get-1
     * @return ISO|null
     */
    public function getIso()
    {
        if(is_null($this->iso))
            return null;

        return new ISO($this->iso);
    }

    /**
     * True if rescue mode is enabled: Server will then boot into rescue system on next reboot
     *
     * @see https://docs.hetzner.cloud/#resources-servers-get-1
     * @return bool
     */
    public function isRescueEnabled()
    {
        return $this->rescue_enabled;
    }

    /**
     * True if server has been locked and is not available to user
     *
     * @see https://docs.hetzner.cloud/#resources-servers-get-1
     * @return bool
     */
    public function isLocked()
    {
        return $this->locked;
    }

    /**
     * Retrieve the backup window hours (UTC)
     * `null` if backups are not enabled
     *
     * @see https://docs.hetzner.cloud/#resources-servers-get-1
     * @return null|string
     */
    public function getBackupWindow()
    {
        return $this->backup_window;
    }

    /**
     * Retrieve the outgoing traffic in bytes
     *
     * @see https://docs.hetzner.cloud/#resources-servers-get-1
     * @return int|null
     */
    public function getOutgoingTraffic()
    {
        return $this->outgoing_traffic;
    }

    /**
     * Retrieve the ingoing traffic in bytes
     *
     * @see https://docs.hetzner.cloud/#resources-servers-get-1
     * @return int|null
     */
    public function getIngoingTraffic()
    {
        return $this->ingoing_traffic;
    }

    /**
     * Retrieve the included traffic in bytes
     *
     * @see https://docs.hetzner.cloud/#resources-servers-get-1
     * @return int
     */
    public function getIncludedTraffic()
    {
        return $this->included_traffic;
    }

    /**
     * Retrieve the remaining free traffic in bytes
     *
     * @return int
     */
    public function getRemainingTraffic()
    {
        $outgoing = $this->getOutgoingTraffic();
        if(is_null($outgoing)) {
            $outgoing = 0;
        }

        return $this->getIncludedTraffic() - $outgoing;
    }

}