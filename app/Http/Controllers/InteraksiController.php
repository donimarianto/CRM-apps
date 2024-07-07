<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelangganModel;
use App\Models\InteraksiModel;

class InteraksiController extends Controller
{
    public function halamanInputInteraksi(){
        $data['interaksi']=PelangganModel::all();
        return view('input_interaksi',$data);
    }

    public function saveInteraksi(request $request){
        $data=new InteraksiModel();
        $data->nama=$request->nama;
        $data->tanggal=$request->tanggal;
        $data->namakontak=$request->namakontak;
        $data->posisi=$request->posisi;
        $data->kontak=$request->kontak;
        $data->save();
        return redirect()->route('halamanInputInteraksi');
    }
    public function interaksiData(){
        $data['interaksi']=InteraksiModel::all();
        return view('interaksi',$data);
    }

    public function interakiEditHalaman($id){
        $interaksi=InteraksiModel::findOrFail($id);
        return view('edit_interaksi',compact('interaksi'));
    }

    public function saveEditInteraksi(Request $request,$id){
        $interaksi=InteraksiModel::findOrFail($id);
        $interaksi->nama=$request->nama;
        $interaksi->tanggal=$request->tanggal;
        $interaksi->namakontak=$request->namakontak;
        $interaksi->posisi=$request->posisi;
        $interaksi->kontak=$request->kontak;
        $interaksi->save();

        return redirect()->route('interaksiData');
    }

    public function hapusInteraksi($id){
        $interaksi=InteraksiModel::findOrFail($id);
        $interaksi->delete();
        return redirect()->route('interaksiData');
    }
}
