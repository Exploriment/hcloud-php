<?php

namespace Exploriment\HetznerCloud\Traits;

use Exploriment\HetznerCloud\Exceptions\MalformedResponse;
use Exploriment\HetznerCloud\Objects\Action;

/**
 * Trait Actionable
 * @package Exploriment\HetznerCloud
 */
trait Actionable
{

    /**
     * Retrieve a specific action object for a resource
     *
     * @param int $resource_id
     * @param int $action_id
     * @return Action
     * @throws MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    public static function findAction($resource_id, $action_id)
    {
        return self::find($resource_id . '/actions/' . $action_id, 'Action');
    }

    /**
     * Perform a resource action
     *
     * @param int $id
     * @param string $action
     * @param array $options
     * @return Action
     * @throws MalformedResponse
     * @throws \Exception
     * @throws \ReflectionException
     */
    private static function action($id, $action, $options = [ ])
    {
        $response = self::request('POST', $id . '/actions/' . $action, $options);

        return new Action($response->action);
    }

}