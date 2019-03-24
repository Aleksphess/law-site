<?php

use yii\db\Migration;

/**
 * Class m190324_141136_sertificates_table
 */
class m190324_141136_sertificates_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('certificates', [
            'id' => $this->primaryKey()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('certificates');
    }
}
