<?php

namespace Exploriment\HetznerCloud\Objects;

/**
 * Class ImageCreation
 * @package Exploriment\HetznerCloud\Objects
 */
final class ImageCreation extends BaseObject
{

    /**
     * @var object
     */
    protected $action;

    /**
     * @var object
     */
    protected $image;

    /**
     * @return Action
     */
    public function getAction()
    {
        return new Action($this->action);
    }

    /**
     * @return Image
     */
    public function getImage()
    {
        return new Image($this->image);
    }

}