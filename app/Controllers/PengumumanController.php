<?php

namespace App\Controllers;

use App\Models\PengumumanModel;

class PengumumanController extends BaseController
{
    protected $pengumumanModel;
    public function __construct()
    {
        $this->pengumumanModel = new PengumumanModel();
    }

    public function index()
    {
        $data['pengumuman'] = $this->pengumumanModel->getPengumuman();

        return view('pengumuman', $data);
    }

}
