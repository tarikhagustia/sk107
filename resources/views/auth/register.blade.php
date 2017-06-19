@extends('layouts.app')

@section('content')
<div class="account-container register">
	<div class="content clearfix">
        @if($errors->has('tos'))
            <div class="alert alert-danger">
                {{ $errors->first('tos') }}
            </div>
        @endif
		<form action="{{route('register')}}" method="post">
		    {{ csrf_field() }}
			<h1>Pendaftaran</h1>

			<div class="login-fields">
				<div class="">
					<label>Jenis Akun</label>
					<select name="account_type" class="login">
                        <option value="cent" data-scenario="real">cent</option>
                        <option value="micro" data-scenario="real">Micro</option>
                        <option value="stand" selected="selected" data-scenario="real">Standard</option>
                        <option value="unlim" data-scenario="real">Unlimited</option>
                        <option value="zero" data-scenario="real">Zero Spread</option>
                        <option value="segreg" data-scenario="real">Segregated</option>
                        <option value="centMT5" data-scenario="real">cent MT5</option>
                        <option value="standMT5" data-scenario="real">Standard MT5</option>
                        <option value="bonus123" data-scenario="real">Bonus $123</option>
                        <option value="partnersw" data-scenario="partner">Partner</option>
                    </select>
                    @if ($errors->has('account_type'))
                    <span class="text-danger"><strong>{{ $errors->first('account_type') }}</strong></span>
                    @endif
				</div> <!-- /field -->

				<div class="field has-error">
					<label for="lastname">Nama Anda</label>
					<input type="text" id="lastname" name="name" value="{{old('name') }}" placeholder="Nama Anda" class="login" />
                    @if ($errors->has('name'))
                    <span class="text-danger"><strong>{{ $errors->first('name') }}</strong></span>
                    @endif
				</div> <!-- /field -->


				<div class="field">
					<label for="email">Alamat Email</label>
					<input type="text" id="email" name="email"  value="{{old('email') }}" placeholder="Email" class="login"/>
                    @if ($errors->has('email'))
                    <span class="text-danger"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
				</div> <!-- /field -->
			</div> <!-- /login-fields -->

			<div class="login-actions">

				<span class="login-checkbox">
					<input id="Field" name="tos" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Saya setuju dengan persyaratan & Persetujuan.</label>
				</span>


				<button class="button btn btn-primary btn-large">Daftar</button>

			</div> <!-- .actions -->

		</form>

	</div> <!-- /content -->

</div> <!-- /account-container -->
@endsection
