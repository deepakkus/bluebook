<?php

namespace admin\models;

// use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property integer $settings_id
 * @property integer $free_allowed_registration
 * @property integer $yearly_fee
 * @property string $paypal_email
 * @property integer $admin_email
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_email'], 'required'],
			[['contact_email', 'contact_phone', 'contact_address'], 'safe'],
            [['admin_email','facebook','linkedin','twitter','copyright'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'settings_id' => 'Settings ID',
			'facebook' => 'facebook url',
			'linkedin'=> 'linkedin url',
			'twitter' =>'twitter url',
			'copyright' =>'Copyright'
			
        ];
    }
}
