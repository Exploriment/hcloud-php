<?php

namespace Exploriment\HetznerCloud;
use Exploriment\HetznerCloud\Objects\Image;

/**
 * Class Images
 * @package Exploriment\HetznerCloud
 */
final class Images extends Resource
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
     * Updates the image description.
     * Only images of type `snapshot` and `backup` can be updated.
     * @see https://docs.hetzner.cloud/#resources-images-put
     *
     * @param int $id
     * @param string $description
     * @return Image
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function update($id, $description)
    {
        $response = self::request('PUT', $id, [
            'description' => $description
        ]);

        return new Image($response->image);
    }

    /**
     * Convert a Backup image to a Snapshot Image.
     * @see https://docs.hetzner.cloud/#resources-images-put
     *
     * @param int $id
     * @return Image
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function convert($id)
    {
        $response = self::request('PUT', $id, [
            'type' => 'snapshot'
        ]);

        return new Image($response->image);
    }

    /**
     * Delete an image. Only snapshot and backup types
     * @see https://docs.hetzner.cloud/#resources-images-delete
     *
     * @param int $id
     * @return bool
     * @throws Exceptions\MalformedResponse
     * @throws \Exception
     */
    public static function delete($id)
    {
        self::request('DELETE', $id);

        return true;
    }

}