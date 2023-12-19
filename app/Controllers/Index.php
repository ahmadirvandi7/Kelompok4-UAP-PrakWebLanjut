<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;


class Index extends BaseController
{
    public $mahasiswaModel;

    public function __construct(){
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'list_user',
            'users' => $this->mahasiswaModel->getMahasiswa(),
        ];
        return view('tampilan');
    }
  
    public function profile()
    {
        return view('profile');
    }
  
    public function kelompok()
    {
        return view('kelompok');
    }
  
    public function admin()
    {
        return view('admin');
    }

    // public function laporan_kegiatan()
    // {
    //     return view('laporan_kegiatan');
    // }
    public function frommahasiswa()
    {
        return view('frommahasiswa');
    }
    public function pengumuman()
    {
        return view('pengumuman');
    }

    public function datamhs_admin()
    {
        return view('datamhs_admin');
    }
    
    public function laporankegiatan_admin()
    {
        return view('laporankegiatan_admin');
    }
    public function laporanpelaksanaan_admin()
    {
        return view('laporanpelaksanaan_admin');
    }
    public function datadosenpembimbing_admin()
    {
        return view('datadosenpembimbing_admin');
    }
    public function lokasi_kkn()
    {
        return view('lokasi_kkn');
    }
    public function nilai_mhs()
    {
        return view('nilai_mhs');
    }
    // public function lokasi()
    // {
    //     return view('lokasi');
    // }
    public function home_admin()
    {
        return view('home_admin');
    }
    public function formlaporankegiatan()
    {
        return view('formlaporankegiatan');

    }
    public function formlaporanpelaksanaan()
    {
        return view('formlaporanpelaksanaan');
    }
    public function lokasi()
    {
        return view('lokasi');
    }
    public function berandamahasiswa()
    {
        return view('berandamahasiswa');

    }
    public function berandamhs()
    {
        return view('berandamhs');
    }

    public function beranda_admin()
    {
        return view('beranda_admin');

    }

    public function store ()
    {

        $this->mahasiswaModel ->saveMahasiswa([
            'nama_mahasiswa' =>$this->request->getVar('nama_mahasiswa'),
            'npm' =>$this->request->getVar('npm'),
            'jenis_kelamin' =>$this->request->getVar('jenis_kelamin'),
            'upload_berkas' =>$this->request->getVar('upload_berkas'),
        ]);

        $data = [
            'nama_mahasiswa' =>$this->request->getVar('nama_mahasiswa'),
            'npm' =>$this->request->getVar('npm'),
            'jenis_kelamin' =>$this->request->getVar('jenis_kelamin'),
            'upload_berkas' =>$this->request->getVar('upload_berkas'),
        
        ];
        return view('list_user', $data);


}

}
