<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%message}}`.
 */
class m200202_102316_create_message_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%message}}', [
            'id' => $this->primaryKey(),
            'status' => $this->smallInteger()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'room_id' => $this->integer()->notNull(),
            'text' => $this->text(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            'idx-message-user_id',
            'message',
            'user_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-message-user_id',
            'message',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        // creates index for column `room_id`
        $this->createIndex(
            'idx-message-room_id',
            'message',
            'room_id'
        );

        // add foreign key for table `room`
        $this->addForeignKey(
            'fk-message-room_id',
            'message',
            'room_id',
            'room',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-message-user_id',
            'message'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            'idx-message-user_id',
            'message'
        );

        // drops foreign key for table `room`
        $this->dropForeignKey(
            'fk-message-room_id',
            'message'
        );

        // drops index for column `room_id`
        $this->dropIndex(
            'idx-message-room_id',
            'message'
        );

        $this->dropTable('{{%message}}');
    }
}
