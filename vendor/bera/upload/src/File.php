<?php

namespace Bera\Upload;

class File
{

    /**
     * @var UPLOAD_FILE_NAME_PREFIX
     */
    const UPLOAD_FILE_NAME_PREFIX = 'file_';

    /**
     * @var array|null $file
     */
    protected $file;

    /**
     * uploded file name
     */
    protected $uploded_file_name;

    /**
     * @param array $file
     */
    public function __construct($file) 
    {
        $this->setFile($file);
        $this->uploded_file_name = null;
    }

    /**
     * @param array $file
     */
    private function setFile( $file ) 
    {
        if(empty($file)) {
            $this->file = null;
        }
        $this->file = $file;
    }

    /**
     * set uploaded file name
     * @param string $filename
     */
    public function setUploadedFileName() 
    {
        if(is_null($this->uploded_file_name)) {
            $file_ext = $this->getFileExtension();
            $this->uploded_file_name = uniqid(self::UPLOAD_FILE_NAME_PREFIX) . '.' . $file_ext;
        }
    }

    /**
     * get file extension
     * @return string
     */
    public function getFileExtension() 
    {
        if( array_key_exists('name',$this->file)) {
            return pathinfo($this->file['name'],PATHINFO_EXTENSION);
        }
        return '';
    }

    /**
     * return file size
     * @return int
     */
    public function getFileSize() 
    {
        if(array_key_exists('size',$this->file)) {
            return (!is_int($this->file['size'])) ? (int) $this->file['size'] : $this->file['size'];
        }
        return 0;
    }

    /**
     * return tmp path where the file is currently uploded
     * @return string
     */
    public function getTempLocation() 
    {
        if(array_key_exists('tmp_name',$this->file)) {
            return $this->file['tmp_name'];
        }
        return '';
    }

    /**
     * return file error msg
     * @return int
     */
    public function uploadError() 
    {
        if(array_key_exists('error',$this->file)) {
            return $this->file['error'];
        }
    }

    /**
     * return uploded file name
     * @return string
     */
    public function getUplodedFileName() 
    {
        if(is_null($this->uploded_file_name)) {
            $this->setUploadedFileName();
        }
        return $this->uploded_file_name;
    }
}