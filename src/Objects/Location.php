<?php

namespace Exploriment\HetznerCloud\Objects;

/**
 * Class Location
 * @package Exploriment\HetznerCloud\Objects
 */
final class Location extends BaseObject
{

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $city;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $longitude;

    /**
     * ID of the location
     *
     * @see https://docs.hetzner.cloud/#resources-locations-get-1
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique identifier of the location
     *
     * @see https://docs.hetzner.cloud/#resources-locations-get-1
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Description of the location
     *
     * @see https://docs.hetzner.cloud/#resources-locations-get-1
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * ISO 3166-1 alpha-2 code of the country the location resides in
     *
     * @see https://docs.hetzner.cloud/#resources-locations-get-1
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * City the location is closest to
     *
     * @see https://docs.hetzner.cloud/#resources-locations-get-1
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Latitude of the city closest to the location
     *
     * @see https://docs.hetzner.cloud/#resources-locations-get-1
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Longitude of the city closest to the location
     *
     * @see https://docs.hetzner.cloud/#resources-locations-get-1
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

}