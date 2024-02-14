<?php

use yii\db\Migration;

/**
 * Class m240214_174602_pets
 */
class m240214_174602_create_pets_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pets}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'status' => $this->integer(),
            'location' => $this->string(),
            'imageFile' => $this->string(),
            'created_at' => $this->timestamp()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pets}}');
        return false;
    }

  
}
