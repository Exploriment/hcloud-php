<?php

namespace Exploriment\HetznerCloud\Objects;

/**
 * Class Action
 * @package Exploriment\HetznerCloud\Objects
 */
class Action extends Object
{

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $started;

    /**
     * @var string|null
     */
    public $finished;

    /**
     * @var array
     */
    public $resources;

    /**
     * @var object|null
     */
    public $error;

    /**
     * ID of the action
     *
     * @see https://docs.hetzner.cloud/#resources-actions-get-1
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Command executed in the action
     *
     * @see https://docs.hetzner.cloud/#resources-actions-get-1
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Status of the action
     *
     * @see https://docs.hetzner.cloud/#resources-actions-get-1
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return $this->status === 'success';
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
    public function hasError()
    {
        return $this->status === 'error';
    }

    /**
     * Progress of the action in percent
     *
     * @see https://docs.hetzner.cloud/#resources-actions-get-1
     * @return int
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Point in time when the action was started (in ISO-8601 format)
     *
     * @see @see https://docs.hetzner.cloud/#resources-actions-get-1
     * @return string
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * Point in time when the action was finished (in ISO-8601 format)
     * Only set if the action status is `finished`, otherwise `null`
     *
     * @see @see https://docs.hetzner.cloud/#resources-actions-get-1
     * @return null|string
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Resources the action relates to
     *
     * @see @see https://docs.hetzner.cloud/#resources-actions-get-1
     * @return array
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Error message for the action if error occured, otherwise `null`
     *
     * @see @see https://docs.hetzner.cloud/#resources-actions-get-1
     * @return null|object
     */
    public function getError()
    {
        return $this->error;
    }

}