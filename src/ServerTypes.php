<?php

namespace Exploriment\HetznerCloud;

/**
 * Class ServerTypes
 * @package Exploriment\HetznerCloud
 */
final class ServerTypes extends Resource
{

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

}