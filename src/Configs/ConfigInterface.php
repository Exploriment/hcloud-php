<?php

namespace Exploriment\HetznerCloud\Configs;

/**
 * Interface ConfigInterface
 * @package Exploriment\HetznerCloud\Configs
 */
interface ConfigInterface
{

    /**
     * @return bool
     */
    public function verify();

    /**
     * @return array
     */
    public function toArray();

}