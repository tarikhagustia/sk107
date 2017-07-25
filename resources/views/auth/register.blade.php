@extends('layouts.login')

@section('meta')
<title>Register | Remark Material Admin Template</title>
@endsection

@section('css')
	<link rel="stylesheet" href="{{ asset('css/admin/register.min.css') }}">
@endsection
<style typle="text/css">
	.page-register:before{
	 background-image:url({{asset('img/admin/login.jpg')}});
	 }
</style>
@section('content')
<body class="page-register layout-full page-dark">
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
	  data-animsition-out="fade-out">
		<div class="page-content vertical-align-middle">
		  <div class="brand">
			<img class="brand-img" src="{{ asset('img/admin/logo.png') }}" alt="...">
			<h2 class="brand-text">{{config('settings.company_name')}}</h2>
		  </div>
		  <p>Silahkan mendaftar</p>
		  <form method="POST" role="form" autocomplete="off" action="{{ route('register') }}">
		  {{ csrf_field() }}
			<div class="form-group form-material floating {{ $errors->has('name') ? ' has-error' : '' }}">
			  <input type="text" class="form-control empty" id="inputName" name="name">
				<label class="floating-label" for="inputName">Nama lengkap</label>
				@if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
			</div>

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
				<label class="floating-label" for="inputPassword">Kata sandi</label>
				@if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
			</div>

			<div class="form-group form-material floating {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
			  <input type="password" class="form-control empty" id="inputRepassword" name="password_confirmation">
				<label class="floating-label" for="inputRepassword">Ulangi kata sandi</label>
				@if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
			</div>

			<div class="form-group form-material floating {{ $errors->has('phone') ? ' has-error' : '' }}">
			  <input type="text" class="form-control empty" id="inputPhone" name="phone">
				<label class="floating-label" for="inputPhone">Nomor telepon</label>
				@if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
			</div>

			<button type="submit" class="btn btn-primary btn-block">Daftar</button>
		  </form>
		  <p>Sudah punya akses untuk masuk ? silahkan <a href="{{ route('login') }}">Masuk</a></p>

		  <footer class="page-copyright page-copyright-inverse">
			<p>Copyright &copy; {{config('settings.company_name')}} {{ date('Y') }}.</p>
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
