<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
class MhsController extends Controller
{
    public function mhs(){
    $mahasiswa = Mahasiswa::paginate(10);   // menampilkan data hanya 10 data saja
    return view('mahasiswa',['mahasiswa'=> $mahasiswa]);
}
public function cari (Request $request){
    $cari = $request -> cari;
    $mahasiswa = mahasiswa::where('nama','like','%'.$cari.'%')->paginate();
    return view ('mahasiswa',['mahasiswa' => $mahasiswa]);
}
public function formulirmhs()
{
    return view('formulirmhs');
}

public function simpanmhs(Request $request){;
    Mahasiswa::create([
        'nim'=>$request->nim,
        'nama'=>$request->nama,
        'gender'=>$request->gender,
        'jurusan'=>$request->jurusan,
        'bidang_minat'=>$request->bidang_minat,
    ]);
    return redirect ('/mahasiswa')-> with('alert','Anda berhasil menambahkan data mahasiswa!');
}
    public function editmahasiswa($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('editmahasiswa',['mahasiswa' => $mahasiswa],['cek' => 'mahasiswa']);
    }
    public function updatemhs($id, Request $request){
        $bidang_minat = implode(',', $request -> bidang_minat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> nim = $request -> nim;
        $mahasiswa -> nama = $request -> nama;
        $mahasiswa -> gender = $request -> gender;
        $mahasiswa -> jurusan = $request -> jurusan;
        $mahasiswa -> bidang_minat = $bidang_minat;
        
        $mahasiswa->save();
        return redirect ('/mahasiswa')-> with('alert','Anda berhasil mengupdate data mahasiswa!');

    }

    public function deletemhs($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> delete();
        return redirect ('/mahasiswa')-> with('alert','Anda berhasil menghapus data mahasiswa!');
    }
}