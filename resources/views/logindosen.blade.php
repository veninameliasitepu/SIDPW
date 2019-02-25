<section class="main-section">
	<div class="content">
		<h1>Login Dosen Sistem Informasi Data Peserta Wisuda</h1>
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
		<h4>Login Dosen</h4>
		<form action={{url('/loginPost')}} method='post'>
			{{csrf_field()}}
			<div class="form-group">
				<lable for="NIP">NIP:</lable>
				<input type="integer" class="form-control" id="NIP" name="NIP">
			</div>
			<div class="form-control">
				<lable for="password">Password:</lable>
				<input type="password" class="form-control" id="password" name="password">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-md btn-primary">Login</button>
			</div>
		</form>
	</div>
</section>
