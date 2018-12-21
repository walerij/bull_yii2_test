<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bull`.
 */
class m181221_195102_create_bull_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bull', [
            'id' => $this->primaryKey(),
            'user_id'=>  $this->integer(),
            'title'=>  $this->string(),
            'info'=>  $this->string(),
            'price'=>  $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('bull');
    }
}
