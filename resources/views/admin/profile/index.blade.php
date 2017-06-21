@extends('admin.layouts.main');


@section('content')
  <!-- Page -->
  <div class="page animsition">
    <div class="page-content container-fluid">
      <div class="row">
        <div class="col-md-3">
          <!-- Page Widget -->
          <div class="widget widget-shadow text-center">
            <div class="widget-content padding-10">
              <div class="widget-header-content">
                <a class="avatar avatar-lg" href="javascript:void(0)">
                  <img src="https://randomuser.me/api/portraits/men/60.jpg" alt="...">
                </a>
                <h4 class="profile-user">Terrance arnold</h4>
                <p class="profile-job">Art director</p>
              </div>
            </div>
          </div>
          <!-- End Page Widget -->
        </div>

        <div class="col-md-9">
          <!-- Panel -->
          <div class="panel">
            <div class="panel-body nav-tabs-animate nav-tabs-horizontal">
              <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation"><a data-toggle="tab" href="#activities" aria-controls="activities"
                  role="tab">Profil <span class="badge badge-danger">5</span></a></li>
                <li role="presentation"><a data-toggle="tab" href="#profile" aria-controls="profile" role="tab">Kata Sandi</a></li>
              </ul>

              <div class="tab-content">
                <div class="tab-pane active animation-slide-left" id="activities" role="tabpanel">
                  <!-- Example Horizontal Form -->
                  <div class="example-wrap margin-top-10">
                    <h4 class="example-title">Registration Info</h4>
                    <div class="example">
                      <form class="form-horizontal">
                        <div class="form-group form-material">
                          <label class="col-sm-3 control-label">Reg. Date/Time : </label>
                          <div class="col-sm-9">
                            <p class="form-control-static">REGISTER DATE</p>
                          </div>
                        </div>
                      </form>
                    </div>


                    <h4 class="example-title">Contact Info</h4>
                    <div class="example">
                      <form class="form-horizontal">
                        <div class="form-group form-material">
                          <label class="col-sm-3 control-label">Nama Lengkap : </label>
                          <div class="col-sm-9">
                            <p class="form-control-static">REGISTER DATE</p>
                          </div>
                        </div>
                        <div class="form-group form-material">
                          <label class="col-sm-3 control-label">Email : </label>
                          <div class="col-sm-9">
                            <p class="form-control-static">REGISTER DATE</p>
                          </div>
                        </div>
                        <div class="form-group form-material">
                          <label class="col-sm-3 control-label">No. Telp : </label>
                          <div class="col-sm-9">
                            <p class="form-control-static">REGISTER DATE</p>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- End Example Horizontal Form -->
                </div>

                <div class="tab-pane animation-slide-left margin-bottom-10" id="profile" role="tabpanel">
                  <!-- Example Horizontal Form -->
                  <div class="example-wrap margin-top-10">
                    <h4 class="example-title">Ganti kata sandi</h4>
                    <div class="example">
                      <form class="form-horizontal">
                        <div class="form-group form-material">
                          <label class="col-sm-3 control-label">Kata sandi lama : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="old_password" value="">
                          </div>
                        </div>
                        <div class="form-group form-material">
                          <label class="col-sm-3 control-label">Kata sandi baru : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="new_password" value="">
                          </div>
                        </div>
                        <div class="form-group form-material">
                          <label class="col-sm-3 control-label">Konfirmasi kata sandi baru : </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="new_password_konfirmation" value="">
                          </div>
                        </div>
                        <div class="form-group form-material">
                          <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary" name="button">Simpan</button>
                          </div>
                        </div>
                      </form>
                    </div>

                  </div>
                  <!-- End Example Horizontal Form -->
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->

@endsection


@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/profile.min.css') }}">
@endsection
