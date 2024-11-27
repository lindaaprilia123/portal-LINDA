<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home ()
    {
        return view('welcome');
    }

    public function data ()
    {
        return view('pendataan');
    }

    public function datanama($nama)
    {
        return view('datanama', ["nama" => $nama]);
    }
}