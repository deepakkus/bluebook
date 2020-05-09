<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "business_hours".
 *
 * @property int $id
 * @property int $day
 * @property string|null $open_time
 * @property string|null $closed_time
 * @property int|null $business_id
 *
 * @property Business $business
 */
class BusinessHours extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'business_hours';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['day'], 'required'],
            [['day', 'business_id'], 'integer'],
            [['open_time', 'closed_time'], 'safe'],
            [['business_id'], 'exist', 'skipOnError' => true, 'targetClass' => Business::className(), 'targetAttribute' => ['business_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'day' => 'Day',
            'open_time' => 'Open Time',
            'closed_time' => 'Closed Time',
            'business_id' => 'Business ID',
        ];
    }

    /**
     * Gets query for [[Business]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBusiness()
    {
        return $this->hasOne(Business::className(), ['id' => 'business_id']);
    }

    /**
     * @param array
     */
    public static function getAllBusinessDay()
    {
        return array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    }
}
