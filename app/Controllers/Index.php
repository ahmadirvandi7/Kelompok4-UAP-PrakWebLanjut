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
    public function admin()
    {
        return view('admin');
    }
    public function laporan_kegiatan()
    {
        return view('laporan_kegiatan');
    }
    public function frommahasiswa()
    {
        return view('frommahasiswa');
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
