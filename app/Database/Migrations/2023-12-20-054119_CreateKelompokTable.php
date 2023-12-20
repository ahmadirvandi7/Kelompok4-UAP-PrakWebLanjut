<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKelompokTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10, 
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nip_dosen_pembimbing' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'nama_kelompok' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'ketua_kelompok' => [
                'type' => 'INT',
                'constraint' => 10, 
                'unsigned' => true,
            ],
            'tgl_pembentukan' => [
                'type' => 'DATE',
            ],
            'npm_anggota_1' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'npm_anggota_2' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'npm_anggota_3' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'npm_anggota_4' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'npm_anggota_5' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->addForeignKey('nip_dosen_pembimbing', 'dosen', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('ketua_kelompok', 'mahasiswa', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('npm_anggota_1', 'mahasiswa', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('npm_anggota_2', 'mahasiswa', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('npm_anggota_3', 'mahasiswa', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('npm_anggota_4', 'mahasiswa', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('npm_anggota_5', 'mahasiswa', 'id', '', 'CASCADE');
        
        $this->forge->createTable('kelompok');
        
    }

    public function down()
    {
        $this->forge->dropTable('kelompok');
    }
}
