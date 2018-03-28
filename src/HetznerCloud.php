<?php

namespace Exploriment\HetznerCloud;

/**
 * Class HetznerCloud
 * @package Exploriment\HetznerCloud
 */
final class HetznerCloud
{

    const VERSION = 'v1.0.1';

    const GITHUB = 'https://github.com/exploriment/hcloud-php';

    /**
     * @var string Root URI of the Hetzner Cloud API
     */
    private static $root = 'https://api.hetzner.cloud/v1/';

    /**
     * @var string API access token
     */
    private static $token;

    /**
     * @var float
     */
    private static $timeout;

    /**
     * @var object
     */
    private static $rateLimit;

    /**
     * @return string
     */
    public static function getRoot()
    {
        return self::$root;
    }

    /**
     * @return string
     */
    public static function getToken()
    {
        return self::$token;
    }

    /**
     * @param string $token
     */
    public static function setToken($token)
    {
        Http::reset();

        self::$token = $token;
    }

    /**
     * @return float
     */
    public static function getTimeout()
    {
        return self::$timeout;
    }

    /**
     * @param float $timeout
     */
    public static function setTimeout($timeout)
    {
        self::$timeout = $timeout;
    }

    /**
     * Retrieve the pricing
     *
     * @return object
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function getPricing()
    {
        $response = Http::request('GET', 'pricing');

        return $response->pricing;
    }

    /**
     * @return object
     */
    public static function getRateLimit()
    {
        if(!self::$rateLimit) {
            return (object) [
                'limit' => null,
                'remaining' => null,
                'reset' => null
            ];
        }

        return self::$rateLimit;
    }

    /**
     * @param object $limit
     */
    public static function setRateLimit($limit)
    {
        if(
            is_object($limit) &&
            isset($limit->limit) &&
            isset($limit->remaining) &&
            isset($limit->reset)
        ) {
            self::$rateLimit = $limit;
        }
    }

    /**
     * @return string User agent string
     */
    public static function getAgent()
    {
        return 'Exploriment_hcloud-php/' . self::VERSION . ' (' . self::GITHUB . ')';
    }

}