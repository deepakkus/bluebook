<?php

use yii\db\Migration;

/**
 * Class m200420_130827_blog_category
 */
class m200420_130827_blog_category extends Migration
{
    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('blog_category',[
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull(),
        ]); 
        $this->addColumn('blog','cat_id',$this->integer());

        $this->addForeignKey(
            'fk-blog_cat_id',
            'blog',
            'cat_id',
            'blog_category',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey('fk-blog_cat_id','blog');
        $this->dropColumn('blog','cat_id');
        $this->dropTable('blog_category');
    }
    
}
