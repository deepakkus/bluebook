<?php

use yii\db\Migration;

/**
 * Class m200422_122330_product_category
 */
class m200422_122330_product_category extends Migration
{
    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('product_category',[
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->unique(),
            'parent_id' => $this->integer()
        ]);
        $this->addForeignKey('fk-product-product_cat_id','product','product_cat_id','product_category','id');
    }

    public function down()
    {
        $this->dropForeignKey('fk-product-product_cat_id','product');
        $this->dropTable('product_category');
    }
    
}
