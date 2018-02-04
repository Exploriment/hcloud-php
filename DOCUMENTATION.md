## Table of contents

- [\Exploriment\HetznerCloud\Actions](#class-explorimenthetznercloudactions)
- [\Exploriment\HetznerCloud\ApiResponse](#class-explorimenthetznercloudapiresponse)
- [\Exploriment\HetznerCloud\Datacenters](#class-explorimenthetznerclouddatacenters)
- [\Exploriment\HetznerCloud\FloatingIps](#class-explorimenthetznercloudfloatingips)
- [\Exploriment\HetznerCloud\HetznerCloud](#class-explorimenthetznercloudhetznercloud)
- [\Exploriment\HetznerCloud\Http](#class-explorimenthetznercloudhttp)
- [\Exploriment\HetznerCloud\Images](#class-explorimenthetznercloudimages)
- [\Exploriment\HetznerCloud\ISOs](#class-explorimenthetznercloudisos)
- [\Exploriment\HetznerCloud\Locations](#class-explorimenthetznercloudlocations)
- [\Exploriment\HetznerCloud\Resource](#class-explorimenthetznercloudresource)
- [\Exploriment\HetznerCloud\Servers](#class-explorimenthetznercloudservers)
- [\Exploriment\HetznerCloud\ServerTypes](#class-explorimenthetznercloudservertypes)
- [\Exploriment\HetznerCloud\SshKeys](#class-explorimenthetznercloudsshkeys)
- [\Exploriment\HetznerCloud\Configs\Config (abstract)](#class-explorimenthetznercloudconfigsconfig-abstract)
- [\Exploriment\HetznerCloud\Configs\ConfigInterface (interface)](#interface-explorimenthetznercloudconfigsconfiginterface)
- [\Exploriment\HetznerCloud\Configs\FloatingIp](#class-explorimenthetznercloudconfigsfloatingip)
- [\Exploriment\HetznerCloud\Configs\Server](#class-explorimenthetznercloudconfigsserver)
- [\Exploriment\HetznerCloud\Configs\SshKey](#class-explorimenthetznercloudconfigssshkey)
- [\Exploriment\HetznerCloud\Exceptions\ApiForbidden](#class-explorimenthetznercloudexceptionsapiforbidden)
- [\Exploriment\HetznerCloud\Exceptions\ApiInvalidInput](#class-explorimenthetznercloudexceptionsapiinvalidinput)
- [\Exploriment\HetznerCloud\Exceptions\ApiInvalidServerType](#class-explorimenthetznercloudexceptionsapiinvalidservertype)
- [\Exploriment\HetznerCloud\Exceptions\ApiJsonError](#class-explorimenthetznercloudexceptionsapijsonerror)
- [\Exploriment\HetznerCloud\Exceptions\ApiLocked](#class-explorimenthetznercloudexceptionsapilocked)
- [\Exploriment\HetznerCloud\Exceptions\ApiNotFound](#class-explorimenthetznercloudexceptionsapinotfound)
- [\Exploriment\HetznerCloud\Exceptions\ApiPlacementError](#class-explorimenthetznercloudexceptionsapiplacementerror)
- [\Exploriment\HetznerCloud\Exceptions\ApiRateLimitExceeded](#class-explorimenthetznercloudexceptionsapiratelimitexceeded)
- [\Exploriment\HetznerCloud\Exceptions\ApiRescueAlreadyDisabled](#class-explorimenthetznercloudexceptionsapirescuealreadydisabled)
- [\Exploriment\HetznerCloud\Exceptions\ApiRescueAlreadyEnabled](#class-explorimenthetznercloudexceptionsapirescuealreadyenabled)
- [\Exploriment\HetznerCloud\Exceptions\ApiResourceLimitExceeded](#class-explorimenthetznercloudexceptionsapiresourcelimitexceeded)
- [\Exploriment\HetznerCloud\Exceptions\ApiResourceUnavailable](#class-explorimenthetznercloudexceptionsapiresourceunavailable)
- [\Exploriment\HetznerCloud\Exceptions\ApiServerNotStopped](#class-explorimenthetznercloudexceptionsapiservernotstopped)
- [\Exploriment\HetznerCloud\Exceptions\ApiServiceError](#class-explorimenthetznercloudexceptionsapiserviceerror)
- [\Exploriment\HetznerCloud\Exceptions\ApiUnauthorized](#class-explorimenthetznercloudexceptionsapiunauthorized)
- [\Exploriment\HetznerCloud\Exceptions\ApiUniquenessError](#class-explorimenthetznercloudexceptionsapiuniquenesserror)
- [\Exploriment\HetznerCloud\Exceptions\InvalidInput](#class-explorimenthetznercloudexceptionsinvalidinput)
- [\Exploriment\HetznerCloud\Exceptions\MalformedResponse](#class-explorimenthetznercloudexceptionsmalformedresponse)
- [\Exploriment\HetznerCloud\Exceptions\MethodUnavailable](#class-explorimenthetznercloudexceptionsmethodunavailable)
- [\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)
- [\Exploriment\HetznerCloud\Objects\ActionPasswordReset](#class-explorimenthetznercloudobjectsactionpasswordreset)
- [\Exploriment\HetznerCloud\Objects\Datacenter](#class-explorimenthetznercloudobjectsdatacenter)
- [\Exploriment\HetznerCloud\Objects\FloatingIp](#class-explorimenthetznercloudobjectsfloatingip)
- [\Exploriment\HetznerCloud\Objects\Image](#class-explorimenthetznercloudobjectsimage)
- [\Exploriment\HetznerCloud\Objects\ImageCreation](#class-explorimenthetznercloudobjectsimagecreation)
- [\Exploriment\HetznerCloud\Objects\ISO](#class-explorimenthetznercloudobjectsiso)
- [\Exploriment\HetznerCloud\Objects\Location](#class-explorimenthetznercloudobjectslocation)
- [\Exploriment\HetznerCloud\Objects\Object](#class-explorimenthetznercloudobjectsobject)
- [\Exploriment\HetznerCloud\Objects\PublicNet](#class-explorimenthetznercloudobjectspublicnet)
- [\Exploriment\HetznerCloud\Objects\Server](#class-explorimenthetznercloudobjectsserver)
- [\Exploriment\HetznerCloud\Objects\ServerCreation](#class-explorimenthetznercloudobjectsservercreation)
- [\Exploriment\HetznerCloud\Objects\ServerType](#class-explorimenthetznercloudobjectsservertype)
- [\Exploriment\HetznerCloud\Objects\SshKey](#class-explorimenthetznercloudobjectssshkey)

<hr />

### Class: \Exploriment\HetznerCloud\Actions

> Class Actions

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Exploriment\HetznerCloud\Resource](#class-explorimenthetznercloudresource)*

<hr />

### Class: \Exploriment\HetznerCloud\ApiResponse

> Class ApiResponse

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$body</strong>)</strong> : <em>void</em><br /><em>ApiResponse constructor.</em> |
| public | <strong>__get(</strong><em>mixed</em> <strong>$name</strong>)</strong> : <em>null</em> |
| public | <strong>getCurrentPage()</strong> : <em>int</em> |
| public | <strong>getNextPage()</strong> : <em>int</em> |
| public | <strong>hasNextPage()</strong> : <em>bool</em> |
| public | <strong>hasPagination()</strong> : <em>bool</em> |
| public | <strong>jsonSerialize()</strong> : <em>mixed/object</em> |
| public | <strong>pagination()</strong> : <em>object</em> |

*This class implements \JsonSerializable*

<hr />

### Class: \Exploriment\HetznerCloud\Datacenters

> Class Datacenters

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Exploriment\HetznerCloud\Resource](#class-explorimenthetznercloudresource)*

<hr />

### Class: \Exploriment\HetznerCloud\FloatingIps

> Class FloatingIps

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>assign(</strong><em>int</em> <strong>$id</strong>, <em>int/string/\Exploriment\HetznerCloud\Server</em> <strong>$server</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Assign a floating IP to a server</em> |
| public static | <strong>changeDnsPtr(</strong><em>int</em> <strong>$id</strong>, <em>string</em> <strong>$ip</strong>, <em>null/string</em> <strong>$dns_ptr=null</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Changes the hostname that will appear when getting the hostname belonging to this Floating IP.</em> |
| public static | <strong>create(</strong><em>[\Exploriment\HetznerCloud\Configs\FloatingIp](#class-explorimenthetznercloudconfigsfloatingip)</em> <strong>$config</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\FloatingIp](#class-explorimenthetznercloudobjectsfloatingip)</em><br /><em>Create a new floating IP</em> |
| public static | <strong>delete(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>bool</em><br /><em>Delete a floating IP. If it is currently assigned to a server it will automatically get unassigned.</em> |
| public static | <strong>findAction(</strong><em>int</em> <strong>$resource_id</strong>, <em>int</em> <strong>$action_id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Retrieve a specific action object for a resource</em> |
| public static | <strong>unassign(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Unassign a Floating IP, resulting in it being unreachable. You may assign it to a server again at a later time.</em> |
| public static | <strong>update(</strong><em>int</em> <strong>$id</strong>, <em>string</em> <strong>$description</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\FloatingIp](#class-explorimenthetznercloudobjectsfloatingip)</em><br /><em>Updates the description of a floating IP.</em> |

*This class extends [\Exploriment\HetznerCloud\Resource](#class-explorimenthetznercloudresource)*

<hr />

### Class: \Exploriment\HetznerCloud\HetznerCloud

> Class HetznerCloud

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>getAgent()</strong> : <em>string User agent string</em> |
| public static | <strong>getPricing()</strong> : <em>object</em><br /><em>Retrieve the pricing</em> |
| public static | <strong>getRateLimit()</strong> : <em>object</em> |
| public static | <strong>getRoot()</strong> : <em>string</em> |
| public static | <strong>getTimeout()</strong> : <em>float</em> |
| public static | <strong>getToken()</strong> : <em>string</em> |
| public static | <strong>setRateLimit(</strong><em>object</em> <strong>$limit</strong>)</strong> : <em>void</em> |
| public static | <strong>setTimeout(</strong><em>float</em> <strong>$timeout</strong>)</strong> : <em>void</em> |
| public static | <strong>setToken(</strong><em>string</em> <strong>$token</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Exploriment\HetznerCloud\Http

> Class Http

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>client()</strong> : <em>\GuzzleHttp\Client</em> |
| public static | <strong>getErrorClass(</strong><em>object</em> <strong>$error</strong>)</strong> : <em>[\Exception](http://php.net/manual/en/class.exception.php)</em> |
| public static | <strong>parseCode(</strong><em>string</em> <strong>$code</strong>)</strong> : <em>string</em> |
| public static | <strong>request(</strong><em>string</em> <strong>$method</strong>, <em>string</em> <strong>$uri</strong>, <em>array</em> <strong>$json=array()</strong>, <em>array</em> <strong>$query=array()</strong>)</strong> : <em>[\Exploriment\HetznerCloud\ApiResponse](#class-explorimenthetznercloudapiresponse)/bool</em> |
| public static | <strong>reset()</strong> : <em>void</em><br /><em>Reset the client</em> |

<hr />

### Class: \Exploriment\HetznerCloud\Images

> Class Images

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>convert(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Image](#class-explorimenthetznercloudobjectsimage)</em><br /><em>Convert a Backup image to a Snapshot Image.</em> |
| public static | <strong>delete(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>bool</em><br /><em>Delete an image. Only snapshot and backup types</em> |
| public static | <strong>update(</strong><em>int</em> <strong>$id</strong>, <em>string</em> <strong>$description</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Image](#class-explorimenthetznercloudobjectsimage)</em><br /><em>Updates the image description. Only images of type `snapshot` and `backup` can be updated.</em> |

*This class extends [\Exploriment\HetznerCloud\Resource](#class-explorimenthetznercloudresource)*

<hr />

### Class: \Exploriment\HetznerCloud\ISOs

> Class ISOs

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Exploriment\HetznerCloud\Resource](#class-explorimenthetznercloudresource)*

<hr />

### Class: \Exploriment\HetznerCloud\Locations

> Class Locations

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Exploriment\HetznerCloud\Resource](#class-explorimenthetznercloudresource)*

<hr />

### Class: \Exploriment\HetznerCloud\Resource

> Class Resource

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>find(</strong><em>mixed</em> <strong>$id</strong>, <em>null/string</em> <strong>$className=null</strong>)</strong> : <em>mixed</em><br /><em>Retrieve a single item of the resource</em> |
| public static | <strong>get(</strong><em>int</em> <strong>$page=1</strong>, <em>array</em> <strong>$options=array()</strong>)</strong> : <em>\Illuminate\Support\Collection</em><br /><em>Retrieve a list of this resource</em> |
| public static | <strong>getCurrentPage()</strong> : <em>mixed</em> |
| public static | <strong>hasNextPage()</strong> : <em>bool</em><br /><em>Does this resource have a next page?</em> |
| public static | <strong>next()</strong> : <em>\Illuminate\Support\Collection</em><br /><em>Retrieve next page</em> |
| public static | <strong>retrieve(</strong><em>mixed</em> <strong>$id</strong>, <em>mixed</em> <strong>$className=null</strong>)</strong> : <em>void</em> |
| protected static | <strong>getClassName()</strong> : <em>string</em> |
| protected static | <strong>getResourceName(</strong><em>bool</em> <strong>$mutate=false</strong>)</strong> : <em>string</em> |
| protected static | <strong>getResourceNameSingle(</strong><em>bool</em> <strong>$mutate=false</strong>)</strong> : <em>bool/string</em> |
| protected static | <strong>mutateName(</strong><em>string</em> <strong>$name</strong>)</strong> : <em>null/string</em> |
| protected static | <strong>request(</strong><em>string</em> <strong>$method</strong>, <em>string</em> <strong>$uri=`''`</strong>, <em>array</em> <strong>$json=array()</strong>, <em>array</em> <strong>$query=array()</strong>)</strong> : <em>[\Exploriment\HetznerCloud\ApiResponse](#class-explorimenthetznercloudapiresponse)</em> |

<hr />

### Class: \Exploriment\HetznerCloud\Servers

> Class Servers

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>attachIso(</strong><em>int</em> <strong>$id</strong>, <em>int/string/\Exploriment\HetznerCloud\ISO</em> <strong>$iso</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Attaches an ISO to a server. The Server will immediately see it as a new disk. An already attached ISO will automatically be detached before the new ISO is attached. Servers with attached ISOs have a modified boot order: They will try to boot from the ISO first before falling back to hard disk.</em> |
| public static | <strong>changeDnsPtr(</strong><em>int</em> <strong>$id</strong>, <em>null/string</em> <strong>$dns_ptr=null</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Changes the hostname that will appear when getting the hostname belonging to the primary IPs (ipv4 and ipv6) of this server. Floating IPs assigned to the server are not affected by this.</em> |
| public static | <strong>changeType(</strong><em>int</em> <strong>$id</strong>, <em>int/string/\Exploriment\HetznerCloud\ServerType</em> <strong>$server_type</strong>, <em>bool</em> <strong>$upgrade_disk=true</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Changes the type (Cores, RAM and disk sizes) of a server. Server must be powered off for this command to succeed. This copies the content of its disk, and starts it again. You can only migrate to server types with the same storage_type and equal or bigger disks. Shrinking disks is not possible as it might destroy data. If the disk gets upgraded, the server type can not be downgraded any more. If you plan to downgrade the server type, set upgrade_disk to false.</em> |
| public static | <strong>create(</strong><em>[\Exploriment\HetznerCloud\Configs\Server](#class-explorimenthetznercloudconfigsserver)</em> <strong>$config</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\ServerCreation](#class-explorimenthetznercloudobjectsservercreation)</em><br /><em>Create a new server</em> |
| public static | <strong>createImage(</strong><em>int</em> <strong>$id</strong>, <em>string</em> <strong>$description=`''`</strong>, <em>string</em> <strong>$type=`'snapshot'`</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\ImageCreation](#class-explorimenthetznercloudobjectsimagecreation)</em><br /><em>Creates an image (snapshot) from a server by copying the contents of its disks. This creates a snapshot of the current state of the disk and copies it into an image. If the server is currently running you must make sure that its disk content is consistent. Otherwise, the created image may not be readable. To make sure disk content is consistent, we recommend to shut down the server prior to creating an image. You can either create a backup image that is bound to the server and therefore will be deleted when the server is deleted, or you can create an snapshot image which is completely independent of the server it was created from and will survive server deletion. Backup images are only available when the backup option is enabled for the Server. Snapshot images are billed on a per GB basis.</em> |
| public static | <strong>delete(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Delete a server</em> |
| public static | <strong>detachIso(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Detaches an ISO from a server. In case no ISO image is attached to the server, the status of the returned action is immediately set to `success`.</em> |
| public static | <strong>disableBackups(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Disables the automatic backup option and deletes all existing Backups for a Server. No more additional charges for backups will be made. Caution: This immediately removes all existing backups for the server!</em> |
| public static | <strong>disableRescue(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Disables the Hetzner Rescue System for a server. This makes a server start from its disks on next reboot. Rescue Mode is automatically disabled when you first boot into it or if you do not use it for 60 minutes. Disabling rescue mode will not reboot your server — you will have to do this yourself.</em> |
| public static | <strong>enableBackups(</strong><em>int</em> <strong>$id</strong>, <em>string/null</em> <strong>$backup_window=null</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Enables and configures the automatic daily backup option for the server. Enabling automatic backups will increase the price of the server by 20%. In return, you will get seven slots where images of type backup can be stored. Backups are automatically created daily. Passing the backup_window will select the time window for the daily backup to run. All times are in UTC. 22-02 means that the backup will be started between 10 PM and 2 AM. This will be done on a best-effort base, so Hetzner cannot guarantee the backup window will be met. If you do not provide a time window one will be randomly selected.</em> |
| public static | <strong>enableRescue(</strong><em>int</em> <strong>$id</strong>, <em>string</em> <strong>$type=`'linux64'`</strong>, <em>array</em> <strong>$ssh_keys=array()</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\ActionPasswordReset](#class-explorimenthetznercloudobjectsactionpasswordreset)</em><br /><em>Enable the Hetzner Rescue System for this server. The next time a Server with enabled rescue mode boots it will start a special minimal Linux distribution designed for repair and reinstall. In case a server cannot boot on its own you can use this to access a server’s disks. Rescue Mode is automatically disabled when you first boot into it or if you do not use it for 60 minutes. Enabling rescue mode will not reboot your server — you will have to do this yourself.</em> |
| public static | <strong>findAction(</strong><em>int</em> <strong>$resource_id</strong>, <em>int</em> <strong>$action_id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Retrieve a specific action object for a resource</em> |
| public static | <strong>getMetrics(</strong><em>int</em> <strong>$id</strong>, <em>int/string</em> <strong>$start</strong>, <em>int/string</em> <strong>$end</strong>, <em>array</em> <strong>$types=array()</strong>, <em>int/null</em> <strong>$step=null</strong>)</strong> : <em>object</em><br /><em>Get Metrics for specified server</em> |
| public static | <strong>powerOff(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Power off a server (force stop)</em> |
| public static | <strong>powerOn(</strong><em>mixed</em> <strong>$id</strong>)</strong> : <em>void</em> |
| public static | <strong>reboot(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Soft-reboot a server</em> |
| public static | <strong>rebuild(</strong><em>int</em> <strong>$id</strong>, <em>int/string/\Exploriment\HetznerCloud\Image</em> <strong>$image</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Rebuilds a server overwriting its disk with the content of an image, thereby destroying all data on the target server. The image can either be one you have created earlier (backup or snapshot image) or it can be a completely fresh system image provided by Hetzner. Your server will automatically be powered off before the rebuild command executes.</em> |
| public static | <strong>rename(</strong><em>int</em> <strong>$id</strong>, <em>string</em> <strong>$name</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Server](#class-explorimenthetznercloudobjectsserver)</em><br /><em>Rename a server</em> |
| public static | <strong>reset(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Reset a server (force restart)</em> |
| public static | <strong>resetPassword(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\ActionPasswordReset](#class-explorimenthetznercloudobjectsactionpasswordreset)</em><br /><em>Reset the root password for as server</em> |
| public static | <strong>restart(</strong><em>mixed</em> <strong>$id</strong>)</strong> : <em>void</em> |
| public static | <strong>shutdown(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Shutdown a server</em> |
| public static | <strong>start(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em><br /><em>Start a server (power on)</em> |
| public static | <strong>stop(</strong><em>mixed</em> <strong>$id</strong>)</strong> : <em>void</em> |

*This class extends [\Exploriment\HetznerCloud\Resource](#class-explorimenthetznercloudresource)*

<hr />

### Class: \Exploriment\HetznerCloud\ServerTypes

> Class ServerTypes

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Exploriment\HetznerCloud\Resource](#class-explorimenthetznercloudresource)*

<hr />

### Class: \Exploriment\HetznerCloud\SshKeys

> Class SshKeys

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>create(</strong><em>[\Exploriment\HetznerCloud\Configs\SshKey](#class-explorimenthetznercloudconfigssshkey)</em> <strong>$config</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\SshKey](#class-explorimenthetznercloudobjectssshkey)</em><br /><em>Create a new SSH key</em> |
| public static | <strong>delete(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>bool</em><br /><em>Delete a SSH key</em> |
| public static | <strong>rename(</strong><em>mixed</em> <strong>$id</strong>, <em>mixed</em> <strong>$name</strong>)</strong> : <em>void</em> |
| public static | <strong>update(</strong><em>int</em> <strong>$id</strong>, <em>string</em> <strong>$name</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\SshKey](#class-explorimenthetznercloudobjectssshkey)</em><br /><em>Updates the SSH key name.</em> |

*This class extends [\Exploriment\HetznerCloud\Resource](#class-explorimenthetznercloudresource)*

<hr />

### Class: \Exploriment\HetznerCloud\Configs\Config (abstract)

> Class Config

| Visibility | Function |
|:-----------|:---------|
| public | <strong>jsonSerialize()</strong> : <em>array</em> |

*This class implements \JsonSerializable, [\Exploriment\HetznerCloud\Configs\ConfigInterface](#interface-explorimenthetznercloudconfigsconfiginterface)*

<hr />

### Interface: \Exploriment\HetznerCloud\Configs\ConfigInterface

> Interface ConfigInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>toArray()</strong> : <em>array</em> |
| public | <strong>verify()</strong> : <em>bool</em> |

<hr />

### Class: \Exploriment\HetznerCloud\Configs\FloatingIp

> Class FloatingIp

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$type=null</strong>)</strong> : <em>void</em><br /><em>FloatingIp constructor.</em> |
| public | <strong>getDescription()</strong> : <em>null/string</em> |
| public | <strong>getHomeLocation()</strong> : <em>null/string</em> |
| public | <strong>getServer()</strong> : <em>int/null</em> |
| public | <strong>getType()</strong> : <em>string</em> |
| public | <strong>setDescription(</strong><em>string</em> <strong>$description</strong>)</strong> : <em>void</em> |
| public | <strong>setHomeLocation(</strong><em>int/string/\Exploriment\HetznerCloud\Configs\Location</em> <strong>$home_location</strong>)</strong> : <em>void</em> |
| public | <strong>setServer(</strong><em>int/string/\Exploriment\HetznerCloud\Configs\Objects\Server</em> <strong>$server</strong>)</strong> : <em>void</em> |
| public | <strong>setType(</strong><em>int/string/[\Exploriment\HetznerCloud\Configs\Server](#class-explorimenthetznercloudconfigsserver)Type</em> <strong>$type</strong>)</strong> : <em>void</em> |
| public | <strong>toArray()</strong> : <em>array</em> |
| public | <strong>verify()</strong> : <em>void</em> |

*This class extends [\Exploriment\HetznerCloud\Configs\Config](#class-explorimenthetznercloudconfigsconfig-abstract)*

*This class implements [\Exploriment\HetznerCloud\Configs\ConfigInterface](#interface-explorimenthetznercloudconfigsconfiginterface), \JsonSerializable*

<hr />

### Class: \Exploriment\HetznerCloud\Configs\Server

> Class Server

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$name=null</strong>, <em>mixed</em> <strong>$server_type=null</strong>, <em>mixed</em> <strong>$image=null</strong>)</strong> : <em>void</em><br /><em>Server constructor.</em> |
| public | <strong>getDatacenter()</strong> : <em>string</em> |
| public | <strong>getImage()</strong> : <em>string</em> |
| public | <strong>getLocation()</strong> : <em>string</em> |
| public | <strong>getName()</strong> : <em>string</em> |
| public | <strong>getServerType()</strong> : <em>string</em> |
| public | <strong>getSshKeys()</strong> : <em>array</em> |
| public | <strong>getUserData()</strong> : <em>string</em> |
| public | <strong>isStartAfterCreate()</strong> : <em>bool</em> |
| public | <strong>setDatacenter(</strong><em>int/string/\Exploriment\HetznerCloud\Configs\Datacenter</em> <strong>$datacenter</strong>)</strong> : <em>void</em> |
| public | <strong>setImage(</strong><em>int/string/\Exploriment\HetznerCloud\Configs\Image</em> <strong>$image</strong>)</strong> : <em>void</em> |
| public | <strong>setLocation(</strong><em>int/string/\Exploriment\HetznerCloud\Configs\Location</em> <strong>$location</strong>)</strong> : <em>void</em> |
| public | <strong>setName(</strong><em>string</em> <strong>$name</strong>)</strong> : <em>void</em> |
| public | <strong>setServerType(</strong><em>int/string/[\Exploriment\HetznerCloud\Configs\Server](#class-explorimenthetznercloudconfigsserver)Type</em> <strong>$server_type</strong>)</strong> : <em>void</em> |
| public | <strong>setSshKeys(</strong><em>array</em> <strong>$ssh_keys</strong>)</strong> : <em>void</em> |
| public | <strong>setStartAfterCreate(</strong><em>bool</em> <strong>$start_after_create</strong>)</strong> : <em>void</em> |
| public | <strong>setUserData(</strong><em>string</em> <strong>$user_data</strong>)</strong> : <em>void</em> |
| public | <strong>toArray()</strong> : <em>array</em> |
| public | <strong>verify()</strong> : <em>void</em> |

*This class extends [\Exploriment\HetznerCloud\Configs\Config](#class-explorimenthetznercloudconfigsconfig-abstract)*

*This class implements [\Exploriment\HetznerCloud\Configs\ConfigInterface](#interface-explorimenthetznercloudconfigsconfiginterface), \JsonSerializable*

<hr />

### Class: \Exploriment\HetznerCloud\Configs\SshKey

> Class SshKey

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$name=`''`</strong>, <em>string</em> <strong>$public_key=`''`</strong>)</strong> : <em>void</em><br /><em>SshKey constructor.</em> |
| public | <strong>getName()</strong> : <em>string</em> |
| public | <strong>getPublicKey()</strong> : <em>string</em> |
| public | <strong>setName(</strong><em>string</em> <strong>$name</strong>)</strong> : <em>void</em> |
| public | <strong>setPublicKey(</strong><em>string</em> <strong>$public_key</strong>)</strong> : <em>void</em> |
| public | <strong>toArray()</strong> : <em>array</em> |
| public | <strong>verify()</strong> : <em>void</em> |

*This class extends [\Exploriment\HetznerCloud\Configs\Config](#class-explorimenthetznercloudconfigsconfig-abstract)*

*This class implements [\Exploriment\HetznerCloud\Configs\ConfigInterface](#interface-explorimenthetznercloudconfigsconfiginterface), \JsonSerializable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiForbidden

> Class ApiForbidden Thrown when the API returns error code `forbidden`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiInvalidInput

> Class ApiInvalidInput Thrown when the API returns error code `invalid_input`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiInvalidServerType

> Class ApiInvalidServerType Thrown when the API returns error code `invalid_server_type`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiJsonError

> Class ApiJsonError Thrown when the API returns error code `json_error`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiLocked

> Class ApiLocked Thrown when the API returns error code `locked`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiNotFound

> Class ApiNotFound Thrown when the API returns error code `not_found`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiPlacementError

> Class ApiPlacementError Thrown when the API returns error code `placement_error`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiRateLimitExceeded

> Class ApiRateLimitExceeded Thrown when the API returns error code `rate_limit_exceeded`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiRescueAlreadyDisabled

> Class ApiRescueAlreadyDisabled Thrown when the API returns error code `rescue_already_disabled`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiRescueAlreadyEnabled

> Class ApiRescueAlreadyEnabled Thrown when the API returns error code `rescue_already_enabled`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiResourceLimitExceeded

> Class ApiResourceLimitExceeded Thrown when the API returns error code `resource_limit_exceeded`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiResourceUnavailable

> Class ApiResourceUnavailable Thrown when the API returns error code `resource_unavailable`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiServerNotStopped

> Class ApiServerNotStopped Thrown when the API returns error code `server_not_stopped`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiServiceError

> Class ApiServiceError Thrown when the API returns error code `service_error`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiUnauthorized

> Class ApiUnauthorized Thrown when the API returns error code `unauthorized`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\ApiUniquenessError

> Class ApiUniquenessError Thrown when the API returns error code `uniqueness_error`

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\InvalidInput

> Class InvalidInput Thrown when input was invalid

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\MalformedResponse

> Class MalformedResponse Thrown when the API returns a malformed response (invalid JSON)

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Exceptions\MethodUnavailable

> Class MethodUnavailable Thrown when a method cannot be used (e.g. cannot delete a system image)

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \Exploriment\HetznerCloud\Objects\Action

> Class Action

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCommand()</strong> : <em>string</em><br /><em>Command executed in the action</em> |
| public | <strong>getError()</strong> : <em>null/object</em><br /><em>Error message for the action if error occured, otherwise `null`</em> |
| public | <strong>getFinished()</strong> : <em>null/string</em><br /><em>Point in time when the action was finished (in ISO-8601 format) Only set if the action status is `finished`, otherwise `null`</em> |
| public | <strong>getId()</strong> : <em>int</em><br /><em>ID of the action</em> |
| public | <strong>getProgress()</strong> : <em>int</em><br /><em>Progress of the action in percent</em> |
| public | <strong>getResources()</strong> : <em>array</em><br /><em>Resources the action relates to</em> |
| public | <strong>getStarted()</strong> : <em>string</em><br /><em>Point in time when the action was started (in ISO-8601 format)</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Status of the action</em> |
| public | <strong>hasError()</strong> : <em>bool</em> |
| public | <strong>isRunning()</strong> : <em>bool</em> |
| public | <strong>isSuccess()</strong> : <em>bool</em> |

*This class extends [\Exploriment\HetznerCloud\Objects\Object](#class-explorimenthetznercloudobjectsobject)*

<hr />

### Class: \Exploriment\HetznerCloud\Objects\ActionPasswordReset

> Class ActionPasswordReset

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getRootPassword()</strong> : <em>string</em><br /><em>Returns the new root password for the server if the action succeeds</em> |

*This class extends [\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)*

<hr />

### Class: \Exploriment\HetznerCloud\Objects\Datacenter

> Class Datacenter

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDescription()</strong> : <em>string</em><br /><em>Description of the datacenter</em> |
| public | <strong>getId()</strong> : <em>int</em><br /><em>ID of the datacenter</em> |
| public | <strong>getLocation()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Location](#class-explorimenthetznercloudobjectslocation)</em><br /><em>Location where the datacenter resides in</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Unique identifier of the datacenter</em> |
| public | <strong>getServerTypes()</strong> : <em>object</em><br /><em>The server types the datacenter can handle</em> |
| public | <strong>isAvailable(</strong><em>[\Exploriment\HetznerCloud\Objects\ServerType](#class-explorimenthetznercloudobjectsservertype)/int/string</em> <strong>$server</strong>)</strong> : <em>bool</em><br /><em>Check if a server type is available</em> |
| public | <strong>isSupported(</strong><em>[\Exploriment\HetznerCloud\Objects\ServerType](#class-explorimenthetznercloudobjectsservertype)/int/string</em> <strong>$server</strong>)</strong> : <em>bool</em><br /><em>Check if a server type is supported</em> |

*This class extends [\Exploriment\HetznerCloud\Objects\Object](#class-explorimenthetznercloudobjectsobject)*

<hr />

### Class: \Exploriment\HetznerCloud\Objects\FloatingIp

> Class FloatingIp

| Visibility | Function |
|:-----------|:---------|
| public | <strong>assign(</strong><em>int/string/[\Exploriment\HetznerCloud\Objects\Server](#class-explorimenthetznercloudobjectsserver)</em> <strong>$server</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>changeDnsPtr(</strong><em>string</em> <strong>$ip</strong>, <em>null/string</em> <strong>$dns_ptr=null</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>delete()</strong> : <em>bool</em> |
| public | <strong>getDescription()</strong> : <em>null/string</em><br /><em>Description of the floating IP</em> |
| public | <strong>getDnsPtr()</strong> : <em>array</em><br /><em>Array of reverse DNS entries</em> |
| public | <strong>getHomeLocation()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Location](#class-explorimenthetznercloudobjectslocation)</em><br /><em>Location of the floating IP was created in. Routing is optimized for this location.</em> |
| public | <strong>getId()</strong> : <em>int</em><br /><em>ID of the floating IP</em> |
| public | <strong>getIp()</strong> : <em>string</em><br /><em>IP address of the floating IP</em> |
| public | <strong>getServer()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Server](#class-explorimenthetznercloudobjectsserver)/null</em><br /><em>Get server information as a Server object null if the floating IP is not assigned to a server</em> |
| public | <strong>getServerId()</strong> : <em>int/null</em><br /><em>ID of the server the floating IP is assigned to, null if not assigned</em> |
| public | <strong>getType()</strong> : <em>string</em><br /><em>Type of the floating IP (ipv4 or ipv6)</em> |
| public | <strong>isBlocked()</strong> : <em>bool</em><br /><em>Whether the IP is blocked</em> |
| public | <strong>isIpv4()</strong> : <em>bool</em> |
| public | <strong>isIpv6()</strong> : <em>bool</em> |
| public | <strong>unassign()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>update(</strong><em>string</em> <strong>$description</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\FloatingIp](#class-explorimenthetznercloudobjectsfloatingip)</em> |

*This class extends [\Exploriment\HetznerCloud\Objects\Object](#class-explorimenthetznercloudobjectsobject)*

<hr />

### Class: \Exploriment\HetznerCloud\Objects\Image

> Class Image

| Visibility | Function |
|:-----------|:---------|
| public | <strong>canRapidDeploy()</strong> : <em>bool</em> |
| public | <strong>convert()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Image](#class-explorimenthetznercloudobjectsimage)</em> |
| public | <strong>delete()</strong> : <em>bool</em> |
| public | <strong>getBoundTo()</strong> : <em>int/null</em> |
| public | <strong>getBoundToServer()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Server](#class-explorimenthetznercloudobjectsserver)/null</em><br /><em>Retrieve the server that the image is bound to</em> |
| public | <strong>getCreated()</strong> : <em>string</em> |
| public | <strong>getCreatedFrom()</strong> : <em>null/object</em> |
| public | <strong>getDescription()</strong> : <em>string</em> |
| public | <strong>getDiskSize()</strong> : <em>float</em> |
| public | <strong>getId()</strong> : <em>int</em> |
| public | <strong>getImageSize()</strong> : <em>float/null</em> |
| public | <strong>getName()</strong> : <em>null/string</em> |
| public | <strong>getOsFlavor()</strong> : <em>string</em> |
| public | <strong>getOsVersion()</strong> : <em>null/string</em> |
| public | <strong>getStatus()</strong> : <em>string</em> |
| public | <strong>getType()</strong> : <em>string</em> |
| public | <strong>isAvailable()</strong> : <em>bool</em> |
| public | <strong>isBackup()</strong> : <em>bool</em> |
| public | <strong>isCreating()</strong> : <em>bool</em> |
| public | <strong>isSnapshot()</strong> : <em>bool</em> |
| public | <strong>isSystem()</strong> : <em>bool</em> |
| public | <strong>update(</strong><em>string</em> <strong>$description</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Image](#class-explorimenthetznercloudobjectsimage)</em> |

*This class extends [\Exploriment\HetznerCloud\Objects\Object](#class-explorimenthetznercloudobjectsobject)*

<hr />

### Class: \Exploriment\HetznerCloud\Objects\ImageCreation

> Class ImageCreation

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAction()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>getImage()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Image](#class-explorimenthetznercloudobjectsimage)</em> |

*This class extends [\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)*

<hr />

### Class: \Exploriment\HetznerCloud\Objects\ISO

> Class ISO

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDescription()</strong> : <em>string</em><br /><em>Description of the ISO</em> |
| public | <strong>getId()</strong> : <em>int</em><br /><em>ID of the ISO</em> |
| public | <strong>getName()</strong> : <em>null/string</em><br /><em>Unique identifier of the ISO. Only set for public ISOs</em> |
| public | <strong>getType()</strong> : <em>string</em><br /><em>Type of ISO (public / private)</em> |
| public | <strong>isPrivate()</strong> : <em>bool</em> |
| public | <strong>isPublic()</strong> : <em>bool</em> |

*This class extends [\Exploriment\HetznerCloud\Objects\Object](#class-explorimenthetznercloudobjectsobject)*

<hr />

### Class: \Exploriment\HetznerCloud\Objects\Location

> Class Location

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCity()</strong> : <em>string</em><br /><em>City the location is closest to</em> |
| public | <strong>getCountry()</strong> : <em>string</em><br /><em>ISO 3166-1 alpha-2 code of the country the location resides in</em> |
| public | <strong>getDescription()</strong> : <em>string</em><br /><em>Description of the location</em> |
| public | <strong>getId()</strong> : <em>int</em><br /><em>ID of the location</em> |
| public | <strong>getLatitude()</strong> : <em>float</em><br /><em>Latitude of the city closest to the location</em> |
| public | <strong>getLongitude()</strong> : <em>float</em><br /><em>Longitude of the city closest to the location</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Unique identifier of the location</em> |

*This class extends [\Exploriment\HetznerCloud\Objects\Object](#class-explorimenthetznercloudobjectsobject)*

<hr />

### Class: \Exploriment\HetznerCloud\Objects\Object

> Class Object

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$object</strong>)</strong> : <em>void</em><br /><em>Object constructor.</em> |
| public | <strong>__toString()</strong> : <em>string</em> |

<hr />

### Class: \Exploriment\HetznerCloud\Objects\PublicNet

> Class PublicNet

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__toString()</strong> : <em>string</em> |
| public | <strong>getIpv4()</strong> : <em>string</em><br /><em>Retrieve the ipv4 address of the server</em> |
| public | <strong>getIpv6()</strong> : <em>string</em><br /><em>Retrieve the ipv6 address of the server</em> |

*This class extends [\Exploriment\HetznerCloud\Objects\Object](#class-explorimenthetznercloudobjectsobject)*

<hr />

### Class: \Exploriment\HetznerCloud\Objects\Server

> Class Server

| Visibility | Function |
|:-----------|:---------|
| public | <strong>attachIso(</strong><em>int/string/[\Exploriment\HetznerCloud\Objects\ISO](#class-explorimenthetznercloudobjectsiso)</em> <strong>$iso</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>changeDnsPtr(</strong><em>null/string</em> <strong>$dns_ptr=null</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>changeType(</strong><em>int/string/[\Exploriment\HetznerCloud\Objects\ServerType](#class-explorimenthetznercloudobjectsservertype)</em> <strong>$server_type</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>delete()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>detachIso()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>disableBackups()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>disableRescue()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>enableBackups(</strong><em>string/null</em> <strong>$backup_window=null</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>enableRescue(</strong><em>string</em> <strong>$type=`'linux64'`</strong>, <em>array</em> <strong>$ssh_keys=array()</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\ActionPasswordReset](#class-explorimenthetznercloudobjectsactionpasswordreset)</em> |
| public | <strong>findAction(</strong><em>int</em> <strong>$id</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>getBackupWindow()</strong> : <em>null/string</em><br /><em>Retrieve the backup window hours (UTC) `null` if backups are not enabled</em> |
| public | <strong>getCreated()</strong> : <em>string</em><br /><em>Point in time when the server was created (in ISO-8601 format)</em> |
| public | <strong>getDatacenter()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Datacenter](#class-explorimenthetznercloudobjectsdatacenter)</em><br /><em>Datacenter this server is located at</em> |
| public | <strong>getId()</strong> : <em>int</em><br /><em>ID of the server</em> |
| public | <strong>getImage()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Image](#class-explorimenthetznercloudobjectsimage)/null</em><br /><em>Image this server was created from</em> |
| public | <strong>getIncludedTraffic()</strong> : <em>int</em><br /><em>Retrieve the included traffic in bytes</em> |
| public | <strong>getIngoingTraffic()</strong> : <em>int/null</em><br /><em>Retrieve the ingoing traffic in bytes</em> |
| public | <strong>getIso()</strong> : <em>[\Exploriment\HetznerCloud\Objects\ISO](#class-explorimenthetznercloudobjectsiso)/null</em><br /><em>ISO image that is attached to this server. Null if no ISO is attached</em> |
| public | <strong>getMetrics(</strong><em>int/string</em> <strong>$start</strong>, <em>int/string</em> <strong>$end</strong>, <em>array</em> <strong>$types=array()</strong>, <em>int/null</em> <strong>$step=null</strong>)</strong> : <em>object</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Name of the server (must be unique per project and a valid hostname as per RFC 1123)</em> |
| public | <strong>getOutgoingTraffic()</strong> : <em>int/null</em><br /><em>Retrieve the outgoing traffic in bytes</em> |
| public | <strong>getPublicNet()</strong> : <em>[\Exploriment\HetznerCloud\Objects\PublicNet](#class-explorimenthetznercloudobjectspublicnet)</em><br /><em>Public network information</em> |
| public | <strong>getRemainingTraffic()</strong> : <em>int</em><br /><em>Retrieve the remaining free traffic in bytes</em> |
| public | <strong>getServerType()</strong> : <em>[\Exploriment\HetznerCloud\Objects\ServerType](#class-explorimenthetznercloudobjectsservertype)</em><br /><em>Type of server - determines how much ram, disk and cpu a server has</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Status of the server</em> |
| public | <strong>isDeleting()</strong> : <em>bool</em> |
| public | <strong>isInitializing()</strong> : <em>bool</em> |
| public | <strong>isLocked()</strong> : <em>bool</em><br /><em>True if server has been locked and is not available to user</em> |
| public | <strong>isMigrating()</strong> : <em>bool</em> |
| public | <strong>isOff()</strong> : <em>bool</em> |
| public | <strong>isRebuilding()</strong> : <em>bool</em> |
| public | <strong>isRescueEnabled()</strong> : <em>bool</em><br /><em>True if rescue mode is enabled: Server will then boot into rescue system on next reboot</em> |
| public | <strong>isRunning()</strong> : <em>bool</em> |
| public | <strong>isStarting()</strong> : <em>bool</em> |
| public | <strong>isStopping()</strong> : <em>bool</em> |
| public | <strong>isUnknown()</strong> : <em>bool</em> |
| public | <strong>powerOff()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>powerOn()</strong> : <em>void</em> |
| public | <strong>reboot()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>rebuild(</strong><em>int/string/[\Exploriment\HetznerCloud\Objects\Image](#class-explorimenthetznercloudobjectsimage)</em> <strong>$image</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>rename(</strong><em>string</em> <strong>$name</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\Server](#class-explorimenthetznercloudobjectsserver)</em> |
| public | <strong>reset()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>resetPassword()</strong> : <em>[\Exploriment\HetznerCloud\Objects\ActionPasswordReset](#class-explorimenthetznercloudobjectsactionpasswordreset)</em> |
| public | <strong>restart()</strong> : <em>void</em> |
| public | <strong>shutdown()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>start()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>stop()</strong> : <em>void</em> |

*This class extends [\Exploriment\HetznerCloud\Objects\Object](#class-explorimenthetznercloudobjectsobject)*

<hr />

### Class: \Exploriment\HetznerCloud\Objects\ServerCreation

> Class ServerCreation

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAction()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Action](#class-explorimenthetznercloudobjectsaction)</em> |
| public | <strong>getRootPassword()</strong> : <em>string</em> |
| public | <strong>getServer()</strong> : <em>[\Exploriment\HetznerCloud\Objects\Server](#class-explorimenthetznercloudobjectsserver)</em> |

*This class extends [\Exploriment\HetznerCloud\Objects\Object](#class-explorimenthetznercloudobjectsobject)*

<hr />

### Class: \Exploriment\HetznerCloud\Objects\ServerType

> Class ServerType

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCores()</strong> : <em>int</em><br /><em>Number of CPU cores a server of this type will have</em> |
| public | <strong>getDescription()</strong> : <em>string</em><br /><em>Description of the server type</em> |
| public | <strong>getDisk()</strong> : <em>float</em><br /><em>Disk size a server of this type will have in GB</em> |
| public | <strong>getId()</strong> : <em>int</em><br /><em>ID of the server type</em> |
| public | <strong>getMemory()</strong> : <em>float</em><br /><em>Memory a server of this type will have in GB</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Unique identifier of the server type</em> |
| public | <strong>getPrices()</strong> : <em>array</em><br /><em>Prices in different locations</em> |
| public | <strong>getStorageType()</strong> : <em>string</em><br /><em>Type of server boot drive. Local has higher speed. Network has better availability</em> |
| public | <strong>isLocal()</strong> : <em>bool</em> |
| public | <strong>isNetwork()</strong> : <em>bool</em> |

*This class extends [\Exploriment\HetznerCloud\Objects\Object](#class-explorimenthetznercloudobjectsobject)*

<hr />

### Class: \Exploriment\HetznerCloud\Objects\SshKey

> Class SshKey

| Visibility | Function |
|:-----------|:---------|
| public | <strong>delete()</strong> : <em>bool</em> |
| public | <strong>getFingerprint()</strong> : <em>string</em><br /><em>Fingerprint of the SSH key</em> |
| public | <strong>getId()</strong> : <em>int</em><br /><em>ID of the SSH key</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Unique identifier of the SSH key</em> |
| public | <strong>getPublicKey()</strong> : <em>string</em><br /><em>Public key of the SSH key</em> |
| public | <strong>rename(</strong><em>string</em> <strong>$name</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\SshKey](#class-explorimenthetznercloudobjectssshkey)</em> |
| public | <strong>update(</strong><em>string</em> <strong>$name</strong>)</strong> : <em>[\Exploriment\HetznerCloud\Objects\SshKey](#class-explorimenthetznercloudobjectssshkey)</em> |

*This class extends [\Exploriment\HetznerCloud\Objects\Object](#class-explorimenthetznercloudobjectsobject)*

