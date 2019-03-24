<?php

use yii\db\Migration;

/**
 * Class m190324_145536_add_created_add_to_services
 */
class m190324_145536_add_created_add_to_services extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('services', 'created_at', $this->integer(11));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('services', 'created_at');
    }

}
