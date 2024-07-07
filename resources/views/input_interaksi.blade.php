@extends('desain.header')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0"><i class="fa fa-user-plus"></i> Form Simpan Interaksi</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('saveInteraksi') }}" method="post">
                @csrf 
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama"><i class="fa fa-user"></i> Nama</label>
                    <select class="form-control" name="nama" id="nama">
                        <option value="">--pilih--</option>
                        @foreach($interaksi as $tampilkan)
                        <option value="{{ $tampilkan->nama }}">{{ $tampilkan->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggal"><i class="fa fa-calendar"></i> Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="namakontak"><i class="fa fa-address-book"></i> Nama Kontak</label>
                    <input type="text" class="form-control" name="namakontak" id="namakontak" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="posisi"><i class="fa fa-briefcase"></i> Posisi</label>
                    <input type="text" class="form-control" name="posisi" id="posisi" required>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kontak"><i class="fa fa-phone"></i> Kontak</label>
                    <input type="text" class="form-control" name="kontak" id="kontak" required>
                </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
