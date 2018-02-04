<?php

namespace Exploriment\HetznerCloud;

use Illuminate\Support\Collection;

/**
 * Class Resource
 * @package Exploriment\HetznerCloud
 */
class Resource
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

    /**
     * @return string
     * @throws \ReflectionException
     */
    protected static function getClassName()
    {
        if(static::$className) return static::$className;

        return (new \ReflectionClass(get_called_class()))->getShortName();
    }

    /**
     * @param bool $mutate
     * @return string
     * @throws \ReflectionException
     */
    protected static function getResourceName($mutate = false)
    {
        $name = self::getClassName();
        if($mutate) {
            $name = self::mutateName($name);
        }

        return $name;
    }

    /**
     * @param bool $mutate
     * @return bool|string
     * @throws \ReflectionException
     */
    protected static function getResourceNameSingle($mutate = false)
    {
        $name = substr(self::getResourceName(), 0, -1);
        if($mutate) {
            $name = self::mutateName($name);
        }

        return $name;
    }

    /**
     * @param string $name
     * @return null|string
     */
    protected static function mutateName($name)
    {
        return preg_replace('/\B([A-Z])/', '_$1', $name);
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $json
     * @param array $query
     * @return ApiResponse
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    protected static function request($method, $uri = '', $json = [ ], $query = [ ])
    {
        $resource = strtolower(self::getResourceName(true));
        $uri = $resource . '/' . $uri;

        return Http::request($method, $uri, $json, $query);
    }

    /**
     * Retrieve a list of this resource
     *
     * @param int $page
     * @param array $options
     * @return Collection
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function get($page = 1, $options = [ ])
    {
        $response = self::request('GET', '', [ ], [
            'page' => $page,
            'per_page' => 50
        ] + $options);

        static::$options = $options;

        if($response->hasNextPage()) {
            static::$currentPage = $response->getCurrentPage();
            static::$hasNextPage = true;
        } else {
            static::$hasNextPage = false;
        }

        $collection = new Collection($response->{strtolower(self::getResourceName(true))});
        $collection->transform(function($item) {
            $object = 'Exploriment\HetznerCloud\Objects\\' . self::getResourceNameSingle();
            return new $object($item);
        });

        return $collection;
    }

    public static function getCurrentPage()
    {
        return static::$currentPage;
    }

    /**
     * Does this resource have a next page?
     *
     * @return bool
     */
    public static function hasNextPage()
    {
        return static::$hasNextPage;
    }

    /**
     * Retrieve next page
     *
     * @return Collection
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function next()
    {
        return self::get(static::$currentPage + 1, static::$options);
    }

    /**
     * Retrieve a single item of the resource
     * @alias retrieve
     *
     * @param $id
     * @param null|string $className
     * @return mixed
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function find($id, $className = null)
    {
        $response = self::request('GET', $id);

        $object = ($className ? $className : 'Exploriment\HetznerCloud\Objects\\' . self::getResourceNameSingle());
        $mObject = strtolower(self::getResourceNameSingle(true));
        return new $object($response->{$mObject});
    }
    public static function retrieve($id, $className = null) { return self::find($id, $className); }

}