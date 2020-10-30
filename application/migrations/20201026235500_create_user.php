<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
* blogテーブルの追加
*/
class Migration_create_user extends CI_Migration
{
    /**
    * テーブルの作成
    *
    * @return void
    */
    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'contraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'email' => [
                'type' => 'TEXT',
                'constraint' => 100
            ],
            'password' => [
                'type' => 'TEXT',
                'constraint' => 100
            ],
            
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',

        ]);
        
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('user');
    }
      
    /**
    * テーブルの削除
    *
    * @return void
    */
    public function down()
    {
        $this->dbforge->drop_table('user');
    }
}
