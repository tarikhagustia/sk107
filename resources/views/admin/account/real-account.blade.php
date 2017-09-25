@extends('admin.layouts.main')

@section('css')
<link rel="stylesheet" href="{{asset('vendor/formvalidation/formValidation.min.css')}}">
@endsection

@section('content')
<!-- Page -->
<div class="page">
	<div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-md-12">
              <!-- Example Basic -->
              <div class="example-wrap">
                <h4 class="example-title">reals Account</h4>
                <div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Request Time</th>
						<th>Login</th>
						<th>Password</th>
						<th>Status</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					  @if(!empty($reals))
                      <tr>
                        <td>1</td>
                        <td>{{$reals->nama}}</td>
                        <td>{{$email}}</td>
                        <td>{{Carbon::parse($reals->created_at)->format('d-m-Y H:i:s')}}</td>
						<td>{{$reals->account_number}}</td>
						<td>
						@if($reals->agreement == 'ya')
							{{$reals->account_password}}
						@else
							************
						@endif
						</td>
						<td>
						@if($reals->status == 'approved')
							<span class="label label-success">Active</span>
						@elseif($reals->status == 'rejected')
							<span class="label label-danger">Rejected</span>
						@elseif($reals->status == 'pending')
							<span class="label label-default">Pending</span>
						@elseif($reals->status == 'filling' || $reals->status == 'request')
							<span class="label label-primary">On Process</span>								
						@endif
						</td>
						<td>
						@if($reals->agreement == 'tidak')
							<div class="btn btn-primary btn-block buttons" data-toggle="modal" data-order="{{$reals->order_number}}" data-name="{{$reals->nama}}" data-tempat="{{$reals->tempat_lahir}}" data-dob="{{$reals->dob}}" data-alamat="{{$reals->alamat}}" data-tipe_id="{{$reals->tipe_id}}" data-no_id="{{$reals->no_id}}" data-account="{{$reals->account_number}}" data-postcode="{{$reals->kode_pos}}" data-target="#agreement">Persetujuan</div>
						@else
							<a class="btn btn-primary btn-block buttons" href="{{url('admin/account/update-data-account/'.$reals->id)}}" style="text-decoration:none">Update Data</a>
						@endif
						</td>
                      </tr>
					  @endif
                    </tbody>
                  </table>
				  <br>
				  <p>*) Silahkan klik tombol persetujuan untuk menampilkan password</p>
				  @if($acc->status == 'approved')
				  @else
					<div class="col-md-3">
					  <a href="{{ url('admin/account/real-account') }}" class="btn btn-primary btn-block" >Request Account</a>
				    </div>  
				  @endif
				  
				  @if(!empty($reals))
				  <br>
				  <br>
					  <h4 class="example-title">Dokumen Pernyataan</h4>
					<table class="table">
						<tbody>
							<tr>
								<td>
									Profile Perusahaan
								</td>
								<td>
									<a class="btn btn-primary" href="{{asset($path[0])}}" style="text-decoration: none;">Download</a>
								</td>
							</tr>
							<tr>
								<td>
									Pernyataan Telah Melakukan Simulasi Perdagangan Berjangka
								</td>
								<td>
									<a class="btn btn-primary" href="{{asset($path[1])}}" style="text-decoration: none;">Download</a>
								</td>
							</tr>
							@if($is_active == 'yes')
							<tr>
								<td>
									Pernyataan Telah Berpengalaman Dalam Melaksanakan Transaksi Perdagangan Berjangka
								</td>
								<td>
									<a class="btn btn-primary" href="{{asset($path[2])}}" style="text-decoration: none;">Download</a>
								</td>
							</tr>
							@else
							@endif
							<tr>
								<td>
									Form Aplikasi Pembukaan Rekening Transaksi Secara Elektronik On-Line
								</td>
								<td>
									<a class="btn btn-primary" href="{{asset($path[3])}}" style="text-decoration: none;">Download</a>
								</td>
							</tr>
							<tr>
								<td>
									Dokumen Pemberitahuan Adanya Resiko Yang Harus Disampaikan Oleh Pialang Berjangka Untuk Transaksi Kontrak Berjangka
								</td>
								<td>
									<a class="btn btn-primary" href="{{asset($path[4])}}" style="text-decoration: none;">Download</a>
								</td>
							</tr>
							<tr>
								<td>
									Perjanjian Pemberian Amanat Secara Elektronik On-Line Untuk Transaksi Kontrak Berjangka
								</td>
								<td>
									<a class="btn btn-primary" href="{{asset($path[5])}}" style="text-decoration: none;">Download</a>
								</td>
							</tr>
							<tr>
								<td>
									Peraturan Perdagangan (Trading Rules) dalam Sistem Aplikasi Penerimaan Nasabah Secara Elektronik On-Line
								</td>
								<td>
									<a class="btn btn-primary" href="{{asset($path[6])}}" style="text-decoration: none;">Download</a>
								</td>
							</tr>
							<tr>
								<td>
									Pernyataan Pembukaan Rekening
								</td>
								<td>
									<a class="btn btn-primary" href="{{asset($path[7])}}" style="text-decoration: none;">Download</a>
								</td>
							</tr>
							<tr>
								<td>
									Pernyataan Bertanggung Jawab Atas Kode Akses Transaksi Nasabah (Personal Access Password)
								</td>
								<td>
									<a class="btn btn-primary" href="{{asset($path[8])}}" style="text-decoration: none;">Download</a>
								</td>
							</tr>
						</tbody>	
					</table>
					@endif
                </div>
              </div>
              <!-- End Example Basic -->
            </div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
			<div id="agreement" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog" style="width:80%;">
								<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
												<br><br>
												<div class="pull-left" style="font-size:11px;font-weight:700;">
													<p>Formulir Nomor : 107.PBK.07</p>
												</div>
												<div class="pull-right" style="font-size:11px;text-align:right;">
													Lampiran Peraturan Kepala Badan Pengawas<br>Perdagangan Berjangka Komoditi<br>Nomor : 107/BAPPEBTI/PER/11/2013
												</div>
											</div>
											<div class="modal-body">
												<div class="row row-lg">
													<div class="col-sm-12">
														<div class="example-wrap">
															<!--<p style="font-size=11px;">Nasabah wajib mengisi Surat Pernyataan Telah Melakukan Simulasi Perdagangan Berjangka yang dilakukan setelah Nasabah dinyatakan lulus melakukan simulasi Perdagangan Berjangka oleh Pialang Berjangka sebagaimana yang ada di Formulir Nomor : 107.PBK.02.1</p>-->
															<h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">PERNYATAAN BERTANGGUNG JAWAB ATAS KODE AKSES TRANSAKSI NASABAH <i>(Personal Access Password)</i></h4>
															<hr>
															<div class="example">
																	<div data-role="container" class="scrollable-container" style="height: 100px;">
																		<div data-role="content" class="scrollable-content" style="height: 100px;">
																			Yang mengisi formulir di bawah ini ;<br>
																			<br>
																			<table>
																				<tbody>
																					<tr>
																						<td>Nama</td>
																						<td>: <span id="nama"></span></td>
																					</tr>
																					<tr>
																						<td>Tempat/Tanggal Lahir</td>
																						<td>: <span id="tempat"></span>,<span id="tgl"></span></td>
																					</tr>
																					<tr>
																						<td>Alamat</td>
																						<td>: <span id="alamat"></span></td>
																					</tr>
																					<tr>
																						<td>Kode pos</td>
																						<td>: <span id="postcode"></span></td>
																					</tr>
																					<tr>
																						<td>No <span id="tipe"></span></td>
																						<td>: <span id="no"></span></td>
																					</tr>
																					<tr>
																						<td>No Account</td>
																						<td>
																							 : <span id="login"></span>
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
															</div>	
														</div>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<p align="justify">Dengan mengisi kolom “YA” di bawah ini, saya menyatakan bahwa saya bertanggung jawab sepenuhnya terhadap kode akses transaksi Nasabah <i>(Personal Access Password)</i> dan tidak menyerahkan kode akses transaksi Nasabah <i>(Personal Access Password)</i> ke pihak lain, terutama kepada pegawai Pialang Berjangka atau pihak yang memiliki kepentingan dengan Pialang Berjangka.</p>
												<div class="alert dark alert-primary alert-dismissible text-center" role="alert">
																	<!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													  </button> -->
																	 PERINGATAN !!!<br>
																	 Pialang Berjangka, Wakil Pialang Berjangka,pegawai Pialang Berjangka, atau pihak yang memiliki kepentingan dengan Pialang Berjangka dilarang menerima kode akses transaksi Nasabah <i>(Personal Access Password)</i>.
																</div>
																<p align="justify">
																	Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.
																</p>
												<form class="form-horizontal" method="POST" id="agreementForm" action="{{ url('admin/account/real-account-user') }}">
												<input type="hidden" id="order" name="order"></input>
												{{ csrf_field() }}
												<div class="row">
													<div class="col-sm-8 col-sm-offset-4">
														<div class="form-group">
														<label class="col-sm-3 control-label">Peryataan Kebenaran dan tanggung jawab <span class="text-danger">*)</span></label>
															<div class="col-sm-3">

																	<div class="radio-custom radio-primary pull-left">
																		<input type="radio" id="approval_yes" name="approval_yes" value="ya">
																		<label for="aproval_yes">Ya</label>
																	</div>
																	<br>
																	<br>
																	<div class="radio-custom radio-primary pull-left">
																		<input type="radio" id="approval_yes" name="approval_yes" value="tidak">
																		<label for="aproval_no">Tidak</label>
																	</div>
																</div>
														</div>
														<div class="form-group">

															<label class="col-sm-3 control-label">Menyatakan Tanggal</label>
															<div class="col-sm-9">
																<p class="form-control-static pull-left" id="date"></p>
															</div>
														</div>
													</div>

												</div>
													<div class="form-group form-material" style="text-align:center;">	
														<div class="col-sm-12">
															<button disabled type="submit" class="btn btn-primary">Submit </button>
														</div>
													</div>
												</form>
											</div>
								</div>
							</div>
						</div>  					
