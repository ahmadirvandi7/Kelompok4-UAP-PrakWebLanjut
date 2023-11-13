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
    public function datamhs_admin()
    {
        return view('datamhs_admin');
    }
    
    public function laporankegiatan_admin()
    {
        return view('laporankegiatan_admin');
    }
    public function laporanpelaksanaan_admin()
    {
        return view('laporanpelaksanaan_admin');
    }
    public function datadosenpembimbing_admin()
    {
        return view('datadosenpembimbing_admin');
    }
    public function home_admin()
    {
        return view('home_admin');
    }
    public function formlaporankegiatan()
    {
        return view('formlaporankegiatan');
    }
}
