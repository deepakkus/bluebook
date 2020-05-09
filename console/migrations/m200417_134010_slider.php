<?php

use yii\db\Migration;

/**
 * Class m200417_134010_slider
 */
class m200417_134010_slider extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('slider',[
            'id' => $this->primaryKey(),
            'btn_text' => $this->string(255)->defaultValue('Click Here'),
            'content' => $this->text(),
            'link' => $this->string(255)->defaultValue('#'),
            'status' => "ENUM('Y','N')",
            'image_id' => $this->integer(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')
        ]); 
    }
    public function down()
    {
        $this->dropTable('slider');
    }
}
