<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Dosen;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DosenController extends Controller
{
    public function login(){
    	if(Session::get('loginDosen')){
    		return redirect('home')->with('alert','Login Berhasil!');
    	}
    	else{
    		return view('loginDosen');
    	}
    }

    public function loginPost(Request $request){
    	$NIP = $request->NIP;
    	$password = $request->password;
    	$data = Dosen::where('NIP', $NIP)->first();
    	if(data != null){
    		if(Hash::check($password,$data->password)){
    			Session::put('NIM',$data->NIM);
    			Session::put('password',$data->password);
    			Session::put('loginDosen', TRUE);
    			return redirect('home');
    		}
    		else{
    			return redirect('login')->with('alert','NIM atau password Anda Salah'.Hash::check($password,$data->password));
    		}
    	}
    	else {
    		return redirect('login')->with('alert','NIM atau password Anda salah');
    	}
    }

    public function logout(){
    	Session::flush();
    	return redirect('login')->with('alert','Logout berhasil!');
    }
}
