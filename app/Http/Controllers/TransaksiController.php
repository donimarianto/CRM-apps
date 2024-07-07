<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiModel;
use App\Models\PelangganModel;

class TransaksiController extends Controller
{
    public function halamanInputTransaksi(){
        $data['pelanggan']=PelangganModel::all();
        return view('input_transaksi',$data);
    }

    public function saveTransaksi(Request $request){
        $data=new TransaksiModel();
        $data->nama=$request->nama;
        $data->tanggal=$request->tanggal;
        $data->barang=$request->barang;
        $data->jumlah=$request->jumlah;
        $data->harga=$request->harga;
        $data->save();
        return redirect()->route('view');
    }

    public function view(){
        $data['pembayaran']=TransaksiModel::all();
        return view('transaksi',$data);
    }

    public function hapusTransaksi($id){
        $transaksi=TransaksiModel::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('view');
    }
}
