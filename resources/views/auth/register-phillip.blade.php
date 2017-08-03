@extends('layouts.login')

@section('meta')
<title>Register | {{config('settings.company_name')}}</title>
@endsection

@section('css')
	<link rel="stylesheet" href="{{ asset('css/admin/register.min.css') }}">
	<link rel="stylesheet" href="{{asset('css/admin/bootstrap-datepicker.min.css')}}" charset="utf-8">
	<link rel="stylesheet" href="{{ asset('css/admin/formValidation.min.css') }}">
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
		  <p style="color:white;">Silahkan mendaftar</p>
		  <form method="POST" role="form" autocomplete="off" id="form-register" action="{{ route('register') }}">
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
			
			<div class="form-group form-material floating">
			  <select class="form-control" name="status_perkawinan" id="status_perkawinan">
													<option value="tidak kawin">Tidak Kawin</option>
													<option value="kawin">Kawin</option>
													<option value="janda">Janda</option>
													<option value="duda">Duda</option>
                      </select>
				<label class="floating-label" for="inputStatus">Status Perkawinan</label>
			</div>
			
			<div class="form-group form-material floating {{ $errors->has('dob') ? ' has-error' : '' }}">
			  <input type="text" class="form-control datepicker" id="inputDob" name="dob" value="">
				<label class="floating-label" for="inputDob">Tanggal Lahir</label>
				@if ($errors->has('dob'))
                    <span class="help-block">
                        <strong>{{ $errors->first('dob') }}</strong>
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
		  <p style="color:white;">Sudah punya akses untuk masuk ? silahkan <a href="{{ route('login') }}">Masuk</a></p>

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
	<script src="{{asset('js/admin/bootstrap-datepicker.min.js')}}" charset="utf-8"></script>
	<script src="{{asset('js/admin/formValidation.min.js')}}" charset="utf-8"></script>
	<script src="{{asset('js/admin/formvalidation-bootstrap.min.js')}}" charset="utf-8"></script>
	<script>
$(document).ready(function() {
		var today = new Date();
		var date = new Date();
		date.setFullYear( date.getFullYear() - 21 );
		date.setMonth( date.getMonth() + 1 );
		var stat = document.getElementById("status_perkawinan");
		var status = stat.options[stat.selectedIndex].value;
		if(date.getMonth()<10){var limit_month = '0'+date.getMonth();}else{var limit_month = date.getMonth();}
		if(today.getMonth()<10){var today_month = '0'+today.getMonth();}else{var today_month = today.getMonth();}
		if(date.getDate()<10){var limit_date = '0'+date.getDate();}else{var limit_date = date.getDate();}
		if(today.getDate()<10){var today_date = '0'+today.getDate();}else{var today_date = today.getDate();}
		if(status=='tidak kawin'){
			var limit = (date.getFullYear() ) + '-' + (limit_month) + '-' + (limit_date);
		}else{
			var limit = (today.getFullYear() ) + '-' + (today_month) + '-' + (today_date);
		}
	
		const DATEPICKER = $('.datepicker');
		DATEPICKER.each(function(key, item){
			$(item).datepicker({
				format: 'yyyy-mm-dd',
			})
			.on('changeDate', function(e) {
            // Revalidate the date field
            $('#form-register').formValidation('revalidateField', 'dob');
        });
		})
		
	$('#status_perkawinan').change(function () {
		var stat = document.getElementById("status_perkawinan");
		var status = stat.options[stat.selectedIndex].value;
		if(date.getMonth()<10){limit_month = '0'+date.getMonth();}else{limit_month = date.getMonth();}
		if(today.getMonth()<10){today_month = '0'+today.getMonth();}else{today_month = today.getMonth();}
		if(date.getDate()<10){limit_date = '0'+date.getDate();}else{limit_date = date.getDate();}
		if(today.getDate()<10){today_date = '0'+today.getDate();}else{today_date = today.getDate();}
		if(status=='tidak kawin'){
			 limit = (date.getFullYear() ) + '-' + (limit_month) + '-' + (limit_date);
		}else{
			 limit = (today.getFullYear() ) + '-' + (today_month) + '-' + (today_date);
		}
    });
	
	$('#form-register').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            dob: {
                validators: {
                    notEmpty: {
                        message: 'Tanggal lahir harus diisi'
                    },
                    date: {
                        format: 'YYYY-MM-DD',
                        max: limit,
                        message: 'Tanggal lahir tidak memenuhi persyaratan'
                    }
                }
            }
        }
    }).on('change', '[name="status_perkawinan"]', function(e) {

            $('#form-register').formValidation('updateOption', 'dob', 'date', 'max', limit);
        });
});
</script>
@endsection
