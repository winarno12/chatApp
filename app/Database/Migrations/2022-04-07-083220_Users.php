<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'uniq_id'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' =>true
            ],
            'about'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null' =>true
            ],
            'img'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' =>true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => null,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => null,
            ],
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');

    }
}
