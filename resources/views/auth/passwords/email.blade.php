@extends('layouts.login')

@section('meta')
<title>Forgot Password | Remark Material Admin Template</title>
@endsection

@section('css')
	<link rel="stylesheet" href="{{ asset('css/admin/forgot-password.min.css') }}">
@endsection

@section('content')
<body class="page-forgot-password layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
      <h2>Forgot Your Password ?</h2>
      <p>Input your registered email to reset your password</p>

      <form method="post" role="form" autocomplete="off" action="{{ route('password.email') }}">
	  {{ csrf_field() }}
        <div class="form-group form-material floating">
          <input type="email" class="form-control empty" id="inputEmail" name="email">
          <label class="floating-label" for="inputEmail">Your Email</label>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Reset Your Password</button>
        </div>
      </form>

      <footer class="page-copyright">
        <p>Copyright &copy; {{ date('Y') }} All RIGHT RESERVED.</p>
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
