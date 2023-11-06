<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDosenTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          =>true,
                'auto_increment'    => true,
            ],
            'nama_dosen' => [
                'type'              => 'VARCHAR',
                'constraint'        => '10',
            ],
            'nip'   =>[
                'type'              => 'INT',
                'constraint'        => 15,
                'unsigned'          => true,
            ],
            'jenis_kelamin' => [
                'type'              => 'VARCHAR',
                'constraint'        => 15,
            ],
            'bidang_keahlian' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
            ],
            'created_at'  => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'update_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'deleted_at'  => [
                'type'                  => 'DATETIME',
                'null'                  => true,
            ],
        ]);

        $this->forge->addkey('id', true, true);
        $this->forge->createTable('dosen');
    }

    public function down()
    {
        $this->forge->dropTable('dosen', true);
    }
}