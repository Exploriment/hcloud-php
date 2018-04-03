<?php

namespace Exploriment\HetznerCloud\Objects;

/**
 * Class Object
 * @package Exploriment\HetznerCloud\Objects
 */
class BaseObject implements \jsonSerializable
{
    /**
     * Object constructor.
     * @param $object
     */
    public function __construct($object)
    {
        foreach($object as $k => $v)
        {
            $this->$k = $v;
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->id;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }
}