@endsection

@section('js')
<script src="{{ asset('vendor/formvalidation/formValidation.min.js') }}"></script>
<script src="{{ asset('vendor/formvalidation/bootstrap.min.js') }}"></script>
<script>
	$(document).on("click", ".buttons", function () {		
		var name = $(this).data('name');
		var tempat = $(this).data('tempat');
		var dob = $(this).data('dob');
		var alamat = $(this).data('alamat');
		var tipe_id = $(this).data('tipe_id');
		var no_id = $(this).data('no_id');
		var account = $(this).data('account');
		var order = $(this).data('order');
		var postcode = $(this).data('postcode');
		$("#nama").html(name);
		$("#tempat").html(tempat);
		$("#tgl").html(dob);
		$("#alamat").html(alamat);
		$("#tipe").html(tipe_id);
		$("#no").html(no_id);
		$("#login").html(account);
		$("#order").val(order);
		$("#postcode").html(postcode);
	});
	
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
} 

if(mm<10) {
    mm = '0'+mm
} 

today = dd + '/' + mm + '/' + yyyy;
document.getElementById("date").innerHTML = today;

$(document).ready(function() {
    $('#agreementForm').formValidation({
        framework: 'bootstrap',
        fields: {
			approval_yes: {
                validators: {
                    stringLength: {
                        message: '<br><br>Anda harus menyetujui dan menerima pernyataan diatas',
                        max: 2,
                    }
                }
            }
        }
    });
	$("input:radio").change(function () {$("#approval_yes").prop("disabled", false);});
});
</script>
@endsection