
<section class="main-section">
	<div class="content">
		<h1>Sistem Informasi Data Peserta Wisuda</h1>
		<hr>
		@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
		<form action="{{url('/registerPost')}}" method='post'>
			{{csrf_field()}}
			<div class="form-group">
				<lable for="NIM">NIM:</lable>
				<input type="integer" class="form-control" id="NIM" name="NIM">
			</div>
			<div class="form-control">
				<lable for="email">Email:</lable>
				<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-md btn-primary">Submit</button>
				<button type="reset" class="btn btn-md btn-danger">Cancel</button>
			</div>
		</form>
	</div>
</section>
