<?php
namespace App\Http\Controllers;
use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class User extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Silahkan Masuk Terlebih Dahulu');
        }
        else{
            return view('user');
        }
    }
    public function login(){
        return view('login');
    }
    
	public function login2(){
		return view('login2');
	}


    public function loginPost(Request $request){
        $email = $request->email;
        $password = $request->password;
        $data = ModelUser::where('email',$email)->first();
        if($data != null){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('home_user');
            }
            else{
                return redirect('login')->with('alert','Password atau Email anda salah'.Hash::check($password,$data->password));
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email anda salah');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Logout berhasil');
    }
    public function register(Request $request){
        return view('register');
    }
    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);
        $data =  new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Registrasi berhasil');
    }
}