@extends('master.layouts')

@section('title', 'Data Karyawan')

@section('content')
<div class="col-md-12 col-sm-12">
    <a href="{{ route('tambah') }}" class="btn btn-primary btn-sm mb-5"><i class="fa fa-user-plus"> Tambah Data</i></a>
    @if (session('create'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('create') }}
    </div>
    @elseif(session('update'))
    <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('update') }}
    </div>
    @elseif(session('hapus'))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('hapus') }}
    </div>
    @endif
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jabatan</th>
                <th scope="col">OPSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($data as $d)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ $d->jabatan }}</td>
                <td>
                    <a href="/karyawan/edit/{{ $d->id }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>
                        Edit</a> 
                    <a href="/karyawan/hapus/{{ $d->id }}" onclick="return confirm('Yakin data {{ $d->nama }} ingin di Hapus ? ')" class="btn btn-danger btn-sm"><i class="fa fa-minus-circle"></i> Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    window.setTimeout(function() { $(".alert-success").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); }); }, 6000);
    window.setTimeout(function() { $(".alert-warning").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); }); }, 6000);
    window.setTimeout(function() { $(".alert-danger").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); }); }, 6000);
</script>
@endsection