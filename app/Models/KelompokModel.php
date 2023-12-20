<?php

namespace App\Models;

use CodeIgniter\Model;

class KelompokModel extends Model
{

    protected $table            = 'kelompok';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_kelompok', 'ketua_kelompok', 'nip_dosen_pembimbing', 'tgl_pembentukan', 'npm_anggota_1', 'npm_anggota_2', 'npm_anggota_3', 'npm_anggota_4', 'npm_anggota_5'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nip_dosen_pembimbing' => 'required|integer',
        'nama_kelompok' => 'required|string|max_length[255]',
        'ketua_kelompok' => 'required|integer',
        'tgl_pembentukan' => 'required|valid_date',
        'npm_anggota_1' => 'required|integer',
        'npm_anggota_2' => 'required|integer',
        'npm_anggota_3' => 'required|integer',
        'npm_anggota_4' => 'required|integer',
        'npm_anggota_5' => 'required|integer',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

// KelompokModel.php

public function getKelompokData()
{
    $kelompokData = $this->db->table('kelompok')->get()->getResultArray();

    foreach ($kelompokData as &$row) {
        // Ambil nama dosen
        $dosen = $this->db->table('dosen')->where('id', $row['nip_dosen_pembimbing'])->get()->getRowArray();
        $row['nama_dosen'] = $dosen['nama_dosen'];

        // Ambil nama mahasiswa
        $mahasiswa = $this->db->table('mahasiswa')->where('id', $row['ketua_kelompok'])->get()->getRowArray();
        $row['nama_mahasiswa'] = $mahasiswa['nama_mahasiswa'];
    }

    return $kelompokData;
}




    // Model atau fungsi untuk mengambil data kelompok
    // public function getKelompokData() {
    //     return $this->db->table('kelompok')
    //         ->select('kelompok.*, dosen.nama_dosen, mahasiswa.nama_mahasiswa')
    //         ->join('dosen', 'dosen.id = kelompok.id_dosen_pembimbing')
    //         ->join('mahasiswa', 'mahasiswa.id = kelompok.id_ketua_kelompok')
    //         ->get()
    //         ->getResultArray();
    // }


    // KelompokModel.php
    // KelompokModel.php
//     public function getKelompokData()
// {
//     return $this->db->table('kelompok')
//         ->join('dosen', 'dosen.id = kelompok.nip_dosen_pembimbing')
//         ->join('mahasiswa as ketua', 'ketua.id = kelompok.ketua_kelompok')
//         ->join('mahasiswa as anggota1', 'anggota1.id = kelompok.npm_anggota_1', 'left')
//         ->join('mahasiswa as anggota2', 'anggota2.id = kelompok.npm_anggota_2', 'left')
//         ->join('mahasiswa as anggota3', 'anggota3.id = kelompok.npm_anggota_3', 'left')
//         ->join('mahasiswa as anggota4', 'anggota4.id = kelompok.npm_anggota_4', 'left')
//         ->join('mahasiswa as anggota5', 'anggota5.id = kelompok.npm_anggota_5', 'left')
//         ->select('kelompok.id, kelompok.nama_kelompok, dosen.nama_dosen, ketua.nama_mahasiswa as nama_ketua, anggota1.nama_mahasiswa as nama_anggota_1, anggota2.nama_mahasiswa as nama_anggota_2, anggota3.nama_mahasiswa as nama_anggota_3, anggota4.nama_mahasiswa as nama_anggota_4, anggota5.nama_mahasiswa as nama_anggota_5, kelompok.tgl_pembentukan')
//         ->get()
//         ->getResultArray();
// }

    



}
