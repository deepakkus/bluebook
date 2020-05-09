<?php

use yii\db\Migration;

/**
 * Class m200422_122315_add_more_product_field
 */
class m200422_122315_add_more_product_field extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn('product','image_id','integer');
        $this->addColumn('product','quantity_in_stock','integer');
        $this->addColumn('product','product_cat_id','integer');
        $this->addForeignKey('fk-product-image_id','product','image_id','image','id','CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk-product-image_id','product');
        $this->dropColumn('product','image_id');
        $this->dropColumn('product','quantity_in_stock');
        $this->dropColumn('product','product_cat_id');
    }
    
}
