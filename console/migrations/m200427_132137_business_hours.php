<?php

use yii\db\Migration;

/**
 * Class m200427_132137_business_hours
 */
class m200427_132137_business_hours extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('business_hours',[
            'id' => $this->primaryKey(),
            'day' => $this->integer()->notNull(),
            'open_time' => $this->time(),
            'closed_time' => $this->time(),
            'business_id' => $this->integer()
        ]);

        $this->addForeignKey('fk_business_hours_business_id',
                             'business_hours',
                             'business_id',
                             'business',
                             'id',
                             'CASCADE',
                             'CASCADE'
                            );
    }

    public function down()
    {
        $this->dropForeignKey('fk_business_hours_business_id','business_hours');
        $this->dropTable('business_hours');
    }
}
