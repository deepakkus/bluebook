<?php

namespace backend\models\interfaces;

/**
 * every class which work with images must be implement this interface
 */
interface ImageInterface
{
    /**
     * return upload path of the image
     * @return string
     */
    public static function uploadImagePath();
}