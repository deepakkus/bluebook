<?php

use yii\db\Migration;

/**
 * Class m200417_125526_blog
 */
class m200417_125526_blog extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('blog',[
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull()->unique(),
            'content' => $this->text(),
            'short_desp' => $this->string(255),
            'author' => $this->string(255),
            'published_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'status' => "ENUM('draft','published')",
            'image_id' => $this->integer()
        ]); 
      
    }
    public function down() 
    {
        $this->dropTable('blog');
    }
}
