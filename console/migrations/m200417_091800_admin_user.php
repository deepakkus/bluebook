<?php

use yii\db\Migration;

/**
 * Class m200417_091800_admin_user
 */
class m200417_091800_admin_user extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('admin_user',[
            'id' => $this->primaryKey(),
            'username' => $this->string(100)->notNull()->unique(),
            'password' => $this->string(255)->notNull(),
            'auth_key' => $this->string(255),
            'email'    => $this->string(255),
            'access_token' => $this->string(255),
            'image_id' => $this->integer()
        ]);  
        
        $this->insert('admin_user', [
            'username' => 'admin',
            'password' => Yii::$app->security->generatePasswordHash('admin'),
            'email' => 'admin@xyz.com'
        ]);
    }

    public function down()
    {
        $this->delete('admin_user', ['id' => 1]);
        $this->dropTable('admin_user');
    }

}
