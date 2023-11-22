<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengumumanModel;

class PengumumanController extends BaseController
{
    protected $helpers = ['form'];
    protected $pengumumanModel;

    public function __construct()
    {
        $this->pengumumanModel = new PengumumanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengumuman',
            'pengumuman' => $this->pengumumanModel->getPengumuman(),
        ];
        return view('pengumuman', $data);
    }

    // public function store()
    // {
    //     $validation = \Config\Services::validation();
        
    //     $input = $this->request->getPost();

    //     if (!$validation->run($input, 'pengumuman')) {
    //         return redirect()->to(base_url('/pengumuman/create'))->withInput()->with('error', $validation->getErrors());
    //     }

    //     $this->pengumumanModel->savePengumuman($input);

    //     return redirect()->to(base_url('/pengumuman'))->with('success', 'Pengumuman berhasil disimpan.');
    // }
    public function store()
    {
        $validation = \Config\Services::validation();
        $input = $this->request->getPost();
    
        if (!$validation->run($input, 'pengumuman')) {
            return redirect()->to(base_url('/pengumuman/create'))->withInput()->with('error', $validation->getErrors());
        }
    
        $file = $this->request->getFile('file');
    
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // penyimpanan file
            $uploadDir = WRITEPATH . 'uploads' . DIRECTORY_SEPARATOR . 'attachment_path';
    
            // Pindahkan file ke direktori yang ditentukan
            $file->move($uploadDir);
    
            // Ambil nama file yang diupload
            $fileName = $file->getName();
    
            // Set nama file ke dalam input
            $input['file'] = $fileName;
        }
    
        // Simpan pengumuman ke database
        $this->pengumumanModel->savePengumuman($input);
    
        // Redirect dengan pesan sukses
        return redirect()->to(base_url('/pengumuman'))->with('success', 'Pengumuman berhasil disimpan.');
    }
    


    public function update($id)
    {
        $validation = \Config\Services::validation();
        
        $input = $this->request->getPost();

        if (!$validation->run($input, 'pengumuman')) {
            return redirect()->to(base_url("/pengumuman/edit/{$id}"))->withInput()->with('error', $validation->getErrors());
        }

        $this->pengumumanModel->updatePengumuman($input, $id);

        return redirect()->to(base_url('/pengumuman'))->with('success', 'Pengumuman berhasil diperbarui.');
    }


    public function create()
    {
        $data = [
            'title' => 'Create Pengumuman',
        ];

        return view('form_pengumuman', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Pengumuman',
            'pengumuman' => $this->pengumumanModel->getPengumuman($id),
        ];

        return view('form_pengumuman', $data);
    }

    public function deletePengumuman($id)
    {
        // Pastikan $id adalah numeric
        if (!is_numeric($id)) {
            throw new \RuntimeException('Invalid ID');
        }

        // Hapus pengumuman berdasarkan ID
        $this->pengumumanModel->deletePengumuman($id);

        return redirect()->to(base_url('/pengumuman'))->with('success', 'Pengumuman berhasil dihapus.');
    }

}
