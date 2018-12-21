<?php

use yii\db\Migration;

/**
 * Handles the creation of table `photo`.
 */
class m181221_195345_create_photo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('photo', [
            'id' => $this->primaryKey(),
            'bull_id'=>  $this->integer(),
            'link'=>  $this->string(),
            'info'=>  $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('photo');
    }
}
