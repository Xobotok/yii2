<?php

use yii\db\Migration;

/**
 * Class m181026_110908_update_users_table
 */
class m181026_110908_update_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    $this->renameColumn('users', 'login', 'username');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181026_110908_update_users_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181026_110908_update_users_table cannot be reverted.\n";

        return false;
    }
    */
}
