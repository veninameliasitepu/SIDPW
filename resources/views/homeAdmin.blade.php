@extends('basenoNavbar')
   <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Home Admin</h1>
            <h2>Hallo, {{Session::get('nama')}}. Apakabar?</h2>
        </div>

        <div class="form-group">
            <a href="{{url('list_mahasiswa')}}" class="btn btn-primary btn-lg"> List Mahasiswa </a>

            <a href="{{url('list_dosen')}}" class="btn btn-primary btn-lg"> List Dosen </a>

            <hr>

            <a href="{{url('password_request')}}" class="btn btn-primary btn-lg"> Password Request </a>

            <hr>

            <a href="{{url('unduh_data')}}" class="btn btn-primary btn-lg">Unduh Data Mahasiswa</a>
        </div>
        <hr>
        <div class="form-group">
            <a href="/logout" class="btn btn-md btn-warning">Logout</a>
        </div>
        <!-- /.content -->
    </section>