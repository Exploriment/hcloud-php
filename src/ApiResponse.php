<?php

namespace Exploriment\HetznerCloud;

/**
 * Class ApiResponse
 * @package Exploriment\HetznerCloud
 */
final class ApiResponse implements \JsonSerializable
{

    /**
     * @var object
     */
    private $body;

    /**
     * ApiResponse constructor.
     * @param $body object Retrieved response body
     */
    public function __construct($body)
    {
        $this->body = $body;
    }

    /**
     * @param $name
     * @return null
     */
    public function __get($name)
    {
        if(isset($this->body->$name)) {
            return $this->body->$name;
        }

        return null;
    }

    /**
     * @return bool
     */
    public function hasPagination()
    {
        return isset($this->body->meta->pagination);
    }

    /**
     * @return bool
     */
    public function hasNextPage()
    {
        return $this->hasPagination() && $this->body->meta->pagination->next_page;
    }

    /**
     * @return int
     */
    public function getCurrentPage()
    {
        if($this->hasPagination()) {
            return $this->body->meta->pagination->page;
        }

        return 1;
    }

    /**
     * @return int
     */
    public function getNextPage()
    {
        if($this->hasNextPage()) {
            return $this->body->meta->pagination->page + 1;
        }

        return 1;
    }

    /**
     * @return object
     */
    public function pagination()
    {
        return $this->body->meta->pagination;
    }

    /**
     * @return mixed|object
     */
    public function jsonSerialize()
    {
        return $this->body;
    }

}