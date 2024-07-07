@extends('desain.header')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><i class="fa fa-table"></i> Daftar Interaksi</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="text-center table table-bordered table-striped">
                    <thead class="thead-dark">
        <tr>
            <th>Nama</th>
            <th>Tanggal Interaksi</th>
            <th>Nama Kontak</th>
            <th>Posisi</th>
            <th>Kontak</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($interaksi as $data)
        <tr>
            <td>{{$data->nama}}</td>
            <td>{{$data->tanggal}}</td>
            <td>{{$data->namakontak}}</td>
            <td>{{$data->posisi}}</td>
            <td>{{$data->kontak}}</td>
            <td>
                <a href="{{route('interakiEditHalaman',$data->id)}}" class="btn btn-warning">Edit</a>
                <a onclick="return confirm('Anda yakin?')" href="{{route('hapusInteraksi',$data->id)}}" class="btn btn-danger">Hapus</a>
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