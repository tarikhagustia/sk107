@extends('admin.layouts.main')


@section('content')
<!-- Page -->
<div class="page">
	<div class="page-header">
		<h1 class="page-title">Permintaan anda telah kami terima</h1>
	</div>
	<div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
					<p>
						Hallo {{Auth::user()->name}} terimakasih telah meluangkan waktu untuk mengisi form - form persyaratan dari kami, selanjutnya kami akan memproses permiintaan pembukaan akun anda secepat mungkin
						<p>
							terimakasih,
						</p>
						<br>
						{{config('settings.company_name')}}
					</p>
        </div>
      </div>
  </div>
</div>
  <!-- End Page -->
@endsection
