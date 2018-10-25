<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m181025_193904_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'login' => $this->string(32)->notNull()->unique()->comment('Логин для входа'),
            'password' => $this->string(32)->notNull()->comment('Пароль для входа'),
            'role' => $this->integer(1)->notNull()->defaultValue(1),
        ]);
        $this->createIndex('ix_users_login', 'users', 'login', 'true');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
