<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
* blogテーブルの追加
*/
class Migration_create_blog extends CI_Migration
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
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'author_user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'createed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'modified_at TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP'
        ]);
        
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('blog');
    }
      
    /**
    * テーブルの削除
    *
    * @return void
    */
    public function down()
    {
        $this->dbforge->drop_table('blog');
    }
}
