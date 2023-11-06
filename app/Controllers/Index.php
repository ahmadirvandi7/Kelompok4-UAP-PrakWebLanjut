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
    public function kelompok(){
        return view('kelompok');
    }
}
