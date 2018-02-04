<?php

namespace Exploriment\HetznerCloud\Objects;

use Exploriment\HetznerCloud\Exceptions\MethodUnavailable;
use Exploriment\HetznerCloud\Images;
use Exploriment\HetznerCloud\Servers;

/**
 * Class Image
 * @package Exploriment\HetznerCloud\Objects
 */
final class Image extends Object
{

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string|null
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var float|null
     */
    public $image_size;

    /**
     * @var float
     */
    public $disk_size;

    /**
     * @var string
     */
    public $created;

    /**
     * @var object|null
     */
    public $created_from;

    /**
     * @var int|null
     */
    public $bound_to;

    /**
     * @var string
     */
    public $os_flavor;

    /**
     * @var string|null
     */
    public $os_version;

    /**
     * @var bool
     */
    public $rapid_deploy;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isSnapshot()
    {
        return $this->type === 'snapshot';
    }

    /**
     * @return bool
     */
    public function isSystem()
    {
        return $this->type === 'system';
    }

    /**
     * @return bool
     */
    public function isBackup()
    {
        return $this->type === 'backup';
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return bool
     */
    public function isAvailable()
    {
        return $this->status === 'available';
    }

    /**
     * @return bool
     */
    public function isCreating()
    {
        return $this->status === 'creating';
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return float|null
     */
    public function getImageSize()
    {
        return $this->image_size;
    }

    /**
     * @return float
     */
    public function getDiskSize()
    {
        return $this->disk_size;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return null|object
     */
    public function getCreatedFrom()
    {
        return $this->created_from;
    }

    /**
     * @return int|null
     */
    public function getBoundTo()
    {
        return $this->bound_to;
    }

    /**
     * Retrieve the server that the image is bound to
     *
     * @return Server|null
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function getBoundToServer()
    {
        if(!is_null($this->bound_to)) {
            return Servers::find($this->bound_to);
        }

        return null;
    }

    /**
     * @return string
     */
    public function getOsFlavor()
    {
        return $this->os_flavor;
    }

    /**
     * @return null|string
     */
    public function getOsVersion()
    {
        return $this->os_version;
    }

    /**
     * @return bool
     */
    public function canRapidDeploy()
    {
        return $this->rapid_deploy;
    }

    /**
     * @see Image::update()
     *
     * @param string $description
     * @return Image
     * @throws MethodUnavailable
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function update($description)
    {
        // check if this is a system image, if so, throw an Exception
        if($this->isSystem())
            throw new MethodUnavailable('System images cannot be updated');

        return Images::update($this->id, $description);
    }

    /**
     * @see Images::convert()
     *
     * @return Image
     * @throws MethodUnavailable
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     * @throws \ReflectionException
     */
    public function convert()
    {
        // check if this is a backup image, if not throw an Exception
        if(!$this->isBackup())
            throw new MethodUnavailable('Cannot convert a non-backup image to a snapshot');

        // check if this image is available
        if(!$this->isAvailable())
            throw new MethodUnavailable('Cannot convert the backup image to a snapshot while it is still being created');

        return Images::convert($this->id);
    }

    /**
     * @see Images::delete()
     *
     * @return bool
     * @throws \Exception
     * @throws \Exploriment\HetznerCloud\Exceptions\MalformedResponse
     */
    public function delete()
    {
        // check if this is a system image, if so, throw an Exception
        if($this->isSystem())
            throw new MethodUnavailable('System images cannot be deleted');

        return Images::delete($this->id);
    }

}