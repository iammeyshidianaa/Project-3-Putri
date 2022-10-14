@extends('layout.siswa')

@section('content')
<div class="container">
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6"></div>
                </div>
            </div>
    <div class="row">

        <div class="col-md-10 offset-1">
            <div class="panel panel-default">
                <h2 class="text-primary text-center">Ubah Profile</h2>
<br>
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"></h4>
                    <p class="card-description"></p>
                    <div class="card-body">
                        <form action="/updatesiswa" method="POST" enctype="multipart/form-data">
                                @csrf
                        <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="namalengkap" id="exampleInputUsername2" placeholder="{{ Auth::user()->name }}">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" name="foto" class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="foto" id="exampleInputConfirmPassword2" placeholder="">
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <a href="/profile" class="btn btn-light">Kembali</a>
                    </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
