<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLaporanPelaksanaanTable extends Migration
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
            'nama_mahasiswa' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tingkat_keberhasilan' => [
                'type' => 'ENUM',
                'constraint' => "'1','2','3','4','5'",
            ],
            'catatan' => [
                'type' => 'TEXT',
            ],
            'keterangan' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('laporan_pelaksanaan', true);
    }

    public function down()
    {
        $this->forge->dropTable('laporan_pelaksanaan', true);
    }
}
