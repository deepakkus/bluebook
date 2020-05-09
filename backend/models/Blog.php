<?php

namespace backend\models;

use Yii;
use backend\models\interfaces\ImageInterface;
use backend\models\BlogCategory;
use backend\models\Image;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property string|null $short_desp
 * @property string|null $author
 * @property string|null $published_at
 * @property string|null $updated_at
 * @property string|null $status
 * @property int|null $image_id
 * @property int|null $cat_id
 *
 * @property BlogCategory $cat
 */
class Blog extends \yii\db\ActiveRecord implements ImageInterface
{
    /**
     * @var $TYPE
     */
    //public const TYPE = 'BLOG';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content', 'status'], 'string'],
            [['published_at', 'updated_at'], 'safe'],
            [['image_id', 'cat_id'], 'integer'],
            [['title', 'short_desp', 'author'], 'string', 'max' => 255],
            [['title'], 'unique'],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => BlogCategory::className(), 'targetAttribute' => ['cat_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'short_desp' => 'Blog Summary',
            'author' => 'Author',
            'published_at' => 'Published At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
            'image_id' => 'Image ID',
            'cat_id' => 'Category',
        ];
    }

    /**
     * Gets query for [[Cat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(BlogCategory::className(), ['id' => 'cat_id']);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) 
        {
            if (!$this->isNewRecord)
                $this->updated_at = date("Y-m-d H:i:s"); 
            return true;
        }
        return false;
    }

    /**
     * create a new blog
     * @param array $data
     * @param array $image
     * @return bool
     */
    public function createNewBlog($data=[], $file=[])
    {
        if(empty($data)) 
            return;
        if($this->load($data)) 
        {
            $this->insert();
            if($file['name'] != '') 
            {
                $image = new Image;
                $image_upload_id = $image->createOrUploadAnImage(null,self::TYPE, $file,self::uploadImagePath());
                if($image_upload_id !== false) 
                {
                    $current_model = self::findOne($this->id);
                    $current_model->image_id = (int)$image_upload_id;
                    return $current_model->save();
                }
            }
            return true;
        }
        return false;
    }

    /**
     * update a blog
     * @param int $id
     * @param array $data
     * @param array $file
     * @return bool
     */
    public function updateBlog($id, $data, $file) 
    {
        $blog = self::findOne($id);
        if($blog->load($data)) 
            $blog->save();
        if(isset($file['name']) && !empty($file['name'])) 
        {
            $image = new Image;
            $image->createOrUploadAnImage($blog->image_id, self::TYPE, $file,self::uploadImagePath());
        }
        return true;
    }

    public static function deleteBlog($id) 
    {
        if(empty($id)) 
            return false;
        $blog = self::findOne($id);
        if($blog)
        {
            Image::deleteAnImage($blog->image_id,self::uploadImagePath());
            $blog->delete();
            return true;
        } 
        else 
            return false;

    }

    /**
     * get blog image
     * @param int $id
     * @return string 
     */
    public static function getBlogImage($id) 
    {
        $blog = self::findOne($id);
        if(is_null($blog)) 
            return '';
        return Image::getImageNameById($blog->image_id);
    }

    /**
     * return image full path 
     * @param int $id
     * @return string
     */
    public static function getBlogImageWithPath($id) 
    {
        $image = self::getBlogImage($id);
        return  '/uploads/' . strtolower(self::TYPE) . '/' . $image;
    }

    /**
     * return blog image path
     * @return string
     */
    public static function uploadImagePath()
    {
        return Yii::getAlias('@webroot') . '/uploads/' . strtolower(self::TYPE);
    }
}
