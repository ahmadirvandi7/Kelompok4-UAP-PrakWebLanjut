<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LaporanKegiatanModel;

class LaporanKegiatanController extends BaseController
{

    protected $laporanModel;

    public function __construct()
    {
        $this->laporanModel = new LaporanKegiatanModel();
    }

    public function index()
    {
        $laporanModel = new LaporanKegiatanModel();

        $data = [
            'laporanMahasiswa' => $laporanModel->findAll(),
        ];

        return view('laporankegiatan_admin', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create laporan kegiatan',
        ];

        return view('formlaporankegiatan', $data);
    }


    public function store()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_mahasiswa' => 'required',
            'program_kegiatan' => 'required',
            'target' => 'required',
            'keterangan' => 'required',
        ]);

        if ($validation->withRequest($this->request)->run()) {
            $laporanModel = new LaporanKegiatanModel();

            $data = [
                'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
                'program_kegiatan' => $this->request->getPost('program_kegiatan'),
                'target' => $this->request->getPost('target'),
                'keterangan' => $this->request->getPost('keterangan'),
            ];

            $laporanModel->insert($data);

            return redirect()->to(base_url('/laporankegiatan_admin'))->with('success', 'Data berhasil disimpan!');
        } else {
            return redirect()->to(base_url('/laporankegiatan_admin'))->with('error', $validation->getErrors());
        }
    }

    public function edit($id)
    {
        $laporanModel = new LaporanKegiatanModel();
        $laporan = $laporanModel->find($id);

        if (empty($laporan)) {
            return redirect()->to(base_url('/laporankegiatan_admin'))->with('error', 'Data tidak ditemukan!');
        }

        return view('form_editlaporankegiatan', ['laporan' => $laporan]);
    }

    public function update($id)
    {
        $laporanModel = new LaporanKegiatanModel();
        $laporan = $laporanModel->find($id);

        if (empty($laporan)) {
            return redirect()->to(base_url('/laporankegiatan_admin'))->with('error', 'Data tidak ditemukan!');
        }

        // Validasi formulir jika diperlukan
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_mahasiswa' => 'required',
            'program_kegiatan' => 'required',
            'target' => 'required',
            'keterangan' => 'required',
        ]);

        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
                'program_kegiatan' => $this->request->getPost('program_kegiatan'),
                'target' => $this->request->getPost('target'),
                'keterangan' => $this->request->getPost('keterangan'),
            ];

            $laporanModel->update($id, $data);

            return redirect()->to(base_url('/laporankegiatan_admin'))->with('success', 'Data berhasil diperbarui!');
        } else {
            return redirect()->to(base_url('/laporankegiatan_admin/edit/' . $id))->with('error', $validation->getErrors());
        }
    }

    public function delete($id)
    {
        $laporanModel = new LaporanKegiatanModel();
        $laporan = $laporanModel->find($id);

        if (empty($laporan)) {
            return redirect()->to(base_url('/laporankegiatan_admin'))->with('error', 'Data tidak ditemukan!');
        }
        $laporanModel->delete($id);

        return redirect()->to(base_url('/laporankegiatan_admin'))->with('success', 'Data berhasil dihapus!');
    }

}
