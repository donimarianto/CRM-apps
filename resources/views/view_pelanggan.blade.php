@extends('desain.header')
@section('content')
<div class="container mt-5">
<div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><i class="fa fa-table"></i> Daftar Pelanggan</h4>
        </div>
        <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Tanggal Daftar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menggunakan perulangan foreach untuk memanggil data -->
                @foreach($pelanggan as $tampilkan)
                <tr>
                    <td>{{$tampilkan->nama}}</td>
                    <td>{{$tampilkan->email}}</td>
                    <td>{{$tampilkan->telepon}}</td>
                    <td>{{$tampilkan->alamat}}</td>
                    <td>{{$tampilkan->tanggal}}</td>
                    <td class="text-center">
                        <a href="{{ route('editPelanggan', $tampilkan->id) }}" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <a onclick="return confirm('Anda yakin?')" href="{{route('hapusPelanggan',$tampilkan->id)}}" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
@endsection
