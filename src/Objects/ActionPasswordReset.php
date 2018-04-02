<?php

namespace Exploriment\HetznerCloud\Objects;

/**
 * Class ActionPasswordReset
 * @package Exploriment\HetznerCloud\Objects
 */
final class ActionPasswordReset extends Action
{

    /**
     * @var string
     */
    protected $root_password;

    /**
     * Returns the new root password for the server if the action succeeds
     * @see https://docs.hetzner.cloud/#resources-server-actions-post-5
     *
     * @return string
     */
    public function getRootPassword()
    {
        return $this->root_password;
    }

}