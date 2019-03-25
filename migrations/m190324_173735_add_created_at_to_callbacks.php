<?php

use yii\db\Migration;

/**
 * Class m190324_173735_add_created_at_to_callbacks
 */
class m190324_173735_add_created_at_to_callbacks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('callbacks', 'created_at', $this->integer(11));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('callbacks', 'created_at');

        return true;
    }

}
