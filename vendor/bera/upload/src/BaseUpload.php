<?php

namespace Bera\Upload;

use Bera\Upload\File;

class BaseUpload 
{
    /**
     * @var $uploadDir
     */
    protected $uploadDir = '';

    /**
     * @var $file
     */
    protected $file;

    /**
     * @var $uploadCondition
     */
    protected $uploadCondition;

    public function __construct($uplodData)
    {
        $this->file = new File($uplodData);
        $this->checkIniForUpload();
    }

    /**
     * @throws Excetpion
     */
    private function checkIniForUpload()
    {
        $is_upload_set = ini_get('file_uploads'); 
        if($is_upload_set == '' || $is_upload_set == '0' ) {
            throw new \Exception('check your php.ini for upload');
        }
    }
    
    /**
     * set upload dir
     * @param string $dir
     */
    public function setUploadDir($dir)
    {
        $this->uploadDir = $dir;
    }

    /**
     * get upload dir
     * @return string
     */
    public function getUploadDir()
    {
        return $this->uploadDir;
    }

    /**
     * upload condition
     * @param array $condition
     */
    public function setUploadConditon( array $condition )
    {
        $this->uploadCondition = $condition;
    }

}
