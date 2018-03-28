<?php

namespace Exploriment\HetznerCloud\Objects;

/**
 * Class Object
 * @package Exploriment\HetznerCloud\Objects
 */
class BaseObject
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
}