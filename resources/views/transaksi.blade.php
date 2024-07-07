@extends('desain.header')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><i class="fa fa-table"></i> Daftar Transaksi</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="text-center table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal Transaksi</th>
                            <th>Barang</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pembayaran as $tampilkan)
                        <tr>
                            <td>{{$tampilkan->nama}}</td>
                            <td>{{$tampilkan->tanggal}}</td>
                            <td>{{$tampilkan->barang}}</td>
                            <td>{{$tampilkan->jumlah}}</td>
                            <td>Rp. {{$tampilkan->Harga}}</td>
                            <td>
                                <a onclick="return confirm('Anda yakin?')" href="{{route('hapusTransaksi',$tampilkan->id)}}" class="btn btn-danger">Hapus</a>
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
