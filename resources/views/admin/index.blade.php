@extends('admin.layouts.main')


@section('content')
<!-- Page -->
  <div class="page">
    <div class="page-content container-fluid">
      <h2>Hallo John doe !</h2>
      <div class="alert alert-warning">
        <p>{{__('admin.alert.warning.welcome-message')}}</p>
      </div>
      <div class="alert alert-info">
        <p>{{__('admin.alert.info.welcome-message')}}</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="widget widget-shadow">
            <div class="widget-header cover overlay">
              <img src="{{asset("img/admin/open-account.png")}}" class="img-responsive" alt="">
              {{-- <div class="cover-background height-200" style="background-image: url('{{asset("img/admin/open-account.png")}}')"></div> --}}
            </div>
            <div class="widget-footer text-center bg-cyan-700 padding-30 height-100">
              <a href="{{ url('admin/demo') }}">
                <div class="row no-space">
                <div class="col-xs-12">
                  <div class="counter counter-inverse">
                    <span class="counter-number">{{ __('admin.opendemoaccount') }}</span>
                  </div>
                </div>
              </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="widget widget-shadow">
            <div class="widget-header cover overlay">
              <img src="{{asset("img/admin/open-real-account.png")}}" class="img-responsive" alt="">
              {{-- <div class="cover-background height-200" style="background-image: url('{{asset("img/admin/open-account.png")}}')"></div> --}}
            </div>
            <div class="widget-footer text-center bg-indigo-600 padding-30 height-100">
              <a href="#">
                <div class="row no-space">
                <div class="col-xs-12">
                  <div class="counter counter-inverse">
                    <span class="counter-number">{{ __('admin.openrealaccount') }}</span>
                  </div>
                </div>
              </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="widget widget-shadow">
            <div class="widget-header cover overlay">
              <img src="{{asset("img/admin/download-metatrader.png")}}" class="img-responsive" alt="">
              {{-- <div class="cover-background height-200" style="background-image: url('{{asset("img/admin/open-account.png")}}')"></div> --}}
            </div>
            <div class="widget-footer text-center bg-blue-400 padding-30 height-100">
              <a href="#">
                <div class="row no-space">
                <div class="col-xs-12">
                  <div class="counter counter-inverse">
                    <span class="counter-number">{{ __('admin.downloadmt4') }}</span>
                  </div>
                </div>
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->
@endsection
