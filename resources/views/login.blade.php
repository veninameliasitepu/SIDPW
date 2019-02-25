@extends('basenoNavbar')
<section class="main-section">
	<div class="content">
		<h1>Sistem Informasi Data Peserta Wisuda</h1>
		<hr>
		@if(\Session::has('alert'))
		<div class="alert alert-danger">
			<div>{{Session::get('alert')}}</div>
		</div>
		@endif
		@if(\Session::has('alert-succes'))
		<div class="alert alert-succes">
			<div>{{Session::get('alert-succes')}}</div>
		</div>
		@endif
		<h4>Login Mahasiswa</h4>
		<form action={{url('/loginPost')}} method='post'>
			{{csrf_field()}}
			<div class="form-group">
				<lable for="NIM">NIM:</lable>
				<input type="integer" class="form-control" id="NIM" name="NIM">
			</div>
			<div class="form-control">
				<lable for="password">Password:</lable>
				<input type="password" class="form-control" id="password" name="password">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-md btn-primary">Login</button>
				<a href ="{{url('register')}}" class="btn btn-md btn-warning" >Register</a>
			</div>
			<hr>
			<div class="form-group">
				<a href ="{{url('loginAdmin')}}" class="btn btn-md btn-warning" >Login Admin</a>
				<a href ="{{url('loginDosen')}}" class="btn btn-md btn-warning" >Login Dosen</a>
			</div>
		</form>
	</div>
</section>
