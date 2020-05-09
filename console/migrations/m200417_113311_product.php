<?php

use yii\db\Migration;

/**
 * Class m200417_113311_product
 */
class m200417_113311_product extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('product',[
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->unique(),
            'short_desp' => $this->text(),
            'long_desp' => $this->text(),
            'price'    => $this->decimal(10,2)->notNull()->defaultValue(0.00),
            'sell_price' => $this->decimal(10,2)->defaultValue(0.00),
        ]); 
    }

    public function down()
    {
        $this->dropTable('product');
    }
    
}
