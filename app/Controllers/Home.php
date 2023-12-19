<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return dd("index");
    }
    public function login()
    {
        if (logged_in()) {
            if (in_groups('admin')) {
                return redirect()->to(base_url('/datamhs_admin'));
            }else if(in_groups('dosen')){
                return redirect()->to(base_url('/tampilan'));
            }else if(in_groups('mahasiswa')){
            return redirect()->to(base_url('/mahasiswa'));
            };
        }else{
            return view('login');
        }
    }

    public function register()
    {
        return view('register');
    }

}
