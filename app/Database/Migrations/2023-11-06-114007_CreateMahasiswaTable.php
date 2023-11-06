<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMahasiswaTable extends Migration
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
            'nama_mahasiswa' => [
                'type'              => 'VARCHAR',
                'constraint'        => '10',
            ],
            'npm'   =>[
                'type'              => 'INT',
                'constraint'        => 15,
                'unsigned'          => true,
            ],
            'jenis_kelamin' => [
                'type'              => 'VARCHAR',
                'constraint'        => 15,
            ],
            'created_at'    => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'update_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'deleted_at'    => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
        ]);

        $this->forge->addkey('id', true, true);
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa', true);
    }
}