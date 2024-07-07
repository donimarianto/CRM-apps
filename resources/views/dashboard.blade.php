@extends('desain.header')
@section('content')
<div class="container mt-3">
    <div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h1"><b>Dashboard</b></h1>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <b>Pelanggan</b>
                    </div>
                    <div class="card-body text-center">
                        <h1>{{ $hitung1 }}</h1>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <b>Interaksi</b>
                    </div>
                    <div class="card-body text-center">
                        <h1>{{ $hitung2 }}</h1>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-header bg-warning text-white">
                        <b>Transaksi</b>
                    </div>
                    <div class="card-body text-center">
                        <h1>{{ $hitung3 }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection