<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KelolaKegiatan extends Migration
{
    public function up()
    {
        
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'hari' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tanggal' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kegiatan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
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
        $this->forge->addkey('id', true, true);
        $this->forge->createTable('KelolaKegiataan');
    }

    public function down()
    {
        $this->forge->dropTable('KelolaKegiataan', true);
    }
}
