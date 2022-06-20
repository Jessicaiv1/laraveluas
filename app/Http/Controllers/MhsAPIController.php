<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
class MhsAPIController extends Controller
{
    public function all(){
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil',
            'data' => $mahasiswa
        ],200);
    }
    public function create(Request $request)
        {
            $mahasiswa = Mahasiswa::create([
                'nim' => $request -> nim,
                'nama' => $request -> nama,
                'gender' => $request -> gender,
                'jurusan' => $request -> jurusan,
                'bidang_minat' => $request -> bidang_minat
            ]);
            if ($mahasiswa)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil Disimpan',
                ],200);
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal Disimpan',
                ],401);
            }

        }
        public function update ($id, Request $request){
            $mahasiswa = Mahasiswa::whereId($id)->update([
                'nim' => $request -> nim,
                'nama' => $request -> nama,
                'gender' => $request -> gender,
                'jurusan' => $request -> jurusan,
                'bidang_minat' => $request -> bidang_minat
            ]);
            if($mahasiswa)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Data Mahasiswa Berhasil diubah',
                ],200);
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => 'Data Mahasiswa Gagal diubah',
                ],401);
            }
        }
        public function delete($id){
            $mahasiswa = Mahasiswa::find($id); //dilakukan pencarian data dlu
            $mahasiswa -> delete();

            if($mahasiswa)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Data Mahasiswa Berhasil dihapus',
                ],200);
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => 'Data Mahasiswa Gagal dihapus',
                ],401);
            }
        }
    }