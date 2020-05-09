<?php

use yii\db\Migration;

/**
 * Class m200427_121127_business
 */
class m200427_121127_business extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('business',[
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'about' => $this->text(),
            'phone' => $this->string(15),
            'website' => $this->string(255),
            'address_line_1' => $this->string(255),
            'address_line_2' => $this->string(255),
            'city' => $this->string(255),
            'state' => $this->string(255),
            'zip' => $this->string(6),
        ]);
    }

    public function down()
    {
        $this->dropTable('business');
    }
     
}
