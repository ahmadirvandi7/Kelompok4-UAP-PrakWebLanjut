<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class MahasiswaController extends BaseController
{

    protected $helpers = ['form'];
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $data['mahasiswa'] = $this->mahasiswaModel->getMahasiswa();
        return view('datamahasiswa_admin', $data);
    }

    public function create()
    {
        return view('/formdatamahasiswa_admin');
    }


    public function store()
    {
        $data = [
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'npm' => $this->request->getPost('npm'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        ];

        $this->mahasiswaModel->saveMahasiswa($data);

        return redirect()->to('/datamahasiswa_admin'); 
    }

    public function edit($id)
    {
        $data['mahasiswa'] = $this->mahasiswaModel->find($id);
        return view('formeditdatamahasiswa_admin', $data);
    }
    

    public function update($id)
    {
        $data = [
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'npm' => $this->request->getPost('npm'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        ];

        $this->mahasiswaModel->update($id, $data);

        return redirect()->to('/datamahasiswa_admin');
    }


    public function delete($id)
    {
        $this->mahasiswaModel->delete($id);

        return redirect()->to('/datamahasiswa_admin'); 
    }
}
