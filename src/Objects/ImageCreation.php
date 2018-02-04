<?php

namespace Exploriment\HetznerCloud\Objects;

/**
 * Class ImageCreation
 * @package Exploriment\HetznerCloud\Objects
 */
final class ImageCreation extends Action
{

    /**
     * @var object
     */
    public $action;

    /**
     * @var object
     */
    public $image;

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