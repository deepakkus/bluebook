<?php

use yii\db\Migration;

/**
 * Class m200417_120310_page
 */
class m200417_120310_page extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('page',[
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull()->unique(),
            'content' => $this->text(),
        ]); 
    }
    public function down()
    {
        $this->dropTable('page');
    }
}
