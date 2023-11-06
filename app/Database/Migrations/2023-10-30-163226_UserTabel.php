<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserTabel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'  => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'  => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type'  => 'VARCHAR',
                'constraint' => '10',
            ],
            'email' => [
                'type'  => 'VARCHAR',
                'constraint' => '20',
            ],
            'created_at' => [
                'type'  => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type'  => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type'  => 'DATETIME',
                'null' => true,
            ],

        ]);
        $this->forge->addKey('id', true, true);

        $this->forge->createTable('user');    }

    public function down()
    {
        $this->forge->dropTable('user', true);

    }
}