<?php

namespace Exploriment\HetznerCloud;

use Exploriment\HetznerCloud\Configs;
use Exploriment\HetznerCloud\Exceptions\InvalidInput;
use Exploriment\HetznerCloud\Objects\Action;
use Exploriment\HetznerCloud\Objects\ActionPasswordReset;
use Exploriment\HetznerCloud\Objects\Image;
use Exploriment\HetznerCloud\Objects\ImageCreation;
use Exploriment\HetznerCloud\Objects\ISO;
use Exploriment\HetznerCloud\Objects\Server;
use Exploriment\HetznerCloud\Objects\ServerCreation;
use Exploriment\HetznerCloud\Objects\ServerType;
use Exploriment\HetznerCloud\Traits\Actionable;

/**
 * Class Servers
 * @package Exploriment\HetznerCloud
 */
final class Servers extends Resource
{

    use Actionable;

    /**
     * Available rescue mode types
     *
     * @const array
     */
    const RESCUE_MODE_TYPES = [
        'linux64', 'linux32', 'freebsd64'
    ];

    /**
     * Available metric types
     *
     * @const array
     */
    const METRIC_TYPES = [
        'cpu', 'disk', 'network'
    ];

    /**
     * Available image types
     *
     * @const array
     */
    const IMAGE_TYPES = [
        'snapshot', 'backup'
    ];

    /**
     * Available backup windows
     *
     * @const array
     */
    const BACKUP_WINDOWS = [
        '22-02', '02-06', '06-10',
        '10-14', '14-18', '18-22'
    ];

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
     * Create a new server
     * @see https://docs.hetzner.cloud/#resources-servers-post
     *
     * @param Configs\Server $config
     * @return ServerCreation
     * @throws Exceptions\MalformedResponse
     * @throws InvalidInput
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function create($config)
    {
        if(!is_a($config, Configs\Server::class))
            throw new InvalidInput('config must be a ' . Configs\Server::class);

        $config->verify();

        $response = self::request('POST', '', $config->toArray());

        return new ServerCreation($response);
    }

