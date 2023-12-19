<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelolaJadwalModel;


class KelolaJadwalController extends BaseController


{

    protected $kelolaJadwalModel;
    public function __construct()
    {
        $this->kelolaJadwalModel = new KelolaJadwalModel();
    }

    public function index()
    {
        return view('kelola_jadwal');
    }

    public function list_kegiatan()
    {
        return view('list_kegiatan');
    }

    public function store()
    {
        // Get form data
        $hari = $this->request->getVar('hari');
        $tanggal = $this->request->getVar('tanggal');
        $kegiatan = $this->request->getVar('kegiatan');

        // Save data to the database
        $this->kelolaJadwalModel->insert([
            'hari' => $hari,
            'tanggal' => $tanggal,
            'kegiatan' => $kegiatan,
        ]);

        return redirect()->to('/list_kegiatan')->with('success', 'Data berhasil disimpan');
    }

    public function create(){

        return view('kelolajadwal/create');
    }

    // KelolaJadwalController.php

    public function edit($id)
    {
        // This function will direct to the form for editing existing data
        $data['activity'] = $this->kelolaJadwalModel->find($id);

        return view('formEditKelolaJadwal', $data);
    }

    public function update($id)
    {
        // This function will handle the update of data in the database

        // Validate input data as needed...

        $updatedData = [
            'hari' => $this->request->getVar('hari'),
            'tanggal' => $this->request->getVar('tanggal'),
            'kegiatan' => $this->request->getVar('kegiatan'),
        ];

        $this->kelolaJadwalModel->update($id, $updatedData);

        return redirect()->to('/list_kegiatan')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        // This function will handle the deletion of data in the database

        $this->kelolaJadwalModel->delete($id);

        return redirect()->to('/list_kegiatan')->with('success', 'Data berhasil dihapus');
    }

}
