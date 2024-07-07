<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelangganModel;
use App\Models\TransaksiModel;
use App\Models\InteraksiModel;
use PhpParser\Builder\Function_;

class PelangganController extends Controller
{
    // function untuk memanggil halaman dashboard
    public function Home(){
        $hitung1= PelangganModel::count();
        $hitung2= InteraksiModel::count();
        $hitung3= TransaksiModel::count();
        return view('dashboard',compact('hitung1','hitung2','hitung3'));
}

    // function untuk memanggil halaman input_pelanggan
    public function HalamanSimpanPelanggan(){
        return view('input_pelanggan');
    }

    // function untuk melakukan simpan data kedalam tb_pelanggan
    public function savePelanggan(request $request){
        $data=new PelangganModel();
        $data->nama=$request->nama;
        $data->email=$request->email;
        $data->alamat=$request->alamat;
        $data->telepon=$request->telepon;
        $data->tanggal=$request->tanggal;
        $data->save();
        return redirect()->route('tampilkanPelanggan')->with('success', 'Pelanggan berhasil ditambahkan.');
    }

    // untuk menampilkan data tb_pelanggan yang ada dalam view_pelanggan
    public function tampilkanPelanggan(){
        $data ['pelanggan']= PelangganModel::all();
        return view('view_pelanggan',$data);
    }

    // untuk menampilkan halaman edit
    public function editPelanggan($id){
        $pelanggan = PelangganModel::findOrFail($id);
        return view('editPelanggan',compact('pelanggan'));
    }

    // ini function yang memproses aksi untuk simpan hasil edit
    public function editPelangganSimpan(Request $request, $id){
        $pelanggan= PelangganModel::findOrFail($id);
        $pelanggan->nama=$request->nama;
        $pelanggan->email=$request->email;
        $pelanggan->alamat=$request->alamat;
        $pelanggan->telepon=$request->telepon;
        $pelanggan->tanggal=$request->tanggal;
        $pelanggan->save();
        return redirect()->route('tampilkanPelanggan')->with('success', 'Pelanggan berhasil diubah.');
    }

    // ini untuk menghapus data pelanggan
    public function hapusPelanggan($id){
        $pelanggan = PelangganModel::findOrFail($id);
        $pelanggan -> delete();
        return redirect()->route('tampilkanPelanggan')->with('success', 'Pelanggan berhasil diubah.');
    }

}
