<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){
        return view('utama.index');
    }

    public function tampil() {
        return view('karyawan.karyawan');
    }
}