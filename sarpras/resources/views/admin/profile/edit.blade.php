@extends('layout.admin')

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
<form action="/insertadmin" method="POST" enctype="multipart/form-data">
   @csrf
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"></h4>
                    <p class="card-description"></p>
                    <form class="forms-sample">
                        <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="namalengkap2" id="exampleInputUsername2" placeholder="{{ Auth::user()->name }}">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" name="foto2" class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                        <img class="img mb-3" src="{{ asset('img/') }}" alt="" style="width: 60px;">
                        <input type="file" name="foto2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <a href="/profileadmin" class="btn btn-light">Kembali</a>
                    </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
