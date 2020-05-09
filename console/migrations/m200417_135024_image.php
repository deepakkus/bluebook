<?php

use yii\db\Migration;

/**
 * Class m200417_135024_image
 */
class m200417_135024_image extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('image',[
            'id' => $this->primaryKey(),
            'type' => $this->text()->notNull(),
            'name' => $this->string(255)->notNull()
        ]); 
    }

    public function down()
    {
        $this->dropTable('image');
    }
    
}
