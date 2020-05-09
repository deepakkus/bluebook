<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "business".
 *
 * @property int $id
 * @property string $name
 * @property string|null $about
 * @property string|null $phone
 * @property string|null $website
 * @property string|null $address_line_1
 * @property string|null $address_line_2
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zip
 *
 * @property BusinessHours[] $businessHours
 */
class Business extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'business';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['about'], 'string'],
            [['name', 'website', 'address_line_1', 'address_line_2', 'city', 'state'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
            [['zip'], 'string', 'max' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'about' => 'About',
            'phone' => 'Phone',
            'website' => 'Website',
            'address_line_1' => 'Address Line 1',
            'address_line_2' => 'Address Line 2',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
        ];
    }

    /**
     * Gets query for [[BusinessHours]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBusinessHours()
    {
        return $this->hasMany(BusinessHours::className(), ['business_id' => 'id']);
    }
}
