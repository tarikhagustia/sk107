@extends('admin.layouts.main')

@section('css')

@endsection

@section('content')
<!-- Page -->
<div class="page">
	<div class="page-header">
		<h1 class="page-title">Atur pengguna</h1>
	</div>
	<div class="page-content container-fluid">
    <div class="row">
      <div class="col-sm-4">
        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title">
              Buat user
            </div>
          </div>
          <div class="panel-body">
            <form class="" action="index.html" method="post">
                <div class="form-group form-material">
                  <label for="name">Nama</label>
                  <input type="text" name="name" value="" class="form-control" placeholder="Nama">
                </div>

                <div class="form-group form-material">
                  <label for="email">E-mail</label>
                  <input type="email" name="email" value="" class="form-control" placeholder="E-mail">
                </div>

                <div class="form-group form-material">
                  <label for="email">Kata sandi</label>
                  <input type="password" name="password" value="" class="form-control" placeholder="">
                </div>

                <div class="form-group form-material">
                  <label for="email">Konfirmasi kata sandi</label>
                  <input type="password" name="confirmation_assword" value="" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-primary" name="button">Simpan</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
	</div>
</div>
<!-- End Page -->
@endsection
