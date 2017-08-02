@extends('layouts.login')

@section('meta')
<title>IMS - {{config('settings.company_name')}}</title>
@endsection

@section('css')
	<link rel="stylesheet" href="{{ asset('css/admin/login.min.css') }}">
@endsection

<style typle="text/css">
	.page-login:before{background-image:url({{asset('img/admin/login.jpg')}})
</style>


@section('content')
<body class="page-login layout-full page-dark">
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
	  data-animsition-out="fade-out">
		<div class="page-content vertical-align-middle">
		  <div class="brand">
			<img class="brand-img" src="{{ asset('img/admin/logo.png') }}" alt="...">
			<h2 class="brand-text">{{config('settings.company_name')}}</h2>
		  </div>
		  <p>Masuk ke Portal</p>
		  <form method="POST" role="form" autocomplete="off" action="{{ route('login') }}">
		  {{ csrf_field() }}

			<div class="form-group form-material floating {{ $errors->has('email') ? ' has-error' : '' }}">
			  <input type="email" class="form-control empty" id="inputEmail" name="email">
				<label class="floating-label" for="inputEmail">Email</label>
				@if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
			</div>

			<div class="form-group form-material floating {{ $errors->has('password') ? ' has-error' : '' }}">
			  <input type="password" class="form-control empty" id="inputPassword" name="password">
				<label class="floating-label" for="inputPassword">Password</label>
				@if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
			</div>

			<div class="form-group clearfix">
			  <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
				<input type="checkbox" id="inputCheckbox" name="remember">
				<label for="inputCheckbox">ingat saya</label>
			  </div>
			  <a class="pull-right" href="{{ url('password/reset') }}">lupa password ?</a>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Masuk</button>
		  </form>
		  <p style="color:white;">Belum punya akun ? silahkan <a href="{{ route('register') }}">Mendaftar</a></p>


		  <footer class="page-copyright page-copyright-inverse">
			<p>Copyright  &copy; {{config('settings.company_name')}} {{ date('Y') }}</p>
			<div class="social">
			  <a href="javascript:void(0)">
				<i class="icon bd-twitter" aria-hidden="true"></i>
			  </a>
			  <a href="javascript:void(0)">
				<i class="icon bd-facebook" aria-hidden="true"></i>
			  </a>
			  <a href="javascript:void(0)">
				<i class="icon bd-dribbble" aria-hidden="true"></i>
			  </a>
			</div>
		  </footer>
		</div>
	</div>
@endsection

@section('js')
	<script src="{{ asset('js/admin/jquery.placeholder.min.js') }}"></script>
@endsection
