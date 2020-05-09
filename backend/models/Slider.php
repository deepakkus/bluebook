<?php

namespace backend\models;

use Yii;
use backend\models\Image;
use backend\models\interfaces\ImageInterface;


/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string|null $btn_text
 * @property string|null $content
 * @property string|null $link
 * @property string|null $status
 * @property int|null $image_id
 * @property string $created_at
 */
class Slider extends \yii\db\ActiveRecord implements ImageInterface
{

    /**
     * @var $TYPE
     */
    //public const TYPE = 'SLIDER';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'status'], 'string'],
            [['image_id'], 'integer'],
            [['created_at'], 'safe'],
            [['btn_text', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'btn_text' => 'Button Text',
            'content' => 'Slider Content',
            'link' => 'Link',
            'status' => 'Status',
            'image_id' => 'Slide Image',
            'created_at' => 'Created At',
        ];
    }

    /**
     * create an new slider
     * @param array $data
     * @param array $file
     * @return bool
     */
    public function createNewSlider($data, $file)
    {
        if($this->load($data)) {
            $this->insert();
            if(isset($file['name']) && !empty($file['name'])) {
                $image = new Image;
                $image_upload_id = $image->createOrUploadAnImage(null,self::TYPE, $file,self::uploadImagePath());
                if($image_upload_id !== false) {
                    $current_model = self::findOne($this->id);
                    $current_model->image_id = (int)$image_upload_id;
                    return $current_model->save();
                }
            }
            return true;
        }
        return false;
    }

    public function updateSlider($id, $data, $file) 
    {
        $slider = self::findOne($id);
        if($slider->load($data)) {
            $slider->save();
        }
        if(isset($file['name']) && !empty($file['name'])) {
            $image = new Image;
            $image->createOrUploadAnImage($slider->image_id, self::TYPE, $file,self::uploadImagePath());
        }
        return true;
    }

    /**
     * delete an slider
     */
    public static function deleteSilder($id)
    {
        if(empty($id)) {
            return false;
        }
        $slider = self::findOne($id);
        if($slider) {
            Image::deleteAnImage($slider->image_id,self::uploadImagePath());
            $slider->delete();
            return true;
        } else {
            return false;
        }
    }

    /**
     * return slider image path
     * @return string
     */
    public static function uploadImagePath()
    {
        return Yii::getAlias('@webroot') . '/uploads/' . strtolower(self::TYPE);
    }

    /**
     * get slider image
     * @param int $id
     * @return string 
     */
    public static function getSliderImage($id) 
    {
        $slider = self::findOne($id);
        if(is_null($slider)) {
            return '';
        }
        return Image::getImageNameById($slider->image_id);
    }

    /**
     * return image full path 
     * @param int $id
     * @return string
     */
    public static function getSliderImageWithPath($id) 
    {
        $image = self::getSliderImage($id);
        return  '/uploads/' . strtolower(self::TYPE) . '/' . $image;
    }
}
