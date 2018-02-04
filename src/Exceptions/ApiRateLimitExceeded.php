<?php

namespace Exploriment\HetznerCloud\Exceptions;

/**
 * Class ApiRateLimitExceeded
 *
 * Thrown when the API returns error code `rate_limit_exceeded`
 *
 * @package Exploriment\HetznerCloud\Exceptions
 */
class ApiRateLimitExceeded extends \Exception { }