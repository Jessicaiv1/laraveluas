<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function user()
    {
        $user = User::paginate(5);
        return view('user',['user'=> $user]);
    }

    public function cari (Request $request){
        $cari = $request -> cari;
        $user = user::where('nama_user','like','%'.$cari.'%')->paginate();
        return view ('user',['user' => $user]);
    }

    public function formuliruser()
    {
        return view('formuliruser');
    }

    public function simpanuser(Request $request){;
        User::create([
            'nik_user'=>$request->nik_user,
            'nama_user'=>$request->nama_user,
            'no_hp'=>$request->no_hp,
            'password'=>bcrypt($request->password)
        ]);
        return redirect ('/user')-> with('alert','Anda berhasil menambahkan data user!');
    }
    public function deleteuser($id)
    {
        $user = User::find($id);
        $user -> delete();
        return redirect ('/user')-> with('alert','Anda berhasil menghapus data user!');
    }

    public function login()
    {
        return view('login');
    }
    public function ceklogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'no_hp' => 'required',
            'password' => 'required',
        ]);
 
        // // Retrieve the validated input...
        $validated = $validator->validated();
        //  dd($validated);
        if(!Auth::attempt($validated)){
            return redirect('/login');
        }
        else{
            return redirect('/dashboard');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect ('/')->with('message','logout');
    }
    public function home()
    {
        return view ('/dashboard');
    }
}
