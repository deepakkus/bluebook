<?php

namespace Bera\Upload\Helper;

class Util
{
    /**
     * @param string $fileSize
     * @return int
     */
    public static function getFileSizeInBytes($file_size)
    {
        $sizes = array(
            'k' => 1024,
            'm' => 1048576
        );
        $file_size = strtolower($file_size);
        $meter = substr($file_size,-1);
        $size = str_replace($meter,'',$file_size);
        if(array_key_exists($meter,$sizes)) {
            return (int)$size * $sizes[$meter];
        }
        return -1;
    }
}