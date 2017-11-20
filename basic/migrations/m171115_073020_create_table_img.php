<?php

use yii\db\Migration;

/**
 * Class m171115_073020_create_table_img
 */
class m171115_073020_create_table_img extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('img',[
            'id' => $this->primaryKey()->notNull(),
            'src' => $this->text()->notNull(),
            'nameOfImg' => $this->text()->notNull(),
     ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('img');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171115_073020_create_table_img cannot be reverted.\n";

        return false;
    }
    */
}
