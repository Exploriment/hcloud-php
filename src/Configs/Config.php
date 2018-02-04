<?php

namespace Exploriment\HetznerCloud\Configs;

/**
 * Class Config
 * @package Exploriment\HetznerCloud\Configs
 */
abstract class Config implements \JsonSerializable, ConfigInterface
{

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

}