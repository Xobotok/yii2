<?php

use yii\db\Migration;

/**
 * Class m181025_214025_change_table_attribute
 */
class m181025_214025_change_table_attribute extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    $this->renameColumn('users','role','role_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181025_214025_change_table_attribute cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181025_214025_change_table_attribute cannot be reverted.\n";

        return false;
    }
    */
}
