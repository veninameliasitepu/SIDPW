<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/home', 'MahasiswaController@index');
Route::get('/index', 'MahasiswaController@index');
Route::get('/login', 'MahasiswaController@login');
Route::post('/loginPost', 'MahasiswaController@loginPost');
Route::get('/register', 'MahasiswaController@register');
Route::post('/registerPost', 'MahasiswaController@registerPost');
Route::get('/logout', 'MahasiswaController@logout');
Route::get('/loginAdmin', 'AdminController@loginAdmin');
Route::post('/loginPostAdmin', 'AdminController@loginPostAdmin');
Route::get('/loginDosen', 'DosenController@login');
Route::post('/loginPostDosen', 'DosenController@loginPost');
Route::get('/homeAdmin', 'AdminController@index');

Route::get('list_mahasiswa', function(){
	//$data['NIM'] = ['24010315120066', '24010315120065', '24010315120045'];
	//$data['nama'] = ['Penina', 'Ezra', 'Rema'];
	$data = [['Penina','24010315120066'],['Ezra','24010315120065'],['Rema','24010315120045']];

	return view('list_mahasiswa')->with('dataMahasiswa',$data);
});