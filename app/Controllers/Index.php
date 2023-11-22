<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return view('Tampilan');
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

    public function pengumuman()
    {
        return view('pengumuman');
    }

    public function form_pengumuman()
    {
        return view('form_pengumuman');
    }
}
