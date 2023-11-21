<?php

namespace App\Database\Seeds;

use App\Models\PengumumanModel;
use CodeIgniter\Database\Seeder;

class PengumumanSeeder extends Seeder
{
    public function run()
    {
        $pengumumanModel = new PengumumanModel();

        $pengumumanModel->save([
            'title' => 'Pembagian kelompok kkn',
            'content'   => 'dimohon kepada seluruh mahasiswa agar dapat mengunduh file berikut dan mengecek pembagian kelompok yang tertera. jika masih belum terdapat nama anda silahkan melapor kepada pihak yang terkait',
            'creator_id'=> '1',
        ]);
        $pengumumanModel->save([
            'title' => 'Pengumuman 2',
            'content'   => 'isi pengumuman 2',
            'creator_id'=> '2',
        ]);
    }
}
