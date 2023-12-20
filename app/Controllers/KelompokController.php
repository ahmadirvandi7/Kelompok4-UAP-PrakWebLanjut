<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelompokModel;
use App\Models\DosenModel;
use App\Models\MahasiswaModel;
use CodeIgniter\Exceptions\ValidationException;
use CodeIgniter\Exceptions\PageNotFoundException;



class KelompokController extends BaseController
{
    protected $helpers = ['form'];
    protected $kelompokModel;
    protected $dosenModel;
    protected $mahasiswaModel;

        // Di dalam konstruktor
    public function __construct()
    {
        // Inisialisasi model-model
        $this->kelompokModel = new KelompokModel();
        $this->dosenModel = new DosenModel();
        $this->mahasiswaModel = new MahasiswaModel();
    }
    

    public function create()
    {
        $data['dosen'] = $this->dosenModel->findAll();
        $this->mahasiswaModel = new MahasiswaModel();
        $data['mahasiswa'] = $this->mahasiswaModel->findAll();

        return view('formdatakelompok_admin', $data);
    }

    public function index()
    {
        $data['kelompok'] = $this->kelompokModel->findAll();
        return view('kelompok/index', $data);
    }

    public function index_admin()
    {
        // Misalnya, di dalam controller Anda
        $data['mahasiswa'] = $this->mahasiswaModel->findAll();
        $data['kelompok'] = $this->kelompokModel->findAll(); // Pastikan mendapatkan data kelompok

        // Kemudian, kirimkan data ke view
        return view('kelompok_admin', $data);
    }


    

    public function store()
    {
        $validation = \Config\Services::validation();

        $data = [
            'nip_dosen_pembimbing' => $this->request->getPost('nip_dosen_pembimbing'),
            'nama_kelompok' => $this->request->getPost('nama_kelompok'),
            'ketua_kelompok' => $this->request->getPost('ketua_kelompok'),
            'tgl_pembentukan' => $this->request->getPost('tgl_pembentukan'),
            'npm_anggota_1' => $this->request->getPost('npm_anggota_1'),
            'npm_anggota_2' => $this->request->getPost('npm_anggota_2'),
            'npm_anggota_3' => $this->request->getPost('npm_anggota_3'),
            'npm_anggota_4' => $this->request->getPost('npm_anggota_4'),
            'npm_anggota_5' => $this->request->getPost('npm_anggota_5'),
        ];

        if (!$validation->run($data, 'kelompok')) {
            $errors = $validation->getErrors();
            throw new \Exception(implode('<br>', $errors), 500);
        }
        
        
        
        

        $this->kelompokModel->insert($data);

        return redirect()->to('/kelompok_admin')->with('success', 'Data kelompok berhasil disimpan');
    }

    // KelompokController.php

    public function edit($id)
{
    // Ambil data kelompok berdasarkan ID
    $data['kelompok'] = $this->kelompokModel->find($id);

    // Ambil semua data Dosen dan Mahasiswa untuk dropdown
    $data['dosen'] = $this->dosenModel->findAll();
    $data['mahasiswa'] = $this->mahasiswaModel->findAll();

    // Tampilkan view dengan data yang diperlukan
    return view('/formeditdatakelompok_admin', $data);
}

    



    public function update($id)
    {
        $validation = \Config\Services::validation();

    $data = [
        'nip_dosen_pembimbing' => $this->request->getPost('nip_dosen_pembimbing'),
        'nama_kelompok' => $this->request->getPost('nama_kelompok'),
        'ketua_kelompok' => $this->request->getPost('ketua_kelompok'),
        'tgl_pembentukan' => $this->request->getPost('tgl_pembentukan'),
        'npm_anggota_1' => $this->request->getPost('npm_anggota_1'),
        'npm_anggota_2' => $this->request->getPost('npm_anggota_2'),
        'npm_anggota_3' => $this->request->getPost('npm_anggota_3'),
        'npm_anggota_4' => $this->request->getPost('npm_anggota_4'),
        'npm_anggota_5' => $this->request->getPost('npm_anggota_5'),
    ];

    if (!$validation->run($data, 'kelompok')) {
        throw new ValidationException($validation); 
    }

        $this->kelompokModel->update($id, $data);

        return redirect()->to('/kelompok_admin')->with('success', 'Data kelompok berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->kelompokModel->delete($id);

        return redirect()->to('/kelompok_admin')->with('success', 'Data kelompok berhasil dihapus');
    }
}
