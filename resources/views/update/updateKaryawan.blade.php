@extends('master.layouts')

@section('title', 'Update Data Karyawan')

@section('content')

<div class="col-md-12">
    <div class="card p-4">
        <form action="/karyawan/update/{{ $karyawan->id }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ $karyawan->nama }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" name="alamat" class="form-control">{{ $karyawan->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{ $karyawan->jabatan }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
@endsection