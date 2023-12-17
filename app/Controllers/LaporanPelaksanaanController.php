<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LaporanPelaksanaanModel;

class LaporanPelaksanaanController extends BaseController
{
    protected $laporanPelaksanaanModel;

    public function __construct()
    {
        $this->laporanPelaksanaanModel = new LaporanPelaksanaanModel();
    }

    public function index()
    {
        $data = [
            'laporanPelaksanaan' => $this->laporanPelaksanaanModel->findAll(),
        ];

        return view('laporanpelaksanaan_admin', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Laporan Pelaksanaan',
        ];

        return view('formlaporanpelaksanaan', $data);
    }

    public function store()
    {
        $validationRules = [
            'nama_mahasiswa' => 'required',
            'tingkat_keberhasilan' => 'required|integer',
            'catatan' => 'required',
            'keterangan' => 'required',
        ];

        if ($this->validate($validationRules)) {
            $data = [
                'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
                'tingkat_keberhasilan' => $this->request->getPost('tingkat_keberhasilan'),
                'catatan' => $this->request->getPost('catatan'),
                'keterangan' => $this->request->getPost('keterangan'),
            ];

            $this->laporanPelaksanaanModel->insert($data);

            return redirect()->to(base_url('/laporanpelaksanaan_admin'))->with('success', 'Data berhasil disimpan!');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function edit($id)
    {
        $laporan = $this->laporanPelaksanaanModel->find($id);

        if (empty($laporan)) {
            return redirect()->to(base_url('/laporanpelaksanaan_admin'))->with('error', 'Data tidak ditemukan!');
        }

        $data = [
            'title' => 'Edit Laporan Pelaksanaan',
            'laporan' => $laporan,
        ];

        return view('form_editlaporanpelaksanaan', $data);
    }

    public function update($id)
    {
        $laporan = $this->laporanPelaksanaanModel->find($id);

        if (empty($laporan)) {
            return redirect()->to(base_url('/laporanpelaksanaan_admin'))->with('error', 'Data tidak ditemukan!');
        }

        $validationRules = [
            // validasi kalo ada
        ];

        if ($this->validate($validationRules)) {
            $data = [
                //
            ];

            $this->laporanPelaksanaanModel->update($id, $data);

            return redirect()->to(base_url('/laporanpelaksanaan_admin'))->with('success', 'Data berhasil diperbarui!');
        } else {
            return redirect()->to(base_url('/laporanpelaksanaan_admin/edit/' . $id))->with('error', $this->validator->getErrors());
        }
    }

    public function delete($id)
    {
        $laporan = $this->laporanPelaksanaanModel->find($id);

        if (empty($laporan)) {
            return redirect()->to(base_url('/laporanpelaksanaan_admin'))->with('error', 'Data tidak ditemukan!');
        }

        $this->laporanPelaksanaanModel->delete($id);

        return redirect()->to(base_url('/laporanpelaksanaan_admin'))->with('success', 'Data berhasil dihapus!');
    }
}
