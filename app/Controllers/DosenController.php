<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DosenModel;

class DosenController extends BaseController
{
    protected $dosenModel;
    protected $helpers = ['form'];


    public function __construct()
    {
        $this->dosenModel = new DosenModel();
    }

    public function index()
    {
        $data['dosen'] = $this->dosenModel->getDosen();
        return view('/datadosen_admin', $data);
    }

    public function create()
    {
        return view('/formdatadosen_admin');
    }

    public function store()
    {
        $data = [
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'nip' => $this->request->getPost('nip'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'bidang_keahlian' => $this->request->getPost('bidang_keahlian'),
        ];

        $this->dosenModel->saveDosen($data);

        return redirect()->to('/datadosen_admin');
    }

    public function edit($id)
    {
        $data['dosen'] = $this->dosenModel->findDosen($id);
        return view('/formeditdatadosen_admin', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'nip' => $this->request->getPost('nip'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'bidang_keahlian' => $this->request->getPost('bidang_keahlian'),
        ];

        $this->dosenModel->updateDosen($id, $data);

        return redirect()->to('/datadosen_admin');
    }

    public function delete($id)
    {
        $this->dosenModel->deleteDosen($id);

        return redirect()->to('/datadosen_admin');
    }
}
