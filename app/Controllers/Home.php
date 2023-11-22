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
            return view('Tampilan');
        }else{
            return view('login');
        }
    }

    public function register()
    {
        return view('register');
    }

}
