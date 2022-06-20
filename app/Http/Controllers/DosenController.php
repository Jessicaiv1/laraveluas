<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
class DosenController extends Controller
{
    public function dsn(){
    $dosen = Dosen::paginate(10);   // menampilkan data hanya 5 data saja
    return view('dosen',['dosen'=> $dosen]);
}
public function cari (Request $request){
    $cari = $request -> cari;
    $dosen = dosen::where('nama','like','%'.$cari.'%')->paginate();
    return view ('dosen',['dosen' => $dosen]);
}
public function formulirdosen()
{
    return view('formulirdosen');
}
}
