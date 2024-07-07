@extends('desain.header')
@section('content')
<div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0"><i class="fa fa-user-plus"></i> Form Edit Pelanggan</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('savePelanggan') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama"><i class="fa fa-user"></i> Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="alamat"><i class="fa fa-home"></i> Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telepon"><i class="fa fa-phone"></i> Telepon</label>
                            <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Masukkan Telepon" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tanggal"><i class="fa fa-calendar"></i> Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Simpan</button>
                </form>
                @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            alert('{{ session("success") }}');
                        });
                    </script>
                @endif
            </div>
        </div>
    </div>
@endsection