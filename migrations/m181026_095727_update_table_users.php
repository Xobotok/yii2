<?php

use yii\db\Migration;

/**
 * Class m181026_095727_update_table_users
 */
class m181026_095727_update_table_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    $this->addColumn('users', 'auth_key', $this->string(32));
        $this->addColumn('users', 'access_token', $this->string(32));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181026_095727_update_table_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181026_095727_update_table_users cannot be reverted.\n";

        return false;
    }
    */
}
