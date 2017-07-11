@extends('admin.layouts.main');


@section('content')
  <!-- Page -->
  <div class="page">
    <div class="page-content container-fluid">
      <div class="row">
        <div class="col-md-3">
          <!-- Page Widget -->
          <div class="widget widget-shadow text-center">
            <div class="widget-content padding-10">
              <div class="widget-header-content">
                <a class="avatar avatar-lg" href="javascript:void(0)">
                  @if (Auth::user()->sex == 'male')
                    <img src="{{asset('img/user-man.png')}}" alt="{{Auth::user()->name}}">
                  @else
                    <img src="{{asset('img/user-girl.png')}}" alt="{{Auth::user()->name}}">
                  @endif
                </a>
                <h4 class="profile-user">{{ Auth::user()->name }}</h4>
                <p class="profile-job">@if(Auth::user()->role == 'admin') Administrator @else Nasabah @endif</p>
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
                  role="tab">Profil</a></li>
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
                            <p class="form-control-static">{{ Carbon::parse(Auth::user()->created_at)->formatLocalized('%A %d %B %Y') }}</p>
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
                            <p class="form-control-static">{{Auth::user()->name}}</p>
                          </div>
                        </div>
                        <div class="form-group form-material">
                          <label class="col-sm-3 control-label">Email : </label>
                          <div class="col-sm-9">
                            <p class="form-control-static">{{Auth::user()->email}}</p>
                          </div>
                        </div>
                        <div class="form-group form-material">
                          <label class="col-sm-3 control-label">No. Telp : </label>
                          <div class="col-sm-9">
                            <p class="form-control-static">{{Auth::user()->phone_number}}</p>
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
                      <form class="form-horizontal" method="post" action="{{route('profile.password.change')}}">
                        {{ csrf_field() }}
                        <div class="form-group form-material @if($errors->has('old_password')) has-error @endif">
                          <label class="col-sm-3 control-label">Kata sandi lama : </label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" name="old_password" value="">
                            <p class="help-block">
                               {{ $errors->first('old_password') }}
                            </p>
                          </div>
                        </div>
                        <div class="form-group form-material @if($errors->has('new_password')) has-error @endif">
                          <label class="col-sm-3 control-label">Kata sandi baru : </label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" name="new_password" value="">
                            <p class="help-block">
                               {{ $errors->first('new_password') }}
                            </p>
                          </div>
                        </div>
                        <div class="form-group form-material @if($errors->has('new_password_confirmation')) has-error @endif">
                          <label class="col-sm-3 control-label">Konfirmasi kata sandi baru : </label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" name="new_password_confirmation" value="">
                            <p class="help-block">
                               {{ $errors->first('new_password_confirmation') }}
                            </p>
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
