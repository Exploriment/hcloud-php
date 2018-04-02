<?php

namespace Exploriment\HetznerCloud;

use Exploriment\HetznerCloud\Exceptions\MalformedResponse;
use GuzzleHttp\Client;

/**
 * Class Http
 * @package Exploriment\HetznerCloud
 */
final class Http
{

    /**
     * @var Client
     */
    private static $client;

    /**
     * Initialize Guzzle client
     */
    private static function init()
    {
        if(self::$client) return;

        self::$client = new Client([
            'base_uri' => HetznerCloud::getRoot(),
            'timeout' => HetznerCloud::getTimeout(),
            'headers' => [
                'Accept' => 'application/json',
                'User-Agent' => HetznerCloud::getAgent(),
                'Authorization' => 'Bearer ' . HetznerCloud::getToken()
            ],
            'http_errors' => false
        ]);
    }

    /**
     * Reset the client
     */
    public static function reset()
    {
        self::$client = null;
    }

    /**
     * @return Client
     */
    public static function client()
    {
        self::init();

        return self::$client;
    }

    /**
     * @param $method
     * @param $uri
     * @param array $json
     * @param array $query
     * @return bool|ApiResponse
     * @throws MalformedResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function request($method, $uri, $json = [ ], $query = [ ])
    {

        $response = self::client()->request($method, $uri, [
            'json' => (object) $json,
            'query' => $query
        ]);

        // save the ratelimit data
        if(
            $response->hasHeader('RateLimit-Limit') &&
            $response->hasHeader('RateLimit-Remaining') &&
            $response->hasHeader('RateLimit-Reset')
        ) {
            HetznerCloud::setRateLimit((object) [
                'limit' => (int) $response->getHeaderLine('RateLimit-Limit'),
                'remaining' => (int) $response->getHeaderLine('RateLimit-Remaining'),
                'reset' => (int) $response->getHeaderLine('RateLimit-Reset')
            ]);
        }

        // if the request method was DELETE and the response is empty, assume successful
        if(
            $method === 'DELETE' &&
            (string) $response->getBody() === '' &&
            $response->getStatusCode() >= 200 &&
            $response->getStatusCode() <= 299
        )
            return true;

        // decode body
        if($body = json_decode($response->getBody())) {
            if(isset($body->error)) {
                $class = self::getErrorClass($body->error);
                throw $class;
            }
        } else {
            throw new MalformedResponse($body->error->message);
        }

        return new ApiResponse($body);
    }

    /**
     * @param object $error
     * @return \Exception
     */
    public static function getErrorClass($error)
    {
        $parsed = self::parseCode($error->code);
        $class = 'Exploriment\HetznerCloud\Exceptions\Api' . $parsed;
        if(!class_exists($class)) {
            $class = '\Exception';
        }

        return new $class($error->message);
    }

    /**
     * @param string $code
     * @return string
     */
    public static function parseCode($code)
    {
        return str_replace('_', '', ucwords($code, '_'));
    }

}