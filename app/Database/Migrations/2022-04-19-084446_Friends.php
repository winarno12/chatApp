<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Friends extends Migration
{
    public function up()
    {
        $this->forge->addField([
                'id_friends'     => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
                'id_user'        => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
                'id_friends'     => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'status'            => [
                'type'          => 'INT',
                'constraint'    => 1,
                'null'          => true,
            ],
            'created_at'        => [
                'type'          => 'DATETIME',
                'null'          => null,
            ],
            'updated_at'        => [
                'type'          => 'DATETIME',
                'null'          => null,
            ],
        ]);
        $this->forge->addKey('id_friends', true);
        $this->forge->createTable('friends');
    }

    public function down()
    {
        $this->forge->dropTable('friends');
    }
}
