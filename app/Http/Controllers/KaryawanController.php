<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('utama.index');
    }

    public function tampil()
    {
        $data = Karyawan::all();
        return view('karyawan.karyawan', compact('data'));
    }

    public function create()
    {
        return view('create.createKaryawan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'    => 'required',
            'alamat'  => 'required',
            'jabatan' => 'required'
        ]);

        $karyawan = new Karyawan;
        $karyawan->nama = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->jabatan = $request->jabatan;

        $karyawan->save();

        return redirect('karyawan')->with('create', 'Data Berhasil di Tambahkan');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);

        return view('update.updateKaryawan', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::find($id);

        $karyawan->nama = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->jabatan = $request->jabatan;

        $karyawan->save();

        return redirect('karyawan')->with('update', 'Data Berhasil di Ubah');
    }

    public function hapus($id)
    {
        $data = Karyawan::find($id);
        $data->delete();
        return redirect('karyawan')->with('hapus', 'Data Berhasil di Hapus');
    }
}
