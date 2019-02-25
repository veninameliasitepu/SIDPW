<?php

namespace App\Http\Controllers;
//use App\Http\Request;
use App\Mahasiswa;
use App\PasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class MahasiswaController extends Controller
{
    public function index(Request $request){
    	if (Session::get('login')){
    		return redirect('home')->with('alert', 'Login Berhasil!');
    	}
    	else {
    		return view('login');
    	}
    }

    public function login(){
    	return redirect('index');
    }

    public function loginPost(Request $request){
    	$NIM = $request->NIM;
    	$password = $request->password;
    	$data = Mahasiswa::where('NIM',$NIM)->first();
    	if($data != null){
    		if(Hash::check($password,$data->password)){
    			session::put('NIM',$data->NIM);
    			session::put('password',$data->password);
    			session::put('login',TRUE);
    			return redirect ('home');
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

    public function register(Request $request){
    	return view('register');
    }

    public function registerPost(Request $request){
    	$this->validate($request,[
    		'NIM' => 'required|min:4|unique:mahasiswa',
    		'email' => 'required|min:4|email|unique:mahasiswa'
    	]);
    	$data = new PasswordRequest();
    	$data->NIM = $request->NIM;
    	$data->email = $request->email;
    	$data->save();
    	return redirect('login')->with('alert','Password akan dikirim ke email Anda');
    }
}
