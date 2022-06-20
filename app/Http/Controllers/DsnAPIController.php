<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
class DsnAPIController extends Controller
{
    public function all(){
        $dosen = Dosen::all();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil',
            'data' => $dosen
        ],200);
    }
    public function create(Request $request)
        {
            $dosen = Dosen::create([
                'nidn' => $request -> NIDN,
                'nama' => $request -> nama,
            
            ]);
            if ($dosen)
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
            $dosen = Dosen::whereId($id)->update([
                'nidn' => $request -> NIDN,
                'nama' => $request -> nama,
            
            ]);
            if($dosen)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Data dosen Berhasil diubah',
                ],200);
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => 'Data dosen Gagal diubah',
                ],401);
            }
        }
        public function delete($id){
            $dosen = Dosen::find($id); //dilakukan pencarian data dlu
            $dosen -> delete();

            if($dosen)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Data dosen Berhasil dihapus',
                ],200);
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => 'Data dosen Gagal dihapus',
                ],401);
            }
        }
    }