    /**
     * Get Metrics for specified server
     * @see https://docs.hetzner.cloud/#resources-servers-get-2
     *
     * @param int $id
     * @param int|string $start
     * @param int|string $end
     * @param array $types
     * @param int|null $step
     * @return object
     * @throws Exceptions\MalformedResponse
     * @throws InvalidInput
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function getMetrics($id, $start, $end, $types = self::METRIC_TYPES, $step = null)
    {

        $types = array_unique($types);

        // validate types
        if(!is_array($types))
            throw new InvalidInput('types argument must be an array');

        // validate types values
        foreach($types as $type)
        {
            if(!in_array($type, self::METRIC_TYPES))
                throw new InvalidInput('Invalid metric type "' . $type . '", must be one of: ' . implode(', ', self::METRIC_TYPES));
        }

        // validate start date
        if(strtotime($start) === false || !is_int($start))
            throw new InvalidInput('start date must be a valid date string or UNIX timestamp');

        // validate end date
        if(strtotime($end) === false || !is_int($end))
            throw new InvalidInput('end date must be a valid date string or UNIX timestamp');

        // format dates
        $start = date('c', (is_int($start) ? $start : strtotime($start)));
        $end = date('c', (is_int($end) ? $end : strtotime($end)));

        $params = [
            'type' => implode(',', $types),
            'start' => $start,
            'end' => $end
        ];
        if(!is_numeric($step)) {
            $params['step'] = $step;
        }

        $response = self::request('GET', $id . '/metrics', [], $params);

        return $response->metrics;
    }

    /**
     * Rename a server
     * @see https://docs.hetzner.cloud/#resources-servers-put
     *
     * @param int $id
     * @param string $name
     * @return Server
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function rename($id, $name)
    {
        $response = self::request('PUT', $id, [
            'name' => $name
        ]);

        return new Server($response->server);
    }

    /**
     * Start a server (power on)
     * @alias powerOn
     *
     * @see https://docs.hetzner.cloud/#resources-server-actions-post
     *
     * @param int $id
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function start($id)
    {
        return self::action($id, 'poweron');
    }
    public static function powerOn($id) { return self::start($id); }

    /**
     * Soft-reboot a server
     * @alias restart
     *
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-1
     *
     * @param int $id
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function reboot($id)
    {
        return self::action($id, 'reboot');
    }
    public static function restart($id) { return self::reboot($id); }

    /**
     * Reset a server (force restart)
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-2
     *
     * @param int $id
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function reset($id)
    {
        return self::action($id, 'reset');
    }

    /**
     * Shutdown a server
     * @alias stop
     *
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-3
     *
     * @param int $id
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function shutdown($id)
    {
        return self::action($id, 'shutdown');
    }
    public static function stop($id) { return self::shutdown($id); }

    /**
     * Power off a server (force stop)
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-4
     *
     * @param int $id
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function powerOff($id)
    {
        return self::action($id, 'poweroff');
    }

    /**
     * Reset the root password for as server
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-5
     *
     * @param int $id
     * @return ActionPasswordReset
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function resetPassword($id)
    {
        $response = self::request('POST', $id . '/actions/reset_password');

        $response->action->root_password = $response->root_password;
        return new ActionPasswordReset($response->action);
    }

    /**
     * Enable the Hetzner Rescue System for this server.
     * The next time a Server with enabled rescue mode boots it will start a special minimal Linux distribution designed for repair and reinstall.
     * In case a server cannot boot on its own you can use this to access a server’s disks.
     * Rescue Mode is automatically disabled when you first boot into it or if you do not use it for 60 minutes.
     * Enabling rescue mode will not reboot your server — you will have to do this yourself.
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-6
     *
     * @param int $id
     * @param string $type Type of rescue system to boot
     * @param array $ssh_keys Array of SSH key IDs which should be injected into the rescue system
     * @return ActionPasswordReset
     * @throws Exceptions\MalformedResponse
     * @throws InvalidInput
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function enableRescue($id, $type = 'linux64', $ssh_keys = [ ])
    {
        // validate the rescue mode type
        if(!in_array($type, self::RESCUE_MODE_TYPES))
            throw new InvalidInput('Rescue mode type must be one of: ' . implode(', ', self::RESCUE_MODE_TYPES));

        // validate the ssh_keys input
        if(!is_array($ssh_keys))
            throw new InvalidInput('ssh_keys argument must be an array');

        // ssh_keys is only available for linux32 and linux64
        if(count($ssh_keys) > 0 && $type === 'freebsd64')
            throw new InvalidInput('ssh_keys is not available for freebsd64');

        // validate if they are numeric IDs
        foreach($ssh_keys as $key)
        {
            if(!is_numeric($key))
                throw new InvalidInput('ssh_keys must be an array with (numeric) IDs');
        }

        $response = self::request('POST',
            $id . '/actions/enable_rescue',
            compact('type', 'ssh_keys')
        );

        $response->action->root_password = $response->root_password;
        return new ActionPasswordReset($response->action);
    }

    /**
     * Disables the Hetzner Rescue System for a server. This makes a server start from its disks on next reboot.
     * Rescue Mode is automatically disabled when you first boot into it or if you do not use it for 60 minutes.
     * Disabling rescue mode will not reboot your server — you will have to do this yourself.
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-7
     *
     * @param int $id
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function disableRescue($id)
    {
        return self::action($id, 'disable_rescue');
    }

    /**
     * Creates an image (snapshot) from a server by copying the contents of its disks.
     * This creates a snapshot of the current state of the disk and copies it into an image.
     * If the server is currently running you must make sure that its disk content is consistent.
     * Otherwise, the created image may not be readable.
     * To make sure disk content is consistent, we recommend to shut down the server prior to creating an image.
     * You can either create a backup image that is bound to the server and therefore will be deleted when the server
     * is deleted, or you can create an snapshot image which is completely independent of the server it was created
     * from and will survive server deletion. Backup images are only available when the backup option is enabled
     * for the Server. Snapshot images are billed on a per GB basis.
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-8
     *
     * @param int $id
     * @param string $description
     * @param string $type
     * @return ImageCreation
     * @throws Exceptions\MalformedResponse
     * @throws InvalidInput
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function createImage($id, $description = '', $type = 'snapshot')
    {
        // validate the image type
        if(!in_array($type, self::IMAGE_TYPES))
            throw new InvalidInput('Image type must be one of: ' . implode(', ', self::IMAGE_TYPES));

        $response = self::request('POST',
            $id . '/actions/create_image',
            compact('type', 'description')
        );

        return new ImageCreation($response);
    }

    /**
     * Rebuilds a server overwriting its disk with the content of an image, thereby destroying all data
     * on the target server.
     *
     * The image can either be one you have created earlier (backup or snapshot image) or it can be
     * a completely fresh system image provided by Hetzner.
     *
     * Your server will automatically be powered off before the rebuild command executes.
     *
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-9
     *
     * @param int $id
     * @param int|string|Image $image
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function rebuild($id, $image)
    {
        return self::action($id, 'rebuild', [
            'image' => (string) $image
        ]);
    }

    /**
     * Changes the type (Cores, RAM and disk sizes) of a server.
     * Server must be powered off for this command to succeed.
     * This copies the content of its disk, and starts it again.
     *
     * You can only migrate to server types with the same storage_type and equal or bigger disks.
     * Shrinking disks is not possible as it might destroy data.
     *
     * If the disk gets upgraded, the server type can not be downgraded any more.
     * If you plan to downgrade the server type, set upgrade_disk to false.
     *
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-10
     *
     * @param int $id
     * @param int|string|ServerType $server_type
     * @param bool $upgrade_disk
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function changeType($id, $server_type, $upgrade_disk = true)
    {
        return self::action($id, 'change_type', [
            'server_type' => (string) $server_type,
            'upgrade_disk' => $upgrade_disk
        ]);
    }

    /**
     * Enables and configures the automatic daily backup option for the server. Enabling automatic backups will
     * increase the price of the server by 20%. In return, you will get seven slots
     * where images of type backup can be stored.
     *
     * Backups are automatically created daily.
     *
     * Passing the backup_window will select the time window for the daily backup to run. All times are in UTC.
     * 22-02 means that the backup will be started between 10 PM and 2 AM. This will be done on a best-effort base,
     * so Hetzner cannot guarantee the backup window will be met.
     *
     * If you do not provide a time window one will be randomly selected.
     *
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-11
     *
     * @param int $id
     * @param string|null $backup_window
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws InvalidInput
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function enableBackups($id, $backup_window = null)
    {
        $options = [ ];

        if($backup_window) {
            // validate backup window
            if(!in_array($backup_window, self::BACKUP_WINDOWS))
                throw new InvalidInput('Invalid backup_window "' . $backup_window . '", must be one of: ' . implode(self::BACKUP_WINDOWS));

            $options['backup_window'] = $backup_window;
        }

        return self::action($id, 'enable_backup', $options);
    }

    /**
     * Disables the automatic backup option and deletes all existing Backups for a Server.
     * No more additional charges for backups will be made.
     * Caution: This immediately removes all existing backups for the server!
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-12
     *
     * @param int $id
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function disableBackups($id)
    {
        return self::action($id, 'disable_backup');
    }

    /**
     * Attaches an ISO to a server. The Server will immediately see it as a new disk.
     * An already attached ISO will automatically be detached before the new ISO is attached.
     *
     * Servers with attached ISOs have a modified boot order:
     * They will try to boot from the ISO first before falling back to hard disk.
     *
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-13
     *
     * @param int $id
     * @param int|string|ISO $iso
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function attachIso($id, $iso)
    {
        return self::action($id, 'attach_iso', [
            'iso' => (string) $iso
        ]);
    }

    /**
     * Detaches an ISO from a server. In case no ISO image is attached to the server,
     * the status of the returned action is immediately set to `success`.
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-14
     *
     * @param int $id
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function detachIso($id)
    {
        return self::action($id, 'detach_iso');
    }

    /**
     * Changes the hostname that will appear when getting the hostname belonging to the primary IPs (ipv4 and ipv6)
     * of this server.
     * Floating IPs assigned to the server are not affected by this.
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-15
     *
     * @param int $id
     * @param null|string $dns_ptr
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function changeDnsPtr($id, $dns_ptr = null)
    {
        return self::action($id, 'change_dns_ptr', [
            'dns_ptr' => $dns_ptr
        ]);
    }

    /**
     * Delete a server
     * @see https://docs.hetzner.cloud/#resources-servers-delete
     *
     * @param int $id
     * @return Action
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function delete($id)
    {
        $response = self::request('DELETE', $id);

        return new Action($response->action);
    }

}