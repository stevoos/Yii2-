<?php

use yii\db\Schema;
use yii\db\Migration;

class m151005_093744_user extends Migration
{
    public function up()
    {
         $this->createTable('user', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'surname' => Schema::TYPE_TEXT,
            'email' => 'VARCHAR(128) NOT NULL',
            'password' => 'VARCHAR(128) NOT NULL',
            'authKey' => 'TEXT NULL',  
            'accessToken' => 'TEXT NULL'  
            ]);

    }

    public function down()
    {
        

        $this->dropTable('user');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
