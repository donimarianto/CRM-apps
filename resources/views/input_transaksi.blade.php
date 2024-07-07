@extends('desain.header')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0"><i class="fa fa-user-plus"></i> Form Input Transaksi</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('saveTransaksi') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama"><i class="fa fa-user"></i> Nama</label>
                        <select class="form-control" name="nama" id="nama">
                            <option value="">--pilih--</option>
                            @foreach($pelanggan as $tampilkan)
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
                        <label for="barang"><i class="fa fa-gift"></i> Barang</label>
                        <input type="text" class="form-control" name="barang" id="barang" value="Batik Jambi" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="jumlah"><i class="fa fa-sort-numeric-up"></i> Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" id="jumlah" oninput="hitungNominal()" required>
                        <div id="jumlahError" class="text-danger" style="display: none;">Minimal jumlah adalah 2</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="harga"><i class="fa fa-money"></i> Harga</label>
                        <input type="number" class="form-control" name="harga" id="harga" readonly>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary" id="simpanBtn" disabled><i class="fa fa-save"></i> Simpan</button>
            </form>
            <script>
                function hitungNominal() {
                    var jumlah = parseFloat(document.getElementById('jumlah').value);
                    var harga = 50000;
                    var total = jumlah * harga;
                    document.getElementById('harga').value = total >= 0 ? total : '';

                    var jumlahError = document.getElementById('jumlahError');
                    var simpanBtn = document.getElementById('simpanBtn');
                    if (jumlah < 2) {
                        jumlahError.style.display = 'block';
                        simpanBtn.disabled = true;
                    } else {
                        jumlahError.style.display = 'none';
                        simpanBtn.disabled = false;
                    }
                }
            </script>
        </div>
    </div>
</div>
@endsection
