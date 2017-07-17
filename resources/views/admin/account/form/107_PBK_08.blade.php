@extends('admin.layouts.main') @section('css')
<link rel="stylesheet" href="{{asset('css/admin/jquery-wizard.min.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/formValidation.min.css')}}">
 @endsection @section('content')
<!-- Page -->
<div class="page animsition" style="animation-duration: 800ms; opacity: 1;">
	<div class="page-header">
		<h1 class="page-title">Aplikasi Pembukaan Rekening Transaksi secara Elektronik On-line</h1>
	</div>
	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel">
					<div class="panel-heading">
						<div class="panel-title">
							 PERNYATAAN BERTANGGUNGJAWAB ATAS <br>
							 KODE AKSES TRANSAKSI NASABAH (Personal Access Password)
						</div>
					</div>
					<div class="panel-body">
						<form action="index.html" method="post" class="form-horizontal">
							<div class="row">
								<div class="col-sm-6">
									<span><strong>Formulir Nomor : 107.PBK.07</strong></span>
								</div>
								<div class="col-sm-6">
									<p class="pull-right">
										Lampiran Peraturan Kepala Badan Pengawas Perdagangan Berjangka Komoditi <br/>Nomor : 107/BAPPEBTI/PER/11/2013</p>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class="col-sm-10 col-sm-offset-2">
									 Yang mengisi formulir di bawah ini ;<br>
									<br>
									<table>
									<tbody>
									<tr>
										<td>Nama</td>
										<td>: Tarikh</td>
									</tr>
									<tr>
										<td>Tempat/Tanggal Lahir</td>
										<td>: sukabumi, 1 Januari 1996</td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td>: sukabumi 0</td>
									</tr>
									<tr>
										<td>No KTP</td>
										<td>: 10191291201201</td>
									</tr>
									<tr>
										<td>No Account</td>
										<td>
											 : <em>« menyusul »</em>
										</td>
									</tr>
									<!--
									<tr>
										<td>No Demo Account</td>
										<td> :
										<em>&laquo; No Account Demo &raquo;</em>		</td>
									</tr>
									-->
									</tbody>
									</table>
								</div>
							</div>
							<hr/>
							<p class="text-center">
								 Dengan mengisi kolom “YA” di bawah ini, saya menyatakan bahwa saya bertanggungjawab sepenuhnya terhadap kode akses transaksi Nasabah (Personal Access Password) dan tidak menyerahkan kode akses transaksi Nasabah (Personal Access Password) ke pihak lain, terutama kepada pegawai Pialang Berjangka atau pihak yang memiliki kepentingan dengan Pialang Berjangka.
							</p>
							<div class="alert dark alert-primary alert-dismissible text-center" role="alert">
								<!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button> -->
								 PERINGATAN !!!<br>
								 Pialang Berjangka, Wakil Pialang Berjangka,pegawai Pialang Berjangka, atau pihak yang memiliki kepentingan dengan Pialang Berjangka dilarang menerima kode akses transaksi Nasabah (Personal Access Password).
							</div>
							<p class="text-center">
								<b>Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.</b>
							</p>
							<div class="row">
								<div class="col-sm-8 col-sm-offset-4">
									<div class="form-group">
										<label class="col-sm-3 control-label">Pernyataan menerima <span class="text-danger">*)</span></label>
										<div class="col-sm-9">
											<div class="radio-custom radio-primary">
												<input type="radio" id="aproval_yes" name="inputRadios">
												<label for="aproval_yes">Ya</label>
											</div>
											<div class="radio-custom radio-primary">
												<input type="radio" id="aproval_no" name="inputRadios">
												<label for="aproval_yes">Tidak</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Menyatakan pada Tanggal</label>
										<div class="col-sm-9">
											<p class="form-control-static">1 Juni</p>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="panel-footer">
						<button type="submit" class="btn btn-primary " name="button">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Page -->
 @endsection @section('js')
<script src="{{ asset('js/admin/formValidation.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('js/admin/jquery-wizard.min.js') }}"></script>
@endsection
