<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

	public function index(Request $request){
		if(Session::get('loginAdmin')){
			return redirect('homeAdmin')->with('alert', 'Login Berharil!');
		}
		else{
			return view('loginAdmin');
		}
	}

    public function loginAdmin(){
    	if (Session::get('loginAdmin')){
    		return view('homeAdmin')->with('alert', 'Login Berhasil!');
    	}
    	else {
    		return view('loginAdmin');
    	}
    }

    public function loginPostAdmin(Request $request){
    	$username = $request->username;
    	$password = $request->password;
    	$data = Admin::where('username',$username)->first();
    	if($data != null){
    		if(Hash::check($password,$data->password)){
    			session::put('username',$data->username);
    			session::put('nama',$data->nama);
    			session::put('password',$data->password);
    			session::put('loginAdmin',TRUE);
    			return view ('homeAdmin');
    		}
    		else{
    			return redirect('loginAdmin')->with('alert','username atau password Anda Salah'.Hash::check($password,$data->password));
    		}
    	}
    	else {
    		return redirect('loginAdmin')->with('alert','username atau password Anda salah');
    	}
    }

    public function logout(){
    	Session::flush();
    	return redirect('loginAdmin')->with('alert','Logout berhasil!');
    }

}
