<?php

namespace Bera\Upload;

use Bera\Upload\UploadInterface;
use Bera\Upload\BaseUpload;
use Bera\Upload\Exception\FileTypeNotSupprotExectpion;
use Bera\Upload\Exception\UplodMaxSizeException;
use Bera\Upload\Helper\Util;

class Upload extends BaseUpload implements UploadInterface
{

    public function __construct($uploadFiles)
    {
        parent::__construct($uploadFiles);
    }

    /**
     * upload an file
     * @return bool
     */
    public function upload() : bool
    {
        if($this->validate() === false) {
            return false;
        }

        if(\move_uploaded_file($this->file->getTempLocation(), $this->uploadDestination()) === false) {
            return false;
        }
        return true;
    }

    /**
     * @return bool
     */
    protected function validate() 
    {
        if($this->checkUploadConditon() !== true) {
            return false;
        }
        if($this->checkUploadDir() !== true) {
            return false;
        }
        return true;
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function checkUploadConditon() : bool
    {
        if(is_null($this->file)) {
            throw new \Exception('no file to upload');
        }
        if($this->file->uploadError() != 0) {
            throw new \Exception($this->file->uploadError());
        }
        if(!is_array($this->uploadCondition) && empty($this->uploadCondition)) {
            throw new Exception("upload condition must be set");
        } 
        $file_size = $this->uploadCondition['file_size'];
        $allowed_extension = $this->uploadCondition['allowed_extension'];
        $file_size_in_bytes = Util::getFileSizeInBytes($file_size);
        if( $this->file->getFileSize() > $file_size_in_bytes) {
            throw new UplodMaxSizeException('file size must be less than ' . $file_size);
        }
        if(!in_array($this->file->getFileExtension(),$allowed_extension)) {
            throw new FileTypeNotSupprotExectpion('file must be in the following type '. implode(",",$allowed_extension));
        }
        return true;
    }

    /**
     * check upload directory
     * @return bool
     * @throws Exception
     */
    protected function checkUploadDir()
    {
        if($this->uploadDir == '') {
            $this->uploadDir = __DIR__;
        }
        if($this->uploadDir != '') {
            if(!is_dir($this->uploadDir)) {
                throw new \Exception($this->uploadDir. ' not a dir');
            }
        }
        return true;
    }

    /**
     * file upload destination
     * @param string
     */
    protected function uploadDestination() 
    {
        return $this->uploadDir . '/' . $this->file->getUplodedFileName();
    }

    /**
     * return uploded file name
     * @return string
     */
    public function getUploadedFileName() 
    {
        return $this->file->getUplodedFileName();
    }
}